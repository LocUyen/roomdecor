<?php
get_header();

?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách nhà cung cấp</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(69)</span></a></li>
                        </ul>
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
                                    <td><span class="thead-text">Họ và tên</span></td>
                                    <td><span class="thead-text">Số điện thoại</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <!-- <td><span class="thead-text">Địa chỉ</span></td> -->
                                    <td><span class="thead-text">Địa chỉ</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                    <td><span class="thead-text">Thao tác</span></td>

                                </tr>
                            </thead>
                                <?php 
                                if(!empty($search_supplier)){
                                    $t=0;
                                    foreach($search_supplier as $item){
                                        $t++;
                                ?>   
                            <tbody>

                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td>
                                        <div class="fl-left">
                                            <a href="" title=""><?php echo $item['supplier_name']; ?></a>
                                        </div>
                                        
                                    </td>
                                    <td><span class="tbody-text"><?php echo $item['supplier_phone']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['supplier_email']; ?></span></td>
                                    <!-- <td><span class="tbody-text">Nam Từ Liêm -  Hà Nội</span></td> -->
                                    <td><span class="tbody-text"><?php echo $item['supplier_address']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['supplier_created']; ?></span></td>
                                    <td>
                                        
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="<?php echo $item['url_update']; ?>" title="Sửa" class="edit"><button type="button" class="btn btn-outline-success"><i class="fa fa-pencil"></i></button></a></li>
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

?>