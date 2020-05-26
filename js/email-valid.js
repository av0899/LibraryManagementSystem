function emailvalid(email) {
	var email=email.value;
	var x=email.length;
	var atpos=email.indexOf('@');
	var dotpos=email.lastIndexOf('.');
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x)
	{
		window.alert("Please Enter a Valid Email Address");
		return false;
	}}


