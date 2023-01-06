@php
    use App\Helpers\Obn;
@endphp
@extends('frontend.main')
@section('content')
    <link rel="stylesheet" href="https://cdn-skill.kynaenglish.vn/css/search.css?v=1672900678">
    <style>
        .k-box-card-list .k-box-card .k-box-card-wrap {
            border: 1px solid #ddd;
        }

        h3.mobile {
            display: none !important;
            font-weight: bold;
        }

        .k-box-card-list .k-box-card .k-box-card-wrap {}

        #best-seller-courses div.hr {
            border: 1px solid #ddd !important;
            margin-bottom: 25px !important;
        }

        .best-seller-categories-container {
            margin-top: 1.3rem !important;
        }

        #best-seller-courses h2 {
            display: block;
            color: #50ad4e;
            font-size: 18px;
            padding-left: 15px;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            #banner-campaign-category h3 {
                display: block;
                font-weight: bold;
                padding-left: 15px;
            }

            .hot-category .img {
                width: 100% !important;
                box-shadow: none !important;
            }

            .k-listing-content span.menu-heading {
                margin-top: -11px !important;
            }

            .slick-dotted.slick-slider {
                margin-bottom: 5px !important;
            }

            .slick-slider {
                margin-top: 0 !important;
            }

            #banner-campaign-category .sm-banner {
                padding-bottom: 15px;
                display: none;
            }

            .hot-category {
                border: 0px solid #ddd !important;
            }

            #hot-courses .box {
                margin: 10px;
            }

            .breadcrumb-container {
                display: none;
            }

            .best-seller-categories-container .col-xl-4,
            .col-lg-6,
            .col-xs-6 {
                padding: 0px !important;
            }

            .slick-slide.k-box-card-list {
                padding-bottom: 0 !important;
            }

            h3.mobile {
                display: block !important;
                font-weight: bold;
                padding-left: 1px;
                color: #50ad4e;
            }

            .slick-dots {
                position: absolute;
                bottom: 5px;
            }

            .breadcrumb-container {
                margin-top: 67px;
                background-color: #fafafa;
            }

            .slick-dots li button:before {
                font-size: 10px !important;
                line-height: 25px;
            }

            .best-seller-categories-container {
                margin-top: 1px !important;
            }

            .best-seller-categories-container {
                margin-top: 1px !important;
            }

            .hot-category {
                padding: 5px !important;
            }

            #best-seller-courses h2 {
                display: block;
                color: #50ad4e;
                font-size: 20px;
                padding-left: 15px;
            }

            #best-seller-courses div.hr {
                margin-top: 20px !important;
                margin-left: 3.5%;
                width: 93%;
            }

            .hot-category .name {
                font-size: unset !important;
            }
        }

        #k-listing {}

        #hot-courses h3 {
            display: none;
        }

        #hot-courses {
            margin-bottom: -15px;
        }

        @media (min-width: 768px) {
            #hot-courses h3 {
                display: block;
                color: #50ad4e;
                font-size: 18px;
                padding-left: 15px;
                padding-right: 14px;
                padding-bottom: 0;
            }
        }

        div.hr {
            width: 96%;
            border-bottom-style: solid;
            border-bottom-width: initial;
            border-color: #aab2bd;
            margin-top: -18px;
            margin-bottom: 40px;
            margin-left: 2%
        }

        .hot-category .name {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            font-size: large;
            font-weight: bolder;
            color: #FFFFFF;
            height: 100%;
        }

        .hot-category .name span {
            position: absolute;
            width: 94%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 2.5%;
        }

        .hot-category:hover .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #000;
            opacity: 0.2;
            border-radius: 1px;
        }

        @media(max-width: 425px) {
            .hot-category {
                position: unset !important;
            }

            #w2 {
                padding: 0 12px;
            }

            .w3 {
                padding: 0 12px;
            }
        }

        #w2 {
            margin-bottom: 20px;
        }

        .w3 {
            margin-bottom: 20px;
        }

        k-box-card-wrap.k-box-card-wrap-hot {}
    </style>
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times-circle"></i></span>
                    </button>
                    <div class="video-preview__wrapper">
                        <video id="video-preview__player" class="video-js vjs-fluid" controls>
                            <video id="video-preview__player" class="video-js vjs-fluid" controls>
                            </video>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="video-preview__playlist"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs start -->
    <div class="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
                    <a itemscope itemtype='http://schema.org/Thing' itemprop='item' id='https://skills.kynaenglish.vn/'
                        href='https://skills.kynaenglish.vn/'>
                        <span itemprop='name'>Trang chủ</span>
                        <meta itemprop='url' content=https://skills.kynaenglish.vn />
                    </a>
                    <meta itemprop='position' content='1'>
                </li>
                <li><a href="/danh-sach-khoa-hoc">Danh sách khóa học</a></li>
                <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class='active'>
                    <span itemprop='name'>Sales - CSKH</span>
                    <meta itemprop='url' content='https://skills.kynaenglish.vn/danh-sach-khoa-hoc/sales-cskh'>
                    <meta itemprop='position' content='2'>
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs end -->
    <main>
        <form id="facets-form" class="k-listing-filter form-inline" action="/danh-sach-khoa-hoc/sales-cskh" method="get">
            @if (Obn::checkDevice() == 'mobile')
                @section('body_class','mobile')
                {{-- Mobile --}}
                <div class="t-wrap-sort-mobile">
                    <div class="container">
                        <div class="t-wrap-btn">
                            <a href="javascript:" class="btn-listing-filter" id="t-btn-listing-filter">
                                <img src="https://cdn-skill.kynaenglish.vn/img/kyna-teach/icon-filter.svg" alt="icon">Bộ
                                lọc
                                <span class="t-total-sort" id="t-total-sort">0</span>
                            </a>
                            <a href="javascript:" class="btn-listing-sort" id="t-btn-listing-sort">
                                <img src="https://cdn-skill.kynaenglish.vn/img/kyna-teach/icon-sort.svg" alt="icon">Sắp
                                xếp
                            </a>
                        </div>
                    </div>
                    <div class="t-popup-filter">
                        <div class="t-header-popup-filter">
                            <a href="javascript:" class="t-btn-popup-filter-close" id="t-btn-popup-filter-close">
                                <img src="https://cdn-skill.kynaenglish.vn/img/icon-close.svg" alt="icon">
                            </a>
                            Bộ lọc
                        </div>
                        <div class="t-body-popup-filter">
                                                                                                    <div class="checkbox">
                                                <input id="facet-type-1" type="checkbox" name="facets[type][1]" value="1">
                                                <label for="facet-type-1">
                                                    <span><span></span></span>Học qua Video                                </label>
                                            </div>
                                                            
                                                                                                                        <div class="checkbox">
                                                <input id="facet-discount-0" type="checkbox" name="facets[discount][0]" value="0">
                                                <label for="facet-discount-0">
                                                    <span><span></span></span>Miễn phí                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-discount-1" type="checkbox" name="facets[discount][1]" value="1" data-com.bitwarden.browser.user-edited="yes">
                                                <label for="facet-discount-1">
                                                    <span><span></span></span>Khuyến mãi                                </label>
                                            </div>
                                                            
                                                                    
                                                            <div class="t-group-checkbox">
                                            <h3 class="t-sub-title-popup-filter">Theo thời lượng:</h3>
                                                                        <div class="checkbox">
                                                <input id="facet-time-0" type="radio" name="facets[time][value]" value="0">
                                                <label for="facet-time-0">
                                                    <span><span></span></span>Dưới 3 tiếng                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-time-1" type="radio" name="facets[time][value]" value="1">
                                                <label for="facet-time-1">
                                                    <span><span></span></span>3 - 24 tiếng                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-time-2" type="radio" name="facets[time][value]" value="2">
                                                <label for="facet-time-2">
                                                    <span><span></span></span>1 - 3 ngày                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-time-3" type="radio" name="facets[time][value]" value="3">
                                                <label for="facet-time-3">
                                                    <span><span></span></span>Trên 3 ngày                                </label>
                                            </div>
                                                                </div>
                                                                    
                                                            <div class="t-group-checkbox">
                                            <h3 class="t-sub-title-popup-filter">Theo trình độ:</h3>
                                                                        <div class="checkbox">
                                                <input id="facet-level-1" type="radio" name="facets[level][value]" value="1">
                                                <label for="facet-level-1">
                                                    <span><span></span></span>Cơ bản                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-level-2" type="radio" name="facets[level][value]" value="2">
                                                <label for="facet-level-2">
                                                    <span><span></span></span>Nâng cao                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-level-3" type="radio" name="facets[level][value]" value="3">
                                                <label for="facet-level-3">
                                                    <span><span></span></span>Chuyên sâu                                </label>
                                            </div>
                                                                    <div class="checkbox">
                                                <input id="facet-level-4" type="radio" name="facets[level][value]" value="4">
                                                <label for="facet-level-4">
                                                    <span><span></span></span>Mọi cấp độ                                </label>
                                            </div>
                                                                </div>
                                                        </div>
                
                        <div class="t-wrap-btn-popup-filter">
                            <a href="javascript:" class="t-btn-popup-filter-cancel" id="t-btn-popup-filter-cancel">Hủy bỏ</a>
                            <a href="javascript:" class="t-btn-popup-filter-update" id="t-btn-popup-filter-update">Cập nhật</a>
                        </div>
                    </div>
                </div>
            @else
            @section('body_class','desktop')
                <!-- Desktop -->
                <div class="container">
                    <div class="t-wrap-sort">
                        <div class="t-left-sort">
                            <a href="javascript:" class="btn-listing-filter"><img
                                    src="https://cdn-skill.kynaenglish.vn/img/kyna-teach/icon-filter.svg" alt="icon">Bộ
                                lọc:</a>
                            <div class="checkbox">
                                <input id="facet-type-1" type="checkbox" name="facets[type][1]" value="1">
                                <label for="facet-type-1">
                                    <span><span></span></span>Học qua Video </label>
                            </div>
                            <select class="form-control t-select-custom" id="facet-time" name="facets[time][value]"
                                value="">
                                <option value="">Theo thời lượng</option>
                                <option value="0">Dưới 3 tiếng</option>
                                <option value="1">3 - 24 tiếng</option>
                            </select>
                            <select class="form-control t-select-custom" id="facet-level" name="facets[level][value]"
                                value="">
                                <option value="">Theo trình độ</option>
                                <option value="1">Cơ bản</option>
                                <option value="2">Nâng cao</option>
                                <option value="3">Chuyên sâu</option>
                                <option value="4">Mọi cấp độ</option>
                            </select>
                        </div>
                        <div class="field-sort">
                            <label><img src="https://cdn-skill.kynaenglish.vn/img/kyna-teach/icon-sort.svg"
                                    alt="">Sắp
                                xếp:</label>
                            <select class="form-control t-select-custom" id="sort" name="sort" value="">
                                <option selected value="new">Mới nhất</option>
                                <option value="feature">Nổi bật</option>
                                <option value="promotion">% khuyến mãi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End Desktop -->
            @endif


        </form>
        <div id="k-listing" class="container k-height-header">
            <div class="col-lg-3 col-xs-12 k-listing-sidebar" id="offpage-listing-sidebar">
                <header>
                    <div class="k-header-offpage-menu">
                        <img src="https://cdn-skill.kynaenglish.vn/img/logo/Kynavnraftlogo.svg" alt="Kyna.vn"
                            class="img-responsive">
                        <a href="#" class="left offpage-close" data-offpage="#offpage-listing-sidebar">
                            <i class="icon icon-arrow-right-bold" aria-hidden="true"></i>
                        </a>
                    </div>
                </header>
                <section>
                    <div class="k-listing-category">
                        <h1 class="title-cat">Sales - CSKH</h1>
                        <ul class="k-category-list pd0">
                            <li class="tat-ca-khoa-hoc">
                                <a href="/danh-sach-khoa-hoc">
                                    <img class="img-lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                        data-src="https://cdn-skill.kynaenglish.vn/uploads/categories/65/img/menu_icon-1594881835.png"
                                        width="20" height="20" alt="Tất cả khóa học">Tất cả khóa học</a>
                            </li>
                            <li class="khoa-hoc-combo">
                                <a href="/khuyen-mai/nhom-khoa-hoc">
                                    <img class="img-lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                        data-src="https://cdn-skill.kynaenglish.vn/uploads/categories/66/img/menu_icon-1594881630.png"
                                        width="20" height="20" alt="Khóa học Combo<">Khóa học Combo</a>
                            </li>
                            {{-- Sub category --}}
                            <li class="ban-hang">
                                <a href="/danh-sach-khoa-hoc/sales-cskh/ban-hang">
                                    <img class="img-lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                        data-src="https://cdn-skill.kynaenglish.vn/uploads/categories/162/img/menu_icon-1597659288.png"
                                        width="20" height="20" alt="Bán hàng">Bán hàng </a>
                            </li>
                            <li class="cham-soc-khach-hang">
                                <a href="/danh-sach-khoa-hoc/sales-cskh/cham-soc-khach-hang">
                                    <img class="img-lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                        data-src="https://cdn-skill.kynaenglish.vn/uploads/categories/162/img/menu_icon-1597659288.png"
                                        width="20" height="20" alt="Chăm sóc khách hàng">Chăm sóc khách
                                    hàng </a>
                            </li>
                            <li class="telesales">
                                <a href="/danh-sach-khoa-hoc/sales-cskh/telesales">
                                    <img class="img-lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                        data-src="https://cdn-skill.kynaenglish.vn/uploads/categories/162/img/menu_icon-1597659288.png"
                                        width="20" height="20" alt="Telesales">Telesales </a>
                            </li>
                            <li class="turn-back">
                                <a href="/danh-sach-khoa-hoc">
                                    <i class="icon-arrow-left-bold icon"></i> Xem các danh mục khác
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end k-category-->
                </section>
                <section>
                    <div class="k-listing-hot-topics">
                        <h3>Chủ đề đang hot</h3>
                        <ul class="k-listing-hot-topics-list">
                            <li><a href="/tag/tieng-nhat" title="Tiếng nhật">Tiếng nhật</a></li>
                            <li><a href="/tag/ban-hang" title="Bán hàng">Bán hàng</a></li>
                            <li><a href="/tag/khoa-hoc-marketing-online" title="Marketing">Khóa học Marketing
                                    online</a></li>
                            <li><a href="/tag/tieng-anh" title="Học Tiếng Anh Online Cùng Chuyên Gia">Tiếng Anh</a>
                            </li>
                            <li><a href="/tag/bat-dong-san" title="Khoá học bất động sản online">Bất động sản</a>
                            </li>
                            <li><a href="/tag/lap-trinh" title="Lập trình">Lập trình</a></li>
                            <li><a href="/tag/dau-tu-chung-khoan" title="đầu tư chứng khoán">Đầu tư chứng khoán</a>
                            </li>
                            <li><a href="/tag/ki-nang-mem" title="Kĩ năng mềm ">Kĩ năng mềm </a></li>
                            <li><a href="/tag/digital-marketing" title="Digital Marketing">Digital Marketing</a>
                            </li>
                            <li><a href="/tag/tieng-anh-cong-so" title=" Tiếng anh công sở"> Tiếng anh công sở</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!--end .k-listing-sidebar-->
            <div class="col-lg-9 col-xs-12 k-listing-content">
                <!-- start hot courses-->
                <!-- end hot courses -->
                <div>
                    <span class="menu-heading">
                        <h1 class="-mob"><b>Sales - CSKH</b></h1>
                        <div class="category-mobile">
                            <div>
                                <a class="" href="/danh-sach-khoa-hoc/sales-cskh/ban-hang">Bán hàng</a>
                            </div>
                            <div>
                                <a class="" href="/danh-sach-khoa-hoc/sales-cskh/cham-soc-khach-hang">Chăm sóc
                                    khách hàng</a>
                            </div>
                            <div>
                                <a class="" href="/danh-sach-khoa-hoc/sales-cskh/telesales">Telesales</a>
                            </div>
                        </div>
                        <div class="box-inline">
                            <h1 class="-pc t-h1-search">
                                <span class="t-sub-h1-search">
                                    <b>
                                        18 </b>
                                    <b class="-pc">
                                        khóa học
                                    </b>
                                </span>
                                <span class="-mob">khóa học </span><br>
                                <b>Sales - CSKH</b>
                            </h1>
                            <div class="k-listing-button-filter k-button-mobile">Lọc kết quả <img
                                    src="https://cdn-skill.kynaenglish.vn/img/icon-filter.png" alt=""></div>
                        </div>
                    </span>
                </div>
                <section>
                    <ul id="w0" class="k-box-card-list">
                        <li class="col-xl-4 col-md-6 col-xs-12 k-box-card" data-key="0">
                            <style>
                                .view-price__flash-sale {
                                    position: absolute;
                                }

                                .view-price__flash-sale .old-price {
                                    position: relative;
                                }

                                .view-price__flash-sale .in-flash {
                                    left: -10px;
                                    text-decoration: line-through;
                                }

                                .view-price__flash-sale .new-price::before {
                                    content: url("https://cdn-skill.kynaenglish.vn/img/flash-sale/flash-icon.png");
                                    position: relative;
                                    top: 2px;
                                }

                                .view-price__flash-sale .new-price {
                                    position: relative;
                                    top: 5px;
                                    left: 0px;
                                    color: #ff293f;
                                    font-size: 18px;
                                }

                                .clock-flash-sale {
                                    margin-top: 10px !important;
                                }

                                @media only screen and (max-width: 540px) {
                                    .view-price-mb {
                                        padding: 10px 0 25px !important;
                                    }

                                    .clock-flash-sale-text {
                                        position: absolute;
                                        left: 10px;
                                        bottom: 55px;
                                    }
                                }
                            </style>
                            <div class="k-box-card-wrap clearfix" data-id="1954" data-course-type="1">
                                <div class="img">
                                    <img class="img-fluid img-lazy"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII="
                                        size="263x147" alt="Tự động hóa kinh doanh Online" resizeMode="cover"
                                        returnMode="img" lazyImg
                                        data-src="https://cdn-skill.kynaenglish.vn/uploads/courses/1954/img/image_url-1631263836.jpg">
                                    <div class="label-wrap">
                                    </div>
                                    <!--start course rating-->
                                    <div class="rating-box clearfix">
                                        <div class="dot" position="1"><i class="fa fa-circle"
                                                aria-hidden="true"></i></div>
                                        <div class="rating-text"><b>0 <i class="icon icon-star"></i></b> <span>(0
                                                đánh giá)</span></div>
                                        <div class="dot" position="2"><i class="fa fa-circle"
                                                aria-hidden="true"></i></div>
                                        <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i>
                                            <span>6 <span>học viên</span>
                                                đăng ký học
                                            </span>
                                        </div>
                                    </div>
                                    <!--end rating-->

                                </div>
                                <!--end .img-->
                                <div class="content">
                                    <div class="box-style">
                                    </div>
                                    <h4>Tự động hóa kinh doanh Online</h4>
                                    <span class="author"><i class="fas fa-user-tie"></i>Lê Trọng Nghĩa</span>
                                    <span class="major"><i class="fas fa-briefcase"></i>Giam Doc</span>
                                </div>
                                <!--end .content -->
                                <div class="content-mb">
                                    <b>Lê Trọng Nghĩa</b><span><b>,</b> Giam Doc</span>
                                </div>
                                <!--end .content mb -->
                                <div class="view-price">
                                    <ul>
                                        <li class="price"><strong>199.000đ</strong></li>
                                    </ul>
                                </div>
                                <!--end .view-price-->
                                <div class="view-price-mb">
                                    <div class="student">
                                        <div class="number">6</div>
                                        <div class="text">học viên</div>
                                    </div>
                                    <div class="time">
                                        <div class="number">3</div>
                                        <div class="text">giờ</div>
                                    </div>
                                    <div class="price">
                                        <div class="label-price">
                                            <div class="first">199.000đ</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end .view-price mb-->
                                <a href="/tu-dong-hoa-kinh-doanh-online" class="link-wrap"></a>
                            </div>
                            <a href="/tu-dong-hoa-kinh-doanh-online" class="card-popup"></a>
                            <!--end .wrap-->
                        </li>
                    </ul>
                    <nav id="pager-container">
                    </nav>
                </section>
                <section class="category-seo-description">
                    <p><strong>Cung cấp 3 chủ đề học chất lượng&nbsp;</strong></p>
                    <p>3 chủ đề với hơn 27 kh&oacute;a học SALE (B&Aacute;N H&Agrave;NG) - CHĂM S&Oacute;C KH&Aacute;CH
                        H&Agrave;NG m&agrave; KYNA.VN cung cấp bao gồm: b&aacute;n h&agrave;ng, chăm s&oacute;c
                        kh&aacute;ch h&agrave;ng, telesales. Đ&acirc;y được xem l&agrave; 3 chủ đề &ldquo;xương
                        sống&rdquo; quyết định đến khả năng chốt sale c&oacute; th&agrave;nh c&ocirc;ng hay
                        kh&ocirc;ng.&nbsp;</p>
                    <p>Khi tham gia c&aacute;c kh&oacute;a học sale, b&aacute;n h&agrave;ng, chăm s&oacute;c kh&aacute;c
                        h&agrave;ng bạn sẽ được cung cấp đầy đủ kh&ocirc;ng chỉ một m&agrave; c&ograve;n nhiều kỹ năng
                        v&ocirc; c&ugrave;ng &ldquo;thần th&aacute;nh&rdquo;. V&iacute; dụ như: Ứng dụng c&ocirc;ng cụ
                        DISC trong ph&acirc;n t&iacute;ch h&agrave;nh vi kh&aacute;ch h&agrave;ng, B&iacute; quyết chốt
                        sales v&agrave; tăng doanh số, 12 bước trở th&agrave;nh tư vấn vi&ecirc;n bảo hiểm nh&acirc;n
                        thọ triệu đ&ocirc;, Kỹ năng b&aacute;n h&agrave;ng trực tiếp cho chuy&ecirc;n vi&ecirc;n
                        kh&aacute;ch h&agrave;ng, Kỹ năng chăm s&oacute;c kh&aacute;ch h&agrave;ng chuy&ecirc;n
                        nghiệp,...</p>
                    <p><strong>Kh&ocirc;ng g&ograve; b&oacute; về thời gian học&nbsp;</strong></p>
                    <p>Nếu bạn tham gia c&aacute;c lớp học về sale (b&aacute;n h&agrave;ng) v&agrave; chăm s&oacute;c
                        kh&aacute;ch h&agrave;ng tại c&aacute;c kh&oacute;a học offline th&igrave; sẽ bị thụ động về mặt
                        thời gian. Điều n&agrave;y sẽ khiến cho việc học gặp nhiều kh&oacute; khăn, do đ&oacute; lượng
                        kiến thức m&agrave; bạn tiếp cận được cũng kh&ocirc;ng mang lại hiệu quả.&nbsp;</p>
                    <p>Tuy nhi&ecirc;n, đến với kh&oacute;a học sales (b&aacute;n h&agrave;ng) - Chăm s&oacute;c
                        kh&aacute;ch h&agrave;ng tr&ecirc;n KYNA.VN, nỗi lo n&agrave;y ho&agrave;n to&agrave;n được
                        &ldquo;đ&aacute;nh bay&rdquo;. Do t&iacute;nh chất l&agrave; học online n&ecirc;n bạn
                        ho&agrave;n to&agrave;n c&oacute; thể chủ động về thời gian học, bạn c&oacute; thể học mọi
                        l&uacute;c mọi nơi, học bất cứ l&uacute;c n&agrave;o m&agrave; bạn muốn. Đặc biệt, bạn c&oacute;
                        thể học c&ugrave;ng bạn b&egrave;, người th&acirc;n nhằm kết nối tri thức.&nbsp;</p>
                    <p><strong>Học c&ugrave;ng c&aacute;c giảng vi&ecirc;n h&agrave;ng đầu&nbsp;</strong></p>
                    <p>Điểm mạnh lớn nhất m&agrave; c&aacute;c kh&oacute;a học sales (b&aacute;n h&agrave;ng) - Chăm
                        s&oacute;c kh&aacute;ch h&agrave;ng tr&ecirc;n KYNA.VN mang lại cho bạn đ&oacute; ch&iacute;nh
                        l&agrave; bạn sẽ được học c&ugrave;ng với c&aacute;c giảng vi&ecirc;n h&agrave;ng đầu trong
                        ng&agrave;nh. Điển h&igrave;nh như: Phạm Vũ B&igrave;nh, Ho&agrave;ng Kim Phượng, L&ecirc; Thanh
                        L&acirc;m, L&ecirc; Trọng An, Oanh Đặng, Nguyễn Tấn Huy, Joseph Nguyễn,....</p>
                    <p>Với những kinh nghiệm &ldquo;xương m&aacute;u&rdquo; trong lĩnh vực sales (b&aacute;n
                        h&agrave;ng) - Chăm s&oacute;c kh&aacute;ch h&agrave;ng, c&aacute;c giảng vi&ecirc;n sẽ
                        gi&uacute;p bạn nhanh ch&oacute;ng nắm bắt thị trường v&agrave; kỹ năng, từ đ&oacute;
                        gi&uacute;p cho qu&aacute; tr&igrave;nh kinh doanh gặt h&aacute;i được nhiều th&agrave;nh
                        c&ocirc;ng.</p>
                    <p>Vậy, c&ograve;n chần chờ g&igrave; nữa m&agrave; c&aacute;c bạn kh&ocirc;ng đăng k&yacute; tham
                        gia c&aacute;c kh&oacute;a học sales (b&aacute;n h&agrave;ng) - Chăm s&oacute;c kh&aacute;ch
                        h&agrave;ng tr&ecirc;n KYNA.VN ngay từ h&ocirc;m nay!</p>
                </section>
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(document).on('shown.bs.modal', "#modal", function() {
                            setTimeout(function() {
                                FB.XFBML.parse();
                            }, 1000);
                        });
                    });
                </script>
            </div>
            <!--end .k-listing-content-->
        </div>
        <!--end #k-listing-->
    </main>
