// fa-eye fa-eye-sledution
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the icon
    this.classList.toggle('fa-eye-sledution');

});




// fa-eye fa-eye-sledution
const toggleVerifypassword = document.querySelector('#toggleVerifypassword');
const verifypassword = document.querySelector('#verifypassword');

toggleVerifypassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = verifypassword.getAttribute('type') === 'password' ? 'text' : 'password';
    verifypassword.setAttribute('type', type);
    // toggle the icon
    this.classList.toggle('fa-eye-sledution');

});