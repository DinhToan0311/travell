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
    .heading {
  background: url('im/hue.png') no-repeat ; /* Ảnh nền căn giữa */
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
.heading-title{
  text-align: center;margin-bottom: 3rem;
font-size: 6rem;
text-transform: uppercase;
color: var(--black);
}
.packages .box-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  gap: 2rem;
}
.packages .box-container .box {
  border: var(--border);
  box-shadow: var(--box-shadow);
  background: var(--white);
}
.packages .box-container .box .image {
  height: 25rem;
  overflow: hidden;
}
.packages .box-container .box .image img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  transition: 0.2s linear;
}
.packages .box-container .box .content {
  padding: 2rem;
  text-align: center;
}
.packages .box-container .box .content h3 {
  font-size: 2.5rem;
  color: var(--black);
}
.packages .box-container .box .content p {
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
.packages .load-more{
    text-align: center;
    margin-top: 2rem;
}
.box.hidden {
    display: none;
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

<div class="heading">
<h1>packages</h1>

</div>


<section class="packages">
    <h1 class="heading-title">top destinations</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
            <img src="im/sydney.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <img src="im/hanoi.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <img src="im/thac.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <img src="im/road1.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <img src="im/road2.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
            <img src="im/road3.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box hidden">
            <div class="image">
            <img src="im/ruong.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box hidden">
            <div class="image">
            <img src="im/nui.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box hidden">
            <div class="image">
            <img src="im/hue.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box hidden">
            <div class="image">
            <img src="im/home1.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box hidden">
            <div class="image">
            <img src="im/home2.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box hidden">
            <div class="image">
            <img src="im/home3.png" alt="">
            </div>
            <div class="content">
            <h3>sydney</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec sit amet orci vel mi semper convallis. Sed vel nulla et neque vulputate fermentum. Sed ultricies, justo non viverra consectetur, justo risus fringilla velit, id efficitur diam nunc ac neque.</p>
            <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><span class="btn">load more</span></div>
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
let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 3; // Hiển thị 3 mục đầu tiên ban đầu

// Ban đầu ẩn tất cả các box, chỉ hiển thị 3 box đầu tiên
let boxes = document.querySelectorAll(".packages .box");
for (let i = currentItem; i < boxes.length; i++) {
    boxes[i].classList.add("hidden");
}

loadMoreBtn.onclick = () => {
    let hiddenBoxes = document.querySelectorAll(".packages .box.hidden");
    for (let i = 0; i < 3 && i < hiddenBoxes.length; i++) {
        hiddenBoxes[i].classList.remove("hidden"); // Hiển thị 3 box tiếp theo
    }
    currentItem += 3;

    // Nếu không còn box nào để hiển thị, ẩn nút "Xem thêm"
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = "none";
    }
};

</script>
</body>
</html>