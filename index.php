<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retyme</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>  
    <nav>
        <div class="left">
            <a href="index.php" style="color:white; text-decoration: none;">
                <div class="logo">
                 <img src="image/retyme.svg" style="width:50px;">

            </div>
            </a>
            <style>
                .wrapper {
                    max-width: 600px;
                    margin: 50% 5% 50%;
                    
                }
                .wrapper .search-input {
                    position: fixed;
                    top: 2px;
                    background: white;
                    width: 15%;
                    border-radius: 5px;
                    box-shadow: 0px 1px 5px 3px rgb(0,0,0,0.12);
                }
                .search-input input {
                    height: 55px;
                    width: 150%;
                    outline: none;
                    border: none;
                    border-radius: 5px;
                    padding: 0 60px 0 20px;
                    font-size: 18px; 
                    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
                } 
                .search-input.active .autocom-box{
                    padding: 10px 8px;
                    opacity: 1;
                    pointer-events: auto;
                }
                .search-input.active .autocom-box li {
                    display: block;
                }
                .search-input.input.active {
                    position: absolute;
                    top: 10%;
                }
                .search-input .icon {
                    height: 55px;
                    width: 55px;
                    line-height: 55px;
                    position: absolute;
                    top: 0;right: -50%;
                    text-align: center;
                    font-size: 20px;
                    color: #644bff;
                    cursor: pointer;
                }
                .search-input .autocom-box {
                    padding: 0px;
                    max-height: 280px;
                    overflow-y: auto;
                    opacity: 0;
                    pointer-events: none;
                }
                .autocom-box li {
                    list-style: none;
                    padding: 8px 12px;
                    width: 100%;
                    cursor: default;
                    border-radius: 3px;
                    display: none;
                }
                .autocom-box li a {
                    text-decoration: none;color: black;
                }
                .autocom-box li:hover {
                    background: #efefef;
                }
            </style>
           
            <div class="wrapper">
                <div class="search-input" >
                    <input type="text" placeholder="Search">
                    <div class="autocom-box">
                        <li><a href="./Friends/index.html">Friend</a></li>
                        <li><a href="./save.html">Saved</a></li>
                        <li><a href="./Friends/index.html">People</a></li>
                        <li><a href="./market.html">Marketplace</a></li>
                        <li><a href="./watch.html">watch</a></li>
                        <li><a href="./index.html">home</a></li>
                        <li><a href="#">see more</a></li>
                        <li><a href="./messanger/index.html">messanger</a></li>
                        <li><a href="#">mobile games</a></li>
                        <li><a href="#">Live</a></li>
                        <li><a href="#">photo</a></li>
                        <li><a href="#">Food Lovers</a></li>
                        <li><a href="#">Online Education</a></li>
                        <li><a href="./profile.html">ozodbek</a></li>
                        <li><a href="./profile.html">Senuda De Silva</a></li>
                        <li><a href="./profile.html">Charith Disanayaka</a></li>
                        <li><a href="./person.html">Alica Monterey</a></li>
                        <li><a href="./person.html">John Cristen</a></li>
                        <li><a href="./Friends/index.html">Record Dilan</a></li>
                        <li><a href="./profile.html">David Wolker</a></li>
                        <li><a href="./room.html">Alexsina Tonni</a></li>
                        <li><a href="./profile.html">George Wastele</a></li>
                        <li><a href="./profile.html">George Wastele</a></li>
                        <li><a href="./room.html">Create room</a></li>
                    </div>
                    <div class="icon"><i class="fas fa-search"></i></div>
                </div>
            </div>
        </div>
