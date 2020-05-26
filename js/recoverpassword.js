function myfunction() {
			var x=document.forms["fname"]["old"].value;
			var y=document.forms["fname"]["new"].value;
			var z=document.forms["fname"]["confirm"].value;
			if(y.length==8){
			if(x!=y && y==z){
		window.alert("password changed successfully");
	        return true;}
            else if(x==y){
            	window.alert("Old and New Passwords cannot be same");
            	return false;
            }
            else if(y!=z){
            	window.alert("confirm password should be same as new password");
            	return false;
            }}
          
            else{
                window.alert("Password should contain 8 characters");
                return false; 
            }}
        