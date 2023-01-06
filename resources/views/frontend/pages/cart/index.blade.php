@extends('frontend.main')
@section('navbar_title', 'Giỏ hàng')
@section('title','Giỏ hàng')
@section('content')
<div id="k-shopping" class="container k-height-header">
    <div class="k-shopping-list">

                <section>
        <div class="k-header-shopping-list clearfix">
            <div class="k-header-shopping-list-left">
                <img src="https://cdn-skill.kynaenglish.vn/img/cart/icon-cart-checkout.png" alt="">
                <div class="k-header-shopping-list-left-info">
                    <div class="k-header-shopping-list-left-info-tit">Thông tin giỏ hàng</div>
                    <div class="k-header-shopping-list-left-info-des">
                        <span>1</span> <span class="pc">khóa học,</span><span class="mob"><b>khóa học</b> đã chọn</span> <span>199.000&nbsp;₫</span>
                    </div>
                </div>
            </div>
            <div class="k-header-shopping-list-right">
                <a href="/thanh-toan" class="btn-payment">TIẾP TỤC THANH TOÁN</a>
            </div>
        </div>
    </section>
    <section>
        <form id="cart-form" action="/cart/default/remove" method="post">
<input type="hidden" name="_csrf" value="eXM1MGhUYXAsEmVJB2wCRzEcakgCED43PywHZR0WNl0TREQGG2MGCg==">                    <input type="hidden" name="pids[]">
        <ol class="k-shopping-list-items list-unstyled">
                                        <li class="items">
                    
<div class="k-shopping-list-items-title" data-id="1954" data-price="199000" data-brand="Lê Trọng Nghĩa">
<div class="items-img">
<a href="/tu-dong-hoa-kinh-doanh-online" title="Tự động hóa kinh doanh Online">
                <img class="img-fluid" src="https://cdn-skill.kynaenglish.vn/uploads/courses/1954/img/image_url-1631263836.jpg" size="160x90" width="160px" height="90px" alt="Tự động hóa kinh doanh Online" resizemode="cover" returnmode="img" max-width="100%">                    </a>
</div>

<div class="items-text">
<h4>
<a href="/tu-dong-hoa-kinh-doanh-online" title="Tự động hóa kinh doanh Online"><b>Tự động hóa kinh doanh Online</b></a>
</h4>
    <!-- <p>Lê Trọng Nghĩa / Giam Doc</p> -->
            <div class="k-shopping-list-items-group-price -mob">
                <span class="orange">199.000&nbsp;₫</span>
        </div>
<a href="javascript:" data-id="1954" class="items-remove cart-item-remove"><img src="https://cdn-skill.kynaenglish.vn/img/icon-delete.png" alt=""> <i>Xóa khóa học</i></a>

</div>
<!--end .text-->
</div>
<!--end .title-->

<div class="k-shopping-list-items-group-price">
<div class="k-shopping-list-items-price-old">
<span><s>199.000&nbsp;₫</s></span>
</div>
<div class="k-shopping-list-items-sale">
<span>0&nbsp;₫</span>
</div>
<div class="k-shopping-list-items-price-new">
        <span>199.000&nbsp;₫</span>
