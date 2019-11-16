<div class="content">
    <div class="content_bg">
        <div class="userlist_sidebar">
            <div class="gadget">
                <?php
                if (is_array($users_list)) {
                    echo "<h2 class='star'> Search Results for '" . $search_input . "' </h2>";
                } else {
                    switch ($users_list) {

                        case "There are no users":
                            echo "<h2 class='star'> No users found for '" . $search_input . "' </h2>";
                            break;

                        case "There is no such genre available":
                            echo "<h2 class='star'> No such genre available '" . $search_input . "' </h2>";
                            break;
                    }
                }
                ?>
                    <div class="clr"></div>
                    <ul class="sb_menu">
                        <?php
                        if (is_array($users_list)) {
                            foreach ($users_list as $u) {
                                $profile_url = base_url() . 'index.php/profile/' . $u->getUserId();
                                $image_url="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png";
                                echo "<li> 
                                 <a href='$profile_url'> 
                                 <div> " .
                                    "<div class='info_content'>" .
                                    "<img class='genre_result_image' src='$image_url' style='height:auto;width:9%''>" .
                                    "<h3>" . $u->getUsername() . "</h3>" .
                                    "<h4>" . $u->getUsername() . "</h4>" .
                                    "</div>" .
                               "</div>
                                  </a> 
                                 </li> <hr>";
                            }
                        }

                        ?>
                        <!-- <li> <span> Firstname</span> Lastname </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Archives</a></li> -->
                    </ul>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>