<?php
get_header();

?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar('users'); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách phân quyền</h3>
                    <a href="?mod=privileges&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Tên nhóm quyền</span></td>
                                </tr>
                            </thead>
                            <?php
                            if(!empty($list_role)){
                                $t=$start;
                                foreach($list_role as $item){
                                    $t++;
                            ?>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <a href="" title=""><?php echo $item['role_name']; ?></a>
                                        </div> 
                                        <ul class="list-operation fl-right">
                                            <li><a href="<?php echo $item['url_update']; ?>" title="Sửa" class="edit"><button type="button" class="btn btn-outline-success"><i class="fa fa-pencil"></i></button></a></li>
                                            <li><a href="<?php echo $item['url_delete']; ?>" title="Xóa" class="delete"><button type="button" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                
                            </tbody>
                            <?php    
                                }
                            }
                            ?>
                            
                            
                        </table>
                        
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Có <?php echo $num_rows; ?> nhóm quyền</p>
                    
                    <?php 
                        echo get_pagging($num_page, $page, $base_url="?mod=products&controller=cate&active=cateIndex");
                    ?>
                    <!-- <ul id="list-paging" class="fl-right">
                        <li >
                            <a href="" title=""><</a>
                        </li>
                        <li class="active">
                            <a href="?mod=products&controller=cate&active=cateIndex&page=1" title="">1</a>
                        </li>
                        <li>
                            <a href="?mod=products&controller=cate&active=cateIndex&page=2" title="">2</a>
                        </li>
                        <li>
                            <a href="?mod=products&controller=cate&active=cateIndex&page=3" title="">3</a>
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