<?php
get_header();

?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                    <!-- <a href="?mod=orders&action=add" title="" id="add-new" class="fl-left">Thêm mới</a> -->

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
                                <input type="hidden" value="orders" name="mod">
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
                                        <td><span class="thead-text">Mã đơn hàng</span></td>
                                        <td><span class="thead-text">Họ và tên</span></td>
                                        <td><span class="thead-text">Số sản phẩm</span></td>
                                        <td><span class="thead-text">Tổng giá</span></td>
                                        <td><span class="thead-text">Trạng thái</span></td>
                                        <td><span class="thead-text">Thời gian</span></td>
                                        <td><span class="thead-text">Chi tiết</span></td>

                                    </tr>
                                </thead>
                                <?php 
                                if(!empty($list_order)){
                                    $t=$start;
                                    foreach($list_order as $item){
                                        $t++;
                                ?>   
                                <tbody>
                                    
                                    <tr>
                                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                        <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                        <td><span class="tbody-text"><?php echo $item['order_id']; ?></h3></span>
                                        <td>
                                            <div class="tb-title fl-left" style="width: 100%">
                                                <a href="" title=""><?php echo $item['order_fullname']; ?></a>
                                            </div>
                                            
                                        </td>
                                        <td><span class="tbody-text"><?php echo $item['order_num']; ?></span></td>
                                        <td><span class="tbody-text"><?php echo currency_format($item['order_total']); ?></span></td>
                                        <td><span class="tbody-text"><?php echo $item['status_name']; ?></span></td>
                                        <td><span class="tbody-text"><?php echo $item['order_created_date']; ?></span></td>
                                        <td><a href="<?php echo $item['url_order_detail']; ?>" title="" class="tbody-text btn btn-outline-warning"><i class="fa-solid fa-eye"></i></a></td>
                                        <td><a href="<?php echo $item['url_delete']; ?>" title="" class="tbody-text btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                                    </tr>
                                </tbody>
                                <?php }}?>
                                
                            </table>
                        </div>
                    </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Có <?php echo $num_rows; ?> đơn hàng</p>
                    
                    <?php 
                        echo get_pagging($num_page, $page, $base_url="?mod=orders&active=index");
                    ?>
                   

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>