<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang='<?php bloginfo('language');?>'> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang='<?php bloginfo('language');?>'> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang='<?php bloginfo('language');?>'> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang='<?php bloginfo('language');?>'> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <title><?php wp_title(); ?></title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <!-- Generated -->
        <?php wp_head();?>
    </head>