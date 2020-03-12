<!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">        
        <div class="col-12">
            <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                <div class="blog-thumb mb-30">
                    <img src="img/bg-img/50.jpg" alt="">
                </div>
                <div class="blog-content">
                    <div class="post-meta">
                        <a href="<?php echo base_url(); ?>">Home</a>
                        <a href="<?php echo base_url(); ?>">gay profile</a>
                    </div>
                    <?php
                    if ($details['lanka'] != "0") {
                        ?>
                        <h1 class="post-title">Gay profile in Sri Lanka </h1>
                        <?php
                    } else {
                        ?>
                        <h1 class="post-title"><?php echo $details['title']; ?> </h1>
                        <p class="post-title">Name : <?php echo $details['name']; ?> </p>
                        <?php
                    }
                    ?>

                    <!-- Post Meta -->
                    <div class="post-meta-2">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $details['views']; ?></a>
                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 0</a>
                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 0</a>
                    </div>

                    <?php
                    if ($details['lanka'] != "0") {
                        echo '<div class="lankalove-post">' . $details["message"] . '</div>';
                    } else {
                        echo "<strong>Message : </strong><p>" . $details['message'] . "</p>";
                    }
                    ?>

                    <?php
                    if ($details['lanka'] == "0") {
                        ?>
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <ul>
                                    <li><strong>Email :</strong> <?php echo $details['email']; ?></li>
                                    <li><strong>Age :</strong> <?php echo $details['age']; ?></li>
                                    <li><strong>From Address :</strong> <?php echo $details['from_address']; ?></li>
                                    <li><strong>Looking :</strong> <?php echo $details['looking']; ?></li>
                                    <li><strong>Phone No. :</strong> <?php echo $details['phoneno']; ?></li>
                                    <li><strong>Fb :</strong> <?php echo $details['fb']; ?></li>
                                    <li><strong>Created at :</strong> <?php echo $details['created_at']; ?></li>

                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <input type="hidden" name="pageurl" id="pageurl" value="<?php echo base_url('post/' . $details['slug']); ?>"  />
                    <input type="hidden" name="pageid" id="pageid" value="<?php echo $details['id']; ?>"  />
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h4>Comment : </h4>
                            <form>
                                <div class="form-group comment-session">
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                    <button type="button" class="btn btn-primary" onclick="saveComment();">Post</button>
                                </div>
                            </form>
                            <?php foreach ($comment as $row) { ?>
                                <div class="singlecomment">
                                    <?php print_r($row['comment']); ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
    </section>
    <!-- ##### Post Details Area End ##### -->
</div>

