<?php
include("../View/LayOut/Header/Header.php");

?>
<title>Contact Us</title>
<?php
include("../root/CSS/About.css.php");
?>
<div class="header">
    <div class="heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text">
                    <h6 style="color:black;">HOME / CONTACT US</h6>
                    <h3 class="animate-charcter"> Contact Us</h3>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bodier">
    <section>
        <div class="p-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1104681388733!2d108.23816041077595!3d16.059756339627207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f00c05eed%3A0xb72c8e84c343e282!2zMzY1UitWOUcsIDEwMUIgTMOqIEjhu691IFRyw6FjLCBQaMaw4bubYyBN4bu5LCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1695648678670!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4 contact">
                    <h5>Liên Hệ Với Chúng Tôi</h5>
                    <h6>Địa Chỉ</h6>
                    <p>101B - Lê Hưu Trác - Sơn Trà - Đà Nẵng</p>
                    <h6>Số Điện Thoại</h6>
                    <p>(+84) 758 333 789</p>
                    <h6>Thời Gian</h6>
                    <p>Thứ Hai - Chủ Nhật 7am - 21pm</p>
                    <h6>Email</h6>
                    <p>tinh123@gmail.com</p>
                    <h6>Các Nền Tảng Khác</h6>
                    <p>www.facebook.com</p>
                    <p>www.intagram.com</p>
                </div>

            </div>
        </div>
    </section>
    <div class="p-5"></div>
    <div class="container sendMail">
        <div class="row">
            <div class="col-sm-4">
                <h6>Bạn có bất cứ câu hỏi nào không ?</h6>
                <p>Nếu bạn có bất kỳ câu hỏi nào hã liên hệ chúng tôi qua email này để ọi người có thể liên hệ với bạn để có thể giải quyết được vấn đề của bạn một cách nhanh nhất.</p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-7">
                <form action="" class="d-flex">
                    <div class="input-field">
                        <input type="text" id="name" required />
                        <label for="name">Tên của bạn: </label>
                    </div>
                    <div class="p-3"></div>
                    <div class="input-field">
                        <input type="text" id="name" required />
                        <label for="name">Email:</label>
                    </div>
                </form>
                <div class="p-3"></div>
                <form action="">
                    <div class="input-field">
                        <input type="text" id="name" required />
                        <label for="name">Tin nhắn</label>
                    </div>
                    <div class="p-3"></div>
                    <div class="wrapper">
                        <button type="submit" class="button1"><span>Gửi Ngay</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="p-5"></div>
    <div class="container">
        <div id="cards_landscape_wrap-2">
            <div class="content">
                <h5>Về Chúng Tôi </h5>
                <h3>Các Bác Sĩ Chuyên Ngành Tâm Lý</h1>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ($experts as $ex) : ?>
                        <div class="col-sm-4">
                            <a href="ContactExpert?id=<?php $ex['id'] ?>">
                                <div class="card-flyer">
                                    <div class="text-box">
                                        <div class="image-box">
                                            <img src="<?php echo $ex['profile_picture'] ?>" alt="anh" style="object-fit: cover;" />
                                        </div>
                                        <div class="text-container">
                                            <h6><?php echo $ex['full_name'] ?></h6>
                                            <p><?php echo $ex['experience'] ?></p>
                                            <span class="d-flex">
                                                <p><?php echo $ex['phone_number'] ?>||</p>
                                                <p><?php echo $ex['count_rating'] ?></p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="p-5"></div>
<?php
include("../View/LayOut/Footer/Footer.php")
?>