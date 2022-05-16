<?php
#$username=filter_input(INPUT_POST,'username');
#$username=filter_input(INPUT_POST,'password');
$host="localhost://3306";
$dbusername="root";
$dbpassword="root";
$dbname="portal";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
        die('Connection Error('.mysqli_connect_errno().')'
        .mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $customerid=$_POST['customerid'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $ContactNumber=$_POST['ContactNumber'];
    $rating=$_POST['rating'];
    $review=$_POST['review'];
    $sql_query="INSERT INTO customer(customerid,name,age,gender,email,ContactNumber,rating,review)
        VALUES('$name','$age','$gender','$email','$ContactNumber','$rating','$review')";

        if($conn->query($sql_query,$conn)){
            echo "New record is inserted successfully! ";
        }
        else{
            echo "Error: $sql_query <br>$conn->error ";
        }
        $conn->close();
    }
?>