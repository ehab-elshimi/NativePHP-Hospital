<?php 
$title="categories.php";
include "init.php"; 
include $header;
if(isset($_POST['add'])){
    $category=$_POST['category'];
    if(strlen($category)>100){
        echo "error Category Name Should be less than 100 Character";
    }else{
        $sql="INSERT INTO `categories`(`categoryName`) VALUES ('$category')";
        $query=mysqli_query($conn,$sql);
        if(!$query){
            die("error db");
        }
    }
}


?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" id="side-area">
                    <h4>لوحة التحكم</h4>
                    <ul>
                        <li>
                            <a href="categories.php">
                                <span><i class="fas fa-tags"></i></span>
                                <span>التصنيفات</span>
                            </a>
                        </li>
                        <li data-toggle="collapse" data-target="#menu">
                            <a href="#">
                                <span><i class="far fa-newspaper"></i></span>
                                <span>المقالات</span>
                            </a>
                        </li>
                        <ul  class="collapse" id="menu">
                            <li>
                                <a href="new-post.php">
                                    <span><i class="far fa-edit"></i></span>
                                    <span>مقال جديد</span>  
                                </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span><i class="fas fa-th-large" aria-hidden="true"></i></span>
                                        <span>كل المقالات</span>
                                    </a>
                                </li>
                        </ul>
                        <li>
                            <a href="">
                                <span><i class="fas fa-window-restore"></i></span>
                                <span>عرض الموقع</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span><i class="fas fa-sign-out-alt"></i></span>
                                <span>تسجيل الخروج</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10" id="main-area">
                    <div class="add-category">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="category">تصنيف جديد</label>
                                <input type="text" name="category" class="form-control" required>
                            </div>
                            <button class="btn btn-custom" name="add">إضافة</button>
                        </form>
                    </div>
                    <div class="display-cat mt-5">
                        <table class="table table-border">
                            <tr class="thead-dark">
                                <td>رقم الفئة</td>
                                <td>اسم الفئة</td>
                                <td>تاريخ الإضافة</td>
                            </tr>
                            <?php
                            $sqlOne="SELECT * FROM `categories`";
                            $queryOne=mysqli_query($conn,$sqlOne);
                            $results=mysqli_fetch_all($queryOne,MYSQLI_ASSOC);
                            foreach($results as $result){?>
                                <tr>
                                <td>
                                <?php echo $result['id']; ?>
                                </td>
                                <td>
                                <?php echo $result['categoryName']; ?>
                                </td>
                                <td>
                                <?php echo $result['categoryDate']; ?>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include $footer; ?>




