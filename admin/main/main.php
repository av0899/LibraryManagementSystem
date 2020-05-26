<!DOCTYPE html>
<head>

	<title>NITC Library Mangement</title>
    <!--<link rel="stylesheet" type="text/css" href="../../css/main-page.css">-->
    <script src="../../js/automate-slideshow.js" type="text/javascript"></script>
    <style type="text/css">
    	.mySlides{
    		position: absolute;
    		width: 100%;
    		height: 90%;
    		z-index: -10;
    		top:10%;
    		left: 0;


    	}
    	#signin,#signin1{
    		padding:10px 40px;
    	}
    	.buttons{
    		position:relative;
    		left: 40.5%;
   	
    		
    	}
    	#signin1{
    				background-color: #1da1f2;
	border:solid #1da1f2;
	color:black;
	font-size: medium;
	outline: none;
	text-align: center;
    margin-top: 200px;
    cursor: pointer;
    width: 277px;
    font-family: PT serif;
    font-weight: bolder;

    	}
    	#signin{
    				background-color: #1da1f2;
	border:solid #1da1f2;
	color:black;
	font-size: medium;
	outline: none;
	text-align: center;
	cursor: pointer;
	width: 277px;
	font-family: PT serif;
	font-weight: bolder;
}
#signin1:hover{
	background-color: #1584c7;
	border:solid #1584c7;
	outline: none;
}
#signin:hover{
	background-color: #1584c7;
	border:solid #1584c7;
	outline: none;
}

    	b{
    		position: relative;
    		left: 32.5%;


    	}
    	body{
    		overflow: hidden;
    	}
    	b{
    		position: relative;
    		font-size: 40px;
    		font-family: PT Serif;
    	}
    	a{
    		text-decoration: none;
    	}
    </style>
</head>
<body>
	<!--<div class="menu" name="menubar">
		<img src="../../images/nitclogo.png" id="special">

		<button id="signin">Student Signin</button>
		<button id="signin">Faculty SignIn</button>
		<button id="signin">Librarian Signin</button>
		<div id="Build">NITC Library Management System</div>
	</div>-->
	
	
	<script type="text/javascript">
		var k=1;
	</script>

<div class="container">
   <img class="mySlides" src="../../images/library.jpg">
   <img class="mySlides" src="../../images/library2.jpg">
   <img class="mySlides" src="../../images/library3.jpg">
   <img class="mySlides" src="../../images/library4.jpg">
   <img class="mySlides" src="../../images/library5.jpeg">
</div>
<u><b>NITC LIBRARY SYSTEM</b></u>
<!DOCTYPE html>
    <html>
        <head>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

            <style>
                *{margin: 0;padding:0px}

                .header{
                    width: 100%;
                    background-color: none;
                    height: 60px;
                }

                .showLeft{
                   text-shadow: none !important;
                    color:#fff !important;
                    padding:10px;
                }

                .icons li {
                    background: none repeat scroll 0 0 #fff;
                    height: 7px;
                    width: 7px;
                    line-height: 0;
                    list-style: none outside none;
                    margin-right: 15px;
                    margin-top: 3px;
                    vertical-align: top;
                    border-radius:50%;
                    pointer-events: none;
                    border-color: black;
                    background-color: black;
                }

                .btn-left {
                    left: 0.4em;
                }

                .btn-right {
                    right: 0.4em;
                }

                .btn-left, .btn-right {
                    position: absolute;
                    top: 0.24em;
                }

                .dropbtn {
                    
                    position: fixed;
                    color: white;
                    font-size: 16px;
                    border: none;
                    cursor: pointer;
                }

                .dropbtn:hover, .dropbtn:focus {
                  
                }

                .dropdown {
                    position: absolute;
                    display: inline-block;
                    right: 0.4em;
                }

                .dropdown-content {
                    display: none;
                    position: relative;
                    margin-top: 60px;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    overflow: auto;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown a:hover {background-color: #f1f1f1}

                .show {display:block;}

            </style>
            <script>
                function changeLanguage(language) {
                    var element = document.getElementById("url");
                    element.value = language;
                    element.innerHTML = language;
                }

                function showDropdown() {
                    document.getElementById("myDropdown").classList.toggle("show");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
        </head>
        <body>
            <div class="header">

                <!-- three dot menu -->
                <div class="dropdown">
                    <!-- three dots -->
                    <ul class="dropbtn icons btn-right showLeft" onclick="showDropdown()">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <!-- menu -->
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../index.php">Student Signin</a>
                        <a href="../index1.php">Faculty Signin</a>
                        <a href="../index2.php">Librarian signin</a>
                    </div>
                </div>

            </div>
        </body>
    </html>

 <!-- <div class="circles">
  	<div class="dot" id="c1" onclick="crctpic(k)"></div>
  	<div id="c2" class="dot" onclick="crctpic(k+1)"></div>
  	<div id="c3" class="dot" onclick="crctpic(k+2)"></div>
  	<div id="c4" class="dot" onclick="crctpic(k+3)"></div>
  	<div id="c5" class="dot" onclick="crctpic(k+4)"></div>
  </div>-->
  <script type="text/javascript">
  var myIndex = 0;
  carousel();
  	</script>
</body>
</html>