<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
    
    .home-packages {
  background: var(--light-bg);
}
.home-packages .box-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 2rem;
}
.home-packages .box-container .box {
  border: var(--border);
  box-shadow: var(--box-shadow);
  background: var(--white);
}
.home-packages .box-container .box .image {
  height: 25rem;
  overflow: hidden;
}
.home-packages .box-container .box .image img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  transition: 0.2s linear;
}
.home-packages .box-container .box .content {
  padding: 2rem;
  text-align: center;
}
.home-packages .box-container .box .content h3 {
  font-size: 2.5rem;
  color: var(--black);
}
.home-packages .box-container .box .content p {
  font-size: 1.5rem;
  color: var(--light-black);
  line-height: 2;
  padding: 1rem 0;
}
.heading-title{
    text-align: center;margin-bottom: 3rem;
  font-size: 6rem;
  text-transform: uppercase;
  color: var(--black);
}
.home-packages .load-more{
    text-align: center;
    margin-top: 2rem;
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
<!-- /.heading end -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(im/home3.png); ">
                <div class="content">
                    <span>explore , discover , travel;</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background: url(im/home2.png);">
                <div class="content">
                    <span>explore , discover , travel;</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide" style="background: url(im/home1.png);">
                <div class="content">
                    <span>explore , discover , travel;</span>
                    <h3>made your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="home-about">
    <div class="image">
        <img src="im/hue.png" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Điểm du lịch (Tourist destination hay Tourist attraction) được hiểu là nơi có tài nguyên du lịch hấp dẫn, phục vụ nhu cầu tham quan, tìm hiểu của khách du lịch, có thể có hoặc không cơ sở vật chất kỹ thuật phục vụ du lịch nhưng ở quy mô nhỏ.</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>





















<!-- /.service begin -->
<section class="services">
    <h1 class="heading-title" >
        our services
    </h1>
    <div class="box-container">
    <div class="box">
        <img src="icon\nui.png" alt="">
        <h3>adventure</h3>
    </div>

    <div class="box">
        <img src="icon\map.png" alt="">
        <h3>tour guide</h3>
    </div>

    <div class="box">
        <img src="icon/tui.png" alt="">
        <h3>trekking</h3>
    </div>

    <div class="box">
        <img src="icon/lua.png" alt="">
        <h3>camp fire</h3>
    </div>

    <div class="box">
        <img src="icon/road.png" alt="">
        <h3>off road</h3>
    </div>

    <div class="box">
        <img src="icon/leu.png" alt="">
        <h3>camping</h3>
    </div>
    </div>
</section>

 <!-- /.service end -->
 <section class="home-packages">
    <h1 class="heading-title">
        our packages
    </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="im/hanoi.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Tp Ho Chi Minh là hòn ngọc viễn đông , thành phố có GDP đứng đầu cả nước.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="im/ruong.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Tp Ho Chi Minh là hòn ngọc viễn đông , thành phố có GDP đứng đầu cả nước.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="im/thac.png" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Tp Ho Chi Minh là hòn ngọc viễn đông , thành phố có GDP đứng đầu cả nước.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>
 <!-- /.package end -->
  <section class="home-offer">
    <div class="content">
        <h3 style="font-size: 3.5rem;
  text-transform:uppercase; 
  color: var(--black);">upto 50% off</h3>
        <p>Hạ long bay 1 kì quan thiên nhiên thế giưới được unisco công nhận và là biểu tuowngj của việt nam với sự hùng vĩ với những ngọn núi nhấp nhô quang co uốn lượn nước biển trong xanh</p>
        <a href="book.php" class="btn">Book now</a>
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

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>