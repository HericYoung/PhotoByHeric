<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Photo By Heric</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="<?php echo (HOME_CSS_URL); ?>font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo (HOME_ASSETS_URL); ?>bootstrap/css/bootstrap.min.css" />

    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo (HOME_ASSETS_URL); ?>animate/animate.css" />
    <link rel="stylesheet" href="<?php echo (HOME_ASSETS_URL); ?>animate/set.css" />

    <!-- gallery -->
    <link rel="stylesheet" href="<?php echo (HOME_ASSETS_URL); ?>gallery/blueimp-gallery.min.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo (HOME_IMG_URL); ?>camera.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo (HOME_IMG_URL); ?>camera.ico" type="image/x-icon">


    <link rel="stylesheet" href="<?php echo (HOME_ASSETS_URL); ?>style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav"  style="text-align: center;background-color: #000000;border-color: #000000;">
            <div class="container"  style=" text-align: center;margin-top: 12px;margin-bottom: 12px;">
                <div style="margin:0 auto">
                    <!-- Logo Starts -->
                    <a href="#"><img src="<?php echo (HOME_IMG_URL); ?>logo.png" alt="logo"></a>
                    <!-- #Logo Ends -->
                </div>
            </div>
        </div>
    </div>

</div>

<!-- #Header Starts -->

<!-- works -->
<div id="works"  class="clearfix grid" style="background-color: #000000">
    <?php if(is_array($albumList)): foreach($albumList as $key=>$album): ?><figure class="effect-oscar  wowload fadeIn">
            <img src="<?php echo (ALBUM_URL); echo ($album['album_id']); ?>/thumbnail.jpg" alt="<?php echo ($album['album_id']); ?>"/>
            <figcaption>
                <p><br>
                    <a href="<?php echo (ALBUM_URL); echo ($album['album_id']); ?>/<?php echo ($album['cover_name']); ?>.jpg" title="<?php echo ($album['cover_name']); ?>" onclick="showAlbum(this);"><?php echo ($album['amount']); ?>张照片</a>

                    <?php if(is_array($photoList)): foreach($photoList as $key=>$photo): if(($photo['album_id'] == $album['album_id'] AND $photo['name'] != $album['cover_name'])): ?><a style="display:none" href="<?php echo (ALBUM_URL); echo ($album['album_id']); ?>/<?php echo ($photo['name']); ?>.jpg" title="<?php echo ($photo['name']); ?>"></a><?php endif; endforeach; endif; ?>
                </p>
            </figcaption>
        </figure><?php endforeach; endif; ?>
</div>
<!-- works -->




<!-- About Starts -->
<div class="highlight-info">
    <div class="overlay spacer">
        <div class="container">
            <div class="row text-center  wowload fadeInDownBig">
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-book  fa-5x"></i><h4><?php echo ($albumAmount); ?>个相册</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-photo  fa-5x"></i><h4><?php echo ($photoAmount); ?>张照片</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-user fa-5x"></i><h4><?php echo ($visits); ?>次访问</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-camera fa-5x"></i><h4>EOS 750D</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Ends -->


<!-- Footer Starts -->
<div class="footer text-center spacer">
    <p class="wowload flipInX">
        <a href="#">
            <i class="fa fa-facebook fa-2x"></i>
        </a>
        <a href="#">
            <i class="fa fa-instagram fa-2x"></i>
        </a>
        <a href="#">
            <i class="fa fa-twitter fa-2x"></i>
        </a>
        <a href="#">
            <i class="fa fa-weixin fa-2x"></i>
        </a>
    </p>
    Photo By Heric
</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>


<!-- jquery -->
<script src="<?php echo (HOME_ASSETS_URL); ?>jquery.js"></script>

<script type="text/javascript">
    function showAlbum(obj){
        $('a').removeAttr('data-gallery');
        $(obj).parent().find('a').attr('data-gallery','');
    }
</script>

<!-- wow script -->
<script src="<?php echo (HOME_ASSETS_URL); ?>wow/wow.min.js"></script>


<!-- boostrap -->
<script src="<?php echo (HOME_ASSETS_URL); ?>bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?php echo (HOME_ASSETS_URL); ?>mobile/touchSwipe.min.js"></script>
<script src="<?php echo (HOME_ASSETS_URL); ?>respond/respond.js"></script>

<!-- gallery -->
<script src="<?php echo (HOME_ASSETS_URL); ?>gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="<?php echo (HOME_ASSETS_URL); ?>script.js"></script>

</body>
</html>