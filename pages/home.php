<link href="assets/css/home.css" rel="stylesheet">
<style>
  *{
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }


header>div:first-of-type{
 margin-top: 5px;
 height: 450px;
 width: 100%;     
 background-color: rgb(0, 0, 0);

}
header>div>div{
    
    height: 450px;
 /* width: 100%;      */
background-image: url("assets/images/rainecover.jpeg");
background-size: cover;
background-position: 0px;
background-repeat: no-repeat;
text-align: center;
opacity: 0.5;
}
header>div:nth-of-type(2){
    color: white;
  position: absolute;
  top: 30%;
  left: 25%;
  padding: 30px;
  width: 700px;
  text-align: center;
  
   
}
header{
    margin-bottom: 30px;
}
main{
    padding: 0px 20px;
}
section{
    margin-left: 100px;
}
#section1>div>div:first-of-type>a>img{
    width: 390px;
   height: 190px;
    /* object-fit:contain; */
    border-radius: 10px;
     /* filter: grayscale(50%); */
}
#section1>div>div:first-of-type>a>img:hover,#section1>div>div:nth-of-type(2)>a>img:hover
, #section1>div>div:nth-of-type(3)>a>img:hover,  #section1>div>div:nth-of-type(4)>a>img:hover,
#section1>div>div:nth-of-type(5)>a>img:hover,#section1>div>div:nth-of-type(6)>a>img:hover,
#section1>div>div:nth-of-type(7)>a>img:hover,#section1>div>div:nth-of-type(8)>a>img:hover{
   
    filter: grayscale(0%);
    transform: scale(1.03);
    transition-duration: 1s;
}
#section1>div>div:nth-of-type(2)>a>img{
    width: 190px;
   height: 390px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    /* object-fit:contain; */
    
}
#section1>div>div:nth-of-type(3)>a>img{
    width: 690px;
   height: 190px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    object-fit:cover;
    
}
#section1>div>div:nth-of-type(4)>a>img{
    width: 190px;
   height: 190px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    /* object-fit:contain; */
    
}
#section1>div>div:nth-of-type(5)>a>img{
    width: 190px;
   height: 390px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    /* object-fit:contain; */
    
}
#section1>div>div:nth-of-type(6)>a>img{
    width: 690px;
   height: 390px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    /* object-fit:contain; */
    
}
#section1>div>div:nth-of-type(7)>a>img{
    width: 190px;
   height: 190px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    /* object-fit:contain; */
    
}
#section1>div>div:nth-of-type(8)>a>img{
    width: 190px;
   height: 190px;
   border-radius: 10px;
   /* filter: grayscale(50%); */
    /* object-fit:contain; */
    
}


.div{
    display: grid;
    /* object-fit: cover; */
    grid-template-columns: 200px 200px 200px;
    grid-template-rows: 200px 200px 200px ;
   
}
.squerimg{
    /* background-image: url("assets/images/R\ \(1\).jpeg"); */
    border-radius: 10px;
    background-size: cover;
   
    margin: 5px;
}
.colrow1{
    
    grid-row: 1 ;
    grid-column: 1 /span 2 ;
   
}
#colrow1>img{
    
    height: 300px;
    width: 400px;
    margin: 20px;
   
}

