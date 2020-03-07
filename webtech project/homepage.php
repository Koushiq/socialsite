<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        session_destroy();
        header("location:login.php");
    }
    $username=$_SESSION['username'];
?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="basicstyling.css">
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
       
       <div class="form-input" id="top">
            <uL class="top_nav">
                <li class="top_search">
                    <input type="search" placeholder="Search">
                </li>
                <li class="first_element" id="item_upper_space">
                    <a href="profile.php" class="text_angel">Profile</a>
                </li>
                <li id="item_upper_space">
                    <a href="homepage.php" class="text_angel">Home</a>
                </li>
                <li class="logo top_nav_pic" id="item_upper_space">
                    <a href="#" ><img src="friendRequest.png"></a>
                </li>
                <li class="logo top_nav_pic" id="item_upper_space">
                        <a href="#"><img src="message.png"></a>
                </li>
                <li class="logo top_nav_pic" id="item_upper_space">
                    <a href="#"><img src="notification.png"></a>
                </li>
                <li class="logo top_nav_pic" id="item_upper_space">
                    <a href="logout.php"><img src="logout.png"></a>
                </li>
            </uL>
       </div>


        <div class="row">

            <div class="column center_align" id="col-1">
               
            </div>

            <div class="column" id="col-2">

               <div class="post">
                    <textarea id="txtArea" class="med_font" name="message"  placeholder="What's on your mind ? " style="resize:none;"></textarea>
                    <div class="btn btn_container">
                            <ul  id="post_type">
                                <li><input type="button" value="Add Photos"></li>
                                <li><input type="button" value="Tag"></li>
                            </ul>
                    </div>
                    <div class="btn btn_danger center_align" id="post-btn">
                        <input type="submit" value="POST" id="post-status">
                    </div>
               </div>
               

               <!--div for news feed-->
               <div class="news_feed_post">
                    <div class="logo chat_box" id="poster_pic">
                        <img src="1.jpg">
                        <a href="#" class="text_primary">
                            <p class="med_font" id="poster_name">Carlos</p>   
                        </a> 
                    </div>
                    <!--feedcontent-->
                    <p>Hello World!</p>
                    <p>I am carlos</p>
                    <!--feed image-->
                    <img src="1234.jpg" class="post_img">
                    <div class="like_count">
                        <p>10 Likes</p>
                    </div>
               </div>

               <div class="like_comment_section">

                  <div class="like_comment_btn">
                        <a href="#" class="text_primary">
                            <i class="like_comment_img logo"> 
                                <img src="like.png">
                            </i>
                            <p>  
                                <b>Like</b>  
                            </p>
                        </a>
                  </div>

                  <div class="like_comment_btn">
                    <a href="#" class="text_primary">
                        <i class="like_comment_img logo" id="comment_pic"> 
                            <img src="comment.png">
                        </i>
                        <p>  
                            <b>Comment</b>  
                        </p>
                    </a>
                 </div>

               </div>
               <div class="comment">
                   <div class="load_comments">
                        <ul>
                            <li class="write_comment logo" id="load_comment_section">
                                <img src="2.jpg">
                                <p>Wow nice picture</p>
                            </li>
                            <li class="write_comment logo" id="load_comment_section">
                                <img src="3.jpg">
                                <p>Damn! Cool picture</p>
                            </li>
                        </ul>
                   </div>

                    <div class="form-input">
                        <div class="write_comment logo">
                            <img src="1.jpg">
                            <input type="text" placeholder="add a comment..">
                        </div>
                    </div>

               </div>

             

              <!--extra space -->
              <div class="extra_space">
                  
              </div>
              
            </div>


            <!--Chatlist-->
            <div class="column" id="col-3">
                <ul>
                    <li class="logo chat_box" >
                        <img src="1.jpg">
                        <a href="#" class="text_dark">
                            <p>Carlos</p>   
                        </a> 
                        <span class="active_now al"></span>
                    </li>
                    <li class="logo chat_box" >
                        <img src="2.jpg">
                        <a href="#" class="text_dark">
                            <p>Nicolas</p>
                        </a>
                        <span class="active_now"></span>
                    </li>
                    <li class="logo chat_box" >
                        <img src="3.jpg">
                        <a href="#" class="text_dark">
                            <p>Leoid</p>
                        </a> 
                        <span class="active_now"></span>
                    </li>
                    <li class="logo chat_box" >
                        <img src="4.jpg">
                        <a href="#" class="text_dark">
                            <p>Alex</p>
                        </a> 
                        <span class="active_now"></span>
                    </li>
                    <li class="logo chat_box" >
                        <img src="6.jpg">
                        <a href="#" class="text_dark">
                            <p>Maria</p>
                        </a>
                        <span class="not_now"></span>
                    </li>
                </ul>
            </div>



        </div>

    </body>

</html>