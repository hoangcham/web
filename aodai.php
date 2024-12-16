<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểu Áo Sơ Mi Nữ Công Sở Đẹp</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.cdnfonts.com/css/noyh-geometric-slim" rel="stylesheet">
    <!--[if lte IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js" integrity="sha512-i/6nAYMMwXZ3dTsq+ngdkSl4MbtVQF0FdCeqP5/1HSXPxyEd43vrxhafg1P4iqKRAnZVHn48GYaFUYRcTB0YrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <![endif]-->
    <style>
        @import url('https://fonts.cdnfonts.com/css/noyh-geometric-slim');
    </style>
    <script>
       
       document.addEventListener("DOMContentLoaded", function () {
           fetch('getdatagiohang.php')
               .then(response => response.json())
               .then(data => {
                   document.getElementById('header__cart-notice').textContent = data.cartCount;
               })
               .catch(error => console.error('Lỗi:', error));
       });
   
   </script>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">

                <!-- header with search -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="./website.php" class="header__logo-link">
                            <img src="./assets/img/logo.png" alt="" class="header_logo-img">
                        </a>
                    </div>
                    
                    <div class="menu">
                        <li><a href="">Áo</a>
                            <ul class="sub_menu">
                                <li><a href="./aosomi.php">Áo sơ mi</a></li>
                                <li><a href="./aothun.php">Áo thun</a></li>
                                <li><a href="./aopeplum.php">Áo peplum</a></li>
                                <li><a href="./aolen.php">Áo len</a></li>
                            </ul>
                        </li>
                        <li><a href="">Quần & Jumpsuit</a>
                            <ul class="sub_menu">
                                <li><a href="./quanjeans.php">Quần</a></li>
                                <li><a href="./jumpsuit.php">Jumpsuit</a></li>
                            </ul>
                        </li>
                        <li><a href="">Đầm/Áo dài</a>
                            <ul class="sub_menu">
                                <li><a href="./vaydamnu.php">Váy đầm nữ</a></li>
                                <li><a href="./aodai.php">Áo dài</a></li>
                            </ul>
                        </li>
                        <li><a href="./phukien.php">Phụ kiện</a>
                        </li>
                    </div>

                    <div class="header__search">
                        <div class="header__search-input-wrap">
                            <input type="text" class="header__search-input" id="search" placeholder="Tìm kiểm sản phẩm">
                        </div>
                    </div>
                    <script>
                            document.getElementById('search').addEventListener('keyup', function() {
                        const searchValue = this.value.toLowerCase();
                        const products = document.querySelectorAll('.grid__column-2-4');
                    
                        products.forEach(product => {
                    
                            const productName = product.getAttribute('data-name').toLowerCase();
                            
                    
                            if (productName.includes(searchValue)) {
                                product.style.display = 'block';
                            } else {
                                product.style.display = 'none';
                            }
                        });
                    });
                    
                        </script>
                  

                    <ul class="header__navbar-list">
                        <li class="navbar__items">
                            <a href="guiphanhoi.php" class="navbar__items-link">
                                <i class="navbar__icon fa-regular fa-circle-question"></i>
                                Trợ giúp
                            </a>
                        </li>
                        <!-- <li class="navbar__items navbar__items--bold navbar__items--separate">Đăng ký</li>
                        <li class="navbar__items navbar__items--bold">Đăng nhập</li> -->
                        
                        <li class="navbar__items navbar__user">
                            <img src="https://down-vn.img.susercontent.com/file/sg-11134004-7qvdb-lj4byxci3f6783_tn" alt="" class="navbar__user-img">
                            <span class="navbar__user-name"><?php
                            
                                if (isset($_SESSION['username'])) {
                                    echo $_SESSION['username']; 
                                } else {
                                    echo "Khách";  
                                }
                            ?></span>
                            
                            <ul class="navbar__user-menu">
                                <li class="navbar__user-item">
                                    <a href="">Tài khoản của tôi</a>
                                </li>
                                <li class="navbar__user-item">
                                    <a href="">Đơn mua</a>
                                </li>
                                <li class="navbar__user-item navbar__user-item--separate">
                                    <a href="website.php">Đăng xuất</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- cart layout -->
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                           <a href="./giohang.php"> <i  class="header__cart-icon fa-solid fa-bag-shopping"></i></a>

                            <span class="header__cart-notice" id="header__cart-notice">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <!-- <i class="category__heading-icon fas fa-list"></i> -->
                                Danh mục
                            </h3>
                            <ul class="category-list">
                                <li class="category-item">
                                    <a href="vaydamnu.php" class="category-item__link">Váy đầm nữ</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="aodai.php" class="category-item__link">Áo dài</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
    
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>

                            <div class="drop_down select-input">
                                <select name="arange" id="arrange">
                                    <option value="all">Tất Cả</option>
                                    <option value="under50">Dưới 500000đ</option>
                                    <option value="50to100">từ 500000 đến 1000000</option>
                                    <option value="above100">Trên 1000000</option>
                                </select>
                            </div>
                            <script>
                                document.getElementById('arrange').addEventListener('change', function() 
                                    {
                                        const filterValue = this.value;
                                        const products = document.querySelectorAll('.grid__column-2-4');
                        
                                        products.forEach(product =>
                                        {
                                            const price = parseInt(product.getAttribute('data-price'), 10);
                        
                                
                                            if (filterValue === 'all') 
                                            {
                                                product.style.display = 'block';
                                            } 
                                            else if (filterValue === 'under50' && price < 500000) 
                                            {
                                                product.style.display = 'block';
                                            }
                                             else if (filterValue === '50to100' && price >= 500000 && price <= 1000000)
                                            {
                                                product.style.display = 'block';
                                            }
                                            else if (filterValue === 'above100' && price > 1000000) 
                                            {
                                                product.style.display = 'block';
                                            } 
                                            else 
                                            {
                                                product.style.display = 'none';
                                            }
                                        });
                                    });
                        
                            </script>
                
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                </span>
                                
                                <div class="home-filter__page-control">
                                    <!-- Nút điều hướng trang trước -->
                                    <a href="javascript:void(0)" onclick="navigatePage('prev')" class="home-filter__page-btn" id="prev-page">
                                        <i class="home-filter__page-icon fas fa-angle-left"></i>
                                    </a>
                                    
                                    <!-- Nút điều hướng trang sau -->
                                    <a href="javascript:void(0)" onclick="navigatePage('next')" class="home-filter__page-btn" id="next-page">
                                        <i class="home-filter__page-icon fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <script>
                            // Khởi tạo trang hiện tại và tổng số trang
                            let currentPage = 1;
                            const totalPages = 1;

                            // Cập nhật giao diện
                            function updatePageInfo() {
                                // Cập nhật số trang hiển thị
                                document.getElementById('current-page').textContent = currentPage;
                                document.getElementById('total-pages').textContent = totalPages;

                                // Vô hiệu hóa nút "Previous" nếu đang ở trang 1
                                if (currentPage === 1) {
                                    document.getElementById('prev-page').style.pointerEvents = 'none';
                                } else {
                                    document.getElementById('prev-page').style.pointerEvents = 'auto';
                                }
                                
                                // Vô hiệu hóa nút "Next" nếu đang ở trang cuối cùng
                                if (currentPage === totalPages) {
                                    document.getElementById('next-page').style.pointerEvents = 'none';
                                } else {
                                    document.getElementById('next-page').style.pointerEvents = 'auto';
                                }
                            }

                            function navigatePage(direction) {
                                if (direction === 'prev' && currentPage > 1) {
                                    currentPage--;
                                } else if (direction === 'next' && currentPage < totalPages) {
                                    currentPage++;
                                }

                                // Cập nhật lại giao diện ngay lập tức
                                updatePageInfo();
                            }

                            // Khởi tạo giao diện khi trang được tải lần đầu
                            window.onload = function() {
                                updatePageInfo();  // Cập nhật số trang khi trang được tải
                            }
                        </script>

                        <div class="home-product">
                            <div class="grid__row">
                                <!-- product item -->
                                <div class="grid__column-2-4" data-name="Set Áo Dài Hoàng Cúc" data-price="2790000" >
                                    <p class="home-product-item">
                                        <!-- Hình ảnh chính -->
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/vaydamnu/SetAoDaiHoangCuc2790.webp); height: 285px;">
                                        </div>
                                        
                                        <!-- Hình ảnh ẩn sẽ hiện rõ dần khi hover -->
                                        <!-- <div class="home-product-item__img--hidden" style="background-image: url(./assets/img/aosomitest.webp); height: 285px;">
                                        </div> -->
                                        
                                        <h4 class="home-product-item__name">Set Áo Dài Hoàng Cúc</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">2.790.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <div class="home-product-item__add-to-card">
                                                <form action="chitietsp.php" method="post">
                                                    <input class="btn btn__add-to-card" type="submit" name="addcart" value="Chi Tiết Sản Phẩm" id="">
                                                    <input type="hidden" name="tensp" value="Set Áo Dài Hoàng Cúc" id="">
                                                    <input type="hidden" name="gia" value="2790000" id="">
                                                    <input type="hidden" name="hinh" value="./assets/img/vaydamnu/SetAoDaiHoangCuc2790.webp" id="">
                                                </form>
                                            </div>
                                        </div>
                                
                                        <div class="home-product-item__favorite">
                                            <span>Best Seller</span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="grid__column-2-4" data-name="Set Bộ Áo Dài Điệp Tử" data-price="2590000">
                                    <p class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/vaydamnu/SetBoAoDaiDiepTu2590.webp); height: 285px;"></div>
                                        <h4 class="home-product-item__name">Set Bộ Áo Dài Điệp Tử</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-current">2.590.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <div class="home-product-item__add-to-card">
                                                <form action="chitietsp.php" method="post">
                                                    <input class="btn btn__add-to-card" type="submit" name="addcart" value="Chi Tiết Sản Phẩm" id="">
                                                    <input type="hidden" name="tensp" value="Set Bộ Áo Dài Điệp Tử" id="">
                                                    <input type="hidden" name="gia" value="2590000" id="">
                                                    <input type="hidden" name="hinh" value="./assets/img/vaydamnu/SetBoAoDaiDiepTu2590.webp" id="">
                                                </form>
                                            </div>
                                        </div>

                                        <div class="home-product-item__favorite">
                                            <span>Best Seller</span>
                                        </div>
                                        
                                        <!-- <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">15%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div> -->
                                    </p>
                                </div>

                                <div class="grid__column-2-4" data-name="Set Bộ Áo Dài Nguyệt Thanh" data-price="2690000">
                                    <p class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/vaydamnu/SetBoAoDaiNguyetThanh2690.jpg); height: 285px;"></div>
                                        <h4 class="home-product-item__name">Set Bộ Áo Dài Nguyệt Thanh</h4>
                                        <div class="home-product-item__price">
                                            <!-- <span class="home-product-item__price-old">1.024.000</span> -->
                                            <span class="home-product-item__price-current">2.690.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <div class="home-product-item__add-to-card">
                                                <form action="chitietsp.php" method="post">
                                                    <input class="btn btn__add-to-card" type="submit" name="addcart" value="Chi Tiết Sản Phẩm" id="">
                                                    <input type="hidden" name="tensp" value="Set Bộ Áo Dài Nguyệt Thanh" id="">
                                                    <input type="hidden" name="gia" value="2690000" id="">
                                                    <input type="hidden" name="hinh" value="./assets/img/vaydamnu/SetBoAoDaiNguyetThanh2690.jpg" id="">
                                                </form>
                                            </div>
                                        </div>

                                        <div class="home-product-item__favorite">
                                            <span>Best Seller</span>
                                        </div>
                                        
                                        <!-- <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">15%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div> -->
                                    </p>
                                </div>

                                <div class="grid__column-2-4" data-name="Set Bộ Áo Dài Ý Châu" data-price="2590000">
                                    <p class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(./assets/img/vaydamnu/SetBoAoDaiYChau2590.webp); height: 285px;"></div>
                                        <h4 class="home-product-item__name">Set Bộ Áo Dài Ý Châu</h4>
                                        <div class="home-product-item__price">
                                            <!-- <span class="home-product-item__price-old">114.000</span> -->
                                            <span class="home-product-item__price-current">2.590.000</span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <div class="home-product-item__add-to-card">
                                                <form action="chitietsp.php" method="post">
                                                    <input class="btn btn__add-to-card" type="submit" name="addcart" value="Chi Tiết Sản Phẩm" id="">
                                                    <input type="hidden" name="tensp" value="Set Bộ Áo Dài Ý Châu" id="">
                                                    <input type="hidden" name="gia" value="2590000" id="">
                                                    <input type="hidden" name="hinh" value="./assets/img/vaydamnu/SetBoAoDaiYChau2590.webp" id="">
                                                </form>
                                            </div>
                                        </div>

                                        <div class="home-product-item__favorite">
                                            <span>Best Seller</span>
                                        </div>
                                        
                                        <!-- <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-percent">15%</span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div> -->
                                    </p>
                                </div>
                            </div>
                        </div>

                        <ul class="pagination home-product__pagination" id="pagination">
                            <li class="pagination-item">
                                <a onclick="navigatePage('prev')" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-left"></i>
                                </a>
                            </li>
                        
                            <li class="pagination-item pagination-item--active">
                                <a onclick="navigatePage(1)" class="pagination-item__link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a onclick="navigatePage(2)" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a onclick="navigatePage(3)" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a onclick="navigatePage(4)" class="pagination-item__link">4</a>
                            </li>
                            
                            <li class="pagination-item">
                                <a onclick="navigatePage('next')" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        
                        <script>
                            // let currentPage = 1;
                            // const totalPages = 3;

                            function renderPagination(currentPage) {
                                const pagination = document.getElementById('pagination');
                                pagination.innerHTML = ''; // Xóa tất cả phần tử trong pagination để render lại

                                // Nút lùi (prev)
                                const prevPage = document.createElement('li');
                                prevPage.className = 'pagination-item' + (currentPage === 1 ? ' pagination-item--disabled' : '');
                                prevPage.innerHTML = `
                                    <a onclick="navigatePage('prev')" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-left"></i>
                                    </a>`;
                                pagination.appendChild(prevPage);

                                // Hiển thị các trang
                                const maxVisiblePages = 5;
                                let startPage = Math.max(1, currentPage - 2);
                                let endPage = Math.min(totalPages, currentPage + 2);

                                if (currentPage <= 3) {
                                    endPage = Math.min(totalPages, maxVisiblePages);
                                } else if (currentPage >= totalPages - 2) {
                                    startPage = Math.max(1, totalPages - maxVisiblePages + 1);
                                }

                                for (let i = startPage; i <= endPage; i++) {
                                    const pageItem = document.createElement('li');
                                    pageItem.className = 'pagination-item' + (i === currentPage ? ' pagination-item--active' : '');
                                    pageItem.innerHTML = `<a onclick="navigatePage(${i})" class="pagination-item__link">${i}</a>`;
                                    pagination.appendChild(pageItem);
                                }

                                // Nút tiến (next)
                                const nextPage = document.createElement('li');
                                nextPage.className = 'pagination-item' + (currentPage === totalPages ? ' pagination-item--disabled' : '');
                                nextPage.innerHTML = `
                                    <a onclick="navigatePage('next')" class="pagination-item__link">
                                        <i class="pagination-item__icon fas fa-angle-right"></i>
                                    </a>`;
                                pagination.appendChild(nextPage);
                            }

                            // Hàm điều hướng trang
                            function navigatePage(page) {
                                if (page === 'next') {
                                    currentPage = Math.min(totalPages, currentPage + 1);
                                } else if (page === 'prev') {
                                    currentPage = Math.max(1, currentPage - 1);
                                } else {
                                    currentPage = page;
                                }

                                renderPagination(currentPage);
                                loadPageContent(currentPage);  // Cập nhật nội dung theo trang hiện tại

                                // Cập nhật URL với tham số trang
                                history.pushState({ page: currentPage }, `Page ${currentPage}`, `?page=${currentPage}`);
                            }

                            // Load trang mặc định từ URL (nếu có)
                            document.addEventListener("DOMContentLoaded", function() {
                                const urlParams = new URLSearchParams(window.location.search);
                                const pageParam = urlParams.get('page');
                                
                                if (pageParam) {
                                    currentPage = parseInt(pageParam);
                                }

                                renderPagination(currentPage);
                                loadPageContent(currentPage);
                            });

                            // Hàm load nội dung (giả lập)
                            function loadPageContent(page) {
                                console.log("Đang tải nội dung trang:", page);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
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
                        <h3 class="footer__heading">Mã sinh viên</h3>
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
                        <h3 class="footer__heading">Họ và tên</h3>
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
                        <h3 class="footer__heading">Theo dõi tôi</h3>
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
                        <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
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
    </div>
</body>
</html>