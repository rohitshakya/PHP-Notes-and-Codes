
window.onload = () => {
 const newpassword = document.getElementById('newpassword');
 newpassword.onpaste = e => e.preventDefault();
 newpassword.ondrop = e => e.preventDefault();

 const confirmpassword = document.getElementById('confirmpassword');
 confirmpassword.onpaste = e => e.preventDefault();
 confirmpassword.ondrop = e => e.preventDefault();
 
 const currentpassword = document.getElementById('currentpassword');
 currentpassword.onpaste = e => e.preventDefault();
 currentpassword.ondrop = e => e.preventDefault();

 const temp_password = document.getElementById('temp_password');
 temp_password.onpaste = e => e.preventDefault();
 temp_password.ondrop = e => e.preventDefault();

}
