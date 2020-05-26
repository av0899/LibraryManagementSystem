function emailvalid(email) {
	var email=email.value;
	var x=email.length;
	var atpos=email.indexOf('@');
	var dotpos=email.lastIndexOf('.');
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x)
	{
		window.alert("Please Enter a Valid Email Address");
		return false;
	}

	else{
      var x=document.getElementById('pass1').value;
      var y=document.getElementById('pass2').value;
        if(x.length==8){
      if(x==y){
    window.alert("You have successfully signed in");
          return true;}
     else if(x!=y){
              window.alert("password and confirm Passwords should be same");
              return false;
            }}
            
          
            else{
                window.alert("Password should contain 8 characters");
                return false; 
            }}
       
	}

