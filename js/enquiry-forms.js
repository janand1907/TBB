/* Shared hero-form / enquiry-form JS
   Extracted from an identical inline <script> block previously duplicated
   verbatim across 11 pages (index.php, about-us.php, and 9 package/guide
   pages). Wires up intl-tel-input, client-side validation, and the
   fetch-based submit handler for any page containing .hero-form and/or
   .enquiry-form. Behaviour is unchanged from the original inline version. */
document.addEventListener('DOMContentLoaded', function() {
      const isValidEmail = (val) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);

      const showError = (id, message) => {
        const err = document.querySelector(`.field-error[data-for="${id}"]`);
        const input = document.getElementById(id);
        if (err) {
          err.textContent = message || '';
          err.classList.toggle('show', !!message);
        }
        if (input) {
          input.classList.toggle('error', !!message);
        }
      };

      const clearErrors = (form) => {
        if (!form) return;
        form.querySelectorAll('.field-error').forEach(el => el.classList.remove('show'));
        form.querySelectorAll('input.error, textarea.error').forEach(el => el.classList.remove('error'));
      };

      const setMinDate = (input) => {
        if (!input) return;
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');
        const minDate = `${yyyy}-${mm}-${dd}`;
        input.setAttribute('min', minDate);
        input.dataset.minDate = minDate;
      };

      const isValidDateString = (val) => /^\d{4}-\d{2}-\d{2}$/.test(val);

      const initIntlInput = (input) => {
        if (!input || !window.intlTelInput) return null;
        const instance = window.intlTelInput(input, {
          initialCountry: 'auto',
          separateDialCode: true,
          autoPlaceholder: 'off',
          preferredCountries: ['in', 'ae', 'us', 'gb', 'sg', 'sa', 'au'],
          geoIpLookup: function(callback) {
            fetch("https://ipapi.co/json/")
              .then((res) => res.json())
              .then((data) => callback((data && data.country_code) ? data.country_code.toLowerCase() : ''))
              .catch(() => callback("in"));
          },
          utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js'
        });
        input.addEventListener('input', function() {
          input.value = input.value.replace(/\D/g, '').slice(0, 12);
        });
        return instance;
      };

      const setLoading = (btn, isLoading) => {
        if (!btn) return;
        if (!btn.dataset.originalText) {
          btn.dataset.originalText = btn.textContent.trim();
        }
        if (isLoading) {
          btn.classList.add('is-loading');
          btn.innerHTML = '<span class="btn-loader"></span>Submitting...';
        } else {
          btn.classList.remove('is-loading');
          btn.textContent = btn.dataset.originalText || 'Submit';
        }
      };

      const setupForm = (form, ids) => {
        if (!form) return;
        const nameInput = document.getElementById(ids.name);
        const phoneInput = document.getElementById(ids.phone);
        const mobileInput = document.getElementById(ids.mobile);
        const emailInput = document.getElementById(ids.email);
        const travellersInput = document.getElementById(ids.travellers);
        const dateInput = document.getElementById(ids.date);
        const messageInput = document.getElementById(ids.message);
        const captchaInput = document.getElementById(ids.captcha);
        const submitBtn = form.querySelector('button[type="submit"]');
        const itiInstance = initIntlInput(phoneInput);
        const phoneGroup = phoneInput ? phoneInput.closest('.input-group') : null;

        setMinDate(dateInput);
        if (phoneGroup && phoneInput) {
          const syncPhoneGroup = () => {
            phoneGroup.classList.toggle('has-value', !!phoneInput.value.trim());
          };
          phoneInput.addEventListener('focus', () => phoneGroup.classList.add('is-focused'));
          phoneInput.addEventListener('blur', () => phoneGroup.classList.remove('is-focused'));
          phoneInput.addEventListener('input', syncPhoneGroup);
          syncPhoneGroup();
        }

        form.addEventListener('submit', function(e) {
          e.preventDefault();
          clearErrors(form);

          const nameVal = nameInput ? nameInput.value.trim() : '';
          const emailVal = emailInput ? emailInput.value.trim() : '';
          const dateVal = dateInput ? dateInput.value.trim() : '';
          const travVal = travellersInput ? travellersInput.value.trim() : '';
          const captchaVal = captchaInput ? captchaInput.value.trim() : '';
          const number = phoneInput ? phoneInput.value.replace(/\D/g, '').slice(0, 12) : '';
          if (phoneInput) phoneInput.value = number;

          let hasError = false;
          if (!nameVal) {
            showError(ids.name, 'Full Name is required.');
            hasError = true;
          }
          if (!number) {
            showError(ids.phone, 'WhatsApp number is required.');
            hasError = true;
          } else if (number.length < 6 || number.length > 12) {
            showError(ids.phone, 'Enter a valid WhatsApp number.');
            hasError = true;
          }
          if (!dateVal) {
            showError(ids.date, 'Travel date is required.');
            hasError = true;
          } else if (!isValidDateString(dateVal)) {
            showError(ids.date, 'Enter a valid date.');
            hasError = true;
          } else if (dateInput && dateInput.dataset.minDate && dateVal < dateInput.dataset.minDate) {
            showError(ids.date, 'Travel date cannot be in the past.');
            hasError = true;
          }
          const travNum = Number(travVal);
          if (!travVal || Number.isNaN(travNum) || travNum < 1) {
            showError(ids.travellers, 'Travellers is required.');
            hasError = true;
          }
          if (emailVal && !isValidEmail(emailVal)) {
            showError(ids.email, 'Enter a valid email address.');
            hasError = true;
          }
          if (!captchaVal) {
            showError(ids.captcha, 'Answer is required.');
            hasError = true;
          }
          if (hasError) return;

          let code = '';
          if (itiInstance && typeof itiInstance.getSelectedCountryData === 'function') {
            const data = itiInstance.getSelectedCountryData();
            if (data && data.dialCode) {
              code = `+${data.dialCode}`;
            }
          }
          if (mobileInput) {
            mobileInput.value = `${code} ${number}`.trim();
          }

          if (submitBtn) {
            submitBtn.disabled = true;
            setLoading(submitBtn, true);
          }
          const formData = new FormData(form);
          fetch(form.action, {
              method: 'POST',
              body: formData
            })
            .then(async resp => {
              let data = null;
              try {
                data = await resp.json();
              } catch (err) {
                data = null;
              }
              if (resp.ok) {
                window.location.href = 'thanks.php';
                return;
              }
              if (resp.status === 422 && data && data.errors) {
                const fieldMap = {
                  name: ids.name,
                  mobile: ids.phone,
                  email: ids.email,
                  date: ids.date,
                  peoples: ids.travellers,
                  message: ids.message,
                  answer: ids.captcha
                };
                Object.keys(data.errors).forEach((field) => {
                  const id = fieldMap[field];
                  if (id) showError(id, data.errors[field]);
                });
              } else {
                showError(ids.name, 'Unable to submit right now. Please try again.');
              }
            })
            .catch(() => {
              showError(ids.name, 'Unable to submit right now. Please try again.');
            })
            .finally(() => {
              if (submitBtn) {
                submitBtn.disabled = false;
                setLoading(submitBtn, false);
              }
            });
        });
      };

      setupForm(document.querySelector('.hero-form'), {
        name: 'hf-name',
        phone: 'hf-whatsapp',
        mobile: 'hf-mobile',
        email: 'hf-email',
        travellers: 'hf-travellers',
        date: 'hf-date',
        message: 'hf-message',
        captcha: 'hf-captcha',
        captchaQuestion: 'hf-captcha-question'
      });

      setupForm(document.querySelector('.enquiry-form'), {
        name: 'ep-name',
        phone: 'ep-whatsapp',
        mobile: 'ep-mobile',
        email: 'ep-email',
        travellers: 'ep-travellers',
        date: 'ep-date',
        message: 'ep-message',
        captcha: 'ep-captcha',
        captchaQuestion: 'ep-captcha-question'
      });
    });