@endsection
@section('custom_script')
    <script type="text/javascript">
        $('.t-select-custom').select2({
            minimumResultsForSearch: -1
        });
        $('#facets-form select').change(function() {
            var params = decodeURIComponent($('#facets-form').serialize());
            var action = $('#facets-form').attr('action');
            window.location.href = action + '?' + params;
        });
        if ($('body').hasClass('mobile')) {
            let numberOfChecked = $('.k-listing-filter input:checked').length;
            $('.k-listing-filter input:checked').addClass('current-checked');
            $('#t-total-sort').html(numberOfChecked);
            $('#t-btn-listing-filter').click(function() {
                $('main').addClass('show-popup-filter');
            });
            $('#t-btn-popup-filter-cancel').click(function() {
                let action = $('#facets-form').attr('action');
                $('main').removeClass('show-popup-filter');
                window.location.href = action;
            });
            $('#t-btn-popup-filter-close').click(function() {
                $('main').removeClass('show-popup-filter');
                setTimeout(function() {
                    $('.k-listing-filter input').prop('checked', false);
                    $('.k-listing-filter input.current-checked').prop('checked', true);
                }, 500);
            });
            $('#t-btn-listing-sort').click(function() {
                $('.t-select-custom').select2('open');
                $('.select2-container').addClass('t-select2-sort');
                $('body').prepend('<div class="t-overlay-layout"></div>');
                $('.t-overlay-layout').click(function() {
                    $('.t-overlay-layout').remove();
                    $('.t-select-custom').select2('close');
                });
            });
            $('#t-btn-popup-filter-update').click(function() {
                var params = decodeURIComponent($('#facets-form').serialize());
                var action = $('#facets-form').attr('action');
                window.location.href = action + '?' + params;
            });
        } else {
            $('#facets-form :checkbox').click(function() {
                var params = decodeURIComponent($('#facets-form').serialize());
                var action = $('#facets-form').attr('action');
                window.location.href = action + '?' + params;
            });
        };
        (function($) {
            if ($('#topbar').length > 0) {
                var imgHeight = $('#topbar').find('img:visible').height();
                var LISTING_MARGIN_TOP = 67;
                $('.k-header-wrap').css('top', imgHeight + 'px');
                $('#k-listing').css('marginTop', LISTING_MARGIN_TOP + imgHeight + 'px');
            }
            $('body').on('submit', '#profile-form', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');
                var form = $(e.target);
                console.log(form);
                console.log(form.parent());
                $.post(url, form.serialize(), function(res) {
                    form.parents('.k-profile-edit-content').html(res);
                });
            });
            $('body').on('submit', '#active-cod-form', function(e) {
                e.preventDefault();
                var url = $(this).attr('action');
                var form = $(e.target);
                $.post(url, form.serialize(), function(res) {
                    form.parent().html(res);
                });
            });
        })(jQuery);
    </script>
@endsection