</div>
</div>
                </li>
                                                                                </ol>
        </form>                </section>
    <section>
                                                <div class="k-shopping-checkout-total-price clearfix">
            <div class="k-shopping-checkout-total-price-text">
                <span>TỔNG THÀNH TIỀN</span>
                <label for="">Học phí gốc</label>
                                            <label for="">Giảm giá</label>
                                            <label for="">Tổng cộng</label>
            </div>
            <div class="k-shopping-list-items-group-price">
                <div class="k-shopping-checkout-total-price-old">
                    <span><s>199.000&nbsp;₫</s></span>
                </div>
                                                                            <div class="k-shopping-checkout-total-price-sale">
                        <span>0&nbsp;₫</span>
                    </div>
                
                                            <div class="k-shopping-checkout-total-price-new">
                    <span>199.000&nbsp;₫</span>
                </div>
            </div>
        </div>
        <div class="k-shopping-checkout-choose-another">
            <a href="/danh-sach-khoa-hoc"><img src="https://cdn-skill.kynaenglish.vn/img/icon-arrow-left.png" alt=""> Chọn thêm khóa học khác</a>
        </div>

    </section>
    <section>
        <div class="k-shopping-checkout-note clearfix">
            <ul>
                <li><img src="https://cdn-skill.kynaenglish.vn/img/cart/icon-cart-note-2.png" alt="">Các phương thức thanh toán linh hoạt</li>
                <li><img src="https://cdn-skill.kynaenglish.vn/img/cart/icon-cart-note-3.png" alt="">Nội dung học liên tục, xuyên suốt</li>
            </ul>
        </div>
    </section>

    <!-- start hot courses-->
                                            <section id="hot-courses">
            <h3 style="color:#50ad4e;">
                <strong>Thường được mua cùng</strong>
            </h3>
            <div class="box">
                <ul id="w1" class="clearfix k-box-card-list hot-courses-container"><li class="col-xl-3 col-lg-4 col-md-6 col-xs-12 k-box-card" data-key="0"><style>
