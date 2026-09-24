/* Shared validation for the site-wide "legacy" booking-widget enquiry forms
   (the unclassed forms posting to con_enq.php that appear as a desktop/mobile
   pair on 24 content pages - temple pages, policy pages, contact-us, etc).
   These forms previously had zero client-side validation and relied only on
   native `required` on two fields. This adds the same validation rules,
   wording, and single-error-slot presentation already used by con_enq.php's
   server-side response, without changing the form's submit target or the
   normal full-page POST + redirect flow: on a valid submission this script
   does NOT intercept the submit - the browser posts to con_enq.php exactly
   as before. */
document.addEventListener('DOMContentLoaded', function() {
  var forms = document.querySelectorAll(
    'form[method="post"][action="con_enq.php"]:not(.hero-form):not(.enquiry-form):not(.mhc-form)'
  );
  if (!forms.length) return;

  var isValidEmail = function(val) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
  };

  forms.forEach(function(form) {
    var errorSlot = form.querySelector('.form-error');
    var submitBtn = form.querySelector('button:not([type]), button[type="submit"], input[type="submit"]');

    // The hand-built VIP landing-page forms use the shared handler but do not
    // include a legacy .form-error element in their markup. Add one so
    // client-side/server validation feedback is visible without changing
    // their normal POST/AJAX submission contract.
    if (!errorSlot && form.classList.contains('vip-enquiry-form')) {
      errorSlot = document.createElement('div');
      errorSlot.className = 'form-error';
      errorSlot.setAttribute('role', 'alert');
      errorSlot.setAttribute('aria-live', 'polite');
      errorSlot.hidden = true;
      form.insertBefore(errorSlot, submitBtn);
    }

    var showError = function(message, field) {
      if (errorSlot) {
        errorSlot.textContent = message;
        errorSlot.hidden = false;
      }
      form.querySelectorAll('.error').forEach(function(el) {
        el.classList.remove('error');
      });
      if (field) {
        field.classList.add('error');
        field.focus();
      }
    };

    var clearError = function() {
      if (errorSlot) {
        errorSlot.textContent = '';
        errorSlot.hidden = true;
      }
      form.querySelectorAll('.error').forEach(function(el) {
        el.classList.remove('error');
      });
    };

    form.addEventListener('submit', function(e) {
      clearError();
      e.preventDefault();

      var nameField = form.elements['name'];
      var mobileField = form.elements['mobile'];
      var dateField = form.elements['date'];
      var peoplesField = form.elements['peoples'];
      var emailField = form.elements['email'];
      var answerField = form.elements['answer'];

      var nameVal = nameField ? nameField.value.trim() : '';
      var mobileDigits = mobileField ? mobileField.value.replace(/\D/g, '') : '';
      var dateVal = dateField ? dateField.value.trim() : '';
      var peoplesVal = peoplesField ? peoplesField.value.trim() : '';
      var emailVal = emailField ? emailField.value.trim() : '';
      var answerVal = answerField ? answerField.value.trim() : '';

      if (!nameVal) {
        showError('Full Name is required.', nameField);
        return;
      }
      if (!mobileDigits) {
        showError('WhatsApp number is required.', mobileField);
        return;
      }
      if (mobileDigits.length < 6 || mobileDigits.length > 12) {
        showError('Enter a valid WhatsApp number.', mobileField);
        return;
      }
      if (dateField && !dateVal) {
        showError('Travel date is required.', dateField);
        return;
      }
      if (peoplesField && !peoplesVal) {
        showError('Travellers is required.', peoplesField);
        return;
      }
      if (emailVal && !isValidEmail(emailVal)) {
        showError('Enter a valid email address.', emailField);
        return;
      }
      if (answerField && !answerVal) {
        showError('Answer is required.', answerField);
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        if (!submitBtn.dataset.originalText) {
          submitBtn.dataset.originalText = submitBtn.tagName === 'INPUT' ? submitBtn.value : submitBtn.textContent;
        }
        if (submitBtn.tagName === 'INPUT') {
          submitBtn.value = 'Submitting...';
        } else {
          submitBtn.textContent = 'Submitting...';
        }
      }
      var formData = new FormData(form);
      formData.set('ajax', '1');

      fetch(form.action, { method: 'POST', body: formData })
        .then(function(response) {
          return response.json().catch(function() { return null; }).then(function(payload) {
            return { ok: response.ok, payload: payload };
          });
        })
        .then(function(result) {
          if (result.ok && result.payload && result.payload.success) {
            window.location.href = 'thanks.php';
            return;
          }

          if (result.payload && result.payload.errors) {
            var firstField = Object.keys(result.payload.errors)[0];
            showError(result.payload.errors[firstField], form.elements[firstField]);
            return;
          }

          showError('Unable to submit right now. Please try again.', null);
        })
        .catch(function() {
          showError('Unable to submit right now. Please try again.', null);
        })
        .finally(function() {
          if (!submitBtn) return;
          submitBtn.disabled = false;
          if (submitBtn.tagName === 'INPUT') {
            submitBtn.value = submitBtn.dataset.originalText || 'Submit';
          } else {
            submitBtn.textContent = submitBtn.dataset.originalText || 'Submit';
          }
        });
    });
  });
});
