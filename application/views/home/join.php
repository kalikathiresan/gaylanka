<!-- >>>>>>>>>>>>>>>>>>>>
         Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
    <!-- Trending Now Posts Area -->
    <div class="trending-now-posts mb-30">
        <div>

            <form id="join_user_add_form">
                <h2 class="join-title">Join to gay lanka</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control required" id="name" name="name" placeholder="Name" required="true">
                            <small class="form-text text-danger hidden">Enter a name</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="email">Age</label>
                            <select class="form-control" id="age" name="age">
                                <option>N/A</option>
                                <?php
                                for ($i = 18; $i < 100; $i++) {
                                    echo "<option value=\"$i\">$i years</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="text" class="form-control" id="from_address" name="from_address" placeholder="Colombo, moratuwa, etc...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="phoneno">Phone No.</label>
                            <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="Old, young boy, near colombo">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="fb">Fb</label>
                            <input type="text" class="form-control" id="fb" name="fb" placeholder="FB">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="looking">Looking</label>
                            <input type="text" class="form-control" id="looking" name="looking" placeholder="Old, young boy, near colombo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="email">You</label>
                            <select class="form-control" id="category" name="category[]" multiple="multiple">
                                <option>N/A</option>
                                <?php
                                foreach ($category as $row) {
                                    ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control required" id="message" name="message" rows="3" required="true"></textarea>
                            <small class="form-text text-danger hidden">Enter a message</small>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="join_user_add();">Submit</button>
            </form>

        </div>
    </div>
</div>