// ===== REAL-TIME FORM VALIDATION =====
document.addEventListener("DOMContentLoaded", function () {
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const messageInput = document.getElementById('message');
    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const messageError = document.getElementById('messageError');

    if (!nameInput) return;

    // ===== NAME VALIDATION =====
    nameInput.addEventListener('input', function () {
        if (this.value.trim().length < 2) {
            this.classList.add('invalid');
            this.classList.remove('valid');
            if (nameError) nameError.textContent = 'Name must be at least 2 characters';
        } else {
            this.classList.add('valid');
            this.classList.remove('invalid');
            if (nameError) nameError.textContent = '';
        }
    });

    // ===== EMAIL VALIDATION =====
    emailInput.addEventListener('input', function () {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(this.value.trim())) {
            this.classList.add('invalid');
            this.classList.remove('valid');
            if (emailError) emailError.textContent = 'Please enter a valid email';
        } else {
            this.classList.add('valid');
            this.classList.remove('invalid');
            if (emailError) emailError.textContent = '';
        }
    });

    // ===== MESSAGE VALIDATION =====
    messageInput.addEventListener('input', function () {
        if (this.value.trim().length < 10) {
            this.classList.add('invalid');
            this.classList.remove('valid');
            if (messageError) messageError.textContent = 'Message must be at least 10 characters';
        } else {
            this.classList.add('valid');
            this.classList.remove('invalid');
            if (messageError) messageError.textContent = '';
        }
    });
});