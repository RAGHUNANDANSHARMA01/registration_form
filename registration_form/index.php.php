<?php
$insert=false;
//if($isset($_POST['name'])){
if($_SERVER['REQUEST_METHOD']=='POST'){   //
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
//$con=new mysqli('localhost','root','','maan');
$con=new mysqli('localhost','id21918810_localhost
','r@1P7050','id21918810_raghusharma
');
if($con){
$sql="INSERT INTO `maan`(`name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ('$name','$age','$gender','$email','$phone','$other')";
//$result=mysqli_query($con,$sql);
//if($result){
//echo"data inserted successfully";
if($con->query($sql)==true){
$insert=true;
}else{
 die(mysqli_error($con));
}
}else{
die(mysqli_error($con));
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="https://media.istockphoto.com/id/1166029933/video/sea-or-ocean-waves-close-up-view-blue-waves-sea-water-blue-crystal-clear-water-one-can-see.jpg?s=640x640&k=20&c=D1apsttRE1ZV5c7vCcd6_9APFmNlCxGyICoQ7if6QDM=" alt="images not found">
    <div class="container">
        <h1>Hello welcome to Raghunandan sharma</h1>
       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nulla.</p>
<?php
if($insert == true){
      echo "<p class='submitmsg'> !! Thanks you for submit your form !! 
      </p>";
}
?>
    <form action="index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <input type="text" name="age" id="age" placeholder="Enter your age" required>
        <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone" required>
        <textarea name="other" id="other" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>

    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>