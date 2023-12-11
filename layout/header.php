<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    
    <link href="/miniproject/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="/miniproject/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <link href="/miniproject/assets/bootstrap-5.3.2/bootstrap-5.3.2/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/miniproject/assets/bootstrap-5.3.2/bootstrap-5.3.2/dist/js/bootstrap.js">
    <link href="/miniproject/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/miniproject/assets/js/bootstrap.js">
    
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }
     
        nav{
            box-shadow: 1px 1px 5px rgb(202, 102, 202);
            padding: 20px 5px 5px 5px;
            position: static;
        }
        nav>ul{
            list-style: none;
        }
        nav>ul>li{
            display: inline;
            margin: 20px;
            padding: 10px;
        }
        nav>ul>li>a>img{
            /*height: 30px*/;
            width: 200px;
            /* margin-bottom: -10px; */
            
        }
        nav>ul>li>a>label{
           
            font-size: 20px;
            color: rgb(83, 45, 83);
            padding: 5px;
        }
        nav>ul>li:nth-of-type(2):hover, nav>ul>li:nth-of-type(3):hover, nav>ul>li:nth-of-type(4):hover, nav>ul>li:nth-of-type(5):hover{
           
           font-size: 20px;
           color: white;
           background-color: rgb(170, 125, 170);
           border-radius: 20px;
           
           
       }
       nav>ul>li:nth-of-type(2)>a>label:hover,nav>ul>li:nth-of-type(3)>a>label:hover,nav>ul>li:nth-of-type(4)>a>label:hover,nav>ul>li:nth-of-type(5)>a>label:hover{

           color: white;
         
       }
        nav>ul>li>div>div , nav>ul>li>div{
            display: inline;
        }
        nav>ul>li:last-of-type{
            /* margin-left: 130px; */
        }
        nav>ul>li:first-of-type{
            margin-right: 500px;
            
        }
      
        nav>ul>li>div>div>i{
            color: rgb(202, 102, 202);
            padding: 8px;
        }
        nav>ul>li>div>div>input{
            outline: none;
            border: none;
            height: 30px;
            width: 200px;
        }
        nav>ul>li>div>i{
            background-color: rgb(202, 102, 202);
            color: white;
            padding: 10px;
            border-radius: 50%;
            margin-left: 10px;

        }
        nav>ul>li>div>div{
             border: 1px solid;
            border-color: rgb(83, 45, 83);
            /* background-color: rgb(202, 102, 202); */
            padding: 8px 8px 8px 0px; 
        }
    
  
   

    </style>
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <!-- <img src='C:\xampp\htdocs\miniproject\assets\images\WhatsApp Image 2023-11-28 at 20.14.10_fc1fd97b.jpg'> -->
                  <a href='home'> <img src="<?php echo ROOT_PATH; ?>assets/images/Life Of Pix-1.png" alt="logo"></a>
                   <!-- <label>Life Of Pix</label> -->
                </li>
                <li>
                    <a href="home"><label>Home</label></a>
                </li>
                <li>
                   <a href="photos"><label>Photos</label></a> 
                </li>
                <li>
                  <a  href="signin"> <label>Upload</label></a> 
                </li>
                <li>
                   <a  href="signin"> <label>Signin</label></a>
                </li>
              <li>
              <div>
<!--                
                    <div> <i class="fa fa-search"></i> <input type="text" placeholder="Search" ></div> -->
                
                     <!-- <i class="fa fa-user"></i> -->
                 
              </div>
              </li>
               
            </ul>
        </nav>