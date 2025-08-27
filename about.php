<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- font aweone link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <!-- swiper css link -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  
/>
</head>
<style>
    :root {
  --main-color: #27ae60;
  --black: #222;
  --white: #fff;
  --light-black: #777;
  --light-bg: #f9f9f9;
  --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
  --border: .1rem solid rgba(0, 0, 0, 0.1);
}
/* Toàn bộ container với phong cách hiện đại */



.heading-title{
    text-align: center;margin-bottom: 3rem;
  font-size: 6rem;
  text-transform: uppercase;
  color: var(--black);
}

/* Định dạng phần reviews */
.reviews .swiper-slide {
  background: #fff; /* Màu nền trắng */
  border: 1px solid #ddd; /* Viền nhẹ */
  padding: 2rem; /* Khoảng cách nội dung */
  border-radius: 10px; /* Góc bo tròn */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Hiệu ứng bóng */
  text-align: center; /* Căn chữ giữa */
  display: flex; /* Sử dụng flexbox */
  flex-direction: column; /* Sắp xếp theo cột */
  align-items: center; /* Căn giữa nội dung */
  justify-content: center; /* Căn giữa dọc */
}

.reviews .swiper-slide img {
  width: 80px; /* Chiều rộng ảnh */
  height: 80px; /* Chiều cao ảnh */
  border-radius: 50%; /* Làm ảnh tròn */
  margin-bottom: 1rem; /* Khoảng cách với nội dung dưới */
  border: 2px solid #ddd; /* Viền ảnh */
}

.reviews .swiper-slide h3 {
  font-size: 1.8rem; /* Kích thước chữ */
  color: #333; /* Màu chữ */
  margin: 0.5rem 0; /* Khoảng cách trên dưới */
}

.reviews .swiper-slide span {
  font-size: 1.2rem; /* Kích thước chữ nhỏ */
  color: #777; /* Màu chữ nhạt */
  margin-bottom: 1rem; /* Khoảng cách dưới */
}

.reviews .swiper-slide p {
  font-size: 1.4rem; /* Kích thước chữ nội dung */
  color: #555; /* Màu chữ trung tính */
  line-height: 1.8; /* Giãn dòng */
  margin: 0 0 1rem 0; /* Khoảng cách với các thành phần khác */
}

.reviews .swiper-slide .stars {
  display: flex; /* Dùng flexbox để căn giữa */
  justify-content: center; /* Căn ngang giữa */
  margin-bottom: 1rem; /* Khoảng cách dưới */
}

.reviews .swiper-slide .stars i {
  color: #ffd700; /* Màu vàng cho sao */
  font-size: 1.5rem; /* Kích thước sao */
  margin: 0 2px; /* Khoảng cách giữa các sao */
}

/* Container chính */
.heading {
  background: url('im/sydney.png') no-repeat ; /* Ảnh nền căn giữa */
  background-size: 100% auto; /* Phủ kín vùng chứa */
  padding: 8rem 1rem; /* Khoảng cách trên/dưới rộng rãi */
  text-align: center; /* Căn giữa nội dung */
  color: #fff; /* Màu chữ trắng */
  position: relative; /* Để hỗ trợ các phần tử con */
}

/* Tiêu đề chính */
.heading h1 {
  font-size: 5rem; /* Kích thước chữ lớn */
  text-transform: uppercase; /* Viết hoa toàn bộ */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Đổ bóng để nổi bật chữ */
  margin: 0; /* Xóa khoảng cách mặc định */
}
</style>
<body>
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>


        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

<div class="heading"  >
<h1>about us</h1>

</div>

<section class="about">
    <div class="image">
        <img src="im/sydney.png" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>hà nội với 36 sáu phố phường nay đã được mở rộng là thành phố lớn nhất nhất cr nước về quy mô diện tích cũng như dân số</p>
        <p>hà nội có rất nhiều làng nghề truyền thống như gốm bát tràng tranh đông hồ ...</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>

            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>

            <div class="icons">
                <i class="fas fa-map"></i>
                <span>24/7 guide service </span>
            </div>
        </div>
    </div>
</section>


<section class="reviews">

        <div class="swiper reviews-slider">
        <h1 class="heading-title">
        Phản hồi của khách hàng
    </h1>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>du lịch việt nam thật là tuyệt vời...</p>
                    <h3>Lê Bống</h3>
                    <span>Khách Du Lịch</span>
                    <img src="im/lebong.png" alt="Lê Bống">
                </div>
                <!-- Thêm các slide khác tương tự -->
                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>du lịch việt nam thật là tuyệt vời...</p>
                    <h3>Trấn Thành</h3>
                    <span>Khách Du Lịch</span>
                    <img src="im/tranthanh.png" alt="Lê Bống">
                </div>
                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>du lịch việt nam thật là tuyệt vời...</p>
                    <h3>Hari Won</h3>
                    <span>Khách Du Lịch</span>
                    <img src="im/hari.png" alt="Lê Bống">
                </div>
                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>du lịch việt nam thật là tuyệt vời...</p>
                    <h3>Trường Giang</h3>
                    <span>Khách Du Lịch</span>
                    <img src="im/truonggiang.png" alt="Lê Bống">
                </div>
                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>du lịch việt nam thật là tuyệt vời...</p>
                    <h3>Nguyễn Thúc Thủy Tiên</h3>
                    <span>Khách Du Lịch</span>
                    <img src="im/thuytien.png" alt="Lê Bống">
                </div>
                <div class="swiper-slide">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>du lịch việt nam thật là tuyệt vời...</p>
                    <h3>Hieuthuhai</h3>
                    <span>Khách Du Lịch</span>
                    <img src="im/hieuthuhai.png" alt="Lê Bống">
                </div>
            </div>
        </div>
    </section>






<section class="footer">
    <div class="box-container">
        <div class="box">
             <h3>quich links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
        </div>

        <div class="box">
             <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> tern of use</a>
        </div>

        <div class="box">
             <h3>contact info</h3>
            <a href="#"> <i class="fas fa-angle-phone"></i> +388 888 888</a>
            <a href="#"> <i class="fas fa-angle-phone"></i> +999 999 999</a>
            <a href="#"> <i class="fas fa-angle-envelope"></i> buidinhtoan2004@gmail.com</a>
            <a href="#"> <i class="fas fa-angle-map"></i> Kien An Hai Phong</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

    <div class="credit"> created by <span>mr.web designer</span> | all right resered! |</div>

</section>

<!-- header end -->
 













<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script >
    var swiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  breakpoints: {
      640: {
          slidesPerView: 1,
      },
      768: {
          slidesPerView: 2,
      },
      1024: {
          slidesPerView: 3,
      },
  },
});
</script>

</body>
</html>