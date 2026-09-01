/* Shared AJAX submission for the modern hero and popup enquiry forms.
 * Every form receives the same JSON error handling and success redirect.
 */
document.addEventListener('DOMContentLoaded', function () {
  function showFieldError(form, field, message) {
    var input = field === 'mobile'
      ? form.querySelector('input[type="tel"]:not([name="mobile"])') || form.elements.mobile
      : form.elements[field];
    var id = input && input.id;
    var slot = id ? form.querySelector('.field-error[data-for="' + id + '"]') : null;

    if (slot) {
      slot.textContent = message || '';
      slot.classList.toggle('show', Boolean(message));
    }
    if (input) input.classList.toggle('error', Boolean(message));
  }

  function clearErrors(form) {
    form.querySelectorAll('.field-error').forEach(function (slot) {
      slot.textContent = '';
      slot.classList.remove('show');
    });
    form.querySelectorAll('input.error, textarea.error, select.error').forEach(function (input) {
      input.classList.remove('error');
    });
  }

  function setLoading(button, loading) {
    if (!button) return;
    if (!button.dataset.originalText) button.dataset.originalText = button.textContent.trim();
    button.disabled = loading;
    button.classList.toggle('is-loading', loading);
    button.textContent = loading ? 'Submitting...' : button.dataset.originalText;
  }

  function initializePhoneInput(phoneInput) {
    if (!phoneInput || !window.intlTelInput) return null;
    var iti = window.intlTelInput(phoneInput, {
      initialCountry: 'auto',
      separateDialCode: true,
      autoPlaceholder: 'off',
      preferredCountries: ['in', 'ae', 'us', 'gb', 'sg', 'sa', 'au'],
      geoIpLookup: function (callback) {
        fetch('https://ipapi.co/json/')
          .then(function (response) { return response.json(); })
          .then(function (data) { callback(data && data.country_code ? data.country_code.toLowerCase() : 'in'); })
          .catch(function () { callback('in'); });
      },
      utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.5.3/js/utils.min.js'
    });
    phoneInput.addEventListener('input', function () {
      phoneInput.value = phoneInput.value.replace(/\D/g, '').slice(0, 12);
    });
    return iti;
  }

  function setupForm(form) {
    if (form.dataset.enquiryHandlerAttached === 'true') return;
    form.dataset.enquiryHandlerAttached = 'true';

    var nameInput = form.elements.name;
    var emailInput = form.elements.email;
    var dateInput = form.elements.date;
    var travellersInput = form.elements.peoples;
    var captchaInput = form.elements.answer;
    var mobileInput = form.elements.mobile;
    var phoneInput = form.querySelector('input[type="tel"]:not([name="mobile"])');
    var button = form.querySelector('button[type="submit"], input[type="submit"]');
    var iti = initializePhoneInput(phoneInput);

    if (dateInput && dateInput.type === 'date') {
      var today = new Date();
      dateInput.min = today.getFullYear() + '-' + String(today.getMonth() + 1).padStart(2, '0') + '-' + String(today.getDate()).padStart(2, '0');
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      clearErrors(form);

      var phoneDigits = phoneInput ? phoneInput.value.replace(/\D/g, '').slice(0, 12) : (mobileInput ? mobileInput.value.replace(/\D/g, '') : '');
      if (phoneInput) phoneInput.value = phoneDigits;

      var errors = {};
      if (!nameInput || !nameInput.value.trim()) errors.name = 'Full Name is required.';
      if (!phoneDigits) errors.mobile = 'WhatsApp number is required.';
      else if (phoneDigits.length < 6 || phoneDigits.length > 12) errors.mobile = 'Enter a valid WhatsApp number.';
      if (dateInput && !dateInput.value.trim()) errors.date = 'Travel date is required.';
      if (travellersInput && !travellersInput.value.trim()) errors.peoples = 'Travellers is required.';
      if (emailInput && emailInput.value.trim() && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) errors.email = 'Enter a valid email address.';
      if (captchaInput && !captchaInput.value.trim()) errors.answer = 'Answer is required.';

      if (Object.keys(errors).length) {
        Object.keys(errors).forEach(function (field) { showFieldError(form, field, errors[field]); });
        return;
      }

      if (mobileInput && phoneInput) {
        var country = iti && iti.getSelectedCountryData ? iti.getSelectedCountryData() : null;
        mobileInput.value = country && country.dialCode ? '+' + country.dialCode + ' ' + phoneDigits : phoneDigits;
      }

      var formData = new FormData(form);
      formData.set('ajax', '1');
      setLoading(button, true);

      fetch(form.action, { method: 'POST', body: formData })
        .then(function (response) {
          return response.json().catch(function () { return null; }).then(function (data) {
            return { ok: response.ok, data: data };
          });
        })
        .then(function (result) {
          if (result.ok && result.data && result.data.success) {
            window.location.href = 'thanks.php';
            return;
          }
          if (result.data && result.data.errors) {
            Object.keys(result.data.errors).forEach(function (field) {
              showFieldError(form, field, result.data.errors[field]);
            });
            return;
          }
          showFieldError(form, 'name', 'Unable to submit right now. Please try again.');
        })
        .catch(function () {
          showFieldError(form, 'name', 'Unable to submit right now. Please try again.');
        })
        .finally(function () { setLoading(button, false); });
    });
  }

  document.querySelectorAll('form.hero-form, form.enquiry-form').forEach(setupForm);
});
