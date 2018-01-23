<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php echo bloginfo('charset'); ?>">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/ico/apple-touch-icon-57-precomposed.png">
	<?php wp_head(); ?>
</head>
<body <?php body_class( array('homepage', 'tajul', 'tania') ); ?>>