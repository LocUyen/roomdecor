<?php
get_header();
?>
<div id="main-content-wp" class="list-post-page">
    <div class="wrap clearfix">
        <?php get_sidebar('users'); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách người dùng</h3>
                    <a href="?mod=users&controller=team&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <form method="GET" class="form-s fl-right">
                            <input type="hidden" value="users" name="mod">
                            <input type="hidden" value="team" name="controller">
                            <input type="hidden" value="search" name="action">
                            <input type="text" name="key" id="s">
                            <input type="submit" name="s_search" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Chỉnh sửa</option>
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
                                    <td><span class="thead-text">Họ và tên</span></td>
                                    <td><span class="thead-text">Tên đăng nhập</span></td>
                                    <td><span class="thead-text">Số điện thoại</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <!-- <td><span class="thead-text">Địa chỉ</span></td> -->
                                    <td><span class="thead-text">Thời gian</span></td>
                                    <td><span class="thead-text">Thao tác</span></td>

                                </tr>
                            </thead>
                            <?php 
                                if(!empty($search_user)){
                                    $t=0;
                                    foreach($search_user as $item){
                                        $t++;
                                ?>   
                            <tbody>

                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td>
                                        <div class="fl-left">
                                            <a href="" title=""><?php echo $item['user_fullname']; ?></a>
                                        </div>
                                        
                                    </td>
                                    <td><span class="tbody-text"><?php echo $item['user_username']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['user_phone_number']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['user_email']; ?></span></td>
                                    <!-- <td><span class="tbody-text">Nam Từ Liêm -  Hà Nội</span></td> -->
                                    <!-- <td><span class="tbody-text"><?php echo $item['user_address']; ?></span></td> -->
                                    <td><span class="tbody-text"><?php echo $item['user_created_date']; ?></span></td>

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
               
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>