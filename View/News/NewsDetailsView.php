<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/NewsDetail.css.php");
$id = $_GET["id"]; // Lấy ID từ tham số truyền vào
$news = getNews($id); // Lấy tin tức dựa trên ID
if ($news) {
?>
<div class= "p-5"></div>
    <title>Helooo</title>
    <div class= "container"> 
        <div class= "p-3"></div>
        <h5><?php echo $news['title'] ?></h5>
        <p><?php echo $news['descriptions'] ?></p>
        <span><p style="font-style: italic;"><?php echo $news['created_at'] ?></p></span>
        <img src="<?php echo $news['image_url'] ?>" alt="ảnh"class = "img">
        <div class= "p-3"></div>
        <p><?php echo $news['content'] ?></p> 
        <p>Xem chi tiết bài viết ở đây <a href="<?php echo $news['link'];?>"><?php echo $news['link'];?></a></p>

    </div>
<?php
} else {
    echo "Không tìm thấy tin tức";
}

include("../View/LayOut/Footer/Footer.php");
?>