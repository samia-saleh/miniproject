
<style>
            section{
        /* padding:40px 0px; */
        
        
        display: flex;
        width: auto;
        margin: 50px 200px;
        color: rgb(83, 45, 83);

       }
   section>div> img:first-of-type{
        height: 500px;
        width: 600px;
        object-fit: fill;

      
    }
      section>div:nth-of-type(2){
       
        width:  300px;
        box-shadow: 1px 3px 5px rgb(202, 102, 202);
        border-radius: 20px;
        

      
    }
    tr:first-of-type>td:last-of-type{
        /* text-align: end; */
        padding-left: 60px;
    }
      td:last-of-type>button{
       border: none;
       color: rgb(83, 45, 83);
       background-color: white;
    }

    section>div:nth-of-type(2)>table img{
        height: 50px;
        width: 50px;
        object-fit: fill;
        border-radius: 50%;
        margin: 10px;
      
    }
    /* table,td,tr{
        width: 300px;
    } */
    section>div:nth-of-type(2)>a> h5{
     /* color: blue; */
     display: inline;
    }
    a{
     text-decoration: none;
     color: rgb(83, 45, 83);
    }
    section>div:nth-of-type(2) label{
        color:  rgb(97, 79, 97);
     font-size: 13px;
     /* padding-top: 40px; */
    
    }
  
    td{
        padding: 5px 0px 15px 6px;
    }
    section>div{
        margin-left: 10px;
    }
    tr:last-of-type>td>a{
        width: 250px;
        background-color:  rgb(124, 71, 124);
        color: white;
        border-radius: 30px;
        margin-left: 20px;
        margin-top: 30px;
        padding: 13px 70px;
        font-size: 20px;

    }
    tr:last-of-type>td>a>i{
     font-size: 20px;
        color: white;
       

    }
    tr:last-of-type>td>a:hover{
        background-color:  rgb(99, 56, 99);
           

    }
  
            
    tr:nth-of-type(2)>td,tr:nth-of-type(3)>td{
        padding-left: 40px;
    }
    </style>
<?php
$img=$_GET['img'];

?>

<section>
   <div>
    
    <img src="<?php echo ROOT_PATH; ?>assets/images/<?php echo $img; ?>">
    
   </div>
    <div>
       
        <br>
        <table>
            <tr><td>
            <a href="profile"><img src="assets/images/profile.jpeg"></a>
 
        

            </td>
            <td colspan="2"><a href="profile"><h5>Jill Wellington</h5></a>
             <label style="font-size: 10px;"> 677K folowers</label></td>
        <td colspan="2">
                    <button> <i class="fa fa-solid fa-user-plus"></i> </button>
        </td>
        
        </tr>
        <tr><td colspan="3"><label>Views</label></td><td colspan="2"><label>654</label></td></tr>
         <tr><td colspan="3"><label>Download</label></td><td colspan="2"><label>732</label></td></tr>
        <tr>
            <td colspan="5"><a href="<?php echo ROOT_PATH; ?>download?path=assets/images/<?php echo $img?>" >Download <i class="fa fa-solid fa-download"></i>
            </a></td>
        </tr>
        </table>
       
       
    </div>
</section>


<?php
?>

