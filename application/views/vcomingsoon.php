<!DOCTYPE html> 
<html dir="ltr" lang="en-US">

<head>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(e,t){return function(){o(e,[(new Date).getTime()].concat(a(arguments)),null,t)}}var o=e("handle"),i=e(2),a=e(3);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var u=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(u,function(e,t){newrelic[t]=r(f+t,"api")}),i(c,function(e,t){newrelic[t]=r(f+t)}),t.exports=newrelic,newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),o("err",[e,(new Date).getTime()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(0>o?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?u(e,a,i):i()}function n(n,r,o){e&&e(n,r,o);for(var i=t(o),a=l(n),u=a.length,c=0;u>c;c++)a[c].apply(i,r);var s=f[g[n]];return s&&s.push([m,n,r,i]),i}function p(e,t){w[e]=l(e).concat(t)}function l(e){return w[e]||[]}function d(e){return s[e]=s[e]||o(n)}function v(e,t){c(e,function(e,n){t=t||"feature",g[n]=t,t in f||(f[t]=[])})}var w={},g={},m={on:p,emit:n,get:d,listeners:l,context:t,buffer:v};return m}function i(){return new r}var a="nr@context",u=e("gos"),c=e(2),f={},s={},p=t.exports=o();p.backlog=f},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!w++){var e=v.info=NREUM.info,t=s.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&t){c(l,function(t,n){e[t]||(e[t]=n)});var n="https"===p.split(":")[0]||e.sslForHttp;v.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=v.proto+e.agent,t.parentNode.insertBefore(r,t)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=e("handle"),c=e(2),f=window,s=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},e(1);var p=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-943.min.js"},d=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),v=t.exports={offset:a(),origin:p,features:{},xhrWrappable:d};s.addEventListener?(s.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(s.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),u("mark",["firstbyte",a()],null,"api");var w=0},{}]},{},["loader"]);</script>
	<meta name="author" content="SemiColonWeb" />
	
    
    <!-- ============================================
        Stylesheets
    ============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Open+Sans:400,300,600,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/style.css" type="text/css" />
    <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?= base_url() ?>assets/front_assets/css/retina.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/colors.php" type="text/css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/tipsy.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/magnific-popup.css" type="text/css" />
    
	
    <link rel="stylesheet" href="<?= base_url() ?>assets/front_assets/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
	
	
    <!-- ============================================
        External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/plugins.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/front_assets/js/jquery.countdown.js"></script>
    
  
    
    <!-- ============================================
        Document Title
    ============================================= -->
	<title>Coming Soon | CoWorker</title>
    

</head>

