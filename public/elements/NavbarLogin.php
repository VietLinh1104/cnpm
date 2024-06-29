<nav class="navbar navbar-expand-lg navbar-white px-1">
    <div class="container-fluid p-0">
        <!-- Toggle button is initially outside the sidebar -->
        <div id="menu-toggle" style="cursor: pointer;">
            <!-- SVG Icon for menu -->
            <div class="btn-taggle-svg">

                <!-- <img src="/app/media/logo.png" alt=""> -->
            </div>
            
        </div>
        <div class="act">
            <button onclick="window.location.href = '<?php echo PAGE_PATH; ?>admin/login';" class="btn btn-gray" type="submit">Log In</button>
            <button onclick="window.location.href = '<?php echo PAGE_PATH; ?>admin/register';" class="btn btn-gray" type="submit">Register</button>
        </div>
    </div>
</nav>