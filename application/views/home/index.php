<!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
    <!-- Trending Now Posts Area -->

    <?php
    if (isset($error)) {
        ?>
        <div class="feature-video-posts mb-30">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-template">
                        <p class="ft-26 strong">Oops!</p>
                        <p class="ft-20 strong">404 Not Found</p>
                        <div class="error-details">
                            Sorry, an error has occured, Requested page not found!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="trending-now-posts mb-30">
        <div class="section-heading-forad">
            <!-- delete others -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-3701678420502749"
                 data-ad-slot="9391325932"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <!-- Section Title -->
        <div class="section-heading">
            <h2>Most view Gay profiles in Sri Lanka</h2>
        </div>
        <div class="trending-post-slides owl-carousel">
            <?php
            foreach ($trending as $row) {
                if ($row['categoryid'] == "") {
                    $img = 'assest/img/st-img/1.jpg';
                } else {

                    if (!file_exists(FCPATH . 'assest\img\st-img\\' . $row['categoryid'] . '.jpg')) {
                        $img = 'assest/img/st-img/1.jpg';
                    } else {
                        $img = 'assest/img/st-img/' . $row['categoryid'] . '.jpg';
                    }
                    //$img = file_exists(base_url($img)) ? $img : 'assest/img/st-img/1.jpg';
                }
                ?>
                <div class="single-trending-post">
                    <a href="<?php echo base_url('post/' . $row['slug']); ?>" class="post-title">
                        <img src="<?php echo base_url($img); ?>" alt="gay-cartoon">
                    </a>
                    <div class="post-content">
                        <a href="<?php echo base_url('post/' . $row['slug']); ?>" class="post-title"><?php echo $row['title'] != "" ? $row['title'] : "Need a Gay"; ?></a>
                    </div>
                </div>
                <?php
            }
            ?>            
        </div>
    </div>


    <!-- Feature Video Posts Area -->
    <div class="feature-video-posts mb-30">
        <!-- Section Title -->
        <div class="section-heading">
            <h2><?php echo $title; ?></h2>
        </div>


        <div class="col-12">
            <p>
                <?php
                if (isset($meta_desc)) {
                    print_r($meta_desc);
                }
                ?>
            </p>
        </div>

        <div class="featured-video-posts">
            <div class="row">
                <div class="col-lg-12" id="postcontainer">
                    <?php
                    $postcount = 0;
                    foreach ($all_post as $row) {
                        ?>
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <?php
                                if ($row['categoryid'] == "" || $row['categoryid'] == "0") {
                                    $img = 'assest/img/st-img/1.jpg';
                                } else {
                                    $img = 'assest/img/st-img/' . $row['categoryid'] . '.jpg';
                                    /*
                                      if (!file_exists(base_url('assest/img/st-img/' . $row['categoryid'] . '.jpg'))) {
                                      $img = 'assest/img/st-img/1.jpg';
                                      } else {
                                      $img = 'assest/img/st-img/' . $row['categoryid'] . '.jpg';
                                      }
                                      //$img = file_exists(base_url($img)) ? $img : 'assest/img/st-img/1.jpg';
                                     * */
                                }
                                ?>
                                <a href="<?php echo base_url('post/' . $row['slug']); ?>" class="post-title">
                                    <img src="<?php echo base_url($img); ?>" alt="gay-cartoon">
                                </a>
                            </div>
                            <div class="post-content">
                                <a href="<?php echo base_url('post/' . $row['slug']); ?>" class="post-title"><?php echo $row['title']; ?></a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['views']; ?></a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 0</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 0</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['created_at']; ?></a>
                                </div>
                                <div class="home-show-message">
                                    <?php echo $row['lanka'] == "0" ? substr($row['message'], 0, 160) : ""; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $postcount++;
                    }
                    ?>
                </div>
            </div>
        </div>
        <div id="main_bottom_postall"></div>
    </div>
    <input type="hidden" name="postcount" id="postcount" value="<?php echo $postcount; ?>" />
    <input type="hidden" name="posttype" id="posttype" value="<?php echo $posttype; ?>" />
    <input type="hidden" name="isloading" id="isloading" value="0" />
    <input type="hidden" name="loadmore" id="loadmore" value="<?php echo $loadmore; ?>" />
    <?php
    /*
      <!-- Most Viewed Videos -->
      <div class="most-viewed-videos mb-30">
      <!-- Section Title -->
      <div class="section-heading">
      <h5>Most Viewed Videos</h5>
      </div>

      <div class="most-viewed-videos-slide owl-carousel">

      <!-- Single Blog Post -->
      <div class="single-blog-post style-4">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/28.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      <span class="video-duration">09:27</span>
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="single-blog-post style-4">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/29.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      <span class="video-duration">09:27</span>
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="single-blog-post style-4">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/30.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      <span class="video-duration">09:27</span>
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="single-blog-post style-4">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/28.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      <span class="video-duration">09:27</span>
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="single-blog-post style-4">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/29.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      <span class="video-duration">09:27</span>
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="single-blog-post style-4">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/30.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      <span class="video-duration">09:27</span>
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">Become A Travel Pro In One Easy Lesson</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>

      </div>
      </div>

      <!-- Sports Videos -->
      <div class="sports-videos-area">
      <!-- Section Title -->
      <div class="section-heading">
      <h5>Sports Videos</h5>
      </div>

      <div class="sports-videos-slides owl-carousel mb-30">
      <!-- Single Featured Post -->
      <div class="single-featured-post">
      <!-- Thumbnail -->
      <div class="post-thumbnail mb-50">
      <img src="<?php echo base_url('assest/img/bg-img/22.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      </div>
      <!-- Post Contetnt -->
      <div class="post-content">
      <div class="post-meta">
      <a href="#">MAY 8, 2018</a>
      <a href="archive.html">lifestyle</a>
      </div>
      <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
      </div>
      <!-- Post Share Area -->
      <div class="post-share-area d-flex align-items-center justify-content-between">
      <!-- Post Meta -->
      <div class="post-meta pl-3">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      <!-- Share Info -->
      <div class="share-info">
      <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
      <!-- All Share Buttons -->
      <div class="all-share-btn d-flex">
      <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      </div>
      </div>
      </div>

      <!-- Single Featured Post -->
      <div class="single-featured-post">
      <!-- Thumbnail -->
      <div class="post-thumbnail mb-50">
      <img src="<?php echo base_url('assest/img/bg-img/22.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      </div>
      <!-- Post Contetnt -->
      <div class="post-content">
      <div class="post-meta">
      <a href="#">MAY 8, 2018</a>
      <a href="archive.html">lifestyle</a>
      </div>
      <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
      </div>
      <!-- Post Share Area -->
      <div class="post-share-area d-flex align-items-center justify-content-between">
      <!-- Post Meta -->
      <div class="post-meta pl-3">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      <!-- Share Info -->
      <div class="share-info">
      <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
      <!-- All Share Buttons -->
      <div class="all-share-btn d-flex">
      <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      </div>
      </div>
      </div>

      <!-- Single Featured Post -->
      <div class="single-featured-post">
      <!-- Thumbnail -->
      <div class="post-thumbnail mb-50">
      <img src="<?php echo base_url('assest/img/bg-img/22.jpg'); ?>" alt="">
      <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
      </div>
      <!-- Post Contetnt -->
      <div class="post-content">
      <div class="post-meta">
      <a href="#">MAY 8, 2018</a>
      <a href="archive.html">lifestyle</a>
      </div>
      <a href="video-post.html" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
      </div>
      <!-- Post Share Area -->
      <div class="post-share-area d-flex align-items-center justify-content-between">
      <!-- Post Meta -->
      <div class="post-meta pl-3">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      <!-- Share Info -->
      <div class="share-info">
      <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
      <!-- All Share Buttons -->
      <div class="all-share-btn d-flex">
      <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
      </div>
      </div>
      </div>
      </div>

      <div class="row">
      <!-- Single Blog Post -->
      <div class="col-12 col-lg-6">
      <div class="single-blog-post d-flex style-3 mb-30">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/31.jpg'); ?>" alt="">
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="col-12 col-lg-6">
      <div class="single-blog-post d-flex style-3 mb-30">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/32.jpg'); ?>" alt="">
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="col-12 col-lg-6">
      <div class="single-blog-post d-flex style-3 mb-30">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/33.jpg'); ?>" alt="">
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>
      </div>

      <!-- Single Blog Post -->
      <div class="col-12 col-lg-6">
      <div class="single-blog-post d-flex style-3 mb-30">
      <div class="post-thumbnail">
      <img src="<?php echo base_url('assest/img/bg-img/34.jpg'); ?>" alt="">
      </div>
      <div class="post-content">
      <a href="single-post.html" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
      <div class="post-meta d-flex">
      <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
      <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
      <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
      </div>
      </div>
      </div>
      </div>
      </div>

      </div>
     */
    ?>
    <?php
    if (isset($meta_keywords)) {
        foreach ($meta_keywords as $row) {
            ?>
            <span><?php echo $row; ?></span>
            <?php
        }
    }
    ?>
</div>

