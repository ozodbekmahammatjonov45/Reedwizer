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

            <a href="" style="text-decoration:none;color:#000"><i class="fa-solid fa-list-ul"></i></a>
            <a href="./ChatApp - CodingNepal/index.php" style="text-decoration:none;color:#000"><i class="fa-brands fa-facebook-messenger"></i></a>
            <a href="./voice_assistent/voice.php" style="text-decoration:none;color:#000"><i class="fa-solid fa-bell"></i></a>
            <a href="" style="text-decoration:none;color:#000"><i class="fa-solid fa-moon"></i></a>
            <a href="profile.php"><img src="image/profile.png"></a>
        </div>

    </nav>

    <style>
        .images_of_story {
            display: flex;
            padding: 10px;
        }
        .story_img {
            display: block;
            margin: 65px 10px;
        }
        .story_img img {
            width: 120%;
        }
    </style>
    
    <div class="images_of_story">
        <div class="story_img" style="width:100%;height:50vh;">
            <img src="image/story_1.png" style="height:60vh">
        </div>
        <div class="story_img" style="width:100%;height:50vh;">
            <img src="image/profile_9.png"style="height:60vh">
        </div>
        <div class="story_img" style="width:100%;height:50vh;">
            <img src="image/contact_2.jpg"  style="height:60vh" >
        </div>
        
        <div class="story_img" style="width:100%;height:50vh;">
            <img src="image/post_5.jpg" style="height:60vh" >
        </div>
    </div>
    
    
    
    </body>
</html> 