.colrow12{
    grid-row: 1 ;
    grid-column: 3;
}
.colrow13{
    grid-row: 1 /span 2;
    grid-column: 3 ;
}
.colrow14{
    grid-row: 1;
    grid-column: 4/ span 2 ;
}
.colrow21{
    grid-row: 2 ;
    grid-column: 1 ;
}
.colrow22{
    grid-row: 2 / span 2;
    grid-column: 2  ;
}
.colrow24{
    grid-row:2 / span 2;
    grid-column: 4/ span 2  ;
}
.colrow31{
    grid-row: 3;
    grid-column: 1 ;
}
.colrow33{
    grid-row:3;
    grid-column: 3 ;
}
.colrow41{
    grid-row: 4;
    grid-column: 1/ span 2;
}
.colrow43{
    grid-row: 4;
    grid-column: 3/ span 2;
}
.colrow45{
    grid-row: 4;
    grid-column: 5;
}
section:nth-of-type(3){
    position: absolute;
    height: 100px;
   
    text-align: center;
    bottom: -188%;
    width: 100%;

    /* margin-top: -100px; */
   

}
section:nth-of-type(3)>button{
    margin-right: 100px;
    padding: 10px;
    border: none;
    border-radius: 20px;
    margin-top: -70px;
    color: rgb(83, 45, 83);

}
section:nth-of-type(3)>button>i{
    color: rgb(83, 45, 83);

}
</style>
<div>
            <div></div>
          
             </div>
          <div>   <h1>The best free stock photos, royalty free images shared by creators.
             </h1></div>
    </header>
 <main>
 <!-- <a href="detailes?img=flower.jpg" ><img src="<?php echo ROOT_PATH; ?>/assets/images/flower.jpg"></a> -->
    <!-- <a href='photos'> ppppp</a> -->
    <section id="section1">
        <div class="div">
      
            <div class="squerimg colrow1">
                <a href="detailes?img=flower.jpg"><img src="<?php echo ROOT_PATH; ?>/assets/images/flower.jpg"></a>
            </div>
           
            <div class="squerimg colrow13">
               <a href="detailes?img=cornflakes-4907490_1280.jpg">
                 <img src="<?php echo ROOT_PATH; ?>/assets/images/cornflakes-4907490_1280.jpg"> </a>
            </div>
            <div class="squerimg colrow14">
            <a href="detailes?img=cover.webp">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/cover.webp"> </a>

            </div>
            <div class="squerimg colrow21">
            <a href="detailes?img=baby.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/baby.jpg"> </a>
               
            </div>
            <div class="squerimg colrow22">
            <a href="detailes?img=babynoail.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/babynoail.jpg"></a>
               
            </div>
            <div class="squerimg colrow24">
            <a href="detailes?img=strawberry-1330459_1280.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/strawberry-1330459_1280.jpg"></a>
           
            </div>
            <div class="squerimg colrow31">
            <a href="detailes?img=olive-oil-968657_1280.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/olive-oil-968657_1280.jpg"></a>
               
            </div>
            <div class="squerimg colrow33">
                
                <a href="detailes?img=wedding-photography-5582980_1280.jpg">
                <img src="<?php echo ROOT_PATH; ?>/assets/images/wedding-photography-5582980_1280.jpg"> </a>
            </div>
      
    
      
        
        </div>
    
       </section>
       <section id="section1">
        <div class="div">
      
            <div class="squerimg colrow1">
            <a href="detailes?img=4.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/4.jpg"></a>    
            </div>
           
            <div class="squerimg colrow13">
            <a href="detailes?img=baby-orange.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/baby-orange.jpg"></a>    
                
            </div>
            <div class="squerimg colrow14">
            <a href="detailes?img=iphone-1836071_1280.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/iphone-1836071_1280.jpg">
        </a> 
             
            </div>
            <div class="squerimg colrow21">
            <a href="detailes?img=1.jpeg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/1.jpeg">
        </a> 
                
            </div>
            <div class="squerimg colrow22">
            <a href="detailes?img=green.webp">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/green.webp">
        </a> 
             
            </div>
            <div class="squerimg colrow24">
            <a href="detailes?img=sunset-698501_1280.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/sunset-698501_1280.jpg">
        </a> 
                
            </div>
            <div class="<?php echo ROOT_PATH; ?>/squerimg colrow31">
            <a href="detailes?img=honey-2045580_1280.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/honey-2045580_1280.jpg">
        </a>
                
            </div>
            <div class="squerimg colrow33">
            <a href="detailes?img=lanendar.jpg">
            <img src="<?php echo ROOT_PATH; ?>/assets/images/lanendar.jpg">
        </a>
                
            </div>
      
    
      
        
        </div>
    
       </section>
    
   
 </main>