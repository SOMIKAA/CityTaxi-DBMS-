var image1=new image()
image1.src="http://www.quickcabsbangalore.com/images/banner3.png"
var image2=new image()
image2.src="http://www.quickcabsbangalore.com/images/banner4.png"
var image3=new image()
image3.src="https://genie.merucabs.com/static/images/big-car-mumbai.png"
//-->
<img src="http://www.quickcabsbangalore.com/images/banner3.png" name="slide" style="width:100%" >

var step=1
 function slideit()
 {
 document.images.slide.src=eval("image"+step+".src")
 if(step<3)
 step++
 else
 step=1
 setTimeout("slideit()",2500)
 }
 slideit()