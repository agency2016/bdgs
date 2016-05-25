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
        <div class="container-fluid main_container_bdgs">
            <?php echo $bdgs_main_body; ?>
        </div>
        

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