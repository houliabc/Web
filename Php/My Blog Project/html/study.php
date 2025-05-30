<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的学习空间</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link href="../css/study.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-main.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="../images/icon/标记.png" sizes="32*32">
    <script src="../js/background.js"></script>
    <style>
        span{
            font:unset;
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
            <a href="#"  onclick="alert('查找失败')">
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
                    学习空间&nbsp;>&nbsp;好言好句<a name="shang"></a><a name="xia"></a>
                </div>
                <hr>
                

                <div id="box">
                    <div id="text1">
                        <span>世事早已擦肩而过，我们又何必反复追忆，反复提起。是时候和昨天告别了，忘记一切，也原谅一切。是真的忘记，做到心平气和，在安稳的现世里，循规蹈矩的过日子。不再追求虚浮的奢华，不再喜好俏丽的颜色，不再渴望热烈的爱情。只愿在简约的四季里，穿粗布素衣，和某个平淡的人，一同老去，相约白头。</span>
                    </div>
                    <div id="text2">
                        <span>春梦无痕，是因为太多美好事物，总令人感到虚无。悠悠浮生，像是一缕轻烟，飘渺难捉。关于对人生的看法，众说纷纭，而每个人表达的方式亦有不同。诗者付诸于笔端，雅客寄情于山水，伶人放逐于舞台。还有许多平庸的人，将许多细碎的感触幻化于生活的点滴间。我们想逃避一些宿命的安排，却会与之狭路相逢。</span>
                    </div>

                    <div id="text3">
                        <span>怎的一场落叶匆匆，让死亡这般地灿烂从容。都说韶光如梦，看惯了秋月春风，人生故事本相同，可终究，无法割舍一段美丽的相逢。往事就像一场无言的秋红，流水光阴也不过是梅花三弄。纵算水尽山穷，叶落成空，那老去的年华依旧可以风姿万种。纵算岁月朦胧，天涯西东，依然可觅寻当年遗落的影踪。</span>
                    </div>
                    <div id="text4">
                        <textarea type="text" placeholder="今日的好言好句"></textarea><br>
                        <input value="上传" type="button" onclick="alert('上传失败')"/>
                    </div>
                </div>
                                    <!-- 下一页按钮 -->
                <div id="next">
                    <a href="#shang" class="previous round">&#8249;</a>
                    <a href="#xia" class="next round">&#8250;</a>
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