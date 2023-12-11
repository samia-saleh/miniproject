
    <style>
        section{
            margin: 50px 550px;
         
            
        }
        section>div{
            /* padding:100px; */
            width: 400px;
            /* background-color: lightgray; */
            padding-top: 50px;
            text-align: center;
            border: 1px solid lightgray;
            border-radius: 10px;
            box-shadow: 1px 1px 5px rgb(202, 102, 202);
            
        }
        form{
            display: flex;
            justify-content: space-evenly;
            
            flex-direction: column;
        }

      
        input{
            display: block;
            height: 30px;
            width: 250px;
            margin: 50px 70px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 3px solid;
          border-color: rgb(202, 102, 202);
            outline:none ;
            color:  rgb(83, 45, 83);
            
        }
        input:focus{
            border-bottom-color:rgb(83, 45, 83) ;
        }
        
        input:last-of-type{
            height:  40px ;
            background-color:  rgb(124, 71, 124);
            border: none;
            border-radius: 10px;
            color: white;

        }
        input:last-of-type:hover{
            background-color:  rgb(99, 56, 99);
            border-radius: 20px;
            
        }
        a{
            text-decoration: none;
            color:  rgb(83, 45, 83) ;
        }
        
        section>div>h1{
            color: rgb(83, 45, 83);
        }

    </style>

<section>
<div>
    <h1>Sign In</h1>
    <form method="post" action="upload">
        <input type="text" name="userName" placeholder="User name">
        <input type="password" name="Password" placeholder="Password">
        <input type="submit">
        
      </form>
      <a  href="signup"> <label>Signup</label></a>
 </div>
</section>
<?php


// function productimgs(){
//     $username=$_POST['userName'];
//     $password=$_POST['Password'];
//     $conn=mysqli_connect("localhost","root","","life_of_pix");


// $select='SELECT username,password FROM `users` WHERE username="'.$username.'" &&'. $password.'=123';
// $selectresult=mysqli_query($conn,$select);
// return($selectresult);

// }
// if(empty(productimgs())){
//     echo 'user name is not found';
// }
// else{
//     header('Location: upload');
// }


?>