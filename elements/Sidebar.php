<?php include_once($_SERVER['DOCUMENT_ROOT'].'/toy/app/config/path.php');?>

<!-- sidebar header -->


<div class="sidebar container-fruid ">
    <h2 class="text-primary font-family-jak font-extrabold fs-18 py-3">Danh Mục</h2>
    <ul class="text-primary fs-14 font-normal">
    <a href="<?php echo PAGE_PATH?>collections"> <li class="border-bottom border-white py-2 m-0">Tất cả</li></a>
        <a href="<?php echo PAGE_PATH?>collections?category=Siêu anh hùng"> <li class="border-bottom border-white py-2 m-0">Siêu anh hùng</li></a>
        <a href="<?php echo PAGE_PATH?>collections?category=Kẹo đồ chơi"> <li class="border-bottom border-white py-2 m-0">Kẹo đồ chơi</li></a>
        <a href="<?php echo PAGE_PATH?>collections?category=Đồ chơi lắp ghép"> <li class="border-bottom border-white py-2 m-0">Đồ chơi lắp ghép</li></a>
        <a href="<?php echo PAGE_PATH?>collections?category=Đồ chơi sáng tạo"> <li class="border-bottom border-white py-2 m-0">Đồ chơi sáng tạo</li></a>
    </ul>
</div>