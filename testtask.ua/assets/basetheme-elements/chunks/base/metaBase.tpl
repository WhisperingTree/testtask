<!DOCTYPE html>
<html lang="[[++cultureKey]]">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# [[*class_key:is=`Ticket`:then=`article: http://ogp.me/ns/article#`:else=``]]">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]</title>
        <meta name="description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" />
        <base href="[[++site_url]]" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- MOBILE BLOCK -->
        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">

        <link rel="apple-touch-icon" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="76x76" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-ipad-retina.png">
        <link rel="apple-touch-icon" sizes="180x180" href="[[++basetheme.design_url]]images/iconsite/apple-touch-icon-iphone6plus-retina.png">

        <!-- Tile icon for Win8 -->
        <meta name="application-name" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta name="msapplication-TileColor" content="#79b316">
        <meta name="msapplication-square70x70logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square70x70logo.png"/>
        <meta name="msapplication-square150x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square150x150logo.png"/>
        <meta name="msapplication-wide310x150logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-wide310x150logo.png"/>
        <meta name="msapplication-square310x310logo" content="[[++basetheme.design_url]]images/iconsite/msapplication-square310x310logo.png"/>
        <!-- END MOBILE BLOCK -->

		<meta name="cmsmagazine" content="a39ef97fd1d4cf6d3e103f0ff48ea4f6" />

        <!-- SOCIAL BLOCK -->
        <meta property="og:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]" >
        <meta property="og:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]" >
        <meta property="og:url" content="[[~[[*id]]? &scheme=`full`]]" />

        <meta property="og:image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=1000&h=700`]]`:default=`[[++basetheme.design_url]]images/iconsite/social-image.png`]]" >
        <meta property="og:site_name" content="[[%lf_site_name:htmlent]]" />
        [[++social_allow_author:is=`1`:then=`
            [[*createdby:userinfo=`social_fb_url`:notempty=`<meta property="article:author" content="[[*createdby:userinfo=`social_fb_url`]]">`]]
        `:else=``]]

        [[*class_key:is=`Ticket`:then=`
            <meta property="og:type" content="article">
            [[++basetheme.social_fb_publisher:notempty=`<meta property="article:publisher" content="[[++basetheme.social_fb_publisher]]">`]]
            <meta property="article:published_time" content="[[*publishedon]]">
            <meta property="article:modified_time" content="[[*editedon]]">
            <meta property="article:section" content="[[*parent:pdofield]]">
        `:else=`
            <meta property="og:type" content="website" />
        `]]

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        [[++social_allow_author:is=`1`:then=`
            [[*createdby:userinfo=`social_twitter_login`:notempty=`<meta name="twitter:creator" content="[[*createdby:userinfo=`social_twitter_login`]]">`]]
        `:else=``]]
        [[++basetheme.social_twitter_site:notempty=`<meta name="twitter:site" content="[[++social_twitter_site]]">]]
        <meta name="twitter:title" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta name="twitter:description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]">
        <meta name="twitter:image:src" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=480&h=270&zc=1`]]`:default=`[[++basetheme.design_url]]images/iconsite/twitter-image.png`]]">

        <!-- Social: Google+ / Schema.org  -->
        [[++basetheme.social_google_publisher:notempty=`<link rel="publisher" href="[[++basetheme.social_google_publisher]]">]]
        <!-- END SOCIAL BLOCK -->

        <!-- Controlling DNS prefetching-->
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="dns-prefetch" href="http://code.jquery.com" />
        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://www.google-analytics.com" />

        <link rel="author" href="humans.txt" />
        <link rel="icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="[[++basetheme.design_url]]images/iconsite/favicon.ico" type="image/x-icon" />
        
        [[Molt?
            &cacheFolder=`[[++basetheme.design_url]]min/`
            &jsSources=`
                [[++basetheme.design_url]]js/jquery/plugins/jquery.imgpreload.js
                ,[[++basetheme.design_url]]js/jquery/plugins/jquery.form.js
                ,[[++basetheme.design_url]]js/jquery/plugins/validation/jquery.validate.js
                ,[[++basetheme.design_url]]js/jquery/plugins/xhrPool.js
				,[[++basetheme.design_url]]js/app/lib/site.js
				,[[++basetheme.design_url]]js/app/lib/siteMode.js
				,[[++basetheme.design_url]]js/app/mode/themeMode.js
                ,[[++basetheme.design_url]]js/app/modules/images.js
				,[[++basetheme.design_url]]js/app/modules/formContacts.js
                ,[[++basetheme.design_url]]js/init.js
            `
            &cssSources=`
				[[++basetheme.design_url]]css/style.css
            `
            &styleHeadSources=`
                [[++basetheme.design_url]]css/style-head.css
            `
            &jquery=`//code.jquery.com/jquery-1.11.3.min.js`
        ]]
        
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script>
            var designUrl = '[[++basetheme.design_url]]';
        </script>
    </head>
    <body itemscope itemtype="http://schema.org/[[*class_key:is=`Ticket`:then=`Article`:else=`WebSite`]]">
        <!-- Social: Google+ / Schema.org  -->
        <meta itemprop="name" content="[[*longtitle:htmlent:default=`[[*pagetitle:htmlent]] [[%lf_site_name:htmlent]]`]]">
        <meta itemprop="description" content="[[*description:htmlent:default=`[[%lf_description:htmlent]]`]]">
        <link itemprop="image" content="[[*img:notempty=`[[++site_url:replace=`/[[++cultureKey]]/==`]][[*img:phpthumbof=`w=1000&h=700`]]`:default=`[[++basetheme.design_url]]images/iconsite/social-image.png`]]">