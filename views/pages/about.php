<?php require_once(ROOT . '/views/layouts/header.php'); ?>
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(/templates/img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>О НАС</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>About Us</h5>
                        </div>
                        <?php foreach ($data['about'] as $item): ?>
                            <?php echo $item['description']; ?>
                            <img class="mt-15" src="<?php echo $item['path_to_photo']; ?>" alt="">
                        <?php endforeach; ?>
                        <!-- Team Member Area -->
                        <div class="section-heading mt-30">
                            <h5>Our Team</h5>
                        </div>

                        <?php foreach ($data['employees'] as $employee): ?>
                            <!-- Single Team Member -->
                            <div class="single-team-member d-flex align-items-center">
                                <div class="team-member-thumbnail">
                                    <img src="<?php echo $employee['path_to_profile_photo']; ?>" alt="">
                                    <div class="social-btn">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="team-member-content">
                                    <h6><?php echo $employee['username']; ?></h6>
                                    <span><?php echo $employee['position']; ?></span>
                                    <p><?php echo $employee['description']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                                <!-- Twitter -->
                                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280
                                    <span>Followers</span></a>
                                <!-- YouTube -->
                                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250
                                    <span>Subscribers</span></a>
                                <!-- Google -->
                                <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230
                                    <span>Followers</span></a>
                            </div>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Категории</h5>
                            </div>

                            <!-- Catagory Widget -->
                            <ul class="catagory-widgets">
                                <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</span>
                                        <span>35</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> Travel</span> <span>30</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> Foods</span> <span>13</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> Game</span> <span>06</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> Sports</span> <span>28</span></a></li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> Football</span> <span>08</span></a>
                                </li>
                                <li><a href="#"><span><i class="fa fa-angle-double-right"
                                                         aria-hidden="true"></i> TV Show</span> <span>13</span></a></li>
                            </ul>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="/templates/img/bg-img/add2.png" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Newsletter</h5>
                            </div>

                            <div class="newsletter-form">
                                <p>Subscribe our newsletter gor get notification about new updates, information
                                    discount,
                                    etc.</p>
                                <form action="#" method="get">
                                    <input type="search" name="widget-search" placeholder="Enter your email">
                                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
<?php require_once(ROOT . '/views/layouts/footer.php'); ?>