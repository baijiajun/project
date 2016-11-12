<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
<script id="allmobilize" charset="utf-8" src="../storage/style/js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>全国-公司列表-拉勾网-最专业的互联网招聘平台</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="全国condition-condition-公司列表-拉勾网-最专业的互联网招聘平台" name="description">
<meta content="全国condition-公司列表-拉勾网-最专业的互联网招聘平台" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="../storage/style/css/style.css"/>
<link rel="stylesheet" type="text/css" href="../storage/style/css/external.min.css"/>
<link rel="stylesheet" type="text/css" href="../storage/style/css/popup.css"/>
<script src="../storage/style/js/jquery.1.10.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../storage/style/js/jquery.lib.min.js"></script>
<script src="../storage/style/js/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="../storage/style/js/additional-methods.js"></script>

<!-- 头部样式 -->
    <link rel="stylesheet" type="text/css" href="//www.lgstatic.com/www/static/dep/mCustomScrollbar/css/mCustomScrollbar_ac2fb8b.css" />
    <link rel="stylesheet" type="text/css" href="//www.lgstatic.com/www/static/pkg/layout_03ef79e.css" />
    <link rel="stylesheet" type="text/css" href="//www.lgstatic.com/www/static/recommend/modules/event/addIcon/main_4b0987c.css" />
    <link rel="stylesheet" type="text/css" href="//www.lgstatic.com/www/static/pkg/widgets_3990de9.css" />
    <link rel="stylesheet" type="text/css" href="//www.lgstatic.com/www/static/pkg/recommend/page/recommend-list/main.html_aio_7b973c5.css" />

<!--[if lte IE 8]>
    <script type="text/javascript" src="../storage/style/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
<script type="text/javascript" src="../storage/style/js/conv.js"></script>
</head>
<body>
<div id="body">
    <div id="container">
        
        <div class="clearfix">
            <div class="content_l">
                <form id="companyListForm" name="companyListForm" method="get" action="h/c/companylist.html">
                    <input type="hidden" id="city" name="city" value="全国" />
                    <input type="hidden" id="fs" name="fs" value="" />
                    <input type="hidden" id="ifs" name="ifs" value="" />
                    <input type="hidden" id="ol" name="ol" value="" />
                    <dl class="hc_tag">
                        
                      
                    </dl>
                               <ul class="hc_list reset">
                               <!-- 循环开始 -->
                               <?php foreach($data as $val){?>
                                   <li >
                                        <a href="?r=company/comp_details&com_id=<?=$val['com_id']?>" target="_blank">
                                            <h3 title="MOMO"><?=$val['com_name']?></h3>
                                            <div class="comLogo">
                                                <img src="<?=$val['logo']?>" width="190" height="190" alt="MOMO" />
                                                <ul>
                                                    <?=$val['name']?>
                                                </ul>
                                            </div>
                                        </a>
                                        <?php foreach($val['towcatdata'] as $vvv){?>
                                        <a href="h/jobs/148976.html" target="_blank"> <?=$vvv['name']?></a>
                                        <?php
                                        }
                                        ?>
                                    <ul class="reset ctags">
                                         <li>年终分红</li>
                                        <li>绩效奖金</li>
                                        <li>五险一金</li>
                                    </ul>
                                </li>
                                <?php
                                }
                                ?>
                                <!-- 循环结束 -->
                                
                        </ul>
            <div class="Pagination"></div>
            </form>
            </div>  
            <div class="content_r">
                <div class="subscribe_side">
                    <a href="subscribe.html" target="_blank">
                        <div class="subpos"><span>订阅</span> 职位</div>
                        <div class="c7">拉勾网会根据你的筛选条件，定期将符合你要求的职位信息发给你
                        </div>
                        <div class="count">已有
                            <em>3</em>
                            <em>4</em>
                            <em>2</em>
                            <em>1</em>
                            <em>0</em>
                        人订阅
                        </div>
                        <i>我也要订阅职位</i>
                    </a>
                </div> 
                <div class="greybg qrcode mt20">
                    <img src="../storage/style/images/companylist_qr.png" width="242" height="242" alt="拉勾微信公众号二维码" />
                    <span class="c7">扫描拉勾二维码，微信轻松搜工作</span>
                </div>
                <!-- <a href="h/speed/speed3.html" target="_blank" class="adSpeed"></a> -->
                <a href="h/subject/jobguide.html" target="_blank" class="eventAd">
                    <img src="../storage/style/images/subject280.jpg" width="280" height="135" />
                </a>
                <a href="h/subject/risingPrice.html" target="_blank" class="eventAd">
                    <img src="../storage/style/images/rising280.png" width="280" height="135" />
                </a>
            </div>
        </div>
    
    <input type="hidden" value="" name="userid" id="userid" />
      
<script type="text/javascript" src="../storage/style/js/company_list.min.js"></script>
<script>
// $(function(){
//     /*分页 */
//                                 $('.Pagination').pager({
//           currPage: 1,
//           pageNOName: "pn",
//           form: "companyListForm",
//           pageCount: 20,
//           pageSize: 5
//     }); 
// })
</script>           
            <div class="clear"></div>
            <input type="hidden" id="resubmitToken" value="" />
            <a id="backtop" title="回到顶部" rel="nofollow"></a>
        </div><!-- end #container -->
    </div><!-- end #body -->
    <div id="footer">
        <div class="wrapper">
            <a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
            <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
            <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
            <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
            <div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
        </div>
    </div>

<script type="text/javascript" src="../storage/style/js/core.min.js"></script>
<script type="text/javascript" src="../storage/style/js/popup.min.js"></script>

<!--  -->

</body>
</html>