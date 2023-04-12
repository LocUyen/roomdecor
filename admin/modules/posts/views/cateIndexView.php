<?php
get_header();

?>
<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh mục bài viết</h3>
                    <a href="?mod=posts&controller=cate&action=add" title="" id="add-new" class="fl-left">Thêm mới</a>
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
                                    <td><span class="thead-text">Mã loại bài viết</span></td>
                                    <td><span class="thead-text">Tiêu đề</span></td>
                                    
                                    <!-- <td><span class="thead-text">Thứ tự</span></td> -->
                                    <!-- <td><span class="thead-text">Trạng thái</span></td> -->
                                    <!-- <td><span class="thead-text">Người tạo</span></td> -->
                                    <!-- <td><span class="thead-text">Thời gian</span></td> -->
                                </tr>
                            </thead>
                            <?php
                            if(!empty($list_post_cate)){
                                $t=$start;
                                foreach($list_post_cate as $item){
                                    // show_array($item);
                                    $t++;
                            ?>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $item['post_cate_id']; ?></h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <a href="" title=""><?php echo $item['post_cate_title']; ?></a>
                                        </div> 
                                        <ul class="list-operation fl-right">
                                            <?php
                                            // if(checkPrivilege('\?mod=products&action=index') | checkPrivilege('\?mod=products&controller=cate&action=index')){
                                            ?>
                                            <li><a href="<?php echo $item['url_update']; ?>" title="Sửa" class="edit"><button type="button" class="btn btn-outline-success"><i class="fa fa-pencil"></i></button></a></li>
                                            <?php 
                                        // }
                                         ?>
                                            <?php
                                            // if(checkPrivilege('\?mod=products&action=index') | checkPrivilege('\?mod=products&controller=cate&action=index')){
                                            ?>
                                            <li><a href="<?php echo $item['url_delete']; ?>" title="Xóa" class="delete"><button type="button" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></li>
                                            <?php 
                                        // }
                                         ?>

                                        </ul>
                                    </td>

                                    <!-- <td><span class="tbody-text">0</span></td> -->
                                    <!-- <td><span class="tbody-text">Hoạt động</span></td> -->
                                    <!-- <td><span class="tbody-text">Admin</span></td> -->
                                    <!-- <td><span class="tbody-text">12-07-2016</span></td> -->
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
                    <p id="desc" class="fl-left">Có <?php echo $num_rows; ?> danh mục bài viết</p>
                    
                    <?php 
                        echo get_pagging($num_page, $page, $base_url="?mod=posts&controller=cate&active=cateIndex");
                    ?>
                    <!-- <ul id="list-paging" class="fl-right">
                        <li >
                            <a href="" title=""><</a>
                        </li>
                        <li class="active">
                            <a href="?mod=posts&controller=cate&active=cateIndex&page=1" title="">1</a>
                        </li>
                        <li>
                            <a href="?mod=posts&controller=cate&active=cateIndex&page=2" title="">2</a>
                        </li>
                        <li>
                            <a href="?mod=posts&controller=cate&active=cateIndex&page=3" title="">3</a>
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