<div class="center" style="text-decoration:none; margin: 0 0 0 20%">

            <a href="index.php" style="text-decoration:none;color: #fff;">
                <i class="fa-solid fa-house-chimney"></i>
            </a>
            <a href="watch.php" style="text-decoration:none;color: #fff;">
                <i class="fa-solid fa-tv"></i>
            </a>
            <a href="./Reedwizer-shop/index.php" style="text-decoration:none;color: #fff;">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a href="Friends/friend.php" style="text-decoration:none;color: #fff;">
                <i class="fa-solid fa-users"></i>
            </a>

        </div>


        <div class="right">

            <a href="./edit-user.php" style="text-decoration:none;color:#000"><i class="fa-solid fa-list-ul"></i></a>
            <a href="./ChatApp - CodingNepal/index.php" style="text-decoration:none;color:#000"><i class="fa-brands fa-facebook-messenger"></i></a>
            <a href="./voice_assistent/voice.php" style="text-decoration:none;color:#000"><i class="fa-solid fa-bell"></i></a>
            <a href="#" style="text-decoration:none;color:#000"><i class="fa-solid fa-moon"></i></a>
            <a href="profile.php"><img src="image/profile.png"></a>
        </div>

    </nav>




    <!------------main--------------->

    <div class="main">

        <!------------------left------------------->

        <div class="left">
        <a href="profile.php" class="profile" style="text-decoration:none;color: #fff;">

                    <div class="img">
                        <img src="image/profile.png">
                        <p>ozodbek</p>
                    </div>
        </a>

           <a href="Friends/friend.php" class="fr" style="text-decoration: none;list-style: none;">
             <div class="img">
                <i class="fa-solid fa-people-line" style="font-size:2.1rem; color: lightblue;"></i>
                <p style="color:#fff; margin: 0 5%;">Friends</p>
            </div>

           </a>
        <a href="save.php" class="save" style="color: white;text-decoration: none;">
            <div class="img">
                <img src="image/saved.png">
                <p>Saved</p>
            </div>
        </a>
        <a href="Friends/friend.php" class="friend" style="color: white;text-decoration: none;">

            <div class="img">
                <img src="image/group.png">
                <p>People</p>
            </div>
        </a>
            <a href="./Reedwizer-shop/index.php" style="color: white;text-decoration: none;">

            <div class="img market">
                <i class="fa-solid fa-cart-shopping" style="color:#Fff;font-size:2rem;"></i>
                <p style="margin:0 5%;">Marketplace</p>
            </div>
            </a>

           <a href="watch.php"class="watch" style="color: white;text-decoration: none;">
             <div class="img">
                <img src="image/watch.png">
                <p>Watch</p>
            </div>
           </a>

            <div class="img">
                <img class="see_more" src="image/down_arrow.png">
                <p class="see_more">See more</p>
            </div>

            <hr class="hr">

            <h2 class="you_short">You shortcuts</h2>
            <a href="./profile.php" class="edit">Edit</a>

            <a style="text-decoration:none;color:white;" href="Drawing%2520App/index.html">
                <div class="shortcuts">
                <img src="image/shortcuts_1.png">
                <p>MOBILE GAMES</p>
            </div>
            </a>

            <a href="./eduweb-master/index.php" style="color:white;text-decoration:none;">
                <div class="shortcuts">
                    <img src="image/shortcuts_2.jpeg">
                    <p>Online Education</p>
                </div>
            </a>

            <div class="shortcuts">
                <img src="image/shortcuts_3.webp">
                <p>Food Lovers</p>
            </div>

            <div class="shortcuts">
                <img src="image/shortcuts_4.png">
                <p>Social Media Academy</p>
            </div>

            <a href="./Reedwizer-shop/index.php" style="color:white; text-decoration:none;">    
                <div class="shortcuts">
                    <img src="image/shortcuts_5.webp">
                    <p>PC Shop</p>
                </div>
            </a>

           

        </div>

        <!------------center---------------------->

        <div class="center">

            <div class="top_box">

                <a href="./story.php" style="text-decoration:none;color:white;">
                    <div class="my_story_card">

                    <img src="image/story_1.png">

                    <div class="story_upload">
                        <img src="image/upload.png">
                        <p class="story_tag">Create story</p>
                    </div>

                </div>
                </a>

            <a href="./story1.php" style="text-decoration:none;color:white;">
                
                    <div class="story_card">

                    <img src="image/story_2.jpg">

                    <div class="story_profile">

                        <img src="image/profile_1.jpg">
                        <div class="cricle"></div>
                        
                    </div>

                    <div class="story_name">
                        <p class="name">Charith Disanayaka</p>
                    </div>

                </div>
                    
            </a>

                <a href="./story2.php" style="text-decoration:none;color:white;">
                    <div class="story_card">

                    <img src="image/story_3.jpg">

                    <div class="story_profile">

                        <img src="image/profile_2.jpg">
                        <div class="cricle"></div>
                        
                    </div>

                    <div class="story_name">
                        <p class="name">Minidu Thiranjana</p>
                    </div>

                </div>

                </a>
                
                
                <a href="./story3.php" style="text-decoration:none;color:white;">
                    <div class="story_card">

                    <img src="image/story_4.png">

                    <div class="story_profile">

                        <img src="image/profile_3.jpg">
                        <div class="cricle"></div>
                        
                    </div>

                    <div class="story_name">
                        <p class="name">Kavisha Vidurangi</p>
                    </div>

                </div>
                </a>

                <a href="./story1.php" style="text-decoration:none;color:white;">
                
                    <div class="story_card">

                    <img src="image/story_5.jpg">

                    <div class="story_profile">

                        <img src="image/profile_4.png">
                        <div class="cricle"></div>
                        
                    </div>

                    <div class="story_name">
                        <p class="name">Kavindu Akalanka</p>
                    </div>

                </div>
                    
                </a>
            </div>
            <div class="my_post">

                <div class="post_top">

                    <img src="image/profile.png">
                    <input type="text" placeholder="What's on you mind, John?">

                </div>

                <hr>

                <div class="post_bottom">

                    <div class="post_icon">
                        <img src="image/live_video.png" style=" border-radius:  0 00 0 0;width: 150%;margin: 0 5%;">
                        <p>Live</p>
                    </div>

                    <div class="post_icon">
                        <i class="fa-solid fa-image" style="color:blue;font-size: 2.5rem;margin: 0 10%;"></i>
                        <p><input type="file" style="width:122% ;padding:10px;" value="Photo/video"></p>
                        
                    </div>

                    <a href="http://127.0.0.1:5500/felling-activities/index.html" style="text-decoration: none; color: #fff;">
                        <div class="post_icon">
                            <i class="fa-solid fa-face-smile" style="color:gold;font-size: 2.5rem;margin: 0 10%;"></i>
                            <p>Feeling/activity</p>
                        </div>
                    </a>

                </div>
            </div>
            <div class="room">
                
                <div class="room_image">

                    <img src="image/live_video.png">
                    <p class="room_tag">Create room</p>

                </div>
                <div class="room_profile">

                    <a href="./story.php" style="text-decoration: none;" />
                        <img src="image/profile_1.jpg">
                    </a>
                    <a href="./story2.php" style="text-decoration: none;" />
                        <img src="image/profile_2.jpg">
                    </a>
                    <a href="./story1.php" style="text-decoration: none;" />
                        <img src="image/profile_3.jpg">
                    </a>
                    <a href="./story3.php" style="text-decoration: none;" />
                        <img src="image/profile_4.png">
                    </a>
                    <a href="./profile.php" style="text-decoration: none;">
                        <img src="image/profile_5.png">
                    </a>
                    <a href="#">
                        <img src="image/profile_6.png">
                    </a>
        

                </div>
            </div>


            <div class="friends_post">

                <div class="friend_post_top">

                    <div class="img_and_name">

                        <img src="image/post_1.jpg">

                        <div class="friends_name">
                            <p class="friends_name">
                                Charith Disanayaka
                            </p>
                            <p class="time">16h.<i class="fa-solid fa-user-group"></i></p>
                        </div>
                        

                    </div>

                    <div class="menu">

                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

                </div>

                <img src="image/post_1.jpg">

                <div class="info">

                    <div class="emoji_img">

                        <i class="fa-sharp fa-solid fa-face-smile-hearts" style="color:yellow;font-size: 1.5rem;">😍</i>
                        <i class="fa-solid fa-thumbs-up" style="color:green;font-size: 1.5rem;margin: 0 2%;"></i>
                        <i class="fa-solid fa-heart" style="color:red;font-size: 1.5rem;"></i>
                        <p>You, Charith Disanayaka and 25K others</p>
                    </div>

                    <div class="comment">
                        <p>421 Comments</p>
                        <p>1.3K Shares</p>
                    </div>

                </div>

                <hr>

                <div class="like">

                    <div class="like_icon">
                        <i class="fa-regular fa-heart"></i>
                        <p>Like</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-message"></i>
                        <p>Comments</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-share"></i>
                        <p>Share</p>
                    </div>

                </div>

                <hr>

                <div class="comment_warpper">

                    <img src="image/profile.png">
                    <div class="circle"></div>

                    <div class="comment_search">

                        <input type="text"  placeholder="Write a comment">
                        <i class="fa-regular fa-face-smile"></i>
                        <i class="fa-solid fa-camera"></i>
                        <i class="fa-regular fa-note-sticky"></i>

                    </div>
                    
                </div>



             



            </div>

            <div class="friends_post">

                <div class="friend_post_top">

                    <div class="img_and_name">

                        <img src="image/profile_9.png">

                        <div class="friends_name">
                            <p class="friends_name">
                                Charty Deburg
                            </p>
                            <p class="time">16h.<i class="fa-solid fa-user-group"></i></p>
                        </div>
                        

                    </div>

                    <div class="menu">

                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

                </div>

                <img src="image/post_2.jpg">

                <div class="info">

                    <div class="emoji_img">
                        <img src="image/like.png">
                        <img src="image/haha.png">
                        <img src="image/heart.png">
                        <p>You, Charith Disanayaka and 25K others</p>
                    </div>

                    <div class="comment">
                        <p>421 Comments</p>
                        <p>1.3K Shares</p>
                    </div>

                </div>

                <hr>

                <div class="like">

                    <div class="like_icon">
                            <i class="fa-regular fa-heart"></i>
                        <p>Like</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-message"></i>
                        <p>Comments</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-share"></i>
                        <p>Share</p>
                    </div>

                </div>

                <hr>

                <div class="comment_warpper">

                    <img src="image/profile.png">
                    <div class="circle"></div>

                    <div class="comment_search">
                        
                        <input type="text" id="input_1" placeholder="Write a comment">
                        <i class="fa-regular fa-face-smile"></i>
                        <i class="fa-solid fa-camera"></i>
                        <i class="fa-regular fa-note-sticky"></i>

                    </div>
                    <div class="icon_vs_image_gif">
                        
                    </div>
                </div>

            </div>
            
            
            
        

            <div class="friends_post">

                <div class="friend_post_top">

                    <div class="img_and_name">

                        <img src="image/profile_10.png">

                        <div class="friends_name">
                            <p class="friends_name">
                                Alinka Deviceseswed
                            </p>
                            <p class="time">16h.<i class="fa-solid fa-user-group"></i></p>
                        </div>
                        

                    </div>

                    <div class="menu">

                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

                </div>

                <img src="image/post_3.png">

                <div class="info">

                    <div class="emoji_img">
                        <img src="image/like.png">
                        <img src="image/haha.png">
                        <img src="image/heart.png">
                        <p>You, Alinka Deviceseswed and 25K others</p>
                    </div>

                    <div class="comment">
                        <p>421 Comments</p>
                        <p>1.3K Shares</p>
                    </div>

                </div>

                <hr>

                <div class="like">

                    <div class="like_icon">
                         <i class="fa-regular fa-heart"></i>
                        <p>Like</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-message"></i>
                        <p>Comments</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-share"></i>
                        <p>Share</p>
                    </div>

                </div>

                <hr>

                <div class="comment_warpper">

                    <img src="image/profile.png">
                    <div class="circle"></div>

                    <div class="comment_search">

                        <input type="text" placeholder="Write a comment">
                        <i class="fa-regular fa-face-smile"></i>
                        <i class="fa-solid fa-camera"></i>
                        <i class="fa-regular fa-note-sticky"></i>

                    </div>

                </div>

            </div>

            <div class="friends_post">

                <div class="friend_post_top">

                    <div class="img_and_name">

                        <img src="image/profile_11.png">

                        <div class="friends_name">
                            <p class="friends_name">
                                Karolina Tarrorte
                            </p>
                            <p class="time">16h.<i class="fa-solid fa-user-group"></i></p>
                        </div>
                        

                    </div>

                    <div class="menu">

                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

                </div>

                <img src="image/post_4.jpg">

                <div class="info">

                    <div class="emoji_img">
                        <img src="image/like.png">
                        <img src="image/haha.png">
                        <img src="image/heart.png">
                        <p>You, Karolina Tarrorte and 25K others</p>
                    </div>

                    <div class="comment">
                        <p>421 Comments</p>
                        <p>1.3K Shares</p>
                    </div>

                </div>

                <hr>

                <div class="like">

                    <div class="like_icon">
                        <i class="fa-regular fa-heart"></i>
                        <p>Like</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-message"></i>
                        <p>Comments</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-share"></i>
                        <p>Share</p>
                    </div>

                </div>

                <hr>

                <div class="comment_warpper">

                    <img src="image/profile.png">
                    <div class="circle"></div>

                    <div class="comment_search">

                        <input type="text" placeholder="Write a comment">
                        <i class="fa-regular fa-face-smile"></i>
                        <i class="fa-solid fa-camera"></i>
                        <i class="fa-regular fa-note-sticky"></i>

                    </div>

                </div>

            </div>

            <div class="friends_post">

                <div class="friend_post_top">

                    <div class="img_and_name">

                        <img src="image/profile_12.jpg">

                        <div class="friends_name">
                            <p class="friends_name">
                                Malinka Stavyan
                            </p>
                            <p class="time">16h.<i class="fa-solid fa-user-group"></i></p>
                        </div>
                        

                    </div>

                    <div class="menu">

                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

                </div>

                <img src="image/post_5.jpg">

                <div class="info">

                    <div class="emoji_img">
                        <img src="image/like.png">
                        <img src="image/haha.png">
                        <img src="image/heart.png">
                        <p>You, Malinka Stavyan and 25K others</p>
                    </div>

                    <div class="comment">
                        <p>421 Comments</p>
                        <p>1.3K Shares</p>
                    </div>

                </div>

                <hr>

                <div class="like">

                    <div class="like_icon">
                        <i class="fa-regular fa-heart"></i>
                        <p>Like</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-message"></i>
                        <p>Comments</p>
                    </div>

                    <div class="like_icon">
                        <i class="fa-solid fa-share"></i>
                        <p>Share</p>
                    </div>

                </div>

                <hr>

                <div class="comment_warpper">

                    <img src="image/post_5.jpg">
                    <div class="circle"></div>

                    <div class="comment_search">

                        <input type="text" placeholder="Write a comment">
                        <i class="fa-regular fa-face-smile"></i>
                        <i class="fa-solid fa-camera"></i>
                        <i class="fa-regular fa-note-sticky"></i>

                    </div>

                </div>

            </div>

            <div class="loard">
                <button>Loard More</button>
            </div>

            <p class="end">Boovkmrem<span><i class="fa-regular fa-face-grin"></i></span>Social Media</p>


        </div>

        <!------------------right------------------>

        <div class="right">
            
            <div class="first_warpper">

                <div class="page">

                    <h2>Your Pages and profiles</h2>
                    <div class="menu">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>

                </div>

                <div class="page_img">
                    <img src="image/page.jpg">
                    <a href="./register_form.php" style="text-decoration:none;color:white;">Register From Boovkmrem</a>
                </div>

                <div class="page_icon">
                    <i class="fa-regular fa-bell"></i>
                    <p>20 Login person</p>
                </div>

                <div class="page_icon">
                    <i class="fa-solid fa-bullhorn"></i>
                    <p>Create promotion</p>
                </div>

            </div>

            <hr>

            <div class="second_warpper">

                <h2>Birthdays</h2>

                <div class="img_and_tag">

                    <img src="image/gift.png">
                    <p><span>Senuda De Silva </span>and<span> 2 others </span>have birthdays today</p>

                </div>

            </div>

            <hr>

            <div class="third_warpper">

            <div class="contact_tag">

                    <h2>Contacts</h2>

                    <div class="contact_icon">

                        <i class="fa-solid fa-video"></i>
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-solid fa-ellipsis"></i>

                    </div>

            </div>

        <div class="contact">

            <img src="image/contact_1.jpg">
            <p>Senuda De Silva</p>

        </div>

        <div class="contact">

            <img src="image/contact_2.jpg">
            <p>Record Dilan</p>

        </div>

    <div class="contact">

        <img src="image/contact_3.jpg">
        <p>John Cristen</p>

    </div>

    <div class="contact">

        <img src="image/contact_4.jpg">
        <p>Alica Monterey</p>

    </div>

    <div class="contact">

        <img src="image/contact_5.jpg">
        <p>Dalina Lenon</p>

    </div>

    <div class="contact">

        <img src="image/profile_1.jpg">
        <p>Alex Walken</p>

    </div>

    <div class="contact">

        <img src="image/profile_2.jpg">
        <p>Madina Ibragimova</p>

    </div>

    <div class="contact">

        <img src="image/profile_3.jpg">
        <p>Tomma Lenonas</p>

    </div>

    <div class="contact">

        <img src="image/profile_4.png">
        <p>David Wolker</p>

    </div>

    <div class="contact">

        <img src="image/profile_5.png">
        <p>Alexsina Tonni</p>

    </div>

    <div class="contact">

        <img src="image/profile_6.png">
        <p>George Wastele</p>

    </div>

    <div class="contact">

        <img src="image/profile_7.png">
        <p>Cristen Walker</p>

    </div>

