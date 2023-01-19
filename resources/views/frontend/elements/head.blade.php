@php
    use App\Helpers\User;
@endphp
<base href="https://skills.kynaenglish.vn/">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msvalidate.01" content="E04DEE146525196629F6E1FB54D0A9CD" />
<script src="https://apis.google.com/js/api:client.js"></script>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=138701140812940&autoLogAppEvents=1">
</script>
<meta name="csrf-param" content="_csrf">
<meta name="cart_url" content="{{route('fe_cart/index')}}">
<meta name="user-id" content="{{User::getAffInfo()}}" />
<meta name="csrf-token" content="eGV1NE5FdUstBCVNIX0WfDAKKkwkASoMPjpHYTsHImYSUgQCPXISMQ==">
<title>@yield('title','RPA - Web Demo')</title>
<meta name="keywords" content="Kyna.vn, kina, Kyna, lớp đào tạo trực tuyến, khóa học online">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="icon" href="/favo_ico.png">
<link rel=preconnect href="https://script.hotjar.com">
<link rel=preconnect href="https://pro.fontawesome.com">
<link rel=preconnect href="https://scontent-xsp1-2.xx.fbcdn.net">
<link rel=preconnect href="https://webchat.caresoft.vn:8090">
<link rel=preconnect href="https://apis.google.com">
<meta name="description"
    content="Kyna học online với hơn 700 khóa học trực tuyến thuộc nhiều lĩnh vực như kỹ năng quản trị, ngoại ngữ, tài chính, bất động sản, bảo hiểm, chứng khoán, tiếp thị bán hàng">
<meta name="robots" content="index,follow">
<meta property="fb:app_id" content="191634267692814">
<meta property="og:type" content="website">
<meta property="og:title" content="Kyna.vn - Học online cùng chuyên gia">
<meta property="og:description"
    content="Kyna học online với hơn 700 khóa học trực tuyến thuộc nhiều lĩnh vực như kỹ năng quản trị, ngoại ngữ, tài chính, bất động sản, bảo hiểm, chứng khoán, tiếp thị bán hàng">
<meta property="og:image" content="https://skills.kynaenglish.vn/img/kyna-power-by-vietnamworks.png">
<meta property="og:url" content="https://kyna.vn">
<link href="https://skills.kynaenglish.vn/" rel="canonical">
<link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap"
    rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/video/videojs.min.css?v=15217955218005"
    rel="stylesheet">
<link type="text/css" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/slick-theme.min.css?v=15217955218005"
    rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/slick.min.css?v=15217955218005" rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/main.css?v=15217955218005" rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/app.css?v=15217955218005" rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/sweetalert2.min.css?v=15217955218005"
    rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/home-page.css?v=15217955218005" rel="stylesheet">
{{-- Course --}}
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/course-detail.css?v=15217955218005" rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/course-card.css?v=15217955218005" rel="stylesheet">
<link type="text/css" href="https://cdn-skill.kynaenglish.vn/css/select2.min.css?v=15217955218005" rel="stylesheet">
<link type="text/css" href="{{asset('kyna/css/obn.css')}}?ver={{time()}}" rel="stylesheet">
<script src="/assets/7431fa9e/jquery/dist/jquery.min.js"></script>
<script src="/assets/35de618e/yii.js"></script>
<script src="/assets/7431fa9e/bootbox.js/bootbox.js"></script>
@yield('custom_style')