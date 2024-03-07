<!DOCTYPE html>
<html lang="en">              
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="stylesheet2.css">
    <title>ADDstudent</title>
    </head>
    <body>

           <form class="form" action="addstudent.php" method="post">
        
            <label> First-Name:<input class="input" type ="text"  name="fn" placeholder="janidu"><br>
            
           
            <label>contct :</label> <input class="input" type ="text" name ="con" placeholder="076"><br>
           
            <label>School:</label>  <input class="input" type="text" name="school" ><br>
        
            <label>Grade:</label> <input class="input" type="text"  name ="grade"><br>
            
            <label>Subject:</label> <input class="input" type="text" name="subject"><br>
         
            <label> Gender:</label> <input class="input" type="text"  name="gender"><br>
        
            <input class="fbutton"type ="submit"  value="Submit">`
            <input class="fbutton" type="reset"   value="Reset">
  
        
            </form> 
          <?php
          include 'connection.php';
         
           $firstname=$_POST["fn"];
           $contact=$_POST["con"];
           $school=$_POST["school"];
           $grade=$_POST["grade"];
           $subject=$_POST["subject"];
           $gender=$_POST["gender"];

           $query="INSERT INTO student( Name ,Contact ,Subject, Gender ,School) VALUES ('{$firstname}',
           '{$contact}','{$subject}','{$gender}','{$school}') ";
           $result=mysqli_query($connection,$query);

           if($result){
                echo("success");
            

           }else{
            echo("fail");
           }
       
          ?>
            <a href="dashbord.php">
               Back
             </a>



    
</body>
</html>