</div>

</div>

            </div>

        </div>

    </div>

    <script src="./backend/api/main_1.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>

<script>
    document.querySelector(".like .like_icon .fa-heart").addEventListener("click", myFunction);

function myFunction() {
  document.querySelector(".like .like_icon .fa-heart").innerHTML = `<i class="fa-solid fa-heart" style="color: red;margin-left:-20px;"></i>`;
}

document.querySelector(".comment_warpper .comment_search").addEventListener("click", myFunction1);

function myFunction1() {
  document.querySelector(".comment_warpper .comment_search ").innerHTML = `
  

  <div class="imoji">
  <div class="d_block_imoji">
      <div class="imoji_icon">
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">❤️</b>
          <b class="icon_imoge">😍</b>
          <b class="icon_imoge">😊</b>
          <b class="icon_imoge">💋</b>
          <b class="icon_imoge">😋</b>
          <b class="icon_imoge">🤬</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">🙂</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">😉</b>
          <b class="icon_imoge">😔</b>
          <b class="icon_imoge">😜</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">🫡</b>
      </div>
      
      <div class="imoji_icon">
          <b class="icon_imoge">😀</b>
          <b class="icon_imoge">🥹</b>
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">🥲</b>
          <b class="icon_imoge">😇</b>
          <b class="icon_imoge">🥰</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">🫥</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🤓</b>
          <b class="icon_imoge">😎</b>
          <b class="icon_imoge">🥸</b>
          <b class="icon_imoge">🥳</b>
          <b class="icon_imoge">🤩</b>
          <b class="icon_imoge">😏</b>
          <b class="icon_imoge">😣</b>
          <b class="icon_imoge">😮‍💨</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😨</b>
          <b class="icon_imoge">🥵</b>
          <b class="icon_imoge">🥶</b>
          <b class="icon_imoge">😱</b>
          <b class="icon_imoge">🫣</b>
          <b class="icon_imoge">🥱</b>
          <b class="icon_imoge">😪</b>
          <b class="icon_imoge">😵‍💫</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🙊</b>
          <b class="icon_imoge">😁</b>
          <b class="icon_imoge">🤠</b>
          <b class="icon_imoge">😴</b>
          <b class="icon_imoge">😫</b>
          <b class="icon_imoge">🤯</b>
           <b class="icon_imoge">😗</b>
           <b class="icon_imoge">🤢</b>
          
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😵</b>
          <b class="icon_imoge">😷</b>
          <b class="icon_imoge">🤫</b>
          <b class="icon_imoge">🫠</b>
          <b class="icon_imoge">😸</b>
          <b class="icon_imoge">🤖</b>
          <b class="icon_imoge">😼</b>
          <b class="icon_imoge">🎃</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">✋</b>
          <b class="icon_imoge">🤛</b>
          <b class="icon_imoge">🤞</b>
          <b class="icon_imoge">👌</b>
          <b class="icon_imoge">🤟</b>
          <b class="icon_imoge">🤏</b>
          <b class="icon_imoge">🤌</b>
          <b class="icon_imoge">👋</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👐</b>
          <b class="icon_imoge">🙌</b>
          <b class="icon_imoge">👏</b>
          <b class="icon_imoge">🤝</b>
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">👎</b>
          <b class="icon_imoge">🫰</b>
          <b class="icon_imoge">👊</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🧑</b>
          <b class="icon_imoge">👨</b>
          <b class="icon_imoge">👱‍♀️</b>
          <b class="icon_imoge">👩‍🦳</b>
          <b class="icon_imoge">👳‍♀️</b>
          <b class="icon_imoge">👲</b>
          <b class="icon_imoge">🧔</b>
          <b class="icon_imoge">👵</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👮‍♀️</b>
          <b class="icon_imoge">💂‍♀️</b>
          <b class="icon_imoge">👨‍⚕️</b>
          <b class="icon_imoge">👩‍🌾</b>
          <b class="icon_imoge">👩‍🎓</b>
          <b class="icon_imoge">🕵️‍♀️</b>
          <b class="icon_imoge">👨‍🍳</b>
          <b class="icon_imoge">👩‍🏫</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">🧑‍💻</b>
          <b class="icon_imoge">👨‍🚀</b>
          <b class="icon_imoge">👰‍♀️</b>
          <b class="icon_imoge">🤴</b>
          <b class="icon_imoge">🦸‍♂️</b>
          <b class="icon_imoge">🧚</b>
          <b class="icon_imoge">💁</b>
          <b class="icon_imoge">🙇‍♂️</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">👬</b>
          <b class="icon_imoge">👩‍🦼</b>
          <b class="icon_imoge">🏃‍♀️</b>
          <b class="icon_imoge">🧎‍♀️</b>
          <b class="icon_imoge">🧍</b>
          <b class="icon_imoge">🏃</b>
          <b class="icon_imoge">👨‍🦽</b>
          <b class="icon_imoge">🕴</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👩‍❤️‍👨</b>
          <b class="icon_imoge">👩‍❤️‍👩</b>
          <b class="icon_imoge">👨‍👩‍👦</b>
          <b class="icon_imoge">👨‍👩‍👧‍👦</b>
          <b class="icon_imoge">👩‍👩‍👦</b>
          <b class="icon_imoge">👨‍👨‍👧‍👦</b>
          <b class="icon_imoge">👩‍👦</b>
          <b class="icon_imoge">👨‍👧‍👧</b>
      </div>
  </div>
  </div>
  
  
  
  `;
}
</script>

