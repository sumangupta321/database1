const form = document.getElementById('myform');
const submitButton = document.getElementById('submitButton');

submitButton.addEventListener('click', function (e) {
    validateForm(e);

});

function validateForm(e) {
    const name = document.getElementById('name').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    let isValid = true;
    if (name === '' || username === '' || email === '' || password === '') {
        isValid = false;
        alert('Please fill in all required fields');
        e.preventDefault();
    }
    else if (/\d/.test(name)) {
        // ||(/\D/.test(name))||(!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/))|| (password.length < 6)) {
        isValid = false;
        alert('Please fill your correct name');
        e.preventDefault();
    }

   else if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        isValid = false;
        alert('Please fill valid email');
        e.preventDefault();
    }

     else if (password.length < 6) {
        isValid = false;
        alert('Please fill 6 or more than 6 characters');
        e.preventDefault();
    }
    
     else {
        form.submit(); // Submit the form if valid
    }
}

