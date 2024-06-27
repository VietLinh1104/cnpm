<?php
$link = "'".PAGE_PATH."product"."?id=".$row['id']."'";
echo '
    <!-- ITEM CARD -->
    
    
        <div class="card border-0 p-0 mx-3 mb-5" onClick="window.location.href='.$link.'">
            <img src="'.MEDIA_PATH.'bg-card.svg" alt="">
        
            <div class="container card-inside position-absolute vh-100 container-fluid rounded-0 p-4">
                
                <img src="'.UPLOAD_PATH.$row['imgPath'].'" alt="" class="card-img-top my-2 zoom">
                
                <p class="text-gray fs-14 mb-2">'.$row['category'].'</p>
                <h3 class="fs-14 text-secondary mb-4">'.$row['modelName'].'</h3>
                <p class="text-primary fs-18 mb-2">'.$row['price'].' VNĐ</p>
                <button type="button" class="btn btn-primary w-100">Mua ngay</button>
            </div>
        </div>
    
    '

?>