<script>
    document.querySelector(".like .like_icon .fa-heart").addEventListener("click", myFunction);

function myFunction() {
  document.querySelector(".like .like_icon .fa-heart").innerHTML = `<i class="fa-solid fa-heart" style="color: red;margin-left:-20px;"></i>`;
}

document.querySelector(".comment_warpper .comment_search").addEventListener("click", myFunction1);

function myFunction1() {
  document.querySelector(".comment_warpper .comment_search ").innerHTML = `
  

  <div class="imoji">
  <div class="d_block_imoji">
      <div class="imoji_icon">
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">❤️</b>
          <b class="icon_imoge">😍</b>
          <b class="icon_imoge">😊</b>
          <b class="icon_imoge">💋</b>
          <b class="icon_imoge">😋</b>
          <b class="icon_imoge">🤬</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">🙂</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">😉</b>
          <b class="icon_imoge">😔</b>
          <b class="icon_imoge">😜</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">🫡</b>
      </div>
      
      <div class="imoji_icon">
          <b class="icon_imoge">😀</b>
          <b class="icon_imoge">🥹</b>
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">🥲</b>
          <b class="icon_imoge">😇</b>
          <b class="icon_imoge">🥰</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">🫥</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🤓</b>
          <b class="icon_imoge">😎</b>
          <b class="icon_imoge">🥸</b>
          <b class="icon_imoge">🥳</b>
          <b class="icon_imoge">🤩</b>
          <b class="icon_imoge">😏</b>
          <b class="icon_imoge">😣</b>
          <b class="icon_imoge">😮‍💨</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😨</b>
          <b class="icon_imoge">🥵</b>
          <b class="icon_imoge">🥶</b>
          <b class="icon_imoge">😱</b>
          <b class="icon_imoge">🫣</b>
          <b class="icon_imoge">🥱</b>
          <b class="icon_imoge">😪</b>
          <b class="icon_imoge">😵‍💫</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🙊</b>
          <b class="icon_imoge">😁</b>
          <b class="icon_imoge">🤠</b>
          <b class="icon_imoge">😴</b>
          <b class="icon_imoge">😫</b>
          <b class="icon_imoge">🤯</b>
           <b class="icon_imoge">😗</b>
           <b class="icon_imoge">🤢</b>
          
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😵</b>
          <b class="icon_imoge">😷</b>
          <b class="icon_imoge">🤫</b>
          <b class="icon_imoge">🫠</b>
          <b class="icon_imoge">😸</b>
          <b class="icon_imoge">🤖</b>
          <b class="icon_imoge">😼</b>
          <b class="icon_imoge">🎃</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">✋</b>
          <b class="icon_imoge">🤛</b>
          <b class="icon_imoge">🤞</b>
          <b class="icon_imoge">👌</b>
          <b class="icon_imoge">🤟</b>
          <b class="icon_imoge">🤏</b>
          <b class="icon_imoge">🤌</b>
          <b class="icon_imoge">👋</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👐</b>
          <b class="icon_imoge">🙌</b>
          <b class="icon_imoge">👏</b>
          <b class="icon_imoge">🤝</b>
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">👎</b>
          <b class="icon_imoge">🫰</b>
          <b class="icon_imoge">👊</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🧑</b>
          <b class="icon_imoge">👨</b>
          <b class="icon_imoge">👱‍♀️</b>
          <b class="icon_imoge">👩‍🦳</b>
          <b class="icon_imoge">👳‍♀️</b>
          <b class="icon_imoge">👲</b>
          <b class="icon_imoge">🧔</b>
          <b class="icon_imoge">👵</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👮‍♀️</b>
          <b class="icon_imoge">💂‍♀️</b>
          <b class="icon_imoge">👨‍⚕️</b>
          <b class="icon_imoge">👩‍🌾</b>
          <b class="icon_imoge">👩‍🎓</b>
          <b class="icon_imoge">🕵️‍♀️</b>
          <b class="icon_imoge">👨‍🍳</b>
          <b class="icon_imoge">👩‍🏫</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">🧑‍💻</b>
          <b class="icon_imoge">👨‍🚀</b>
          <b class="icon_imoge">👰‍♀️</b>
          <b class="icon_imoge">🤴</b>
          <b class="icon_imoge">🦸‍♂️</b>
          <b class="icon_imoge">🧚</b>
          <b class="icon_imoge">💁</b>
          <b class="icon_imoge">🙇‍♂️</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">👬</b>
          <b class="icon_imoge">👩‍🦼</b>
          <b class="icon_imoge">🏃‍♀️</b>
          <b class="icon_imoge">🧎‍♀️</b>
          <b class="icon_imoge">🧍</b>
          <b class="icon_imoge">🏃</b>
          <b class="icon_imoge">👨‍🦽</b>
          <b class="icon_imoge">🕴</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👩‍❤️‍👨</b>
          <b class="icon_imoge">👩‍❤️‍👩</b>
          <b class="icon_imoge">👨‍👩‍👦</b>
          <b class="icon_imoge">👨‍👩‍👧‍👦</b>
          <b class="icon_imoge">👩‍👩‍👦</b>
          <b class="icon_imoge">👨‍👨‍👧‍👦</b>
          <b class="icon_imoge">👩‍👦</b>
          <b class="icon_imoge">👨‍👧‍👧</b>
      </div>
  </div>
  </div>
  
  
  
  `;
}
</script>
<script>
    document.querySelector(".like .like_icon .fa-heart").addEventListener("click", myFunction);

