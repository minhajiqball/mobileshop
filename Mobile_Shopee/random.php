<!DOCTYPE html>
<html>

<head>
    <title>address page</title>
</head>

<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password =>
    // database name => shopee
    $conn = mysqli_connect("localhost", "root", "", "shopee");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all  values from the form data(input)
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $address1 = $_REQUEST['address1'];
    $address2 = $_REQUEST['address2'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $pincode = $_REQUEST['pincode'];


    // Performing insert query execution
    // here our table name is address
    $sql = "INSERT INTO address VALUES ('$first_name','$last_name','$email', '$address1', '$address2','$city','$state','$pincode')";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully.</h3>";

        // echo nl2br("\n$first_name\n $last_name\n ". "$gender\n $address\n $email");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>
