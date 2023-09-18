<?php include ("connection.php")?>
<?php  

$name =                 $_POST['name'];
$email =               $_POST['email'];
$phone_number = $_POST['phone_number'];
$role =                 $_POST['role'];
$product =            $_POST['product'];
$serial =             $_POST['searial'];
$comment =           $_POST['comment'];
$deliver_date = $_POST['deliver_date'];


$sql = "INSERT INTO form(name,email,phone_number,role,product,searial,comment,deliver_date)
        VALUES ('$name','$email','$phone_number','$role','$product','$serial','$comment','$deliver_date')";

// Check connection
if
	(mysqli_query($conn, $sql))
{
echo "Record created successfully";
}
else
{
echo "Connection obtained.";
}
?>
