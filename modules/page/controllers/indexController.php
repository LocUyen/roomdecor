<?php
function construct(){
    load_model('index');
}
// bảng hiển thị
function aboutAction(){
   
    load_view('about');
}
function contactAction(){
    global $email, $feedback;
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        $data = array(
            'email' => $email,
            'feedback' => $feedback,
        );

        add_feedback($data);
    }
    load_view('contact');
}