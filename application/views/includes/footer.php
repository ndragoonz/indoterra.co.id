<div id="twitter-panel"></div>


        <div id="footer" class="footer-dark">
        
            
            <div class="container clearfix">
        
        
                <div class="footer-widgets-wrap clearfix">
                
                
                    <div class="col_one_fourth">
                    
                    
                        <div class="widget portfolio-widget clearfix">
                        
                        
                            <h4>About <span>Indoterra</span></h4>
                            
                            <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh.</p>
                            
                            <div style="background: url('<?= base_url() ?>assets/front_assets/images/world_map.png') no-repeat center center; height: 100px;">
                            
                                <ul style="font-size: 13px;" class="fa-ul">
                                
                                    <li><i class="fa fa-li fa-map-marker"></i>13/2 Elizabeth Street <br />Melbourne VIC 3000<br /> Australia</li>
                                    <li><i class="fa fa-li fa-phone"></i>+91-22-21144113</li>
                                    <li><i class="fa fa-li fa-envelope-o"></i>info@coworker.com</li>
                                
                                </ul>
                            
                            </div>
                        
                        
                        </div>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                    
                        <div id="linkcat-2" class="widget widget_links clearfix">
                        
                            <h4 class="widget-title">Blogroll</h4>
                        	
                            <ul class='xoxo blogroll'>
                                
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                        
                        	</ul>
                            
                        </div>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                    
                        <div id="flickr_widget-1" class="widget flickr-widget clearfix">
                        
                            <h4 class="widget-title">Flickr Photostream</h4>
                            
                            <div id="flickr_widget" class="flickrfeed" data-id="52617155@N08" data-count="9" data-type="user"></div>
                        
                        </div>
                    
                    
                    </div>
                    
                    
                    <div class="col_one_fourth">
                    
                    
                        <div class="widget clearfix">
                        
                            <h4>Quick Contact</h4>
                            
                            <div id="quick-contact-form-result"></div>
                            
                            <form id="quick-contact-form" name="quick-contact-form" action="" method="post" class="quick-contact-form nobottommargin">
                            
                            
                                <input type="text" class="required input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                
                                <input type="text" class="required email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                
                                <textarea class="required input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="30" cols="10" placeholder="Message"></textarea>
                                
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-default btn-sm nomargin" value="submit">Send Email</button>
                            
                            
                            </form>
                            
                            <script type="text/javascript">                            
                            
                                jQuery(document).ready(function($) {
                                
                                    $("#quick-contact-form").validate({
                                        messages: { 
                                            'quick-contact-form-name': '',
                                            'quick-contact-form-email': '',
                                            'quick-contact-form-message': ''
                                        },
                                		submitHandler: function(form) {
                                			
                                            $(form).find('.btn').prepend('<i class="fa fa-spinner fa-spin"></i>').addClass('disabled').attr('disabled', 'disabled');
                                            
                                			$(form).ajaxSubmit({
                                				target: '#quick-contact-form-result',
                                                success: function() {
                                                    $("#quick-contact-form").fadeOut(500, function(){
                                                        $('#quick-contact-form-result').fadeIn(500);
                                                    });
                                                },
                                                error: function() {
                                                    $('#quick-contact-form-result').fadeIn(500);
                                                    $("#quick-contact-form").find('.btn').remove('<i class="fa fa-spinner fa-spin"></i>').removeClass('disabled').removeAttr('disabled');
                                                }
                                			});
                                            
                                		}
                                	});
                                
                                });
                             
                            </script>
                                                                                    
                            
                        </div>
                    
                    
                    </div>
                
                
                </div>
            
            
            </div>
        
        
        </div>
        
        
        <div class="clear"></div>
        
        
        <div id="copyrights" class="copyrights-dark">
        
            <div class="container clearfix">
        
            
                <div class="col_half">
                
                    Copyrights &copy; 2013 &amp; All Rights Reserved by CoWorker Inc.
                
                </div>
                
                <div class="col_half col_last tright">
                
                    <a href="#">Privacy Policy</a><span class="link-divider">/</span><a href="#">Terms of Service</a><span class="link-divider">/</span><a href="#">FAQs</a>
                
                </div>
            
            
            </div>
        
        </div>


    </div>
    
    
    <div id="gotoTop" class="fa fa-angle-up"></div>


    <script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/custom.js"></script>




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23255544-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVV9FCxNYAUdOW1ZRXU4eQgwR","queueTime":0,"applicationTime":1,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

</html>