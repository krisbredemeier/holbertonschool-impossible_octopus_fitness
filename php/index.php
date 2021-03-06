<?php
  $users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];?>

  <?php
  function userExists($login, $password, $users){
    foreach($users as $user) {
      if($user['login'] == $login);
      if($user['password'] == $password);
        return $user['full_name'];
    }
    return false;
}
$failed = false;
$msg = '';
if (isset($_POST['login']) && !empty($_POST['username'])
   && !empty($_POST['password'])) {
     $_SESSION["user"] = userExists($_POST['login'], $_POST['password'], $users);

   if ($_SESSION["user"] != false) {
      $_SESSION['valid'] = true;
      $_SESSION['timeout'] = time();

      echo 'You have entered valid use name and password';
   }else {
      $msg = 'Invalid credentials - Wrong username or password';
   }
}
?>


<!doctype html>


<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <title>impossible octopus fitness</title>
        <meta name="description" content="impossible octopus fitness">
        <meta name="Kris and Rona" content="impossible octopus fitness">
        <meta name="viewport" content="width=760, initial-scale=1.0">

        <!-- Style References -->
        <link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Javascript -->
        <script src="scripts/post_a_status.js"></script>
        <script src="scripts/reply.js"></script>
        <script src="scripts/toggle.js"></script>
        <script src="scripts/ajax.js"></script>
        <script src="scripts/load_more.js"></script>
    </head>


    <body>
        <div id="container">

            <!-- HEADER -->
            <header>

                <!-- actual header -->
                <div id="header_block">
                        <img id="warbler_logo" width="100" src="http://www.procliparts.com/cliparts/pele/ekiE9gTAo-orange-bird.png" alt="log">

                        <h2><?php echo $msg; ?></h2>
                        <?php if (isset($_POST['login'])) { ?>
                        <p>hello <?php echo $_POST['username']; ?></p>
                        <p> Your rot13’d login is: <?php
                        echo (str_rot13($_POST['password']));
                        ?></p>
                        <p> The length of your login is:  <?php
                        echo (strlen ($_POST['password']));
                        ?></p>
                        <?php } else echo 'Hello there' ?>


                        <h1>Warbler</h1>
                        <p id="tag_line">Home of Impossible Octopus Fitness.</p>


                </div>

                <!-- login/logout links-->
                <ol id="log_in_links">
                    <li><a href="#log_in_links">Edit my profile</a></li>
                    <li><a href="twitter_log_out.html">Logout</a></li>
                </ol>

                <!-- navigation menu -->
                <div id="centeredmenu">
                    <ul id="menu">
                        <li><a href="impossible_octopus_fitness.html">About</a></li>
                        <li><a href="twitter_profile.html">My Statuses</a></li>
                        <li><a href="twitter_list.html">All Users</a></li>
                    </ul>
                </div>

            </header>


            <!--MAIN-->
            <main>

                <!-- section for user statuses -->
                <section id="homepage_section">

                    <!-- post status form -->
                    <h2>Post a Warble</h2>

                    <form id="status_form">
                        <textarea title="status form" rows="4" cols="75">
                        </textarea>
                        <input type="checkbox" id="s_checkbox"><label for="s_checkbox">Use location?</label>
                        <button type="submit" type="submit">Post</button>
                    </form>

                    <a class="button" id="post_link" href="#post_link">Post a status</a>

                    <!-- status updates -->
                    <h2>User Warbles</h2>


                    <!--block 1-->
                    <div class="status_update orange">
                        <div class="image_block">
                            <img alt="user_picture" class="status_img" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/034/thumb/image.png?1452813921" />
                            <h3>Kris Bredemeier</h3>
                            <h3>1/31/2016</h3>
                        </div>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </p>
                        </div>
                        <div class="reply_div orange">
                            <form class="reply_form" id="reply_1">
                                <textarea title="reply form" rows="4" cols="75">
                                </textarea>
                                <input type="checkbox" id="r_checkbox1"><label for="r_checkbox1">Use location?</label>
                                <button type="submit">Post</button>
                            </form>
                            <a class="reply_link button" data-form_no="reply_1" href="#reply_1">Post a reply</a>
                        </div>
                    <br/>

                    <!--block 2-->
                    <div class="status_update orange">
                        <div class="image_block">
                            <img alt="user_picture" class="status_img" src="https://holbertonintranet.s3.amazonaws.com/users/photos/000/000/020/thumb/images.png?1458239784" />
                            <h3>Rona Chong</h3>
                            <h3>2/02/2016</h3>
                        </div>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </p>
                    </div>
                        <div class="reply_div orange">
                            <form class="reply_form" id="reply_2">
                                <textarea title="reply form" rows="4" cols="75">
                                </textarea>
                                <input type="checkbox" id="r_checkbox2"><label for="r_checkbox2">Use location?</label>
                                <button type="submit">Post</button>
                            </form>
                            <a class="reply_link button" data-form_no="reply_2" href="#reply_2">Post a reply</a>
                        </div>
                    <br/>

                    <!--block 3-->
                    <div class="status_update orange">
                        <div class="image_block">
                            <img alt="user_picture" class="status_img" src="https://www.holbertonschool.com/assets/portraits/rudy-4304612245b36c56ac72cdd28ad0cf8a9d028ef61478ac87aaabe068da940a56.jpg" />
                            <h3>Rudy Rigot</h3>
                            <h3>4/24/2420</h3>
                        </div>
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                        <div class="reply_div orange">
                            <form class="reply_form" id="reply_3">
                                <textarea title="reply form" rows="4" cols="75">
                                </textarea>
                                <input type="checkbox" id="r_checkbox3"><label for="r_checkbox3">Use location?</label>
                                <button type="submit">Post</button>
                            </form>
                            <a class="reply_link button" data-form_no="reply_3" href="#reply_3">Post a reply</a>
                        </div>

                        <h2> ㄟ( ･◇･ )ㄏ </h2>
                        <button id="see_more" class="button" type="button" >See more statuses</button>
                        <div id="more_statuses"></div>

                </section>


                <!-- aside for user bios -->
                <aside>

                    <!--block 1-->
                    <div class="bio_block" id="block">
                        <div class="image_block">
                            <img alt="image of featured user" src="https://www.holbertonschool.com/assets/portraits/sylvain-77f70e45719e3f1f0fbbc97f7bb8ef02b8361bd640a5747b200a1c87c9813b2a.jpg" />
                            <br>
                            <br>
                            <p>Mr. Smiley</p>
                        </div>
                        <p class="bio_paragraph">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                    <!--block 2-->
                    <div class="bio_block" id="block2">
                        <div class="image_block">
                            <img alt="image of featured user" src="https://www.holbertonschool.com/assets/portraits/julien-3ecadbba47cb3d2d3491ef5bdc9a2f36774a42caf310cbef659435c622fba03c.jpg" />
                            <br>
                            <br>
                            <p>The Marketing Guy</p>
                        </div>
                        <p class="bio_paragraph">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>

                </aside>
            </main>

            <!-- FOOTER -->
            <footer class="footer_background">
                <div class="follow">
                  <a href="https://twitter.com/codechick1" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @codechick1</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>

              </div>
                <p id="footer_msg">Welcome users! Our application is in beta - made by - Kris Bredemeier and Rona Chong.</p>
            </footer>

        </div>
    </body>
</html>
