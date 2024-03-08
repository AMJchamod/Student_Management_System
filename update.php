<!DOCTYPE html>
<html lang="en">              
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="stylesheet2.css">
    <title>ADDstudent</title>
    </head>
    <body>

           <form class="form" action="update.php" method="post">
           <label> ID:<input class="input" type ="text"  name="ID" ><br>
        
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

if (isset($_POST["ID"], $_POST["fn"], $_POST["con"], $_POST["school"], $_POST["grade"], $_POST["subject"], $_POST["gender"])) {
    $ID = $_POST["ID"];
    $firstname = $_POST["fn"];
    $contact = $_POST["con"];
    $school = $_POST["school"];
    $grade = $_POST["grade"];
    $subject = $_POST["subject"];
    $gender = $_POST["gender"];

    $query = "UPDATE student SET Name = '$firstname', Contact = '$contact', Subject = '$subject', Gender = '$gender', School = '$school' WHERE Id = $ID";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Update successful!";
    } else {
        echo "Update failed: " . mysqli_error($connection);
    }
} else {
    echo "Incomplete data submitted.";
}

mysqli_close($connection);
?>
 
            <a id="back" href="dashbord.php">
              <- Back
             </a>



    
</body>
</html>