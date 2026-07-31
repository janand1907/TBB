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
    var submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');

    var showError = function(message, field) {
      if (errorSlot) {
        errorSlot.textContent = message;
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
      }
      form.querySelectorAll('.error').forEach(function(el) {
        el.classList.remove('error');
      });
    };

    form.addEventListener('submit', function(e) {
      clearError();

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
        e.preventDefault();
        showError('Full Name is required.', nameField);
        return;
      }
      if (!mobileDigits) {
        e.preventDefault();
        showError('WhatsApp number is required.', mobileField);
        return;
      }
      if (mobileDigits.length < 6 || mobileDigits.length > 12) {
        e.preventDefault();
        showError('Enter a valid WhatsApp number.', mobileField);
        return;
      }
      if (dateField && !dateVal) {
        e.preventDefault();
        showError('Travel date is required.', dateField);
        return;
      }
      if (peoplesField && !peoplesVal) {
        e.preventDefault();
        showError('Travellers is required.', peoplesField);
        return;
      }
      if (emailVal && !isValidEmail(emailVal)) {
        e.preventDefault();
        showError('Enter a valid email address.', emailField);
        return;
      }
      if (answerField && !answerVal) {
        e.preventDefault();
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
      // Valid: let the browser submit the form normally (no preventDefault).
    });
  });
});
