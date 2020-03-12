<?php
foreach ($all_post as $row) {
    ?>
    <div class="single-blog-post d-flex style-3">
        <div class="post-thumbnail">
            <img src="<?php echo base_url('assest/img/st-img/1.jpg'); ?>" alt="">
        </div>
        <div class="post-content">
            <a href="<?php echo base_url('post/' . $row['slug']); ?>" class="post-title"><?php echo $row['title']; ?></a>
            <div class="post-meta d-flex">
                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['views']; ?></a>
                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 0</a>
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 0</a>
                <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['created_at']; ?></a>
            </div>
        </div>
    </div>
    <?php
}
?>