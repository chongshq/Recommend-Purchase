<?php 
require_once './include.php';
checkUserLogined();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人中心</title>
<link rel="stylesheet" href="styles/backstage.css">
</head>

<body>
    <div class="head">
            
            <h3 class="head_text fr">个人中心</h3>
    </div>
    <div class="operation_user clearfix">
       <!--   <div class="link fl"><a href="#">慕课</a><span>&gt;&gt;</span><a href="#">商品管理</a><span>&gt;&gt;</span>商品修改</div>-->
        <div class="link fr">
            <b>欢迎您
            <?php 
                if(isset($_SESSION['username'])){
                    echo $_SESSION['username'];
                }elseif(isset($_COOKIE['username'])){
                    echo $_COOKIE['username'];
                }
            ?>
            
            </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="icon icon_i">首页</a><span></span><a href="#" class="icon icon_j">前进</a><span></span><a href="#" class="icon icon_t">后退</a><span></span><a href="#" class="icon icon_n">刷新</a><span></span><a href="doAdminAction.php?act=logout" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>
                <!-- 嵌套网页开始 -->         
                <iframe src="apply.php"  frameborder="0" name="mainFrame" width="100%" height="522"></iframe>
                <!-- 嵌套网页结束 -->   
            </div>
        </div>
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                
                    <li>

                        <h3 onclick="show('menu1','change1')"><span onclick="show('menu1','change1')" id="change1">+</span>我要卖二手</h3>
                        <dl id="menu1" style="display:none;">
                            <dd><a href="apply.php" target="mainFrame">申请卖二手</a></dd>
                            <dd><a href="listApply.php" target="mainFrame">查看申请状态</a></dd>
                        </dl>
                    </li>
                    <li>

                        <h3 onclick="show('menu2','change2')"><span onclick="show('menu2','change2')" id="change2">+</span>订单操作</h3>
                        <dl id="menu2" style="display:none;">
                            <dd><a href="center.php" target="mainFrame">查询订单状态</a></dd>
                           
                        </dl>
                    </li>
                    
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        function show(num,change){
                var menu=document.getElementById(num);
                var change=document.getElementById(change);
                if(change.innerHTML=="+"){
                        change.innerHTML="-";
                }else{
                        change.innerHTML="+";
                }
               if(menu.style.display=='none'){
                     menu.style.display='';
                }else{
                     menu.style.display='none';
                }
        }
    </script>
</body>
</html>