<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>notitle</title>

  </head>
  <body>
    <?php
       echo "whats going on people?";

        $ser="localhost";
        $user ="root";
        $pass="";
        $db="r1517";
        $con =mysqli_connect($ser,$user,$pass,$db) or die ("connection failed");
        echo "Connection Success"."<br>"."<b>";

        $sql = "SELECT id, first_name, last_name,email FROM Doctors";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]." -email: ". $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $con->close()
     ?>
  </body>
</html>
