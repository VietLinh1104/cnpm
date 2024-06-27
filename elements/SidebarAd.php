<?php include_once($_SERVER['DOCUMENT_ROOT'].'/toy/app/config/path.php');?>

<div id="sidebar" class="sidebar bg-white border-end">
    <nav class="navbar navbar-expand-lg navbar-white px-1 mb-2">
        <div class="container-fluid p-0">
            <a href="#" class="navbar-brand m-0 d-flex align-items-center">
                <img src="<?php echo MEDIA_PATH?>logo.svg" style="width: 180px" alt="logo">
            </a> 
        </div>
        
    </nav>

    <label for="listGroup" class="fs-14 font-normal- font-family-poppins text-gray-light ms-1 mb-10px">Main Menu</label>
    <div class="list-group list-group-flush" id="listGroup">
        <a href="<?php echo PAGE_PATH?>admin/add-item/" class="list-group-item  list-group-item-action px-10px mx-1">Add Item</a>
    </div>
    <div class="list-group list-group-flush" id="listGroup">
        <a href="<?php echo PAGE_PATH?>admin/list-item/" class="list-group-item  list-group-item-action px-10px mx-1">List Item</a>
    </div>
</div>