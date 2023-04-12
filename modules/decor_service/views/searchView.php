<?php
get_header('service');
?>

    
        <!-- Jobs Start -->
        <div class="container-xxl py-5" style="background: #fafafa;">
            <div class="container">
            <?php
            if(isset($_SESSION['user_login'])){
            ?>
                <button style="float:right;">
                <a href="?mod=decor_service&action=post">Đăng bài giới thiệu đội decor</a>
                </button>
            <?php 
            } else{
            ?>
                <button style="float:right;">
                <a href="?mod=customer&action=login">Đăng dịch vụ decor</a>
                </button>
            <?php
            }
            ?>
                
                <h3 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Tìm kiếm đội decor</h3>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <?php
                            if(!empty($search_decor_service)){
                                foreach($search_decor_service as $item){
                            ?>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="public/uploads/<?php echo $item['service_image']; ?>" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3 text-left pl-4"><?php echo $item['service_team_name']; ?></h5>
                                            
                                            <div>
                                            <span class="text-truncate me-3 pl-3"><i class="fa-solid fa-building"></i> Số phòng đã từng decor: <?php echo $item['service_project']; ?></span>
                                            <span class="text-truncate me-3 pl-3"><i class="fa-solid fa-handshake-simple"></i> Thời gian hoạt động: <?php echo $item['service_experience']; ?></span>
                                            </div>
                                            <div style="padding: 0 15px ;">
                                                <span class=""><i class="fa-solid fa-map-location-dot"></i> Khu vực hoạt động: <?php echo $item['service_location']; ?></span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart"></i></a>
                                            <a class="btn btnn-hover rounded-0" href="<?php echo $item['url_detail']; ?>">Xem thông tin</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt me-2"></i> Ngày tạo: <?php echo $item['service_created_date']; ?></small>
                                    </div>
                                </div>
                            </div>
                            <?php }} else {
                            ?>
                            <img src="public/images/404.png" alt="" style="margin: 0 300px;">
                            <?php
                            } ?>
                            <!-- <a class="btn btn-dark py-3 " href="">Xem thêm</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->


    
        

        


       
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib_service_decor/wow/wow.min.js"></script>
    <script src="public/lib_service_decor/easing/easing.min.js"></script>
    <script src="public/lib_service_decor/waypoints/waypoints.min.js"></script>
    <script src="public/lib_service_decor/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>

<?php
get_footer();

?>