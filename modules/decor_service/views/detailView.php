<?php
get_header('service');

?>

        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #fafafa;">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="public/uploads/<?php echo $get_list_service_by_id['service_image']; ?>" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="ml-2"><?php echo $get_list_service_by_id['service_team_name']; ?></h3>
                                <span class="text-truncate me-3 ml-2"><i class="far fa-clock text-primary me-2"></i>  <?php echo $get_list_service_by_id['service_created_date']; ?></span>
                            </div>
                        </div>

                        <div class="row mb-5" style="background:#f2fbf6;">
                            <div class="row mt-2">
                                    <div class="col-12 col-md-12 col-sm-12">
                                        <h5 class="font-weight-normal ml-2"><u>Thông tin chung:</u></h5>
                                        
                                    </div>
                            </div>
                            <div class="col-12 mx-4" >
                                <div class="row mt-3">
                                    <div class="col-6 col-md-6 col-sm-6">
                                        <h6 class="font-weight-bold"><i class="fa-solid fa-house-chimney-window"></i> Số phòng từng decor</h6>
                                        <p class="ml-4"><?php echo $get_list_service_by_id['service_project']; ?> phòng</p>
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6">
                                        <h6 class="font-weight-bold"><i class="fa-sharp fa-solid fa-business-time"></i> Kinh nghiệm</h6>
                                        <p class="ml-4"><?php echo $get_list_service_by_id['service_experience']; ?></p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    
                                    <div class="col-6 col-md-6 col-sm-6">
                                        <h6 class="font-weight-bold"><i class="fa-solid fa-map-location-dot"></i> Khu vực hoạt động</h6>
                                        <p class="ml-4"><?php echo $get_list_service_by_id['service_location']; ?></p>
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6">
                                        <h6 class="font-weight-bold"><i class="fa-sharp fa-solid fa-location-crosshairs"></i> Địa chỉ</h6>
                                        <p class="ml-4"><?php echo $get_list_service_by_id['service_address']; ?></p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 col-md-12 col-sm-12">
                                        <h6 class="font-weight-bold"><i class="fa-solid fa-circle-info"></i> Liên hệ:</h6>
                                        <p class="ml-4 mb-0"><i class="fa-solid fa-phone"></i>  <?php echo $get_list_service_by_id['service_phone']; ?></p>
                                        <p class="ml-4 mb-0"><i class="fa-brands fa-facebook"></i><a href="<?php echo $get_list_service_by_id['service_facebook']; ?>"> <?php echo $get_list_service_by_id['service_facebook']; ?></a></p>
                                        <p class="ml-4 mb-0"><i class="fa-brands fa-youtube"></i><a href="<?php echo $get_list_service_by_id['service_youtube']; ?>"> <?php echo $get_list_service_by_id['service_youtube']; ?></a></p>
                                        <p class="ml-4 "><i class="fa-solid fa-envelope"></i></i><a href="<?php echo $get_list_service_by_id['service_area']; ?>"> <?php echo $get_list_service_by_id['service_area']; ?></a></p>
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="mb-5 ">
                            <h4 class="mb-3">Giới thiệu về <?php echo $get_list_service_by_id['service_team_name']; ?></h4>
                            <p><?php echo $get_list_service_by_id['service_into']; ?></p>
                            
                            <h4 class="mb-3">Hình ảnh một số phòng mà <?php echo $get_list_service_by_id['service_team_name']; ?> đã thực hiện</h4>
                            <p><?php echo $get_list_service_by_id['service_detail_project']; ?></p>
                            
                        </div>
        
                       
                    </div>
        
                    <!-- <div class="col-lg-4">
                        <div class="row">
                            <h3 class="ml-3">Cùng tỉnh</h3>
                        </div>
                        <div class="bg-light rounded p-4 ml-2 mb-2 wow slideInUp" data-wow-delay="0.1s" style="border:1px solid #ddd">
                            <div class="d-flex">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 40px; height: 40px;">
                            <h4 class="mb-4 ml-1 mt-1">Job Summery</h4>
                            </div>
                            <p class="mb-0"><i class="fa-solid fa-house-chimney-window"></i> Dự án đã thi công: 4</p>
                            <p class="mb-0"><i class="fa-solid fa-location-dot"></i>  Khu vực hoạt động: jdndjdn, jdjdh jdjd,kdjdkj,jhdjd,dkjdk</p>
                            <p class="mb-0"><i class="fa-solid fa-map-location-dot"></i> Tỉnh hoạt động: kdkmd kdk</p>
                        </div>
                        <div class="bg-light rounded p-3 ml-2 mb-1 wow slideInUp" data-wow-delay="0.1s" style="border:1px solid #ddd">
                            <div class="d-flex">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt="" style="width: 40px; height: 40px;">
                            <h4 class="mb-4 ml-1 mt-1">Job Summery</h4>
                            </div>
                            <p class="mb-0"><i class="fa-solid fa-house-chimney-window"></i> Dự án đã thi công: 4</p>
                            <p class="mb-0"><i class="fa-solid fa-location-dot"></i>  Khu vực hoạt động: jdndjdn, jdjdh jdjd,kdjdkj,jhdjd,dkjdk</p>
                            <p class="mb-0"><i class="fa-solid fa-map-location-dot"></i> Tỉnh hoạt động: kdkmd kdk</p>
                        </div>
                        
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


       

        <!-- Back to Top
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

<?php
get_footer();

?>