<body>


    <div id="wrapper" class="clearfix">
    
    
        <div id="top-bar">
            
            <div class="container clearfix">
        
                <div id="top-menu">
                
                    <ul>
                    
                        <li><span>/</span><a href="index.php">Home</a></li>
                        <li><span>/</span><a href="#">EN <i class="fa fa-angle-down norightmargin"></i></a>

                            <ul>
                                <li><a href="#"><img src="<?= base_url() ?>assets/front_assets/images/icons/flags/id.png" alt="indonesia" title="bahasa" /> Indonesia</a></li>
                                
                            </ul>

                        </li>
                        <li><span>/</span><a href="contact.php">Contact</a></li>
                    
                    </ul>
                
                </div>
            
            
                <div id="top-social">
                
                    <ul>
                    
                        <li class="ts-facebook"><a href="#"><div class="ts-icon"></div><div class="ts-text">Facebook</div></a></li>
                        <li class="ts-twitter"><a href="#"><div class="ts-icon"></div><div class="ts-text">Twitter</div></a></li>
                        <li class="ts-gplus"><a href="#"><div class="ts-icon"></div><div class="ts-text">Google+</div></a></li>
                        <li class="ts-pinterest"><a href="#"><div class="ts-icon"></div><div class="ts-text">Pinterest</div></a></li>
                        <li class="ts-rss"><a href="#"><div class="ts-icon"></div><div class="ts-text">RSS</div></a></li>
                        <li class="ts-vimeo"><a href="#"><div class="ts-icon"></div><div class="ts-text">Vimeo</div></a></li>
                        <li class="ts-phone"><a href="#"><div class="ts-icon"></div><div class="ts-text">+62.271.7461975</div></a></li>
                        <li class="ts-mail"><a href="#"><div class="ts-icon"></div><div class="ts-text">indoterra@gmail.com</div></a></li>
                        
                    </ul>
                
                </div>
            
            </div>
        
        </div>
    
        
        <div id="header">
        
            
            <div class="container clearfix">
            
                
                <div id="logo">
                
                    <a href="index.php" class="standard-logo"><img src="<?= base_url() ?>assets/front_assets/images/logo4.png" alt="CoWorker" title="CoWorker" /></a>
                    <a href="index.php" class="retina-logo"><img src="<?= base_url() ?>assets/front_assets/images/logo@2x.png" alt="CoWorker" title="CoWorker" width="204" height="120" /></a>
                
                </div>
                
                
                <ul id="lp-contacts">
                
                
                    <li>
                    
                        <i class="fa fa-phone"></i>
                        Call Us
                        <span>+62.271.7461975</span>
                    
                    </li>
                    
                    
                    <li>
                    
                        <i class="fa fa-envelope-o"></i>
                        Email Us
                        <span>indoterra@gmail.com</span>
                    
                    </li>
                    
                
                </ul>
                
                
            </div>
    
       
        </div>
        
        
        <div id="content">
        
            
            <div id="countdown-wrap">
            
            
                <div class="container clearfix">
                
                    <h1>We're Currently <span>Under Construction</span> &amp; We'll be <span>LIVE</span> in</h1>
                    
                    <div id="countdown"></div>
                    
                    <script type="text/javascript">
                        
                        countDownDate = new Date( 2015, 0, 1 );
                    	jQuery('#countdown').countdown({until: countDownDate});
                    
                    </script>
                
                </div>
            
            
            </div>
        
            
            <div class="content-wrap">
            
            
                <div class="container clearfix">
                
                
                    <div class="lp-subscribe">
                    
                        <div id="subscribe-form-result"></div>
                        
                        <form id="comingsoon-subscribe" method="post" action="functions/mailchimp.php">
                    
                            <div class="lp-subscribe-input">
                                <input type="text" id="lp-subscribe-email" name="lp-subscribe-email" value="" placeholder="Enter your Email to get notified.." class="required email" />
                            </div>
                            
                            <div class="lp-subscribe-submit">
                                <input type="submit" id="lp-subscribe-email-submit" name="lp-subscribe-email-submit" value="Subscribe Now" />
                            </div>
                        
                        </form>
                    
                    </div>
                    
                    <script type="text/javascript">                            
                    
                        $("#comingsoon-subscribe").validate({
                            messages: {
                                'lp-subscribe-email': ''
                            },
                    		submitHandler: function(form) {
                    			
                                $(form).ajaxSubmit({
                    				target: '#subscribe-form-result',
                                    success: function() {
                                        $("#comingsoon-subscribe").fadeOut(500, function(){
                                            $('#subscribe-form-result').fadeIn(500);
                                        });
                                    },
                                    error: function() {
                                        $('#subscribe-form-result').fadeIn(500);
                                    }
                    			});
                                
                    		}
                    	});
                     
                    </script>
                
                
                </div>
            
            
            </div>
        
        
        </div>
        
        
        <div id="copyrights">
        
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


    <script type="text/javascript" src="js/custom.js"></script>




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

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"839484a19a","applicationID":"5289971","transactionName":"ZQEDZxZUD0FZVkxfX1xLNEENGglGVVkXVV9FCxNYAUdOUVdYUVhXQQsOXUpFCUI=","queueTime":0,"applicationTime":0,"atts":"SUYAEV5OHE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

</html>