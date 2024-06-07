<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>

  <button type="submit" class="btn btn-primary" name="insert">Insert</button>
  <button type="submit" class="btn btn-warning" name="search">Search</button>

</form>





        <?php

if (isset($_POST['search'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "haseeb";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // $email = $_POST['email'];
    // $password = $_POST['pass'];

    // $insert = "INSERT INTO test (myemail, mypass) VALUES ('$email', '$password')";

    // if ($conn->query($insert) === true) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    $select = "SELECT * FROM test";
    $result = $conn->query($select);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            // echo "<b>E-mail: </b>" . $row["myemail"] . " <b>Password: </b>" . $row["mypass"] . "<br>";

            echo 

"<table class='table table-striped table-danger'>
    <tr>
      <td>" . $row["myemail"] . "</td>
      <td>" . $row["mypass"] . "</td>
    </tr>
</table>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}
?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>