<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="15">
  <link rel="stylesheet" href="stylesheet2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-..." crossorigin="anonymous" />


  <title>Toggle slide bar</title>
</head>

<body>
  <a href="addstudent.php">
    <button class="addstudent">Addstudent</button>
  </a>
  <div class="menulist">


    <div class="head">menu</div>
    <ol>
      <li><a id="list" href="dashbord.php"> Home </a> </li>
      <li><a id="list" href="maths.php"> Maths </a> </li>
      <li><a id="list" href="it.php"> IT </a> </li>
      <li><a id="list" href="science.php"> Science</a> </li>
      <li><a id="list" href="english"> English </a> </li>
      <li><a id="list" href="history.php"> History </a> </li>


    </ol>

  </div>

  <div class="stable">
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>School</th>
        <th>Contact</th>
        <th>Subject</th>
        <th>Gender</th>
        <th>Action</th>


      </tr>
      <tbody>

        <?php
        include("connection.php");
        $query = "SELECT * FROM student";
        $result = mysqli_query($connection, $query);
        if ($result) {
          /*checking how many raws in the table*/
          /* echo mysqli_num_rows($result);*/
          while ($record = mysqli_fetch_assoc($result)) {
        
            echo "  <tr  class='drow'>  <td>" . $record['Id'] . " </td>
                    <td>" . $record['Name'] . "</td>
                     <td>" . $record['School'] . " </td>
                     <td> " . $record['Contact'] . " </td>
                    <td>" . $record['Subject'] . "</td>
                    <td> " . $record['Gender'] . " </td>
                    <td><a href='update.php'>Link Text</a></td>
                    <td><a href='addstudent.php'>Delete</a></td>
                  </tr>";

          }
               

        } else {
          echo ('fuck');
        }








        ?>
      </tbody>

    </table>
  </div>

</body>

</html>