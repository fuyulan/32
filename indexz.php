<?php
$ori_array = array("欢迎来到爱你影院","爱你影院欢迎你","请点击-播放下一个-播放视频","刷新一次换成网站标题","加油。加油。我是最棒的","福利姬美女写真","问世间情为何物","直教人生死相许","希望你过的开心","本源码完全免费-欢迎使用"); //一个含有10个元素的数组
$rand_array = array_rand($ori_array,2); //取得该数组中2个随机的键值
$result_array = array(); //定义一个数组
foreach($rand_array as $key_word){ //遍历键值
array_push($result_array,$ori_array[$key_word]); //将四个随机元素形成一道个新的数组
}
print_r($result_brray); //打印显示专效果
$Video_Rand= rand(1000, 5000);
$title = date('m月d日')."$result_array[0]"; 
function random_str () { 
$poems="从善如登，从恶如崩。 
已知花意，未见其花，已见其花，未闻花名 
如果能不长大就好了啊 可是时光在身后挡住退路。 
或许前路永夜，即便如此我也要前进，因为锈即使微弱也会为我照亮前路 
你驻足于春色中，于那独一无二的春色之中
喜欢的人喜欢别人不是很正常吗。
生活是不公平的；要去适应它。——比尔盖茨
人生就是一列开往坟墓的列车，路途上会有很多站，很难有人可以自始至终陪着走完。当陪你的人要下车时，即使不舍也该心存感激，然后挥手道别。"; 
$poems=explode("\n",$poems); 
return $poems[rand(0,count($poems)-1)]; 
} 
function says(){ 
$says=random_str(); 
echo $says; 
}
?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charSet="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Cache-Control" content="no-transform" /> 
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="referrer" content="never">
    <meta name="renderer" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?=$title;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body><button id="switch"><?php says(); ?></button>
    <section id="main">
        <iframe id="iframe" src="./video.php" controls webkit-playsinline playsinline></iframe>
    </section>
    <section id="buttons">
        <button id="switch">当前在线:<?=$Video_Rand;?>人</button>
        <button id="next">播放下一个</button>
		<button id="next"><a href="http://bbs.zhanzhangwo.com/thread-54122.htm">点我下源码</a></button>
    </section>
    <section id="buttons">
<button id="switch"><a href="" class="current"></a>合作伙伴</button></button>
    </section>
    <section id="buttons">
<button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button><button id="next"><a href="" class="current"></a>申请加盟</button></button>
    </section>
    <script>
    (function (window, document) {
        if (top != self) {
            window.top.location.replace(self.location.href);
        }
        var get = function (id) {
            return document.getElementById(id);
        }
        var bind = function (element, event, callback) {
            return element.addEventListener(event, callback);
        }
        var auto = true;
        var iframe = get('iframe');
        var randomm = function () {
            iframe.src = 'video.php?_t=' + Math.random();
            iframe.iframe();
        }
        bind(get('next'), 'click', randomm);
        bind(player, 'error', function () {
            randomm();
        });
        bind(get('switch'), 'click', function () {
            auto = !auto;
            this.innerText = '连续: ' + (auto ? '开' : '关');
        });
        bind(player, 'ended', function () {
            if (auto) randomm();
        });
    })(window, document);
    </script>	
</body>
</html>
