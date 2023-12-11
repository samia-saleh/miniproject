
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

      
        input,select{
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

<!DOCTYPE html>
<html>
<body>

<section>
<div>
<form action="upload" method="post" enctype="multipart/form-data">
  <!-- <input type='number' placeholder="category" name='category'> -->
  Select image to upload:
  <input type="file" name="name" id="fileToUpload" >
  <select name='category'><option>babies</option>
  <option>products</option>
  <option>weddings</option></select>
  <input type="submit" value="Upload Image" name="submit">

</form>
</div>
</section>

</body>
</html>
<?php
// require_once("mysql");
$conn=mysqli_connect("localhost","root","","life_of_pix");
$categoryid;
$category=$_POST['category']??'';
if($category=='products'){
  $categoryid="1";
}
if($category=='babies'){
  $categoryid="2";
}
if($category=='weddings'){
  $categoryid="3";
} 
else{
  ;
}
$name=$_FILES['name']['name']??'';
$owner="1";
$inset;
if($category!=''){
  $inset='INSERT INTO pictures( name, category, ownerid) VALUES ( "'.$name.'",'.$categoryid.','.$owner.')';
  $insertresult=mysqli_query($conn,$inset);
if($insertresult){
  echo 'inserted';
}
}
else{;}

$select='SELECT name FROM pictures WHERE category=2';
$selectresult=mysqli_query($conn,$select);
// print_r($selectresult);
// foreach($selectresult as $row){
//  echo $name=$row['name'];
// }
?>