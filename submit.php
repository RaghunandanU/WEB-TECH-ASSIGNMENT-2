<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registration Details</h2>

<div style="width:40%; margin:auto; background:white; padding:20px;">
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$course = $_POST['course'];

echo "<p><b>Name:</b> $name</p>";
echo "<p><b>Email:</b> $email</p>";
echo "<p><b>Phone:</b> $phone</p>";
echo "<p><b>Gender:</b> $gender</p>";
echo "<p><b>Course:</b> $course</p>";
?>
</div>

</body>
</html>
