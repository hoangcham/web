<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/website.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="grid">

            <!-- header with search -->
            <div class="header-with-search">
                <div class="header__logo">
                    <a href="./website.html" class="header__logo-link">
                        <img src="./assets/img/logo.png" alt="" class="header_logo-img">
                    </a>
                </div>
                
                <div class="menu">
                    <li><a href="">Áo</a>
                        <ul class="sub_menu">
                            <li><a href="aosomi.php">Áo sơ mi</a></li>
                            <li><a href="aothun.php">Áo thun</a></li>
                            <li><a href="aopeplum.php">Áo peplum</a></li>
                            <li><a href="aolen.php">Áo len</a></li>
                        </ul>
                    </li>
                    <li><a href="">Quần & Jumpsuit</a>
                        <ul class="sub_menu">
                            <li><a href="quanjeans.php">Quần</a></li>
                            <li><a href="jumpsuit.php">Jumpsuit</a></li>
                        </ul>
                    </li>
                    <li><a href="">Đầm/Áo dài</a>
                        <ul class="sub_menu">
                            <li><a href="vaydamnu.php">Váy đầm nữ</a></li>
                            <li><a href="aodai.php">Áo dài</a></li>
                        </ul>
                    </li>
                    <li><a href="phukien.php">Phụ kiện</a>
                    </li>
                </div>

                <ul class="header__navbar-list">
                    <li class="navbar__items">
                            <a href="guiphanhoi.php" class="navbar__items-link">
                                <i class="navbar__icon fa-regular fa-circle-question"></i>
                                Trợ giúp
                            </a>
                        </li>
                    <li class="navbar__items navbar__items--bold navbar__items--separate"><a href="rigiter.php">Đăng ký</a></li>
                    <li class="navbar__items navbar__items--bold"><a href="login.php">Đăng nhập</a></li>
                    
                    <!-- <li class="navbar__items navbar__user">
                        <img src="https://down-vn.img.susercontent.com/file/sg-11134004-7qvdb-lj4byxci3f6783_tn" alt="" class="navbar__user-img">
                        <span class="navbar__user-name">Tùng Lâm</span>
                        
                        <ul class="navbar__user-menu">
                            <li class="navbar__user-item">
                                <a href="">Tài khoản của tôi</a>
                            </li>
                            <li class="navbar__user-item">
                                <a href="">Đơn mua</a>
                            </li>
                            <li class="navbar__user-item navbar__user-item--separate">
                                <a href="">Đăng xuất</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
                <div class="header__cart">
                    <div class="header__cart-wrap">
                        <i class="header__cart-icon fa-solid fa-bag-shopping"></i>

                        <span class="header__cart-notice">o</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="slider">
        <div class="aspect-ratio-169">
            <img src="./assets/img/c790b75c810d09a36076407a01f1d9cd.jpg" alt="">
            <img src="./assets/img/bbede25cb625b7cff7342cf68f9a5bee.jpg" alt="">  
            <img src="./assets/img/abeaeb4edceea7b5400d5a265e723d9a.jpg" alt="">
            <img src="./assets/img/5e24e639ce4d5ba4a65ac7a684754af3.jpg" alt="">
        </div>
        <div class="dot_container">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>  
            <div class="dot"></div>
        </div>
    </section>

    <footer class="footer">
        <div class="grid">
            <div class="grid__row">
                <div class="grid__column-2-4">
                    <h3 class="footer__heading" style="font-size: 1.17em; margin-bottom: 5px;">Chăm sóc khách hàng</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Tùng Lâm Mall</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading" style="font-size: 1.17em; margin-bottom: 5px;">Mã sinh viên</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">21103100850</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">21103100825</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">21103100857</a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading" style="font-size: 1.17em; margin-bottom: 5px;">Họ và tên</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Trịnh Tùng Lâm</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Lê Xuân Đích</a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">Nguyễn Thị Hương Giang</a>
                        </li>
                    </ul>    
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading" style="font-size: 1.17em; margin-bottom: 5px;">Theo dõi tôi</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                                <i class="footer-item__icon fab fa-facebook"></i>
                                Facebook
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                                <i class="footer-item__icon fab fa-instagram"></i>
                                Instagram
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="" class="footer-item__link">
                                <i class="footer-item__icon fab fa-linkedin"></i>
                                Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="grid__column-2-4">
                    <h3 class="footer__heading" style="font-size: 1.17em; margin-bottom: 5px;">Vào cửa hàng trên ứng dụng</h3>
                    <div class="footer__download">
                        <img src="./assets/img/qr.png" alt="Download QR" class="footer__download-qr">
                        <div class="footer__download-apps">
                            <a href="" class="footer__download-link">
                                <img src="./assets/img/ggp.png" alt="Google Play" class="footer__download-app-img">
                            </a>
                            <a href="" class="footer__download-link">
                                <img src="./assets/img/app.png" alt="App Store" class="footer__download-app-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="grid">
                <p class="footer__text">© 2023 - Bản quyền thuộc về Công ty TNHH Shopbee</p>
            </div>
        </div>
    </footer>
</body>
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    // console.log(imgPosition)
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem=document.querySelectorAll(".dot")
   let imgNuber = imgPosition.length
   
    let index = 0  
    imgPosition.forEach(function(image,index){
        image.style.left = index*100 + "%"
        dotItem[index].addEventListener("click",function() {
         slider (index)   
        })
    })
    function imgSlide(){
        index++;
        console.log(index)
        if(index>=imgNuber) {index=0}
        slider (index)
    }
     function slider (index){
    imgContainer.style.left="-"+index*100+"%"
    const dotActive =document.querySelector('.ctive')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
        

    }
    setInterval(imgSlide,5000)
</script>
</html>