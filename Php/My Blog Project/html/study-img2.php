<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的学习空间</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="../images/icon/书本.png" sizes="32*32">
    <script src="../js/background.js"></script>
    <style>
        .left1{
            /* display: unset; */
            margin:5% 0 5% 5%;
            width: 45%;
        }
        @keyframes studyimg {
            0% { opacity: 0;transform: scale(1.2); }
            100% { opacity: 1;transform: scale(1); }
        }
        #right a img {
            animation-name: studyimg;
            /* 使用 ease-in 值时，动画会在开始时慢，然后速度会逐渐增加，直到动画到达其最大速度 */
            animation-timing-function: ease-in;
            animation-duration: .4s;
        }
    </style>
</head>


<body>
    <div id="container">
        <!-- 回到顶部箭头 -->
        <a href="#"><img class="head" src="../images/head.png"></a>
        <!-- 点击更换背景图片的设置 -->
  	    <div id="js">
            <img src="../images/3.jpg" alt="" class="photo1">
            <img src="../images/bak4.png" alt="" class="photo1">
            <img src="../images/bak5.png" alt="" class="photo1">
            <img src="../images/bak2.png" alt="" class="photo1">
        </div>

        <!-- 搜索框 -->
        <div class="search">
            <input type="search" placeholder="Search">
            <a href="#" onclick="alert('查找失败')">
                <i>🔍</i>
            </a>
        </div>


        <img id="leaf" src="../images/gif.png" />
        <!-- 最上面那部分 -->
        <div id="head">
            <!-- 头部背景图片 -->
            <div id="head-background">
                <img src="../images/photo.png"/>
            </div>
            <!-- 导航栏 -->
            <div id="nav">
                <ul>
                    <li><a href="../index.php">主页</a></li>
                    <li><a href="study-main.php">学习空间</a></li>
                    <li><a href="travel.php">生活空间</a></li>
                    <li><a href="album.php">相册空间</a></li>
                    <li><a href="blog.php">博客空间</a></li>
                    <li><a href="music.php">音乐空间</a></li> 
                    <li><a href="center.php">个人中心</a></li> 
                </ul>
            </div>
        </div>



        <!-- 中间的一块 -->
        <div id="middle">
            <!-- 中间左边 -->
            <div id="left">
                
                <!-- 导航栏 -->
                <div id="nav1">
                    <ul>
                        <li><a href="study-main.php">学习记录</a></li>
                        <li><a href="study.php">好言好句</a></li>
                        <li><a href="study-img.php">学习笔记</a></li>
                        <li><a href="study-video.php">学习视频</a></li>
                    </ul>
                </div>
            </div>

        <!-- 中间右边 -->   
            <div id="right">
                <div id="index">
                    学习空间&nbsp;>&nbsp;学习笔记<a name="two"></a>
                </div>
                <hr>
                <div id="row">
                    <!-- 第一行图片 -->

                        <div class="left">
                            <div id="img1">
                                <a href="../images/s5.png" download="中国现代史"><img src="../images/s5.png"></a>
                            </div>
                            <div id="name1">
                                中国现代史
                            </div>
                        </div>
                        <div class="right">
                            <div id="img2">
                                <a href="../images/s6.png" download="c语言"><img src="../images/s6.png"></a>
                            </div>
                            <div id="name2">
                                c语言
                            </div>
                        </div>
                    
                </div> 

                <!-- 下一页按钮 -->
                <div id="next">
                    <a href="study-img.php#one" class="previous round">&#8249;</a>
                    <a href="#two" class="next round">&#8250;</a>
                </div>
            </div>
        </div>



        <!-- 页脚 -->
        <footer>
            深圳职业技术大学——人工智能学院信息楼实验室<br>
地址：广东省深圳市南山区沙河西路4089号 邮编：518055 <br/>电话：0755—2046336

邮编：518055 电话：0755—2046337
<br>更多信息：<a href="http://www.szpt.edu.cn" target="_blank">点击官网</a>
        </footer>
    </div>

    
</body>
</html>