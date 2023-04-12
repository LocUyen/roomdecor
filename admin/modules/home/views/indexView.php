
<?php
get_header();

?>

<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div  id="content" class="fl-right">
            <!-- <button class="btn btn-success"><a href="?mod=chart&action=chart_money" class="text-light">Thống kê doanh thu</a></button> -->
            
            <div class="section" id="order_statistical">
                <div class="row mb-5">
                    
                        <div class="col-md-3 mt-3">
                            <div class="shadow bg-primary box rounded">
                                <div class="px-3 py-2 text-white shadow-sm">ĐƠN HÀNG THÀNH CÔNG</div>
                                <div class="px-3 pt-2 pb-1 text-white"><?php echo $num_success['COUNT(status_id)']; ?></div>
                                <div class="px-3 pt-1 pb-2 text-white">Đơn giao dịch thành công</div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="shadow bg-warning box rounded">
                                <div class="px-3 py-2 text-white shadow-sm">ĐANG VẬN CHUYỂN</div>
                                <div class="px-3 pt-2 pb-1 text-white"><?php echo $num_transport['COUNT(status_id)']; ?></div>
                                <div class="px-3 pt-1 pb-2 text-white">Số lượng đơn vận chuyển</div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="shadow bg-dark box rounded">
                                <div class="px-3 py-2 text-white shadow-sm">DOANH SỐ</div>
                                <div class="px-3 pt-2 pb-1 text-white"><?php echo currency_format($num_sale['SUM(order_total)']); ?></div>
                                <div class="px-3 pt-1 pb-2 text-white">Doanh số tổng đơn hàng</div>
                            </div>
                            
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="shadow bg-danger box rounded">
                                <div class="px-3 py-2 text-white shadow-sm">ĐƠN HÀNG HUỶ</div>
                                <div class="px-3 pt-2 pb-1 text-white"><?php echo $num_cancel['COUNT(status_id)']; ?></div>
                                <div class="px-3 pt-1 pb-2 text-white">Số đơn bị huỷ</div>
                            </div>
                            
                        </div>
                   
                </div>
            </div>

            <div class="shadow px-3">
                <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Đơn hàng mới nhất</h3>
                </div>
            
                <div class="section" id="detail-page">
                    <div class="section-detail ">
                        
                        <div class="table-responsive">
                            <table class="table table-hover list-table-wp ">
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
                                    $t=0;
                                    foreach($list_order as $item){
                                        $t++;
                                ?>   
                                <tbody>
                                    
                                    <tr>
                                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                        <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                        <td><span class="tbody-text"><?php echo $item['order_id']; ?></h3></span>
                                        <td>
                                            <div class="tb-title fl-left">
                                                <a href="" title=""><?php echo $item['order_fullname']; ?></a>
                                            </div>
                                            
                                        </td>
                                        <td><span class="tbody-text"><?php echo $item['order_num']; ?></span></td>
                                        <td><span class="tbody-text"><?php echo currency_format($item['order_total']); ?></span></td>
                                        <td><span class="tbody-text"><?php echo $item['status_name']; ?></span></td>
                                        <td><span class="tbody-text"><?php echo $item['order_created_date']; ?></span></td>
                                        <td><a href="<?php echo $item['url_order_detail']; ?>" title="" class="tbody-text btn btn-outline-warning"><i class="fa-sharp fa-solid fa-eye"></i></a></td>
                                    </tr>
                                </tbody>
                                <?php }}?>
                                
                            </table>
                        </div>
                    
                    </div>
                </div>
            </div>
            
            
        </div>    
    </div>
</div>


<?php
get_footer();
?>
 