<?php
global $title;

if($title=="categories.php"){
    $arr=['dashboard'];
    $aStyle=array(
    "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>",
    "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>",
    "<script src='ttps://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>",
    "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>"
    );
}else if($title=="new-post.php"){
    $arr=['dashboard'];
}elseif($title="index.php"){
    $arr=['custom'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تدويناتي</title>
           <!-- BOOTSTRA FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <?php 
    for($i=0;$i<count($arr);$i++){
        echo "<link rel='stylesheet' href='css/$arr[$i].css'>\n";
    }
    ?>
    <link rel="stylesheet" href="css/font/Neo Sans Std Bold.otf">
    <link rel="stylesheet" href="css/font/Neo Sans Std Light.otf">
    <link rel="stylesheet" href="css/font/Neo Sans Std Regular.otf">
    <?php 
    // foreach($aStyle as $a){
        // echo $a;
    // }

    ?>
</head>
<body>