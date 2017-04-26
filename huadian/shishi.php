
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta property="qc:admins" content="235202666665301164763757" />
    <title>河南亿欣通网络科技有限公司</title>
    <script type="text/javascript" src="/Public/home/lib/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/H-ui.js"></script>

    <script type="text/javascript" src="/Public/home/js/jquery.SuperSlide.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/home/Lib/html5.js"></script>
    <script type="text/javascript" src="/Public/home/Lib/respond.min.js"></script>
    <script type="text/javascript" src="/Public/home/Lib/PIE_IE678.js"></script>
    <![endif]-->
    <!--[if IE 6]>
    <script type="text/javascript" src="/Public/home/Lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('.pngfix,.icon');</script>
    <![endif]-->
    <!--字体-->
    <!--<link type="text/css" rel="stylesheet" href="iconfont/iconfont.css">-->
    <link href="/Public/home/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/home/plus/icheck/icheck.css" rel="stylesheet" type="text/css"/>

    <link type="text/css" rel="stylesheet" href="/Public/home/css/H-ui.min.css">
    <link type="text/css" rel="stylesheet" href="/Public/home/css/css.css">
    <link href="/Public/home/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/home/css/kf.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/Public/home/js/jquery.jqzoom.js"></script>
    <script type="text/javascript" src="/Public/home/js/base.js"></script>
    <script type="text/javascript" src="/Public/home/js/kf.js"></script>
    <script type="text/javascript" src="/Public/home/plus/icheck/jquery.icheck.min.js"></script>
    <style>
        .red-2{
            width: 170px;
            display: inline-block;
            line-height: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .fy a {
            background: url("/Public/home/images/fybg.jpg") repeat-x;
            padding: 5px 8px;
            border: 1px solid #cbcccf;
            color: #959595;
            border-radius: 4px;
            font-size: 12px;
            margin: 20px 5px;
        }
        .fy span {
            padding: 5px 8px;
        }
        .appdown{
            position: fixed;
            top: 120px;
            width: 150px;
            z-index: 999;
            display: none;
        }
    </style>

</head>
<body>
<div class="top-yxt">
    <div class="top-con content-yxt">
        <div class="top_l left"> 欢迎访问亿欣通天然气汽车综合服务平台！&nbsp;&nbsp;&nbsp;
            <a href="/index.php?m=Reg&a=index">注册&nbsp;&nbsp;|&nbsp;&nbsp;</a>            <a href="/index.php?m=Login&a=index">登录</a>&nbsp;&nbsp;
            <a href="/index.php?g=Manage&m=Login&a=index"><i class="Hui-iconfont loginicon-yxt">&#xe60d;</i>&nbsp;商家登录</a>
        </div>
        <div class="top-r right">
            <!--<a href="">会员中心</a>-->
            <span class="dropDown  dropDown_hover"> <a href="/index.php?m=User&a=index" class="dropDown_A" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="true">会员中心</a>
                            </span>
            &nbsp;&nbsp;|&nbsp;&nbsp;<a href="/index.php?m=Service&a=index">网点查询</a>&nbsp;&nbsp;<!-- |&nbsp;&nbsp;<a href="">网站地图</a> -->
        </div>
    </div>
</div>


<div class="header-yxt content-yxt clear">
    <div class="left">
        <a href="/index.php?m=Index&a=index"><img src="/Public/home/images/logo.png"> </a>

    </div>
    <div class="left" style="margin-left: 100px; margin-top: 36px;">
        <div id="tab_demo" class="HuiTab">
            <div class="tabBar cl"><span>商品</span><span>新闻</span></div>
            <div class="tabCon">
                <div class="clearfix">
                    <form method="get" action="index.php">
                        <input type="hidden" name="m" value="Goods"/>
                        <input type="hidden" name="a" value="index"/>
                        <input type="text" placeholder="请输入关键词" class="input-text ac_input" name="keywords" value=""
                               id="search_text" autocomplete="off"
                               style="width:450px; height: 40px; border-right: none; margin-right: -10px;">
                        <button type="submit" class="btn btn-default" id="search_button"
                                style="background-image: url('/Public/home/images/serch.png'); width: 95px;"></button>
                    </form>
                </div>
            </div>
            <div class="tabCon">
                <div class="clearfix">
                    <form method="get" action="index.php">
                        <input type="hidden" name="m" value="Article"/>
                        <input type="hidden" name="a" value="index"/>
                        <input type="text" placeholder="请输入关键词" class="input-text ac_input" name="keywords" value=""
                               id="search_text" autocomplete="off"
                               style="width:450px; height: 40px; border-right: none; margin-right: -10px;">
                        <button type="submit" class="btn btn-default" id="search_button"
                                style="background-image: url('/Public/home/images/serch.png'); width: 95px;"></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- WPA Button Begin -->
<!-- <script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODA2MzczOF8zODk2NTFfNDAwMDc3NzM2OV8"></script> -->
<!-- WPA Button End -->
    <div class="dl left" id="download">
        <a href="" class="circle"><img src="/Public/home/images/app-dl.png"> </a>
        <a href="" class="circle"><img src="/Public/home/images/atr-dl.png"> </a><br>
        <span style="margin-left: 24px; margin-top: 10px; display: block;">手机APP下载</span>
        <img src="/Public/Images/appdown300.png" class="appdown"/>
    </div>
    <div class="header-r right">
        <img src="/Public/home/images/ewm.png">
    </div>
    <script type="text/javascript">
        $('#download').hover(function(){
            $('.appdown').show();
        }, function(){
            $('.appdown').hide();
        })
    </script>
</div>
<div class="nav-yxt clear content-yxt">
    <a class="nav-item active-nav" href="/index.php?m=Index&a=index">首页</a>
    <a class="nav-item" href="/index.php?m=Abstract&a=index">平台简介</a>
	<a class="nav-item" href="/index.php?m=Service&a=index">网点查询</a>
    <a class="nav-item" href="/index.php?m=Article&a=index">新闻中心</a>
    <a class="nav-item" href="/index.php?m=Goods&a=index">在线商城</a>
    <a class="nav-item" href="/index.php?m=User&a=index">会员中心</a>
    <a class="nav-item" href="/index.php?m=Contact&a=index">联系方式</a>
</div>

<style type="text/css">
    .pro-l,.pro-i{
        margin-right: 10px;
    }
    .pro-i a{
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .red-2{
        width: 150px;
    }
    .pro2 li{margin-right: 10px;}
    .item-pro{
        height: 270px;
        border: none;
    }
    .item2-p{
        border: 1px solid #cbcccf;
        width: 150px;
        height: 150px;
        padding: 15px;
        display: block;
        overflow: hidden;
        margin: 0 auto;
    }
    .item2-p img{
        max-width: 150px;
        height: 150px;
    }
    .ext-attr{
        height: 21px;
        overflow: hidden;
    }
    .ext-attr span{
        width: 60%;
        height: 100%;
        white-space: nowrap;
        text-overflow: ellipsis;
        display: inline-block;
        overflow: hidden;
    }
    .ext-attr .goods-sale{
        width: 40%;
        float: right;
        text-align: right;
    }
    .item2-txt{
        height: 21px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .cplb{height: 550px;}
    .pro2{margin-left: 15px;}
</style>
<div id="slider-3">
    <div class="slider">
        <div class="bd" style="width: 1200px; margin: auto; height: 300px; margin-top: 10px;">
            <ul>
                <li><a href="#" target="_blank"><img src="/Public/home/images/banner1.jpg"></a></li>
                <li><a href="#" target="_blank"><img src="/Public/home/images/banner2.jpg"></a></li>
                <li><a href="#" target="_blank"><img src="/Public/home/images/banner3.jpg"></a></li>
            </ul>
        </div>
        <ol class="hd cl dots">
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ol>
    </div>
</div>
<div class="mid-yxt clear ht content-yxt">
<div class="mid-l left">
    <div class="cptj">
        <div class="title-yxt ht">
            <span class="timg1"><img src="/Public/home/images/title-cptj.jpg"></span>
            <span class="timg2"><img src="/Public/home/images/title-cptj02.jpg"></span>
        </div>
        <!-- 推荐商品 -->
        <dl class="pro-l">
            <dt><a href="/index.php?g=Home&m=Goods&a=detail&id=95&huo_id=1457140669"><img src="./Public/Uploads/goods56da33bd58a66.png" width="470px" height="340px"></a></dt>
            <dd><a href="/index.php?g=Home&m=Goods&a=detail&id=95&huo_id=1457140669">优惠改装套餐 改装套件:中压E型,气瓶:绿动80L</a></dd>
        </dl>
        <ul class="pro-r">
            <li class="pro-i">
                <a href="/index.php?g=Home&m=Goods&a=detail&id=94&huo_id=1457140669" class="item-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="172px" height="155px"></a>
                <a href="/index.php?g=Home&m=Goods&a=detail&id=94&huo_id=1457140669" class="item-txt">优惠改装套餐 改装套件:中压E型,气瓶:绿动100L</a>
            </li><li class="pro-i">
                <a href="/index.php?g=Home&m=Goods&a=detail&id=93&huo_id=1457140669" class="item-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="172px" height="155px"></a>
                <a href="/index.php?g=Home&m=Goods&a=detail&id=93&huo_id=1457140669" class="item-txt">优惠改装套餐 改装套件:中压E型,气瓶:中材80L</a>
            </li><li class="pro-i">
                <a href="/index.php?g=Home&m=Goods&a=detail&id=92&huo_id=1457140669" class="item-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="172px" height="155px"></a>
                <a href="/index.php?g=Home&m=Goods&a=detail&id=92&huo_id=1457140669" class="item-txt">优惠改装套餐 改装套件:中压E型,气瓶:中材100L</a>
            </li><li class="pro-i">
                <a href="/index.php?g=Home&m=Goods&a=detail&id=91&huo_id=1457140669" class="item-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="172px" height="155px"></a>
                <a href="/index.php?g=Home&m=Goods&a=detail&id=91&huo_id=1457140669" class="item-txt">优惠改装套餐 改装套件:AEB,气瓶:绿动80L</a>
            </li>        </ul>
    </div>
    <!-- 产品列表 -->
    <div class="cplb">
        <div class="title-yxt ht">
            <span class="timg1"><img src="/Public/home/images/title-cplb.jpg"></span>
            <span class="timg2"><a href="/index.php?g=Home&m=Goods&a=index" style="float: right;">更多+</a> <img
                    src="/Public/home/images/title-cplb2.jpg"></span>
        </div>
        <ul class="pro2">
            <li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=95&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=95&huo_id=1457140669">优惠改装套餐 改装套件:中压E型,气瓶:绿动80L</a></p>
                        <p class="price-yxt"><span class="price-new">￥3500.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=94&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=94&huo_id=1457140669">优惠改装套餐 改装套件:中压E型,气瓶:绿动100L</a></p>
                        <p class="price-yxt"><span class="price-new">￥4000.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=93&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=93&huo_id=1457140669">优惠改装套餐 改装套件:中压E型,气瓶:中材80L</a></p>
                        <p class="price-yxt"><span class="price-new">￥4000.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=92&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=92&huo_id=1457140669">优惠改装套餐 改装套件:中压E型,气瓶:中材100L</a></p>
                        <p class="price-yxt"><span class="price-new">￥4500.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=91&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=91&huo_id=1457140669">优惠改装套餐 改装套件:AEB,气瓶:绿动80L</a></p>
                        <p class="price-yxt"><span class="price-new">￥4000.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=90&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=90&huo_id=1457140669">优惠改装套餐 改装套件:AEB,气瓶:绿动100L</a></p>
                        <p class="price-yxt"><span class="price-new">￥4500.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=89&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=89&huo_id=1457140669">优惠改装套餐 改装套件:AEB,气瓶:中材80L</a></p>
                        <p class="price-yxt"><span class="price-new">￥4500.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li><li>
                <div class="item-pro">
                        <a href="/index.php?m=Goods&a=detail&id=88&huo_id=1457140669" class="item2-p"><img src="./Public/Uploads/goods56da33bd58a66.png" width="200px" height="100px"></a>
                        <p class="item2-txt"><a href="/index.php?m=Goods&a=detail&id=88&huo_id=1457140669">优惠改装套餐 改装套件:AEB,气瓶:中材100L</a></p>
                        <p class="price-yxt"><span class="price-new">￥5000.00</span><span class="price-old">￥4000-6000</span></p>
                    </div>
            </li>
        </ul>
    </div>
</div>
<div class="mid-r right">
        <div class="hyzx ht" style="margin-bottom: 10px;">
        <div class="title-yxt ht" style="width:300px; ">
            <span class="timg1"><img src="/Public/home/images/title-hyzx.jpg"></span>
            <span class="timg2" style="width: 200px; height: 28px;"></span>
        </div>
        <div class="map">
            <form class="form form-horizontal" onsubmit="getAjax(this);return false;" id="demoform-1">
                <input type="hidden" name="ajax" value="1"/>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">帐  号:</label>

                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="username" class="input-text" autocomplete="off" placeholder="用户名">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">密  码:</label>

                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="password" name="password" class="input-text" autocomplete="off" placeholder="密码">
                    </div>
                </div>
                <div class="row cl">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                        <input class="btn btn-primary radius" type="submit" style="height: 30px; width: 86px; background: #125EF2; margin-right: 20px;" value="登录">
                        <input class="btn btn-default radius" type="submit" style="height: 30px; width: 86px;" value="取消">
                    </div>
                </div>
            </form>
        </div>
    </div><!--     <div class="wdcx ht" style="margin-top: 0;">
        <div class="title-yxt ht" style="width:300px;">
            <span class="timg1"><img src="/Public/home/images/title-wdcx.jpg"></span>
            <span class="timg2" style="width: 200px;"><img src="/Public/home/images/title-wdcx2.jpg"></span>
        </div>
        <div class="map"><a href="/index.php?m=Service&a=index"><img src="/Public/home/images/map.jpg" width="280" height="180"></a></div>
    </div> -->
    <div class="tzgg ht">
        <div class="title-yxt ht" style="width:300px;  ">
            <span class="timg1"><img src="/Public/home/images/title-tzgg.jpg"></span>
            <span class="timg2" style="width: 200px;"><img src="/Public/home/images/title-tzgg2.jpg"></span>
        </div>
        <ul class="tzgg-list">
            <li><a href="/index.php?m=Article&a=detail&id=116"><span class="red-l">New</span><span class="red-2">为网约车竞相选择“油改气”叫好</span><span style="float: right;">16-08-16</span></a></li><li><a href="/index.php?m=Article&a=detail&id=115"><span class="red-l">New</span><span class="red-2">成都探索逐步放开“油改气”限制</span><span style="float: right;">16-08-16</span></a></li><li><a href="/index.php?m=Article&a=detail&id=114"><span class="red-l">New</span><span class="red-2">本轮油价不作调整 此前“四连涨”局面终结</span><span style="float: right;">16-06-24</span></a></li><li><a href="/index.php?m=Article&a=detail&id=113"><span class="red-l">New</span><span class="red-2">油气改革刻不容缓 关键在于落实推进</span><span style="float: right;">16-06-23</span></a></li><li><a href="/index.php?m=Article&a=detail&id=112"><span class="red-l">New</span><span class="red-2">国际油价连跌六日 本轮国内成品油价格调整或搁浅</span><span style="float: right;">16-06-21</span></a></li><li><a href="/index.php?m=Article&a=detail&id=111"><span class="red-l">New</span><span class="red-2">深油所：天然气市场发展进入快车道</span><span style="float: right;">16-06-20</span></a></li><li><a href="/index.php?m=Article&a=detail&id=110"><span class="red-l">New</span><span class="red-2">国内油价或迎四连涨 重回“6元时代”</span><span style="float: right;">16-06-07</span></a></li><li><a href="/index.php?m=Article&a=detail&id=109"><span class="red-l">New</span><span class="red-2">油气改革方案出台渐行渐近 多家民营油企加速布局</span><span style="float: right;">16-05-30</span></a></li><li><a href="/index.php?m=Article&a=detail&id=108"><span class="red-l">New</span><span class="red-2">国际油价今年来首超50美元 国内油价或迎四连涨</span><span style="float: right;">16-05-27</span></a></li><li><a href="/index.php?m=Article&a=detail&id=107"><span class="red-l">New</span><span class="red-2">起加箱油多花8元钱 成品油价或将迎来“4连涨”</span><span style="float: right;">16-05-26</span></a></li><li><a href="/index.php?m=Article&a=detail&id=106"><span class="red-l">New</span><span class="red-2">加气站“触网”多种模式可鉴</span><span style="float: right;">16-05-25</span></a></li><li><a href="/index.php?m=Article&a=detail&id=105"><span class="red-l">New</span><span class="red-2">车用天然气价格的现状及趋势</span><span style="float: right;">16-05-18</span></a></li><li><a href="/index.php?m=Article&a=detail&id=104"><span class="red-l">New</span><span class="red-2">今年抚顺市未实施“油改气”的出租车辆不予办理年度审验</span><span style="float: right;">16-05-17</span></a></li><li><a href="/index.php?m=Article&a=detail&id=103"><span class="red-l">New</span><span class="red-2">2016年我国国内油价价格二连涨</span><span style="float: right;">16-05-16</span></a></li><li><a href="/index.php?m=Article&a=detail&id=102"><span class="red-l">New</span><span class="red-2">4月26日成品油价迎年内首涨</span><span style="float: right;">16-05-03</span></a></li>        </ul>
    </div>


</div>
</div>
<script type="text/javascript">
    function getAjax(ele){
        var datas = $(ele).serialize();
        $.ajax({
            type:"POST",
            url: "/index.php?m=Login&a=doLogin",
            data:  datas,
            timeout:"4000",
            dataType:"JSON",
            success: function(data){
                console.log(JSON.stringify(data));
                if(data.code == 1){
                    window.location.href="/index.php?m=User&a=index";
                } else{
                    alert(data.msg);
                }
            },
            error:function(){
                alert('提交错误!请刷新重试!');
            }
        })
    }
</script>
<!-- <div class="bottom-yxt clear">
    <a href="">联系我们</a>|<a href="">联系我们</a>|<a href="">联系我们</a>|<a href="">联系我们</a>|<a href="">联系我们</a>|<a
        href="">联系我们</a>|<a href="">联系我们</a>
    <br>服务热线：4000777369<br>
    地址：
</div> -->
<div class="foot-yxt">
    版权所有：河南亿欣通网络科技有限公司　未经许可　不得转载   <a href="http://www.miitbeian.gov.cn/">豫ICP备15017774号</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系电话：4000-777-369
</div>
<!-- 客服 -->
<!-- <div class="box_os">
    <div class="os_x"></div>
    <div class="osqq">
    <p><em>(工作日：9:30-18:30)</em></p>
        <p><strong>在线QQ</strong></p>
        <a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=4000777369&aty=0&a=0&curl=&ty=1"><p id="ico_onlineqq" class="qq"></p></a>
        <p><strong>客服电话</strong><span>4000-777-369</span><span> </span></p>
    </div>
    <div class="acbox"> -->
    <!--
        <a class="ico_pp" href="javascript:void(0);" title=""></a> -->
       <!--  <a class="ico_gt" href="#" target="_self" title=""></a> -->
    <!-- </div>
</div>
<div class="onlineService">
    <p class="ico_os"></p> -->
    <!-- <a class="ico_pp" href="javascript:void(0);" title=""></a> -->
    <!-- <a class="ico_gt" href="#" target="_self" title=""></a>
</div> -->
<!-- 客服END  -->
</body>
<!--搜索框-->
<script>
    $(function () {
        $.Huitab("#tab_demo .tabBar span", "#tab_demo .tabCon", "current", "click", "0");
    });
</script>
<!--快速登录-->
<script>
    $(function () {
        $.Huitab("#tab_demo2 .tabBar span", "#tab_demo2 .tabCon", "current", "click", "0");
    });
</script>
<script>
    $(function () {
        $.Huitab("#tab_demo3 .tabBar span", "#tab_demo3 .tabCon", "current", "click", "0");
    });
</script>
<!--导航条-->
<script>
    $(function () {
        $(".nav-yxt a").click(function () {
            $(this).addClass("active-nav").siblings().removeClass("active-nav");
        });
    });
</script>
<script>
    $(function () {
        jQuery("#slider-3 .slider").slide({mainCell: ".bd ul", titCell: ".hd li", trigger: "click", effect: "leftLoop", autoPlay: true, delayTime: 700, interTime: 7000, pnLoop: false, titOnClassName: "active"});
    });
</script>
</html>