function myFunction() {
  document.querySelector(".like .like_icon .fa-heart").innerHTML = `<i class="fa-solid fa-heart" style="color: red;margin-left:-20px;"></i>`;
}

document.querySelector(".comment_warpper .comment_search").addEventListener("click", myFunction1);

function myFunction1() {
  document.querySelector(".comment_warpper .comment_search ").innerHTML = `
  

  <div class="imoji">
  <div class="d_block_imoji">
      <div class="imoji_icon">
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">❤️</b>
          <b class="icon_imoge">😍</b>
          <b class="icon_imoge">😊</b>
          <b class="icon_imoge">💋</b>
          <b class="icon_imoge">😋</b>
          <b class="icon_imoge">🤬</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">🙂</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">😉</b>
          <b class="icon_imoge">😔</b>
          <b class="icon_imoge">😜</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">🫡</b>
      </div>
      
      <div class="imoji_icon">
          <b class="icon_imoge">😀</b>
          <b class="icon_imoge">🥹</b>
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">🥲</b>
          <b class="icon_imoge">😇</b>
          <b class="icon_imoge">🥰</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">🫥</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🤓</b>
          <b class="icon_imoge">😎</b>
          <b class="icon_imoge">🥸</b>
          <b class="icon_imoge">🥳</b>
          <b class="icon_imoge">🤩</b>
          <b class="icon_imoge">😏</b>
          <b class="icon_imoge">😣</b>
          <b class="icon_imoge">😮‍💨</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😨</b>
          <b class="icon_imoge">🥵</b>
          <b class="icon_imoge">🥶</b>
          <b class="icon_imoge">😱</b>
          <b class="icon_imoge">🫣</b>
          <b class="icon_imoge">🥱</b>
          <b class="icon_imoge">😪</b>
          <b class="icon_imoge">😵‍💫</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🙊</b>
          <b class="icon_imoge">😁</b>
          <b class="icon_imoge">🤠</b>
          <b class="icon_imoge">😴</b>
          <b class="icon_imoge">😫</b>
          <b class="icon_imoge">🤯</b>
           <b class="icon_imoge">😗</b>
           <b class="icon_imoge">🤢</b>
          
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😵</b>
          <b class="icon_imoge">😷</b>
          <b class="icon_imoge">🤫</b>
          <b class="icon_imoge">🫠</b>
          <b class="icon_imoge">😸</b>
          <b class="icon_imoge">🤖</b>
          <b class="icon_imoge">😼</b>
          <b class="icon_imoge">🎃</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">✋</b>
          <b class="icon_imoge">🤛</b>
          <b class="icon_imoge">🤞</b>
          <b class="icon_imoge">👌</b>
          <b class="icon_imoge">🤟</b>
          <b class="icon_imoge">🤏</b>
          <b class="icon_imoge">🤌</b>
          <b class="icon_imoge">👋</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👐</b>
          <b class="icon_imoge">🙌</b>
          <b class="icon_imoge">👏</b>
          <b class="icon_imoge">🤝</b>
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">👎</b>
          <b class="icon_imoge">🫰</b>
          <b class="icon_imoge">👊</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🧑</b>
          <b class="icon_imoge">👨</b>
          <b class="icon_imoge">👱‍♀️</b>
          <b class="icon_imoge">👩‍🦳</b>
          <b class="icon_imoge">👳‍♀️</b>
          <b class="icon_imoge">👲</b>
          <b class="icon_imoge">🧔</b>
          <b class="icon_imoge">👵</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👮‍♀️</b>
          <b class="icon_imoge">💂‍♀️</b>
          <b class="icon_imoge">👨‍⚕️</b>
          <b class="icon_imoge">👩‍🌾</b>
          <b class="icon_imoge">👩‍🎓</b>
          <b class="icon_imoge">🕵️‍♀️</b>
          <b class="icon_imoge">👨‍🍳</b>
          <b class="icon_imoge">👩‍🏫</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">🧑‍💻</b>
          <b class="icon_imoge">👨‍🚀</b>
          <b class="icon_imoge">👰‍♀️</b>
          <b class="icon_imoge">🤴</b>
          <b class="icon_imoge">🦸‍♂️</b>
          <b class="icon_imoge">🧚</b>
          <b class="icon_imoge">💁</b>
          <b class="icon_imoge">🙇‍♂️</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">👬</b>
          <b class="icon_imoge">👩‍🦼</b>
          <b class="icon_imoge">🏃‍♀️</b>
          <b class="icon_imoge">🧎‍♀️</b>
          <b class="icon_imoge">🧍</b>
          <b class="icon_imoge">🏃</b>
          <b class="icon_imoge">👨‍🦽</b>
          <b class="icon_imoge">🕴</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👩‍❤️‍👨</b>
          <b class="icon_imoge">👩‍❤️‍👩</b>
          <b class="icon_imoge">👨‍👩‍👦</b>
          <b class="icon_imoge">👨‍👩‍👧‍👦</b>
          <b class="icon_imoge">👩‍👩‍👦</b>
          <b class="icon_imoge">👨‍👨‍👧‍👦</b>
          <b class="icon_imoge">👩‍👦</b>
          <b class="icon_imoge">👨‍👧‍👧</b>
      </div>
  </div>
  </div>
  
  
  
  `;
}
</script>
<script>
    document.querySelector(".like .like_icon .fa-heart").addEventListener("click", myFunction);

