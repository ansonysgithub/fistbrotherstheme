<!-- REGISTER SECTION START -->
<section class="register-section background-gradient ptb100" id="join-now">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                <div class="reg-wrapper">
                    <div class="title-bl text-left">
                        <div class="title color-white">
                            Register for our Newsletter now
                        </div>
                        <div class="subtitle">
                            Newslatter
                        </div>
                    </div>
                    <div class="color-white">
                        We are always ready to welcome you!
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="2s">

                <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="newsletter-form reg-form">
                    <input type="hidden" name="action" value="custom_form_submission">
                    <div class="reg_input">
                        <input type="text" placeholder="Enter your Email address here" name="email">
                    </div>
                    <button class="reg_submit">
                        <i class="fa fa-envelope color-1 fsize-14" aria-hidden="true"></i>
                    </button>
                </form>

                <div class="message wow fadeIn"></div>

            </div>
        </div>
    </div>
</section>
<!-- REGISTER SECTION END -->

<!-- FOOTER START -->
<footer class="footer">
    <div class="container">
        <div class="row mb110">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
                <ul class="footer-menu">
                    <li class="active">
                        <a href="index.html" tppabs="http://denysthemes.com/demos/html/indiega/pages/index.html">
                            Homepage
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Pages
                        </a>
                    </li>
                    <li>
                        <a href="gallery-masonry.html" tppabs="http://denysthemes.com/demos/html/indiega/pages/gallery-masonry.html">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="games.html" tppabs="http://denysthemes.com/demos/html/indiega/pages/games.html">
                            Games
                        </a>
                    </li>
                    <li>
                        <a href="blog-right.html" tppabs="http://denysthemes.com/demos/html/indiega/pages/blog-right.html">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="contacts.html" tppabs="http://denysthemes.com/demos/html/indiega/pages/contacts.html">
                            Contacts
                        </a>
                    </li>
                </ul>
                <div class="mt60">
                    Andouille landjaeger flank boudin. Jerky cupim alcatra sirloin porchetta,
                    <br /> turkey short ribs leberkas doner bacon pancetta buffalo.
                </div>
                <div class="social-content mt30">
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="social-list">
                        <a href="#">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="copyright ptb30 col-lg-12">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    © Copyright 2018
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                    All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<?php wp_footer(); ?>

<script>
    new WOW().init();
</script>

<script type="text/javascript">
    window.N2PRO = 1;
    window.N2GSAP = 1;
    window.N2PLATFORM = "wordpress";
    (function() {
        var N = this;
        N.N2_ = N.N2_ || {
            r: [],
            d: []
        }, N.N2R = N.N2R || function() {
            N.N2_.r.push(arguments)
        }, N.N2D = N.N2D || function() {
            N.N2_.d.push(arguments)
        }
    }).call(window);
    if (!window.n2jQuery) {
        window.n2jQuery = {
            ready: function(cb) {
                console.error('n2jQuery will be deprecated!');
                N2R(['$'], cb);
            }
        }
    }
    window.nextend = {
        localization: {},
        ready: function(cb) {
            console.error('nextend.ready will be deprecated!');
            N2R('documentReady', function($) {
                cb.call(window, $)
            })
        }
    };
    window.N2SSPRO = 1;
    window.N2SS3C = "smartslider3";
    nextend.fontsLoaded = false;
    nextend.fontsLoadedActive = function() {
        nextend.fontsLoaded = true;
    };
    var fontData = {
        google: {
            families: ["Roboto:300,400:latin"]
        },
        active: function() {
            nextend.fontsLoadedActive()
        },
        inactive: function() {
            nextend.fontsLoadedActive()
        }
    };
    if (typeof WebFontConfig !== 'undefined') {
        var _WebFontConfig = WebFontConfig;
        for (var k in WebFontConfig) {
            if (k == 'active') {
                fontData.active = function() {
                    nextend.fontsLoadedActive();
                    _WebFontConfig.active();
                }
            } else if (k == 'inactive') {
                fontData.inactive = function() {
                    nextend.fontsLoadedActive();
                    _WebFontConfig.inactive();
                }
            } else if (k == 'google') {
                if (typeof WebFontConfig.google.families !== 'undefined') {
                    for (var i = 0; i < WebFontConfig.google.families.length; i++) {
                        fontData.google.families.push(WebFontConfig.google.families[i]);
                    }
                }
            } else {
                fontData[k] = WebFontConfig[k];
            }
        }
    }
    if (typeof WebFont === 'undefined') {
        window.WebFontConfig = fontData;
    } else {
        WebFont.load(fontData);
    }
</script>

<script type="text/javascript">
    N2R('documentReady', function($) {

        nextend.fontsDeferred = $.Deferred();
        if (nextend.fontsLoaded) {
            nextend.fontsDeferred.resolve();
        } else {
            nextend.fontsLoadedActive = function() {
                nextend.fontsLoaded = true;
                nextend.fontsDeferred.resolve();
            };
            var intercalCounter = 0;
            nextend.fontInterval = setInterval(function() {
                if (intercalCounter > 3 || document.documentElement.className.indexOf('wf-active') !==
                    -1) {
                    nextend.fontsLoadedActive();
                    clearInterval(nextend.fontInterval);
                }
                intercalCounter++;
            }, 1000);
        }
    });
</script>

</body>

</html>