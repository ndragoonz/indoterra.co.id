<?php $this->load->view('includes/header') ?>
        <div id="content">
            <div id="page-title">
                <div class="container clearfix">
                    <h1>About Us<span>/ All you need to know about us</span></h1>
                    <div id="top-search">
                        <form id="top-search-form" action="search-results.php" method="get">
                            <input type="text" id="top-search-input" name="q" value="" placeholder="Type &amp; Hit Enter" />
                        </form>
                    </div>
                </div>
            </div>


            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_three_fifth">
                        <div class="fslider clearfix">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide">
                                        <img src="<?= base_url() ?>assets/front_assets/images/slider/10.jpg" alt="Slider 2" />
                                    </div>

                                    <div class="slide">
                                        <img src="<?= base_url() ?>assets/front_assets/images/slider/9.jpg" alt="Slider 3" />
                                    </div>

                                    <div class="slide">
                                        <img src="<?= base_url() ?>assets/front_assets/images/slider/11.jpg" alt="Slider 4" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col_two_fifth col_last">
                        <div class="accordion clearfix nobottommargin">
                            <div class="acctitle">Our Mission</div>
                            <div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                            <div class="acctitle">What we Do?</div>
                            <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                            <div class="acctitle">Our Company's Values</div>
                            <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                            <div class="acctitle">How to get Support?</div>
                            <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                            <div class="acctitle">Where can you find us?</div>
                            <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                            <div class="acctitle">Why you choose our Company?</div>
                            <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>
                        </div>
                    </div>


                    <div class="dotted-divider"></div>


                    <div class="col_two_fifth">
                        <h3>Our <span>Skills</span></h3>
                        <ul class="skills">
                            <li>
                                <span>Wordpress &middot; 80%</span>
                                <div class="progress">
                                  <div class="progress-bar" data-width="80"></div>
                                </div>
                            </li>

                            <li>
                                <span>HTML5 / CSS3 &middot; 90%</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success" data-width="90"></div>
                                </div>
                            </li>

                            <li>
                                <span>PHP &middot; 80%</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning" data-width="80"></div>
                                </div>
                            </li>

                            <li>
                                <span>MySQL &middot; 70%</span>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-danger" data-width="70"></div>
                                </div>

                            </li>
                        </ul>
                    </div>


                    <div class="col_three_fifth col_last">
                        <div class="tab_widget nobottommargin" id="tabwidget-1">
                            <ul class="tabs">
                                <li><a href="#tab-tab1" data-href="#tab-tab1"><i class="fa fa-star"></i> Our Mission</a></li>
                                <li><a href="#tab-tab2" data-href="#tab-tab2"><i class="fa fa-question-circle"></i> Get Support</a></li>
                                <li><a href="#tab-tab3" data-href="#tab-tab3"><i class="fa fa-map-marker"></i> Locate Us</a></li>
                            </ul>
                            <div class="tab_container">
                                <div id="tab-tab1" class="tab_content clearfix"><div class="dropcap">D</div><p>onec sed odio dui. Nulla <span class="highlight ntip" title="ToolTip Example">vitae elit</span> libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                                <p class="nobottommargin">Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue.Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus.</p></div>
                                <div id="tab-tab2" class="tab_content clearfix">Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                <div id="tab-tab3" class="tab_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            $(document).ready( function() {
                                tab_widget( '#tabwidget-1' );
                            });
                        </script>

                        <div class="clear"></div>
                    </div>

                    <div class="clear"></div>

                    <div class="promo clearfix" style="margin-top: 20px;">
                        <div class="promo-desc">
                            <h3>Call us today at <span>+91.22.57412541</span> or Email us at <span>support@coworker.com</span></h3>
                            <span>We strive to provide Our Customers with Top Notch Support to make their Theme Expertience Wonderful</span>
                        </div>

                        <div class="promo-action"><a href="#">Contact Us</a></div>
                    </div>

                    <div class="clear"></div>

                    <div class="col_one_third clearfix">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="images/staff/1.jpg" alt="Team Member" title="Team Member" />
                                <span>CEO, Director</span>
                            </div>

                            <div class="team-desc">
                                <h4>John Doe</h4>
                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh vehicula ut id elit.</p>
                                <div class="team-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/facebook.png" class="ntip" alt="Facebook" title="Facebook" /></a>
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/twitter.png" class="ntip" alt="Twitter" title="Twitter" /></a>
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/dribbble.png" class="ntip" alt="Dribbble" title="Dribbble" /></a>
                                </div>
                            </div>

                            <ul class="team-skills">
                                <li><span class="fa fa-check"></span>HTML5</li>
                                <li><span class="fa fa-check"></span>PHP</li>
                                <li><span class="fa fa-check"></span>AJAX</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col_one_third clearfix">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?= base_url() ?>assets/front_assets/images/staff/2.jpg" alt="Team Member" title="Team Member" />
                                <span>CFO, Finance Manager</span>
                            </div>

                            <div class="team-desc">
                                <h4>Jeremy Clarke</h4>
                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh vehicula ut id elit.</p>
                                <div class="team-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/facebook.png" class="ntip" alt="Facebook" title="Facebook" /></a>
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/twitter.png" class="ntip" alt="Twitter" title="Twitter" /></a>
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/forrst.png" class="ntip" alt="Forrst" title="Forrst" /></a>
                                </div>
                            </div>

                            <ul class="team-skills">
                                <li><span class="fa fa-check"></span>HTML5</li>
                                <li><span class="fa fa-check"></span>AJAX</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col_one_third col_last clearfix">
                        <div class="team-member">
                            <div class="team-image">
                                <img src="<?= base_url() ?>assets/front_assets/images/staff/3.jpg" alt="Team Member" title="Team Member" />
                                <span>Support Staff</span>
                            </div>
                            <div class="team-desc">
                                <h4>Ricky Ponting</h4>
                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh vehicula ut id elit.</p>
                                <div class="team-social">
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/facebook.png" class="ntip" alt="Facebook" title="Facebook" /></a>
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/flickr.png" class="ntip" alt="Flickr" title="Flickr" /></a>
                                    <a href="#"><img src="<?= base_url() ?>assets/front_assets/images/staff/social/forrst.png" class="ntip" alt="Forrst" title="Forrst" /></a>
                                </div>
                            </div>

                            <ul class="team-skills">
                                <li><span class="fa fa-check"></span>HTML5</li>
                                <li><span class="fa fa-check"></span>PHP</li>
                                <li><span class="fa fa-check"></span>CSS3</li>
                                <li><span class="fa fa-check"></span>AJAX</li>
                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div style="position: relative;">
                        <h4>Our <span>Clients</span></h4>
                         <ul id="clients-scroller" class="our-clients clearfix">
                            <li><a href="http://www.logospire.com/logos/3122"><img src="<?= base_url() ?>assets/front_assets/images/clients/3122.jpg" alt="Client 1" title="Client 1" /></a></li>
                            <li><a href="http://www.logospire.com/logos/4044"><img src="<?= base_url() ?>assets/front_assets/images/clients/4044.png" alt="Client 2" title="Client 2" /></a></li>
                            <li><a href="http://www.logospire.com/logos/4122"><img src="<?= base_url() ?>assets/front_assets/images/clients/4112.jpg" alt="Client 3" title="Client 3" /></a></li>
                            <li><a href="http://www.logospire.com/logos/4147"><img src="<?= base_url() ?>assets/front_assets/images/clients/4147.jpg" alt="Client 4" title="Client 4" /></a></li>
                            <li><a href="http://www.logospire.com/logos/4487"><img src="<?= base_url() ?>assets/front_assets/images/clients/4487.png" alt="Client 5" title="Client 5" /></a></li>
                            <li><a href="http://www.logospire.com/logos/4999"><img src="<?= base_url() ?>assets/front_assets/images/clients/4999.jpg" alt="Client 6" title="Client 6" /></a></li>
                            <li><a href="http://www.logospire.com/logos/5055"><img src="<?= base_url() ?>assets/front_assets/images/clients/5055.jpg" alt="Client 7" title="Client 7" /></a></li>
                            <li><a href="http://www.logospire.com/logos/5393"><img src="<?= base_url() ?>assets/front_assets/images/clients/5393.jpg" alt="Client 8" title="Client 8" /></a></li>
                            <li><a href="http://www.logospire.com/logos/5909"><img src="<?= base_url() ?>assets/front_assets/images/clients/5909.png" alt="Client 7" title="Client 7" /></a></li>
                            <li><a href="http://www.logospire.com/logos/6002"><img src="<?= base_url() ?>assets/front_assets/images/clients/6002.png" alt="Client 8" title="Client 8" /></a></li>
                        </ul>

                        <div class="widget-scroll-prev" id="ourclients_prev"></div>
                        <div class="widget-scroll-next" id="ourclients_next"></div>

                        <script type="text/javascript">
                            jQuery(document).ready(function($) {
                                var clientsCarousel = $("#clients-scroller");
                                clientsCarousel.carouFredSel({
                                    width : "100%",
                                    height : "auto",
                                    circular : false,
                                    responsive : true,
                                    infinite : false,
                                    auto : false,
                                    items : {
                                        width : 160,
                                        visible: {
                                            min: 1,
                                            max: 6
                                        }
                                    },
                                    scroll : {
                                        wipe : true
                                    },
                                    prev : {
                                        button : "#ourclients_prev",
                                        key : "left"
                                    },
                                    next : {
                                        button : "#ourclients_next",
                                        key : "right"
                                    },
                                    onCreate : function () {
                                        $(window).on('resize', function(){
                                            clientsCarousel.parent().add(clientsCarousel).css('height', clientsCarousel.children().first().outerHeight() + 'px');
                                        }).trigger('resize');
                                    }
                                });

                            });

                        </script>
                    </div>
                </div>
            </div>
        </div>


        <?php require_once 'includes/footer.php'; ?>
