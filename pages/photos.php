
<style>

*{
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }



section{
    margin: 40px 0px 60px 70px;
}
section>h1{
    margin-left: 25px;
    color:  rgb(83, 45, 83);
}
section>div:first-of-type{
    height: 5px;
    width: 50px;
    background-color:  rgb(83, 45, 83);
    margin-left: 25px;
    border-radius: 20px;
}

#section1>a>img,#section2>a>img,#section3>a>img{
    height: 300px;
    width: 400px;
    margin: 20px;
    
}
#section1>a>img:hover,#section2>a>img:hover,#section3>a>img:hover{
    
   
    transform: scale(1.06);
    transition-duration: 2s;
}



</style>
</header>
   <section id="section1">
    <h1>Products</h1>
    <div></div>
    
    <?php
    $images= productimgs();
    foreach($images as $row){
        echo ' <a href="detailes?img='.$name=$row['name'].'"><img src="assets/images/'.$name=$row['name'].'"></a>';

       }
    
    
    ?>
   

    
    
   </section>
   <section id="section2">
    <h1>Babies</h1>
    <div></div>
    <?php
    $images= babyimgs();
    foreach($images as $row){
        echo ' <a href="detailes?img='.$name=$row['name'].'"><img src="assets/images/'.$name=$row['name'].'"></a>';

       }
    
    
    ?>
  
    
   
   </section>
   
    <section id="section3">
    <h1>Weddings</h1>
    <div></div>
    <?php
    $images= weddingimgs();
    foreach($images as $row){
        echo ' <a href="detailes?img='.$name=$row['name'].'"><img src="assets/images/'.$name=$row['name'].'"></a>';

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


$select='SELECT name FROM pictures WHERE category=1';
$selectresult=mysqli_query($conn,$select);
return($selectresult);

}
   ?>