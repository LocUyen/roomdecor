<?php
get_header();

?>
<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}

    input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    }

    input[type=submit] {
    background-color: #000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }
</style>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<div id="content" style="width:1000px; margin: 20px 200px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1389.1129828102855!2d105.07893001792064!3d10.016458136316437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0b3a22ec5f4c7%3A0xf9e1bab725a1b4af!2sBRAYI%20SHOP!5e0!3m2!1svi!2s!4v1670084950281!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div style="margin-left: 200px;">
    <div>
        <a href="" style="font-size: 20px;"><i class="fa-solid fa-location-dot"></i>182 - Nguyễn Bỉnh Khiêm - TP.Rạch Giá - Kiên Giang</a>
    </div>
    <div>
        <a href="" style="font-size: 20px;"><i class="fa-solid fa-envelope"></i>RoomDecor@gmail.com</a>
    </div>
    <div>
        <a href="" style="font-size: 20px;"><i class="fa-brands fa-facebook"></i>facebook.com/roomdecor</a>
    </div>
    <div>
        <a href="" style="font-size: 20px;"><i class="fa-solid fa-phone"></i>0987.654.321</a>
    </div>

</div>


<div class="container"  style="width:1000px; margin: 20px 200px;">
    <h1>LIÊN HỆ PHẢN HỒI</h1>
  <form action="" method="POST">
    <label for="fname">Email</label>
    <input type="text" id="fname" name="email" placeholder="Vui lòng nhập email để chúng tôi có thể liên lạc ạ">

    <label for="subject">Nhận xét</label>
    <textarea id="subject" name="feedback" placeholder="Mong quý khách có thể tích cực phản ánh để chúng tôi phục vụ tốt hơn" style="height:150px"></textarea>

    <input type="submit" name="submit" value="Gửi">
  </form>
</div>
<?php
get_footer();

?>