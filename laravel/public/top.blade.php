<?php
$user_info = Session::get('user_info');//读取session文件
if($user_info){
    if($user_info['status'] == 1)
{
?>
<!--C端头部黑色导航-->
    <div id="lg_tbar">
        <div class="inner">
            <div class="lg_tbar_l">
                <a href="//www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a rel="nofollow" href="?r=login/login" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
            </div>

            <ul class="lg_tbar_r">
                <!-- if has unread message, add class unreaded -->
                <li class="msg_dropdown" >
                    <a class="msg_group" href="javascript: void 0;" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">
                        消息
                        <em class="msg_amount hide" id="headMsgAmount"></em>
                    </a>
                    <div class="lg_msg_popup">
                        <div class="lg_msg_pu_body" id="lgPopupMsgBody">

                        </div>
                        <div class="lg_msg_pu_footer">
                            <a href="//www.lagou.com/message/settingsdetail.html" target="_blank" class="lg_msg_setting fl"><i class="lg_msg_avatar setting_i" data-lg-tj-id="18B0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></i>&nbsp;</a>
                            <a href="//www.lagou.com/message/msgdetail.html" class="lg_msg_more fr" data-lg-tj-id="18A0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="?r=resume/download_resume" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow"  target="_blank">我的简历</a>
                </li>
                <li>
                    <a href="?r=resume/my_resume_box" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow"  target="_blank">投递箱</a>
                    <em class="noticeDot dn" id="noticeDot_delivery"></em>
                </li>
                <li>
                    <a href="//www.lagou.com/mycenter/collections.html" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a>
                </li>
                <li class="user_dropdown">
                    <span class="unick bl">
                    </span>
                    <em class="noticeDot dn" id="noticeDot_name"></em>
                    <i></i>
                    <ul>
                        <li>
                            <a href="//www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
                        </li>
                        <li>
                            <a href="//www.lagou.com/mycenter/invitation.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a href="?r=user/account_bound" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                        </li>

                        <li>
                            <a href="?r=login/login" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去个人版</a>
                        </li>

                        <li>
                            <a href="?r=login/userout" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                        </li>
                    </ul>
                </li>
            </ul>     
        </div>
    </div><!--end #lg_tbar-->

    <div id="header">
        	<div class="wrapper">
        		<a href="index.html" class="logo">
        			<img src="../storage/style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
        		</a>
        		<ul class="reset" id="navheader">
        			<li class="current"><a href="?r=index/index">首页</a></li>
        			<li ><a href="?r=company/index" >公司</a></li>
        			<!-- <li ><a href="#" target="_blank">论坛</a></li> -->
        			<li ><a href="?r=resume/my_resume" rel="nofollow">我的简历</a></li>
                    <li class="nav_community">
                    <a href="?r=saypost/index"  data-lg-tj-id="ic00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">言职</a>
                    <i class="icon_new_tip">new</i>
                </li>
    	    	</ul>  
        	</div>
    </div><!-- end #header -->
    <?php
    }else if($user_info['status'] == 2){
    ?>
    <!--C端头部黑色导航-->
    <div id="lg_tbar">
        <div class="inner">
            <div class="lg_tbar_l">
                <a href="//www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a rel="nofollow" href="?r=login/login" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入用户版</a>
            </div>

            <ul class="lg_tbar_r">
                <!-- if has unread message, add class unreaded -->
                <li class="msg_dropdown" >
                    <a class="msg_group" href="javascript: void 0;" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">
                        消息
                        <em class="msg_amount hide" id="headMsgAmount"></em>
                    </a>
                    <div class="lg_msg_popup">
                        <div class="lg_msg_pu_body" id="lgPopupMsgBody">

                        </div>
                        <div class="lg_msg_pu_footer">
                            <a href="//www.lagou.com/message/settingsdetail.html" target="_blank" class="lg_msg_setting fl"><i class="lg_msg_avatar setting_i" data-lg-tj-id="18B0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></i>&nbsp;</a>
                            <a href="//www.lagou.com/message/msgdetail.html" class="lg_msg_more fr" data-lg-tj-id="18A0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="?r=post/pub_manage" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">职位管理</a>
                </li>
                <li>
                    <a href="?r=company/my_resume_box" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow"  target="_blank">投递箱</a>
                    <em class="noticeDot dn" id="noticeDot_delivery"></em>
                </li>
                <li>
                    <a href="//www.lagou.com/mycenter/collections.html" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a>
                </li>
                <li class="user_dropdown">
                    <span class="unick bl">
                        <?=$user_info['email']?>
                        <?=$user_info['phone']?>
                    </span>
                    <em class="noticeDot dn" id="noticeDot_name"></em>
                    <i></i>
                    <ul>
                        <li>
                            <a href="//www.lagou.com/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a>
                        </li>
                        <li>
                            <a href="//www.lagou.com/mycenter/invitation.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a href="?r=user/account_bound" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a>
                        </li>

                        <li>
                            <a href="?r=login/login" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去用户版</a>
                        </li>

                        <li>
                            <a href="?r=login/userout" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                        </li>
                    </ul>
                </li>
            </ul>     
        </div>
    </div><!--end #lg_tbar-->
       <div id="header">
            <div class="wrapper">
                <a href="index.html" class="logo">
                    <img src="../storage/style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
                </a>
                <ul class="reset" id="navheader">
                    <li class="current"><a href="?r=index/index">首页</a></li>
                    <li ><a href="?r=company/index" >公司</a></li>
                    <!-- <li ><a href="#" target="_blank">论坛</a></li> -->
                    <li ><a href="?r=post/pub_pust" rel="nofollow">发布职位</a></li>
                     <li ><a href="?r=post/pub_manage" rel="nofollow">职位管理</a></li>
                </ul>
            </div>
    </div><!-- end #header --> 
    <?php
    }
}else{
    ?>
    <!--C端头部黑色导航-->
    <div id="lg_tbar">
        <div class="inner">
            <div class="lg_tbar_l">
                <a href="//www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a rel="nofollow" href="//hr.lagou.com/dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
            </div>

            <ul class="lg_tbar_r">
                <li>
                    <a href="?r=login/login" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
                </li>
                <li>
                    <a href="?r=login/register" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
                </li>
            </ul>
                </li>
            </ul>     
        </div>
    </div><!--end #lg_tbar-->
    <div id="header">
            <div class="wrapper">
                <a href="index.html" class="logo">
                    <img src="../storage/style/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
                </a>
                <ul class="reset" id="navheader">
                    <li class="current"><a href="?r=index/index">首页</a></li>
                    <li ><a href="?r=company/index" >公司</a></li>
                    <!-- <li ><a href="#" target="_blank">论坛</a></li> -->
                    <li ><a href="?r=post/pub_pust" rel="nofollow">发布职位</a></li>
                     <li ><a href="?r=post/pub_manage" rel="nofollow">职位管理</a></li>
                     <li ><a href="?r=post/pub_manage" rel="nofollow">简历中心</a></li>
                </ul>
            </div>
    </div><!-- end #header --> 
<?php
}
?>
<script>
    //tab样式切换
        $(".wrapper ul li").click(function(){
            $(".wrapper ul li").removeClass();
            $(this).addClass("current");
        })
</script>

