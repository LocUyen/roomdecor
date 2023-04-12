<?php
function construct(){
    load_model('index');
}
// bảng hiển thị
function indexAction(){
    $id_cat = (int)$_GET['id_cat'];
    
    $info_product_cate = info_product_cate_by_id($id_cat);
   
    $data['info_product_cate'] = $info_product_cate;

    if(empty($_POST['btn_filter'])) {
        $get_list_product = get_list_product_by_id($id_cat);
    }else {
            if(!empty($_POST['arrange'])) {
                $arrange = $_POST['arrange'];
                if($arrange == 4){
                    $get_list_product = get_product_ascending($id_cat);
                } elseif($arrange == 3){
                    $get_list_product = get_product_reduce($id_cat);
                } elseif($arrange == 1){
                    $get_list_product = get_product_A_Z($id_cat);
                } elseif($arrange == 2){
                    $get_list_product = get_product_A_Z($id_cat);
                }
            }   
        
    }    
        
    
    foreach($get_list_product as &$item){
        $item['url_detail'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
    }
    // show_array($get_list_product);
    $data['get_list_product'] = $get_list_product;
   
    load_view('index', $data);
    

}

function detailAction(){

    $id = (int)$_GET['id'];
    $get_product = get_product_by_id($id);

    $data['id'] = $id;
    $data['get_product'] = $get_product;

    $product_cate_id = $get_product['product_cate_id'];
    // echo $product_cate_id;

    if(isset($_POST['btn_add_cart'])){
        $num_order = $_POST['num-order'];
        $_SESSION['cart']['buy'][$id]['num_order'] = $num_order;
        redirect("?mod=cart&action=add&id={$id}");
    }

    #recommendation
    // $recommendation = 0;
    if(isset($_POST['btn_recommendation'])){
        // $recommendation = $get_product['product_recommendation'] + 1;
        $data = array(
            'product_recommendation' => $get_product['product_recommendation'] + 1
        );
        update_product($data, $id);
        redirect("?mod=product&action=detail&id={$id}");

    }


    ##ds chi tiết ảnh
    $get_list_gallery = get_list_gallery_by_id_product($id);
    $data['get_list_gallery'] = $get_list_gallery;
    
    // ds hình ảnh của sp
    $get_list_product_connect = get_list_product_connect($product_cate_id);
    foreach($get_list_product_connect as &$item){
        $item['url_detail'] = "?mod=product&action=detail&id={$item['product_id']}";
        $item['url_add_cart'] = "?mod=cart&action=add&id={$item['product_id']}";
    }
    $data['get_list_product_connect'] = $get_list_product_connect;


    
    ##ratting
    $get_list_rating = get_list_rating($id);
    
    $data['get_list_rating'] = $get_list_rating;
    if(isset($_SESSION['user_login'])){
        $get_info_custormer = get_info_user($_SESSION['user_login']);
        $user_id = $get_info_custormer['user_id'];
        $get_order = get_order($user_id, $id);
        $data['get_order'] = $get_order;
        
        if(!empty($get_order)){
            // $get_order_detail = get_order_detail($order_id);
            if(isset($_POST['btn-rating'])){
                $star = $_POST['rating'];
                $comment = $_POST['comment'];
            
                $data = array(
                        'rating_star' => $star,
                        'rating_comment' => $comment,
                        'product_id' => $id,
                        'user_id' => $user_id
                );
                
                $num_row_rating_user_in_product = row($id , $user_id);
                
                if($num_row_rating_user_in_product < 1){
                    add_rating($data);
                }
                redirect("?mod=product&action=detail&id={$id}");
                
            }
        }
    }
    //trung bình đánh giá sao
    $avg_star = avg_star($id);
    $data['avg_star'] = $avg_star;
    
    $star_5 = star_5();
    $data['star_5'] = $star_5;
    
    // echo ($star_5['count(rating_star)']);
    $star_4 = star_4();
    $data['star_4'] = $star_4;

    $star_3 = star_3();
    $data['star_3'] = $star_3;

    $star_2 = star_2();
    $data['star_2'] = $star_2;

    $star_1 = star_1();
    $data['star_1'] = $star_1;


    load_view('detail', $data);
}

// function recommendationAction(){
//     load_view('detail');

// }
