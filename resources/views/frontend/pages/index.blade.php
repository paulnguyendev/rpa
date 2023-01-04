@php
    use App\Helpers\Obn;
    use App\Helpers\User;
    use App\Helpers\Link\ProductLink;
    use App\Helpers\Template\Product;
@endphp
@extends('frontend.main')
@section('content')
    @include("{$templatePart}headerBanner")
    @include("{$templatePart}skillCourse")
    @include("{$templatePart}exclusiveCourse")
    @include("{$templatePart}freeCourse")
    @include("{$templatePart}hotKeywords")
    @include("{$templatePart}lectureList")
    @include("{$templatePart}partner")
@endsection
@section('custom_srcipt')
    <script>
        $('.dashboard-slide').slick({
            dots: false,
            infinite: true,
            speed: 500,
            prevArrow: '<button class="slick-prev slide-btn"> < </button>',
            nextArrow: '<button class="slick-next slide-btn"> > </button>',
        });
    </script>
@endsection
