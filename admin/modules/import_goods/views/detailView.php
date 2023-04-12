<?php
get_header();
?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="detail-exhibition fl-right">
            <div class="section" id="info">
                <div class="section-head">
                    <h3 class="section-title">Chi tiết thông tin nhập hàng</h3>
                </div>
                
                <ul class="list-item">
                    <li>
                        <h3 class="title">Mã đơn nhập</h3>
                        <span class="detail">#<?php echo $get_import_good_by_id['import_id']; ?></span>
                    </li>
                    <li>
                        <h3 class="title">Nhà cung cấp</h3>
                        <span class="detail"><strong><?php echo $get_import_good_by_id['supplier_name']; ?></strong></span>
                    </li>
                    <li>
                        <h3 class="title">Ngày nhập hàng</h3>
                        <span class="detail"><?php echo $get_import_good_by_id['import_date']; ?></span>
                    </li>
                    <form method="POST" action="">
                        <li>
                            <h3 class="title">Tình trạng đơn hàng</h3>

                            <select name="status">
                                <option value='no'>Chưa thanh toán</option>
                                <option value='yes'>Đã thanh toán</option>
                                
                            </select>
                            <input type="submit" name="sm_status" value="Cập nhật thanh toán">
                        </li>
                    </form>

                    
                </ul>
                
            </div>
            <div class="section">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm đã nhập từ nhà cung cấp</h3>
                </div>
                <div class="table-responsive">
                    <table class="table info-exhibition">
                        <thead>
                            <tr>
                                <td class="thead-text">STT</td>
                                <td class="thead-text">Tên sản phẩm</td>
                                <td class="thead-text">Đơn giá</td>
                                <td class="thead-text">Số lượng</td>
                                <td class="thead-text">Thành tiền</td>
                            </tr>
                        </thead>
                        <?php 
                        $t=0;
                        foreach($get_import_detail_by_id as $item){
                            $t++;
                        ?>
                        <tbody>
                            <tr>
                                <td class="thead-text"><?php echo $t; ?></td>
                                <td class="thead-text"><?php echo $item['product_title']; ?></td>
                                <td class="thead-text"><?php echo currency_format($item['import_price']); ?></td>
                                <td class="thead-text"><?php echo $item['import_quality']; ?></td>
                                <td class="thead-text"><?php echo currency_format($item['import_quality']*$item['import_price']); ?></td>
                            </tr>
                            
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="section">
                <h3 class="section-title">Giá trị đơn nhập</h3>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <span class="total">Tổng đơn hàng</span>
                        </li>
                        <li>
                            <span class="total"><?php echo currency_format($get_import_good_by_id['import_total']); ?> </span>
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