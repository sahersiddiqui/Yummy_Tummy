var i=0;
function myslider()
{
    
    var arr=["image1.jpeg","image2.jpg","image3.jpg","image4.jpg","image5.jpg","image6.jpg","image7.jpg","image8.jpg","image9.jpg"];
    
    if(i>8)
    
    i=0;
      document.getElementById('imgslider').src="./assets/slider/"+arr[i];
      i++;
    
    window.setTimeout("myslider()",2000);
}