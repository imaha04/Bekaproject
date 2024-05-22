<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scince</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="Images/icon1.png" type="image/x-icon">
</head>
</head>
<head>
    <meta charset="UTF-8">
    <title>Поиск вакансий</title>
</head>

<body>
    <div class="pedagogika">
        <p>Педагогика</p>
        <p>Мұғалім - оқымыстылар, іздемпаздар бірігіңіздер.</p>
    </div>

    <div class="header-container">
        <div class="user-block">
            <img src="Images/icon1.png" alt="User Avatar">
            <span><?php echo $_SESSION['user']['login']; ?></span>
        </div>
        <nav class="navigation">
            <ul>
                <li><a href="#">Басталу тарихы</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">Подкаст</a></li>
                <li><a href="#">Оқыту бойынша</a></li>
                <li><a href="#">Видео</a></li>
                <li><a href="#">Дүкен</a></li>
                <li><a href="#">Қосымша</a></li>
                <li><a href="auth/login.php" class="login">Кіру</a></li>
                <li><a href="auth/register.php" class="register">Тіркелу</a></li>
            </ul>
        </nav>
        
    </div>

    <div class="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">

    <div class="slides">
        <div class="slide" id="slide1">
            <video autoplay muted loop >
                <source src="Images/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="slide" id="slide2">
            <video autoplay muted loop >
                <source src="Images/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="slides-info">
        <div class="slide-info" id="slide1-info">
            <h2>Білімнің саны емес, сапасы маңызды.</h2>
        </div>
        <div class="slide-info" id="slide2-info">
            <h2>Білім — мақсат емес, ол құрал.</h2>
        </div>
    </div>

    <div class="overlay"></div>

    <div class="navigation_sliders">
        <label for="slide1"></label>
        <label for="slide2"></label>
    </div>
</div>

    
   <div class="product-container">
    <div class="product">
        <img src="https://media.istockphoto.com/id/1249466085/ru/%D0%B2%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%BD%D0%B0%D1%8F/%D0%B2%D0%B5%D0%BA%D1%82%D0%BE%D1%80-%D0%B7%D0%BD%D0%B0%D1%87%D0%BE%D0%BA-%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D1%8B%D1%85-%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B5%D0%B9-%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BD%D0%B0%D0%B4%D0%BF%D0%B8%D1%81%D1%8C-%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D1%82%D0%B8-%D0%BD%D0%B0-%D0%B3%D0%BB%D0%BE%D0%B1%D1%83%D1%81%D0%B5-%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D1%8F%D1%88%D0%BD%D1%8B%D0%B9-%D1%81%D1%82%D0%B8%D0%BB%D1%8C-%D0%BD%D0%B0.jpg?s=2048x2048&w=is&k=20&c=G81o0BVYoEabvmudxaYLhT15lmUGs5POWE5B1FneXnE=" alt="news" width="50">
        <h2>Блог</h2>
        <p>Гүлзат Битөреқызымен өз шеберлігіңізді шыңдаңыз, миыңызды және жаныңызды нәрлендіріңіз.</p>
        <a href="blog/index.php" target="_blank">Көру</a>
    </div>

    <div class="product">
        <img src="https://img.freepik.com/free-vector/hand-drawn-world-radio-day_23-2148807076.jpg?t=st=1716119913~exp=1716123513~hmac=31fd91692ca6cae2cf0b722c851e8ef7847a4ac5adcbd47a0e6cf6fd59ca518f&w=740" alt="events" width="50">
        <h2>Подкаст</h2>
        <p>Гүлзат Битөреқызымен нағыз мұғалімді қызықтыратын ой толғаулары сіздің құлағыңызда.</p>
        <a href="Podcast/index.php" target="_blank">Тыңдау</a>
    </div>

    <div class="product">
        <img src="https://img.freepik.com/free-vector/marketplace-concept-illustration_114360-7332.jpg?t=st=1716120035~exp=1716123635~hmac=aec1c0738d1a76c1be45393d589871a0cbf2bd0d751496a06060b0b2442c2b56&w=740" alt="events" width="50">
        <h2>Дүкен</h2>
        <p>Сіздің сыныбыңызға, ақыл-ойыңызға және шкафыңызға арналған заттар (кітаптар, методтар және т.б.).</p>
        <a href="duken/index.php" target="_blank">Кіру</a>
    </div>

    <div class="product">
        <img src="https://img.freepik.com/premium-vector/vector-cartoon-photo-camera-icon-in-comic-style-photographer-cam-sign-illustration-pictogram-camera-business-splash-effect-concept_157943-5265.jpg" alt="events" width="50">
        <h2>Видео</h2>
        <p>Кейбір дүниелерді сіз өз көзіңізбен көргенде ғана мағыналы болады.</p>
        <a href="video/index.php" target="_blank">Қарау</a>
    </div>
</div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <h4>Біз туралы</h4>
                <p>Ұстазы жақсының ұстанымы жақсы</p>
            </div>
            <div class="footer-column">
                <h4>Байланыс</h4>
                <p>Телефон: +7 (771) 919 3594</p>
                <p>Email: gulzat.bigeldieva@gmail.com</p>
            </div>
            <div class="footer-column">
                <h4>Кері байланыс</h4>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Введите ваш email">
                    <button type="submit">Тіркелу</button>
                </form>
            </div>
            <div class="footer-column">
            <h4>Бізді бақылаңыз</h4>
            <div class="social-icons">
                <a href=""><img src="icons/facebook.png" alt="Facebook"></a>
                <a href="https://wa.me/+77719193594"><img src="icons/whatsap.png" alt="Whatsapp"></a>
                <a href="https://www.instagram.com/gulzat_bigeldi?igsh=YTQwZjQ0NmI0OA=="><img src="icons/insta.png" alt="Instagram"></a>
                <a href="https://t.me/gulzat_bigeldi"><img src="icons/tg.png" alt="Tg"></a>
                <a href="https://mail.google.com/"><img src="icons/mail.png" alt="Tg"></a>
            </div>
        </div>
        </div>
    </footer>
    
    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toggleButtons = document.querySelectorAll('.toggle-details');
            toggleButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    var vacancy = this.parentElement;
                    vacancy.classList.toggle('open');
                });
            });

            var applyButtons = document.querySelectorAll('.apply-button');
            applyButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    window.location.href = 'click.php';
                });
            });
        });

            // Find all info blocks
    var infoBlocks = document.querySelectorAll('.product');

    // For each block
    infoBlocks.forEach(function (block) {
        // Find the image inside the block
        var image = block.querySelector('img');

        // Find the full info block
        var fullInfoBlock = block.querySelector('.product-info-full');

        // Add click event listener to the image
        image.addEventListener('click', function () {
            // Toggle the display of the full info block
            if (fullInfoBlock.style.display === 'none') {
                fullInfoBlock.style.display = 'block';
            } else {
                fullInfoBlock.style.display = 'none';
            }
        });
    });

    function searchProducts() {
        // Get the search query from the input field
        var query = document.getElementById('searchInput').value.toLowerCase();

        // Get all product containers
        var productContainers = document.querySelectorAll('.product');

        // Loop through each product container
        productContainers.forEach(function (container) {
            // Get the product title
            var title = container.querySelector('h2').textContent.toLowerCase();

            // Show or hide the product container based on the search query
            if (title.includes(query)) {
                container.style.display = 'block'; // Show the container
            } else {
                container.style.display = 'none'; // Hide the container
            }
        });
    }




    </script>

</body>

</html>

</html>
