<div id="sidebar" class="fl-left">
    <ul id="list-cat">
        <li>
            <a href="?mod=users&action=reset" title="">Đổi mật khẩu</a>
        </li>
        <li>
            <a href="?mod=users&action=update" title="">Cập nhật thông tin</a>
        </li>
        <?php
        // if(checkPrivilege('\?mod=users&controller=team&action=index')){
        ?>
        <li>
            <a href="?mod=users&controller=team" title="">Nhóm người dùng</a>
        </li>
        <?php
        // }
        ?>
        <?php
        // if(checkPrivilege('\?mod=privileges&action=index')){
        ?>
        <li>
            <a href="?mod=privileges&action=index" title="">Nhóm quyền</a>
        </li>
        <?php
        // }
        ?>
        <li>
            <a href="?mod=users&action=logout" title="">Thoát</a>
        </li>
    </ul>
</div>