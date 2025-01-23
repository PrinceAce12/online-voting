// script.js
document.addEventListener('DOMContentLoaded', function() {
    const showLoginBtn = document.getElementById('showLogin');
    const loginPopup = document.getElementById('loginPopup');

    // Show the login popup when the button is clicked
    showLoginBtn.addEventListener('click', function() {
        loginPopup.classList.add('active');
    });

    // Optionally, you can add functionality to close the popup when clicking outside the form
    loginPopup.addEventListener('click', function(e) {
        if (e.target === loginPopup) {
            loginPopup.classList.remove('active');
        }
    });
});
