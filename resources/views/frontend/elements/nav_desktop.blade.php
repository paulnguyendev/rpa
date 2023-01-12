<nav id="navDesktop" class="navbar navbar-light header-wrap">
    <div class="container">
        <div class="navbar-wrap">
            <div class="navbar-top">
                <div class="navbar-top-left">
                    <div class="navbar-brand logo">
                        <h1>
                            <a href="{{route('home/index')}}">
                                <img width="148" height="auto" src="{{asset('kyna/img/logo.png')}}" alt="Khóa học online nâng cao kỹ năng cùng các chuyên gia đầu ngành" class="img-fluid" /></a>
                        </h1>
                    </div>
                    <script type="application/ld+json">
                        {
                            "@context": "http://schema.org",
                            "@type": "Organization",
                            "url": "https://kyna.vn",
                            "logo": "https://cdn-skill.kynaenglish.vn/img/logo/Kynavnraftlogo.svg"
                        }
                    </script>
                    <div class="form-inline header-search">
                        <div class="row-menu-bar-mobile hidden-sm-up">
                            <div class="k-menu-list-course col-xs-8">
                                <a class="nav-link" href="#" data-offpage="#nav-mobile">
                                    <i class="icon icon-bars"></i>
                                    <span>Danh mục khóa học</span>
                                </a>
                            </div>
                            <div class="k-button-search-course col-xs-4">
                                <a id="k-button-search-course-mb" class="nav-link" href="#" data-offpage="#nav-mobile-search">
                                    <img src="https://cdn-skill.kynaenglish.vn/img/icon/search-icon.svg" width="15" height="auto" alt="Khóa học trực tuyến">
                                </a>
                            </div>
                        </div>
                        <form id="search-form" action="/danh-sach-khoa-hoc" method="get">
                            <div class="input-group">
                                <label hidden for="live-search-bar">Tìm kiếm</label>
                                <input id="live-search-bar" name="q" type="text" class="form-control live-search-bar" placeholder="Nhập tên khóa học/giảng viên" autocomplete="off">
                                <button class="search-button" type="submit" aria-label="search">
                                    <img src="https://cdn-skill.kynaenglish.vn/img/icon/search-icon.svg" width="20" height="20" alt="Khóa học trực tuyến">
                                </button>
                            </div>
                        </form> <!--               Live earch result-->
                        <div id="live-search-result" class="live-search-result"></div>
                        <!--                End live search result-->
                    </div>
                </div>
                <div class="nav head-direction">
                    <div class="nav-item nav-item-cart">
                        <div class="k-header-info header-cart">
                            <div class="cart dropdown">
                                <a href="/gio-hang" class="dropdown-toggle cart_anchor" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://cdn-skill.kynaenglish.vn/img/cart/cart.svg" width="24" height="24" alt="Khóa học trực tuyến">
                                    <span class="count-number none-item">0</span>
                                </a>
                                <ul class="dropdown-menu wrap clearfix">
                                    <div class="hidden" id="items-id-in-current-cart" style="display: none" data-all-cart-items=""></div>
                                    <li class="clearfix wrap-form-cart k-add-to-cart-register" id="k-header-form-cart">
                                        <p class="empty-cart">Giỏ hàng trống!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item right-line">
                        <a class="nav-link cod-btn" href="/kich-hoat">Kích hoạt COD</a>
                    </div>
                    <div class="nav-item">
                        <!--                  <a href="/dang-nhap" class="button-login header-login" data-toggle="modal"-->
                        <!--                     data-target="#k-popup-account-login" data-ajax="" data-push-state="false">Đăng nhập-->
                        <!--                    <span class="logo-login">-->
                        <!--                      <img src="--><!--/img/logo/fb-logo.png" width="22" height="auto" alt="Khóa học trực tuyến">-->
                        <!--                      <img src="--><!--/img/logo/google-logo.png" width="22" height="auto"-->
                        <!--                           alt="Khóa học trực tuyến">-->
                        <!--                      <img src="--><!--/img/logo/vnw-logo.png" width="22" height="auto"-->
                        <!--                           alt="Khóa học trực tuyến">-->
                        <!--                    </span>-->
                        <!--                  </a>-->
                        <a href="{{route('auth/register')}}" class="register-btn" >Đăng ký</a>
                        <a href="{{route('auth/login')}}" class="login-btn" >Đăng
                            nhập</a>
                    </div>
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="nav-item nav-item-category  ">
                    <div class="nav-link">
                        <i class="far fa-bars"></i>DANH MỤC KHÓA HỌC
                    </div>
                </div>
                <div class="nav-item-box">
                    <div class="nav-item nav-item-course" data-toggle="best-seller-course-header">
                        <a href="#" class="nav-link">
                            <i class="far fa-thumbs-up"></i>Bán chạy nhất
                        </a>
                    </div>
                    {{-- <div class="nav-item nav-item-course" data-toggle="user-seen-course-header">
                        <a class="nav-link" href="#">
                            <i class="far fa-eye"></i>Khóa học đã xem
                        </a>
                    </div> --}}
                    <div class="nav-item">
                        <a href="/danh-sach-khoa-hoc" class="nav-link">
                            <i class="far fa-books"></i>Tất cả khóa học
                        </a>
                    </div>
                    {{-- <div class="nav-item nav-item-blog">
                        <a href="/bai-viet" target="_blank" class="nav-link">
                            <i class="fas fa-wifi"></i>Blog
                        </a>
                    </div> --}}
                </div>
                <div class="user-seen-course-header course-header">
                    <div class="container"></div>
                </div>
                <div class="best-seller-course-header course-header">
                    <section class="course-special section-best-seller-header" id="bestSeller">
                        <div class="container">
                            <div class="heading-wrap animate-fade-in">
                                <h2 class="heading-5 heading-section">Khóa học bán chạy nhất<span style="color: #ff7818;"></span>
                                </h2>
                                <!--            <a href="/search">Xem thêm <i class="fas fa-arrow-right pl-3"></i></a>-->
                            </div>
                        </div>
                        <div class="slider-prev">
                            <div class="btn-prev slick-arrow-lg">
                            </div>
                        </div>
                        <div class="slider-next">
                            <div class="btn-next slick-arrow-lg">
                            </div>
                        </div>
                        <div class="course-special__wrapper animate-fade-in">
                            <div class="course-special__item animate-fade-in" data-id="738">
                                <a target="_blank" href="/site/index?slug=5-bi-quyet-dau-tu-bat-dong-san/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/738/img/image_url-1599553451.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            5 Bí quyết đầu tư bất động sản </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Nguyễn Thành Tiến
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        5 Bí quyết đầu tư bất động sản </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                11 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 2 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.5 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 15312 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 23/02/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/5-bi-quyet-dau-tu-bat-dong-san/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/7/3/8/738_Lesson_Bai01_mp4Q5DPcqp3EThg0nYPeWWq9hixVhlZH2qlVKIpOKjnvCsJFNS6428YYYj26axGDzZl3KsbEQCReHaCalCxsjlZtPCANk.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="738" action="AddToCart" label="5 Bí quyết đầu tư bất động sản">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="1293">
                                <a target="_blank" href="/site/index?slug=khoa-hoc-tim-hieu-thi-truong-chung-khoan-phai-sinh/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/1293/img/image_url-1599620710.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Chứng khoán phái sinh và thị trường chứng khoán phái sinh </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Jennifer Trần
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Chứng khoán phái sinh và thị trường chứng khoán phái sinh </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                14 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 5 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.4 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 568 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 15/08/2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/khoa-hoc-tim-hieu-thi-truong-chung-khoan-phai-sinh/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/2/9/3/1293_Lesson_bai 0_mp4jZJdS8hZqETpVvGTd7Vm6i6ZgvLbnJkH7Duah53f3MQjn5KdqIjSrt4dBIVdhzVHyLBx34eR8ZdZs17IU08GcIXgAwx0rVTN85iV.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="1293" action="AddToCart" label="Chứng khoán phái sinh và thị trường chứng khoán phái sinh">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="1504">
                                <a target="_blank" href="/site/index?slug=khoa-hoc-12-buoc-tro-thanh-tu-van-vien-bao-hiem-nhan-tho-trieu-do-mdrt/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/1504/img/image_url-1599711881.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            12 Bước Trở Thành Tư Vấn Viên Bảo Hiểm Nhân Thọ Triệu Đô
                                            MDRT </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Joseph Nguyễn
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        12 Bước Trở Thành Tư Vấn Viên Bảo Hiểm Nhân Thọ Triệu Đô MDRT
                                    </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                50 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 5 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.6 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 5095 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 16/11/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/khoa-hoc-12-buoc-tro-thanh-tu-van-vien-bao-hiem-nhan-tho-trieu-do-mdrt/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/0/4/1504_Lesson_Bai01 KBZItdXKlXvQiCCCmfHQA6lInXgILWue04c8COrXrmflABlYNZ8v4ExwA3vbHNrD4Xos1WewCN2XrLafV81R63UE32Wm1upe9uxe.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="1504" action="AddToCart" label="12 Bước Trở Thành Tư Vấn Viên Bảo Hiểm Nhân Thọ Triệu Đô MDRT">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="152">
                                <a target="_blank" href="/site/index?slug=bi-quyet-mua-ban-bat-dong-san-thanh-cong/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/152/img/image_url-1612421110.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Bí quyết mua bán bất động sản thành công </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Phan Công Chánh
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Bí quyết mua bán bất động sản thành công </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                19 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 2 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.4 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 16490 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 04/10/2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/bi-quyet-mua-ban-bat-dong-san-thanh-cong/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/2/152_Lesson_Bai01_mp4itNTaY2ru34BEjkqOk49q65G7HzELc83FVXPUZho3lZHFj7tEcC4iILqqk5bwdfc9d13cirgEr.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="152" action="AddToCart" label="Bí quyết mua bán bất động sản thành công">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="1272">
                                <a target="_blank" href="/site/index?slug=khoa-hoc-kinh-doanh-airbnb-khong-can-so-huu-nha/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/1272/img/image_url-1600316728.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Kinh doanh AirBnB không cần sở hữu nhà </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Phạm Tấn Tài
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Kinh doanh AirBnB không cần sở hữu nhà </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                36 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 3 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                3.9 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 13498 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 03/08/2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/khoa-hoc-kinh-doanh-airbnb-khong-can-so-huu-nha/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/2/7/2/1272_Lesson_Bai00_mp45JeZQIJwbDGYv0SBDI1xODbczKp3aexChdhaDrd44FIPX4PUluMYGEiAKmgHmL4hxseeWXj2V1ZkghkBHSVuCr6OOeHEzyULiqmD.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="1272" action="AddToCart" label="Kinh doanh AirBnB không cần sở hữu nhà">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="910">
                                <a target="_blank" href="/site/index?slug=nghiep-vu-hanh-chinh-van-phong-va-quan-ly-nhan-su-tu-a-z/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/910/img/image_url-1600328266.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Nghiệp vụ Hành chính - Văn phòng và Quản lý nhân sự từ A-Z </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Bùi Đình Sa
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Nghiệp vụ Hành chính - Văn phòng và Quản lý nhân sự từ A-Z </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                68 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 13 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                3.8 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 1796 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 10/02/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/nghiep-vu-hanh-chinh-van-phong-va-quan-ly-nhan-su-tu-a-z/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/9/1/0/910_Lesson_Bai00_mp4jpPGs8VsC4zNufmGbLOFB0j76RLEVDsxRJ3y8RnX8c4VBnTX3whyeUIiJDGd8hMhKu7WBYUBR2KIllSJS1iKoNes23.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="910" action="AddToCart" label="Nghiệp vụ Hành chính - Văn phòng và Quản lý nhân sự  từ A-Z">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="550">
                                <a target="_blank" href="/site/index?slug=phap-luat-trong-kinh-doanh-bat-dong-san/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/550/img/image_url-1600326414.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Pháp luật trong kinh doanh bất động sản </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Phạm Văn Võ
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Pháp luật trong kinh doanh bất động sản </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                25 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 3 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.8 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 10498 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 25/09/2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/phap-luat-trong-kinh-doanh-bat-dong-san/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/5/5/0/550 Lesson Bai01 mp4Sgg5ksWMdBCWlc2p5oR2la8bxZ9l6ufYKw35Y0ScBu9XGbnLAeOWpX7XWhi3Lx1v35B26tfIXoFEA2qa.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="550" action="AddToCart" label="Pháp luật trong kinh doanh bất động sản">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="153">
                                <a target="_blank" href="/site/index?slug=bi-quyet-thue-va-cho-thue-nha-nhanh-chong/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/153/img/image_url-1600317276.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Bí quyết thuê và cho thuê nhà nhanh chóng </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Phan Công Chánh
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Bí quyết thuê và cho thuê nhà nhanh chóng </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                18 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 2 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.4 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 13209 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 03/08/2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/bi-quyet-thue-va-cho-thue-nha-nhanh-chong/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/3/153_Lesson_Bai01_mp4UuXQ51o7SyhCXMNjp0jLM07V0gCDpGCkbAagBznu8F76rUpQVICHJKDJ1gnqXZK8zVobvLGDrNJSI8JDRmlA6Zk7fH.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="153" action="AddToCart" label="Bí quyết thuê và cho thuê nhà nhanh chóng">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="719">
                                <a target="_blank" href="/site/index?slug=phan-tich-ky-thuat-trong-chung-khoan/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/719/img/image_url-1600325837.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Phân tích kỹ thuật trong chứng khoán </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Jennifer Trần
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Phân tích kỹ thuật trong chứng khoán </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                36 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 15 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.8 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 4688 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 05/12/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/phan-tich-ky-thuat-trong-chung-khoan/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/7/1/9/719_Lesson_Bai01_mp42dwxXf4NXvQ1uOCoeZS4KuKE4Vg1VcITMGQ8TRmqvqnu55r0tsHPdMeUX5z5jSnPK0PW9NngdnB5JQnwqe3eXq7dSV.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="719" action="AddToCart" label="Phân tích kỹ thuật trong chứng khoán">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="1127">
                                <a target="_blank" href="/site/index?slug=nhap-mon-chung-khoan-cho-nguoi-moi-bat-dau/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/1127/img/image_url-1600317027.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Nhập môn chứng khoán cho người mới bắt đầu </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Công ty Cổ phần Chứng khoán VNDIRECT
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Nhập môn chứng khoán cho người mới bắt đầu </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                13 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 2 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.1 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 4199 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 24/09/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/nhap-mon-chung-khoan-cho-nguoi-moi-bat-dau/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/1/2/7/1127_Lesson_Bai1_mp4LA8iOu47zH5Fu0sRJ5qJjXbHFj6JFl2a9ki1AuNZymc1efZpzgHwdTErA9KM7EZJSOFMmtC36Y9ai68U4xidpAfaM503TlKtTQcU.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="1127" action="AddToCart" label="Nhập môn chứng khoán cho người mới bắt đầu">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="1440">
                                <a target="_blank" href="/site/index?slug=khoa-hoc-hoach-dinh-chien-luoc-trong-dau-tu-chung-khoan/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/1440/img/image_url-1600325197.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            Hoạch định chiến lược trong đầu tư chứng khoán </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Công ty Cổ phần Chứng khoán VNDIRECT
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        Hoạch định chiến lược trong đầu tư chứng khoán </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                9 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 3 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.1 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 632 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 16/10/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/khoa-hoc-hoach-dinh-chien-luoc-trong-dau-tu-chung-khoan/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/4/4/0/1440_Lesson_bai1_mp45wqD4CwbwxWe1QGeQ67iXaXPvNY1ggJpjPW73l3757tM4f4oQtmOgO7HI1DV0fujtF6bVJKjAHvog3GF4ziT2tYpMH4cExjZswA0.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="1440" action="AddToCart" label="Hoạch định chiến lược trong đầu tư chứng khoán">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="course-special__item animate-fade-in" data-id="1755">
                                <a target="_blank" href="/site/index?slug=khoa-hoc-7-buoc-ban-hang-chuyen-nghiep/580938?utm_source=new_header&utm_medium=best_seller">
                                    <!--          <a target="_blank" href="-->
                                    <!--">-->
                                    <div class="course-special__item-image animate-fade-in">
                                        <div class="course-special-image__wrapper">
                                            <img class="course-special-image" data-lazy="https://cdn-skill.kynaenglish.vn/uploads/courses/1755/img/image_url-1599625483.cover-559x348.jpg" alt="course-special-image">
                                        </div>
                                        <img class="course-special-ribbon" src="https://cdn-skill.kynaenglish.vn/img/ribbon/ribbon-bestseller.png" alt="couse-special-ribbon">
                                    </div>
                                    <div class="course-special__item-info animate-fade-in">
                                        <div class="course-special__item-heading">
                                            7 bước bán hàng chuyên nghiệp </div>
                                        <div class="course-special__item-lecturer">
                                            <i class="fas fa-user-tie"></i>
                                            Joseph Nguyễn
                                        </div>
                                    </div>
                                </a>
                                <div class="course-special__item-backdrop">
                                    <div class="course-special__item-backdrop-title">
                                        7 bước bán hàng chuyên nghiệp </div>
                                    <div class="course-special__item-backdrop-info-wrapper">
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-play-circle"></i>
                                                23 video
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-clock"></i> 2 giờ
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                4.3 <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i> </div>
                                        </div>
                                        <div class="course-special__item-backdrop-info">
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-user"></i> 294 học viên
                                            </div>
                                            <i class="fas fa-circle"></i>
                                            <div class="course-special__item-backdrop-info-item">
                                                <i class="fas fa-calendar-check"></i> 06/07/2022
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-special__item-backdrop-cta">
                                        <a target="_blank" href="/khoa-hoc-7-buoc-ban-hang-chuyen-nghiep/580938?utm_source=new_header&utm_medium=best_seller" class="cta-course-detail btn-outline-green">Chi
                                            tiết</a>
                                        <div>
                                            <!--                            <a class="cta-course-preview btn-ripple cta-open-video request-login" href="/dang-nhap"-->
                                            <!--                               data-toggle="modal"-->
                                            <!--                               data-target="#k-popup-account-login" data-ajax="" data-push-state="false">-->
                                            <!--                                <i class="fas fa-play"></i>-->
                                            <!--                            </a>-->
                                            <a href="#" class="cta-course-preview btn-ripple cta-open-video" data-source="https://vod.kynaenglish.com/kyna/_definst_/1/7/5/5/1755_Lesson_Baib1_p1_mp4gRDj8MQwDGwcCtYiMsMaovi7TTrctcfzmg6wL2IoDFFFsxj9f75WG6z8aGxE74PBShx3EiwuZjRdHlRrJg8ZdeLFMxqg6GslIAYD.mp4/playlist.m3u8?v=342">
                                                <i class="fas fa-play"></i>
                                            </a>
                                            <a class="cta-add-to-cart btn-outline-green btn-circle go-to-cart add-to-cart" data-pid="1755" action="AddToCart" label="7 bước bán hàng chuyên nghiệp">
                                                <i class="far fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end .container-->
</nav>