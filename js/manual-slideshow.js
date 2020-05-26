var slide=1;
  	showpics(slide);
  	function nextpic(slideshow)
  	{
  		slide=slide+slideshow;
  		showpics(slide);
  	}

  	function showpics(x){
  		var pics=document.getElementsByClassName('mySlides');
  		if(x<=0){slide=pics.length;}
  		if(x>=pics.length){slide=1;}
  		for(var i=0;i<pics.length;i++){
  			pics[i].style.display="none";
  		}
  		pics[slide-1].style.display="block";
      setTimeout(showpics,2000);
  	}