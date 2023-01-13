@extends('frontend.main')
@section('content')
    <!-- Breadcrumbs start -->
    <div class="breadcrumb-container">
        <div class="container">
        </div>
    </div>
    <!-- Breadcrumbs end -->
    <section>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/legit-ripple@1.1.0/dist/ripple.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
            rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@babel/polyfill@7.6.0/dist/polyfill.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
        <!--Content-->
        <!-- Block data for track course viewed -->
        <div id="loadReviewUrl" hidden>/course/default/load-review?course_id=152</div>
        <div id="course-detail" class="course-detail">
            <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal"
                aria-hidden="true">
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
            <div class="cd-top-banner have-bg opt-1"
                style="background-image: url('https://cdn-skill.kynaenglish.vn/uploads/categories/img/cover-bat-dong-san.jpg');">
                <div class="container">
                    <div class="course-detail--left">
                        <h1 class="cd-title">Bí quyết mua bán bất động sản thành công</h1>
                        <div class="gv-info">
                            <div class="gv-left">
                                <img src="https://cdn-skill.kynaenglish.vn/uploads/user/113475/img/avatar-1529981077.cover-100x100.png"
                                    alt="Kyna - Avatar    Giang Vien">
                            </div>
                            <div class="gv-right">
                                <h2 class="gv-name">Phan Công Chánh </h2>
                                <h4 class="gv-title">Chuyên gia bất động sản cá nhân </h4>
                                <div class="gv-short-des truncate-2 m-b-0">
                                    <p><span style="color: #333333;">- Chủ tịch hội đồng quản trị <strong>C&ocirc;ng ty
                                                cổ phần&nbsp;Tư vấn Đầu tư Ph&uacute; Vinh</strong>.</span></p>
                                    <p><span style="color: #333333;">- Đồng thời l&agrave; <strong>chuy&ecirc;n gia Bất
                                                động sản c&aacute; nh&acirc;n</strong> nhiều năm kinh nghiệm.</span></p>
                                </div>
                                <a class="gv-btn-view-more" href="/giang-vien/phan-cong-chanh">Xem thêm</a>
                            </div>
                        </div>
                        <ul class="crs-short-info">
                            <li>
                                <img class="crs-icon-info" src="https://cdn-skill.kynaenglish.vn/img/level.svg"
                                    alt="Kyna - Icon trinh do">
                                <p>Trình độ: <span>Mọi cấp độ</span></p>
                            </li>
                            <li>
                                <img class="crs-icon-info" src="https://cdn-skill.kynaenglish.vn/img/rating.svg"
                                    alt="Kyna - Icon danh gia">
                                <div class="crs-total-star">
                                    <span>4.4</span>
                                    <img class="is-mobile" src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                        alt="Kyna - Star">
                                    <div class="wrap-star is-desktop">
                                        <img src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg" alt="Kyna - Star">
                                        <img src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg" alt="Kyna - Star">
                                        <img src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg" alt="Kyna - Star">
                                        <img src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg" alt="Kyna - Star">
                                        <img src="https://cdn-skill.kynaenglish.vn/img/star-half.svg" alt="Kyna - Star">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <img class="crs-icon-info" src="https://cdn-skill.kynaenglish.vn/img/certificate.svg"
                                    alt="Kyna - Icon hoan thanh">
                                <p>Cấp chứng nhận <span>hoàn thành</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cd-overlay" style="background-color:rgba(0, 0, 0, 0.6)"></div>
            </div>
            <section id="courseDetailTabs" class="course-detail-tabs">
                <div class="container">
                    <div class="course-detail-tabs-list ">
                        <a href="{{route('fe_course/detail',['slug' => 'ten-khoa-hoc'])}}#courseDetailOverview" class="course-detail-tab">Bạn sẽ học được gì?</a>
                        <a href="{{route('fe_course/detail',['slug' => 'ten-khoa-hoc'])}}#courseDetailIntroduce" class="course-detail-tab">Giới thiệu</a>
                        <a href="{{route('fe_course/detail',['slug' => 'ten-khoa-hoc'])}}#courseDetailContent" class="course-detail-tab">Nội dung <span class="hide">&nbsp;khóa
                                học</span></a>
                        <a href="{{route('fe_course/detail',['slug' => 'ten-khoa-hoc'])}}#courseDetailRating" class="course-detail-tab">Đánh giá</a>
                    </div>
                </div>
            </section>
            <div class="container course-detail-container">
                <div class="course-detail--left">
                    <section id="courseDetailIntro">
                        <div id="courseDetailOverview" class="course-general">
                            <h5 class="title">Bạn sẽ học được gì?</h5>
                            <div class="course-general__wrapper ">
                                <h4><strong>Th&ocirc;ng qua kh&oacute;a học kinh doanh bất động sản, bạn sẽ nắm
                                        vững:</strong></h4>
                                <ul style="color: #272727;">
                                    <li style="margin-right: 0px;">C&aacute;ch thức t&igrave;m kiếm v&agrave; nắm
                                        th&ocirc;ng tin về bất động sản gi&aacute; tốt</li>
                                    <li style="margin-right: 0px;">Nguy&ecirc;n tắc để mua b&aacute;n bất động sản bất
                                        kỳ với gi&aacute; tốt nhất cho bạn</li>
                                    <li style="margin-right: 0px;">Nhận diện c&aacute;c rủi ro sẽ gặp phải khi mua
                                        b&aacute;n nh&agrave; v&agrave; c&aacute;ch tr&aacute;nh</li>
                                    <li style="margin-right: 0px;">Những điểm cần lưu &yacute; trong một hợp đồng mua
                                        b&aacute;n nh&agrave;</li>
                                    <li style="margin-right: 0px;">Xử l&yacute; th&ocirc;ng minh vấn đề t&agrave;i
                                        ch&iacute;nh, vay tiền để mua nh&agrave;</li>
                                    <li style="margin-right: 0px;">C&aacute;c điểm cần lưu &yacute; về thủ tục, hợp
                                        đồng</li>
                                </ul>
                                <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">
                                    &nbsp;</div>
                            </div>
                        </div>
                        <div id="courseDetailIntroduce" class="course-general">
                            <h5 class="title">Giới thiệu khóa học</h5>
                            <div class="course-general__wrapper">
                                <p>Bạn đ&atilde; l&agrave;m l&acirc;u năm trong lĩnh vực <strong>mua b&aacute;n bất động
                                        sản</strong> v&agrave; lu&ocirc;n thắc mắc rằng:</p>
                                <ul style="color: #272727;">
                                    <li style="margin-right: 0px;">Liệu c&oacute; c&aacute;ch n&agrave;o để
                                        kh&aacute;ch h&agrave;ng muốn "gi&agrave;nh" mua nh&agrave; của bạn?</li>
                                    <li style="margin-right: 0px;">C&aacute;ch thức n&agrave;o gi&uacute;p bạn mua bất
                                        động sản<span style="color: #000000;"> bất kỳ với gi&aacute; rẻ hơn thị trường
                                            rất nhiều lần?</span></li>
                                    <li style="margin-right: 0px;">L&agrave;m thế n&agrave;o để việc mua b&aacute;n
                                        được nhanh ch&oacute;ng, gi&aacute; tốt nhất cho bạn?</li>
                                    <li style="margin-right: 0px;">Vượt qua c&aacute;c vấn đề thủ tục nh&agrave; đất
                                        một c&aacute;ch trơn tru?</li>
                                    <li style="margin-right: 0px;">L&agrave;m thế n&agrave;o để tạo lợi thế v&agrave;
                                        nắm quyền chủ động trong thương lượng?</li>
                                </ul>
                                <p>Thực tế, việc trở th&agrave;nh một người <strong><a title="m&ocirc;i giới bất động sản"
                                            href="https://kyna.vn/nhap-mon-nghe-moi-gioi-bat-dong-san" target="_blank"
                                            rel="noopener">m&ocirc;i giới bất động sản</a></strong>&nbsp;th&agrave;nh
                                    c&ocirc;ng cũng kh&ocirc;ng qu&aacute; kh&oacute; nếu ch&uacute;ng ta biết
                                    c&aacute;ch chủ động v&agrave; tạo nhiều lợi thế hơn trong việc mua b&aacute;n một
                                    bất động sản bất kỳ.</p>
                                <p>Những c&aacute;ch thức ấy được chia sẻ trong <strong>kh&oacute;a học b&iacute; quyết
                                        mua b&aacute;n bất động sản th&agrave;nh c&ocirc;ng</strong> của giảng
                                    vi&ecirc;n <strong>Phan C&ocirc;ng Ch&aacute;nh Trainer,</strong> Chủ tịch hội đồng
                                    quản trị C&ocirc;ng ty Ph&aacute;t triển đầu tư Ph&uacute; Vinh, đồng thời l&agrave;
                                    chuy&ecirc;n gia bất động sản bất động sản c&aacute; nh&acirc;n nhiều năm kinh
                                    nghiệm.</p>
                                <p>Kh&oacute;a học đ&uacute;c r&uacute;t những kinh nghiệm v&agrave; những t&igrave;nh
                                    huống từ thực tế, qua đ&oacute; sẽ gi&uacute;p bạn c&oacute; c&aacute;i nh&igrave;n
                                    to&agrave;n diện trong việc <strong>mua b&aacute;n nh&agrave;</strong> cũng như
                                    c&aacute;c kỹ năng quản l&yacute; trong bất động sản; từ đ&oacute; biết c&aacute;ch
                                    để mua b&aacute;n được nh&agrave; gi&aacute; tốt nhất trong thời gian ngắn.</p>
                                <h4><strong>Th&ocirc;ng qua kh&oacute;a học kinh doanh bất động sản, bạn sẽ nắm
                                        vững:</strong></h4>
                                <ul style="color: #272727;">
                                    <li style="margin-right: 0px;">C&aacute;ch thức t&igrave;m kiếm v&agrave; nắm
                                        th&ocirc;ng tin về bất động sản gi&aacute; tốt</li>
                                    <li style="margin-right: 0px;">Nguy&ecirc;n tắc để mua b&aacute;n bất động sản bất
                                        kỳ với gi&aacute; tốt nhất cho bạn</li>
                                    <li style="margin-right: 0px;">Nhận diện c&aacute;c rủi ro sẽ gặp phải khi mua
                                        b&aacute;n nh&agrave; v&agrave; c&aacute;ch tr&aacute;nh</li>
                                    <li style="margin-right: 0px;">Những điểm cần lưu &yacute; trong một hợp đồng mua
                                        b&aacute;n nh&agrave;</li>
                                    <li style="margin-right: 0px;">Xử l&yacute; th&ocirc;ng minh vấn đề t&agrave;i
                                        ch&iacute;nh, vay tiền để mua nh&agrave;</li>
                                    <li style="margin-right: 0px;">C&aacute;c điểm cần lưu &yacute; về thủ tục, hợp
                                        đồng</li>
                                </ul>
                                <p>&nbsp;H&atilde;y kh&aacute;m ph&aacute; v&agrave; trải nghiệm ngay kh&oacute;a học
                                    tại <strong>Kyna.vn</strong></p>
                                <div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;">
                                    &nbsp;</div>
                            </div>
                        </div>
                        <div class="course-general">
                            <h5 class="title">Combo có khóa học này</h5>
                            <div class="card-combo">
                                <a class="card-combo-link" href="/dau-tu-bat-dong-san-p782" target="_blank"
                                    title="Bí quyết đầu tư bất động sản thành công">
                                    <div class="card-combo-header">
                                        <img class="img-fluid "
                                            src="https://cdn-skill.kynaenglish.vn/uploads/courses/782/img/image_url-1500949516.jpg"
                                            size="263x147" width="263px" height="147px"
                                            alt="Bí quyết đầu tư bất động sản thành công" resizeMode="cover"
                                            returnMode="img" max-width="100%">
                                    </div>
                                    <div class="card-combo-body">
                                        <h5 class="heading-card">Bí quyết đầu tư bất động sản thành công</h5>
                                    </div>
                                    <div class="card-combo-price">
                                        <span class="course-pricing">399.000 <u>đ</u></span>
                                        <span class="card-combo-explore">Chi Tiết <i
                                                class="fas fa-chevron-right"></i></span>
                                    </div>
                                </a>
                            </div>
                    </section>
                    <section id="courseDetailContent"></section>
                    <div class="course-general syllabus__wrapper">
                        <h5 class="title">Nội dung khóa học</h5>
                        <div class="syllabus">
                            <div class="syllabus-item">
                                <a href="#chapter0" class="syllabus__cta " data-toggle="collapse" role="button"
                                    aria-expanded="true" aria-controls="collapseExample">
                                    <div class="syllabus__chapter">
                                        <span class="syllabus__icon">
                                            <img src="https://cdn-skill.kynaenglish.vn/img/arrow.svg" alt="Kyna"
                                                width="20px" height="20px">
                                        </span>
                                        <div class="syllabus__heading">
                                            <h6 class="heading">
                                                Phần 1: Mua bất động sản với giá tốt và ít rủi ro </h6>
                                        </div>
                                        <div class="syllabus__info">
                                            <div class="syllabus__info-item">
                                                <span>6 video</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="collapse in" id="chapter0" aria-expanded="true">
                                    <div class="syllabus__section">
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <picture>
                                                    <source media="(min-width:768px)"
                                                        srcset="https://cdn-skill.kynaenglish.vn/img/play.svg">
                                                    <img src="https://cdn-skill.kynaenglish.vn/img/play-green.svg"
                                                        alt="Kyna" width="20px" height="20px">
                                                </picture>
                                            </span>
                                            <span class="syllabus__section--title">
                                                <a href="#" class="cta-open-video syllabus__section--title-video"
                                                    data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/2/152_Lesson_Bai01_mp4itNTaY2ru34BEjkqOk49q65G7HzELc83FVXPUZho3lZHFj7tEcC4iILqqk5bwdfc9d13cirgEr.mp4/playlist.m3u8?v=397">
                                                    Bài 1: Lựa chọn Khu vực sẽ sinh sống/ Khu vực sẽ mua bất động sản
                                                </a></span>
                                            <a href="#" class="syllabus__section--video cta-open-video"
                                                data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/2/152_Lesson_Bai01_mp4itNTaY2ru34BEjkqOk49q65G7HzELc83FVXPUZho3lZHFj7tEcC4iILqqk5bwdfc9d13cirgEr.mp4/playlist.m3u8?v=397">
                                                Học thử
                                            </a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <picture>
                                                    <source media="(min-width:768px)"
                                                        srcset="https://cdn-skill.kynaenglish.vn/img/play.svg">
                                                    <img src="https://cdn-skill.kynaenglish.vn/img/play-green.svg"
                                                        alt="Kyna" width="20px" height="20px">
                                                </picture>
                                            </span>
                                            <span class="syllabus__section--title">
                                                <a href="#" class="cta-open-video syllabus__section--title-video"
                                                    data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/2/152_Lesson_Bai02_mp4jL6NpipuB8f2yz8K6m0ivdkyqDZGirFBcLpB4O5GXlIvURg1dgjItEgThgAzIfbU1Aw5pBMmXuSRm8SzochSRyM8Pm.mp4/playlist.m3u8?v=397">
                                                    Bài 2: Tính toán khoản tiền vay để mua bất động sản </a></span>
                                            <a href="#" class="syllabus__section--video cta-open-video"
                                                data-source="https://vod.kynaenglish.com/kyna/_definst_/1/5/2/152_Lesson_Bai02_mp4jL6NpipuB8f2yz8K6m0ivdkyqDZGirFBcLpB4O5GXlIvURg1dgjItEgThgAzIfbU1Aw5pBMmXuSRm8SzochSRyM8Pm.mp4/playlist.m3u8?v=397">
                                                Học thử
                                            </a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 3: Lựa chọn loại hình bất động
                                                sản</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 4: Vấn đề pháp lý khi mua bất
                                                động sản</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 5: Tiến hành giao dịch bất động
                                                sản</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 6: Thông tin bổ sung</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài đọc thêm - Những sai lầm khi
                                                chọn mua bất động sản</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Mẫu Hợp đồng Mua bán nhà đất - Tham
                                                khảo</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Trắc nghiệm Phần 1</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="syllabus-item">
                                <a href="#chapter10" class="syllabus__cta collapsed" data-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <div class="syllabus__chapter">
                                        <span class="syllabus__icon">
                                            <img src="https://cdn-skill.kynaenglish.vn/img/arrow.svg" alt="Kyna"
                                                width="20px" height="20px">
                                        </span>
                                        <div class="syllabus__heading">
                                            <h6 class="heading">
                                                Phần 2: Làm thế nào để bán bất động sản trong vòng 3 ngày </h6>
                                        </div>
                                        <div class="syllabus__info">
                                            <div class="syllabus__info-item">
                                                <span>5 video</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="collapse " id="chapter10" aria-expanded="false">
                                    <div class="syllabus__section">
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 1: Nghiên cứu bất động sản cần
                                                bán</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 2: Viết mẫu quảng cáo khó
                                                cưỡng</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 3: Lựa chọn kênh để
                                                marketing</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 4: Thương lượng</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài 5: Cải tiến</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Trắc nghiệm Phần 2</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="syllabus-item">
                                <a href="#chapter17" class="syllabus__cta collapsed" data-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <div class="syllabus__chapter">
                                        <span class="syllabus__icon">
                                            <img src="https://cdn-skill.kynaenglish.vn/img/arrow.svg" alt="Kyna"
                                                width="20px" height="20px">
                                        </span>
                                        <div class="syllabus__heading">
                                            <h6 class="heading">
                                                Phần 3: Tổng kết </h6>
                                        </div>
                                        <div class="syllabus__info">
                                            <div class="syllabus__info-item">
                                                <span>0 video</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="collapse " id="chapter17" aria-expanded="false">
                                    <div class="syllabus__section">
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Đánh giá và góp ý khóa học liên
                                                quan</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Các khóa học liên quan và ưu đãi
                                                dành cho bạn</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bài tập Tốt nghiệp</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="syllabus-item">
                                <a href="#chapter21" class="syllabus__cta collapsed" data-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <div class="syllabus__chapter">
                                        <span class="syllabus__icon">
                                            <img src="https://cdn-skill.kynaenglish.vn/img/arrow.svg" alt="Kyna"
                                                width="20px" height="20px">
                                        </span>
                                        <div class="syllabus__heading">
                                            <h6 class="heading">
                                                Phần 4: Hỏi đáp cùng giảng viên </h6>
                                        </div>
                                        <div class="syllabus__info">
                                            <div class="syllabus__info-item">
                                                <span>1 video</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="collapse " id="chapter21" aria-expanded="false">
                                    <div class="syllabus__section">
                                        <div class="syllabus__section-item">
                                            <span class="syllabus__section--icon">
                                                <img src="https://cdn-skill.kynaenglish.vn/img/play.svg" alt="Kyna"
                                                    width="20px" height="20px">
                                            </span>
                                            <span class="syllabus__section--title">Bí quyết đầu tư bất động sản thành
                                                công</span>
                                            <a href="#" class="syllabus__section--video none-video"></a>
                                            <!-- Next week -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <section id="courseDetailRating">
                        <div class="course-general">
                            <h5 class="title">Đánh giá từ học viên</h5>
                            <div class="active" id="nav-comment">
                                <div class="course-rating">
                                    <div class="course-rating-summary">
                                        <span class="course-rating__number">
                                            4.4 </span>
                                        <span class="course-rating-wrapper">
                                            <span class="course-rating__star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-half.svg"
                                                    alt="Kyna - Star">
                                            </span>
                                            <span class="course-rating__count">
                                                (153 đánh giá)
                                            </span>
                                        </span>
                                    </div>
                                    <div class="course-rating-metric">
                                        <div class="course-rating-metric__item">
                                            <div class="progress course-rating-metric__progress">
                                                <div class="progress-bar" role="progressbar" style="width: 67%"
                                                    aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="course-rating-metric__label">67%</span>
                                            <span class="course-rating-metric__star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                            </span>
                                        </div>
                                        <div class="course-rating-metric__item">
                                            <div class="progress course-rating-metric__progress">
                                                <div class="progress-bar" role="progressbar" style="width: 16%"
                                                    aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="course-rating-metric__label">16%</span>
                                            <span class="course-rating-metric__star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                            </span>
                                        </div>
                                        <div class="course-rating-metric__item">
                                            <div class="progress course-rating-metric__progress">
                                                <div class="progress-bar" role="progressbar" style="width: 12%"
                                                    aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="course-rating-metric__label">12%</span>
                                            <span class="course-rating-metric__star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                            </span>
                                        </div>
                                        <div class="course-rating-metric__item">
                                            <div class="progress course-rating-metric__progress">
                                                <div class="progress-bar" role="progressbar" style="width: 3%"
                                                    aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="course-rating-metric__label">3%</span>
                                            <span class="course-rating-metric__star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                            </span>
                                        </div>
                                        <div class="course-rating-metric__item">
                                            <div class="progress course-rating-metric__progress">
                                                <div class="progress-bar" role="progressbar" style="width: 2%"
                                                    aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="course-rating-metric__label">2%</span>
                                            <span class="course-rating-metric__star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                                <img class="course-rating__icon"
                                                    src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                    alt="Kyna - Star">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-comment">
                                    <!-- Render by JS -->
                                </div>
                            </div>
                        </div>
                    </section> --}}
                    <section class="course-general related-course__wrapper">
                        <h5 class="title">Khóa học liên quan <span style="color: #ff7818;"></span></h5>
                        <div class="course-related-horizontal__slider slick__slider--normal "
                            data-slick-class="course-related-horizontal" data-slick-type="course-detail"
                            data-number-card="3" data-see-more-link="">
                            <div class="card-course " data-toggle="popover" data-trigger="hover" data-id="357"
                                data-upload-date="21/05/2021" data-duration="2 giờ" data-user-enroll="625"
                                data-description="&lt;h4&gt;&lt;strong&gt;Lợi &amp;iacute;ch khi tham dự kh&amp;oacute;a học:&lt;/strong&gt;&lt;/h4&gt;