function myFunction() {
  document.querySelector(".like .like_icon .fa-heart").innerHTML = `<i class="fa-solid fa-heart" style="color: red;margin-left:-20px;"></i>`;
}

document.querySelector(".comment_warpper .comment_search").addEventListener("click", myFunction1);

function myFunction1() {
  document.querySelector(".comment_warpper .comment_search ").innerHTML = `
  

  <div class="imoji">
  <div class="d_block_imoji">
      <div class="imoji_icon">
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">❤️</b>
          <b class="icon_imoge">😍</b>
          <b class="icon_imoge">😊</b>
          <b class="icon_imoge">💋</b>
          <b class="icon_imoge">😋</b>
          <b class="icon_imoge">🤬</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">🙂</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">😉</b>
          <b class="icon_imoge">😔</b>
          <b class="icon_imoge">😜</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">🫡</b>
      </div>
      
      <div class="imoji_icon">
          <b class="icon_imoge">😀</b>
          <b class="icon_imoge">🥹</b>
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">🥲</b>
          <b class="icon_imoge">😇</b>
          <b class="icon_imoge">🥰</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">🫥</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🤓</b>
          <b class="icon_imoge">😎</b>
          <b class="icon_imoge">🥸</b>
          <b class="icon_imoge">🥳</b>
          <b class="icon_imoge">🤩</b>
          <b class="icon_imoge">😏</b>
          <b class="icon_imoge">😣</b>
          <b class="icon_imoge">😮‍💨</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😨</b>
          <b class="icon_imoge">🥵</b>
          <b class="icon_imoge">🥶</b>
          <b class="icon_imoge">😱</b>
          <b class="icon_imoge">🫣</b>
          <b class="icon_imoge">🥱</b>
          <b class="icon_imoge">😪</b>
          <b class="icon_imoge">😵‍💫</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🙊</b>
          <b class="icon_imoge">😁</b>
          <b class="icon_imoge">🤠</b>
          <b class="icon_imoge">😴</b>
          <b class="icon_imoge">😫</b>
          <b class="icon_imoge">🤯</b>
           <b class="icon_imoge">😗</b>
           <b class="icon_imoge">🤢</b>
          
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😵</b>
          <b class="icon_imoge">😷</b>
          <b class="icon_imoge">🤫</b>
          <b class="icon_imoge">🫠</b>
          <b class="icon_imoge">😸</b>
          <b class="icon_imoge">🤖</b>
          <b class="icon_imoge">😼</b>
          <b class="icon_imoge">🎃</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">✋</b>
          <b class="icon_imoge">🤛</b>
          <b class="icon_imoge">🤞</b>
          <b class="icon_imoge">👌</b>
          <b class="icon_imoge">🤟</b>
          <b class="icon_imoge">🤏</b>
          <b class="icon_imoge">🤌</b>
          <b class="icon_imoge">👋</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👐</b>
          <b class="icon_imoge">🙌</b>
          <b class="icon_imoge">👏</b>
          <b class="icon_imoge">🤝</b>
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">👎</b>
          <b class="icon_imoge">🫰</b>
          <b class="icon_imoge">👊</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🧑</b>
          <b class="icon_imoge">👨</b>
          <b class="icon_imoge">👱‍♀️</b>
          <b class="icon_imoge">👩‍🦳</b>
          <b class="icon_imoge">👳‍♀️</b>
          <b class="icon_imoge">👲</b>
          <b class="icon_imoge">🧔</b>
          <b class="icon_imoge">👵</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👮‍♀️</b>
          <b class="icon_imoge">💂‍♀️</b>
          <b class="icon_imoge">👨‍⚕️</b>
          <b class="icon_imoge">👩‍🌾</b>
          <b class="icon_imoge">👩‍🎓</b>
          <b class="icon_imoge">🕵️‍♀️</b>
          <b class="icon_imoge">👨‍🍳</b>
          <b class="icon_imoge">👩‍🏫</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">🧑‍💻</b>
          <b class="icon_imoge">👨‍🚀</b>
          <b class="icon_imoge">👰‍♀️</b>
          <b class="icon_imoge">🤴</b>
          <b class="icon_imoge">🦸‍♂️</b>
          <b class="icon_imoge">🧚</b>
          <b class="icon_imoge">💁</b>
          <b class="icon_imoge">🙇‍♂️</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">👬</b>
          <b class="icon_imoge">👩‍🦼</b>
          <b class="icon_imoge">🏃‍♀️</b>
          <b class="icon_imoge">🧎‍♀️</b>
          <b class="icon_imoge">🧍</b>
          <b class="icon_imoge">🏃</b>
          <b class="icon_imoge">👨‍🦽</b>
          <b class="icon_imoge">🕴</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👩‍❤️‍👨</b>
          <b class="icon_imoge">👩‍❤️‍👩</b>
          <b class="icon_imoge">👨‍👩‍👦</b>
          <b class="icon_imoge">👨‍👩‍👧‍👦</b>
          <b class="icon_imoge">👩‍👩‍👦</b>
          <b class="icon_imoge">👨‍👨‍👧‍👦</b>
          <b class="icon_imoge">👩‍👦</b>
          <b class="icon_imoge">👨‍👧‍👧</b>
      </div>
  </div>
  </div>
  
  
  
  `;
}
</script>
<script>
    document.querySelector(".like .like_icon .fa-heart").addEventListener("click", myFunction);

