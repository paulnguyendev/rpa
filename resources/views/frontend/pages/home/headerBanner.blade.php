@php
    use App\Helpers\Package\CoursePackage;
   
@endphp
<section id="headerBanner" class="header-banner">
    <div class="container">
        <div class="d-flex flex-wrap">
            <div class="header-banner-left">
                <div class="inner animate-fade-in">
                    {!!  CoursePackage::showCategory() !!}
                  
                   
               
               
                  
                  
                
               
              
                   
                  
             
                  
                 
                  
                
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
            <div class="header-banner-right">
                <div class="inner">
                    <div class="header-banner-first header-banner-slider slick__slider--normal animate-fade-in">
                        <div class="inner">
                            <a target="_blank" href="https://kyna.vn/khoa-hoc-7-buoc-ban-hang-chuyen-nghiep "
                                class="item">
                                <div class="inner">
                                    <picture>
                                        <source media="(min-width: 767px)"
                                            srcset="https://cdn-skill.kynaenglish.vn/uploads/banners/995/img/image_url-1625585388.png">
                                        <img width="100%" height="auto" class="img"
                                            data-lazy="https://cdn-skill.kynaenglish.vn/uploads/banners/995/img/mobile_image_url-1625585389.png"
                                            alt="7-buoc-ban-hang-chuyen-nghiep ">
                                    </picture>
                                </div>
                            </a>
                            <a target="_blank"
                                href="https://kyna.vn/thuyet-phuc-va-phan-bien-theo-phong-cach-cua-chuyen-gia "
                                class="item">
                                <div class="inner">
                                    <picture>
                                        <source media="(min-width: 767px)"
                                            srcset="https://cdn-skill.kynaenglish.vn/uploads/banners/1013/img/image_url-1625585336.png">
                                        <img width="100%" height="auto" class="img"
                                            data-lazy="https://cdn-skill.kynaenglish.vn/uploads/banners/1013/img/mobile_image_url-1625585341.png"
                                            alt="thuyet-phuc-va-phan-bien">
                                    </picture>
                                </div>
                            </a>
                            <a target="_blank" href="https://kyna.vn/tieng-hoa-cho-nguoi-moi-bat-dau "
                                class="item">
                                <div class="inner">
                                    <picture>
                                        <source media="(min-width: 767px)"
                                            srcset="https://cdn-skill.kynaenglish.vn/uploads/banners/1022/img/image_url-1625585277.png">
                                        <img width="100%" height="auto" class="img"
                                            data-lazy="https://cdn-skill.kynaenglish.vn/uploads/banners/1022/img/mobile_image_url-1625585278.png"
                                            alt="tieng-hoa-cho-nguoi-moi-bat-dau ">
                                    </picture>
                                </div>
                            </a>
                            <a target="_blank" href="https://kyna.vn/bi-quyet-kiem-tien-tu-dau-tu-chung-khoan"
                                class="item">
                                <div class="inner">
                                    <picture>
                                        <source media="(min-width: 767px)"
                                            srcset="https://cdn-skill.kynaenglish.vn/uploads/banners/1027/img/image_url-1625585204.png">
                                        <img width="100%" height="auto" class="img"
                                            data-lazy="https://cdn-skill.kynaenglish.vn/uploads/banners/1027/img/mobile_image_url-1625585205.png"
                                            alt="bi-quyet-kiem-tien-tu-dau-tu-chung-khoan">
                                    </picture>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="header-banner-second header-banner-slider" data-url="{{url('public/data/sub-hero-banner-ajax.json')}}">
                        <div class="inner">
                            <!-- Render js -->
                            <div class="item item-loading">
                                <img src="https://cdn-skill.kynaenglish.vn/img/loading-larger.gif"
                                    alt="Khóa học trực tuyến">
                            </div>
                            <div class="item item-loading">
                                <img src="https://cdn-skill.kynaenglish.vn/img/loading-larger.gif"
                                    alt="Khóa học trực tuyến">
                            </div>
                            <div class="item item-loading">
                                <img src="https://cdn-skill.kynaenglish.vn/img/loading-larger.gif"
                                    alt="Khóa học trực tuyến">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
