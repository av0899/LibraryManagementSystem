
		function enter(){
			var x=document.getElementById("usame").value;
			var y=document.getElementById("pwd").value;
			if(x=='vishnukatta1@gmail.com' && y=='anandavishnu1'){
				return true;
			}
			else{
				window.alert("You are not appropriate user")
				return false;
			}
		}