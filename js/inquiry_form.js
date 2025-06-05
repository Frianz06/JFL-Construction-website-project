  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[method="POST"]'); // your form selector
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', function() {
      // Disable button immediately on submit to prevent double click
      submitBtn.disabled = true;

      // Optionally, change button text to show loading state
      submitBtn.innerText = 'Sending...';
    });
  });