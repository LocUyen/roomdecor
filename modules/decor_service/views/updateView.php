<?php
get_header('service');
// show_array($list_service);

?>
<div class="container shadow-lg">
    <form action="" method="POST">
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <h1 class="text-center">SỬA THÔNG TIN TEAM DECOR</h1>
            </div>
        </div>

        <div class="row mt-4">
       
            <div class="col-12 col-md-12 col-sm-12">
                <div class="custom-file">
                    <!-- <label for="username" class="font-weight-bold mb-1">Địa chỉ:</label> -->
                    <input name="service_address" type="text" class="form-control" placeholder="Nhập địa chỉ" id="service_address" value="<?php echo $get_list_service_by_id['service_address']; ?>">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="service_team_name" class="font-weight-bold mb-1">Tên:</label>
                        <input name="service_team_name" type="text" class="form-control" placeholder="Nhập tên team" id="service_team_name" value="<?php echo $get_list_service_by_id['service_team_name']; ?>">
                        

                    </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="service_experience" class="font-weight-bold mb-1">Thời gian hoạt động:</label>
                        <input name="service_experience" type="text" class="form-control" placeholder="Nhập năm kinh nghiệm, vd: 2 năm" id="service_experience" value="<?php echo $get_list_service_by_id['service_experience']; ?>">
                    </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="service_project" class="font-weight-bold mb-1">Dự án thi công:</label>
                        <input name="service_project" type="text" class="form-control" placeholder="Nhập số dự án đã tham gia" id="service_project" value="<?php echo $get_list_service_by_id['service_project']; ?>">
                    </div>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-8 col-sm-8 col-md-8">
                    <div class="form-group">
                        <label for="service_area" class="font-weight-bold mb-1">Khu vực hoạt động:</label>
                        <input name="service_area" type="text" class="form-control" placeholder="vd: TP Cần thơ, quận Cái răng" id="service_area" value="<?php echo $get_list_service_by_id['service_area']; ?>">
                    </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
            <div class="form-group">
                <label for="service_location" class="font-weight-bold mb-1">Tỉnh:</label>
                <select name="service_location" class="form-control" id="service_location">
                    <option value="<?php echo $get_list_service_by_id['service_location']; ?>" selected="selected"><?php echo $get_list_service_by_id['service_location']; ?>
                    <option value="An Giang">An Giang
                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                    <option value="Bắc Giang">Bắc Giang
                    <option value="Bắc Kạn">Bắc Kạn
                    <option value="Bạc Liêu">Bạc Liêu
                    <option value="Bắc Ninh">Bắc Ninh
                    <option value="Bến Tre">Bến Tre
                    <option value="Bình Định">Bình Định
                    <option value="Bình Dương">Bình Dương
                    <option value="Bình Phước">Bình Phước
                    <option value="Bình Thuận">Bình Thuận
                    <option value="Bình Thuận">Bình Thuận
                    <option value="Cà Mau">Cà Mau
                    <option value="Cao Bằng">Cao Bằng
                    <option value="Đắk Lắk">Đắk Lắk
                    <option value="Đắk Nông">Đắk Nông
                    <option value="Điện Biên">Điện Biên
                    <option value="Đồng Nai">Đồng Nai
                    <option value="Đồng Tháp">Đồng Tháp
                    <option value="Đồng Tháp">Đồng Tháp
                    <option value="Gia Lai">Gia Lai
                    <option value="Hà Giang">Hà Giang
                    <option value="Hà Nam">Hà Nam
                    <option value="Hà Tĩnh">Hà Tĩnh
                    <option value="Hải Dương">Hải Dương
                    <option value="Hậu Giang">Hậu Giang
                    <option value="Hòa Bình">Hòa Bình
                    <option value="Hưng Yên">Hưng Yên
                    <option value="Khánh Hòa">Khánh Hòa
                    <option value="Kiên Giang">Kiên Giang
                    <option value="Kon Tum">Kon Tum
                    <option value="Lai Châu">Lai Châu
                    <option value="Lâm Đồng">Lâm Đồng
                    <option value="Lạng Sơn">Lạng Sơn
                    <option value="Lào Cai">Lào Cai
                    <option value="Long An">Long An
                    <option value="Nam Định">Nam Định
                    <option value="Nghệ An">Nghệ An
                    <option value="Ninh Bình">Ninh Bình
                    <option value="Ninh Thuận">Ninh Thuận
                    <option value="Phú Thọ">Phú Thọ
                    <option value="Quảng Bình">Quảng Bình
                    <option value="Quảng Bình">Quảng Bình
                    <option value="Quảng Ngãi">Quảng Ngãi
                    <option value="Quảng Ninh">Quảng Ninh
                    <option value="Quảng Trị">Quảng Trị
                    <option value="Sóc Trăng">Sóc Trăng
                    <option value="Sơn La">Sơn La
                    <option value="Tây Ninh">Tây Ninh
                    <option value="Thái Bình">Thái Bình
                    <option value="Thái Nguyên">Thái Nguyên
                    <option value="Thanh Hóa">Thanh Hóa
                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                    <option value="Tiền Giang">Tiền Giang
                    <option value="Trà Vinh">Trà Vinh
                    <option value="Tuyên Quang">Tuyên Quang
                    <option value="Vĩnh Long">Vĩnh Long
                    <option value="Vĩnh Phúc">Vĩnh Phúc
                    <option value="Yên Bái">Yên Bái
                    <option value="Phú Yên">Phú Yên
                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                    <option value="Tp.Hà Nội">Tp.Hà Nội
                    <option value="TP  HCM">TP HCM
                </select>
            </div>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="service_phone" class="font-weight-bold mb-1">Số điện thoại:</label>
                        <input name="service_phone" type="text" class="form-control" placeholder="Nhập tên team" id="service_phone" value="<?php echo $get_list_service_by_id['service_phone']; ?>">
                    </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="service_facebook" class="font-weight-bold mb-1">Link facebook:</label>
                        <input name="service_facebook" type="text" class="form-control" placeholder="Nhập năm kinh nghiệm, vd: 2 năm" id="service_facebook" value="<?php echo $get_list_service_by_id['service_facebook']; ?>">
                    </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label for="service_youtube" class="font-weight-bold mb-1">Link youtube hoặc trang web:</label>
                        <input name="service_youtube" type="text" class="form-control" placeholder="Nhập số dự án đã tham gia" id="service_youtube" value="<?php echo $get_list_service_by_id['service_youtube']; ?>">
                    </div>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="service_into" class="font-weight-bold mb-1">Giới thiệu</label>
                    <textarea name="service_into" class="form-control ckeditor" id="intro" class="ckeditor"><?php echo $get_list_service_by_id['service_into']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="service_detail_project" class="font-weight-bold mb-1">Miêu tả dự án đã thi công</label>
                    <textarea name="service_detail_project" class="form-control ckeditor" id="intro"><?php echo $get_list_service_by_id['service_detail_project']; ?></textarea>
                </div>
            </div>
        </div>
        <input type="submit" name="btn_update" class="btn btn-dark" value="Sửa">
    </form>
</div>

<?php
get_footer();

?>