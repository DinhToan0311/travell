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
  --main-color: #8e44ad;
  --black: #222;
  --white: #fff;
  --light-black: #777;
  --light-white: #fff9;
  --dark-bg: rgba(0, 0, 0, 0.7);
  --light-bg: #f9f9f9;
  --border: 0.1rem solid var(--black);
  --box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.2);
  --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.3);
}

.heading {
  background: url('im/nui.png') no-repeat center center;
  background-size: cover;
  padding: 8rem 1rem;
  text-align: center;
  color: #fff;
  position: relative;
}

.heading h1 {
  font-size: 5rem;
  text-transform: uppercase;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
  margin: 0;
}
.heading-title{
  text-align: center;margin-bottom: 3rem;
font-size: 6rem;
text-transform: uppercase;
color: var(--black);
}
.booking .book-form {
  padding: 3rem;
  background: var(--light-bg);
  border-radius: 1rem;
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
  margin-top: 2rem;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.booking .book-form:hover {
  transform: scale(1.02);
  box-shadow: 0 1.5rem 2.5rem rgba(0, 0, 0, 0.2);
}

.booking .book-form .flex {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}

.booking .book-form .flex .inputBox {
  flex: 1 1 calc(50% - 1rem);
  display: flex;
  flex-direction: column;
}

.booking .book-form .flex .inputBox span {
  font-size: 1.6rem;
  color: var(--black);
  margin-bottom: 0.5rem;
  font-weight: bold;
}

.booking .book-form .flex .inputBox .input,
.booking .book-form .flex .inputBox select {
  width: 100%;
  padding: 1.2rem 1.4rem;
  font-size: 1.6rem;
  color: var(--black);
  border: var(--border);
  border-radius: 0.5rem;
  background: var(--white);
  box-shadow: inset 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
  transition: background 0.3s ease, box-shadow 0.3s ease;
}

.booking .book-form .flex .inputBox .input:focus,
.booking .book-form .flex .inputBox select:focus {
  background: var(--light-bg);
  box-shadow: 0 0.2rem 0.8rem rgba(0, 0, 0, 0.2);
}

.booking .book-form .flex .inputBox .input::placeholder {
  color: var(--light-black);
}

.booking .book-form .btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 1.8rem;
  color: var(--white);
  background: var(--main-color);
  border: none;
  border-radius: 0.5rem;
  cursor: pointer;
  text-align: center;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

.booking .book-form .btn:hover {
  background: #722d9b;
  transform: translateY(-0.2rem);
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
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

<div class="heading" >
<h1>book now</h1>

</div>

<section class="booking">
    <h1 class="heading-title">
        book your trip
    </h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
        <div class="inputBox">
            <span>Tên Khách Hàng:</span>
            <input type="text" placeholder="Nhập tên của bạn" name="name">
        </div>
        <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Nhập email của bạn" name="email">
        </div>
        <div class="inputBox">
            <span>Số Điện Thoại:</span>
            <input type="text" placeholder="Nhập số điện thoại của bạn" name="phone">
        </div>
        <div class="inputBox">
            <span>Địa Chỉ:</span>
            <input type="text" placeholder="Nhập địa chỉ hiện tại của bạn" name="address">
        </div>
        <div class="inputBox">
            <span>Địa Điểm Khởi Hành:</span>
            <select name="leaving">
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Nha Trang">Nha Trang</option>
                <option value="Hội An">Hội An</option>
            </select>
        </div>
        <div class="inputBox">
            <span>Địa Điểm Đến:</span>
            <select name="arivals">
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Nha Trang">Nha Trang</option>
                <option value="Hội An">Hội An</option>
            </select>
        </div>
        <div class="inputBox">
            <span>Số Lượng Khách:</span>
            <input type="number" placeholder="Nhập số lượng khách" name="guests">
        </div>
        <div class="inputBox">
            <span>Ngày Đi:</span>
            <input type="date" name="departureDate">
        </div>
        <div class="inputBox">
            <span>Ngày Về:</span>
            <input type="date" name="returnDate">
        </div>

            

        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
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
<script src="js/script.js"></script>
</body>
</html>