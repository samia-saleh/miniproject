<!-- <link href="assets/css/profile.css" rel="stylesheet"> -->
<style>
*{
    margin: 0px;
    padding: 0px;
    font-family: Arial, Helvetica, sans-serif;
}

header>div:first-of-type{
 margin-top: 5px;
 height: 500px;
 width: 100%;     
 background-color: rgb(0, 0, 0);
 margin-bottom: 80px;

}
header>div>div{
    
    height: 500px;
 width: 100%;     
background-image: url("assets/images/profilecover2.webp");
background-size: cover;
background-position: 0px;
background-repeat: no-repeat;
text-align: center;
opacity: 0.5;
/* margin-bottom: 20px; */
}
header>div:nth-of-type(2){
    color: white;
  position: absolute;
  top: 40%;
  left: 20%;
  padding: 50px;
  width: 700px;
  text-align: center;
  
   
}
#section1>img{
    height: 200px;
    width: 200px;
   border-radius: 50%;
   border: 5px solid white;
   position: absolute;
   top: 65%;
   left: 5%;
   
}
#section1>h1{
    margin-left: 20px;
    color: rgb(43, 37, 43);
    
}
#section1>p{
    padding: 20px 700px 0px 20px;
    color:  rgb(97, 79, 97);
}
#section1>div{
    height: 200px;
    width: 200px;
   border-radius: 50%;
   border: 5px solid white;
   position: absolute;
   top: 86%;
   left: 89%;
   
}
#section1>div>a{
  text-decoration: none;
  color: rgb(43, 37, 43);
   
}
#section1>div>a>i{
  margin: 5px;
  font-size: 25px;
  color:rgb(97, 79, 97);
   
}
#section1>div>a>i:hover{
  margin: 5px;
  font-size: 30px;
  transition:font-size 0.5s ;
  color: rgb(83, 45, 83);
   
}
/* section{
    margin: 40px 0px 60px 0px;
} */

#section2>div:first-of-type,#section3>div:first-of-type,#section4>div:first-of-type{
    height: 5px;
    width: 50px;
    background-color:  rgb(83, 45, 83);
    margin-left: 25px;
    border-radius: 20px;
}

#section2>a>img,#section3>a>img,#section4>a>img{
    height: 300px;
    width: 400px;
    margin: 19px;
    
}
#section2>a>img:hover,#section3>a>img:hover,#section4>a>img:hover{
    
   
    transform: scale(1.06);
    transition-duration: 2s;
}
#section2>h1,#section3>h1,#section4>h1{
    margin-left: 19px;
    color:  rgb(83, 45, 83);
}

section{
    margin: 10px 80px;
}




</style>
<?php

?>
<div>
            <div></div>
          
             </div>
          <div>  </div>
    </header>
<section id="section1" >
<img src="assets/images/profile.jpeg">
<h1>Jill Wellington</h1>
<p>
    I am a portrait photographer in Michigan, and happily share my hard work 
    so others can find and use my photos for FREE! Do not use a photo with a face commercially
     without contacting me. Please DO NOT SELL my images "as is" in any form...I want them to be FREE!
</p>
<div> <a href="#"><i class="fa-brands fa-facebook"></i>Jill Wellington</a><br>
   <a  href="#"> <i class="fa-brands fa-instagram"></i>Jill Wellington</a><br>
   <a  href="#"> <i class="fa-brands fa-twitter"></i>Jill Wellington</a><br>
   <a href="#"> <i class="fa-solid fa-phone"></i>+435 565 875</a></div>
</section>
<section id="section2">
    <h1>Products</h1>
    <div></div>
    <?php
    $images= productimgs();
    foreach($images as $row){
        echo ' <a href="detailes?img='.$name=$row['name'].'"><img src="assets/images/'.$name=$row['name'].'"  class="col-3"></a>';

       }
    
    
    ?>

   </section>
   <section id="section3">
    <h1>Babies</h1>
    <div></div>
    <?php
    $images= babyimgs();
    foreach($images as $row){
        echo ' <a href="detailes?img='.$name=$row['name'].'"><img src="assets/images/'.$name=$row['name'].'"  class="col-3"></a>';

       }
    
    
    ?>
  
   </section>
    <section id="section4">
    <h1>Weddings</h1>
    <div></div>
    <?php
    $images= weddingimgs();
    foreach($images as $row){
        echo ' <a href="detailes?img='.$name=$row['name'].'"><img src="assets/images/'.$name=$row['name'].'"  class="col-3"></a>';

       }
    
    
    ?>

   </section>


   <?php
   
   function babyimgs(){
       $conn=mysqli_connect("localhost","root","","life_of_pix");
   
   
   $select='SELECT name FROM pictures WHERE category=2';
   $selectresult=mysqli_query($conn,$select);
   return($selectresult);
   
   }
   function weddingimgs(){
       $conn=mysqli_connect("localhost","root","","life_of_pix");
   
   
   $select='SELECT name FROM pictures WHERE category=3';
   $selectresult=mysqli_query($conn,$select);
   return($selectresult);
   
   }
   function productimgs(){
       $conn=mysqli_connect("localhost","root","","life_of_pix");
   
   
   $select='SELECT name FROM pictures WHERE category=1 && ownerid=1';
   $selectresult=mysqli_query($conn,$select);
   return($selectresult);
   
   }
      ?>