&lt;ul&gt;
&lt;li&gt;Được tư vấn, hỗ trợ, giải đ&amp;aacute;p thắc mắc li&amp;ecirc;n quan đến thị trường bất động sản từ ch&amp;iacute;nh giảng vi&amp;ecirc;n&lt;/li&gt;
&lt;li&gt;Nắm vững những y&amp;ecirc;u cầu, quy tắc hoạt động của dịch vụ m&amp;ocirc;i giới bất động sản&lt;/li&gt;
&lt;li&gt;X&amp;acirc;y dựng nền tảng vững chắc với những kiến thức cơ bản v&amp;agrave; t&amp;iacute;ch lũy kinh nghiệm thực tiễn trong lĩnh vực m&amp;ocirc;i giới bất động sản&lt;/li&gt;
&lt;/ul&gt;"
                                data-promo-text="" data-is-best-seller="" data-status-item="1" data-course-item-free="">
                                <div class="card-inner">
                                    <a target="_blank" href="tong-quan-ve-moi-gioi-bat-dong-san" class="card-link">
                                        <div class="card-header">
                                            <img src="https://cdn-skill.kynaenglish.vn/uploads/courses/357/img/image_url-1601008374.cover-559x348.jpg"
                                                alt="course-image">
                                            <div class="card-header__badget card-vertical">
                                                <span class="card-header__badget-item">
                                                    <i class="fal fa-play-circle"></i>
                                                    13 </span>
                                                <span class="card-header__badget-item"><i
                                                        class="fal fa-star"></i>4.8</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-info">
                                                <h5 class="heading-card__main">
                                                    Tổng quan về môi giới bất động sản </h5>
                                                <div class="card-body__badget card-horizontal">
                                                    <span class="card-body__badget-item">
                                                        <img src="https://cdn-skill.kynaenglish.vn/img/duration.svg"
                                                            alt="Kyna" width="18px" height="18px">2 giờ
                                                    </span>
                                                    <span class="card-body__badget-item">
                                                        <img src="https://cdn-skill.kynaenglish.vn/img/book.svg"
                                                            alt="Kyna" width="18px" height="18px">13 bài học
                                                    </span>
                                                </div>
                                                <div class="info-card-wrap card-vertical">
                                                    <div class="info-card-avatar">
                                                        <img data-src="https://cdn-skill.kynaenglish.vn/uploads/user/183550/img/avatar.cover-100x100.jpg"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAWtJREFUeF7t1cEJADAMw8B2/6Fd6BT3UCYQEiZ3207HGLgFYVp8kIJYPQqC9ShIQTQDGE8/pCCYAQynhRQEM4DhtJCCYAYwnBZSEMwAhtNCCoIZwHBaSEEwAxhOCykIZgDDaSEFwQxgOC2kIJgBDKeFFAQzgOG0kIJgBjCcFlIQzACG00IKghnAcFpIQTADGE4LKQhmAMNpIQXBDGA4LaQgmAEMp4UUBDOA4bSQgmAGMJwWUhDMAIbTQgqCGcBwWkhBMAMYTgspCGYAw2khBcEMYDgtpCCYAQynhRQEM4DhtJCCYAYwnBZSEMwAhtNCCoIZwHBaSEEwAxhOCykIZgDDaSEFwQxgOC2kIJgBDKeFFAQzgOG0kIJgBjCcFlIQzACG00IKghnAcFpIQTADGE4LKQhmAMNpIQXBDGA4LaQgmAEMp4UUBDOA4bSQgmAGMJwWUhDMAIbTQgqCGcBwWkhBMAMYTgspCGYAw3mmPo7k6LH8eAAAAABJRU5ErkJggg=="
                                                            class="img-lazy" alt="ThS Trương Anh Tú">
                                                    </div>
                                                    <div class="info-card-title">
                                                        <span class="info-card">
                                                            <i class="fas fa-user-tie"></i>
                                                            ThS Trương Anh Tú </span>
                                                        <span class="info-card">
                                                            <i class="fas fa-briefcase"></i>
                                                            Giám đốc Phát triển kinh doanh Phúc Khang Corporation
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-rating card-horizontal">
                                                <span class="card-rating-item">
                                                    <span class="number">4.8</span>
                                                    <img class="course-rating__icon tablet"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                        alt="Kyna - Star">
                                                </span>
                                            </div>
                                            <div class="pricing-card">
                                                <span class="cta-open-video card-vertical"
                                                    data-source="https://vod.kynaenglish.com/kyna/_definst_/3/5/7/290_Lesson_Bai01_mp4hzsUs1k4JiLiiGaLI2MWFQ9m7VbzSxd96F4zHoDqHpJZ6TLPWyLCpUYwQ95IGjSNZXnGl163rP3xJPmF.mp4/playlist.m3u8?v=930">
                                                    <button class="btn-ripple">
                                                        <i class="fas fa-play"></i>
                                                    </button>
                                                    Học thử
                                                </span>
                                                <span class="course-pricing">198.000 <u>đ</u>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-course " data-toggle="popover" data-trigger="hover" data-id="376"
                                data-upload-date="19/06/2021" data-duration="4 giờ" data-user-enroll="1074"
                                data-promo-text="" data-is-best-seller="" data-status-item="1" data-course-item-free="">
                                <div class="card-inner">
                                    <a target="_blank" href="quy-trinh-va-ky-nang-moi-gioi-bat-dong-san"
                                        class="card-link">
                                        <div class="card-header">
                                            <img src="https://cdn-skill.kynaenglish.vn/uploads/courses/376/img/image_url-1600227729.cover-559x348.jpg"
                                                alt="course-image">
                                            <div class="card-header__badget card-vertical">
                                                <span class="card-header__badget-item">
                                                    <i class="fal fa-play-circle"></i>
                                                    22 </span>
                                                <span class="card-header__badget-item"><i
                                                        class="fal fa-star"></i>4.6</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-info">
                                                <h5 class="heading-card__main">
                                                    Quy trình và kỹ năng môi giới bất động sản </h5>
                                                <div class="card-body__badget card-horizontal">
                                                    <span class="card-body__badget-item">
                                                        <img src="https://cdn-skill.kynaenglish.vn/img/duration.svg"
                                                            alt="Kyna" width="18px" height="18px">4 giờ
                                                    </span>
                                                    <span class="card-body__badget-item">
                                                        <img src="https://cdn-skill.kynaenglish.vn/img/book.svg"
                                                            alt="Kyna" width="18px" height="18px">22 bài học
                                                    </span>
                                                </div>
                                                <div class="info-card-wrap card-vertical">
                                                    <div class="info-card-avatar">
                                                        <img data-src="https://cdn-skill.kynaenglish.vn/uploads/user/183550/img/avatar.cover-100x100.jpg"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAWtJREFUeF7t1cEJADAMw8B2/6Fd6BT3UCYQEiZ3207HGLgFYVp8kIJYPQqC9ShIQTQDGE8/pCCYAQynhRQEM4DhtJCCYAYwnBZSEMwAhtNCCoIZwHBaSEEwAxhOCykIZgDDaSEFwQxgOC2kIJgBDKeFFAQzgOG0kIJgBjCcFlIQzACG00IKghnAcFpIQTADGE4LKQhmAMNpIQXBDGA4LaQgmAEMp4UUBDOA4bSQgmAGMJwWUhDMAIbTQgqCGcBwWkhBMAMYTgspCGYAw2khBcEMYDgtpCCYAQynhRQEM4DhtJCCYAYwnBZSEMwAhtNCCoIZwHBaSEEwAxhOCykIZgDDaSEFwQxgOC2kIJgBDKeFFAQzgOG0kIJgBjCcFlIQzACG00IKghnAcFpIQTADGE4LKQhmAMNpIQXBDGA4LaQgmAEMp4UUBDOA4bSQgmAGMJwWUhDMAIbTQgqCGcBwWkhBMAMYTgspCGYAw3mmPo7k6LH8eAAAAABJRU5ErkJggg=="
                                                            class="img-lazy" alt="ThS Trương Anh Tú">
                                                    </div>
                                                    <div class="info-card-title">
                                                        <span class="info-card">
                                                            <i class="fas fa-user-tie"></i>
                                                            ThS Trương Anh Tú </span>
                                                        <span class="info-card">
                                                            <i class="fas fa-briefcase"></i>
                                                            Giám đốc Phát triển kinh doanh Phúc Khang Corporation
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-rating card-horizontal">
                                                <span class="card-rating-item">
                                                    <span class="number">4.6</span>
                                                    <img class="course-rating__icon tablet"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                        alt="Kyna - Star">
                                                </span>
                                            </div>
                                            <div class="pricing-card">
                                                <span class="cta-open-video card-vertical"
                                                    data-source="https://vod.kynaenglish.com/kyna/_definst_/3/7/6/309_Lesson_Bai01_mp4VFfqmyDwGlf8KBGzit5TAPZJdOboto4p3kQqStXyPdHAOn97Re1s40bhPmFiKKHO4xeX1bwQpdqdBAksO.mp4/playlist.m3u8?v=173">
                                                    <button class="btn-ripple">
                                                        <i class="fas fa-play"></i>
                                                    </button>
                                                    Học thử
                                                </span>
                                                <span class="course-pricing">198.000 <u>đ</u>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-course " data-toggle="popover" data-trigger="hover" data-id="94"
                                data-upload-date="16/10/2021" data-duration="42 phút" data-user-enroll="3979"
                                data-description="&lt;h4&gt;&lt;strong&gt;Sau khi kết th&amp;uacute;c kh&amp;oacute;a học bất động sản n&amp;agrave;y:&lt;/strong&gt;&lt;/h4&gt;
