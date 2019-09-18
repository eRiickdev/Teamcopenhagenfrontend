function validate(){
	let username = document.getElementById('username').value;
	let email = document.getElementById('email').value;
	let password = document.getElementById('password').value;
	let confirmPassword = document.getElementById('confirmPassword').value;
	let error = document.getElementById('error');
	let text;

	error.style.padding ="10px";

	if(password != confirmPassword){
		text = "passwords do not match";
		error.innerHTML = text;
		return false;
	} 

	if(username.length < 4 ){
		text = "Username should be more than 4 characters";
		error.innerHTML = text;
		return false;
	} 

	if(email.indexOf("@") == -1 || email.length < 5){
		text = "Please enter a valid email";
		error.innerHTML = text;
		return false;
	} 

	if(password.length < 6){
		text = "Password should be more than 5 characters";
		error.innerHTML = text;
		return false;
	}

	alert("Registeration Successful");
	window.assign.location("index.php");
	return true;

}