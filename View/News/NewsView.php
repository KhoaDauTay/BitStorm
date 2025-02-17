<?php
include("../View/LayOut/Header/Header.php");
include("../root/CSS/News.css.php");
include_once("../Model/AdminNewsModel.php");
?>
<div class="section-1">
  <div class="header-photo-1-parent container-fluid">
    <img class="header-photo-1" alt="" src="./root/Image/news/attractive-girl-hat-reads-book-nature-sunset.jpg">
    <div class="header-photo-2">

    </div>
    <b class="c-bo-cng-container">
      <p class="c-bo-cng">Đọc Báo Cùng </p>
      <p class="c-bo-cng">Nhau - Cải Thiện Stress</p>
      <p class="c-bo-cng">Nâng Cao Tinh Thần</p>
      <p class="c-bo-cng">Cùn BitStorm</p>
    </b>
    <img class="circle-slider-icon" alt="" src="./root/Image/news/Group.png">
  </div>
  <div class="section-1-child">
  </div>
  <div class="group-parent">
    <div class="group-container">
      <div class="gii-tr-parent">
        <b class="gii-tr">Giải Trí</b>
        <div class="c-nhng-vi">Đọc những vài viết vui nhộn nhưng không kém phần thú vị </div>
      </div>
      <img class="wifi-community-icon-white" alt="" src="./root/Image/news/Internet Broadband Icon white.png">
    </div>
    <div class="group-div">
      <div class="gii-tr-parent">
        <b class="gii-tr">Cải Thiện Sức Khỏe</b>
        <div class="c-nhng-vi">Đọc nhiều bài viết giúp bạn hiểu ra tầm quan trọng của vấn đề sức khỏe</div>
      </div>
      <img class="desa-digital-icon-white" alt="" src="./root/Image/news/Wifi Community Icon white.png">
    </div>
    <div class="group-parent1">
      <div class="gii-tr-parent">
        <b class="gii-tr">Học Kiến Thức Mới</b>
        <div class="c-nhng-vi">Không chỉ học vui vẻ, tạo sự yêu thích mà còn giúp bạn học được nhiều kiến thức mới</div>
      </div>
      <img class="internet-broadband-icon-white" alt="" src="./root/Image/news/Group.png">
    </div>
  </div>
  <div class="line-parent">
    <div class="group-child">
    </div>
    <div class="group-item">
    </div>
  </div>
</div>
<div class="p-3"></div>

<div class="search-box">
  <form method="POST" action="">
    <input class="search-input" type="text" placeholder="Search something.." name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>">
    <button class="search-btn" name="search" type="submit"><i class="fas fa-search"></i></button>
  </form>
</div>
<div class="p-3">
  <div class="container">
    <div class="row">
      <?php
      if (isset($_POST['search'])) {
        $searchParm = $_POST['keyword'];
        try {
          $hostname = "localhost";
          $database = "data_php";
          $username = "root";
          $password = "";
          $keyword = "$searchParm%";
          $dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
          $connection = new PDO($dsn, $username, $password);
          $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sth =  $connection->prepare("SELECT * FROM `news` WHERE title LIKE :keyword");
          $sth->bindParam(':keyword', $keyword, PDO::PARAM_STR);
          $sth->execute();
          while ($row = $sth->fetch(PDO::FETCH_OBJ)) {
      ?>
            <div class="container">
              <a href="NewsDetails?id=<?php echo $row->id ?>">
              <div class="row d-flex">
                <div class="col-sm-6">
                <div class="mask-group-parent">
                    <img class="mask-group-icon" alt="ảnh"  src="<?php echo $row->image_url ?>" >
                  <p> <b class="danh-sch-10"><?php echo $row->title ?></b></p>
                    <div class="tr-nh-c"><p class="card-text" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $row->descriptions ?></p></div>
                </div>
                </div>
            </div>
              </a>
            <div class="p-2"></div>
        </div>
      <?php
          }
          if ($sth->rowCount() === 0) {
            echo "<div class='img-container'>
                <img src= './root/Image/news/error.png' class='img'>
            </div>";
            echo "<p style= 'font-weight:bold;text-align:center;'>Xin Lỗi Bạn ! Nội Dung Bạn Tìm Không Có Trong BitStorm</p>";
          }
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
      }
      ?>
    </div>
  </div>

  <h2 class="h2_row">Dành Cho Bạn</h2>
  <div class="container">
    <div id="slide-left-container">
      <div class="slide-left">
      </div>
    </div>
    <div id="cards-container">
      <div class="cards">
        <?php $newAdmin = new AdminNews();
        $news = $newAdmin->selectNews();
        foreach ($news as $new) : ?>
          <div class="card">
            <img src="<?php echo $new['image_url'] ?>" alt="Card image cap" class="image_card">
            <h5 class="card-text" style="font-weight: bold;"><?php echo $new['title'] ?></h5>
            <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $new['descriptions'] ?></p>
            <a href="NewsDetails?id=<?php echo $new['id']; ?>" title="Read Full" class="wrappe1r view-more"><span>Xem Thêm</span></a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <div id="slide-right-container">
      <div class="slide-right">
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
  <body>
    <?php
    include("../root/JS/News.js.php");
    ?>

    <?php
    include("../View/LayOut/Footer/Footer.php");
    ?>