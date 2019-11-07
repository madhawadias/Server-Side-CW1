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
                <div class="search-group">
                    <form method="post" action="<?php echo base_url(); ?>index.php/timeline/search_users"  > 
                         <input type="text" name="genre_name_input" placeholder="Search people by genre"> 
                         <input type="submit" value="Search">
                        <form>
                     </div>
            </div>