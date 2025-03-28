<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/Home.php");
include_once("../Model/HomeModel.php");
?>
<title>Home</title>
<div class="header">
    <div class="container-fluid header_home">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4 main_text">
                <div class="p-5"></div>
                <h3><b>Chào Mừng</b> Bạn Đến</h3>
                <h1 class="animate-charcter">BitStorm</h1>
                <h6>Nơi lắng nghe những tâm sự của bạn</h6>
                <p class="p-3"></p>
                <div class="wrap">
                    <button class="button_home">Bắt Đầu Ngay</button>
                </div>
                <p class="p-3"></p>
                <hr class="hr_home">
            </div>
            <div class="col-sm-4 main-img">
                <img src="./root/Image/homePage/kisspng-physician-diabetes-mellitus-computer-disease-preve-doctor-and-computer-5a99b82dcadc58 1.png" alt="ảnh" height="500px">
            </div>
        </div>
    </div>
</div>
<div class="bodier">
    <div class="container-fluid">
        <div class="p-5"></div>
        <h4 style="text-align: center; padding-bottom: 10px;font-weight: bold;">Một Số Dịch Vụ Tại <span style="color:#279EFF">BitStorm</span> </h4>
        <div class="slide-container swiper p-5">
            <div class="slide-content p-3">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./root/Image/homePage/360_F_187045571_1GPYu7GFoJzKuljKRaeowV20vskm3Hzv.jpg" alt="ảnh" class="card-img" width="100px" height="100px">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Home page</h2>
                            <p class="description">Nơi cung cấp cho các bạn về các thông tin liên quan về app, bạn có thể viết status để tâm sự cùng người lạ trên web này. Bên cạnh đó bạn cũng sẽ được nhiều người truyền cảm hứng hơn so với bạn không tiếp xúc với ai.</p>
                            <a href="home">Đến Trang chủ</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk2ygV4U4CI2tluhj9pOhRHf4MfaEODjJCPg&usqp=CAU" alt="" class="card-img" width="90px" height="90px" style="border-radius: 30%;">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Contact expert</h2>
                            <p class="description">Trang web này cho phép bạn chat 1 1 với chuyên gia, với những người đã vượt qua cơn trầm cảm. Họ có những kinh nghiệm, có những lời khuyên cho bạn, hoàn toàn miễn phí. Vì chúng tôi hiểu rằng muốn điều trị hoàn toàn thì cực kỳ tốn chi phí.</p>
                            <a href="ContactExpert">Đi đến với chuyên gia</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./root/Image/homePage/blogger.png" alt="" class="card-img" width="100px" height="100px">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Blog</h2>
                            <p class="description">Nơi để đọc những bài viết, những video truyền độc lực từ nhiều nguồn khác nhau. Thông qua nhưng câu chuyenej đó thì nhóm cũng có thể giúp một phần nào đó để chữ lành tâm hồn của bạn.</p>
                            <a href="blog">Đi đến trang video</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./root/Image/homePage/blogger.png" alt="" class="card-img" width="100px" height="100px">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">Post</h2>
                            <p class="description">Trong trang này thì bạn có thể đăng những bài viết để người khác có thể xam các trạng thái bài viết của người khác bên cạnh đó bạn có thể chia sẻ cảm nhận của mình dưới ẩn danh</p>
                            <a href="post">Đi đến trang post</a>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="./root/Image/operator.png" alt="" class="card-img" width="100px" height="100px">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">About us</h2>
                            <p class="description">Ở đây chúng tôi sẽ nói về app này, bên cạnh đó có thể giới thiệu cho bạn một số bác sĩ tâm lí nổi tiếng không tốn chi phí. Chúng tôi cũng có thể giúp bạn tìm những workshop về chủ đề về sức khỏe tâm thần để giới thiệu cho bạn.</p>
                            <a href="About">Đi đến trang liên hệ</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row d-flex gap-5 justify-content-center">
            <div class="col-sm-4 a_home">
                <?php
                $newsHome = new Home();
                $news = $newsHome->selectNews();
                foreach ($news as $new) :  ?>
                    <hr class="hr_homer">
                    <h6 style="font-size: 30px;">Một số câu chuyện <b> truyền động lực</b></h6>
                    <p style="color: cadetblue;"><?php echo $new['title'] ?></p>
                    <p><?php echo $new['descriptions'] ?></p>
                    <hr class="hr_homer">
                    <div class="p-2"></div>
                    <div class="wrappe1r">
                        <a href="NewsDetails?id=<?php echo $new['id'] ?>"><span>Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                    </div>
            </div>
            <div class="col-sm-5">
                <img <?php echo '<img src="' . $new['image_url'] . '" style= "height:400px;border-radius: 10px;padding-top: 20px;">' ?>>
            </div>
        <?php endforeach ?>
        </div>
    </div>
    <div class="p-5"></div>
    <div class="container-fluid podcast ">
        <p class="p111">Giới Thiệu Cho Bạn</p>
        <h6 style="text-align: center; font-size: 20px;"><b>Một Vài Podcast Tâm Hồn</b></h6>
        <div class="container">
            <div class="row justify-content-center d-flex">
                <?php $podcasts = new Home();
                $pcs = $podcasts->showAllVideo();
                foreach ($pcs as $pc) :
                ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <img src="<?php echo $pc['image_url'] ?>" class="card-img-top" alt="..." style="border-top-left-radius:25px; border-top-right-radius:25px;">
                            <a href="PodcastDetail?id=<?php echo $pc['id'] ?>" class="card-body  mx-3">
                                <p class="card-text" style=" white-space: nowrap;overflow: hidden; text-overflow: ellipsis;"><?php echo $pc['title'] ?></p>
                                <div class="d-flex">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <p style="font-size: 15px; color: gray;"><?php echo $pc['created_at'] ?></p>
                                    <div style="margin-left: auto;color: #FF9933">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="wrappe1r">
            <a href="#"><span>Xem thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
        </div>
    </div>
    <div class="container-fluid choose">
        <p style="color: 0166FF; text-align: center;font-size: 16px;">Tại sao lại lựa chọn chúng tôi</p>
        <h5 style="text-align: center;font-size: 20px;font-weight: bold;">Sự Lựa Chọn Đúng Đắn Dành Cho Bạn</h5>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <img src="./root/Image/homePage/hinh1.png" alt="ảnh">
                                <h6>Tư Vấn Online</h6>
                                <p class="card-text">Được sự hỗ trợ nhiệt tình từ các
                                    chuyên gia trong lĩnh vực tư vấn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <img src="./root/Image/homePage/Group 1000006529.png" alt="ảnh">
                                <h6>Xây Dựng Cộng Đồng</h6>
                                <p class="card-text">Xây dựng một cộng đồng văn mình
                                    để mọi người cùng nhau </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <img src="./root/Image/homePage/Group 1000006530.png" alt="ảnh">
                                <h6>Kiểm duyệt thông tin</h6>
                                <p class="card-text">Có một điều bạn chưa biết
                                    phần kiểm duyệt thông tin khá là hay</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card ">
                            <div class="card-body">
                                <img src="./root/Image/homePage/Group 1000006531.png" alt="ảnh">
                                <h6>Hoàn toàn miễn phí</h6>
                                <p class="card-text">Nhận được sự tư vấn từ mọi người
                                    hoàn toàn miễn phí..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<?php
include("../root/JS/Home.js.php");

?>
<?php

include("../View/LayOut/Footer/Footer.php");

?>