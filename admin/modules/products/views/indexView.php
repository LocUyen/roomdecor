<?php
get_header();

?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách sản phẩm</h3>
                    <a href="?mod=products&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <!-- <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(69)</span></a> |</li>
                            <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                            <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li>
                            <li class="pending"><a href="">Thùng rác<span class="count">(0)</span></a></li>
                        </ul> -->
                        <form method="GET" class="form-s fl-right">
                            <input type="hidden" value="products" name="mod">
                            <input type="hidden" value="search" name="action">
                            <input type="text" name="key" id="s">
                            <input type="submit" name="s_search" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã sản phẩm</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text" style="width: 150px;">Tên sản phẩm</span></td>
                                    <!-- <td><span class="thead-text">Giá nhập</span></td> -->
                                    <td><span class="thead-text">Giá bán</span></td>
                                    <td><span class="thead-text">Giá đã giảm</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <td><span class="thead-text">Đơn vị</span></td>
                                    <td><span class="thead-text">Danh mục</span></td>
                                    <!-- <td><span class="thead-text">Nhà cung cấp</span></td> -->
                                    <!-- <td><span class="thead-text">Trạng thái</span></td> -->
                                    <td><span class="thead-text">Người tạo</span></td>
                                    <!-- <td style="width:100px"><span class="thead-text">Thời gian</span></td> -->
                                    <td><span class="thead-text">Thao tác</span></td>

                                </tr>
                            </thead>
                            <?php
                            if(!empty($list_products)){
                                $t= $start;
                                foreach($list_products as $item){
                                    // show_array($item);
                                    $t++;
                            ?>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $item['product_code']; ?></h3></span>
                                    <td>
                                        <div class="tbody-thumb">
                                            <img src="public/uploads/<?php echo $item['product_image']; ?>" alt="">
                                        </div>
                                    </td>
                                    
                                    <td class="clearfix">
                                        <div class="tb-title fl-left" style="width: 150px;display:unset;">
                                            <a href="" title=""><?php echo $item['product_title']; ?></a>
                                        </div>
                                        
                                    </td>
                                    <!-- <td><span class="tbody-text"><?php echo currency_format($item['product_price_in']); ?></span></td> -->
                                    <td><span class="tbody-text"><?php echo currency_format($item['product_price']); ?></span></td>
                                    <td><span class="tbody-text"><?php echo currency_format($item['product_discount']); ?></span></td>

                                    <td><span class="tbody-text"><?php echo $item['product_num']; ?></span></td>
                                    
                                    <td><span class="tbody-text"><?php echo $item['unit_name']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['product_cate_title']; ?></span></td>
                                    <!-- <td><span class="tbody-text"><?php echo $item['supplier_name']; ?></span></td> -->

                                    <!-- <td><span class="tbody-text">Hoạt động</span></td> -->
                                    <td><span class="tbody-text"><?php echo $item['user_username']; ?></span></td>
                                    <!-- <td><span class="tbody-text"><?php echo $item['product_updated_date']; ?></span></td> -->
                                    <td>
                                        
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="<?php echo $item['url_update']; ?>" title="Sửa" class="edit"><button type="button" class="btn btn-outline-success" style="margin-bottom: 10px;"><i class="fa fa-pencil"></i></button></a></li>
                                            <li class="list-inline-item"><a href="<?php echo $item['url_delete']; ?>" title="Xóa" class="delete"><button type="button" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                
                            </tbody>
                            <?php
                                }
                            }
                            ?>    
                            <!-- <tfoot>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="tfoot-text">STT</span></td>
                                    <td><span class="tfoot-text">Mã sản phẩm</span></td>
                                    <td><span class="tfoot-text">Hình ảnh</span></td>
                                    <td><span class="tfoot-text">Tên sản phẩm</span></td>
                                    <td><span class="tfoot-text">Giá</span></td>
                                    <td><span class="tfoot-text">Danh mục</span></td>
                                    <td><span class="tfoot-text">Trạng thái</span></td>
                                    <td><span class="tfoot-text">Người tạo</span></td>
                                    <td><span class="tfoot-text">Thời gian</span></td>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                <p id="desc" class="fl-left font-weight-normal text-dark">Có <?php echo$num_rows; ?> sản phẩm</p>
                    
                    <?php 
                        echo get_pagging($num_page, $page, $base_url="?mod=products&controller=index&active=index");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>