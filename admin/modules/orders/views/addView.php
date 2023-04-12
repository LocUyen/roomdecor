<?php
get_header();

?>

<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm đơn hàng</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <div class="row ml-3 shadow">
                            <div class="col-sm-12">
                                <div class="row border border-primary p-3">
                                    <div class="col-sm-4">
                                        <label for="product-code">Sản phẩm</label>
                                        
                                        <select style="width: inherit;" name="get_list_product_id">
                                            <option value="">---Chọn---</option>

                                            <?php
                                            if(!empty($get_list_product)){
                                                foreach($get_list_product as $item){
                                            ?>
                                            <option value="<?php echo $item['product_id']; ?>"><?php echo $item['product_title']; ?></option>
                                            <?php
                                            }}
                                            ?>
                                        </select>  
                                    </div>
                                    <!-- <div class="col-sm-4">
                                        <label for="product-code">Sản phẩm</label>
                                        <input type="search" name="search" id="search_product" class="form-control rounded-0" placeholder="Nhập mã hoặc tên sản phẩm cần tìm" style="width:92%">
                                        <ul class="list-group" id="list_product">
                                            <li class="list-group-item"></li>
                                        </ul>
                                    </div> -->
                                    <!-- <div class="col-sm-3">
                                        <label for="import_price">Giá nhập</label>
                                        <input style="width: inherit;" type="text" name="import_price" id="import_price">
                                        <?php echo form_error('import_price'); ?>
                                    </div> -->
                                    <div class="col-sm-3">
                                        <label for="product-code">Số lượng</label>
                                        <input style="width: inherit; border: 1px solid #ddd; padding: 4px 10px;" type="number" name="import_quality" id="import_quality">
                                        <?php echo form_error('supplier_email'); ?>
                                    </div>
                                
                                    <div class="col-sm-2">
                                    <!-- <label for=""> </label> -->
                                    <button style="margin-top: 40px;" type="submit" name="btn-create" id="btn-submit">Thêm mới</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table list-table-wp">
                                        <thead>
                                            <tr>
                                                <td><span class="thead-text">STT</span></td>
                                                <td><span class="thead-text">Sản phẩm</span></td>
                                                <td><span class="thead-text">Số lượng</span></td>
                                                <td><span class="thead-text">Đơn giá</span></td>
                                                <td><span class="thead-text">Thành tiền</span></td>
                                                <td><span class="thead-text">Thao tác</span></td>

                                            </tr>
                                        </thead>
                                            <?php 
                                            if(!empty($_SESSION['import_goods']['add'])){
                                                $t=0;
                                                foreach($_SESSION['import_goods']['add'] as $item){
                                                    $t++;
                                            ?>   
                                        <tbody>
                                            
                                            <tr>
                                                <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                                <td>
                                                    <div class="tb-title fl-left">
                                                        <a href="" title=""><?php echo $item['product_title']; ?></a>
                                                    </div>
                                                    
                                                </td>
                                                <td><span class="tbody-text"><?php echo $item['import_quality']; ?></span></td>
                                                <!-- <td><span class="tbody-text">Nam Từ Liêm -  Hà Nội</span></td> -->
                                                <td><span class="tbody-text"><?php echo currency_format($item['import_price']); ?></span></td>
                                                <td><span class="tbody-text"><?php echo currency_format($item['import_quality']* $item['import_price']); ?></span></td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><a href="<?php echo $item['url_delete']; ?>" title="Xóa" class="delete btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <?php }} ?>
                                        
                                    </table>
                                </div>
                                </div>

                            
                            </div>
                        
                        </div>
                        <div class="col-sm-12 mt-5">
                            <label for="product-name">Tên khách hàng</label>
                            <input style="width: inherit; border: 1px solid #ddd; padding: 4px 10px;" type="text" name="order_fullname" id="order_fullname">
                            
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="import_status">Trạng thái</label>
                                    <select style="width: inherit;" name="order_status">
                                        <option value="">---Chọn---</option>
                                        <option value="Chờ duyệt">Chờ duyệt</option>
                                        <option value="Đang vận chuyển">Đang vận chuyển</option>
                                        <option value="Thành công">Thành công</option>
                                    </select>  
                                </div>
                                <div class="col-sm-4">
                                    <label for="import_created_by">Người tạo</label>
                                    <select style="width: inherit;" name="get_list_user_id">
                                            <option value="">---Chọn---</option>

                                            <?php
                                            if(!empty($get_list_user_id)){
                                                foreach($get_list_user_id as $item){
                                            ?>
                                            <option value="<?php echo $item['user_id']; ?>"><?php echo $item['user_title']; ?></option>
                                            <?php
                                            }}
                                            ?>
                                        </select>  
                                </div>
                            </div>
                        </div>
                            
                        

                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

?>