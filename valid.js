var username = document.forms['form']['username'];
var password = document.forms['form']['password'];

var usn_error = document.getElementById('usn_error');
var pass_error = document.getElementById('pass_error');

email.addEventListener('textInput', usn_Verify);
password.addEventListener('textInput', pass_Verify);

function validated(){
	if (usn.value.length < 9) {
		usn.style.border = "1px solid red";
		usn_error.style.display = "block";
		usn.focus();
		return false;
	}
	if (password.value.length < 6) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}

}
function usn_Verify(){
	if (usn.value.length >= 8) {
		usn.style.border = "1px solid silver";
		usn_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	if (password.value.length >= 5) {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}