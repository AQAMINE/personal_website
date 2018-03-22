<div class="copyright-wthree">
    <div class="container">
        <p>hhhhhhhhhhhhhhhhhhhhhhhhh</p>
    </div>
</div>
<!-- //Footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- start-smoth-scrolling -->
<!--gallery -->
<script src="js/jquery.chocolat.js"></script>

<!--light-box-files -->
<script type="text/javascript">
    $(function () {
        $('.w3_agile_gallery_grid a').Chocolat();
    });
</script>
<!-- //gallery -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->

<script src="js/bootstrap.js"></script>

</body>

</html>