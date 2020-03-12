<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
     Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Most Popular</h5>
            </div>

            <!-- Single Blog Post -->
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
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="<?php echo base_url($img); ?>" alt="">
                    </div>
                    <div class="post-content">
                        <a href="<?php echo base_url('post/' . $row['slug']); ?>" class="post-title"><?php echo $row['title']; ?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['views']; ?></a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 0</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 0</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget">
            <a href="<?php echo base_url('join'); ?>" class="add-img"><img src="<?php echo base_url('assest/img/bg-img/add.png'); ?>" alt=""></a>
        </div>

        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>Gay from</h5>                
            </div>
            <div>
                <p>
                    <a href="<?php echo base_url('gay-from/kandy'); ?>">Kandy</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/colombo'); ?>">Colombo</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/moratuwa'); ?>">Moratuwa</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/ratmalana'); ?>">Ratmalana</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/jaela'); ?>">Jaela</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/negambo'); ?>">Negambo</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/matara'); ?>">Matara</a>
                </p>
                <p>
                    <a href="<?php echo base_url('gay-from/galle'); ?>">Galle</a>
                </p>
            </div>
            <?php
            /*
              <!-- Single Blog Post -->
              <div class="single-blog-post d-flex">
              <div class="post-thumbnail">
              <img src="<?php echo base_url('assest/img/bg-img/9.jpg'); ?>" alt="">
              </div>
              <div class="post-content">
              <a href="single-post.html" class="post-title">Coventry City Guide Including Coventry</a>
              <div class="post-meta d-flex justify-content-between">
              <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
              <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
              <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
              </div>
              </div>
              </div>
             * 
             */
            ?>

        </div>
    </div>