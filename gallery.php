<?php include 'overall/header.php'; ?>
<?php include 'overall/nav.php'; ?>
<!-- Page-title -->
        <div class="page-title page-gallery  ">
            <div class="rellax" data-rellax-speed="5">
                <img src="images/page-title/contact-us.jpg" alt="">
            </div>
            <div class="content-wrap">

                <div class="tf-container w-1290">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p class="sub-title">
                                    See Our Daily Photos
                                </p>
                                <h1 class="title">
                                    farm gallery
                                </h1>
                                <div class="icon-img">
                                    <img src="images/item/line-throw-title.png" alt="">
                                </div>
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a>
                                    <div class="icon">
                                        <i class="icon-arrow-right1"></i>
                                    </div>
                                    <a href="javascript:void(0)">Farm Gallery </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img-item item-2">
                <img src="images/item/grassfarm.jpg" alt="">
            </div>
        </div><!-- /.Page-title -->

        <!-- Main-content -->
        <div class="main-content page-gallery">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wg-tabs">
                            <div class="widget-content-tab">
                                <div class="widget-content-inner active">
                                    <div class="wg-gallery">
                                        <?php
                                            $galleryDir = 'images/newagro_images_gallery';
                                            $galleryFiles = glob($galleryDir . '/*.{jpg,jpeg,png,webp,gif}', GLOB_BRACE);
                                            if ($galleryFiles) {
                                                natsort($galleryFiles);
                                                foreach ($galleryFiles as $index => $file) {
                                                    $name = pathinfo($file, PATHINFO_FILENAME);
                                                    $alt = ucfirst(str_replace(array('-', '_'), ' ', $name));
                                                    $delay = ($index % 3) * 0.1;
                                                    echo '<div class="gallery-item wow fadeInUp" data-wow-delay="' . $delay . 's">';
                                                    echo '  <div class="image">';
                                                    echo '      <img class="lazyload" src="' . $file . '" data-src="' . $file . '" alt="' . htmlspecialchars($alt, ENT_QUOTES) . '">';
                                                    echo '  </div>';
                                                    echo '  <a href="' . $file . '" class="add-gallery">+</a>';
                                                    echo '</div>';
                                                }
                                            } else {
                                                echo '<p class="text-center">No gallery images found yet.</p>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.Main-content -->

        <!-- Footer -->
        
<?php include 'overall/footer.php'; ?>




