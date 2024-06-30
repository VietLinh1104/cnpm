<?php include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mykingdom</title>
    <link rel="apple-touch-icon" href="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_180,h_180/https://linhkienbandan.com/wp-content/uploads/2015/03/cropped-favicon-1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo STYLES_PATH.'sass.css'; ?>">
    <link rel="icon" type="image/png" href="<?php echo MEDIA_PATH?>favicon.png">
</head>
<body>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT'].'/cnpm/app/config/path.php');
        $importAuthen = new Import('authen');

        if(IsAuthen::isAuthen()){
            $role = $_SESSION['roleUser'];
            if($role == 'QL'){
                //pass
            }else{
                header("Location: /cnpm/app/public/views/admin/access");
            }

        }else{
            header("Location: /cnpm/app/public/views/admin/home");
        }
    ?>

    
    <div class="d-flex">
        <!-- sidebar -->
        <?php include(ROOT_PATH. ELEMENTS_PATH."SidebarAd.php")?>

        <div id="page-content-wrapper" class="flex-grow-1">
            
            <!-- navbar -->
            <?php include(ROOT_PATH. ELEMENTS_PATH."NavbarMain.php")?>

            <!-- container -->
            <div class="container-lg">
                <h1 class="mt-2 mb-0 font-bold- font-family-condensed">MANAGER</h1>
                <p class="font-semibold- font-family-poppins mb-2">Trang quản lý</p>
                

                <div class="container-fluid me-4 border rounded p-1">
                    <div class="bg-white border-bottom m-0 pb-1">
                        <h4 class="m-0 font-family-poppins font-bold-">Quản lý lớp </h4>
                        <p class="text-gray-light fs-14 m-0">Thêm kớp</p>
                    </div>
                    
                    <div class="container-fruid pt-1">
                        <div class="row">

                            <div class="col pe-2">
                                <h5 class="font-family-poppins font-semibold- fs-16"></h5>
                                <p class="text-gray-light fs-14">Form thêm lớp.</p>
                            </div>
                            <div class="col-10 pb-0">
                                
                                <!-- form -->
                                <form action="<?php echo CONTROLLERS_PATH?>/quanly/lopmanager/addLop.php" method="post" enctype="multipart/form-data">
                                    <div class="row ">
                                        <div class="col">
                                            <label for="lop" class="font-semibold- fs-16">Tên Lớp</label>
                                            <input type="text" id="lop" name ="lop"  placeholder="Tên lớp" class="form-control px-10px mb-10px">
                                        </div>

                                        <div class="col">
                                            <label for="maLop" class="font-semibold- fs-16">Mã Lớp</label>
                                            <input type="text" id="maLop" name ="maLop"  placeholder="Mã Lớp" class="form-control px-10px mb-10px">
                                        </div>

                                        
                                        
                                    </div>

                                    <div class="col mb-2">
                                        <label for="maLop" class="font-semibold- fs-16 ">Mã Lớp</label>
                                       
                                        
                                        <select name="inputKhoa" id="inputKhoa" class="form-select w-50" aria-label="Floating label select example">
                                            <option value="" selected>Chọn Khoa</option>
                                            <?php
                                            include(ROOT_PATH. CONTROLLERS_PATH. 'quanly/khoamanager/getListKhoa.php');
                                            $result = getListKhoa();
                                            foreach ($result as $index => $row) {
                                                $khoa_id = $row['khoa_id'];
                                                $khoa = $row['khoa'];
                                                $maKhoa = $row['maKhoa'];

                                                echo '<option value="' . $maKhoa . '">' .$maKhoa .' - '. $khoa . '</option>';
                                            }

                                            ?>

                                        </select>
                                    </div>

                                    <!--  -->

                                    <!--  -->
                                
                                    <div class="container bg-white border-top m-0 pt-1">
                                        <div class="row">
                                            <div class="col d-flex justify-content-end">
                                              <!-- Thẻ div chứa button và được căn phải -->
                                              <div>
                                                  <button class="btn btn-gray" type="submit">Thêm Lớp</button>
                                                
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                </form>
                                <!-- form -->
                                
                            </div>
                        </div>

                    </div>


                    
                </div>

                
            </div>


        </div>
    </div>

    
    <style>
        body {
            overflow-x: hidden;
        }
    </style>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            const sidebar = document.getElementById("sidebar");
            const menuIcon = document.getElementById("menu-icon");
            sidebar.classList.toggle("d-none");

            // Toggle between menu and close icons
            if (sidebar.classList.contains("d-none")) {
                menuIcon.innerHTML = `
                    <path fill-rule="evenodd" d="M2.5 12.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm0-4a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm0-4a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11z"/>
                `;
            } else {
                menuIcon.innerHTML = `
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                `;
            }
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>