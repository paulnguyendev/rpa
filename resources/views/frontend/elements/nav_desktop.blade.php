@php
    use App\Helpers\Package\CoursePackage;
   
@endphp
<nav id="navDesktop" class="navbar navbar-light header-wrap">
    <div class="container">
        <div class="navbar-wrap">
            <div class="navbar-top">
                <div class="navbar-top-left">
                    <div class="navbar-brand logo">
                        <h1>
                            <a href="{{ route('home/index') }}">
                                <img width="148" height="auto" src="{{ asset('kyna/img/logo.png') }}"
                                    alt="Khóa học online nâng cao kỹ năng cùng các chuyên gia đầu ngành"
                                    class="img-fluid" /></a>
                        </h1>
                    </div>

                    <div class="form-inline header-search">
                        <div class="row-menu-bar-mobile hidden-sm-up">
                            <div class="k-menu-list-course col-xs-8">
                                <a class="nav-link" href="#" data-offpage="#nav-mobile">
                                    <i class="icon icon-bars"></i>
                                    <span>Danh mục khóa học</span>
                                </a>
                            </div>
                            <div class="k-button-search-course col-xs-4">
                                <a id="k-button-search-course-mb" class="nav-link" href="#"
                                    data-offpage="#nav-mobile-search">
                                    <img src="https://cdn-skill.kynaenglish.vn/img/icon/search-icon.svg" width="15"
                                        height="auto" alt="Khóa học trực tuyến">
                                </a>
                            </div>
                        </div>
                        <form id="search-form" action="/danh-sach-khoa-hoc" method="get">
                            <div class="input-group">
                                <label hidden for="live-search-bar">Tìm kiếm</label>
                                <input id="live-search-bar" name="q" type="text"
                                    class="form-control live-search-bar" placeholder="Nhập tên khóa học/giảng viên"
                                    autocomplete="off">
                                <button class="search-button" type="submit" aria-label="search">
                                    <img src="https://cdn-skill.kynaenglish.vn/img/icon/search-icon.svg" width="20"
                                        height="20" alt="Khóa học trực tuyến">
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
                                <a href="{{route('fe_cart/index')}}" class="dropdown-toggle cart_anchor" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://cdn-skill.kynaenglish.vn/img/cart/cart.svg" width="24"
                                        height="24" alt="Khóa học trực tuyến">
                                    <span class="count-number">{{Cart::instance('frontend')->count()}}</span>
                                </a>
                                @include('frontend.pages.ajax.cart')
                            </div>
                        </div>
                    </div>
                    {{-- <div class="nav-item right-line">
                        <a class="nav-link cod-btn" href="/kich-hoat">Kích hoạt COD</a>
                    </div> --}}
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
                        <a href="{{ route('auth/register') }}" class="register-btn">Đăng ký</a>
                        <a href="{{ route('auth/login') }}" class="login-btn">Đăng
                            nhập</a>
                    </div>
                </div>
            </div>
            <div class="navbar-bottom">
                <div class="nav-item nav-item-category  nav-item-active-js ">
                    <div class="nav-link">
                        <i class="far fa-bars"></i>DANH MỤC KHÓA HỌC
                    </div>
                    <div class="header-banner-category">
                        <i class="icon fas fa-sort-up"></i>
                        <div class="header-banner-left">
                            <div class="inner animate-fade-in">
                                {!! CoursePackage::showCategory() !!}
















                            </div>
                            <div class="header-banner-child-category">
                                <div class="inner">
                                    <!--  Render by js  -->
                                </div>
                            </div>
                            <div class="header-banner-course">
                                <div class="inner">
                                    <!--  Render by js  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item-box">
                   
                    {{-- <div class="nav-item nav-item-course" data-toggle="user-seen-course-header">
                        <a class="nav-link" href="#">
                            <i class="far fa-eye"></i>Khóa học đã xem
                        </a>
                    </div> --}}
                    <div class="nav-item">
                        <a href="{{route('fe_combo/index')}}" class="nav-link">
                            <i class="far fa-books"></i>Tất cả combo
                        </a>
                    </div>
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
               
            </div>
        </div>
    </div>
    </div>
    <!--end .container-->
</nav>
