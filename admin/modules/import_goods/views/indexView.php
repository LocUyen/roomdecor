<?php
get_header();

?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách hàng đã nhập</h3>
                    <a href="?mod=import_goods&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>

                </div>
            </div>

            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        
                        <form method="GET" class="form-s fl-right">
                            <input type="hidden" value="import_goods" name="mod">
                            <input type="hidden" value="search" name="action">
                            <input type="text" name="key" id="s">
                            <input type="submit" name="s_search" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Xóa</option>
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
                                    <td><span class="thead-text">Ngày nhập</span></td>
                                    <td><span class="thead-text">Nhà cung cấp</span></td>
                                    <td><span class="thead-text">Tổng tiền</span></td>
                                    <!-- <td><span class="thead-text">Địa chỉ</span></td> -->
                                    <td><span class="thead-text">Người tạo</span></td>
                                    <td><span class="thead-text">Thanh toán</span></td>
                                    <td><span class="thead-text">Thao tác</span></td>

                                </tr>
                            </thead>
                                <?php 
                                if(!empty($list_import_good)){
                                    $t=$start;
                                    foreach($list_import_good as $item){
                                        $t++;
                                ?>   
                            <tbody>

                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $item['import_date']; ?></span></td>

                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title=""><?php echo $item['supplier_name']; ?></a>
                                        </div>
                                        
                                    </td>
                                    <td><span class="tbody-text"><?php echo currency_format($item['import_total']); ?></span></td>
                                    <!-- <td><span class="tbody-text">Nam Từ Liêm -  Hà Nội</span></td> -->
                                    <td><span class="tbody-text"><?php echo $item['user_username']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['import_status']; ?></span></td>
                                    <td>
                                        
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="<?php echo $item['url_detail']; ?>" title="Chi tiết" class="edit"><button type="button" class="btn btn-outline-warning"><i class="fa-solid fa-eye"></i></button></a></li>
                                            <li class="list-inline-item"><a href="<?php echo $item['url_print']; ?>" title="In" class="edit"><button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-print"></i></button></a></li>
                                            <li class="list-inline-item"><a href="<?php echo $item['url_delete']; ?>" title="Xóa" class="delete"><button type="button" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>

                               <?php }} ?>
                            
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Có <?php echo $num_rows; ?> đơn nhập</p>
                    
                    <?php 
                        echo get_pagging($num_page, $page, $base_url="?mod=suppliers&active=index");
                    ?>
                    <!-- <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title=""><</a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul> -->

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>