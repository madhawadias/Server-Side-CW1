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
                <div class="login">
                    <form method="post" id="search" action="<?php echo base_url(); ?>index.php/welcome/login">

                        <input type="text" placeholder="Username" name="username" id="username" autocomplete="off" />
                        <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" />
                        <input name="searchsubmit" type="submit" value="Login" id="searchsubmit" class="btn" />

                    </form>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
                <div class="hbg"><img src="<?php echo base_url(); ?>resources/images/header_images.jpg" width="923" height="291" alt="" /></div>
            </div>
            <div class="content">
                <div class="content_bg">
                    <div class="mainbar">
                        <div class="article">
                            <h2><span>Create an account </span></h2>
                            <span class="description"> It's quick and easy </span>
                            <div class="register_container">
                                <form method="post" action="<?php echo base_url(); ?>index.php/welcome/register">
                                    <div class="name_input">
                                        <input type="text" placeholder="First Name" name="firstname" id="firstname" />
                                        <input type="text" placeholder="Last Name" name="lastname" id="lastname" />
                                    </div>
                                    <div class="email_input">
                                        <input type="text" placeholder="Email Adress" name="email" id="email" onchange="" />
                                    </div>
                                    <div class="username_input">
                                        <input type="text" placeholder="Username" name="new_username" id="new_username" onchange="" />
                                    </div>
                                    <div class="password_input">
                                        <input type="password" placeholder="Password" name="new_password" id="new_password" />
                                    </div>
                                    <h3><span> Select your favourite music genres </span></h3>
                                    <div class="genre_input">
                                        <select multiple name="music_genres[]" id="genres">
                                            <?php
                                            if (count($genres) > 0) {
                                                foreach ($genres as $g) {
                                                    echo "<option value=" . $g->getGenreId() . ">" . $g->getGenreName() . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="register_btn">
                                        <input type="submit" value="Register">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">

                    </div>
                    <div class="clr">
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
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

</html>