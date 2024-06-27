<?php include_once($_SERVER['DOCUMENT_ROOT'].'/toy/app/config/path.php');?>

<!-- nav-item -->
<nav class="navbar navbar-expand-lg fixed-top bg-secondary">
    <div class="container-sm font-family-mont">

            <!-- dropdown container -->
        
            <ul class="navbar-nav w-100">

                <!-- dropdown -->
                <li class="nav-item ms-3">
                    <div class="nav-link  text-white fs-14 font-family-jak font-bold p-0">
                        Miễn phí giao hàng đơn từ 500k
                    </div>
                </li>

                <li class="nav-item m-auto">
                    <div class="nav-link  text-white fs-14 font-family-jak font-bold p-0">
                        Giao hàng hỏa tốc 4 tiếng
                    </div>
                </li>

                <li class="nav-item pe-3">
                    <a class="nav-link  text-white fs-14 font-family-jak font-bold p-0" href="#">
                        Hệ thống 232 cửa hàng
                    </a>
                </li>
                <!-- dropdown -->

            </ul>
        
            <!-- dropdown container -->

    </div>
</nav>
<!-- nav-item -->

<!-- navbar -->
<nav class=" navbar navbar-main navbar-expand-lg shadow fixed-top align-items-center p-0 pt-3 px-5">
    <div class="container-sm w-100 d-flex justify-content-between align-items-center">
        
        <!-- Logo -->
        <a href="<?php echo PAGE_PATH?>home" class="navbar-brand m-0 p-0 d-flex align-items-center">
            <img src="<?php echo MEDIA_PATH?>logo.svg" alt="Logo" class="logo-size-1">
        </a>

        <!-- Search bar -->
        <div class="col-md-6">
            <form class="form-inline">
                <div class="input-group w-100">
                    <input type="text" class=" p-2 ps-3 form-control rounded-pill border-0 font-family-jak text-text" placeholder="Nhập từ khóa để tìm kiếm (ví dụ: balo, xe đạp,...)">
                </div>
            </form>
        </div>
        <!-- End Search bar -->

        <!-- Bag -->
        <div>
            <span class="header-cart-title me-2 font-family-jak text-white font-bold fs-14">
                GIỎ HÀNG    /       
                <span class="cart-price">
                    <span class="font-semibold">
                        <bdi>0<span>₫</span></bdi>
                    </span>
                </span>
            </span>

            <a href="#" class="ml-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" stroke="white" stroke-width="0.8" class="bi bi-bag" viewBox="0 0 18 18">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                </svg>
            </a>

        </div>
        <!-- End Bag -->

    </div>

</nav>
<!-- navbar -->

<!-- placeholder cho navbar -->

<!-- nav-item -->
<nav class="navbar fixed-top  navbar-expand-lg navbar-sec border-bottom border-primary-trans">
    <div class="container-sm font-family-mont">

            <!-- dropdown container -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">

                <!-- dropdown -->
                <li class="nav-item font-bold fs-16 font-family-jak mx-auto ms-0 dropdown">
                    <a class="nav-link fs-14 text-white dropdown-toggle p-0" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
                        DANH MỤC
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo PAGE_PATH?>home">Home</a>
                    </div>
                </li>

                <li class="nav-item font-bold fs-16 font-family-jak mx-auto dropdown">
                    <a class="nav-link fs-14 text-white dropdown-toggle p-0" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
                        HƯỚNG DẪN
                    </a>
                </li>

                <li class="nav-item font-bold fs-16 font-family-jak mx-auto ">
                    <a class="nav-link fs-14 text-white p-0" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
                        LIÊN HỆ
                    </a>
                </li>

                <li class="nav-item font-bold fs-16 font-family-jak mx-auto ">
                    <a class="nav-link fs-14 text-white p-0" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
                        ĐĂNG NHẬP
                    </a>
                </li>

                <li class="nav-item font-bold fs-16 font-family-jak mx-auto ">
                    <a class="nav-link fs-14 text-white p-0" href="#" id="navbarDropdownMenuLink" role="button" aria-haspopup="true" aria-expanded="false">
                        CẨM NANG
                    </a>
                </li>
                
                <!-- dropdown -->

            </ul>
        </div>
            <!-- dropdown container -->


    </div>
</nav>
<!-- nav-item -->