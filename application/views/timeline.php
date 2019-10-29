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
                <div class="menu_nav">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="support.html">Friends</a></li>
                        <li><a href="about.html">Followers</a></li>
                        <li><a href="blog.html">Following</a></li>
                        <li><a href="contact.html"> Settings </a></li>
                    </ul>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="content">
                <div class="content_bg">
                    <div class="mainbar">
                        <div class="article">
                            <h2 class="create_post_title"><span> Create Post</span></h2>
                            <div class="post_box">
                                <form method="post" action="<?php echo base_url(); ?>index.php/timeline/create_post">
                                    <textarea placeholder="What's on your mind?" name="post_content"></textarea>
                                    <input type="submit" value="Post">
                                </form>
                            </div>
                        </div>

                        <div class="article">
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="gadget">
                            <h2 class="star"><?php echo $username ?></h2>
                            <div class="clr"></div>
                            <ul class="sb_menu">
                                <li> <span> Firstname</span> Lastname </li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Archives</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>