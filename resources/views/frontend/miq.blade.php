@extends('frontend.layouts.main')
@section('content')
<head>
  <link rel="stylesheet" href="{{ asset('frontend/css/style-miq.css') }}">
</head>


<link rel='dns-prefetch' href='//js.hs-scripts.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="stylesheet" href="https://www.wearemiq.com/wp-includes/css/dist/block-library/style.min.css?ver=6.0.3">
<style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }
</style>
<link rel="stylesheet" href="http://www.wearemiq.com/wp-content/plugins/search-filter/style.css?ver=1">
<link rel="stylesheet" href="https://www.wearemiq.com/wp-content/themes/miq2020/dist/css/style.css?ver=5612">
<link rel="stylesheet" href="https://www.wearemiq.com/wp-includes/css/dashicons.min.css?ver=6.0.3">
<style id='divi-builder-style-inline-inline-css' type='text/css'>
    #wp-admin-bar-et-use-visual-builder a:before {
        font-family: ETmodules !important;
        content: "\e625";
        font-size: 30px !important;
        width: 28px;
        margin-top: -3px;
        color: #974df3 !important
    }

    #wp-admin-bar-et-use-visual-builder:hover a:before {
        color: #fff !important
    }

    #wp-admin-bar-et-use-visual-builder:hover a,
    #wp-admin-bar-et-use-visual-builder a:hover {
        transition: background-color .5s ease;
        -webkit-transition: background-color .5s ease;
        -moz-transition: background-color .5s ease;
        background-color: #7e3bd0 !important;
        color: #fff !important
    }

    * html .clearfix,
    :first-child+html .clearfix {
        zoom: 1
    }

    .iphone .et_pb_section_video_bg video::-webkit-media-controls-start-playback-button {
        display: none !important;
        -webkit-appearance: none
    }

    .et_mobile_device .et_pb_section_parallax .et_pb_parallax_css {
        background-attachment: scroll
    }

    .et-social-facebook a.icon:before {
        content: "\e093"
    }

    .et-social-twitter a.icon:before {
        content: "\e094"
    }

    .et-social-google-plus a.icon:before {
        content: "\e096"
    }

    .et-social-instagram a.icon:before {
        content: "\e09a"
    }

    .et-social-rss a.icon:before {
        content: "\e09e"
    }

    .ai1ec-single-event:after {
        content: " ";
        display: table;
        clear: both
    }

    .evcal_event_details .evcal_evdata_cell .eventon_details_shading_bot.eventon_details_shading_bot {
        z-index: 3
    }

    .wp-block-divi-layout {
        margin-bottom: 1em
    }

    #et-boc .et-l {
        text-shadow: none
    }

    #et-boc .et-l .hentry,
    #et-boc .et-l a,
    #et-boc .et-l a:active,
    #et-boc .et-l blockquote,
    #et-boc .et-l div,
    #et-boc .et-l em,
    #et-boc .et-l form,
    #et-boc .et-l h1,
    #et-boc .et-l h2,
    #et-boc .et-l h3,
    #et-boc .et-l h4,
    #et-boc .et-l h5,
    #et-boc .et-l h6,
    #et-boc .et-l hr,
    #et-boc .et-l iframe,
    #et-boc .et-l img,
    #et-boc .et-l input,
    #et-boc .et-l label,
    #et-boc .et-l li,
    #et-boc .et-l object,
    #et-boc .et-l ol,
    #et-boc .et-l p,
    #et-boc .et-l span,
    #et-boc .et-l strong,
    #et-boc .et-l textarea,
    #et-boc .et-l ul,
    #et-boc .et-l video {
        text-align: inherit;
        margin: 0;
        padding: 0;
        border: none;
        outline: 0;
        vertical-align: baseline;
        background: transparent;
        letter-spacing: normal;
        color: inherit;
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        text-shadow: inherit;
        border-radius: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        transition: none
    }

    #et-boc .et-l h1,
    #et-boc .et-l h2,
    #et-boc .et-l h3,
    #et-boc .et-l h4,
    #et-boc .et-l h5,
    #et-boc .et-l h6 {
        line-height: 1em;
        padding-bottom: 10px;
        font-weight: 500;
        text-transform: none;
        font-style: normal
    }

    #et-boc .et-l ol,
    #et-boc .et-l ul {
        list-style: none;
        text-align: inherit
    }

    #et-boc .et-l ol li,
    #et-boc .et-l ul li {
        padding-left: 0;
        background: none;
        margin-left: 0
    }

    #et-boc .et-l blockquote {
        quotes: none
    }

    #et-boc .et-l blockquote:after,
    #et-boc .et-l blockquote:before {
        content: "";
        content: none
    }

    #et-boc .et-l :focus {
        outline: 0
    }

    #et-boc .et-l article,
    #et-boc .et-l aside,
    #et-boc .et-l footer,
    #et-boc .et-l header,
    #et-boc .et-l hgroup,
    #et-boc .et-l nav,
    #et-boc .et-l section {
        display: block
    }

    #et-boc .et-l input[type=email],
    #et-boc .et-l input[type=number],
    #et-boc .et-l input[type=password],
    #et-boc .et-l input[type=text] {
        height: 49px
    }

    #et-boc .et-l a {
        text-decoration: none !important
    }

    #et-boc .et-l p {
        padding-bottom: 1em;
        color: inherit !important
    }

    #et-boc .et-l p:last-of-type {
        padding-bottom: 0
    }

    #et-boc .et-l img {
        max-width: 100%;
        height: auto
    }

    #et-boc .et-l embed,
    #et-boc .et-l iframe,
    #et-boc .et-l object,
    #et-boc .et-l video {
        max-width: 100%
    }

    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget #searchform .input-group-btn,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .large-2,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .small-2,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search>form>.input-group>span.input-group-btn {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 5;
        width: 80px
    }

    .et-db #et-boc .et-l .et_pb_module a {
        color: #2ea3f2
    }

    .et-db #et-boc .et-l .et_pb_module .sticky h2,
    .et-db #et-boc .et-l .et_pb_module h2 a {
        color: inherit !important
    }

    .et-db #et-boc .et-l .et_pb_module input {
        margin: 0
    }

    .et-db #et-boc .et-l .et_pb_module .post-meta {
        position: relative
    }

    .et-db #et-boc .et-l .et_pb_bg_layout_dark a {
        color: #fff
    }

    .et-db #et-boc .et-l .et-pb-slider-arrows a:before,
    .et-db #et-boc .et-l .et_pb_video_play:before,
    .et-db #et-boc .et-l ul.et_pb_member_social_links a:before {
        color: inherit
    }

    .et-db #et-boc .et-l ul.et_pb_social_media_follow .et_pb_social_icon a.icon {
        top: auto;
        position: relative
    }

    .et-db #et-boc .et-l .clearfix {
        clear: none;
        display: inline;
        display: initial
    }

    .et-db #et-boc .et-l address.clearfix,
    .et-db #et-boc .et-l article.clearfix,
    .et-db #et-boc .et-l aside.clearfix,
    .et-db #et-boc .et-l blockquote.clearfix,
    .et-db #et-boc .et-l canvas.clearfix,
    .et-db #et-boc .et-l dd.clearfix,
    .et-db #et-boc .et-l div.clearfix,
    .et-db #et-boc .et-l dl.clearfix,
    .et-db #et-boc .et-l fieldset.clearfix,
    .et-db #et-boc .et-l figcaption.clearfix,
    .et-db #et-boc .et-l figure.clearfix,
    .et-db #et-boc .et-l footer.clearfix,
    .et-db #et-boc .et-l form.clearfix,
    .et-db #et-boc .et-l h1.clearfix,
    .et-db #et-boc .et-l h2.clearfix,
    .et-db #et-boc .et-l h3.clearfix,
    .et-db #et-boc .et-l h4.clearfix,
    .et-db #et-boc .et-l h5.clearfix,
    .et-db #et-boc .et-l h6.clearfix,
    .et-db #et-boc .et-l header.clearfix,
    .et-db #et-boc .et-l hgroup.clearfix,
    .et-db #et-boc .et-l hr.clearfix,
    .et-db #et-boc .et-l main.clearfix,
    .et-db #et-boc .et-l nav.clearfix,
    .et-db #et-boc .et-l noscript.clearfix,
    .et-db #et-boc .et-l ol.clearfix,
    .et-db #et-boc .et-l output.clearfix,
    .et-db #et-boc .et-l p.clearfix,
    .et-db #et-boc .et-l pre.clearfix,
    .et-db #et-boc .et-l section.clearfix,
    .et-db #et-boc .et-l table.clearfix,
    .et-db #et-boc .et-l tfoot.clearfix,
    .et-db #et-boc .et-l ul.clearfix,
    .et-db #et-boc .et-l video.clearfix {
        display: block
    }

    .et-db #et-boc .et-l .et_main_video_container *,
    .et-db #et-boc .et-l .et_pb_slide_video *,
    .et-db #et-boc .et-l .et_pb_video_box * {
        height: auto
    }

    .et-db #et-boc .et-l .et_main_video_container iframe,
    .et-db #et-boc .et-l .et_pb_slide_video iframe,
    .et-db #et-boc .et-l .et_pb_video_box iframe {
        height: 100%
    }

    .et-db #et-boc .et-l .et_pb_module ul {
        overflow: visible
    }

    .et-db #et-boc .et-l .et_pb_module ol,
    .et-db #et-boc .et-l .et_pb_module ul,
    ol .et-db #et-boc .et-l .et_pb_module,
    ul .et-db #et-boc .et-l .et_pb_module {
        background: transparent
    }

    .et-db #et-boc .et-l .et_pb_module h3 {
        display: block !important
    }

    .et-db #et-boc .et-l .et_pb_module img {
        max-width: 100%;
        margin: 0;
        border: none;
        padding: 0;
        background: none;
        border-radius: 0
    }

    .et-db #et-boc .et-l .et_pb_module img:hover {
        opacity: 1;
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_pb_module a:not(.wc-forward),
    .et-db #et-boc .et-l .et_pb_module h1 a,
    .et-db #et-boc .et-l .et_pb_module h2 a,
    .et-db #et-boc .et-l .et_pb_module h3 a,
    .et-db #et-boc .et-l .et_pb_module h4 a,
    .et-db #et-boc .et-l .et_pb_module h5 a,
    .et-db #et-boc .et-l .et_pb_module h6 a {
        line-height: 1em;
        padding-bottom: 10px;
        font-weight: 500;
        text-transform: none;
        font-style: normal
    }

    .et-db #et-boc .et-l .et_pb_module .entry-featured-image-url {
        padding-bottom: 0
    }

    .et-db #et-boc .et-l .et_pb_module blockquote {
        margin: 20px 0 30px;
        padding-left: 20px;
        border-left: 5px solid;
        border-color: #2ea3f2;
        font-style: normal
    }

    .et-db #et-boc .et-l .et_pb_module input[type=radio] {
        margin-right: 7px
    }

    .et-db #et-boc .et-l .et_pb_module input.text:not(.qty),
    .et-db #et-boc .et-l .et_pb_module input.title,
    .et-db #et-boc .et-l .et_pb_module input[type=email],
    .et-db #et-boc .et-l .et_pb_module input[type=password],
    .et-db #et-boc .et-l .et_pb_module input[type=tel],
    .et-db #et-boc .et-l .et_pb_module input[type=text],
    .et-db #et-boc .et-l .et_pb_module input select,
    .et-db #et-boc .et-l .et_pb_module input textarea {
        border: 1px solid #bbb;
        color: #4e4e4e;
        padding: 5px 10px;
        height: auto;
        width: auto
    }

    .et-db #et-boc .et-l .et_pb_module #email {
        width: 100%
    }

    .et-db #et-boc .et-l .et-pb-slider-arrows a {
        color: inherit
    }

    .et-db #et-boc .et-l .et_pb_post .post-meta a {
        color: inherit !important
    }

    .et-db #et-boc .et-l .et_pb_counter_amount_number {
        letter-spacing: inherit;
        text-decoration: inherit
    }

    .et-db #et-boc .et-l .et_pb_blurb img {
        width: inherit
    }

    .et-db #et-boc .et-l .comment-content *,
    .et-db #et-boc .et-l .et_pb_blurb_container,
    .et-db #et-boc .et-l .et_pb_blurb_container *,
    .et-db #et-boc .et-l .et_pb_blurb_content,
    .et-db #et-boc .et-l .et_pb_newsletter_button_text,
    .et-db #et-boc .et-l .et_pb_newsletter_description *,
    .et-db #et-boc .et-l .et_pb_promo_description,
    .et-db #et-boc .et-l .et_pb_promo_description * {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_image img {
        width: inherit
    }

    .et-db #et-boc .et-l .et_pb_image a {
        line-height: 0;
        padding-bottom: 0
    }

    .et-db #et-boc .et-l .et_pb_newsletter_description {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_newsletter_form p input {
        background-color: #fff !important;
        width: 100% !important
    }

    .et-db #et-boc .et-l .et_pb_text * {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et-db .et_pb_section {
        background-color: transparent
    }

    .et-db #et-boc .et-l .et_pb_section * {
        -webkit-font-smoothing: antialiased
    }

    .et-db #et-boc .et-l .pagination {
        width: 100%;
        clear: both
    }

    .et-db #et-boc .et-l .pagination:after,
    .et-db #et-boc .et-l .pagination:before {
        visibility: hidden
    }

    .et-db #et-boc .et-l .pagination a {
        width: auto;
        border: none;
        background: transparent
    }

    .et-db #et-boc .et-l .wp-pagenavi {
        text-align: right;
        border-top: 1px solid #e2e2e2;
        padding-top: 13px;
        clear: both;
        margin-bottom: 30px
    }

    .et-db #et-boc .et-l .wp-pagenavi a,
    .et-db #et-boc .et-l .wp-pagenavi span {
        color: #666;
        margin: 0 5px;
        text-decoration: none;
        font-size: 14px !important;
        font-weight: 400 !important;
        border: none !important
    }

    .et-db #et-boc .et-l .wp-pagenavi .nextpostslink,
    .et-db #et-boc .et-l .wp-pagenavi .previouspostslink {
        color: #999 !important
    }

    .et-db #et-boc .et-l .wp-pagenavi a:hover,
    .et-db #et-boc .et-l .wp-pagenavi span.current {
        color: #82c0c7 !important
    }

    .et-db #et-boc .et-l .nav-previous {
        float: left
    }

    .et-db #et-boc .et-l .nav-next {
        float: right
    }

    .et-db #et-boc .et-l article .et_pb_text_color_light,
    .et-db #et-boc .et-l article .et_pb_text_color_light a,
    .et-db #et-boc .et-l article .et_pb_text_color_light a:hover,
    .et-db #et-boc .et-l article .et_pb_text_color_light a:visited,
    .et-db #et-boc .et-l article .et_pb_text_color_light blockquote {
        color: #fff
    }

    .et-db #et-boc .et-l .et_pb_posts .et_pb_post {
        padding: 0;
        border-top: none;
        border-left: 0;
        border-right: 0;
        border-bottom: none;
        background: transparent;
        width: 100%;
        margin-top: 0
    }

    .et-db #et-boc .et-l .et_pb_posts .et_pb_post .entry-title a,
    .et-db #et-boc .et-l .et_pb_posts .et_pb_post .post-content,
    .et-db #et-boc .et-l .et_pb_posts .et_pb_post .post-content *,
    .et-db #et-boc .et-l .et_pb_posts .et_pb_post .post-meta a,
    .et-db #et-boc .et-l .et_pb_posts .et_pb_post .post-meta span {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_blog_grid blockquote:before,
    .et-db #et-boc .et-l .et_pb_posts blockquote:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_blog_grid a.more-link,
    .et-db #et-boc .et-l .et_pb_posts a.more-link {
        position: relative;
        color: inherit !important;
        font-size: inherit;
        background-color: transparent !important;
        float: none !important;
        padding: 0 !important;
        text-transform: none;
        line-height: normal;
        display: block;
        font-family: inherit;
        bottom: auto;
        right: auto
    }

    .et-db #et-boc .et-l .et_pb_blog_grid .column {
        width: 100%;
        margin: 0
    }

    .et-db #et-boc .et-l .et_pb_blog_grid .et_pb_post {
        padding: 19px !important;
        background-image: none !important;
        float: none;
        width: 100%;
        margin-top: 0
    }

    .et-db #et-boc .et-l .et_pb_blog_grid .et_pb_image_container {
        max-width: none
    }

    .et-db #et-boc .et-l .et_pb_blog_grid_wrapper .et_pb_blog_grid article {
        border-bottom: 1px solid #ddd !important
    }

    .et-db #et-boc .et-l .et_pb_grid_item.entry {
        padding: 0
    }

    .et-db #et-boc .et-l .et_pb_module ul,
    .et-db #et-boc .et-l ul.et_pb_module {
        margin: 0
    }

    .et-db #et-boc .et-l .et_pb_module li {
        list-style: none
    }

    .et-db #et-boc .et-l .et_pb_module a,
    .et-db #et-boc .et-l .et_pb_module a:hover {
        text-decoration: none
    }

    .et-db #et-boc .et-l .et_pb_module h1,
    .et-db #et-boc .et-l .et_pb_module h2,
    .et-db #et-boc .et-l .et_pb_module h3,
    .et-db #et-boc .et-l .et_pb_module h4,
    .et-db #et-boc .et-l .et_pb_module h5,
    .et-db #et-boc .et-l .et_pb_module h6 {
        margin: 0;
        text-align: inherit
    }

    .et-db #et-boc .et-l .et_pb_module .column {
        padding: 0
    }

    .et-db #et-boc .et-l .et_pb_module p {
        margin: 0;
        text-align: inherit
    }

    .et-db #et-boc .et-l .et_pb_module a:focus {
        outline: none
    }

    .et-db #et-boc .et-l .et_pb_module img {
        display: inline
    }

    .et-db #et-boc .et-l .et_pb_module span.percent-value {
        font-size: inherit;
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_module .hentry {
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_pb_blurb_content ol,
    .et-db #et-boc .et-l .et_pb_blurb_content ul,
    .et-db #et-boc .et-l .et_pb_code ol,
    .et-db #et-boc .et-l .et_pb_code ul,
    .et-db #et-boc .et-l .et_pb_fullwidth_header .header-content ol,
    .et-db #et-boc .et-l .et_pb_fullwidth_header .header-content ul,
    .et-db #et-boc .et-l .et_pb_newsletter_description_content ol,
    .et-db #et-boc .et-l .et_pb_newsletter_description_content ul,
    .et-db #et-boc .et-l .et_pb_promo_description ol,
    .et-db #et-boc .et-l .et_pb_promo_description ul,
    .et-db #et-boc .et-l .et_pb_slide_content ol,
    .et-db #et-boc .et-l .et_pb_slide_content ul,
    .et-db #et-boc .et-l .et_pb_tab ol,
    .et-db #et-boc .et-l .et_pb_tab ul,
    .et-db #et-boc .et-l .et_pb_team_member_description ol,
    .et-db #et-boc .et-l .et_pb_team_member_description ul,
    .et-db #et-boc .et-l .et_pb_testimonial_description_inner ol,
    .et-db #et-boc .et-l .et_pb_testimonial_description_inner ul,
    .et-db #et-boc .et-l .et_pb_text ol,
    .et-db #et-boc .et-l .et_pb_text ul,
    .et-db #et-boc .et-l .et_pb_toggle_content ol,
    .et-db #et-boc .et-l .et_pb_toggle_content ul {
        margin-top: 15px;
        margin-bottom: 15px;
        margin-left: 25px
    }

    .et-db #et-boc .et-l .et_pb_blurb_content ul li,
    .et-db #et-boc .et-l .et_pb_code ul li,
    .et-db #et-boc .et-l .et_pb_fullwidth_header .header-content ul li,
    .et-db #et-boc .et-l .et_pb_newsletter_description_content ul li,
    .et-db #et-boc .et-l .et_pb_promo_description ul li,
    .et-db #et-boc .et-l .et_pb_slide_content ul li,
    .et-db #et-boc .et-l .et_pb_tab ul li,
    .et-db #et-boc .et-l .et_pb_team_member_description ul li,
    .et-db #et-boc .et-l .et_pb_testimonial_description_inner ul li,
    .et-db #et-boc .et-l .et_pb_text ul li,
    .et-db #et-boc .et-l .et_pb_toggle_content ul li {
        list-style: disc
    }

    .et-db #et-boc .et-l .et_pb_blurb_content ol li,
    .et-db #et-boc .et-l .et_pb_code ol li,
    .et-db #et-boc .et-l .et_pb_fullwidth_header .header-content ol li,
    .et-db #et-boc .et-l .et_pb_newsletter_description_content ol li,
    .et-db #et-boc .et-l .et_pb_promo_description ol li,
    .et-db #et-boc .et-l .et_pb_slide_content ol li,
    .et-db #et-boc .et-l .et_pb_tab ol li,
    .et-db #et-boc .et-l .et_pb_team_member_description ol li,
    .et-db #et-boc .et-l .et_pb_testimonial_description_inner ol li,
    .et-db #et-boc .et-l .et_pb_text ol li,
    .et-db #et-boc .et-l .et_pb_toggle_content ol li {
        list-style: decimal
    }

    .et-db #et-boc .et-l .et_pb_section {
        margin-bottom: 0
    }

    .et-db #et-boc .et-l .widget .widget-title,
    .et-db #et-boc .et-l .widget a {
        color: inherit
    }

    .et-db #et-boc .et-l span.et_portfolio_image {
        position: relative;
        display: block
    }

    .et-db #et-boc .et-l span.et_portfolio_image img {
        display: block
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-time.mejs-currenttime-container.custom {
        line-height: 18px
    }

    .et-db #et-boc .et-l hr.et_pb_module {
        background-color: transparent;
        background-image: none;
        margin: 0;
        padding: 0
    }

    .et-db #et-boc .et-l .et-pb-slider-arrows a,
    .et-db #et-boc .et-l .et_pb_blurb_container h4 a,
    .et-db #et-boc .et-l .et_pb_module .post-meta a,
    .et-db #et-boc .et-l .et_pb_module h2 a,
    .et-db #et-boc .et-l .et_pb_module li a,
    .et-db #et-boc .et-l .et_pb_portfolio_item a,
    .et-db #et-boc .et-l .et_pb_testimonial_meta a {
        border-bottom: none
    }

    .et-db #et-boc .et-l .et_pb_portfolio_filter a {
        letter-spacing: inherit;
        line-height: inherit
    }

    .et-db #et-boc .et-l .et_pb_portfolio img {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio.et_pb_filterable_portfolio_grid .hentry,
    .et-db #et-boc .et-l .et_pb_fullwidth_portfolio .hentry,
    .et-db #et-boc .et-l .et_pb_portfolio_grid .hentry {
        padding: 0;
        border: none;
        clear: none
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio .hentry:after,
    .et-db #et-boc .et-l .et_pb_fullwidth_portfolio .hentry:after,
    .et-db #et-boc .et-l .et_pb_portfolio .hentry:after,
    .et-db #et-boc .et-l .et_pb_portfolio_grid .hentry:after {
        background: transparent
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio_grid .et_pb_portfolio_item h2 {
        font-size: 26px
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio .et_pb_portfolio_filter a {
        max-width: none
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio .et_pb_portfolio_filter li {
        color: #666
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio .et_pb_portfolio_filter li a {
        color: inherit !important
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio .et_pb_portfolio_filter li a:hover {
        color: #666 !important
    }

    .et-db #et-boc .et-l .et_pb_filterable_portfolio h2 a {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_portfolio_filters li a.active {
        color: #82c0c7 !important
    }

    .et-db #et-boc .et-l .et_pb_module .hentry.has-post-thumbnail:first-child {
        margin-top: 0
    }

    .et-db #et-boc .et-l .et_pb_portfolio_items .hentry,
    .et-db #et-boc .et-l .format-quote.hentry {
        padding: 0
    }

    .et-db #et-boc .et-l .et-bg-layout-dark {
        text-shadow: none;
        color: inherit
    }

    .et-db #et-boc .et-l .et_pb_slide_image img {
        margin: 0
    }

    .et-db #et-boc .et-l .et_pb_slide_description h2 {
        line-height: 1em;
        padding-bottom: 10px
    }

    .et-db #et-boc .et-l .et_pb_slider .mejs-offscreen {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_slide_content * {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_countdown_timer .section {
        width: auto
    }

    .et-db #et-boc .et-l .et_pb_widget_area {
        max-width: 100%
    }

    .et-db #et-boc .et-l .et_pb_widget_area #searchform,
    .et-db #et-boc .et-l .et_pb_widget_area #searchform #s,
    .et-db #et-boc .et-l .et_pb_widget_area *,
    .et-db #et-boc .et-l .et_pb_widget_area input.search-field {
        max-width: 100%;
        word-wrap: break-word;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget {
        border: none;
        background: transparent;
        padding: 0;
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget:after {
        background: transparent
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget-title {
        border-bottom: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area>.widget-title:not(:first-child) {
        margin-top: 30px
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget-title,
    .et-db #et-boc .et-l .et_pb_widget_area h1:first-of-type,
    .et-db #et-boc .et-l .et_pb_widget_area h2:first-of-type,
    .et-db #et-boc .et-l .et_pb_widget_area h3:first-of-type,
    .et-db #et-boc .et-l .et_pb_widget_area h4:first-of-type,
    .et-db #et-boc .et-l .et_pb_widget_area h5:first-of-type,
    .et-db #et-boc .et-l .et_pb_widget_area h6:first-of-type {
        font-weight: 500;
        font-style: normal
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget-title:before,
    .et-db #et-boc .et-l .et_pb_widget_area h1:first-of-type:before,
    .et-db #et-boc .et-l .et_pb_widget_area h2:first-of-type:before,
    .et-db #et-boc .et-l .et_pb_widget_area h3:first-of-type:before,
    .et-db #et-boc .et-l .et_pb_widget_area h4:first-of-type:before,
    .et-db #et-boc .et-l .et_pb_widget_area h5:first-of-type:before,
    .et-db #et-boc .et-l .et_pb_widget_area h6:first-of-type:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widgettitle {
        font-size: 18px;
        padding-bottom: 10px
    }

    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget,
    .et-db #et-boc .et-l .et_pb_widget_area .fwidget,
    .et-db #et-boc .et-l .et_pb_widget_area .sb-widget,
    .et-db #et-boc .et-l .et_pb_widget_area .widget,
    .et-db #et-boc .et-l .et_pb_widget_area .widget-box,
    .et-db #et-boc .et-l .et_pb_widget_area .widget-container,
    .et-db #et-boc .et-l .et_pb_widget_area .widget-wrapper {
        margin-top: 0;
        margin-bottom: 30px;
        color: inherit
    }

    .et-db #et-boc .et-l .et_pb_widget_area ul li {
        margin-top: .25em;
        margin-bottom: .25em;
        background: none;
        margin-left: 0
    }

    .et-db #et-boc .et-l .et_pb_widget_area ul li:after,
    .et-db #et-boc .et-l .et_pb_widget_area ul li:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area ul ul {
        border-top: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area ul ul li {
        margin-top: 5px;
        margin-left: 15px
    }

    .et-db #et-boc .et-l .et_pb_widget_area ul ul li:last-child {
        border-bottom: none;
        margin-bottom: 0
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widgettitle:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area select {
        margin-right: 0;
        margin-left: 0;
        width: auto
    }

    .et-db #et-boc .et-l .et_pb_widget_area img {
        max-width: 100% !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget ul li a {
        display: inline-block;
        margin-left: 0;
        padding-left: 0
    }

    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget ul ul li:last-child {
        padding-bottom: 0
    }

    .et-db #et-boc .et-l .et_pb_widget_area #searchform,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search form {
        position: relative;
        padding: 0;
        background: none;
        margin-top: 0;
        margin-left: 0;
        margin-right: 0;
        display: block;
        width: 100%;
        height: auto;
        border: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area #searchform input[type=text],
    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget #searchform input[type=text],
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .search-field,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search input[type=search],
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search input[type=text] {
        position: relative;
        margin: 0;
        padding: .7em 90px .7em .7em !important;
        min-width: 0;
        width: 100% !important;
        height: 40px !important;
        font-size: 14px;
        line-height: normal;
        border: 1px solid #ddd !important;
        color: #666;
        border-radius: 3px !important;
        display: block;
        background: #fff !important;
        background-image: none !important;
        box-shadow: none !important;
        float: none !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .et-narrow-wrapper #searchform input[type=text] {
        padding-right: .7em !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area #searchform input[type=submit],
    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget #searchform button {
        background-color: #ddd !important;
        font-size: 14px;
        text-transform: none !important;
        padding: 0 .7em !important;
        min-width: 0;
        width: 80px !important;
        height: 40px !important;
        -webkit-border-top-right-radius: 3px !important;
        -webkit-border-bottom-right-radius: 3px !important;
        -moz-border-radius-topright: 3px !important;
        -moz-border-radius-bottomright: 3px;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        position: absolute !important;
        left: auto;
        right: 0 !important;
        top: 0 !important;
        display: inline-block !important;
        clip: auto;
        text-align: center;
        box-shadow: none !important;
        cursor: pointer;
        color: #666 !important;
        text-indent: 0 !important;
        background-image: none !important;
        border: none !important;
        margin: 0 !important;
        float: none !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .et-narrow-wrapper #searchform input[type=submit],
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .search-submit,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search button,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search form.searchform>button,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search input[type=submit] {
        position: relative !important;
        margin-top: 1em !important;
        -webkit-border-top-left-radius: 3px !important;
        -webkit-border-bottom-left-radius: 3px !important;
        -moz-border-radius-topleft: 3px !important;
        -moz-border-radius-bottomleft: 3px;
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .themeform.searchform div:after,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search form:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .input-group,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search fieldset,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search label {
        display: block;
        max-width: 100% !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-narrow-wrapper input[type=search],
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-narrow-wrapper input[type=text],
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-no-submit-button input[type=search],
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-no-submit-button input[type=text] {
        padding-right: .7em !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .search-submit:hover,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search input[type=submit]:hover {
        background: #ddd
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search button.search-submit .screen-reader-text {
        display: inline-block;
        clip: auto;
        width: auto;
        height: auto;
        position: relative !important;
        line-height: normal;
        color: #666
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search button.search-submit:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search form.form-search .input-group-btn,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search form.searchform #search-button-box {
        position: absolute;
        top: 0;
        right: 0;
        width: 80px;
        height: 40px;
        z-index: 12
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-narrow-wrapper form.form-search .input-group-btn,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-narrow-wrapper form.searchform #search-button-box,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-no-submit-button form.form-search .input-group-btn,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-no-submit-button form.searchform #search-button-box {
        position: relative !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .seach_section fieldset {
        padding: 0;
        margin: 0
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .seach_section fieldset .searchsub,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .seach_section fieldset .searchtext {
        padding: 0;
        background: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .assistive-text,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search>form>div>.screen-reader-text[for=s] {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .enigma_sidebar_widget .input-group {
        display: block
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-narrow-wrapper>form>.input-group>span.input-group-btn,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search.et-no-submit-button>form>.input-group>span.input-group-btn {
        position: relative !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search table.searchform td.searchfield {
        width: auto;
        border: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search table.searchform td.searchbutton {
        border: none;
        background: transparent
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .large-10,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_search .small-10 {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search div.search-field {
        border: none !important;
        padding: 0 !important
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_search #searchform:after {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_widget_area .enigma_sidebar_widget .input-group {
        display: block
    }

    .et-db #et-boc .et-l .et_pb_widget_area #calendar_wrap {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_widget_area #wp-calendar,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_calendar table {
        table-layout: fixed;
        width: 100%;
        margin: 0
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_calendar table td,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_calendar table th {
        background: transparent
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_nav_menu ul,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_nav_menu ul li {
        display: block
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_nav_menu .menu {
        font-family: inherit
    }

    .et-db #et-boc .et-l .et_pb_widget_area .widget_nav_menu .menu-item-has-children>a:after,
    .et-db #et-boc .et-l .et_pb_widget_area .widget_nav_menu .menu li>ul:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_newsletter input#email {
        float: none;
        max-width: 100%
    }

    .et-db #et-boc .et-l .et_pb_newsletter_form input {
        outline: none !important;
        box-shadow: none !important
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_header .et_pb_fullwidth_header_container {
        float: none
    }

    .et-db #et-boc .et-l .et_quote_content blockquote {
        background-color: transparent !important
    }

    .et-db #et-boc .et-l .et_pb_bg_layout_dark .widget,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h1 a,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h2 a,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h3 a,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h4 a,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h5 a,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h6 a {
        color: inherit !important
    }

    .et-db #et-boc .et-l .et-menu-nav {
        padding: 0 5px;
        margin-bottom: 0;
        overflow: visible !important;
        background: transparent;
        border: none
    }

    .et-db #et-boc .et-l .et-menu a {
        padding-top: 0;
        color: inherit !important;
        background: transparent;
        text-decoration: inherit !important
    }

    .et-db #et-boc .et-l .et-menu a:hover {
        background: inherit
    }

    .et-db #et-boc .et-l .et-menu.nav li,
    .et-db #et-boc .et-l .et-menu.nav li a {
        float: none
    }

    .et-db #et-boc .et-l .et-menu.nav li ul {
        display: block;
        border-radius: 0;
        border-left: none;
        border-right: none;
        border-bottom: none
    }

    .et-db #et-boc .et-l .et-menu.nav li li {
        padding: 0 20px !important;
        border-bottom: none;
        background: inherit
    }

    .et-db #et-boc .et-l .et-menu.nav li li a {
        padding: 6px 20px !important;
        border: none
    }

    .et-db #et-boc .et-l .et-menu.nav>li>ul {
        top: auto
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_menu .mobile_nav,
    .et-db #et-boc .et-l .et_pb_menu .mobile_nav {
        display: block
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_menu .mobile_nav>span,
    .et-db #et-boc .et-l .et_pb_menu .mobile_nav>span {
        width: auto;
        height: auto;
        top: auto;
        right: auto
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_menu .mobile_nav.opened>span,
    .et-db #et-boc .et-l .et_pb_menu .mobile_nav.opened>span {
        transform: none
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_menu .et_mobile_menu li>a,
    .et-db #et-boc .et-l .et_pb_menu .et_mobile_menu li>a {
        color: inherit !important;
        background: none;
        width: 100%;
        padding: 10px 5% !important
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_menu .et_mobile_menu>.menu-item-has-children>a,
    .et-db #et-boc .et-l .et_pb_menu .et_mobile_menu>.menu-item-has-children>a {
        background-color: rgba(0, 0, 0, .03)
    }

    .et-db #et-boc .et-l .et_pb_fullwidth_menu .et_mobile_menu li li,
    .et-db #et-boc .et-l .et_pb_menu .et_mobile_menu li li {
        padding-left: 5% !important
    }

    .et-db #et-boc .et-l ul.et_pb_member_social_links {
        margin-top: 20px
    }

    .et-db #et-boc .et-l .mejs-container,
    .et-db #et-boc .et-l .mejs-container .mejs-controls,
    .et-db #et-boc .et-l .mejs-embed,
    .et-db #et-boc .et-l .mejs-embed body {
        background: #222
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total,
    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-total {
        background: hsla(0, 0%, 100%, .33)
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-total {
        margin: 5px
    }

    .et-db #et-boc .et-l .mejs-controls div.mejs-time-rail {
        padding-top: 5px
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-loaded {
        background: #fff
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-current {
        background: #0073aa
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-float {
        background: #eee;
        border: 1px solid #333;
        margin-left: -18px;
        text-align: center;
        color: #111
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-float-current {
        margin: 2px
    }

    .et-db #et-boc .et-l .mejs-controls .mejs-time-rail .mejs-time-float-corner {
        border: 5px solid transparent;
        border-top-color: #eee;
        border-radius: 0
    }

    .et-db #et-boc .et-l .mejs-container .mejs-controls .mejs-time {
        color: #fff;
        padding: 10px 3px 0;
        box-sizing: content-box
    }

    .et-db #et-boc .et-l .et_pb_audio_module button {
        box-shadow: none;
        text-shadow: none;
        min-height: 0
    }

    .et-db #et-boc .et-l .et_pb_audio_module button:before {
        position: relative
    }

    .et-db #et-boc .et-l .et_pb_audio_module_content h2 {
        padding-bottom: 10px;
        line-height: 1em
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-mediaelement {
        background: transparent
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-clear,
    .et-db #et-boc .et-l .et_audio_container .mejs-time-handle,
    .et-db #et-boc .et-l .et_audio_container .mejs-volume-slider {
        display: block !important
    }

    .et-db #et-boc .et-l .et_audio_container span.mejs-currenttime {
        text-shadow: none
    }

    .et-db #et-boc .et-l .et_audio_container p.et_audio_module_meta {
        margin-bottom: 17px
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-playpause-button,
    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-playpause-button button,
    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-volume-button,
    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-volume-button button {
        border: none;
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-playpause-button button:before {
        top: 0
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-volume-button.mejs-mute,
    .et-db #et-boc .et-l .et_audio_container .mejs-button.mejs-volume-button.mejs-unmute {
        position: relative;
        float: left;
        clear: none !important;
        top: auto
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-button button:focus {
        text-decoration: none !important
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls {
        box-shadow: none;
        bottom: auto !important
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls div.mejs-time-rail {
        width: auto !important
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls .mejs-time-rail span {
        height: 10px
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls .mejs-time-rail a,
    .et-db #et-boc .et-l .et_audio_container .mejs-controls .mejs-time-rail span {
        width: auto
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls .mejs-time-rail .mejs-time-handle {
        border-radius: 5px
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls .mejs-time-rail .mejs-time-float {
        border: none !important;
        color: inherit !important
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-controls .mejs-horizontal-volume-slider {
        width: 50px
    }

    .et-db #et-boc .et-l .et_audio_container span.mejs-offscreen {
        display: none
    }

    .et-db #et-boc .et-l .et_audio_container span.mejs-time-handle {
        background-color: #fff
    }

    .et-db #et-boc .et-l .et_audio_container span.mejs-time-float-current {
        min-width: 30px
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-container {
        background-color: transparent !important
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-container span.mejs-currenttime {
        display: inline-block
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-container .mejs-controls .mejs-time span {
        line-height: 1em
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-container .mejs-horizontal-volume-current,
    .et-db #et-boc .et-l .et_audio_container .mejs-container .mejs-time-current {
        background: #fff !important
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-container .mejs-pause {
        top: 0
    }

    .et-db #et-boc .et-l .et_audio_container button:focus {
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_audio_container .mejs-play button:after,
    .et-db #et-boc .et-l .mejs-pause button:after,
    .et-db #et-boc .et-l .mejs-volume-button button:after {
        display: none !important
    }

    .et-db #et-boc .et-l .et_pb_column .et_pb_shop_grid .woocommerce ul.products li.product:nth-child(n) {
        float: left !important
    }

    .et-db #et-boc .et-l .et_pb_module .woocommerce-page ul.products li.product,
    .et-db #et-boc .et-l .et_pb_module .woocommerce-page ul.products li.product h3,
    .et-db #et-boc .et-l .et_pb_module .woocommerce ul.products li.product,
    .et-db #et-boc .et-l .et_pb_module .woocommerce ul.products li.product h3 {
        background-color: transparent
    }

    .et-db #et-boc .et-l .et_pb_module .woocommerce ul.products li.product h3 {
        padding: .3em 0
    }

    .et-db #et-boc .et-l .et_pb_module.et_pb_shop_grid:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_module .star-rating span {
        letter-spacing: inherit;
        padding-top: 1.5em
    }

    .et-db #et-boc .et-l .product.et-background-image {
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_pb_shop .onsale {
        box-sizing: content-box;
        z-index: 3;
        background: #ef8f61;
        color: #fff;
        padding: 6px 18px;
        font-size: 20px;
        border-radius: 3px;
        width: auto;
        height: auto;
        line-height: 1.6em;
        text-transform: none;
        font-weight: 400;
        min-width: 0;
        min-height: 0;
        position: absolute;
        top: 20px !important;
        left: 20px !important;
        right: auto;
        transform: none
    }

    .et-db #et-boc .et-l .et_pb_shop .featured {
        display: inline-block !important
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products {
        margin-left: 0 !important
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products .entry {
        overflow: visible
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products li.last {
        margin-right: 0 !important
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products li.product {
        float: left;
        margin: 0 3.8% 2.992em 0;
        padding: 0;
        position: relative;
        width: 22.05%
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products li.product .button {
        max-width: 100%;
        white-space: normal;
        padding: .618em 1em
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products li.product a img {
        width: 100%;
        height: auto;
        display: block;
        margin: 0 0 1em;
        box-shadow: none
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce.columns-1 ul.products li.product {
        width: 100%;
        margin-right: 0
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce.columns-2 ul.products li.product {
        width: 48%
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce.columns-3 ul.products li.product {
        width: 30.75%
    }

    .et-db #et-boc .et-l .et_pb_shop .woocommerce.columns-5 ul.products li.product {
        width: 16.95%
    }

    .et-db #et-boc .et-l .et_pb_shop h3:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_shop .desc {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_shop .image_frame {
        width: 100%;
        margin-bottom: 15px
    }

    .et-db #et-boc .et-l .et_pb_shop .onsale>i {
        position: relative;
        top: auto;
        right: auto;
        bottom: auto;
        left: auto
    }

    .et-db #et-boc .et-l .et_pb_shop .onsale>span:after {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_shop .inner_product_header {
        padding: 0;
        border: none
    }

    .et-db #et-boc .et-l .et_pb_shop .isotope-item>a,
    .et-db #et-boc .et-l .et_pb_shop .woocommerce ul.products li.product>a {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_shop .rating_container,
    .et-db #et-boc .et-l .et_pb_shop .star-rating {
        float: none;
        position: relative;
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        margin-bottom: 15px
    }

    .et-db #et-boc .et-l .et_pb_shop .box-text {
        padding-bottom: 20px
    }

    .et-db #et-boc .et-l .et_pb_shop .col-inner {
        padding: 0 10px
    }

    .et-db #et-boc .et-l .et_pb_shop .image_frame.hover .image_wrapper img,
    .et-db #et-boc .et-l .et_pb_shop .image_frame:hover .image_wrapper img {
        top: 0 !important
    }

    .et-db #et-boc .et-l .et_pb_shop .et_shop_image {
        display: block;
        position: relative;
        line-height: .8 !important;
        margin-bottom: 10px
    }

    .et-db #et-boc .et-l .et_pb_shop .add-to-cart-button-outer,
    .et-db #et-boc .et-l .et_pb_shop .add_to_cart_button,
    .et-db #et-boc .et-l .et_pb_shop .avia_cart_buttons,
    .et-db #et-boc .et-l .et_pb_shop .image_links,
    .et-db #et-boc .et-l .et_pb_shop .product-buttons-container,
    .et-db #et-boc .et-l .et_pb_shop .product-thumb .button,
    .et-db #et-boc .et-l .et_pb_shop .show-on-hover {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_shop .inner-wrap>a {
        line-height: 0
    }

    .et-db #et-boc .et-l .et_pb_shop .quick-view {
        line-height: 1em;
        color: #fff;
        padding: 5px 0;
        text-align: center
    }

    .et-db #et-boc .et-l .et_pb_pricing .et_pb_featured_table {
        z-index: 50
    }

    .et-db #et-boc .et-l .et_pb_pricing li span {
        letter-spacing: inherit
    }

    .et-db #et-boc .et-l .et_pb_tab *,
    .et-db #et-boc .et-l .et_pb_tabs_controls a {
        letter-spacing: inherit;
        text-decoration: inherit !important
    }

    .et-db #et-boc .et-l .et_pb_testimonial:before {
        visibility: visible;
        width: auto;
        height: auto
    }

    .et-db #et-boc .et-l button.et_pb_button {
        text-shadow: none !important;
        box-shadow: none !important;
        background-color: transparent !important;
        white-space: inherit
    }

    .et-db #et-boc .et-l button.et_pb_button:after {
        width: auto;
        left: auto;
        top: auto;
        background-color: transparent
    }

    .et-db #et-boc .et-l button.et_pb_button:hover {
        background-color: rgba(0, 0, 0, .05) !important
    }

    .et-db #et-boc .et-l a.et_pb_button {
        padding-bottom: .3em
    }

    .et-db #et-boc .et-l .et_pb_button:before {
        content: ""
    }

    .et-db #et-boc .et-l .et_pb_contact p input {
        height: auto
    }

    .et-db #et-boc .et-l .et_pb_contact p input[type=text] {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_contact p input,
    .et-db #et-boc .et-l .et_pb_contact p textarea {
        border: none !important;
        border-radius: 0 !important;
        color: #999 !important;
        padding: 16px !important;
        max-width: 100%;
        outline: none !important;
        box-shadow: none;
        background-color: #eee !important
    }

    .et-db #et-boc .et-l .et_pb_contact .et_pb_contact_submit {
        vertical-align: top
    }

    .et-db #et-boc .et-l .et_pb_contact input.et_pb_contact_captcha {
        display: inline-block;
        max-width: 50px !important
    }

    .et-db #et-boc .et-l .et_pb_contact form span {
        width: auto
    }

    .et-db #et-boc .et-l .et_pb_contact_left p {
        margin: 0 3% 3% 0 !important;
        display: block
    }

    .et-db #et-boc .et-l .et_pb_contact_left p:last-child {
        margin-right: 0 !important
    }

    .et-db #et-boc .et-l .et_pb_contact_right p {
        margin: 0 !important
    }

    .et-db #et-boc .et-l hr.et_pb_divider {
        width: 100%
    }

    .et-db #et-boc .et-l .comment-form-author,
    .et-db #et-boc .et-l .comment-form-email,
    .et-db #et-boc .et-l .comment-form-url {
        width: auto;
        float: none;
        margin-right: 0;
        padding-bottom: 1em
    }

    .et-db #et-boc .et-l .comment_avatar:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_comments_module a.et_pb_button {
        border-bottom-style: solid;
        border-bottom-width: 2px
    }

    .et-db #et-boc .et-l .et_pb_comments_module button.et_pb_button {
        color: inherit
    }

    .et-db #et-boc .et-l .children .comment-body,
    .et-db #et-boc .et-l .comment-body {
        border: none
    }

    .et-db #et-boc .et-l .et_pb_gallery_grid .et_pb_gallery_image {
        font-size: 100%
    }

    .et-db #et-boc .et-l .et_pb_gallery_image a {
        line-height: 0
    }

    .et-db #et-boc .et-l .et_pb_wc_related_products .et_shop_image {
        display: block;
        position: relative;
        line-height: .8 !important;
        margin-bottom: 10px
    }

    @media (min-width:981px) {

        .et-db #et-boc .et-l .et_pb_column_3_4 .et_pb_shop_grid .columns-0 ul.products li.product.last,
        .et-db #et-boc .et-l .et_pb_column_4_4 .et_pb_shop_grid .columns-0 ul.products li.product.last {
            margin-right: 5.5% !important
        }

        .et-db #et-boc .et-l .et_pb_column_2_3 .et_pb_shop_grid .columns-0 ul.products li.product.last {
            margin-right: 8.483% !important
        }

        .et-db #et-boc .et-l .et_pb_column_1_2 .et_pb_shop_grid .columns-0 ul.products li.product.last {
            margin-right: 11.64% !important
        }

        .et-db #et-boc .et-l .et_pb_shop_grid .columns-0 ul.products li.product.first {
            clear: none !important
        }

        .et-db #et-boc .et-l .et_pb_column_1_2 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(2n),
        .et-db #et-boc .et-l .et_pb_column_2_3 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(2n),
        .et-db #et-boc .et-l .et_pb_column_3_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(3n),
        .et-db #et-boc .et-l .et_pb_column_4_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(4n) {
            margin-right: 0 !important
        }

        .et-db #et-boc .et-l .et_pb_column_1_2 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(odd),
        .et-db #et-boc .et-l .et_pb_column_2_3 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(odd),
        .et-db #et-boc .et-l .et_pb_column_3_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(3n+1),
        .et-db #et-boc .et-l .et_pb_column_4_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(4n+1) {
            clear: both !important
        }

        .et-db #et-boc .et-l .et_pb_specialty_column.et_pb_column_3_4 .et_pb_column_4_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(4n) {
            margin-right: 7.47% !important
        }

        .et-db #et-boc .et-l .et_pb_specialty_column.et_pb_column_3_4 .et_pb_column_4_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(3n) {
            margin-right: 0 !important
        }

        .et-db #et-boc .et-l .et_pb_specialty_column.et_pb_column_3_4 .et_pb_column_4_4 .et_pb_shop_grid .columns-0 ul.products li.product:nth-child(4n+1) {
            clear: none !important
        }

        .et-db #et-boc .et-l .woocommerce-page.columns-6 ul.products li.product,
        .et-db #et-boc .et-l .woocommerce.columns-6 ul.products li.product {
            width: 13.5% !important;
            margin: 0 3.8% 2.992em 0 !important
        }

        .et-db #et-boc .et-l .woocommerce-page.columns-6 ul.products li.product.last,
        .et-db #et-boc .et-l .woocommerce.columns-6 ul.products li.product.last {
            margin-right: 0 !important
        }

        .et-db #et-boc .et-l .et_pb_shop .woocommerce.columns-6 ul.products li.product:nth-child(3n+1) {
            clear: none
        }

        .et-db #et-boc .et-l .et_pb_shop .woocommerce.columns-6 ul.products li.product.first {
            clear: both
        }

        .et-db #et-boc .et-l .et_pb_column_4_4 .et_pb_shop_grid .woocommerce ul.products li.product {
            width: 20.875% !important;
            margin: 0 5.5% 5.5% 0 !important
        }

        .et-db #et-boc .et-l .et_pb_column_3_4 .et_pb_shop_grid .woocommerce ul.products li.product {
            width: 28.353% !important;
            margin: 0 7.47% 5.5% 0 !important
        }

        .et-db #et-boc .et-l .et_pb_column_2_3 .et_pb_shop_grid .woocommerce ul.products li.product {
            width: 45.758% !important;
            margin: 0 8.483% 5.5% 0 !important
        }

        .et-db #et-boc .et-l .et_pb_column_1_2 .et_pb_shop_grid .woocommerce ul.products li.product {
            width: 44.18% !important;
            margin: 0 11.64% 5.5% 0 !important
        }

        .et-db #et-boc .et-l .et_pb_column_1_3 .et_pb_shop_grid .woocommerce ul.products li.product,
        .et-db #et-boc .et-l .et_pb_column_1_4 .et_pb_shop_grid .woocommerce ul.products li.product {
            margin-left: 0 !important;
            margin-right: 0 !important
        }
    }

    @media only screen and (max-width:800px) {

        .et-db #et-boc .et-l #main .et_pb_shop_grid .products li:nth-child(3n),
        .et-db #et-boc .et-l #main .et_pb_shop_grid .products li:nth-child(4n) {
            float: left !important;
            margin: 0 9.5% 9.5% 0 !important
        }

        .et-db #et-boc .et-l #main .et_pb_shop_grid .products li:nth-child(2n) {
            margin-right: 0 !important
        }
    }

    @media only screen and (min-width:768px) and (max-width:980px) {
        .et-db #et-boc .et-l .et_pb_shop ul.products li.product:nth-child(odd) {
            clear: none !important
        }

        .et-db #et-boc .et-l .et_pb_column .woocommerce ul.products li.product:nth-child(3n+1) {
            clear: both !important
        }
    }

    .et-db #et-boc .et-l ul.products li.product .onsale {
        display: block
    }

    .et-db #et-boc .et-l ul.products li.product .star-rating {
        margin-top: 5px
    }

    .et-db #et-boc .et-l ul.products li.product .price {
        position: relative;
        top: auto;
        right: auto;
        left: auto
    }

    .et-db #et-boc .et-l ul.products li.product .price:after {
        display: none
    }

    .et-db #et-boc .et-l ul.products li.product .price del {
        display: block;
        margin-bottom: 10px
    }

    .et-db #et-boc .et-l ul.products li.product .price ins {
        margin-left: 0
    }

    .et-db #et-boc .et-l ul.products li.product .price ins:before {
        content: "" !important
    }

    .et-db #et-boc .et-l * {
        box-sizing: border-box
    }

    .et-db #et-boc .et-l #et-info-email:before,
    .et-db #et-boc .et-l #et-info-phone:before,
    .et-db #et-boc .et-l #et_search_icon:before,
    .et-db #et-boc .et-l .comment-reply-link:after,
    .et-db #et-boc .et-l .et-cart-info span:before,
    .et-db #et-boc .et-l .et-pb-arrow-next:before,
    .et-db #et-boc .et-l .et-pb-arrow-prev:before,
    .et-db #et-boc .et-l .et-social-icon a:before,
    .et-db #et-boc .et-l .et_audio_container .mejs-playpause-button button:before,
    .et-db #et-boc .et-l .et_audio_container .mejs-volume-button button:before,
    .et-db #et-boc .et-l .et_overlay:before,
    .et-db #et-boc .et-l .et_password_protected_form .et_submit_button:after,
    .et-db #et-boc .et-l .et_pb_button:after,
    .et-db #et-boc .et-l .et_pb_contact_reset:after,
    .et-db #et-boc .et-l .et_pb_contact_submit:after,
    .et-db #et-boc .et-l .et_pb_font_icon:before,
    .et-db #et-boc .et-l .et_pb_newsletter_button:after,
    .et-db #et-boc .et-l .et_pb_pricing_table_button:after,
    .et-db #et-boc .et-l .et_pb_promo_button:after,
    .et-db #et-boc .et-l .et_pb_testimonial:before,
    .et-db #et-boc .et-l .et_pb_toggle_title:before,
    .et-db #et-boc .et-l .form-submit .et_pb_button:after,
    .et-db #et-boc .et-l .mobile_menu_bar:before,
    .et-db #et-boc .et-l a.et_pb_more_button:after {
        font-family: ETmodules !important;
        speak: none;
        font-style: normal;
        font-weight: 400;
        font-feature-settings: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-shadow: 0 0;
        direction: ltr
    }

    .et-db #et-boc .et-l .et_pb_custom_button_icon.et_pb_button:after,
    .et-db #et-boc .et-l .et_pb_login .et_pb_custom_button_icon.et_pb_button:after,
    .et-db #et-boc .et-l .et_pb_woo_custom_button_icon .button.et_pb_custom_button_icon.et_pb_button:after,
    .et-db #et-boc .et-l .et_pb_woo_custom_button_icon .button.et_pb_custom_button_icon.et_pb_button:hover:after {
        content: attr(data-icon)
    }

    .et-db #et-boc .et-l .et-pb-icon {
        font-family: ETmodules;
        content: attr(data-icon);
        speak: none;
        font-weight: 400;
        font-feature-settings: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        font-size: 96px;
        font-style: normal;
        display: inline-block;
        box-sizing: border-box;
        direction: ltr
    }

    .et-db #et-boc .et-l #et-ajax-saving {
        display: none;
        transition: background .3s, box-shadow .3s;
        box-shadow: 0 0 60px rgba(0, 139, 219, .247059);
        position: fixed;
        top: 50%;
        left: 50%;
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50px;
        margin: -25px 0 0 -25px;
        z-index: 999999;
        text-align: center
    }

    .et-db #et-boc .et-l #et-ajax-saving img {
        margin: 9px
    }

    .et-db #et-boc .et-l .et-safe-mode-indicator,
    .et-db #et-boc .et-l .et-safe-mode-indicator:focus,
    .et-db #et-boc .et-l .et-safe-mode-indicator:hover {
        box-shadow: 0 5px 10px rgba(41, 196, 169, .15);
        background: #29c4a9;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        padding: 12px;
        line-height: 16px;
        border-radius: 3px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 999999;
        text-decoration: none;
        font-family: Open Sans, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .et-db #et-boc .et-l .et_pb_button {
        font-size: 20px;
        font-weight: 500;
        padding: .3em 1em;
        line-height: 1.7em !important;
        background-color: transparent;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat;
        position: relative;
        border: 2px solid;
        border-radius: 3px;
        transition-duration: .2s;
        transition-property: all !important
    }

    .et-db #et-boc .et-l .et_pb_button_inner {
        position: relative
    }

    .et-db #et-boc .et-l .et_pb_button:hover,
    .et-db #et-boc .et-l .et_pb_module .et_pb_button:hover {
        border: 2px solid transparent;
        padding: .3em 2em .3em .7em
    }

    .et-db #et-boc .et-l .et_pb_button:hover {
        background-color: hsla(0, 0%, 100%, .2)
    }

    .et-db #et-boc .et-l .et_pb_bg_layout_light.et_pb_button:hover,
    .et-db #et-boc .et-l .et_pb_bg_layout_light .et_pb_button:hover {
        background-color: rgba(0, 0, 0, .05)
    }

    .et-db #et-boc .et-l .et_pb_button:after,
    .et-db #et-boc .et-l .et_pb_button:before {
        font-size: 32px;
        line-height: 1em;
        content: "\35";
        opacity: 0;
        position: absolute;
        margin-left: -1em;
        transition: all .2s;
        text-transform: none;
        font-feature-settings: "kern" off;
        font-variant: none;
        font-style: normal;
        font-weight: 400;
        text-shadow: none
    }

    .et-db #et-boc .et-l .et_pb_button.et_hover_enabled:hover:after,
    .et-db #et-boc .et-l .et_pb_button.et_pb_hovered:hover:after {
        transition: none !important
    }

    .et-db #et-boc .et-l .et_pb_button:before {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_button:hover:after {
        opacity: 1;
        margin-left: 0
    }

    .et-db #et-boc .et-l .et_pb_column_1_3 h1,
    .et-db #et-boc .et-l .et_pb_column_1_4 h1,
    .et-db #et-boc .et-l .et_pb_column_1_5 h1,
    .et-db #et-boc .et-l .et_pb_column_1_6 h1,
    .et-db #et-boc .et-l .et_pb_column_2_5 h1 {
        font-size: 26px
    }

    .et-db #et-boc .et-l .et_pb_column_1_3 h2,
    .et-db #et-boc .et-l .et_pb_column_1_4 h2,
    .et-db #et-boc .et-l .et_pb_column_1_5 h2,
    .et-db #et-boc .et-l .et_pb_column_1_6 h2,
    .et-db #et-boc .et-l .et_pb_column_2_5 h2 {
        font-size: 23px
    }

    .et-db #et-boc .et-l .et_pb_column_1_3 h3,
    .et-db #et-boc .et-l .et_pb_column_1_4 h3,
    .et-db #et-boc .et-l .et_pb_column_1_5 h3,
    .et-db #et-boc .et-l .et_pb_column_1_6 h3,
    .et-db #et-boc .et-l .et_pb_column_2_5 h3 {
        font-size: 20px
    }

    .et-db #et-boc .et-l .et_pb_column_1_3 h4,
    .et-db #et-boc .et-l .et_pb_column_1_4 h4,
    .et-db #et-boc .et-l .et_pb_column_1_5 h4,
    .et-db #et-boc .et-l .et_pb_column_1_6 h4,
    .et-db #et-boc .et-l .et_pb_column_2_5 h4 {
        font-size: 18px
    }

    .et-db #et-boc .et-l .et_pb_column_1_3 h5,
    .et-db #et-boc .et-l .et_pb_column_1_4 h5,
    .et-db #et-boc .et-l .et_pb_column_1_5 h5,
    .et-db #et-boc .et-l .et_pb_column_1_6 h5,
    .et-db #et-boc .et-l .et_pb_column_2_5 h5 {
        font-size: 16px
    }

    .et-db #et-boc .et-l .et_pb_column_1_3 h6,
    .et-db #et-boc .et-l .et_pb_column_1_4 h6,
    .et-db #et-boc .et-l .et_pb_column_1_5 h6,
    .et-db #et-boc .et-l .et_pb_column_1_6 h6,
    .et-db #et-boc .et-l .et_pb_column_2_5 h6 {
        font-size: 15px
    }

    .et-db #et-boc .et-l .et_pb_bg_layout_dark,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h1,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h2,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h3,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h4,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h5,
    .et-db #et-boc .et-l .et_pb_bg_layout_dark h6 {
        color: #fff !important
    }

    .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_left {
        text-align: left
    }

    .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_center {
        text-align: center
    }

    .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_right {
        text-align: right
    }

    .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_justified {
        text-align: justify
    }

    .et-db #et-boc .et-l .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0
    }

    .et-db #et-boc .et-l .et_pb_bg_layout_light .et_pb_more_button {
        color: #2ea3f2
    }

    .et-db #et-boc .et-l .et_builder_inner_content {
        position: relative;
        z-index: 1
    }

    header .et-db #et-boc .et-l .et_builder_inner_content {
        z-index: 2
    }

    .et-db #et-boc .et-l .et_pb_css_mix_blend_mode_passthrough {
        mix-blend-mode: unset !important
    }

    .et-db #et-boc .et-l .et_pb_image_container {
        margin: -20px -20px 29px
    }

    .et-db #et-boc .et-l .et_pb_module_inner {
        position: relative
    }

    .et-db #et-boc .et-l .et_hover_enabled_preview {
        z-index: 2
    }

    .et-db #et-boc .et-l .et_hover_enabled:hover {
        position: relative;
        z-index: 2
    }

    .et-db #et-boc .et-l .et_pb_all_tabs,
    .et-db #et-boc .et-l .et_pb_module,
    .et-db #et-boc .et-l .et_pb_posts_nav a,
    .et-db #et-boc .et-l .et_pb_tab,
    .et-db #et-boc .et-l .et_pb_with_background {
        position: relative;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .et-db #et-boc .et-l .et_pb_background_mask,
    .et-db #et-boc .et-l .et_pb_background_pattern {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    .et-db #et-boc .et-l .et_pb_background_mask {
        background-size: calc(100% + 2px) calc(100% + 2px);
        background-repeat: no-repeat;
        background-position: 50%;
        overflow: hidden
    }

    .et-db #et-boc .et-l .et_pb_background_pattern {
        background-position: 0 0;
        background-repeat: repeat
    }

    .et-db #et-boc .et-l .et_pb_with_border {
        position: relative;
        border: 0 solid #333
    }

    .et-db #et-boc .et-l .post-password-required .et_pb_row {
        padding: 0;
        width: 100%
    }

    .et-db #et-boc .et-l .post-password-required .et_password_protected_form {
        min-height: 0
    }

    body.et_pb_pagebuilder_layout.et_pb_show_title .et-db #et-boc .et-l .post-password-required .et_password_protected_form h1,
    body:not(.et_pb_pagebuilder_layout) .et-db #et-boc .et-l .post-password-required .et_password_protected_form h1 {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_no_bg {
        padding: 0 !important
    }

    .et-db #et-boc .et-l .et_overlay.et_pb_inline_icon:before,
    .et-db #et-boc .et-l .et_pb_inline_icon:before {
        content: attr(data-icon)
    }

    .et-db #et-boc .et-l .et_pb_more_button {
        color: inherit;
        text-shadow: none;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px
    }

    .et-db #et-boc .et-l .et_parallax_bg_wrap {
        overflow: hidden;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .et-db #et-boc .et-l .et_parallax_bg {
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block
    }

    .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg__hover,
    .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg_phone,
    .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg_tablet,
    .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient__hover,
    .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient_phone,
    .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient_tablet,
    .et-db #et-boc .et-l .et_pb_section_parallax_hover:hover .et_parallax_bg:not(.et_parallax_bg__hover),
    .et-db #et-boc .et-l .et_pb_section_parallax_hover:hover .et_parallax_gradient:not(.et_parallax_gradient__hover) {
        display: none
    }

    .et-db #et-boc .et-l .et_pb_section_parallax_hover:hover .et_parallax_bg.et_parallax_bg__hover,
    .et-db #et-boc .et-l .et_pb_section_parallax_hover:hover .et_parallax_gradient.et_parallax_gradient__hover {
        display: block
    }

    .et-db #et-boc .et-l .et_parallax_gradient {
        bottom: 0;
        display: block;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    .et-db #et-boc .et-l .et_pb_module.et_pb_section_parallax,
    .et-db #et-boc .et-l .et_pb_posts_nav a.et_pb_section_parallax,
    .et-db #et-boc .et-l .et_pb_tab.et_pb_section_parallax {
        position: relative
    }

    .et-db #et-boc .et-l .et_pb_section_parallax .et_pb_parallax_css,
    .et-db #et-boc .et-l .et_pb_slides .et_parallax_bg.et_pb_parallax_css {
        background-attachment: fixed
    }

    .et-db #et-boc .et-l body.et-bfb .et_pb_section_parallax .et_pb_parallax_css,
    .et-db #et-boc .et-l body.et-bfb .et_pb_slides .et_parallax_bg.et_pb_parallax_css {
        background-attachment: scroll;
        bottom: auto
    }

    .et-db #et-boc .et-l .et_pb_section_parallax.et_pb_column .et_pb_module,
    .et-db #et-boc .et-l .et_pb_section_parallax.et_pb_row .et_pb_column,
    .et-db #et-boc .et-l .et_pb_section_parallax.et_pb_row .et_pb_module {
        z-index: 9;
        position: relative
    }

    .et-db #et-boc .et-l .et_pb_more_button:hover:after {
        opacity: 1;
        margin-left: 0
    }

    .et-db #et-boc .et-l .et_pb_preload .et_pb_section_video_bg,
    .et-db #et-boc .et-l .et_pb_preload>div {
        visibility: hidden
    }

    .et-db #et-boc .et-l .et_pb_preload,
    .et-db #et-boc .et-l .et_pb_section.et_pb_section_video.et_pb_preload {
        position: relative;
        background: #464646 !important
    }

    .et-db #et-boc .et-l .et_pb_preload:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        background: url(https://www.wearemiq.com/wp-content/plugins/divi-builder/core/admin/images/loader.gif) no-repeat;
        border-radius: 32px;
        width: 32px;
        height: 32px;
        margin: -16px 0 0 -16px
    }

    .et-db #et-boc .et-l .box-shadow-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        pointer-events: none
    }

    .et-db #et-boc .et-l .et_pb_section>.box-shadow-overlay~.et_pb_row {
        z-index: 11
    }

    .et-db #et-boc .et-l body.safari .section_has_divider {
        will-change: transform
    }

    .et-db #et-boc .et-l .et_pb_row>.box-shadow-overlay {
        z-index: 8
    }

    .et-db #et-boc .et-l .has-box-shadow-overlay {
        position: relative
    }

    .et-db #et-boc .et-l .et_clickable {
        cursor: pointer
    }

    .et-db #et-boc .et-l .screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute !important;
        width: 1px;
        word-wrap: normal !important
    }

    .et-db #et-boc .et-l .et_multi_view_hidden,
    .et-db #et-boc .et-l .et_multi_view_hidden_image {
        display: none !important
    }

    @keyframes multi-view-image-fade {
        0% {
            opacity: 0
        }

        10% {
            opacity: .1
        }

        20% {
            opacity: .2
        }

        30% {
            opacity: .3
        }

        40% {
            opacity: .4
        }

        50% {
            opacity: .5
        }

        60% {
            opacity: .6
        }

        70% {
            opacity: .7
        }

        80% {
            opacity: .8
        }

        90% {
            opacity: .9
        }

        to {
            opacity: 1
        }
    }

    .et-db #et-boc .et-l .et_multi_view_image__loading {
        visibility: hidden
    }

    .et-db #et-boc .et-l .et_multi_view_image__loaded {
        -webkit-animation: multi-view-image-fade .5s;
        animation: multi-view-image-fade .5s
    }

    .et-db #et-boc .et-l #et-pb-motion-effects-offset-tracker {
        visibility: hidden !important;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0
    }

    .et-db #et-boc .et-l .et-pb-before-scroll-animation {
        opacity: 0
    }

    .et-db #et-boc .et-l header.et-l.et-l--header:after {
        clear: both;
        display: block;
        content: ""
    }

    .et-db #et-boc .et-l .et_pb_module {
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-duration: .2s;
        animation-duration: .2s
    }

    @-webkit-keyframes fadeBottom {
        0% {
            opacity: 0;
            transform: translateY(10%)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes fadeBottom {
        0% {
            opacity: 0;
            transform: translateY(10%)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @-webkit-keyframes fadeLeft {
        0% {
            opacity: 0;
            transform: translateX(-10%)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @keyframes fadeLeft {
        0% {
            opacity: 0;
            transform: translateX(-10%)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @-webkit-keyframes fadeRight {
        0% {
            opacity: 0;
            transform: translateX(10%)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @keyframes fadeRight {
        0% {
            opacity: 0;
            transform: translateX(10%)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @-webkit-keyframes fadeTop {
        0% {
            opacity: 0;
            transform: translateY(-10%)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @keyframes fadeTop {
        0% {
            opacity: 0;
            transform: translateY(-10%)
        }

        to {
            opacity: 1;
            transform: translateX(0)
        }
    }

    @-webkit-keyframes fadeIn {
        0% {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    .et-db #et-boc .et-l .et-waypoint:not(.et_pb_counters) {
        opacity: 0
    }

    @media (min-width:981px) {

        .et-db #et-boc .et-l .et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_column .et_pb_module.et-last-child,
        .et-db #et-boc .et-l .et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_column .et_pb_module:last-child,
        .et-db #et-boc .et-l .et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module.et-last-child,
        .et-db #et-boc .et-l .et_pb_section.et_section_specialty div.et_pb_row .et_pb_column .et_pb_row_inner .et_pb_column .et_pb_module:last-child,
        .et-db #et-boc .et-l .et_pb_section div.et_pb_row .et_pb_column .et_pb_module.et-last-child,
        .et-db #et-boc .et-l .et_pb_section div.et_pb_row .et_pb_column .et_pb_module:last-child {
            margin-bottom: 0
        }
    }

    @media (max-width:980px) {

        .et-db #et-boc .et-l .et_overlay.et_pb_inline_icon_tablet:before,
        .et-db #et-boc .et-l .et_pb_inline_icon_tablet:before {
            content: attr(data-icon-tablet)
        }

        .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg_tablet_exist,
        .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient_tablet_exist {
            display: none
        }

        .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg_tablet,
        .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient_tablet {
            display: block
        }

        .et-db #et-boc .et-l .et_pb_column .et_pb_module {
            margin-bottom: 30px
        }

        .et-db #et-boc .et-l .et_pb_row .et_pb_column .et_pb_module.et-last-child,
        .et-db #et-boc .et-l .et_pb_row .et_pb_column .et_pb_module:last-child,
        .et-db #et-boc .et-l .et_section_specialty .et_pb_row .et_pb_column .et_pb_module.et-last-child,
        .et-db #et-boc .et-l .et_section_specialty .et_pb_row .et_pb_column .et_pb_module:last-child {
            margin-bottom: 0
        }

        .et-db #et-boc .et-l .et_pb_more_button {
            display: inline-block !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet.et_pb_module.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet .et_pb_more_button {
            color: #2ea3f2
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet .et_pb_forgot_password a {
            color: #666
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet h1,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet h2,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet h3,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet h4,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet h5,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet h6 {
            color: #333 !important
        }

        .et_pb_module .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet.et_pb_button {
            color: #2ea3f2 !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_tablet {
            color: #666 !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet h1,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet h2,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet h3,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet h4,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet h5,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet h6 {
            color: #fff !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet.et_pb_module.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet .et_pb_more_button {
            color: inherit
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_dark_tablet .et_pb_forgot_password a {
            color: #fff
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_left-tablet {
            text-align: left
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_center-tablet {
            text-align: center
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_right-tablet {
            text-align: right
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_justified-tablet {
            text-align: justify
        }
    }

    @media (max-width:767px) {
        .et-db #et-boc .et-l .et_pb_more_button {
            display: inline-block !important
        }

        .et-db #et-boc .et-l .et_overlay.et_pb_inline_icon_phone:before,
        .et-db #et-boc .et-l .et_pb_inline_icon_phone:before {
            content: attr(data-icon-phone)
        }

        .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg_phone_exist,
        .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient_phone_exist {
            display: none
        }

        .et-db #et-boc .et-l .et_parallax_bg.et_parallax_bg_phone,
        .et-db #et-boc .et-l .et_parallax_gradient.et_parallax_gradient_phone {
            display: block
        }

        .et-db #et-boc .et-l .et-hide-mobile {
            display: none !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone.et_pb_module.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone .et_pb_more_button {
            color: #2ea3f2
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone .et_pb_forgot_password a {
            color: #666
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone h1,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone h2,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone h3,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone h4,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone h5,
        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone h6 {
            color: #333 !important
        }

        .et_pb_module .et-db #et-boc .et-l .et_pb_bg_layout_light_phone.et_pb_button {
            color: #2ea3f2 !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_light_phone {
            color: #666 !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone h1,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone h2,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone h3,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone h4,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone h5,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone h6 {
            color: #fff !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone.et_pb_module.et_pb_button,
        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone .et_pb_more_button {
            color: inherit
        }

        .et_pb_module .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone.et_pb_button {
            color: #fff !important
        }

        .et-db #et-boc .et-l .et_pb_bg_layout_dark_phone .et_pb_forgot_password a {
            color: #fff
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_left-phone {
            text-align: left
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_center-phone {
            text-align: center
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_right-phone {
            text-align: right
        }

        .et-db #et-boc .et-l .et_pb_module.et_pb_text_align_justified-phone {
            text-align: justify
        }
    }

    @media (max-width:479px) {
        .et-db #et-boc .et-l a.et_pb_more_button {
            display: block
        }
    }

    @media (min-width:768px) and (max-width:980px) {
        .et-db #et-boc .et-l [data-et-multi-view-load-tablet-hidden=true]:not(.et_multi_view_swapped) {
            display: none !important
        }
    }

    @media (max-width:767px) {
        .et-db #et-boc .et-l [data-et-multi-view-load-phone-hidden=true]:not(.et_multi_view_swapped) {
            display: none !important
        }
    }

    .et-db #et-boc .et-l .et_pb_menu.et_pb_menu--style-inline_centered_logo .et_pb_menu__menu nav ul {
        justify-content: center
    }

    @-webkit-keyframes multi-view-image-fade {
        0% {
            transform: scale(1);
            opacity: 1
        }

        50% {
            transform: scale(1.01);
            opacity: 1
        }

        to {
            transform: scale(1);
            opacity: 1
        }
    }

    .et-db #et-boc .et-l .et_pb_section .et_pb_row {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_with_background .et_pb_row,
    .et-db #et-boc .et-l .single.et_full_width_page .et_pb_row,
    .et-db #et-boc .et-l .single.et_full_width_portfolio_page .et_pb_row {
        width: 80%
    }

    .et-db #et-boc .et-l .et_pb_row.et_pb_row_fullwidth,
    .et-db #et-boc .et-l .et_pb_specialty_fullwidth>.et_pb_row.et_pb_row_fullwidth {
        width: 100% !important;
        max-width: 100% !important
    }

    .et-db #et-boc .et-l .et_pb_with_background .et_pb_row.et_pb_row_fullwidth,
    .et-db #et-boc .et-l .et_pb_with_background.et_pb_specialty_fullwidth>.et_pb_row.et_pb_row_fullwidth,
    .et-db #et-boc .et-l .single.et_full_width_page .et_pb_row.et_pb_row_fullwidth,
    .et-db #et-boc .et-l .single.et_full_width_page .et_pb_specialty_fullwidth>.et_pb_row.et_pb_row_fullwidth,
    .et-db #et-boc .et-l .single.et_full_width_portfolio_page .et_pb_row.et_pb_row_fullwidth,
    .et-db #et-boc .et-l .single.et_full_width_portfolio_page .et_pb_specialty_fullwidth>.et_pb_row.et_pb_row_fullwidth {
        width: 89% !important;
        max-width: 89% !important
    }

    .et-db .mfp-ready.mfp-fade .mfp-figure {
        opacity: 1
    }

    .et-db .mfp-image-holder .mfp-arrow {
        border: none !important;
        opacity: .55;
        width: 48px !important;
        height: 48px !important
    }

    .et-db .mfp-image-holder .mfp-arrow:after {
        background: none;
        opacity: 1;
        transform: none !important
    }

    .et-db .mfp-image-holder .mfp-arrow-right {
        right: 10px !important
    }

    .et-db .mfp-image-holder .mfp-arrow-left,
    .et-db .mfp-image-holder .mfp-arrow-left:after {
        left: 0 !important
    }

    .et-db .mfp-image-holder .mfp-close {
        line-height: 44px;
        font-weight: 200;
        font-family: Open Sans, Arial, sans-serif !important
    }

    .et-db .mfp-arrow-right .mfp-a,
    .et-db .mfp-arrow-right:after {
        content: "\35"
    }

    .et-db .mfp-arrow-left .mfp-a,
    .et-db .mfp-arrow-left:after {
        content: "\34"
    }

    .et-db #et-boc ul.products li.product .woocommerce-loop-product__link {
        display: inline-block
    }

    .et-db #et-boc .woocommerce-product-gallery img {
        width: 100%
    }

    .et-db #et-boc .et-l .et_pb_wc_checkout_additional_info #order_review_heading,
    .et-db #et-boc .et-l .et_pb_wc_checkout_billing #order_review_heading,
    .et-db #et-boc .et-l .et_pb_wc_checkout_payment_info #order_review_heading,
    .et-db #et-boc .et-l .et_pb_wc_checkout_shipping #order_review_heading {
        display: none !important
    }
</style>
<link rel="stylesheet"
    href="https://www.wearemiq.com/wp-content/et-cache/27/et-divi-builder-dynamic-27.css?ver=1664876081">
<link rel="https://api.w.org/" href="https://www.wearemiq.com/wp-json/" />
<link rel="alternate" type="application/json" href="https://www.wearemiq.com/wp-json/wp/v2/pages/27" />
<link rel="alternate" type="application/json+oembed"
    href="https://www.wearemiq.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wearemiq.com%2F" />
<link rel="alternate" type="text/xml+oembed"
    href="https://www.wearemiq.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wearemiq.com%2F&#038;format=xml" />

<link rel="icon" href="https://www.wearemiq.com/wp-content/uploads/2021/10/favicon-icon.png" sizes="32x32" />
<link rel="icon" href="https://www.wearemiq.com/wp-content/uploads/2021/10/favicon-icon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.wearemiq.com/wp-content/uploads/2021/10/favicon-icon.png" />
<meta name="msapplication-TileImage"
    content="https://www.wearemiq.com/wp-content/uploads/2021/10/favicon-icon.png" />
<style type="text/css" id="wp-custom-css">
    #blogintro .module_content_container {
        padding-bottom: 0;
    }

    #blogfeatured .block_content--inner-wrapper.wow.fadeInUp {
        padding-top: 0;
    }

    #teamskyrise .module_content_container {
        padding-bottom: 0px;
    }

    /*to decrease the font size of the bullet point list */

    #results h3.point_content--point_title {
        font-size: 20px;
    }

    #challenges .block_content--inner-wrapper {
        padding: 0;
    }

    .section-block img {
        max-width: 100%
    }

    em {
        font-style: revert;
    }

    .policy_section_image_row {
        margin-top: 40px;
    }

    /*full size video responsive*/

    .videofullsize {
        aspect-ratio: 16 / 9;
        width: 100%;
    }

    /*chart responsive*/

    .chart {
        width: 100%;
        min-height: 450px;
    }

    /*.row {
margin:0 ;
}*/

    /*to remove the underline from a link */

    #boxlink a {
        text-decoration: none;
    }
</style>

<!-- Conversion Pixel - MiQ Digital - Allsite - S IMG - DO NOT MODIFY -->
<img src="https://secure.adnxs.com/px?id=1597450&seg=30415543&t=2" width="1" height="1"
    style="position: absolute;" />
<!-- End of Conversion Pixel -->

</head>

<body class="home page-template-default page page-id-27 et_divi_builder et-pb-theme-miq2020 et-db">

<img height="1" width="1" style="border-style:none;position:absolute" alt=""
        src="https://insight.adsrvr.org/track/pxl/?adv=0szlqdf&ct=0:fn7q438&fmt=3" />




    <div id="overlay-searchform" class="overlay-searchform js-overlay-searchform mfp-hide">
        <form role="search" method="get" id="searchform" action="https://www.wearemiq.com/">
            <div class="input-group">
                <input type="text" class="input-group-field" value="" name="s" id="s" placeholder="Search">
                <div class="input-group-button">
                    <input type="submit" id="searchsubmit" value="Search" class="button">
                </div>
            </div>
        </form>
    </div>



    {{-- <header class="site-header">

        <div class="site-header--content">

            <div class="site-header--mobile-header grid-width">

                <div class="site-header--mobile-header--left">
                    <div class="site-header--mobile-header--title">
                        <a aria-label="homepage" href="https://www.wearemiq.com/" rel="home">
                            <img class="site-header--logo"
                                src="https://www.wearemiq.com/wp-content/themes/miq2020/dist/images/logo.png">
                        </a>
                    </div>
                </div>



            </div>

            <nav class="site-header--desktop-header grid-width">

                <div class="site-header--desktop-header--left">
                    <div class="site-desktop-title site-header--desktop-header--title">
                        <a aria-label="homepage" href="https://www.wearemiq.com/" rel="home">
                            <img class="site-header--logo"
                                src="https://www.wearemiq.com/wp-content/themes/miq2020/dist/images/logo.png">
                        </a>
                    </div>
                </div>
            </nav>


    </header> --}}

    <main class="main-content" id="main">

        <div class="acf-wrapper acf-wrapper__blocks">
            <div class="clearfix section-block js-section-block hero  ">
                <div class="section-block--inner-wrap">
                    <div class="section-block--content-wrap">

                        <div class="hero_background hero_background__white text__light"
                            style="background-color: #ffca01">

                            <div class="background_image_container">


                                <div class="lazyload featured-image wow fadeIn" data-wow-duration="0.8s"
                                    data-wow-delay="0.3s"
                                    data-bg-mobile="https://www.wearemiq.com/wp-content/uploads/2020/04/1.1_Home_bg-1-640x360.png"
                                    data-bg-tablet="https://www.wearemiq.com/wp-content/uploads/2020/04/1.1_Home_bg-1-1024x576.png"
                                    data-bg-desktop="https://www.wearemiq.com/wp-content/uploads/2020/04/1.1_Home_bg-1-1200x675.png"
                                    data-bg-super="https://www.wearemiq.com/wp-content/uploads/2020/04/1.1_Home_bg-1-1200x675.png"
                                    data-expand="700"
                                    style="background-image: url('https://www.wearemiq.com/wp-content/uploads/2020/04/1.1_Home_bg-1-640x360.png');">
                                </div>


                                <!-- <pre>	 -->
                                <!-- </pre> -->
                            </div>

                            <div class="block_content">
                                <div class="block_content--inner-wrapper">

                                    <div class="module_content wow fadeInUp" data-wow-duration="0.8s"
                                        data-wow-delay="0.3s">


                                        <h2 class="heading headline-with-gradient">Your programmatic media partner</h2>
                                        <div class="copy">
                                            <p>Drive the outcomes that matter to you with better connected marketing.
                                            </p>
                                        </div>

                                        <a class="cta_copy button yellow_outline"
                                            href="https://www.wearemiq.com/our-business/">Read more</a>

                                    </div>
                                    <div class="foreground_image_container foreground_image_container__desktop wow fadeInUp"
                                        data-wow-duration="0.8s" data-wow-delay="0.3s">

                                        <picture class="picture-with-ratio wow fadeIn" data-wow-duration="0.8s"
                                            data-wow-delay="0.3s" style="padding-top: calc(1.4380825565912 * 100%);"
                                            data-width="751" data-height="1080">
                                            <img src="https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground-2022.png"
                                                data-sizes="auto" data-srcset="https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground-2022.png 300w,
	    https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground-2022.png 600w,
	    https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground-2022.png 900w"
                                                data-src="https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground-2022.png"
                                                class="lazyload" alt="">
                                        </picture>
                                    </div>
                                    <div class="foreground_image_container foreground_image_container__mobile wow fadeInUp"
                                        data-wow-duration="0.8s" data-wow-delay="0.3s">

                                        <picture class="picture-with-ratio wow fadeIn" data-wow-duration="0.8s"
                                            data-wow-delay="0.3s" style="padding-top: calc(0.63888888888889 * 100%);"
                                            data-width="1080" data-height="690">
                                            <img src="https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground_mobile-2022-1024x654.png"
                                                data-sizes="auto" data-srcset="https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground_mobile-2022-1024x654.png 300w,
	    https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground_mobile-2022.png 600w,
	    https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground_mobile-2022.png 900w"
                                                data-src="https://www.wearemiq.com/wp-content/uploads/2022/07/Hero_foreground_mobile-2022.png"
                                                class="lazyload" alt="">
                                        </picture>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>








        </div>


        </div>
        </div>
        </div>

        <div class="page4" style="background-color: #FFCA01; padding-top: 50px;">
            <div class="img-container">
                <img src="{{asset('frontend/img/img-miq/page4.png')}}" alt="Page4">

            </div>
        </div>
        <div class="page4" style="background-color: #2F0D30;">
            <div class="img-container">
                <img src="{{asset('frontend/img/img-miq/page5.png')}}" alt="Page5">
            </div>
        </div>

        <div class="page4" style="background-color: #2F0D30;">
            <div class="img-container">
                <img src="{{asset('frontend/img/img-miq/page6.png')}}" alt="Page6">
            </div>
        </div>

        <div class="page4" style="background-color: #2F0D30;">
            <div class="img-container">
                <img src="{{asset('frontend/img/img-miq/page7.png')}}" alt="Page7">
            </div>
        </div>
        <div class="page4">
            <div class="img-container">
                <img src="{{asset('frontend/img/img-miq/page8.png')}}" alt="Page8">
            </div>
        </div>

        <div class="clearfix section-block js-section-block client_strip  ">
            <div class="section-block--inner-wrap">
                <div class="section-block--content-wrap">
                    <!-- <pre> -->
                    <!-- </pre> -->


                    <div class="module_content_container text__light module_content_container--bg-colour__other module_content_container--layout__"
                        style="background-color: #310039">


                        <div class="block_content">
                            <div class="block_content--inner-wrapper">

                                <div class="module_content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">


                                    <span class="tagline tagline__light  tagline--bg-colour__gradient">
                                        What we do </span>
                                    <h2 class="heading headline-with-gradient">Make your campaigns work harder
                                    </h2>


                                    <a class="cta_copy button yellow_outline"
                                        href="https://www.wearemiq.com/media-solutions/">Discover how</a>

                                </div>
                                <div class="image_container">

                                    <picture class="picture-with-ratio wow fadeIn" data-wow-duration="0.8s"
                                        data-wow-delay="0.3s" style="padding-top: calc(0.5615866388309 * 100%);"
                                        data-width="958" data-height="538">
                                        <img src="https://www.wearemiq.com/wp-content/uploads/2020/07/bcm4.gif"
                                            data-sizes="auto" data-srcset="https://www.wearemiq.com/wp-content/uploads/2020/07/bcm4.gif 300w,
	    https://www.wearemiq.com/wp-content/uploads/2020/07/bcm4.gif 600w,
	    https://www.wearemiq.com/wp-content/uploads/2020/07/bcm4.gif 900w"
                                            data-src="https://www.wearemiq.com/wp-content/uploads/2020/07/bcm4.gif"
                                            class="lazyload" alt="connected devices gif">
                                    </picture>
                                </div>



                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix section-block js-section-block connected_points  ">
            <div class="section-block--inner-wrap">
                <div class="section-block--content-wrap">
                    <!-- <pre> -->
                    <!-- </pre> -->


                    <div
                        class="connected_points_container text__dark connected_points_container--bg-colour__grey connected_points_container__styling--default connected_points_container--layout__">


                        <div class="block_content">
                            <div class="block_content--inner-wrapper wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.3s">

                                <div class="module_content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">


                                    <h2 class="heading headline-with-gradient">Why MiQ?</h2>
                                </div>
                                <div class="connected_points_list">
                                    <div class="point_content">
                                        <div class="point_content--point point_content--point-color__red">
                                            <svg id="aa7c074f-b220-49d9-97b5-514211532589" data-name="Layer 1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 12">
                                                <path d="M4.63,12,0,7.52l1-1L4.63,10,15,0l1,1Z" fill="#fff" />
                                            </svg>
                                        </div>
                                        <h3 class="point_content--point_title">The right partners</h3>
                                        <p class="point_content--point_copy">Our model is agnostic, so we can
                                            work with whatever data, DSP, publisher, or exchange is going to
                                            drive the best results for you.</p>
                                    </div>
                                    <div class="point_content">
                                        <div class="point_content--point point_content--point-color__red">
                                            <svg id="aa7c074f-b220-49d9-97b5-514211532589" data-name="Layer 1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 12">
                                                <path d="M4.63,12,0,7.52l1-1L4.63,10,15,0l1,1Z" fill="#fff" />
                                            </svg>
                                        </div>
                                        <h3 class="point_content--point_title">The right technology</h3>
                                        <p class="point_content--point_copy">Access an industry of programmatic
                                            capabilities all in one place with our layer of technology
                                            connecting data, platforms and inventory.</p>
                                    </div>
                                    <div class="point_content">
                                        <div class="point_content--point point_content--point-color__red">
                                            <svg id="aa7c074f-b220-49d9-97b5-514211532589" data-name="Layer 1"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 12">
                                                <path d="M4.63,12,0,7.52l1-1L4.63,10,15,0l1,1Z" fill="#fff" />
                                            </svg>
                                        </div>
                                        <h3 class="point_content--point_title">The right people</h3>
                                        <p class="point_content--point_copy">Our full-service team will help you
                                            every step of the way, listening to your business challenges and
                                            building exactly what’s needed to solve them.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div id="work-with-us" class="clearfix section-block js-section-block text_boxes  ">
            <div class="section-block--inner-wrap">
                <div class="section-block--content-wrap">
                    <!-- <pre> -->
                    <!-- </pre> -->
                </div>
            </div>
        </div>
        <div class="ad-gallery">
            <h1 style="font-size: 40px;">Success Stories</h1>
            <div id="card-container" class="ad-gallery-container">
                @foreach ($s_stories as $s_stories)
                    <div class="gallery-card-container">
                        <button type="button" data-id='{{ $s_stories->id }}' class="gallery-card viewdetails"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <img alt="" src="{{ url('/upload/sscard/' . $s_stories->ss_card) }}">
                            <p>{{ $s_stories->ss_title }}</p>
                        </button>
                    </div>
        
                    <!-- Modal -->
                    <div class="modal fade" id="myModal-{{ $s_stories->id }}" data-bs-backdrop="true" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="main-ss-content" class='body-bg'>
                                        <button type="button" class="btn btn-danger close-sz"
                                            data-bs-dismiss="modal">X</button>
                                        <h1 class="ss-title">Case Study<span style="color: red; margin-left: 6%;">-
                                                {{ $s_stories->adveritser_name }}</span>
                                        </h1>
                                        <div class="ss-top-right"><img src="{{ asset('upload/advertiserlogo/' . $s_stories->content_image) }}"
                                                alt="">
                                        </div>
                                        <div class="ss-bottom-right"><img
                                                src="{{ asset('frontend/img/ss-content/logos/pokkt.png') }}" alt="">
                                        </div>
                                        <div class="ss-bottom-left"><img
                                                src="{{ asset('frontend/img/ss-content/logos/bitspearhead.png') }}"
                                                alt="">
                                        </div>
                                        <div style="color: aliceblue;"></div>
                                        @if ($s_stories->status == 2)
                                            <div class="ss-center-pc">
                                                <img src="{{ asset('frontend/img/ss-content/pc.png') }}" alt="">
                                                <img src="{{ asset('upload/content/' . $s_stories->content_video) }}" alt="">
        
                                            </div>
                                        @else
                                            <div class="ss-center">
                                                <img src="{{ asset('frontend/img/ss-content/phone.png') }}" alt="">
                                                @php
                                                $extension = pathinfo(storage_path($s_stories->content_video), PATHINFO_EXTENSION);         
                                                @endphp
                                                @if ($extension == 'jpg' or $extension == 'png' or $extension == 'jpeg' or $extension == 'gif')
                                                    <img src="{{ asset('upload/content/' . $s_stories->content_video) }}" alt="">
                                                    @else
                                                    <video class="videoplayer" autoplay="" webkit-playsinline=""
                                                    playsinline="" muted="" loop=""
                                                    src="{{ asset('upload/content/' . $s_stories->content_video) }}"></video>
                                                    @endif
                                            </div>
                                        @endif
        
                                        <div class="ss-left">
                                            <p>Platform:</p>
                                            <p style="font-weight: bold;">{{ $s_stories->platform_name }}</p><br><br>
                                            <p>Placement:</p>
                                            <p style="font-weight: bold;">{{ $s_stories->placement }}</p><br><br>
                                            <p>Campaign Objective:</p>
                                            <p style="font-weight: bold;">{{ $s_stories->campaign_objective }}</p><br><br>
                                            <p>Campaign Module:</p>
                                            <p style="font-weight: bold;">{{ $s_stories->campaign_module }}</p><br><br>
                                            <p>Campaign Duration:</p>
                                            <p style="font-weight: bold;">{{ $s_stories->campaign_duration }}</p>
                                        </div>
        
                                        <div class="ss-right">
                                            @foreach ($s_stories->attr as $s_attr)
                                                <p>{{ $s_attr->title }}</p>
                                                <p style="font-weight: bold;">{{ $s_attr->dynamic_field }}</p><br><br>
                                            @endforeach
                                        </div>
        
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -------modal-end--------------- -->
                @endforeach
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // $('.viewdetails').click(function() {
                //     $('#myModal').modal('show')
                // });
                $('.viewdetails').click(function() {
                    let id = $(this).data('id');
                    $('#myModal-' + id).modal('show')
                });
            });
        </script>









        <div class="trusted-brands-container">
            <h1>Trusted By <span>Brands</span></h1>
            <div class="swiper2 mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/miQ/arong.png')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/miQ/Basundhara.png')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/miQ/Himaloya.png')}}" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/img/Brand_logos/miQ/walton.png')}}" alt=""></div>

                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    var swiper2 = new Swiper(".mySwiper", {
      slidesPerView: 6,
      loop: true,
      spaceBetween: 30,
      centeredSlides: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
    </main>
    @endsection