<?php get_header() ?>

<?php

$args = array();

if (is_category()) {
    $category = get_queried_object();
    $category_id = $category->term_id;
    
    $args = array(
        "post_type" => array("post"),
        "cat" => $category_id
    );
} else {
    $args = array(
        "post_type" => array("post"),
    );
}

$posts = new WP_Query($args);

?>

<section class="main-slider">
    <div id="n2-ss-4-align" class="n2-ss-align">
        <div class="n2-padding">
            <div id="n2-ss-4" data-creator="Smart Slider 3" class="n2-ss-slider n2-ow n2-has-hover n2notransition n2-ss-load-fade " data-minFontSizedesktopPortrait="1" data-minFontSizedesktopLandscape="1" data-minFontSizetabletPortrait="1" data-minFontSizetabletLandscape="1" data-minFontSizemobilePortrait="1" data-minFontSizemobileLandscape="1" style="font-size: 16px;" data-fontsize="16">
                <div class="n2-ss-slider-1 n2-ss-swipe-element n2-ow">
                    <div class="n2-ss-slider-2 n2-ow">
                        <div class="n2-ss-slider-3 n2-ow">
                            <div class="n2-ss-slide-backgrounds"></div>
                            <?php
                            if (have_posts()) {
                                while ($posts->have_posts()) {
                                    $posts->the_post();

                            ?>
                                    <div data-first="1" data-slide-duration="0" data-id="15" class="n2-ss-slide n2-ss-canvas n2-ow n2-ss-slide-15">
                                        <div class="n2-ss-slide-background n2-ow" data-mode="fill">
                                            <img id="slider-image-background" data-blur="0" data-opacity="100" data-x="50" data-y="50" data-desktop="<?php the_post_thumbnail_url() ?>" src="<?php the_post_thumbnail_url() ?>" alt="" class="slide-background-image" />
                                        </div>
                                        <div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style="">
                                            <div class="n2-ss-layer n2-ow" style="overflow:visible;" data-csstextalign="inherit" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-pm="content" data-desktopportraitpadding="140|*|10|*|10|*|10|*|px+" data-desktopportraitinneralign="inherit" data-sstype="content" data-hasbackground="0" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="1" data-desktopportraitfontsize="100" data-plugin="rendered">
                                                <div class="n2-ss-section-main-content n2-ss-layer-content n2-ow" style="padding:8.75em 0.625em 0.625em 0.625em ;" data-verticalalign="center">
                                                    <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDMyXHUwNDM1XHUwNDQwXHUwNDQ1XHUwNDQzIiwib3BhY2l0eSI6MCwieSI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                        <div id="n2-ss-4item1" class="n2-font-be0a516f76efd05e36733289aaf2a6de-hover   n2-ow" style="display:block;">
                                                            <?php

                                                            the_category()

                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNiXHUwNDM1XHUwNDMyXHUwNDMwIiwiZGVsYXkiOjAuNSwib3BhY2l0eSI6MCwieCI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                        <div id="n2-ss-4item2" class="n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading   n2-ow" style="display:block;"><?php the_title() ?></div>
                                                    </div>

                                                    <div class="n2-ss-layer n2-ow" style="margin:2.5em 0em 0em 0em ;max-width: 955px;overflow:visible;" data-pm="normal" data-desktopportraitmargin="40|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="1" data-desktopportraitmaxwidth="955" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJCbHVyIiwiZGVsYXkiOjAuOCwib3BhY2l0eSI6MCwibjJibHVyIjoxMH1dfQ==" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="90" data-plugin="rendered">
                                                        <div class="n2-ow n2-ow-all n2-ss-desktop n2-ss-mobile n2-ss-tablet">
                                                            <p class="n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph n2-ow">
                                                                <?php the_excerpt() ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="n2-ss-layer n2-ow" data-pm="normal" data-desktopportraitmargin="50|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0NDNcdTA0NDVcdTA0MzBcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNkXHUwNDM4XHUwNDM3XHUwNDQzIiwiZGVsYXkiOjEsIm9wYWNpdHkiOjAsInkiOi00MDB9XX0=" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="100">
                                                        <div class="n2-ss-button-container n2-ow n2-font-06be61400c1a4b339e67534a8a262348-link n2-ss-nowrap">
                                                            <a class="n2-style-588404275f372121297e39cfe0b03e24-heading n2-ow" href="<?php the_permalink() ?>">
                                                                <div>
                                                                    <div>Read more</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?
                                }
                            }

                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div data-ssleft="0+100" data-sstop="height/2-bulletheight/2" data-offset="100" class="n2-ss-widget n2-ss-widget-display-desktop n2-ss-widget-display-tablet n2-ss-widget-display-mobile  n2-flex n2-ss-control-bullet n2-ss-control-bullet-vertical" style="position: absolute;">
                        <div class="n2-style-3e702635329eba6b6b98a2cfe62c4664-simple  nextend-bullet-bar n2-ow n2-bar-justify-content-center">
                            <div class="n2-ow n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot n2-font-7b5c9760d048f32382e5cebedacdf830-dot " tabindex="0">01</div>
                            <div class="n2-ow n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot n2-font-7b5c9760d048f32382e5cebedacdf830-dot " tabindex="0">02</div>
                            <div class="n2-ow n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot n2-font-7b5c9760d048f32382e5cebedacdf830-dot " tabindex="0">03</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="n2-clear"></div>
            <div id="n2-ss-4-spinner" style="display: none;">
                <div>
                    <div class="n2-ss-spinner-simple-white-container">
                        <div class="n2-ss-spinner-simple-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        N2R(["nextend-frontend", "smartslider-frontend", "nextend-gsap", "nextend-webfontloader",
            "smartslider-simple-type-frontend"
        ], function() {
            new N2Classes.SmartSliderSimple('#n2-ss-4', {
                "admin": false,
                "translate3d": 1,
                "callbacks": "",
                "background.video.mobile": 1,
                "randomize": {
                    "randomize": 0,
                    "randomizeFirst": 0
                },
                "align": "normal",
                "isDelayed": 0,
                "load": {
                    "fade": 1,
                    "scroll": 0
                },
                "playWhenVisible": 1,
                "playWhenVisibleAt": 0.5,
                "responsive": {
                    "desktop": 1,
                    "tablet": 1,
                    "mobile": 1,
                    "onResizeEnabled": true,
                    "type": "fullpage",
                    "downscale": 1,
                    "upscale": 1,
                    "minimumHeight": -1,
                    "maximumHeight": -1,
                    "maximumSlideWidth": 3000,
                    "maximumSlideWidthLandscape": 3000,
                    "maximumSlideWidthTablet": 3000,
                    "maximumSlideWidthTabletLandscape": 3000,
                    "maximumSlideWidthMobile": 3000,
                    "maximumSlideWidthMobileLandscape": 3000,
                    "maximumSlideWidthConstrainHeight": 0,
                    "forceFull": 1,
                    "forceFullOverflowX": "body",
                    "forceFullHorizontalSelector": "body",
                    "constrainRatio": 1,
                    "verticalOffsetSelectors": "#wpadminbar",
                    "decreaseSliderHeight": 0,
                    "focusUser": 0,
                    "focusAutoplay": 0,
                    "deviceModes": {
                        "desktopPortrait": 1,
                        "desktopLandscape": 0,
                        "tabletPortrait": 1,
                        "tabletLandscape": 0,
                        "mobilePortrait": 1,
                        "mobileLandscape": 0
                    },
                    "normalizedDeviceModes": {
                        "unknownUnknown": ["unknown", "Unknown"],
                        "desktopPortrait": ["desktop", "Portrait"],
                        "desktopLandscape": ["desktop", "Portrait"],
                        "tabletPortrait": ["tablet", "Portrait"],
                        "tabletLandscape": ["tablet", "Portrait"],
                        "mobilePortrait": ["mobile", "Portrait"],
                        "mobileLandscape": ["mobile", "Portrait"]
                    },
                    "verticalRatioModifiers": {
                        "unknownUnknown": 1,
                        "desktopPortrait": 1,
                        "desktopLandscape": 1,
                        "tabletPortrait": 1,
                        "tabletLandscape": 1,
                        "mobilePortrait": 1,
                        "mobileLandscape": 1
                    },
                    "minimumFontSizes": {
                        "desktopPortrait": 1,
                        "desktopLandscape": 1,
                        "tabletPortrait": 1,
                        "tabletLandscape": 1,
                        "mobilePortrait": 1,
                        "mobileLandscape": 1
                    },
                    "ratioToDevice": {
                        "Portrait": {
                            "tablet": 0.7,
                            "mobile": 0.5
                        },
                        "Landscape": {
                            "tablet": 0,
                            "mobile": 0
                        }
                    },
                    "sliderWidthToDevice": {
                        "desktopPortrait": 1200,
                        "desktopLandscape": 1200,
                        "tabletPortrait": 840,
                        "tabletLandscape": 0,
                        "mobilePortrait": 600,
                        "mobileLandscape": 0
                    },
                    "basedOn": "combined",
                    "orientationMode": "width_and_height",
                    "scrollFix": 0,
                    "overflowHiddenPage": 0,
                    "desktopPortraitScreenWidth": 1200,
                    "tabletPortraitScreenWidth": 800,
                    "mobilePortraitScreenWidth": 440,
                    "tabletLandscapeScreenWidth": 800,
                    "mobileLandscapeScreenWidth": 440
                },
                "controls": {
                    "scroll": 0,
                    "drag": 1,
                    "touch": "horizontal",
                    "keyboard": 1,
                    "tilt": 0
                },
                "lazyLoad": 0,
                "lazyLoadNeighbor": 0,
                "blockrightclick": 0,
                "maintainSession": 0,
                "autoplay": {
                    "enabled": 1,
                    "start": 1,
                    "duration": 8000,
                    "autoplayToSlide": -1,
                    "autoplayToSlideIndex": -1,
                    "allowReStart": 0,
                    "pause": {
                        "click": 1,
                        "mouse": "0",
                        "mediaStarted": 1
                    },
                    "resume": {
                        "click": 0,
                        "mouse": "0",
                        "mediaEnded": 1,
                        "slidechanged": 0
                    }
                },
                "perspective": 1000,
                "layerMode": {
                    "playOnce": 0,
                    "playFirstLayer": 1,
                    "mode": "skippable",
                    "inAnimation": "mainInEnd"
                },
                "parallax": {
                    "enabled": 1,
                    "mobile": 0,
                    "is3D": 0,
                    "animate": 1,
                    "horizontal": "mouse",
                    "vertical": "mouse",
                    "origin": "slider",
                    "scrollmove": "both"
                },
                "background.parallax.tablet": 0,
                "background.parallax.mobile": 0,
                "postBackgroundAnimations": 0,
                "initCallbacks": [
                    "N2D(\"SmartSliderWidgetBulletTransition\",function(t,i){function e(i,e){this.slider=i,this.slider.started(t.proxy(this.start,this,e))}return e.prototype.start=function(i){if(this.slider.sliderElement.data(\"bullet\"))return!1;this.slider.sliderElement.data(\"bullet\",this),this.axis=\"horizontal\",this.offset=0,this.parameters=i,this.bar=this.slider.sliderElement.find(\".nextend-bullet-bar\");var e=\"universalclick\";if(\"mouseenter\"==i.action&&(e=\"mouseenter\"),this.originalDots=this.dots=this.bar.find(\"div\").on(e,t.proxy(this.onDotClick,this)),this.slider.isShuffled){for(var s=[],o=[],a=0;this.slider.realSlides.length>a;a++){var r=this.slider.realSlides[a];s.push(this.dots.get(r.originalIndex)),o.push(this.parameters.thumbnails[r.originalIndex]),i.numeric&&this.dots.eq(r.originalIndex).html(a+1)}this.originalDots=this.dots=t(s).appendTo(this.dots.parent()),this.parameters.thumbnails=o}if(this.slider.sliderElement.on({slideCountChanged:t.proxy(this.onSlideCountChanged,this),sliderSwitchTo:t.proxy(this.onSlideSwitch,this)}),this.slider.firstSlideReady.done(t.proxy(this.onFirstSlideSet,this)),0==i.overlay){var n=!1;switch(i.area){case 1:n=\"Top\";break;case 12:n=\"Bottom\";break;case 5:n=\"Left\",this.axis=\"vertical\";break;case 8:n=\"Right\",this.axis=\"vertical\"}n&&(this.offset=parseFloat(this.bar.data(\"offset\")),this.slider.responsive.addStaticMargin(n,this))}this.initThumbnails()},e.prototype.onFirstSlideSet=function(t){this.dots.eq(t.index).addClass(\"n2-active\")},e.prototype.onDotClick=function(i){this.slider.directionalChangeToReal(this.originalDots.index(i.currentTarget)),t(i.target).blur()},e.prototype.onSlideSwitch=function(t,i){this.dots.filter(\".n2-active\").removeClass(\"n2-active\"),this.dots.eq(i).addClass(\"n2-active\")},e.prototype.isVisible=function(){return this.bar.is(\":visible\")},e.prototype.getSize=function(){return\"horizontal\"==this.axis?this.bar.height()+this.offset:this.bar.width()+this.offset},e.prototype.initThumbnails=function(){this.parameters.thumbnails.length>0&&this.dots.each(t.proxy(function(i,e){\"\"!=this.parameters.thumbnails[i]&&t(e).on({universalenter:t.proxy(this.showThumbnail,this,i)},{leaveOnSecond:!0})},this))},e.prototype.showThumbnail=function(i,e){var s=this.getThumbnail(i);NextendTween.to(s,.3,{opacity:1}).play(),this.originalDots.eq(i).on(\"universalleave.thumbnailleave\",t.proxy(this.hideThumbnail,this,i,s))},e.prototype.hideThumbnail=function(t,i,e){e.stopPropagation(),this.originalDots.eq(t).off(\"universalleave.thumbnailleave\"),NextendTween.to(i,.3,{opacity:0,onComplete:function(){i.remove()}}).play()},e.prototype.getThumbnail=function(i){var e=this.originalDots.eq(i),s=this.slider.sliderElement.offset(),o=e.offset(),a=e.outerWidth(),r=e.outerHeight(),n=t(\"<div\/>\").append(t(\"<div\/>\").css({width:this.parameters.thumbnailWidth,height:this.parameters.thumbnailHeight,backgroundImage:'url(\"'+this.parameters.thumbnails[i]+'\")'}).addClass(\"n2-ss-bullet-thumbnail\")).addClass(this.parameters.thumbnailStyle).addClass(\"n2-ss-bullet-thumbnail-container\").appendTo(this.slider.sliderElement);switch(this.parameters.thumbnailPosition){case\"right\":n.css({left:o.left-s.left+a,top:o.top-s.top+r\/2-n.outerHeight(!0)\/2});break;case\"left\":n.css({left:o.left-s.left-n.outerWidth(!0),top:o.top-s.top+r\/2-n.outerHeight(!0)\/2});break;case\"top\":n.css({left:o.left-s.left+a\/2-n.outerWidth(!0)\/2,top:o.top-s.top-n.outerHeight(!0)});break;case\"bottom\":n.css({left:o.left-s.left+a\/2-n.outerWidth(!0)\/2,top:o.top-s.top+r})}return e.data(\"thumbnail\",n),n},e.prototype.onSlideCountChanged=function(i,e,s){this.dots=t();for(var o=0;this.originalDots.length>o;o++)o%s==0?this.dots=this.dots.add(this.originalDots.eq(o).css(\"display\",\"\")):this.originalDots.eq(o).css(\"display\",\"none\");this.parameters.numeric&&this.dots.each(function(t,i){i.innerHTML=t+1})},e});",
                    "new N2Classes.SmartSliderWidgetBulletTransition(this, {\"overlay\":true,\"area\":6,\"thumbnails\":[],\"action\":\"click\",\"numeric\":1});"
                ],
                "allowBGImageAttachmentFixed": false,
                "bgAnimationsColor": "RGBA(51,51,51,1)",
                "bgAnimations": 0,
                "mainanimation": {
                    "type": "horizontal",
                    "duration": 800,
                    "delay": 0,
                    "ease": "easeOutQuad",
                    "parallax": 0,
                    "shiftedBackgroundAnimation": "auto"
                },
                "carousel": 1,
                "dynamicHeight": 0
            });
        });
    </script>
    <div id="n2-ss-4-placeholder" style="position: relative;z-index:2;color:RGBA(0,0,0,0);max-height:3000px;">
        <img style="width: 100%; max-width:3000px; display: block;" class="n2-ow" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMCIgd2lkdGg9IjEyMDAiIGhlaWdodD0iNTAwIiA+PC9zdmc+" alt="Slider" />
    </div>
