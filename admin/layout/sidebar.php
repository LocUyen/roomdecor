<div id="sidebar" class="fl-left">
    <ul id="sidebar-menu">
        <?php
        // if(checkPrivilege('\?mod=posts&action=index') | checkPrivilege('\?mod=posts&controller=cate&action=index')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-pencil-square-o icon"></span>
                <span class="title">Bài viết</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=posts&action=add" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=posts&action=index" title="" class="nav-link">Danh sách bài viết</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=posts&controller=cate&action=index" title="" class="nav-link">Danh mục bài viết</a>
                </li>
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // // // // // if(checkPrivilege('\?mod=products&action=index') | checkPrivilege('\?mod=products&controller=cate&action=index') | checkPrivilege('\?mod=products&controller=rating&action=index')| checkPrivilege('\?mod=products&controller=cate&action=index') | checkPrivilege('\?mod=products&controller=unit')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class=""><i class="fa-brands fa-product-hunt"></i></span>
                <span class="title">Sản phẩm</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=products&action=add" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=products&action=index" title="" class="nav-link">Danh sách sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=products&controller=cate&action=index" title="" class="nav-link">Danh mục sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=products&controller=rating&action=index" title="" class="nav-link">Đánh giá bình luận</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=products&controller=unit" title="" class="nav-link">Đơn vị sản phẩm</a>
                </li>
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=orders&action=index')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class=""><i class="fa-solid fa-money-bill"></i></span>
                <span class="title">Bán hàng</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=orders&action=index" title="" class="nav-link">Danh sách đơn hàng</a>
                </li>
                
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=suppliers&action=index')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class=""><i class="fa-brands fa-supple"></i></span>
                <span class="title">Nhà cung cấp</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=suppliers&action=add" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=suppliers&action=index" title="" class="nav-link">Danh sách nhà cung cấp</a>
                </li>
                
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=import_goods&action=index')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class=""><i class="fa-solid fa-file-invoice"></i></span>
                <span class="title">Nhập hàng</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=import_goods&action=add" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="?mod=import_goods&action=index" title="" class="nav-link">Danh sách đã nhập</a>
                </li>
                
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=chart')){
        ?>
        <li class="nav-item">
            <a href="?mod=chart&action=chart_money" title="" class="nav-link nav-toggle">
                <span><i class="fa-solid fa-chart-simple"></i></span>
                <span class="title">Thống kê</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=chart&action=chart_money" title="" class="nav-link">Thống kê doanh thu</a>
                </li>
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=decor_service&action=index')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class=""><i class="fa-brands fa-servicestack"></i></span>
                <span class="title">Đội ngũ decor</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=decor_service&action=index" title="" class="nav-link">Danh sách</a>
                </li>
                
                
            </ul>
        </li>
        <?php 
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=decor_service&action=index')){
        ?>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class=""><i class="fa-solid fa-comments"></i></i></i></span>
                <span class="title">Khiếu nại phản hồi</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="?mod=feedback&action=index" title="" class="nav-link">Danh sách</a>
                </li>
            </ul>
        </li>
        <?php 
        // }
        ?>
    </ul>
</div>
