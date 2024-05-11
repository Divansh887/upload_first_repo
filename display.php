<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
i
    <div class="container">

        <button class="btn btn-primary my-5 "><a href="user.php" class="text-light">Add user</button></a>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>

            </thead>

            <?php

            $sql = " SELECT * from `crud`";

            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_assoc($result);


            // agar query execution succesful ho

            if ($result) {

                // ye associative array fetch karke lata hai , associative array: array with index and st, it fetches only one row at a time thats why we used while loop
                while ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row['password'];

                    // php me hum string concat karne ke liye . operator ka use karte hai
                    //<td>' . 123 . '</td>, which will render as <td>123</td> when displayed in an HTML table.
                    echo '
    
    <tr>
      <td>' . $id . '</td>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $mobile . '</td>
      <td>' . $password . '</td>

      <td>

<button class = "btn btn-primary"><a href="update.php?updateid='.$id.'" class = "text-light" >Update</a></button>
<button class = "btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class = "text-light">Delete</a></button>

</td>

    </tr>
    
    
    ';
                }
            }

            ?>



        </table>
    </div>

</body>

</html>