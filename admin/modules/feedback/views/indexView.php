<?php
get_header();

?>
<div id="main-content-wp" class="list-product-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            
            
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Chăm sóc khách hàng</h3>
                </div>
            </div>

            <div class="section" id="detail-page">
                <div class="section-detail">
                    
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Email</span></td>
                                    <td><span class="thead-text">Nội dung</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>

                                </tr>
                            </thead>
                                <?php 
                                if(!empty($list_feedback)){
                                    $t=$start;
                                    foreach($list_feedback as $item){
                                        $t++;
                                ?>   
                            <tbody>

                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo $t; ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $item['email']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['feedback']; ?></span></td>
                                    <td><span class="tbody-text"><?php echo $item['created_date']; ?></span></td>
                                    
                                </tr>
                            </tbody>

                               <?php }} ?>
                            
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Có <?php echo $num_rows; ?> phản hồi</p>
                    
                    <?php 
                        echo get_pagging($num_page, $page, $base_url="?mod=feedbacks&active=index");
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