<?php
get_header();
?>
<div id="main-content-wp" class="change-pass-page">
    <!-- <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" class="fl-left mr-5">Phân quyền cho thành viên</h3>
        </div>
    </div> -->
    <div class="wrap clearfix">
        <?php 
        get_sidebar('users');
        ?>
        <div id="content" class="fl-right">  
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left mr-5">Phân quyền cho thành viên</h3>
                </div>
            </div>                 
            <div class="section" id="detail-page">
                <div class="section-detail">
                <div class="container">
                    <?php
                    $current_privilegeList = array();
                    if(!empty($get_user_privilege_by_id)){
                        foreach($get_user_privilege_by_id as $current_privilege){
                            $current_privilegeList[] = $current_privilege['privilege_id'];
                        }
                    }
                    ?>
                    <form action="" method="POST">
                        <?php 
                        $t=0;
                        foreach($privileges_group as $group){
                            $t++;
                        ?>
                        <div class="row mb-3">
                            <h6 class="col-12"><?php echo $t; ?>. <?php echo $group['group_name']; ?></h6>
                            
                            <div class="col-12 ml-2">
                                <?php 
                                foreach($privileges as $privilege){
                                    if($group['group_id'] == $privilege['group_id']){
                                ?>
                                <div class="form-check-inline">
                                    <label class="form-check-label" for="check_<?php echo $privilege['privilege_id']; ?>">
                                        <input type="checkbox" 
                                        <?php 
                                        if(in_array($privilege['privilege_id'], $current_privilegeList)){
                                        ?>
                                        checked = ""
                                        <?php 
                                        } 
                                        ?>
                                        class="form-check-input" id="privilege_<?php echo $privilege['privilege_id']; ?>" name="privilege[]" value="<?php echo $privilege['privilege_id']; ?> " ><?php echo $privilege['privilege_name']; ?>
                                    </label>
                                </div>
                                <?php }}?>

                            </div>
                        </div>
                        <?php    
                        }
                        ?>
                        
                        <button type="submit" name ="submit" class="btn btn-primary">Lưu</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>