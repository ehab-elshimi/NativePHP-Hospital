<?php require_once "dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al shifa Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">

</head>
<body>
    <!-- <h2>مرحبا بك ايها الزائر الكريم</h2> -->
    <div class="main">
        <div class="logo">
            <img src="images/logo.png" alt="">
            <h2>مستشفي الشفاء</h2>
        </div>
    <div class="book">
        <p>اهلا بك في مستشفى الشفاء ,, للحجز املء الإستمارة أدناة</p>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" placeholder="أدخل الاسم" name="name" required>
            <input type="email" placeholder="أدخل البريد الالكتروني" name="email" required>
            <input type="date" name="date" id="travel" min="2018-09-01" max="2018-09-20" required>
            <input type="submit" name="send" value="احجز الان">
        </form>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['send'])){
$pName=$_POST["name"];
$pEmail=$_POST["email"];
$pDate=$_POST["date"];

    $sql="INSERT INTO `patients`(`name` ,`email` ,`date`) 
          VALUES ('$pName','$pEmail','$pDate')";
    $query=mysqli_query($conn,$sql);
    if(!$query){
        echo "<p style = 'color:red'> عفوا حدث خطأ ما .. حاول مرة أخري </p>";
    }else{
        echo "<p style = 'color:green'> تم الحجز </p>";
    }
}
?>

