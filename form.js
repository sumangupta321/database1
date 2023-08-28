let array = [];
const name = document.getElementById('name');
const email = document.getElementById('email');

function clearFields() {
  document.getElementById('name').value = '',
    document.getElementById('email').value = ''
}
document.querySelector('#myform').addEventListener('submit', e => {
   e.preventDefault();
  validateForm(e)
 
  //  console.log("clicked");
  var sname = name.value,
    semail = email.value

  var userData = {
    name: sname,
    email: semail
  }
  console.log(userData);
  
});

  function validateForm(e) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;


    let isValid = true;
    if (/\d/.test(name)) {
      isValid = false;
      alert('Please fill your correct name');
      e.preventDefault();
    }
    else if (name === '' || email === '') {
      isValid = false;
      alert('Please fill in all required fields');
      e.preventDefault();
    }


    else if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
      isValid = false;
      alert('Please fill valid email');
      e.preventDefault();
    }

    else {
     
      emailSent();
      clearFields();
      window.setTimeout(() => {
        location.href = './index.php';
      }, 10000);
    
       // Submit the form if valid
    }
  

 


  }

  


  // array.push(userData)
  // localStorage.setItem('userData', JSON.stringify(array));












