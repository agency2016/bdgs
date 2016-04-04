<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta itemprop="name" content="<?php echo $title ?>">
        <meta itemprop="description" content="<?php echo $description ?>">

        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="author" content="<?php echo $author ?>" />
        <link rel="icon" href="<?php echo base_url('resources/icons/gono-songhoti-andolon-logo.jpg'); ?>" type="image/jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <?php foreach ($meta_data as $key => $custom_meta_): ?>
            <meta name="<?php echo $key ?>" content="<?php echo $custom_meta_ ?>" />
        <?php endforeach; ?>
        
        <script language="javascript" src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&sensor=true&v=3"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet'>

        <?php foreach ($bdgs_font as $key => $font_name): ?>
            <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=<?php echo $font_name; ?>'>
        <?php endforeach; ?>
         <?php foreach ($bdgs_css as $key => $css_file_name): ?>
            <link rel="stylesheet" href="<?php echo base_url('resources/css/' . $css_file_name . '.css'); ?>" />
        <?php endforeach; ?>
         <?php foreach ($bdgs_js as $key => $js_file_name): ?>
            <script type="text/javascript" src="<?php echo base_url('resources/js/' . $js_file_name . '.js'); ?>"></script>
        <?php endforeach; ?>


    </head>

    <body>

        <?php echo $bdgs_main_body; ?>

        <!-- Load stylesheet -->
        <?php foreach ($bdgs_css_footer as $key => $css_file_name): ?>
            <link rel="stylesheet" href="<?php echo base_url('resources/css/' . $css_file_name . '.css'); ?>">
        <?php endforeach; ?>

        <!-- Load Javascript -->
        <?php foreach ($bdgs_js_footer as $key => $js_file_name): ?>
            <script type="text/javascript" src="<?php echo base_url('resources/js/' . $js_file_name . '.js'); ?>"></script>
        <?php endforeach; ?>
    </body>
</html>