function myFunction() {
  document.querySelector(".like .like_icon .fa-heart").innerHTML = `<i class="fa-solid fa-heart" style="color: red;margin-left:-20px;"></i>`;
}

document.querySelector(".comment_warpper .comment_search").addEventListener("click", myFunction1);

function myFunction1() {
  document.querySelector(".comment_warpper .comment_search ").innerHTML = `
  

  <div class="imoji">
  <div class="d_block_imoji">
      <div class="imoji_icon">
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">❤️</b>
          <b class="icon_imoge">😍</b>
          <b class="icon_imoge">😊</b>
          <b class="icon_imoge">💋</b>
          <b class="icon_imoge">😋</b>
          <b class="icon_imoge">🤬</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">🙂</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">😉</b>
          <b class="icon_imoge">😔</b>
          <b class="icon_imoge">😜</b>
          <b class="icon_imoge">🙈</b>
          <b class="icon_imoge">🫡</b>
      </div>
      
      <div class="imoji_icon">
          <b class="icon_imoge">😀</b>
          <b class="icon_imoge">🥹</b>
          <b class="icon_imoge">😂</b>
          <b class="icon_imoge">🥲</b>
          <b class="icon_imoge">😇</b>
          <b class="icon_imoge">🥰</b>
          <b class="icon_imoge">😘</b>
          <b class="icon_imoge">🫥</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🤓</b>
          <b class="icon_imoge">😎</b>
          <b class="icon_imoge">🥸</b>
          <b class="icon_imoge">🥳</b>
          <b class="icon_imoge">🤩</b>
          <b class="icon_imoge">😏</b>
          <b class="icon_imoge">😣</b>
          <b class="icon_imoge">😮‍💨</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😨</b>
          <b class="icon_imoge">🥵</b>
          <b class="icon_imoge">🥶</b>
          <b class="icon_imoge">😱</b>
          <b class="icon_imoge">🫣</b>
          <b class="icon_imoge">🥱</b>
          <b class="icon_imoge">😪</b>
          <b class="icon_imoge">😵‍💫</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🙊</b>
          <b class="icon_imoge">😁</b>
          <b class="icon_imoge">🤠</b>
          <b class="icon_imoge">😴</b>
          <b class="icon_imoge">😫</b>
          <b class="icon_imoge">🤯</b>
           <b class="icon_imoge">😗</b>
           <b class="icon_imoge">🤢</b>
          
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">😵</b>
          <b class="icon_imoge">😷</b>
          <b class="icon_imoge">🤫</b>
          <b class="icon_imoge">🫠</b>
          <b class="icon_imoge">😸</b>
          <b class="icon_imoge">🤖</b>
          <b class="icon_imoge">😼</b>
          <b class="icon_imoge">🎃</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">✋</b>
          <b class="icon_imoge">🤛</b>
          <b class="icon_imoge">🤞</b>
          <b class="icon_imoge">👌</b>
          <b class="icon_imoge">🤟</b>
          <b class="icon_imoge">🤏</b>
          <b class="icon_imoge">🤌</b>
          <b class="icon_imoge">👋</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👐</b>
          <b class="icon_imoge">🙌</b>
          <b class="icon_imoge">👏</b>
          <b class="icon_imoge">🤝</b>
          <b class="icon_imoge">👍</b>
          <b class="icon_imoge">👎</b>
          <b class="icon_imoge">🫰</b>
          <b class="icon_imoge">👊</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">🧑</b>
          <b class="icon_imoge">👨</b>
          <b class="icon_imoge">👱‍♀️</b>
          <b class="icon_imoge">👩‍🦳</b>
          <b class="icon_imoge">👳‍♀️</b>
          <b class="icon_imoge">👲</b>
          <b class="icon_imoge">🧔</b>
          <b class="icon_imoge">👵</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👮‍♀️</b>
          <b class="icon_imoge">💂‍♀️</b>
          <b class="icon_imoge">👨‍⚕️</b>
          <b class="icon_imoge">👩‍🌾</b>
          <b class="icon_imoge">👩‍🎓</b>
          <b class="icon_imoge">🕵️‍♀️</b>
          <b class="icon_imoge">👨‍🍳</b>
          <b class="icon_imoge">👩‍🏫</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">🧑‍💻</b>
          <b class="icon_imoge">👨‍🚀</b>
          <b class="icon_imoge">👰‍♀️</b>
          <b class="icon_imoge">🤴</b>
          <b class="icon_imoge">🦸‍♂️</b>
          <b class="icon_imoge">🧚</b>
          <b class="icon_imoge">💁</b>
          <b class="icon_imoge">🙇‍♂️</b>
      </div>
       <div class="imoji_icon">
          <b class="icon_imoge">👬</b>
          <b class="icon_imoge">👩‍🦼</b>
          <b class="icon_imoge">🏃‍♀️</b>
          <b class="icon_imoge">🧎‍♀️</b>
          <b class="icon_imoge">🧍</b>
          <b class="icon_imoge">🏃</b>
          <b class="icon_imoge">👨‍🦽</b>
          <b class="icon_imoge">🕴</b>
      </div>
      <div class="imoji_icon">
          <b class="icon_imoge">👩‍❤️‍👨</b>
          <b class="icon_imoge">👩‍❤️‍👩</b>
          <b class="icon_imoge">👨‍👩‍👦</b>
          <b class="icon_imoge">👨‍👩‍👧‍👦</b>
          <b class="icon_imoge">👩‍👩‍👦</b>
          <b class="icon_imoge">👨‍👨‍👧‍👦</b>
          <b class="icon_imoge">👩‍👦</b>
          <b class="icon_imoge">👨‍👧‍👧</b>
      </div>
  </div>
  </div>
  
  
  
  `;
}
</script>

