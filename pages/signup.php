
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
        section>div>h1{
            color: rgb(83, 45, 83);
        }

    </style>

<section>
<div>
        <h1>Sign Up</h1>
        <form method="post" action="home">
            <input type="text" name="userName" placeholder="User name" required>
            <!-- <input type="email" name="email" placeholder="Email"> -->
            <input type="password" name="Password" placeholder="password" required>
            <input type="password" name="ConfermPassword" placeholder="ConfermPassword" required>
          <?php 
        ?>
            <input type="submit">
           
          </form>
     </div>
</section>
<?php
// $insetr;
$username=$_POST['userName']??'';
$password=$_POST['Password']??'';
$confermpass=$_POST['ConfermPassword']??'';
function _post(){
    $conn=mysqli_connect("localhost","root","","life_of_pix");

global $username,$password,$confermpass;
if($username!='' and $password!= ''){
  $insetr='INSERT INTO users( username, password) VALUES ( "'.$username.'",'.$password.')';
  $insertresult=mysqli_query($conn,$insetr);
  if($insertresult){
    echo 'inserted';
  }
  
  else{;}

}


// else{
//     echo'<script>alert ("all f are re")</script>';
// }
}
function checkpass($password,$confermpass){
    if($password!=$confermpass) {
        {
            echo 'password arnt equale';
        }
        
        }
    else{
        _post();
    }
}


?>