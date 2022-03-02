<?php 
$title="new-post.php";
include "init.php"; 
include $header;
if(isset($postAdd)){
$postTitle=$_POST['title'];
$postCat=$_POST['category'];
$postContent=$_POST['content'];
$postAuthor="عبدالله محمد";
$postAdd=$_POST['add'];
$imageName=$_FILES['image']['name'];
$imageTmp=$_FILES['image']['tmp_name'];
$imageAllowedExtentios=array('jpg','jpeg','png','gif');
$imageExtention=strtolower(end(explode('.',$imageName)));
    if($postContent>5){
        echo "محتوي المنشور كبير جدا";
    }else{
        $postImage=rand(0,10000);
        echo $postImage ."<br>";
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
                                <a href="">
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
                    <button class="btn-custom">مقال جديد</button>
                    <div class="add-category">
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                            <div class="form-group">
                                <label for="title">عنوان المقال</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cate">التصنيف</label>
                                <select name="category" id="cate" class="form-control">
                                    <option value="">بلوجر</option>
                                    <option value="">ويب</option>
                                    <option value="">دورات</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image" class="">صورة المقالة</label>
                                <input type="file" id="image"  name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="content" class="">نص المقالة</label>
                                <textarea name="content" id="content" class="form-control" cols="30" rows="10">

                                </textarea>
                            </div>
                            <button class="btn btn-custom" name="add" >نشر المقالة</button>
                        </form>
                    </div>
                </div>
                </div>
                </div>
                </div>
<?php include $footer;?>
