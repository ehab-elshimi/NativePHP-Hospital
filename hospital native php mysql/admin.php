<?php require_once "dbconnect.php"; ?>
<?php  
    $sql="SELECT * FROM `patients`";
    $querySelect=mysqli_query($conn,$sql);
    $result=mysqli_fetch_all($querySelect,MYSQLI_ASSOC);
 ?>



<?php include "header.php"; ?>
<table>
    <tr>
    <th>الرقم</th>
    <th>إسم المريض</th>
    <th>البريد الالكتروني</th>
    <th>التاريخ</th>
</tr>
<?php foreach($result as $key){?>
    <tr>
        <td><?php echo $key["id"] ?></td>
        <td><?php echo $key["name"]?></td>
        <td><?php echo $key["email"]?></td>
        <td><?php echo $key["date"] ?></td>
    </tr>
    <?php } ?>
</table>