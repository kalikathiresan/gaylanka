<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <!-- Logo -->
                    <h2>
                        Gay Lanka
                    </h2>
                    <p>

                        Most Popular Sri Lanka Gay Dating Website - Lanka Friends. 
                        Find Gay in Sri Lanka with LankaFriends.com. 
                        Chat With Sri Lankan Men.
                    </p>
                    <div class="footer-social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Categories</h6>
                    <nav class="footer-widget-nav">
                        <ul>
                            <?php
                            foreach ($category as $row) {
                                ?>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $row['name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Sport Videos</h6>
                    <?php
                    /*
                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-2 d-flex">
                        <div class="post-thumbnail">
                            <img src="<?php echo base_url('assest/img/bg-img/12.jpg'); ?>" alt="">
                        </div>
                        <div class="post-content">
                            <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                            <div class="post-meta d-flex justify-content-between">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                            </div>
                        </div>
                    </div>
                    */
                    ?>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Channels</h6>
                    <ul class="footer-tags">
                        <li><a href="#">Gay</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; 2019 All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-12 col-sm-6">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo base_url('assest/js/jquery/jquery-2.2.4.min.js'); ?>"></script>
<!-- Popper js -->
<script src="<?php echo base_url('assest/js/bootstrap/popper.min.js'); ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url('assest/js/bootstrap/bootstrap.min.js'); ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo base_url('assest/js/plugins/plugins.js'); ?>"></script>
<!-- Active js -->
<script src="<?php echo base_url('assest/js/active.js'); ?>"></script>
<script src="<?php echo base_url('assest/js/main.js'); ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121183687-2"></script>
<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121183687-2');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-3701678420502749",
          enable_page_level_ads: true
     });
</script>
<amp-ad width="100vw" height=320
     type="adsense"
     data-ad-client="ca-pub-3701678420502749"
     data-ad-slot="4386715848"
     data-auto-format="rspv"
     data-full-width>
  <div overflow></div>
</amp-ad>
</body>

</html>