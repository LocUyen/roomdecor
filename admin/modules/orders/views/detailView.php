<?php
get_header();
?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="detail-exhibition fl-right">
            <div class="section" id="info">
                <div class="section-head">
                    <h3 class="section-title">Thông tin đơn hàng</h3>
                </div>
                
                <ul class="list-item">
                    <li>
                        <h3 class="title">Mã đơn hàng</h3>
                        <span class="detail">#<?php echo $get_order_id['order_id']; ?></span>
                    </li>
                    <li>
                        <h3 class="title">Địa chỉ nhận hàng</h3>
                        <span class="detail"><?php echo $get_order_id['order_address']; ?> / SĐT: <?php echo $get_order_id['order_phone']; ?></span>
                    </li>
                    <li>
                        <h3 class="title">Thông tin vận chuyển</h3>
                        <span class="detail"><?php echo $get_order_id['order_payment']; ?></span>
                    </li>
                    <form method="POST" action="">
                        <li>
                            <h3 class="title">Tình trạng đơn hàng</h3>

                            <select name="status">
                                <?php 
                                foreach($get_list_status as $item){
                                ?>
                                <option value="<?php echo $item['status_id']; ?>" <?php if($get_order_id['status_id']==$item['status_id']){?> selected="selected" <?php } ?>><?php echo $item['status_name']; ?></option>
                                <?php } ?>
                            </select>
                            <input type="text" name="note" placeholder="Ghi chú tình trạng đơn" style="width:600px;">
                            <input type="submit" name="sm_status" value="Cập nhật trạng thái đơn hàng">
                        </li>
                    </form>

                    
                </ul>
                
            </div>
            <div class="section">
                <div class="table-responsive">
                    <table class="table info-exhibition" style="background: aliceblue;">
                        <thead>
                            <tr>
                                <td class="thead-text">STT</td>
                                <td class="thead-text">Trạng thái</td>
                                <td class="thead-text" style="width:200px;">Ngày cập nhật</td>
                                <td class="thead-text" style="width:500px;">Ghi chú</td>
                               
                            </tr>
                        </thead>
                        <?php 
                        $t=0;
                        foreach($get_list_status_by_id as $item){
                            $t++;
                        ?>
                        <tbody>
                            <tr>
                                <td class="thead-text"><?php echo $t; ?></td>
                                <td class="thead-text"><?php echo $item['status_name']; ?></td>
                                <td class="thead-text"><?php echo $item['update_date']; ?></td>
                                <td class="thead-text"><?php echo $item['note']; ?></td>
                            </tr>
                            
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="section">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm đơn hàng</h3>
                </div>
                <div class="table-responsive">
                    <table class="table info-exhibition">
                        <thead>
                            <tr>
                                <td class="thead-text">STT</td>
                                <td class="thead-text">Ảnh sản phẩm</td>
                                <td class="thead-text">Tên sản phẩm</td>
                                <td class="thead-text">Đơn giá</td>
                                <td class="thead-text">Số lượng</td>
                                <td class="thead-text">Thành tiền</td>
                            </tr>
                        </thead>
                        <?php 
                        $t=0;
                        foreach($get_list_order_detail as $item){
                            $t++;
                        ?>
                        <tbody>
                            <tr>
                                <td class="thead-text"><?php echo $t; ?></td>
                                <td class="thead-text">
                                    <div class="thumb">
                                        <img src="public/uploads/<?php echo $item['product_image']; ?>" alt="">
                                    </div>
                                </td>
                                <td class="thead-text"><?php echo $item['product_title']; ?></td>
                                <td class="thead-text"><?php echo currency_format($item['product_discount']); ?></td>
                                <td class="thead-text"><?php echo $item['quatity']; ?></td>
                                <td class="thead-text"><?php echo currency_format($item['price']); ?></td>
                            </tr>
                            
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="section">
                <h3 class="section-title">Giá trị đơn hàng</h3>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <span class="total-fee">Tổng số lượng</span>
                            <span class="total">Tổng đơn hàng</span>
                        </li>
                        <li>
                            <span class="total-fee"><?php echo $get_order_id['order_num']; ?>  sản phẩm</span>
                            <span class="total"><?php echo currency_format($get_order_id['order_total']); ?> </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
get_footer();
?>