</section>

<section class="blog-section pt150 pb85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Our latest Posts:
                    </div>
                    <div class="subtitle">
                        Fresh News
                    </div>
                </div>
                <div class="title-description mt25 fweight-300 text-center">
                    Welcome, gamers! Check out our website to find the latest and greatest in video game reviews, tips, and tricks. We've got content for everyone, so join us today and explore the world of gaming! Read our most recent posts to stay up to date and interact with other gamers. We look forward to hearing from you and sharing the gaming experience with you. Thanks for visiting!
                </div>
            </div>
        </div>
    </div>

    <div class="bg-wrapper each-element mt90 clearfix">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) {
                    while ($posts->have_posts()) {
                        $posts->the_post();

                        $categories = get_the_category();
                        $category_name = '';

                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                $category_name = $category->name;
                            }
                        }
                ?>
                        <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                            <a href="<?php the_permalink() ?>" class="item-wrap">
                                <div class="image">
                                    <img src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="" class="img-responsive">
                                </div>
                                <div class="item-info equal-height">
                                    <div class="item-header table fsize-14 fweight-700 uppercase">
                                        <div class="table-cell platform">
                                            <?php echo $category_name; ?>
                                        </div>
                                        <div class="table-cell color-2 text-right">
                                            <?php the_date(); ?>
                                        </div>
                                    </div>
                                    <div class="item-title mt20" data-trim="40"><?php the_title() ?> </div>
                                    <div class="item-text mt25 lheight-26" data-trim="130">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <div class="author-comment table">
                                    <div class="table-cell valign-middle">
                                        <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                        <span class="color-2 ml5">
                                            By <?php the_author(); ?>
                                        </span>
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                        <span class="color-2 ml5">
                                            <?php comments_number(); ?>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>