<script src="Js/script.js"></script>
<script src="Js/suggestion.js"></script>

</html>








<!doctype html><html lang="en"><head><meta charset="utf-8"/><link rel="icon" href="https://alan-ai-voice-powered-news-app.netlify.app/favicon.ico"/><meta name="viewport" content="width=device-width,initial-scale=1"/><meta name="theme-color" content="#000000"/><meta name="description" content="Web site created using create-react-app"/><link rel="apple-touch-icon" href="https://alan-ai-voice-powered-news-app.netlify.app/logo192.png"/><link rel="manifest" href="https://alan-ai-voice-powered-news-app.netlify.app/manifest.json"/><title>React App</title><link href="/https://alan-ai-voice-powered-news-app.netlify.app/static/css/main.56bb677b.chunk.css" rel="stylesheet"></head><body><noscript>You need to enable JavaScript to run this app.</noscript><div id="root"></div><script>!function(e){function r(r){for(var n,a,l=r[0],p=r[1],i=r[2],c=0,s=[];c<l.length;c++)a=l[c],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&s.push(o[a][0]),o[a]=0;for(n in p)Object.prototype.hasOwnProperty.call(p,n)&&(e[n]=p[n]);for(f&&f(r);s.length;)s.shift()();return u.push.apply(u,i||[]),t()}function t(){for(var e,r=0;r<u.length;r++){for(var t=u[r],n=!0,l=1;l<t.length;l++){var p=t[l];0!==o[p]&&(n=!1)}n&&(u.splice(r--,1),e=a(a.s=t[0]))}return e}var n={},o={1:0},u=[];function a(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,a),t.l=!0,t.exports}a.m=e,a.c=n,a.d=function(e,r,t){a.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,r){if(1&r&&(e=a(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(a.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)a.d(t,n,function(r){return e[r]}.bind(null,n));return t},a.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(r,"a",r),r},a.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},a.p="/";var l=this.webpackJsonpalan_ai_news_app=this.webpackJsonpalan_ai_news_app||[],p=l.push.bind(l);l.push=r,l=l.slice();for(var i=0;i<l.length;i++)r(l[i]);var f=p;t()}([])</script><script src="https://alan-ai-voice-powered-news-app.netlify.app/static/js/2.3f486680.chunk.js"></script><script src="https://alan-ai-voice-powered-news-app.netlify.app/static/js/main.2b49e5cf.chunk.js"></script></body></html>



     <script>
                let array = ['Comapany', 'Good Morning',[
                    'hello', 'hi', 'world', 'well', 'link: https://', 'programmers', 'company', 448, 54854, 5454848, 'id', 2154848, 458848484,
                    [
                        'computer', 'shop', 54800, 'BOOVKMREM', 848487888, 'uzbekistan'
                    ]
                    
                ], [1548489, 'USA', 'Friends', 'ozodbek', 'saved', 'People', 'Marketplace', 'watch',['online games','counter and pubg and subway surf and minecraft and gta'], 45454000, 'Like', 200000601107000050002000189, 'command'
                   ],
                             'id',775454848787887898989898989000000000000000000101010010154848, 'share', 21115400048787, [
                    [
                        'name', 'ozodbek',
                        'lastname', 'Mahammatjonov',
                        'age', 15,
                        'country', 'uzbekistan',
                        'web programmer', 'computer is Macbook'
                        
                    ],
                    [
                        'Company', 'BOOVKMREM',
                        'create-logo tips and Likes this web site and social',
                        'boss', 'Ozodbek Mahammatjonov',
                        'BOOVKM COMPANY'
                    ],
                    [
                        'USERS',
                        'name', 'Alinka Deviceseswed',
                        'name', 'Senuda De Silva',
                        'name', 'Record Dilan',
                        'name', 'John Cristen',
                        'name', 'Alica Monterey',
                        'name', 'Dalina Lenon',
                        'name', 'Alex Walken',
                        'name', 'Madina Ibragimova',
                        'name', 'Tomma Lenonas',
                        'name', 'David Wolker',
                        'name', 'George Wastele',
                        'name', 'Cristen Walker'
                    ]
                ],
                [
                    [
                        'LINK', 'https://www.boovkmrem.com'
                    ]
                ],
                [
                    'MOBILA APS',
                    'mobile games', 'online education', 'food flowers', 'social media   academy',
                    'pc shop', 'online boovkmrem', 'BOOVKMREM'
                ],
                [
                    [
                        [ 'programming languages',
                            [
                                ['PHP'],
                                ['JAVASCRIPT'],
                                ['PYTHON'],
                                ['HTML'],
                                ['CSS'],
                                ['BOOTSTRAP'],
                                ['MYSQLI'],
                                ['AJAX'],
                                ['react js'],
                                ['FRONTED WEBSITE'],
                                ['BACKEND WEBSITE'],
                                ['CREATE BY OZOBEK MAHAMMATJONOV']
                            ]
                        ]
                    ]
                ],
                [
                    'news applications', 
                    'alan ai',
                    'news by BOOVKMREM',
                    'social media news and films',
                    'bots','pc computers',
                    'markets for people',
                    'educations', 'foods', 
                    'IT_SCHOOLS', 'numbers: ', '05798186556149889876'
                        
                ],
                [
                    'search from google and BOOVKMREM',
                    'chat app', 'chat  - Boovkmrem',
                    'id', 7329103872368
                ],
                [
                    'images', 'stories',
                    'likes', 'commanets',
                    'shares', 'register from boovkmrem'
                ],
                ['chat gpt'],
                [
                    'you can use those apps from boovkmrem social media, this media has a lot of things, example, chatgpt, stories, people, videos, and pictures'
                ],
                [
                    'TELEGRAM CHANEL',
                    'INSTAGRAM CHANEL',
                    'FACEBOOK CHANEL',
                    ['BOOVKMREM CHANEL']
                ],
                [
                    ' boovkmrem in android '
                ],
                [
                    'LINKS OF OUR CHANEL AND YOU CAN SEE BOOVKMREM ',
                    'yotube.com', 'google.com', 'facebook.com', 'instagram.com', 'yappi.com',
                    't.me/telegram.org'
                ]
                ];
                console.log(array)
            </script>
