// Add event listener to contact buttons
document.querySelectorAll('#contact-btn').forEach((btn) => {
    btn.addEventListener('click', () => {
        // Open contact form or send email
        alert('Contact form or email sent!');
    });
});
