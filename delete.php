<?php 


include 'connect.php';

// ye check kar raha hai ki deleteid kya parameter me set hai
//hjsdxsj
if(isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $sql = " DELETE from `crud` where id = $id";

    $result = mysqli_query($con, $sql);

    if($result){


        echo "Deleted succesfully";
    }

    else {

        die(mysqli_error($con));

    }

}




?>