<script>
    function Copyvoucher() {
        var copyText = document.getElementById("showvoucher");
        copyText.select();
        document.execCommand("copy");
    }
</script>
<script>
    var countCart = 0;
    var sendData = true;
    // Close banner app mobile
    $('.mobilefooterbar .close').click(function() {
        $('.mobilefooterbar').hide();
    });
    function setCookie(name, value, expiredDay) {
        var expired = "";
        if (expiredDay !== null) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredDay * 24 * 60 * 60 * 1000));
            expired = "expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + ";" + expired + ";path=/";
    }
    function getCookie(name) {
        var name = name + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    // Set show mobilefooterbar once a day
    $(document).ready(function() {
        var date = new Date();
        if (getCookie('mobilefooterbar_showed') === "" && getCookie('mobilefooterbar_showed') !== date
            .getDate()) {
            setCookie('mobilefooterbar_showed', date.getDate(), 1);
            $('.mobilefooterbar').show();
        } else {
            $('.mobilefooterbar').hide();
        }
    });
</script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/popup-get-user-info.js"></script>
<script src="{{asset('kyna/js/add-to-cart.js')}}?ver={{time()}}"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/jquery-ui.js"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/autocomplete.js?v=1"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/video/videojs.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/video/videojs-http-streaming.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/video/videojs-playlist.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/slick/slick.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/jquery.lazy.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/jquery.lazy.plugins.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/sweetalert2.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/dist/js/app.min.js?v=15217955218005"></script>
<script src="{{asset('kyna/js/header.min.js')}}?ver={{time()}}"></script>
<script src="{{asset('kyna/js/home-page.min.js')}}?ver={{time()}}"></script>
{{-- Course --}}
<script src="{{asset('kyna/js/course-detail.min.js')}}?ver={{time()}}"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/widget/course-card.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/select2.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/tether.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/bootstrap.min.js?v=15217955218005"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/offpage.js?version=1562727393"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/main.js?v=1568114107"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/details.js?v=1562727393"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/ajax-caller.js?v=31073107"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/push-notification/firebase.min.js?v=1"></script>
<script src="https://cdn-skill.kynaenglish.vn/js/push-notification/push-notification-main.min.js?v=1"></script>
<script src="https://cdn-skill.kynaenglish.vn/src/js/jquery.validate.min.js?v=15217955218005"></script>
<script src="/assets/7431fa9e/remarkable-bootstrap-notify/bootstrap-notify.js"></script>
<script src="/assets/35de618e/yii.activeForm.js"></script>
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
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#search-form').yiiActiveForm([], []);
    });
</script>