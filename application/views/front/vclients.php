<?php $this->load->view('front/includes/header') ?>

        <div id="content">


            <div id="page-title">


                <div class="container clearfix">

                    <h1>Portfolio<span>/ 4 Columns</span></h1>

                    <div id="top-search">

                        <form id="top-search-form" action="search-results.php" method="get">

                            <input type="text" id="top-search-input" name="q" value="" placeholder="Type &amp; Hit Enter" />

                        </form>

                    </div>

                </div>


            </div>


            <div class="content-wrap">

                <div class="container clearfix">

                    <ul id="portfolio-filter" class="clearfix">

                        <li class="activeFilter"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                        <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                        <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                        <li><a href="#" data-filter=".pf-media">Media</a></li>
                        <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

                    </ul>

                    <div id="portfolio" class="clearfix">


                        <div class="portfolio-item pf-icons pf-media">

                            <div class="portfolio-image port-gallery">

                                <div class="fslider" data-animation="fade" data-pause="2500" data-speed="400">

                                    <div class="flexslider">

                                        <div class="slider-wrap">

                                            <div class="slide">

                                                <img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/1.jpg" alt="Gallery" />

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/1-2.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/1-2.jpg" alt="Gallery" /></a>

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/1-3.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/1-3.jpg" alt="Gallery" /></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="portfolio-overlay">

                                    <div class="p-overlay-icons clearfix" data-lightbox="gallery">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/1.jpg" class="p-o-gallery" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/1-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/1-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Cloud Icon"><a href="portfolio-single-gallery.php">Cloud Icon</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-uielements">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/2.jpg" alt="Grey UI Kit" title="Grey UI Kit" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">UI Elements</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/2.jpg" class="p-o-image" data-lightbox="image"></a>
                                        <a href="portfolio-single.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Grey UI Kit"><a href="portfolio-single.php">Grey UI Kit</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-illustrations">

                            <div class="portfolio-image port-gallery">

                                <div class="fslider" data-direction="vertical" data-easing="easeOutQuad" data-pause="3500">

                                    <div class="flexslider">

                                        <div class="slider-wrap">

                                            <div class="slide">

                                                <img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/3.jpg" alt="Gallery" />

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/3-2.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/3-2.jpg" alt="Gallery" /></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="portfolio-overlay">

                                    <div class="p-overlay-icons clearfix" data-lightbox="gallery">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/3.jpg" class="p-o-gallery" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/3-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Calendar Widget"><a href="portfolio-single-gallery.php">Calendar Widget</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-illustrations pf-graphics">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/4.jpg" alt="Apple Keyboard" title="Apple Keyboard" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">Graphics</a> &middot; <a href="#">Illustrations</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/4.jpg" class="p-o-image" data-lightbox="image"></a>
                                        <a href="portfolio-single.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Apple Keyboard"><a href="portfolio-single.php">Apple Keyboard</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-uielements">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/5.jpg" alt="Growl Notification" title="Growl Notification" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">UI Elements</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/5.jpg" class="p-o-image" data-lightbox="image"></a>
                                        <a href="portfolio-single.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Growl Notification"><a href="portfolio-single.php">Growl Notification</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-media pf-illustrations">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/6.jpg" alt="New Beard Video" title="New Beard Video" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">Media</a> &middot; <a href="#">Illustrations</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="http://vimeo.com/52386301" class="p-o-video" data-lightbox="iframe"></a>
                                        <a href="portfolio-single-video.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="New Beard Video"><a href="portfolio-single-video.php">New Beard Video</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-icons pf-graphics">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/7.jpg" alt="Minimal Chalkboard" title="Minimal Chalkboard" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">Icons</a> &middot; <a href="#">Graphics</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/7.jpg" class="p-o-image" data-lightbox="image"></a>
                                        <a href="portfolio-single.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Minimal Chalkboard"><a href="portfolio-single.php">Minimal Chalkboard</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-media">

                            <div class="portfolio-image port-gallery">

                                <div class="fslider" data-pause="3000" data-speed="350">

                                    <div class="flexslider">

                                        <div class="slider-wrap">

                                            <div class="slide">

                                                <img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/8.jpg" alt="Gallery" />

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/8-2.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/8-2.jpg" alt="Gallery" /></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="portfolio-overlay">

                                    <div class="p-overlay-icons clearfix" data-lightbox="gallery">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/8.jpg" class="p-o-gallery" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/8-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Dark Slider"><a href="portfolio-single-gallery.php">Dark Slider</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-media pf-uielements">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/9.jpg" alt="Textured Counter" title="Textured Counter" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">UI Elements</a> &middot; <a href="#">Media</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="http://vimeo.com/51276335" class="p-o-video" data-lightbox="iframe"></a>
                                        <a href="portfolio-single-video.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Textured Counter"><a href="portfolio-single-video.php">Textured Counter</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-uielements pf-illustrations">

                            <div class="portfolio-image port-gallery">

                                <div class="fslider" data-pause="2000" data-speed="600">

                                    <div class="flexslider">

                                        <div class="slider-wrap">

                                            <div class="slide">

                                                <img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/10.jpg" alt="Gallery" />

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/10-2.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/10-2.jpg" alt="Gallery" /></a>

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/10-3.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/10-3.jpg" alt="Gallery" /></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="portfolio-overlay">

                                    <div class="p-overlay-icons clearfix" data-lightbox="gallery">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/10.jpg" class="p-o-gallery" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/10-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/10-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Media Player UI"><a href="portfolio-single-gallery.php">Media Player UI</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-icons pf-media">

                            <div class="portfolio-image">

                                <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/11.jpg" alt="Twitter Interface" title="Twitter Interface" /></a>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-overlay-wrap">

                                        <p>Sed ut perspiciatis unde omnis iste natus voluptatem fringilla tempor dignissim at, pretium et arcu.</p>

                                        <span><span></span></span>

                                        <a href="#">Icons</a> &middot; <a href="#">Media</a>

                                    </div>

                                    <div class="p-overlay-icons clearfix">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/11.jpg" class="p-o-image" data-lightbox="image"></a>
                                        <a href="portfolio-single.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Twitter Interface"><a href="portfolio-single.php">Twitter Interface</a></h3>

                            </div>

                        </div>


                        <div class="portfolio-item pf-graphics pf-icons">

                            <div class="portfolio-image port-gallery">

                                <div class="fslider" data-animation="fade" data-pause="3500" data-speed="400">

                                    <div class="flexslider">

                                        <div class="slider-wrap">

                                            <div class="slide">

                                                <img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/12.jpg" alt="Gallery" />

                                            </div>

                                            <div class="slide">

                                                <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/12-2.jpg"><img src="<?= base_url() ?>assets/front_assets/images/portfolio/4/12-2.jpg" alt="Gallery" /></a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="portfolio-overlay">

                                    <div class="p-overlay-icons clearfix" data-lightbox="gallery">

                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/12.jpg" class="p-o-gallery" data-lightbox="gallery-item"></a>
                                        <a href="<?= base_url() ?>assets/front_assets/images/portfolio/full/12-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.php" class="p-o-link"></a>

                                    </div>

                                </div>

                            </div>

                            <div class="portfolio-title">

                                <h3 title="Clipboard Menu"><a href="portfolio-single-gallery.php">Clipboard Menu</a></h3>

                            </div>

                        </div>


                    </div>


                    <script type="text/javascript">

                        $(document).ready(function(){

                            var $container = $('#portfolio');

                            $container.isotope();

                            $('#portfolio-filter a').click(function(){

                                $('#portfolio-filter li').removeClass('activeFilter');
                                $(this).parent('li').addClass('activeFilter');
                                var selector = $(this).attr('data-filter');
                                $container.isotope({ filter: selector });
                                return false;

                            });

                            $(window).resize(function() {
                                $container.isotope('reLayout');
                            });

                        });

                    </script>


                </div>

            </div>


        </div>


<?php $this->load->view('front/includes/footer') ?>  