.view-price__flash-sale{
position: absolute;
}
.view-price__flash-sale .old-price{
position: relative;

}
.view-price__flash-sale .in-flash{
left: -10px;
text-decoration: line-through;
}
.view-price__flash-sale .new-price::before{
content: url("https://cdn-skill.kynaenglish.vn/img/flash-sale/flash-icon.png");
position: relative;
top: 2px;
}
.view-price__flash-sale .new-price{
position: relative;
top: 5px;
left: 0px;
color: #ff293f;
font-size: 18px;

}
.clock-flash-sale{
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
<div class="k-box-card-wrap clearfix" data-id="196" data-course-type="1">
<div class="img">
<img class="img-fluid" src="https://cdn-skill.kynaenglish.vn/uploads/courses/196/img/image_url-1600657858.jpg" size="263x147" width="263px" height="147px" alt="Tư duy logic và giải quyết vấn đề" resizemode="cover" returnmode="img" max-width="100%">
<div class="label-wrap">
                
                                                </div>
<!-- end .label-wrap -->
<!-- <div class="teacher mb">
<ul>
    <li>
        <img class="img-teacher" src="https://cdn-skill.kynaenglish.vn/uploads/user/34413/img/avatar.png" size="35x35" width="35px" height="35px" alt="Dương Ngọc Dũng" resizeMode="crop" returnMode="img" max-width="100%">                </li>
    <li>
        Dương Ngọc Dũng                </li>
</ul>
</div> -->

<!--start course rating-->

<div class="rating-box clearfix">
<div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="rating-text"><b>4.8 <i class="icon icon-star"></i></b> <span>(24<detail> đánh giá</detail>)</span></div>
<div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>1496 <span>học viên</span><detail> đăng ký học</detail></span></div>
</div>
<!--end rating-->

<span class="background-detail">
<span class="wrap-position">
                    <div class="inner">
        <a href="/tu-duy-logic-va-giai-quyet-van-de" data-ajax="" data-toggle="popup" data-target="#modal">Xem nhanh</a>
        <a href="/tu-duy-logic-va-giai-quyet-van-de" class="view-detail">Xem chi tiết</a>
      </div>
            </span>
</span>
</div>
<!--end .img-->

<div class="content" style="height: 186px;">
<div class="box-style">
            <span class="st-video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học video</span>
            <span class="time pc"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 giờ</span>
</div>
<h4>Tư duy logic và giải quyết vấn đề</h4>
<span class="author">Dương Ngọc Dũng</span>
<span class="major">Tiến sĩ Tôn giáo học, ĐH Boston</span>
</div>

<!--end .content -->


<div class="content-mb">
<b>Dương Ngọc Dũng</b><span><b>,</b> Tiến sĩ Tôn giáo học, ĐH Boston</span>
</div>

<!--end .content mb -->
<div class="view-price" style="height: 47px;">
<ul>
                                    <li class="price"><strong>198.000đ</strong></li>
                        </ul>
                                </div>
<!--end .view-price-->


<div class="view-price-mb">
<div class="student">
<div class="number">1496</div>
<div class="text">học viên</div>
</div>
<div class="time">
<div class="number">3</div>
<div class="text">giờ</div>
</div>
<div class="price">
<div class="label-price">
                                                <div class="first">198.000đ</div>
                                    </div>
</div>
</div>
<!--end .view-price mb-->

            <a href="/tu-duy-logic-va-giai-quyet-van-de" class="link-wrap"></a>
</div>
<a href="/tu-duy-logic-va-giai-quyet-van-de" class="card-popup"></a>
<!--end .wrap-->
</li>
<li class="col-xl-3 col-lg-4 col-md-6 col-xs-12 k-box-card" data-key="1"><style>
.view-price__flash-sale{
position: absolute;
}
.view-price__flash-sale .old-price{
position: relative;

}
.view-price__flash-sale .in-flash{
left: -10px;
text-decoration: line-through;
}
.view-price__flash-sale .new-price::before{
content: url("https://cdn-skill.kynaenglish.vn/img/flash-sale/flash-icon.png");
position: relative;
top: 2px;
}
.view-price__flash-sale .new-price{
position: relative;
top: 5px;
left: 0px;
color: #ff293f;
font-size: 18px;

}
.clock-flash-sale{
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
<div class="k-box-card-wrap clearfix" data-id="549" data-course-type="1">
<div class="img">
<img class="img-fluid" src="https://cdn-skill.kynaenglish.vn/uploads/courses/549/img/image_url-1599635532.jpg" size="263x147" width="263px" height="147px" alt="Content Marketing" resizemode="cover" returnmode="img" max-width="100%">
<div class="label-wrap">
                
                                                </div>
<!-- end .label-wrap -->
<!-- <div class="teacher mb">
<ul>
    <li>
        <img class="img-teacher" src="https://cdn-skill.kynaenglish.vn/uploads/user/194763/img/avatar.jpg" size="35x35" width="35px" height="35px" alt="Trần Khánh Tùng" resizeMode="crop" returnMode="img" max-width="100%">                </li>
    <li>
        Trần Khánh Tùng                </li>
</ul>
</div> -->

<!--start course rating-->

<div class="rating-box clearfix">
<div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="rating-text"><b>3.8 <i class="icon icon-star"></i></b> <span>(53<detail> đánh giá</detail>)</span></div>
<div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>2667 <span>học viên</span><detail> đăng ký học</detail></span></div>
</div>
<!--end rating-->

<span class="background-detail">
<span class="wrap-position">
                    <div class="inner">
        <a href="/content-marketing" data-ajax="" data-toggle="popup" data-target="#modal">Xem nhanh</a>
        <a href="/content-marketing" class="view-detail">Xem chi tiết</a>
      </div>
            </span>
</span>
</div>
<!--end .img-->

<div class="content" style="height: 186px;">
<div class="box-style">
            <span class="st-video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học video</span>
            <span class="time pc"><i class="fa fa-clock-o" aria-hidden="true"></i> 6 giờ</span>
</div>
<h4>Content Marketing</h4>
<span class="author">Trần Khánh Tùng</span>
<span class="major">Đồng sáng lập Your Fashion</span>
</div>

<!--end .content -->


<div class="content-mb">
<b>Trần Khánh Tùng</b><span><b>,</b> Đồng sáng lập Your Fashion</span>
</div>

<!--end .content mb -->
<div class="view-price" style="height: 47px;">
<ul>
                                    <li class="price"><strong>198.000đ</strong></li>
                        </ul>
                                </div>
<!--end .view-price-->


<div class="view-price-mb">
<div class="student">
<div class="number">2667</div>
<div class="text">học viên</div>
</div>
<div class="time">
<div class="number">6</div>
<div class="text">giờ</div>
</div>
<div class="price">
<div class="label-price">
                                                <div class="first">198.000đ</div>
                                    </div>
</div>
</div>
<!--end .view-price mb-->

            <a href="/content-marketing" class="link-wrap"></a>
</div>
<a href="/content-marketing" class="card-popup"></a>
<!--end .wrap-->
</li>
<li class="col-xl-3 col-lg-4 col-md-6 col-xs-12 k-box-card" data-key="2"><style>
.view-price__flash-sale{
position: absolute;
}
.view-price__flash-sale .old-price{
position: relative;

}
.view-price__flash-sale .in-flash{
left: -10px;
text-decoration: line-through;
}
.view-price__flash-sale .new-price::before{
content: url("https://cdn-skill.kynaenglish.vn/img/flash-sale/flash-icon.png");
position: relative;
top: 2px;
}
.view-price__flash-sale .new-price{
position: relative;
top: 5px;
left: 0px;
color: #ff293f;
font-size: 18px;

}
.clock-flash-sale{
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
<div class="k-box-card-wrap clearfix" data-id="153" data-course-type="1">
<div class="img">
<img class="img-fluid" src="https://cdn-skill.kynaenglish.vn/uploads/courses/153/img/image_url-1600317276.jpg" size="263x147" width="263px" height="147px" alt="Bí quyết thuê và cho thuê nhà nhanh chóng" resizemode="cover" returnmode="img" max-width="100%">
<div class="label-wrap">
                
                                                </div>
<!-- end .label-wrap -->
<!-- <div class="teacher mb">
<ul>
    <li>
        <img class="img-teacher" src="https://cdn-skill.kynaenglish.vn/uploads/user/113475/img/avatar-1529981077.png" size="35x35" width="35px" height="35px" alt="Phan Công Chánh " resizeMode="crop" returnMode="img" max-width="100%">                </li>
    <li>
        Phan Công Chánh                 </li>
</ul>
</div> -->

<!--start course rating-->

<div class="rating-box clearfix">
<div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="rating-text"><b>4.4 <i class="icon icon-star"></i></b> <span>(66<detail> đánh giá</detail>)</span></div>
<div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>13209 <span>học viên</span><detail> đăng ký học</detail></span></div>
</div>
<!--end rating-->

<span class="background-detail">
<span class="wrap-position">
                    <div class="inner">
        <a href="/bi-quyet-thue-va-cho-thue-nha-nhanh-chong" data-ajax="" data-toggle="popup" data-target="#modal">Xem nhanh</a>
        <a href="/bi-quyet-thue-va-cho-thue-nha-nhanh-chong" class="view-detail">Xem chi tiết</a>
      </div>
            </span>
</span>
</div>
<!--end .img-->

<div class="content" style="height: 186px;">
<div class="box-style">
            <span class="st-video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học video</span>
            <span class="time pc"><i class="fa fa-clock-o" aria-hidden="true"></i> 2 giờ</span>
</div>
<h4>Bí quyết thuê và cho thuê nhà nhanh chóng</h4>
<span class="author">Phan Công Chánh </span>
<span class="major">Chuyên gia bất động sản cá nhân </span>
</div>

<!--end .content -->


<div class="content-mb">
<b>Phan Công Chánh </b><span><b>,</b> Chuyên gia bất động sản cá nhân </span>
</div>

<!--end .content mb -->
<div class="view-price" style="height: 47px;">
<ul>
                                    <li class="price"><strong>598.000đ</strong></li>
                        </ul>
                                </div>
<!--end .view-price-->


<div class="view-price-mb">
<div class="student">
<div class="number">13209</div>
<div class="text">học viên</div>
</div>
<div class="time">
<div class="number">2</div>
<div class="text">giờ</div>
</div>
<div class="price">
<div class="label-price">
                                                <div class="first">598.000đ</div>
                                    </div>
</div>
</div>
<!--end .view-price mb-->

            <a href="/bi-quyet-thue-va-cho-thue-nha-nhanh-chong" class="link-wrap"></a>
</div>
<a href="/bi-quyet-thue-va-cho-thue-nha-nhanh-chong" class="card-popup"></a>
<!--end .wrap-->
</li>
<li class="col-xl-3 col-lg-4 col-md-6 col-xs-12 k-box-card" data-key="3"><style>
.view-price__flash-sale{
position: absolute;
}
.view-price__flash-sale .old-price{
position: relative;

}
.view-price__flash-sale .in-flash{
left: -10px;
text-decoration: line-through;
}
.view-price__flash-sale .new-price::before{
content: url("https://cdn-skill.kynaenglish.vn/img/flash-sale/flash-icon.png");
position: relative;
top: 2px;
}
.view-price__flash-sale .new-price{
position: relative;
top: 5px;
left: 0px;
color: #ff293f;
font-size: 18px;

}
.clock-flash-sale{
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
<div class="k-box-card-wrap clearfix" data-id="866" data-course-type="1">
<div class="img">
<img class="img-fluid" src="https://cdn-skill.kynaenglish.vn/uploads/courses/866/img/image_url-1594981875.jpg" size="263x147" width="263px" height="147px" alt="Tiếng Anh giao tiếp công sở qua điện thoại" resizemode="cover" returnmode="img" max-width="100%">
<div class="label-wrap">
                
                                                </div>
<!-- end .label-wrap -->
<!-- <div class="teacher mb">
<ul>
    <li>
        <img class="img-teacher" src="https://cdn-skill.kynaenglish.vn/uploads/user/300068/img/avatar.png" size="35x35" width="35px" height="35px" alt="Kynalingo - Into the World" resizeMode="crop" returnMode="img" max-width="100%">                </li>
    <li>
        Kynalingo - Into the World                </li>
</ul>
</div> -->

<!--start course rating-->

<div class="rating-box clearfix">
<div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="rating-text"><b>5 <i class="icon icon-star"></i></b> <span>(1<detail> đánh giá</detail>)</span></div>
<div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
<div class="number-student"><i class="fa fa-user" aria-hidden="true"></i> <span>948 <span>học viên</span><detail> đăng ký học</detail></span></div>
</div>
<!--end rating-->

<span class="background-detail">
<span class="wrap-position">
                    <div class="inner">
        <a href="/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" data-ajax="" data-toggle="popup" data-target="#modal">Xem nhanh</a>
        <a href="/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="view-detail">Xem chi tiết</a>
      </div>
            </span>
</span>
</div>
<!--end .img-->

<div class="content" style="height: 186px;">
<div class="box-style">
            <span class="st-video"><i class="fa fa-youtube-play" aria-hidden="true"></i> Khóa học video</span>
            <span class="time pc"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 giờ</span>
</div>
<h4>Tiếng Anh giao tiếp công sở qua điện thoại</h4>
<span class="author">Kynalingo - Into the World</span>
<span class="major">Thuộc hệ sinh thái đào tạo trực tuyến kỹ năng dành cho người đi làm Kyna Group</span>
</div>

<!--end .content -->


<div class="content-mb">
<b>Kynalingo - Into the World</b><span><b>,</b> Thuộc hệ sinh thái đào tạo trực tuyến kỹ năng dành cho người đi làm Kyna Group</span>
</div>

<!--end .content mb -->
<div class="view-price" style="height: 47px;">
<ul>
                                    <li class="price"><strong>298.000đ</strong></li>
                        </ul>
                                </div>
<!--end .view-price-->


<div class="view-price-mb">
<div class="student">
<div class="number">948</div>
<div class="text">học viên</div>
</div>
<div class="time">
<div class="number">3</div>
<div class="text">giờ</div>
</div>
<div class="price">
<div class="label-price">
                                                <div class="first">298.000đ</div>
                                    </div>
</div>
</div>
<!--end .view-price mb-->

            <a href="/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="link-wrap"></a>
</div>
<a href="/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" class="card-popup"></a>
<!--end .wrap-->
</li>
</ul>                        </div>

        </section>
                    <!-- end hot courses -->

        </div>

</div>
@endsection
@section('custom_srcipt')
    <script type="text/javascript">
        $('#product_select').on('change', '.add_item_select', function() {
            const addCart = (data) => {
                let url = $(`meta[name="cart-add"]`).attr("content");
                url = `${url}/${data.id}`;
                $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        console.log("add cart", response);
                    }
                });
            }
            var data = {};
            data.action = $(this).is(':checked') ? 'add' : 'delete';
            data.id = $(this).attr('data-id');
            data.title = $(this).attr('data-title');
            data.thumbnail = $(this).attr('data-thumbnail');
            data.price = $(this).attr('data-price');
            data.weight = $(this).attr('data-weight');
            addCart(data);
            _update(data);
        });
        $('#product_item').on('click', '.remove_group_item', function() {
            var data = {};
            data.action = 'delete';
            data.id = $(this).attr('data-id');
            _update(data);
        });
        console.log(shoppingCart);
        if (shoppingCart.products.length > 0) {
            customrRenderTableProduct();
        }
        var quantityBreaks = [];

        function handleProductQuantityBreak() {
            $.each(shoppingCart.products, function(key, item) {
                if (quantityBreaks.hasOwnProperty(item.id)) {
                    var priceDiscount = 0;
                    var priceBase = 0;
                    if (item.hasOwnProperty('old_price')) {
                        item.price = item.old_price;
                    }
                    $.each(quantityBreaks[item.id]['discounts'], function(quantity, discount) {
                        if (item.quantity >= parseInt(quantity)) {
                            if (parseInt(quantityBreaks[item.id]['type']) == 1) {
                                priceDiscount = parseInt(discount);
                            }
                            if (parseInt(quantityBreaks[item.id]['type']) == 2) {
                                priceDiscount = parseInt(discount) * item.price / 100;
                            }
                            if (parseInt(quantityBreaks[item.id]['type']) == 3) {
                                priceBase = parseInt(discount);
                            }
                        }
                    });
                    item.old_price = item.price;
                    if (priceBase > 0) {
                        item.price = priceBase;
                    }
                    item.price -= priceDiscount;
                }
            });
            renderTableProduct();
        }

        function handleConfirmCheckout() {
            var responseData = [];
            $.ajax({
                url: base_domain + '/api/cart-before-confirm-checkout',
                type: 'POST',
                data: {
                    shoppingcart: shoppingCart.products
                },
                async: true
            }).done(function(response) {
                if (response.hasOwnProperty('product_quantity_break')) {
                    quantityBreaks = response.product_quantity_break;
                    handleProductQuantityBreak();
                } else {
                    renderTableProduct();
                }
                $(document).find('.button-next').show();
            });
        };

        function customrRenderTableProduct() {
            $('#product_item tbody').empty();
            shoppingCart.subtotal = 0;
            shoppingCart.total_weight = 0;
            console.log(shoppingCart);
            $.each(shoppingCart.products, function(index, item) {
                var related_html = '<tr id="item_' + item.id + '">';
                related_html += '<td><img src="' + item.thumbnail + '" style="max-height: 50px;" /></td>';
                related_html += '<td>' + item.product_title + '</td>';
                related_html += '<td>' + priceFormat(item.price) + '</td>';
                related_html += '<td><input type="number" min="1" data-id="' + item.id +
                    '" class="quantity" value="' + item.quantity + '" /></td>';
                related_html += '<td>' + priceFormat(parseInt(item.price) * item.quantity) + '</td>';
                related_html += '<td><a class="remove_group_item" data-id="' + item.id +
                    '"><i class="fa fa-times" aria-hidden="true"></i></a></td>';
                related_html += '</tr>';
                $('#product_item tbody').append(related_html);
                shoppingCart.subtotal += (parseInt(item.price) * item.quantity);
                if (!isNaN(parseFloat(item.weight))) {
                    shoppingCart.total_weight += (parseFloat(item.weight) * item.quantity);
                }
            });
        }
        $("#same-as-billing").on("change", function() {
            if ($(this).prop("checked")) {
                $('#fieldset-shipping').show();
                $("#fieldset-shipping input").removeAttr('disabled');
                $("#fieldset-shipping select").removeAttr('disabled');
                $("#fieldset-shipping textarea").removeAttr('disabled');
                if ($('#sprovince').children().length <= 1) {
                    buildAddress($('#sprovince'), $('#sdistrict'), $('#sward'));
                }
            } else {
                $('#fieldset-shipping').hide();
                $("#fieldset-shipping input").attr('disabled', 'disabled');
                $("#fieldset-shipping select").attr('disabled', 'disabled');
                $("#fieldset-shipping textarea").attr('disabled', 'disabled');
                $('#sname').val($('#name').val());
                $('#semail').val($('#email').val());
                $('#sphone').val($('#phone').val());
                $('#saddress').val($('#address').val());
                $('#sprovince').html($('#province').html());
                $('#sprovince').val($('#province').find('option:selected').data('id'));
                $('#sdistrict').html($('#district').html());
                $('#sdistrict').val($('#district').find('option:selected').data('id'));
                $('#sward').html($('#ward').html());
                $('#sward').val($('#ward').find('option:selected').data('id'));
            }
        });
        $('#district').change(function() {
            if (!$('input[name=has_saddress]').is(':checked')) {
                var district_id = $(this).find('option:selected').data('id');
                var province_id = $('#province').find('option:selected').data('id');
                if ($('#sprovince').children().length <= 1) {
                    buildAddress($('#sprovince'), $('#sdistrict'), $('#sward'));
                }
                $('#sprovince').html($('#province').html());
                $('#sprovince').val(province_id);
                $('#sdistrict').html($('#district').html());
                $('#sdistrict').val(district_id);
                if (district_id) {
                    calShippingfee(district_id, province_id, shoppingCart.total_weight, shoppingCart.subtotal);
                } else {
                    let html =
                        "<li class='ship_method_bacs'><label class='wb-text15'>Vui lòng chọn Tỉnh/Thành Phố và Quận/Huyện trước</label></li>";
                    $('.ship_methods').empty().append(html);
                }
            }
        });
        $('#ward').change(function() {
            if (!$('input[name=has_saddress]').is(':checked')) {
                var ward_id = $(this).find('option:selected').data('id');
                $('#sward').html($('#ward').html());
                $('#sward').val(ward_id);
                if (!ward_id) {
                    let html =
                        "<li class='ship_method_bacs'><label class='wb-text15'>Vui lòng chọn Tỉnh/Thành Phố, Phường/xã và Quận/Huyện trước</label></li>";
                    $('.ship_methods').empty().append(html);
                }
            }
        });

        function renderTableCart() {
            $('#cartItems tbody').empty();
            shoppingCart.total = shoppingCart.subtotal - shoppingCart.shipping.discount - shoppingCart.discount;
            if (shoppingCart.products.length) {
                $.each(shoppingCart.products, function(index, item) {
                    var html_tbComfirm = '';
                    html_tbComfirm += '<tr>';
                    html_tbComfirm += ' <td class="text-center"><img src="' + item.thumbnail +
                        '" style="max-height: 50px;" /></td>';
                    html_tbComfirm += ' <td>' + item.product_title + '</td>';
                    html_tbComfirm += ' <td class="text-right">' + priceFormat(item.price) + '</td>';
                    html_tbComfirm += ' <td class="text-center">' + item.quantity + '</td>';
                    html_tbComfirm += ' <td class="text-right">' + priceFormat(item.price * item.quantity) +
                        '</td>';
                    html_tbComfirm += '</tr>';
                    $('#cartItems tbody').append(html_tbComfirm);
                });
                $('#cartItems .subtotal').text(priceFormat(shoppingCart.subtotal));
                $('#cartItems .shipping').text(priceFormat(shoppingCart.shipping.fee - shoppingCart.shipping.discount));
                if (shoppingCart.shipping.message) {
                    $('#cartItems .shipping').text(priceFormat(shoppingCart.shipping.message));
                }
                $('#cartItems .discount').text(priceFormat(shoppingCart.discount));
                $('#cartItems .total').text(priceFormat(shoppingCart.total + shoppingCart.shipping.fee));
            }
        }
        $(document).on('click', '.button-next', function() {
            renderTableCart();
            shoppingCart.shipping.fee = 0;
            shoppingCart.payment.method_id = parseInt($(document).find('input[name=payment]:checked').val());
            shoppingCart.payment.method_title = $(document).find('input[name=payment]:checked').data('title');
            shoppingCart.shipping.method_id = parseInt($(document).find('input[name=ship]:checked').val());
            shoppingCart.shipping.method_title = $(document).find('input[name=ship]:checked').data('title');
            if ($(document).find('input[name=ship]:checked').length) {
                shoppingCart.shipping.fee = parseInt($(document).find('input[name=ship]:checked').data('fee'));
            }
            shoppingCart.info_order = {
                'fullname': $('#name').val(),
                'email': $('#email').val(),
                'phone': $('#phone').val(),
                'province': $('#province option:selected').val() ? $('#province option:selected').text() : '',
                'district': $('#district option:selected').val() ? $('#district option:selected').text() : '',
                'ward': $('#ward option:selected').val() ? $('#ward option:selected').text() : '',
                'address': $('#address').val()
            };
            shoppingCart.info_shipping = {
                'name': $('#sname').val(),
                'email': $('#semail').val(),
                'phone': $('#sphone').val(),
                'province': $('#sprovince option:selected').val() ? $('#sprovince option:selected').text() : '',
                'district': $('#sdistrict option:selected').val() ? $('#sdistrict option:selected').text() : '',
                'ward': $('#sward option:selected').val() ? $('#sward option:selected').text() : '',
                'address': $('#saddress').val()
            };
            shoppingCart.note = $('#note').val();
            $('.confirm_order .name').text(shoppingCart.info_order.fullname);
            $('.confirm_order .email').text(shoppingCart.info_order.email);
            $('.confirm_order .phone').text(shoppingCart.info_order.phone);
            $('.confirm_order .province').text(shoppingCart.info_order.province);
            $('.confirm_order .district').text(shoppingCart.info_order.district);
            $('.confirm_order .ward').text(shoppingCart.info_order.ward);
            $('.confirm_order .address').text(shoppingCart.info_order.address);
            $('.confirm_order .sname').text(shoppingCart.info_shipping.name);
            $('.confirm_order .semail').text(shoppingCart.info_shipping.email);
            $('.confirm_order .sphone').text(shoppingCart.info_shipping.phone);
            $('.confirm_order .sprovince').text(shoppingCart.info_shipping.province);
            $('.confirm_order .sdistrict').text(shoppingCart.info_shipping.district);
            $('.confirm_order .sward').text(shoppingCart.info_shipping.ward);
            $('.confirm_order .saddress').text(shoppingCart.info_shipping.address);
            $('.confirm_order .sshipping').text(shoppingCart.shipping.method_title);
            $('.confirm_order .note').text(shoppingCart.note);
            $('.confirm_order .payment_method').text(shoppingCart.payment.method_title);
        });
    </script>
    <script src="https://static.loveitopcdn.com/backend/js/item.select.js?v=1.2.7"></script>
    <script>
        var product_select = new ItemSelectClass();
        product_select.init('#product_select', 'product', 'multi');
    </script>
@endsection
