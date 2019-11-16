<!DOCTYPE html>
<html>

<head>
    <title>Music Net</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="<?php echo base_url(); ?>resources/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="main">
        <div class="main_resize">
            <div class="header">
                <div class="logo">
                    <h1><a href="#"><span>Music</span>Net<small>Connect through music</small></a></h1>
                </div>
                <div class="clr"></div>
                <div class="hbg"><img src="<?php echo base_url(); ?>resources/images/header_images.jpg" width="923" height="291" alt="" /></div>
            </div>
            <div class="content">
                <div class="content_bg">
                    <div class="image_upload">
                        <div class="article">
                            <h2><span> Hi <?php echo $first_name ?>,Welcome to MusicNet! </span></h2>
                            <span class="description"> Upload your profile picture </span>
                            <div>
                                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png">
                                <?php echo form_open_multipart('imageupload/do_upload'); ?>
                                <input type='file' name='profile_image' size='20' />
                                <br /> <br />
                                <input type='submit' name='submit' value='Upload' />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clr"> </div>
                </div>
            </div>
        </div>

        <div class="fbg">
            <div class="fbg_resize">
                <div class="col c1">
                    <h2><span> Multiple Genres </span></h2>
                    <a href="#"><img src="<?php echo base_url(); ?>resources/images/footer_img_1.jpg" width="58" height="58" alt="" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>resources/images/footer_img_2.jpg" width="58" height="58" alt="" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>resources/images/footer_img_3.jpg" width="58" height="58" alt="" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>resources/images/footer_img_4.jpg" width="58" height="58" alt="" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>resources/images/footer_img_5.jpg" width="58" height="58" alt="" /></a>
                    <a href="#"><img src="<?php echo base_url(); ?>resources/images/footer_img_6.jpg" width="58" height="58" alt="" /></a>
                </div>
                <div class="col c2">
                    <h2><span>Lorem Ipsum</span></h2>
                    <p>Lorem ipsum dolor<br />
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
                </div>
                <div class="col c3">
                    <h2><span>About</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_resize">
            <p class="lf">&copy; Copyright <a href="#">Informatics Institue of Technology</a>.</p>
            <p class="rf"> By <a href="#">Sithum Pathirana</a></p>
            <div class="clr"></div>
        </div>
    </div>
    <div align=center> This content belongs to <a href='http://iit.ac.lk'> Informatics Institue of Technology </a> 57, Ramakrishna Road, Colombo 06,
        Sri Lanka. </div>
</body>