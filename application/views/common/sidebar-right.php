<!-- >>>>>>>>>>>>>>>>>>>>
     Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
<div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
    <div class="single-sidebar-widget p-30">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- gaylanka 1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3701678420502749"
                 data-ad-slot="4386715848"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Social Followers Info -->
        <div class="social-followers-info">
            <!-- Facebook -->
            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 0 <span>Fans</span></a>
            <!-- Twitter -->
            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i>0 <span>Followers</span></a>
            <!-- YouTube -->
            <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i>0 <span>Subscribers</span></a>
            <!-- Google -->
            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i>0 <span>Followers</span></a>
        </div>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Categories</h5>
        </div>

        <!-- Catagory Widget -->
        <ul class="catagory-widgets">
            <?php
            foreach ($category as $row) {
                ?>
                <li><a href="<?php echo base_url("want-to-meet/".$row['url']); ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $row['name']; ?></span> <span><?php echo $row['total']; ?></span></a></li>
                <?php
            }
            ?>
        </ul>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget">
        <a href="#" class="add-img"><img src="<?php echo base_url('assest/img/bg-img/add2.png'); ?>" alt=""></a>
    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Hot Channels</h5>
        </div>
        <?php
        /*
        <!-- Single YouTube Channel -->
        <div class="single-youtube-channel d-flex">
            <div class="youtube-channel-thumbnail">
                <img src="<?php echo base_url('assest/img/bg-img/14.jpg'); ?>" alt="">
            </div>
            <div class="youtube-channel-content">
                <a href="single-post.html" class="channel-title">TV Show</a>
                <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
            </div>
        </div>
         * 
         */
        ?>
        

    </div>

    <!-- Sidebar Widget -->
    <div class="single-sidebar-widget p-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h5>Newsletter</h5>
        </div>

        <div class="newsletter-form">
            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
            <form action="#" method="get">
                <input type="search" id="emailsubcribe" name="widget-search" placeholder="Enter your email">
                <button type="button" id="emailsubcribebtn" class="btn mag-btn w-100">Subscribe</button>
                <span id="emailsubcribemsg"></span>
            </form>
        </div>

    </div>
</div>
</section>
<!-- ##### Mag Posts Area End ##### -->

