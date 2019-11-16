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
            <div class="clr"></div>
        </div>
    </div>