&lt;ul&gt;
&lt;li&gt;Bạn c&amp;oacute; thể nắm được những nguy&amp;ecirc;n l&amp;yacute; để c&amp;oacute; thể tr&amp;aacute;nh được hơn 95% những rủi ro thường gặp trong thị trường bất động sản&lt;/li&gt;
&lt;li&gt;Bạn sẽ hiểu một c&amp;aacute;ch s&amp;acirc;u sắc đến tận gốc rễ của vấn đề: c&amp;aacute;c nguy&amp;ecirc;n l&amp;yacute;, nguy&amp;ecirc;n tắc cơ bản trong lĩnh vực đầu tư v&amp;agrave; giao dịch bất động sản&lt;/li&gt;
&lt;li&gt;Hiểu được gốc rễ vấn đề v&amp;agrave; d&amp;ugrave;ng phương ph&amp;aacute;p X-quang bất động sản để tr&amp;aacute;nh được hầu hết c&amp;aacute;c rủi ro trước khi ch&amp;uacute;ng ta giao dịch&lt;/li&gt;
&lt;li&gt;Bạn sẽ n&amp;acirc;ng cao được sự tự tin của m&amp;igrave;nh khi tiến h&amp;agrave;nh đầu tư v&amp;agrave;o một giao dịch bất động sản&lt;/li&gt;
&lt;/ul&gt;
&lt;div id=&quot;eJOY__extension_root&quot; class=&quot;eJOY__extension_root_class&quot; style=&quot;all: unset;&quot;&gt;&amp;nbsp;&lt;/div&gt;"
                                data-promo-text="" data-is-best-seller="" data-status-item="1" data-course-item-free="">
                                <div class="card-inner">
                                    <a target="_blank" href="10-rui-ro-bat-bien-va-phuong-phap-x-quang-bat-dong-san"
                                        class="card-link">
                                        <div class="card-header">
                                            <img src="https://cdn-skill.kynaenglish.vn/uploads/courses/94/img/image_url-1600227370.cover-559x348.jpg"
                                                alt="course-image">
                                            <div class="card-header__badget card-vertical">
                                                <span class="card-header__badget-item">
                                                    <i class="fal fa-play-circle"></i>
                                                    16 </span>
                                                <span class="card-header__badget-item"><i
                                                        class="fal fa-star"></i>4.4</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-info">
                                                <h5 class="heading-card__main">
                                                    10 rủi ro bất biến và phương pháp X-quang bất động sản </h5>
                                                <div class="card-body__badget card-horizontal">
                                                    <span class="card-body__badget-item">
                                                        <img src="https://cdn-skill.kynaenglish.vn/img/duration.svg"
                                                            alt="Kyna" width="18px" height="18px">42 phút
                                                    </span>
                                                    <span class="card-body__badget-item">
                                                        <img src="https://cdn-skill.kynaenglish.vn/img/book.svg"
                                                            alt="Kyna" width="18px" height="18px">16 bài học
                                                    </span>
                                                </div>
                                                <div class="info-card-wrap card-vertical">
                                                    <div class="info-card-avatar">
                                                        <img data-src="https://cdn-skill.kynaenglish.vn/uploads/user/113475/img/avatar-1529981077.cover-100x100.png"
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABHNCSVQICAgIfAhkiAAAAWtJREFUeF7t1cEJADAMw8B2/6Fd6BT3UCYQEiZ3207HGLgFYVp8kIJYPQqC9ShIQTQDGE8/pCCYAQynhRQEM4DhtJCCYAYwnBZSEMwAhtNCCoIZwHBaSEEwAxhOCykIZgDDaSEFwQxgOC2kIJgBDKeFFAQzgOG0kIJgBjCcFlIQzACG00IKghnAcFpIQTADGE4LKQhmAMNpIQXBDGA4LaQgmAEMp4UUBDOA4bSQgmAGMJwWUhDMAIbTQgqCGcBwWkhBMAMYTgspCGYAw2khBcEMYDgtpCCYAQynhRQEM4DhtJCCYAYwnBZSEMwAhtNCCoIZwHBaSEEwAxhOCykIZgDDaSEFwQxgOC2kIJgBDKeFFAQzgOG0kIJgBjCcFlIQzACG00IKghnAcFpIQTADGE4LKQhmAMNpIQXBDGA4LaQgmAEMp4UUBDOA4bSQgmAGMJwWUhDMAIbTQgqCGcBwWkhBMAMYTgspCGYAw3mmPo7k6LH8eAAAAABJRU5ErkJggg=="
                                                            class="img-lazy" alt="Phan Công Chánh ">
                                                    </div>
                                                    <div class="info-card-title">
                                                        <span class="info-card">
                                                            <i class="fas fa-user-tie"></i>
                                                            Phan Công Chánh </span>
                                                        <span class="info-card">
                                                            <i class="fas fa-briefcase"></i>
                                                            Chuyên gia bất động sản cá nhân </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-rating card-horizontal">
                                                <span class="card-rating-item">
                                                    <span class="number">4.4</span>
                                                    <img class="course-rating__icon tablet"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-fill.svg"
                                                        alt="Kyna - Star">
                                                    <img class="course-rating__icon"
                                                        src="https://cdn-skill.kynaenglish.vn/img/star-outline.svg"
                                                        alt="Kyna - Star">
                                                </span>
                                            </div>
                                            <div class="pricing-card">
                                                <span class="cta-open-video card-vertical"
                                                    data-source="https://vod.kynaenglish.com/kyna/_definst_/9/4/94_Lesson_Bai01_mp4xk5bQtVsKd1be1BbiZAhPyJYXKVDoN5V7a7YD3rngszvuaHN9i4ZQNXOyTsWGxSOHZMl2dJjG.mp4/playlist.m3u8?v=820">
                                                    <button class="btn-ripple">
                                                        <i class="fas fa-play"></i>
                                                    </button>
                                                    Học thử
                                                </span>
                                                <span class="course-pricing">297.000 <u>đ</u>
                                                </span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--    <a class="cta-all-lecturer-course" href="/danh-sach-khoa-hoc">Xem thêm</a>-->
                    </section>
                </div>
                <div class="course-detail--right">
                    <div class="cd-sticky-info opt-1"
                        style="background-color: rgba(255, 255, 255, 0.3); border-color: #FFFFFF; ">
                        <div class="cd-wrap-img">
                            <div class="videoWrapper ">
                                <div id="play_video" class="cursor-pointer">
                                    <img class="img-fluid"
                                        src="https://cdn-skill.kynaenglish.vn/uploads/courses/152/img/video_cover_image_url-1612421111.jpg"
                                        size="730x436" width="730px" height="436px"
                                        alt="Bí quyết mua bán bất động sản thành công" resizeMode="crop" returnMode="img"
                                        max-width="100%"> <button class="ytp-large-play-button ytp-button"
                                        aria-label="Bí quyết mua bán bất động sản thành công">
                                        <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                                            <path class="ytp-large-play-button-bg"
                                                d="m .66,37.62 c 0,0 .66,4.70 2.70,6.77 2.58,2.71 5.98,2.63 7.49,2.91 5.43,.52 23.10,.68 23.12,.68 .00,-1.3e-5 14.29,-0.02 23.81,-0.71 1.32,-0.15 4.22,-0.17 6.81,-2.89 2.03,-2.07 2.70,-6.77 2.70,-6.77 0,0 .67,-5.52 .67,-11.04 l 0,-5.17 c 0,-5.52 -0.67,-11.04 -0.67,-11.04 0,0 -0.66,-4.70 -2.70,-6.77 C 62.03,.86 59.13,.84 57.80,.69 48.28,0 34.00,0 34.00,0 33.97,0 19.69,0 10.18,.69 8.85,.84 5.95,.86 3.36,3.58 1.32,5.65 .66,10.35 .66,10.35 c 0,0 -0.55,4.50 -0.66,9.45 l 0,8.36 c .10,4.94 .66,9.45 .66,9.45 z"
                                                fill="#1f1f1e" fill-opacity="0.81"></path>
                                            <path d="m 26.96,13.67 18.37,9.62 -18.37,9.55 -0.00,-19.17 z" fill="#fff">
                                            </path>
                                            <path d="M 45.02,23.46 45.32,23.28 26.96,13.67 43.32,24.34 45.02,23.46 z"
                                                fill="#ccc"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div id="youtube_video_wrapper">
                                    <!-- Copy & Pasted from YouTube -->
                                    <iframe width="560" height="349"
                                        src="https://www.youtube.com/embed/V6yYXy_W7i0?rel=0" allow="autoplay"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="label-wrap">
                                    <span class="lb-new">NEW</span>
                                    <span class="lb-hot">HOT</span>
                                </div>
                                <div class="rating-box clearfix">
                                    <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="rating-text"><b>4.4 <i class="icon icon-star"></i></b> <span>(153
                                            <detail> đánh giá</detail>)
                                        </span></div>
                                    <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="number-student"><i class="fa fa-user" aria-hidden="true"></i>
                                        <span>16490 học viên<detail> đăng ký học</detail></span>
                                    </div>
                                </div>
                            </div>
                            <style>
                                #youtube_video_wrapper {
                                    display: none;
                                }

                                #play_video {
                                    margin-top: -25px;
                                }

                                #play_video>img {
                                    width: 100%;
                                }

                                .cursor-pointer {
                                    cursor: pointer;
                                }

                                .ytp-button {
                                    border: none;
                                    background-color: transparent;
                                    padding: 0;
                                    color: inherit;
                                    text-align: inherit;
                                    font-size: 100%;
                                    font-family: inherit;
                                    cursor: default;
                                    line-height: inherit;
                                }

                                .ytp-button:focus,
                                .ytp-button {
                                    outline: 0;
                                }

                                .ytp-large-play-button {
                                    position: absolute;
                                    left: 50%;
                                    top: 50%;
                                    width: 68px;
                                    height: 48px;
                                    margin-left: -34px;
                                    margin-top: -24px;
                                    -moz-transition: opacity .25s cubic-bezier(0.0, 0.0, 0.2, 1);
                                    -webkit-transition: opacity .25s cubic-bezier(0.0, 0.0, 0.2, 1);
                                    transition: opacity .25s cubic-bezier(0.0, 0.0, 0.2, 1);
                                }

                                .ytp-small-mode .ytp-large-play-button {
                                    width: 42px;
                                    height: 30px;
                                    margin-left: -21px;
                                    margin-top: -15px;
                                }

                                .ytp-button:not([aria-disabled=true]):not([disabled]):not([aria-hidden=true]) {
                                    cursor: pointer;
                                }

                                .html5-video-player svg {
                                    pointer-events: none;
                                }

                                .ytp-large-play-button-bg {
                                    -moz-transition: fill .1s cubic-bezier(0.4, 0.0, 1, 1), fill-opacity .1s cubic-bezier(0.4, 0.0, 1, 1);
                                    -webkit-transition: fill .1s cubic-bezier(0.4, 0.0, 1, 1), fill-opacity .1s cubic-bezier(0.4, 0.0, 1, 1);
                                    transition: fill .1s cubic-bezier(0.4, 0.0, 1, 1), fill-opacity .1s cubic-bezier(0.4, 0.0, 1, 1);
                                    fill: #1f1f1f;
                                    fill-opacity: .81;
                                }

                                .videoWrapper:hover .ytp-large-play-button-bg {
                                    -moz-transition: fill .1s cubic-bezier(0.0, 0.0, 0.2, 1), fill-opacity .1s cubic-bezier(0.0, 0.0, 0.2, 1);
                                    -webkit-transition: fill .1s cubic-bezier(0.0, 0.0, 0.2, 1), fill-opacity .1s cubic-bezier(0.0, 0.0, 0.2, 1);
                                    transition: fill .1s cubic-bezier(0.0, 0.0, 0.2, 1), fill-opacity .1s cubic-bezier(0.0, 0.0, 0.2, 1);
                                    fill: #cc181e;
                                    fill-opacity: 1;
                                }
                            </style>
                            <script type="application/javascript">
    ;(function($, window, document, undefined){
        $(document).ready(function(){
            $('#play_video').on('click', function (event) {
                event.preventDefault();
                $('#youtube_video_wrapper > iframe')[0].contentWindow.postMessage('{"event":"command", "func":"playVideo", "args":""}', '*');
                $(this).hide();
                $('#youtube_video_wrapper').show();
                let src = $('#youtube_video_wrapper > iframe').attr('src');
                let isRel = src.search('rel=0');
                if(isRel > 0) {
                    src += '&autoplay=1&loop=1';
                } else {
                    src += '?autoplay=1&loop=1';
                }
                $('#youtube_video_wrapper > iframe').attr('src', src);
            });
        });
    })(window.jQuery || window.Zepto, window, document);
