<?php $this->load->view('front/includes/header') ?>


        <div id="content">


            <div id="page-title">


                <div class="container clearfix">

                    <h1>Contact Us<span>/ Get in Touch with us Today</span></h1>

                    <div id="top-search">

                        <form id="top-search-form" action="search-results.php" method="get">

                            <input type="text" id="top-search-input" name="q" value="" placeholder="Type &amp; Hit Enter" />

                        </form>

                    </div>

                </div>


            </div>


            <div class="content-wrap">


                <div class="container clearfix">


                    <div class="col_half entry_content nobottommargin">

                        <div style="height: 250px; margin-bottom: 30px;">

                            <div id="google-map" class="gmap"></div>

                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                            <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/jquery.gmap.js"></script>

                            <script type="text/javascript">

                                $('#google-map').gMap({

                                     address: 'Melbourne, Australia',
                                     maptype: 'ROADMAP',
                                     zoom: 14,
                                     markers: [
                                        {
                                            address: "Melbourne, Australia",
                                            html: '<div style="width: 250px;"><h3 style="padding-bottom: 8px;">Hi, we\'re <span>Envato</span></h3><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online.</p></div>'
                                        }
                                     ],
                                     doubleclickzoom: false,
                                     controls: {
                                         panControl: true,
                                         zoomControl: true,
                                         mapTypeControl: true,
                                         scaleControl: false,
                                         streetViewControl: false,
                                         overviewMapControl: false
                                     }

                                });

                            </script>

                        </div>

                        <div class="col_half"><div class="product-feature product-feature2"><span class="fa fa-map-marker"></span><h3>Our Headquarters</h3><p>13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</p></div></div>

                        <div class="col_half col_last"><div class="product-feature product-feature2"><span class="fa fa-phone"></span><h3>Call us Toll Free</h3><p>1800-CO-WORKER <br />1800-3322-4453</p></div></div>

                        <div class="clear"></div>

                        <div class="col_half nobottommargin"><div class="product-feature product-feature2"><span class="fa fa-envelope-o"></span><h3>Email Addresses</h3><p>info@coworker.com <br />sales@coworker.com</p></div></div>

                        <div class="col_half col_last nobottommargin"><div class="product-feature product-feature2"><span class="fa fa-question-circle"></span><h3>Need Support?</h3><p><a href="#">Support Center</a> <br /><a href="#">Our Forums</a></p></div></div>

                    </div>


                    <div class="col_half col_last nobottommargin">


                        <!-- ============================================
                            AJAX Contact Form
                        ============================================= -->
                        <div id="contact-form-container">

                            <h2>Send us an <span>Email</span></h2>

                            <div id="contact-form-result"></div>

                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="functions/sendemail_recaptcha.php" method="post">

                                <div class="col_half nobottommargin">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="required input-block-level" />
                                </div>

                                <div class="col_half nobottommargin col_last">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="text" id="template-contactform-email" name="template-contactform-email" value="" class="required email input-block-level" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_full nobottommargin">
                                    <label for="template-contactform-service">Services</label>
                                    <select id="template-contactform-service" name="template-contactform-service" class="input-block-level">
                                        <option value="">-- Select One --</option>
                                        <option value="Wordpress">Wordpress</option>
                                        <option value="PHP / MySQL">PHP / MySQL</option>
                                        <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                    </select>
                                </div>

                                <div class="col_full nobottommargin">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required input-block-level" />
                                </div>

                                <div class="col_full nobottommargin">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required input-block-level" id="template-contactform-message" name="template-contactform-message" rows="10" cols="30"></textarea>
                                </div>

                                <div class="col_full nobottommargin">

                                    <div id="recaptcha_widget" style="display:none" class="recaptcha_widget clearfix">

                                        <div class="col_half nobottommargin">

                                            <div id="recaptcha_image"></div>
                                    		<div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect. Please try again.</div>

                                        </div>

                                        <div class="col_half col_last nobottommargin">

                                    		<div class="recaptcha_input nomargin">
                                    			<label class="recaptcha_only_if_image nomargin" for="recaptcha_response_field">Enter the words:</label>
                                    			<label class="recaptcha_only_if_audio nomargin" for="recaptcha_response_field">Enter the numbers you hear:</label>

                                    			<input type="text" class="required input-block-level nomargin" id="recaptcha_response_field" name="recaptcha_response_field" />
                                    		</div>

                                    		<ul class="recaptcha_options">
                                    			<li>
                                    				<a href="javascript:Recaptcha.reload()">
                                    					<i class="fa fa-refresh"></i>
                                    					<span class="captcha_hide">Get another CAPTCHA</span>
                                    				</a>
                                    			</li>
                                    			<li class="recaptcha_only_if_image">
                                    				<a href="javascript:Recaptcha.switch_type('audio')">
                                    					<i class="fa fa-volume-up"></i><span class="captcha_hide"> Get an audio CAPTCHA</span>
                                    				</a>
                                    			</li>
                                    			<li class="recaptcha_only_if_audio">
                                    				<a href="javascript:Recaptcha.switch_type('image')">
                                    					<i class="fa fa-picture-o"></i><span class="captcha_hide"> Get an image CAPTCHA</span>
                                    				</a>
                                    			</li>
                                    			<li>
                                    				<a href="javascript:Recaptcha.showhelp()">
                                    					<i class="fa fa-question-circle"></i><span class="captcha_hide"> Help</span>
                                    				</a>
                                    			</li>
                                    		</ul>

                                        </div>

                                        <div class="clear"></div>

                                	</div>

                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="btn" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>

                            </form>

                        </div>

                        <script type="text/javascript">

                            var RecaptchaOptions = {
                        		theme : 'custom',
                        		custom_theme_widget: 'recaptcha_widget'
                        	};

                            $("#template-contactform").validate({
                        		submitHandler: function(form) {

                                    $(form).find('.btn').prepend('<i class="fa fa-spinner fa-spin"></i>').addClass('disabled').attr('disabled', 'disabled');

                        			$(form).ajaxSubmit({
                        				target: '#contact-form-result',
                                        success: function() {
                                            $("#template-contactform").fadeOut(500, function(){
                                                $('#contact-form-result').fadeIn(500);
                                            });
                                        },
                                        error: function() {
                                            $('#contact-form-result').fadeIn(500);
                                            $("#template-contactform").find('.btn').remove('<i class="fa fa-spinner fa-spin"></i>').removeClass('disabled').removeAttr('disabled');
                                        }
                        			});

                        		}
                        	});

                        </script>

                        <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6Ld3gd0SAAAAAD0SLMcKwJvVcUr-fvA7MRENZsXk"></script>

                    </div>


                </div>


            </div>


        </div>


<?php $this->load->view('front/includes/footer') ?>  
