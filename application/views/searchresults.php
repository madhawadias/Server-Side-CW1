<div class="content">
    <div class="content_bg">
  <div class="userlist_sidebar">
            <div class="gadget">
                <h2 class="star"> User Results for ''  </h2>
                <div class="clr"></div>
                <ul class="sb_menu">
                    <?php
                      foreach($users_list as $u){
                         echo "<li>  <a >". $u->getUsername(). " </a> </li> ";
                      }
                    ?>
                    <!-- <li> <span> Firstname</span> Lastname </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Archives</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>