</script>
                        </div>
                        <div class="crs-price">
                            <span class="crs-price--after" style="color: rgba(251, 106, 2)">598.000<u>đ</u></span>
                        </div>
                        <div class="crs-btn">
                            <a class="btn-buy-now dang-ky-hoc crs-btn-buy" href="#" action="AddToCart"
                                data-ga="event" data-pid="152"
                                style="background-color: rgba(251, 106, 2); color: #FFFFFF" category="CourseDetail"
                                label="Bí quyết mua bán bất động sản thành công"><b>Mua ngay</b></a>
                            <a id="btn-add-to-cart" class="go-to-cart add-to-cart dang-ky-hoc crs-btn-add" href="#"
                                action="AddToCart" data-ga="event" data-pid="152"
                                style="background-color:transparent; color: #FFFFFF; border-color: #FFFFFF"
                                category="CourseDetail" label="Bí quyết mua bán bất động sản thành công"><b
                                    class=''>Thêm vào giỏ hàng</b></a> <a id="btn-goto-cart" href="/gio-hang"
                                class="go-to-cart dang-ky-hoc crs-btn-add"
                                style="display: none;background-color: transparent; color: #FFFFFF; border-color: #FFFFFF">Xem
                                giỏ hàng</b></a>
                        </div>
                    </div>
                    <div class="crs-sticky-info opt-1">
                        <h4 class="crs-sticky-info-title">Thông tin khóa học</h4>
                        <div class="crs-sticky-info-content">
                            <ul>
                                <li>
                                    <span>
                                        <img class="crs-sticky-icon"
                                            src="https://cdn-skill.kynaenglish.vn/img/hoc-vien-icon.svg" alt="icon"
                                            width="20px" height="20px">
                                    </span>
                                    <p>16.490 học viên</p>
                                </li>
                                <li>
                                    <span>
                                        <img class="crs-sticky-icon"
                                            src="https://cdn-skill.kynaenglish.vn/img/thoi-luong-icon.svg" alt="icon"
                                            width="20px" height="20px">
                                    </span>
                                    <p>2 giờ</p>
                                </li>
                                <li>
                                    <span>
                                        <img class="crs-sticky-icon"
                                            src="https://cdn-skill.kynaenglish.vn/img/bai-hoc-icon.svg" alt="icon"
                                            width="20px" height="20px">
                                    </span>
                                    <p>19 bài học</p>
                                </li>
                                <li>
                                    <span>
                                        <img class="crs-sticky-icon"
                                            src="https://cdn-skill.kynaenglish.vn/img/bai-tap-icon.svg" alt="icon"
                                            width="20px" height="20px">
                                    </span>
                                    <p>3 bài tập</p>
                                </li>
                                <li>
                                    <span>
                                        <img class="crs-sticky-icon"
                                            src="https://cdn-skill.kynaenglish.vn/img/tai-lieu-icon.svg" alt="icon"
                                            width="20px" height="20px">
                                    </span>
                                    <p> 0 tài liệu</p>
                                </li>
                                <li>
                                    <span>
                                        <img class="crs-sticky-icon"
                                            src="https://cdn-skill.kynaenglish.vn/img/ngay-icon.svg" alt="icon"
                                            width="20px" height="20px">
                                    </span>
                                    <p>Cập nhật 04/10/2021</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection








<style type="text/css">
    @media (max-width: 767px) {
        .zopim {
            display: none !important;
        }

        #k-wrap-feedback {
            display: none !important;
        }
    }
</style>
@section('custom_script')
    <script type="text/javascript">
        ;
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
