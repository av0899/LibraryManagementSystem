
					function myFunction() {
					    var x = document.getElementById("myInput");
					    if (x.type === "password") {
					        x.type = "text";
					    } else {
					        x.type = "password";
					    }
					}
					function display(){
						$(document).ready(function(){
						$('#hitler').html('Username cannot be left empty').addClass('effect').slideDown('100');
						});

					}
					function display2(){
						$(document).ready(function(){
							$('#moscow').html('Password cannot be left empty').addClass('effect').slideDown('100');
						});

					}

					function donotdis(){
						$(document).ready(function(){
                          $('#hitler,#moscow').html('').addClass('effect').slideUp("100");

						});
					}
					function viewpassword(){
        				var x=document.getElementById("view1");
        				if(x.type=="Password"){
        					x.type="text";
        					}
        				else{
        					x.type="Password";
        					}
          
        			}
