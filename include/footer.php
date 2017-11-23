<!--
==================================================
Footer Section Start
================================================== -->
<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
        <i class="fa fa-2x fa-arrow-circle-up"></i>
    </span>
</div>
<footer id="footer">
    <div class="container">
        <div class="col-md-12">
            <p class="copyright">@Copyright Reserved By MARQUIS: <span>2015</span> . Design and Developed by <a href="mailto:alex.gao@sinometalresourcesinc.com">Marquis</a></p>
        </div>
       <!--  <div class="col-md-4">
             <ul class="social">
                <li>
                    <a href="#" class="Facebook">
                        <i class="ion-social-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Twitter">
                        <i class="ion-social-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Linkedin">
                        <i class="ion-social-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="Google Plus">
                        <i class="ion-social-googleplus"></i>
                    </a>
                </li>
            </ul>
        </div> -->
    </div>
</footer> <!-- /#footer -->
<!-- Template Javascript Files
================================================== -->
<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- owl carouserl js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- bootstrap js -->

<script src="assets/js/bootstrap.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- slider js -->
<script src="assets/js/slider.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<!-- template main js -->
<script src="assets/js/main.js"></script>
<script src="assets/js/ajaxtable.min.js"></script>
 

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-76603570-1', 'auto');
ga('send', 'pageview');
</script>
<script>
$(function(){
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 2) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
});

$(function(){
    $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 10) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
    $('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    // offset = element.offset();
    offsetTop =  (element.offset()).top-$(window).scrollTop();
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

</script>

