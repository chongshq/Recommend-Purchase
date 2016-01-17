<?php
require_once 'include.php';
checkUserLogined();
if($_GET['type']=="create"){
  $res=generateOrder($_SESSION['id']);
}
else{
  $res=$_GET['orderId'];
}

?>
<html><head><script async="" src="https://webpushgw.alipay.com/polling?_callback=jQuery17205243136109784245_1452692568865&amp;biztype=cashier&amp;uid=2016011321001001000293734467&amp;cid=749a52f9-16e8-40d7-befc-1588e18006af&amp;timeout=30000&amp;_input_charset=utf-8&amp;ctoken=witheYzfFVPuLdTm&amp;_=1452692573554"></script>
<meta charset="utf-8">
<title>支付宝 - 网上支付 安全快速！</title>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="中国最大的第三方电子支付服务提供商">
<link rel="shortcut icon" href="https://i.alipayobjects.com/common/favicon/favicon.ico" type="image/x-icon">



 
 
<!-- CMS:收银台cms/公用CMS/公用配置开始:cashier/common/var.vm -->







	
<!-- CMS:收银台cms/公用CMS/公用配置结束:cashier/common/var.vm --> 
<link href="https://a.alipayobjects.com" rel="dns-prefetch">
<link href="https://app.alipay.com" rel="dns-prefetch">
<link href="https://my.alipay.com" rel="dns-prefetch">
<link href="https://lab.alipay.com" rel="dns-prefetch">
<link href="https://cashier.alipay.com" rel="dns-prefetch">
<link href="https://financeprod.alipay.com" rel="dns-prefetch">
<link href="https://shenghuo.alipay.com" rel="dns-prefetch">


<!-- uitpl:/component/trackerTime.vm -->

<script type="text/javascript">
  window._to = { start: new Date() };
</script>

<!-- CMS:全站公共 cms/tracker/monitor.vm开始:tracker/monitor.vm --><!-- CMS:全站公共 cms/tracker/sai_seer.vm开始:tracker/sai_seer.vm --><script type="text/javascript">

!function(e){function n(o){if(r[o])return r[o].exports;var i=r[o]={exports:{},id:o,loaded:!1};return e[o].call(i.exports,i,i.exports,n),i.loaded=!0,i.exports}var r={};return n.m=e,n.c=r,n.p="",n(0)}({0:function(e,n,r){e.exports=r(5)},5:function(e,n){function r(e){var n=String(e).match(l);return n?n[0]:"global"}function o(e){for(var n=[],o=0;e.arguments&&e.arguments.callee&&e.arguments.callee.caller&&(e=e.arguments.callee.caller,n.push("at "+r(e)),e.caller!==e)&&!(o++>c););return n.join("\n")}function i(e,n,r,i,t,a,u){!u&&arguments.callee.caller&&(u=o(arguments.callee.caller));var c={profile:s,type:e,msg:n||"",file:r||"",line:i||0,col:t||0,num:a||"",stack:u||"",lang:navigator.language||navigator.browserLanguage||"",lost:b.join(",")},l=r+":"+i+":"+n;return p.hasOwnProperty(l)||(c.uv=1,p[l]=!0),Sai.log(c)}var t=window;if(t.Sai)e.exports={};else{var a=t.Sai={};a._DATAS=[];var u=a._EVENTS=[];a.on=function(e,n){u.push([e,n])},a.off=function(){};var s="log";a.log=function(e,n){if(e&&!(arguments.length>=3)){var r;return"[object Object]"===Object.prototype.toString.call(e)?(r=e,r.profile=n||r.profile||s):r={profile:n||s,seed:e},a._DATAS.push(r),r}};var s="jserror",c=20,l=/^\s*function\b[^\)]+\)/,b=[],f={};a.lost=function(e){return f.hasOwnProperty(e)?void 0:(f[e]=!0,b.push(e),b)};var p={};a.error=function(e){return e instanceof Error?i("catched",e.message||e.description,e.filename||e.fileName||e.sourceURL,e.lineno||e.lineNumber||e.line,e.colno||e.columnNumber,e.number,e.stack||e.stacktrace):void 0},t.onerror=function(e,n,r,o){return i("global",e,n,r,o),!1}}}});

</script><!-- CMS:全站公共 cms/tracker/sai_seer.vm结束:tracker/sai_seer.vm --><!-- CMS:全站公共 cms/tracker/monitor.vm结束:tracker/monitor.vm -->
<!-- CMS:全站公共 cms/tracker/seajs.vm开始:tracker/seajs.vm -->	

<!-- monitor 防错代码 -->
<script>
(function(win){
  if(!win.monitor){win.monitor = {};}

  var METHODS = ["lost", "log", "error", "on", "off"];

  for(var i=0,method,l=METHODS.length; i<l; i++){
    method = METHODS[i];
    if("function" !== typeof win.monitor[method]){
      win.monitor[method] = function(){};
    }
  }
})(window);
</script>

<!-- seajs以及插件 -->
<script charset="utf-8" crossorigin="anonymous" id="seajsnode" onerror="window.monitor &amp;&amp; monitor.lost &amp;&amp; monitor.lost(this.src)" src="https://a.alipayobjects.com/??seajs/seajs/2.2.3/sea.js,seajs/seajs-combo/1.0.0/seajs-combo.js,seajs/seajs-style/1.0.2/seajs-style.js,seajs/seajs-log/1.0.0/seajs-log.js,jquery/jquery/1.7.2/jquery.js,gallery/json/1.0.3/json.js,alipay-request/3.0.3/index.js"></script>

<!-- seajs config 配置 -->
<script>
seajs.config({
  alias: {
    '$': 'jquery/jquery/1.7.2/jquery',
    '$-debug': 'jquery/jquery/1.7.2/jquery',
    'jquery': 'jquery/jquery/1.7.2/jquery',
    'jquery-debug': 'jquery/jquery/1.7.2/jquery-debug',
    'seajs-debug': 'seajs/seajs-debug/1.1.1/seajs-debug'
  },
  crossorigin: function(uri){
  
    function typeOf(type){
	  return function(object){
	    return Object.prototype.toString.call(object) === '[object ' + type + ']';
	  }
	}
	var isString = typeOf("String");
	var isRegExp = typeOf("RegExp");
    
	var whitelist = [];
	
                  whitelist.push('https://a.alipayobjects.com/');
          	
	for (var i=0, rule, l=whitelist.length; i<l; i++){
	  rule = whitelist[i];
	  if (
	    (isString(rule) && uri.indexOf(rule) === 0) ||
	    (isRegExp(rule) && rule.test(uri))
		) {
		
	    return "anonymous";
	  }
	}
  },
  vars: {
    locale: 'zh-cn'
  }
});
</script>

<!-- 兼容原有的 plugin-i18n 写法 -->
<!-- https://github.com/seajs/seajs/blob/1.3.1/src/plugins/plugin-i18n.js -->
<script>
seajs.pluginSDK = seajs.pluginSDK || {
  Module: {
    _resolve: function() {}
  },
  config: {
    locale: ''
  }
};
// 干掉载入 plugin-i18n.js，避免 404
seajs.config({
  map: [
	[/^.*\/seajs\/plugin-i18n\.js$/, ''],
	[/^.*\i18n!lang\.js$/, '']
  ] 
});
</script>

<!-- 路由旧 ID，解决 seajs.use('select/x.x.x/select') 的历史遗留问题 -->
<script>
(function(){

var JQ = '/jquery/1.7.2/jquery.js';
seajs.cache['https://a.alipayobjects.com/gallery' + JQ] = seajs.cache['https://a.alipayobjects.com/jquery' + JQ];

var GALLERY_MODULES = [
  'async','backbone','coffee','cookie','es5-safe','handlebars','iscroll',
  'jasmine','jasmine-jquery','jquery','jquery-color','json','keymaster',
  'labjs','less','marked','moment','mustache','querystring','raphael',
  'socketio','store','swfobject','underscore','zepto','ztree'
];

var ARALE_MODULES = [
  'autocomplete','base','calendar','class','cookie','dialog','easing',
  'events','iframe-uploader','iframe-shim','messenger','overlay','popup',
  'position','select','switchable','tip','validator','widget'
];

var util = {};
util.indexOf = Array.prototype.indexOf ?
  function(arr, item) {
    return arr.indexOf(item);
  } :
  function(arr, item) {
    for (var i = 0; i < arr.length; i++) {
      if (arr[i] === item) {
        return i;
      }
    }
    return -1;
  };
util.map = Array.prototype.map ?
  function(arr, fn) {
    return arr.map(fn);
  } :
  function(arr, fn) {
    var ret = [];
	for (var i = 0; i < arr.length; i++) {
        ret.push(fn(arr[i], i, arr));
    }
    return ret;
  };

function contains(arr, item) {
  return util.indexOf(arr, item) > -1
}

function map(id) {
  id = id.replace('#', '');

  var parts = id.split('/');
  var len = parts.length;
  var root, name;

  // id = root/name/x.y.z/name
  if (len === 4) {
    root = parts[0];
    name = parts[1];

    // gallery 或 alipay 开头的没有问题
    if (root === 'alipay' || root === 'gallery') {
      return id;
    }

    // arale 开头的
    if (root === 'arale') {
      // 处理 arale/handlebars 的情况
      if (contains(GALLERY_MODULES, name)) {
        return id.replace('arale/', 'gallery/');
      } else {
        return id;
      }
    }
  }
  // id = name/x.y.z/name
  else if (len === 3) {
    name = parts[0]

    // 开头在 GALLERY_MODULES 或 ARALE_MODULES
    if (contains(GALLERY_MODULES, name)) {
      return 'gallery/' + id;
    } else if (contains(ARALE_MODULES, name)) {
      return 'arale/' + id;
    }
  }

  return id;
}

var _use = seajs.use;

seajs.use = function(ids, callback) {
  if (typeof ids === 'string') {
    ids = [ids];
  }

  ids = util.map(ids, function(id) {
    return map(id);
  });

  return _use(ids, callback);
}

})();
</script><!-- CMS:全站公共 cms/tracker/seajs.vm结束:tracker/seajs.vm -->
<!-- CMS:全站公共 cms/tracker/tracker_time.vm开始:tracker/tracker_time.vm --><script charset="utf-8" crossorigin="crossorigin" src="https://a.alipayobjects.com/static/ar/alipay.light.base-1.8.js"></script>


<script type="text/javascript">
if (!window._to) {
  window._to = { start: new Date() };
}
</script>
<script charset="utf-8" src="https://as.alipayobjects.com/??component/tracker/2.2.0/index.js,component/smartracker/2.0.1/index.js"></script>
<script>
  window.Tracker && Tracker.start && Tracker.start();
</script>

<!-- CMS:全站公共 cms/tracker/tracker_time.vm结束:tracker/tracker_time.vm -->  <script>(function(D,W,codeUri){var sampling="5",maxNum=5,_st=+new Date(),ran=Math.floor(Math.random()*sampling);if(ran>0||isNaN(ran)){return;}W.throwCasherError=W.onerror=function(err,file,line){if((--maxNum)<=0){return;};var nick="",accountId=D.getElementById('J-accountId'),orderId=/orderId=([\w|\.]+)/.exec(location.search);if(accountId){nick+=accountId.innerHTML;}if(orderId){nick+=':'+orderId[1];}err='[t'+(new Date()-_st)+'][uhttps://cashier.alipay.com'+W.location.pathname+']'+err;var n = 'cashierFeImg_' + parseInt(Math.random()*10000000),img=W[n]=new Image();img.onload=img.onerror=function(){W[n]=null;};img.src="//gm.mmstat.com/jstracker.2?"+["type=9","id=jstracker","v=0.02","nick="+codeUri(nick),"msg="+codeUri(err||""),"file="+codeUri(file||""),"ua="+codeUri(navigator.userAgent),"line="+codeUri(line||""),"scrolltop=","screen=","t="+new Date().valueOf()].join("&");};})(document, window, encodeURIComponent);</script>
<style>
@font-face {
  font-family: 'cashier';
  src: url("//at.alicdn.com/t/font_1434596335_6737535.eot"); /* IE9*/
  src: url("//at.alicdn.com/t/font_1434596335_6737535.eot?#iefix") format('embedded-opentype'), /* IE6-IE8 */
  url("//at.alicdn.com/t/font_1434596335_6737535.woff") format('woff'), /* chrome、firefox */
  url("//at.alicdn.com/t/font_1434596335_6737535.ttf") format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("//at.alicdn.com/t/font_1434596335_6737535.svg#cashier") format('svg'); /* iOS 4.1- */
}
.iconfont {
    font-family:"cashier" !important;
    font-style: normal;
    font-weight: normal;
    cursor: default;
    -webkit-font-smoothing: antialiased;
}
</style>  <link charset="utf-8" rel="stylesheet" href="https://a.alipayobjects.com/cashiers/1.4.0/lightpay.css" media="all">

<style>
  .icon-gray {
  filter: url("https://cashierzui.alipay.com:443/filters.svg#grayscale");
  filter:gray\9;
  -webkit-filter: grayscale(90%);
}
/* 天猫点劵卡样式开始 */
.tmallPcardMargin {
  margin-right: 38px;
}

.account-item-grayMask {
  position: relative;
}

.account-item-grayMask .ui-grayMask {
  height: 38px;
}

/* 天猫点劵卡样式结束 */
.manage-list .morebank {
  _display: inline-block;
}

.moneyFundExplain {
  background-color: #f47b5a;
  color: white;
  padding: 2px 10px 2px 10px;
    line-height: 16px;
}
.mfe-tip-warp{
    width: 320px;
}
.mfe-tip-title{
    line-height: 20px;
}

.explaintext {
  display: none;
}


.manage-item .fn-green{
  color:#393;
}
/* 超限科学引导开始 */
.extra-item .ui-button-guide {
  color: #000;
  background-color: #fafafa;
  padding: 0 10px;
  font-size: 12px;
  font-weight: normal;
  margin-top: 6px;
  margin-bottom: 10px;
}
.extra-item .ui-tipbox-recommend {
  color: #fff;
  background-color: #d9524e;
  padding: 1px 4px 2px 4px;
  margin-right: 4px;
  border-radius: 2px;
}
/* 超限科学引导结束 */


/* 账户渠道开始*/
  .account-chls {
    margin-bottom: 20px;
    padding: 0 20px;
  }
  .account-chl {
    position: relative;
    height: 20px;
    margin-bottom: 1px;
    padding: 8px 20px 8px 18px;
  }
  .account-chl-used {
    background: #E9F0FE;
  }
  .account-chl-disabled {
    color: #999;
  }
  .account-chl .iconfont {
    font-size: 14px;
  }
  .account-chl em {
    font-weight: bold;
  }
  .account-amount {
    position: absolute;
    right: 39px;
    top: 9px;
    line-height:18px;
  }
  .account-amount em{
    font-size: 14px;
    color: #f60;
    font-weight:700;
  }
  /* 购物卡 */
  .account-card {
    margin-right: 4px;
    padding: 2px 4px;
    border: 1px dashed #bbcbef;
    background: #fff;
  }
  .account-card-used {
    padding: 1px 4px;
    border: 2px solid #ffac21;
  }
  .account-card-err {
    border-color: #f00;
  }
  .account-card em{
    font-weight: bold;
  }
  .account-card i {
    color: #999;
  }
/* 账户渠道结束*/

.limit-result-off{margin-left:8px;}
.limit-result-off{
  display:none
}

.ch-limiting .icon-limit-exceed{
  display:inline;
}
.action-rt-gray .limit-result-off{
  display:none
}

/* 分期用到 */
.ui-select-trigger-disabled {
    background-image: -moz-linear-gradient(center top , #FBFBFB, #F3F3F3);
    border-color: #CCCCCC;
    color: #B2B2B2;
    cursor: default;
}


/* 渠道加载 loading */
.action-rt {
  line-height: 14px;
  height: 14px;
  font-size: 12px !important;
  background-color: #FFFFFF !important;
  border: 1px solid #1E73C1;
  color: #1E73C1;
  margin-right: 2px;
  display: inline-block;
  zoom: 1;
}

.action-rt .action-rt-type {
  background-color: #1E73C1;
  display: inline-block;
  color: #ffffff;
  height: 14px;
  line-height: 14px;
  padding: 0 2px;
}

.action-rt .rt-discount {
  color: #1E73C1;
  padding: 0;
  background: none;
}
.action-rt-gray .action-rt {
  border: 0;
  background-color: #cccccc !important;
  color: #FFFFFF !important;
}
.action-rt-gray .action-rt-type,
.action-rt-gray .rt-discount {
  background-color: #cccccc !important;
  color: #FFFFFF !important;
}

.channel-label .ui-fm-error .ui-fm-explain {
  color: #FF5243;
  padding: 3px 0 0;
  padding: 5px 0 0 \9;
  _padding-top: 3px;
  _margin-left: 3px;
  font-size: 12px;
  padding-left: 20px;
  background: url(https://i.alipayobjects.com/e/201208/3JRI1gkfUX.png) no-repeat -138px -83px;
}
</style>

<script>
  if(document.domain.indexOf("alipay.net") > -1) {
    document.domain = "alipay.net";
  } else {
    document.domain = "alipay.com";
  }

  // 升级安全服务的xbox，混有有显示问题
  seajs.config({
    alias: {
      'alipay/xbox/1.0.2/xbox': 'alipay-xbox/1.2.0/xbox'
    }
  });


  // 此变量只为主页面科学引导浮层所用，待下线，这里代码同步删除
  var CashierVar = window.CashierVar || {};
  CashierVar.PageVar = {
    app_domain: "https://cashierzui.alipay.com:443"
  }
</script>
<!-- CMS:收银台cms/common/combIconsStamp.vm开始:common/combIconsStamp.vm -->	<script type="text/javascript">
			var ALIPAY_COMBO_ICONS_STAMP = '20160106';
	
	if(!window.console){
		window.console = {"log": function(){return;}}
	}
</script>
<!-- CMS:收银台cms/common/combIconsStamp.vm结束:common/combIconsStamp.vm --><style></style><style type="text/css" class="iconStyle">.icon-cashier-ICBC_s {background-position: 0px -0px; } 
.icon-cashier-ICBC_s {text-indent: -9999px; background-image: url("https://i.alipayobjects.com/combo.png?d=cashier&t=ICBC_s&timestamp=20160106");} .icon-cashier-ICBC_s {background-position: 0px -0px; } 
.icon-cashier-ICBC_s {text-indent: -9999px; background-image: url("https://i.alipayobjects.com/combo.png?d=cashier&t=ICBC_s&timestamp=20160106");} </style><link charset="utf-8" crossorigin="anonymous" rel="stylesheet" href="https://a.alipayobjects.com/u/css/201402/2ACTshL8Vh.css"></head>
<body>

    <div id="header">
    <div class="header-container fn-clear">
        <div class="header-title">
            <span class="logo">支付宝<s></s></span>
                        <span class="logo-title">我的收银台</span>
                    </div>
                            <div class="ui-select fn-left switchTemplate" id="switchTemplate">
	<a href="#" class="ui-select-text" seed="switchTemplate-link" smartracker="on">
				<span>中国大陆版</span>
		 <i class="iconfont"></i>
	</a>
	<ul class="ui-select-content">
		<li class="ui-select-item">
			<a href="https://cashierzui.alipay.com:443/standard/payment/cashier.htm?outBizNo=2016011321001001000293734467&amp;timeStamp=1452692567482&amp;bizIdentity=trade10001&amp;orderId=0113480a544a004ad00930erclou1002&amp;country=CN" seed="-CN">中国大陆版</a>
		</li>
				<li class="ui-select-item">
			<a href="/standard/common/dispatch.htm?orderId=0113480a544a004ad00930erclou1002&amp;target=HKFOREIGNPAY" seed="switchTemplate-linkT1" smartracker="on">香港版</a>
		</li>
						<li class="ui-select-item">
			<a href="/standard/common/dispatch.htm?orderId=0113480a544a004ad00930erclou1002&amp;target=TWFOREIGNPAY" seed="switchTemplate-linkT2" smartracker="on">台湾版</a>
		</li>
						<li class="ui-select-item">
			<a href="/standard/common/dispatch.htm?orderId=0113480a544a004ad00930erclou1002&amp;target=FOREIGNPAY" seed="switchTemplate-linkT3" smartracker="on">海外其他地区版</a>
		</li>
			</ul>
</div>
<script type="text/javascript" charset="utf-8">
		(function(){
			function _hasClass(obj, cls) {
			    return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
			}
			function _addClass(obj, cls) {
			    if (!_hasClass(obj, cls)) obj.className += " " + cls;
			}
			function _removeClass(obj, cls) {
			    if (_hasClass(obj, cls)) {
			        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
			        obj.className = obj.className.replace(reg, ' ');
			    }
			}

			var switchTemplate = document.getElementById("switchTemplate");
			switchTemplate.onmouseover = function(){
				_addClass(switchTemplate,'focus');
			};

			switchTemplate.onmouseout = function(){
				_removeClass(switchTemplate,'focus');
			};
		})()
	</script>                <ul class="header-right">
                            <li class="account-id">支付宝账户：<span id="J-accountId">15221568015</span></li>
                                                                                <li><a target="_blank" seed="pay-by-standard" href="https://shenghuo.alipay.com/peerpaycore/prePeerPayApply.htm?biz_no=2016011321001001000293734467&amp;biz_type=TRADE">找人代付</a></li>
                        <li>唯一热线：95188</li>
        </ul>
    </div>
</div>
<!-- fengdie: cashier/common/notice.vm 1452692567917 -->

  
    
    
    
    


<!--[if IE]>
<script src="https://a.alipayobjects.com/cashiers/1.3.1/ie.js"></script>
<![endif]-->
                  <div id="content">
  








        <div id="J_Order" class="order order-with-qr" data-config="{&quot;resultQueryStartDelay&quot;:&quot;5000&quot;,&quot;resultQueryPace&quot;:&quot;3000&quot;,&quot;payResultQueryMaxTimes&quot;:&quot;200&quot;,&quot;codeInfo&quot;:&quot;https://qr.alipay.com/_d?_b=TRADE_DY&amp;mergeOrder=false&amp;tradeNo=2016011321001001000293734467&quot;,&quot;isNeedPollResult&quot;:&quot;true&quot;,&quot;isNeedLongPoll&quot;:&quot;true&quot;,&quot;orderId&quot;:&quot;0113480a544a004ad00930erclou1002&quot;,&quot;outBizNo&quot;:&quot;2016011321001001000293734467&quot;,&quot;pollingUrl&quot;:&quot;https://webpushgw.alipay.com/polling&quot;,&quot;barCodeSign&quot;:&quot;777f2b5094709aeb8a705bf0a0d7e1fc&quot;,&quot;extraData&quot;:&quot;trade10001|true|PARTNER_TAOBAO_ORDER|&quot;,&quot;longPollingQueryMaxTimes&quot;:&quot;40&quot;,&quot;longPollingQueryPace&quot;:&quot;30000&quot;,&quot;size&quot;: 100 ,&quot;isNew&quot;:&quot;true&quot;}">
    <div class="order-wrapper">
                    <div class="qr J_APop" data-arrowposition="10" data-target="J_QrTip">
                                <div id="J_QrWrapper" class="qr-wrapper"><canvas width="100" height="100" style="width: 100px; height: 100px;"></canvas></div>
            </div>
            <script id="J_QrTip" type="text/tip-template"><div class="qr-tip"><!-- CMS:收银台cms/common/qrCodeTip.vm开始:common/qrCodeTip.vm -->

<h3>扫码支付</h3>
<p>使用手机支付宝扫描二维码付款</p>
<p>[仅限本人使用]</p>
<p class="qrcode-overlay-link">
  <a href="https://cmspromo.alipay.com/down?cid=5224" target="_blank" data-width="500" data-height="350" class="J_XBox qrcode-download-link">手机支付宝下载</a>
  |
<a href="http://help.alipay.com/lab/help_detail.htm?help_id=380925" target="_blank">如何使用?</a>
</p>
<!-- CMS:收银台cms/common/qrCodeTip.vm结束:common/qrCodeTip.vm --></div></script>
        
        <div class="order-title">
                      <?php echo $_GET['itemName'];?>
                    </div>


                                    <div class="order-seller">
                    卖家昵称：众人通信专营店
                </div>
                    
        <div class="order-amount">
            <div class="order-real-amount">
                                                <em class=""><?php echo $_GET['price']*$_GET['itemNum'];?></em>
                元
                                    <i class="iconfont" title="刷新">
                                            <a href="http://cashierzui.alipay.com/standard/lightpay/lightPayCashier.htm?orderId=0113480a544a004ad00930erclou1002&amp;bizIdentity=trade10001&amp;outBizNo=2016011321001001000293734467&amp;timeStamp=1452692567482&amp;country=CN&amp;enctraceid=FLnrdzr_e9SKtJwKVBHIe1aXmQAoxcfIAazG_6tPI4Y," class="order-reload" seed="get_price"></a>
                                        </i>
                            </div>

                                            </div>
        <a id="J_OrderExtTrigger" class="order-ext-trigger" href="#" seed="order-detail-more">
            <i class="iconfont" title="记录"></i>
            订单详情
        </a>
        <p id="J_OrderExtLoading" class="order-ext-loading fn-hide">
            加载订单详情信息...
                            <a href="http://cashierzui.alipay.com/standard/lightpay/lightPayCashier.htm?orderId=0113480a544a004ad00930erclou1002&amp;bizIdentity=trade10001&amp;outBizNo=2016011321001001000293734467&amp;timeStamp=1452692567482&amp;country=CN&amp;enctraceid=FLnrdzr_e9SKtJwKVBHIe1aXmQAoxcfIAazG_6tPI4Y," seed="refresh-account">刷新</a>
                    </p>
        <div id="J_OrderExt" class="order-ext fn-hide" data-url="https://cashierzui.alipay.com:443/tile/service/standard:orderDetailAsyncProxy.tile?outBizNo=2016011321001001000293734467&amp;outRelationId=&amp;bizIdentity=trade10001&amp;signData=f2321e92c12989015d52c2f04ee2a6b0&amp;orderId=0113480a544a004ad00930erclou1002"></div>
    </div>
</div>

<!-- CMS:收银台cms/help/freezeOrderInfo.vm开始:help/freezeOrderInfo.vm --><div id="J_OrderTypeTipLittle" class="fn-hide">
银行卡金额支付并冻结在支付宝账户余额（不包含手续费）</div>

<div id="J_OrderTypeTipLittleMoneyFund" class="fn-hide">
本次付款金额先冻结，资金冻结期间继续享收益。</div>
<!-- CMS:收银台cms/help/freezeOrderInfo.vm结束:help/freezeOrderInfo.vm -->  <!-- CMS:收银台cms/快速付款/快付大促主引导tip开始:fastpay/fastpayDacuMaintip.vm --><!-- CMS:收银台cms/快速付款/快付大促主引导tip结束:fastpay/fastpayDacuMaintip.vm -->  <div id="J-payMethod" class="main-container">
        <div id="J-rcPaymentDisabled"></div>
        
    <form name="expressFastPayFrom" id="lightPayForm" action="" method="post">
      	<input type="hidden" name="_form_token" value="cxk88JrRGGOYxgnZV1zztUYV5clgjTzw">
      
      
      
                
                    
  
    
  

<div id="J-account" class="account-pay-tool fn-clear">
  
  
      


  
  
  
  </div>

      <div id="J-rcChannels" data-url="data.html"><div data-reactid=".0"><ul id="J_MarketinglList" data-reactid=".0.0"></ul><ul class="saved-card-list" id="J_SavecardList" data-reactid=".0.1"><li class="channel-bank row-container fn-clear row-container-focus" data-reactid=".0.1.$ch0"><div class="row-basic fn-clear" data-reactid=".0.1.$ch0.$/=10"><label class="channel-label" for="icbc906-0" data-reactid=".0.1.$ch0.$/=10.0"><span class="pay-amount" data-reactid=".0.1.$ch0.$/=10.0.0"><span class="amount" data-reactid=".0.1.$ch0.$/=10.0.0.0"><span data-reactid=".0.1.$ch0.$/=10.0.0.0.0">支付</span><em class="amount-font-R16" title="0.29" data-reactid=".0.1.$ch0.$/=10.0.0.0.2"><?php echo $_GET['price']*$_GET['itemNum'];?></em><span data-reactid=".0.1.$ch0.$/=10.0.0.0.3">元</span></span></span><span class="channel-tit channel-icon icon icon-cashier-ICBC_s" data-id="ICBC_s" data-reactid=".0.1.$ch0.$/=10.0.1"></span><span class="channel-name" title="中国工商银行" data-reactid=".0.1.$ch0.$/=10.0.2">中国工商银行</span><span class="card-number" data-reactid=".0.1.$ch0.$/=10.0.3">**4074</span><span class="card-type" data-reactid=".0.1.$ch0.$/=10.0.4">储蓄卡 | 快捷</span><span class="card-info" data-reactid=".0.1.$ch0.$/=10.0.5"></span></label><input checked="" class="channel-input" id="icbc906-0" name="apiCode" type="radio" data-reactid=".0.1.$ch0.$/=10.1"></div><div class="row-extra fn-hide" data-reactid=".0.1.$ch0.$/=11"></div></li></ul><div class="manage-list fn-clear" data-reactid=".0.2"><a class="manage-item manage-more fn-left" data-seed="lightpay-more-savedCard" href="#" data-reactid=".0.2.0"><span data-reactid=".0.2.0.0">其他付款方式 </span></a><a class="J_XBox manage-item manage-item-xbox fn-left" data-seed="lightpay-use-newCard" href="https://cashierzui.alipay.com:443/standard/fastpay/useNewCard.htm?orderId=0113480a544a004ad00930erclou1002" data-reactid=".0.2.1">使用新卡付款</a></div></div></div>
    
            
              <div id="J-security" class="">
                    



<!-- Powered by Alipay Security --><input type="hidden" name="securityId" id="securityId" value="web|cashier_payment_3|c988a21e-4619-4579-8576-75c7d32b14cfRZ05">






    



   


  
    





      



    
<div class="ui-securitycore ui-securitycore-tip J-securitycoreTip " data-link-in-xbox="">

            
  <div class="ui-form-item ui-form-item-success">
    <div class="ui-form-explain">你在安全的环境中，请放心使用！</div>
              <div class="J-checkResult fn-hide" data-status="">你在安全的环境中，请放心使用！</div>
        </div>

</div>






    
    <script type="text/javascript">
    (function () {
      var alipay = window.alipay || (window.alipay = {});
      var s = alipay.security = alipay.security || {};
      s.downloadServer = "https://download.alipay.com" || alipay.security.downloadServer;
      s.securityCenterServer = "https://securitycenter.alipay.com" || alipay.security.securityCenterServer;
      s.hasBrowserControlPolicy = true;
              s.certDataAccessPolicy = "";
            s.controlCheckTimeout = Number("3000");
      s.websocketPorts = "27382,45242";
      s.newCertControlDownloadAddress = "https://securitycenter.alipay.com/sc/downloadCtr.htm?controlType=cert&amp;needExtension=false&amp;downloadPath=stable";
      s.sid = "web|cashier_payment_3|c988a21e-4619-4579-8576-75c7d32b14cfRZ05";
    })();
  </script>
  <script type="text/javascript" charset="utf-8" crossorigin="anonymous" src="https://a.alipayobjects.com/static/ar/??alipay.light.base-1.11.js,alipay.light.page-1.15-sizzle.js,alipay.security.base-1.8.js,alipay.security.utils.chromeExtension-1.1.js,alipay.security.edit-1.22.js,alipay.security.utils.pcClient-1.1.js,alipay.security.cert-1.5.js,alipay.security.otp-1.2.js,alipay.security.mobile-1.7.js,alipay.security.ctuMobile-1.2.js,alipay.security.riskMobileBank-1.3.js,alipay.security.riskMobileAccount-1.3.js,alipay.security.riskMobileCredit-1.2.js,alipay.security.riskCertificate-1.0.js,alipay.security.riskSecurityQa-1.0.js,alipay.security.riskExpressPrivacy-1.0.js,alipay.security.checkCode-1.1.js,alipay.security.rds-1.0.js,alipay.security.barcode-1.1.js,alipay.security.riskOneKeyConfirm-1.2.js,alipay.security.riskSudoku-1.0.js,alipay.security.riskOriginalAccountMobile-1.0.js,alipay.security.riskOriginalSecurityQa-1.0.js,riskTelAccount-1.0.js,alipay.security.core-2.0.js"></script>
    <script charset="utf-8" crossorigin="anonymous" src="https://a.alipayobjects.com/security-sdk/2.1.2/index.js"></script>
    <script>
  light.trackOn = false;
  light.has('page/products') || light.register('page/products');
  light.has('page/scProducts') || light.register('page/scProducts', light, []);
  alipay.security.utils.chromeExtension.setExtensionId('lapoiohkeidniicbalnfmakkbnpejgbi');
</script>
<!-- Powered by Alipay Security -->  






<div class="ui-securitycore J-securitycoreMain" data-request="web|cashier_payment_3|c988a21e-4619-4579-8576-75c7d32b14cfRZ05" data-system="cashier" data-server="https://securitycore.alipay.com" data-status="" data-extension="false">

    <input style="display:none" seed="JSecuritycoreMain-ipt" smartracker="on">
  <input type="password" style="display:none" seed="JSecuritycoreMain-iptT1" smartracker="on">

                                                      

<style type="text/css">
  .edit-section .edit-link a {
    line-height: 24px;
  }
</style>

                                    

    <div class="edit-section">
      <div class="ui-form-item">
        <label class="ui-label" for="payPassword">
                    支付宝支付密码：
        </label>

                <span class="standardPwdContainer" style="display:none">
          <input type="password" tabindex="1" id="payPassword_input" name="payPassword_input" class="ui-input" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" seed="standardPwdContainer-payPassword_input" smartracker="on">
        </span>
        <span class="alieditContainer" id="payPassword_container"><input type="password" tabindex="1" id="payPassword_rsainput" name="payPassword_rsainput" class="ui-input i-text sixDigitPassword" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" value="" maxlength="6" minlength="6" style="outline: none; margin-left: -999px;"><div class="sixDigitPassword" tabindex="0" style="width: 180px;display:none;"><i class="" style="width: 29px; border-color: transparent;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><i style="width: 29px;"><b style="visibility: hidden;"></b></i><span style="width: 29px; visibility: hidden; left: 0px;"></span></div></span>

        <span class="ui-form-other edit-link">
          <a target="_blank" href="https://lab.alipay.com/user/passwordfind/index.htm?type=P" seed="sc_edit_forgetPwd">忘记密码？</a>        </span>

        <div class="ui-form-explain">
          <p id="J_edit_prompt_default" class="">
            <!-- CMS:安全核心/安全服务化收银台/未安装控件开始:securitycore/cashier/editPrompt.vm -->
      请输入6位数字支付密码  
          </p>

          <p id="J_edit_prompt_noEdit" class="fn-hide">
            <!-- CMS:安全核心/安全服务化收银台/默认的密码控件下方的提示信息开始:securitycore/cashier/editPromptNoEdit.vm -->
密码控件无法安装？可使用 <a href="javascript:void(0)" class="J-cross-to-mobile" seed="cross-to-mobile-in-cert-tip">穿越到手机上付款</a>

          </p>
                                        </div>
        

<input type="hidden" name="J_aliedit_using" value="true">
<input type="hidden" id="payPassword" name="payPassword" value="">
<input type="hidden" name="J_aliedit_key_hidn" value="payPassword">

<input type="hidden" name="J_aliedit_uid_hidn" value="alieditUid">
<input type="hidden" id="alieditUid" name="alieditUid" value="355b02a641ad76f2bee13f5780d0e80b">

<input type="hidden" name="REMOTE_PCID_NAME" value="_seaside_gogo_pcid">
<input type="hidden" name="_seaside_gogo_pcid" value="">
<input type="hidden" name="_seaside_gogo_" value="">
<input type="hidden" name="_seaside_gogo_p" value="">

<input type="hidden" name="J_aliedit_prod_type" value="payment_password">

<input type="hidden" name="security_activeX_enabled" value="false">

<input type="hidden" name="J_aliedit_net_info" value="">

<input type="hidden" id="edit_infor" value="" render="R">

<script>
  light.node('#payPassword').parent().find('[name=security_activeX_enabled]')[0].value = alipay.security.activeXEnabled;
</script>      </div>
    </div>

    <style type="text/css">
  input.sixDigitPassword {
    position: absolute;
    color: #fff;
    opacity: 0;
    width: 1px;
    height: 1px;
    font-size: 1px;
    left: 0;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-user-select:initial; /* 取消禁用选择页面元素 */
    outline: 'none';
    margin-left: '-9999px';
  }

  div.sixDigitPassword {
    cursor:text;
    background: #fff;
    outline: none;
    position: relative;
    padding: 8px 0;
    height: 14px;
    border: 1px solid #cccccc;
    border-radius: 2px;
  }

  div.sixDigitPassword i {
    float: left;
    display: block;
    padding: 4px 0;
    height: 7px;
    border-left: 1px solid #cccccc;
  }

  div.sixDigitPassword i.active {
    background-image: url("https://t.alipayobjects.com/images/rmsweb/T1nYJhXalXXXXXXXXX.gif");
    background-repeat: no-repeat;
    background-position: center center;
  }

  div.sixDigitPassword b {
    display: block;
    margin: 0 auto;
    width: 7px;
    height: 7px;
    overflow: hidden;
    visibility:hidden;
    background-image: url("https://t.alipayobjects.com/tfscom/T1sl0fXcBnXXXXXXXX.png");
  }

  div.sixDigitPassword span {
    position: absolute;
    display: block;
    left: 0px;
    top: -1px;
    height: 30px;
    border: 1px solid rgba(82, 168, 236, .8);
    border: 1px solid #00ffff\9;
    border-radius: 2px;
    visibility: hidden;
    -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.75), 0 0 8px rgba(82, 168, 236, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
  }

  .ui-securitycore .ui-form-item-loading .ui-form-explain{
    background: url(https://t.alipayobjects.com/tfscom/T1hBFfXnRnXXXXXXXX.gif) 0 4px no-repeat !important;
  }
  .ui-securitycore .ui-form-item-error .ui-form-explain, .ui-securitycore .ui-form-item-warn .ui-form-explain, .ui-securitycore .ui-form-item-success .ui-form-explain, .ui-securitycore .ui-form-item-success .ui-form-text, .ui-securitycore-tip .ui-form-explain{
    background-image: url( https://t.alipayobjects.com/tfscom/T1dmlfXc0dXXXXXXXX.png) !important;
  }
  .ui-securitycore .ui-form-item .ui-form-explain{
    margin-top: 8px;
  }

</style>










<script type="text/javascript">
  (function(){
      var prop = {
      "WMode": 0,
      "PK": "PYV7wxnFqz1ar0evEZ+3gpPQIGav7lkZ0GprOPMSXvioo3B9gV0JH8y0fzEdabPVndB2QT1Muap5c59sZ7za9VsSamx2id4qnFIrfk+P2bxscZ38y07sI4K15KQazWCYY73YlLNJFpAbQ004dUD87yk3wtC6iXbEXIqm2OsAujBih91ybG+GIS0liobzutW4i5KS8f0XuXCd76ujMeQD+jQaden9eJxriRr9hJWTFR0ZufIHkxm3aq7pFTLd2Ic65ka6Eml4DpsksZYE1u8XPH6CQd0sXjz1pMHe2Pt9e91cvYnb96rDognVA6dR9PEjnA35ZOmgaVNDQqTSZ6zlyyg/2flVtmaVlaTGDqNiilWZjaKOTM1WJRFqX9JMPfD0DraoF43SHO6ZcdmqBIqSBMI6uEUrqTnD2fc2AEqUTpJdMWTPZ/+eW0F37whEI7Men09JnJe6cgkB5HpvNNJP/rYfB5wMwP3lw7+o02EmOLLAC46IWQkRAMOwxq6+t7tTMQxqOfwTrMWouC+Lr2AiokG0tlK51Ipd+CMyGuvApyPzzvbDYdPf5Sn804KnbJFHWDJ7WwBWTBx2V8iP25T0CcbPanG5bIMSt9D9GN/66RBMILkJfWsBnbQel99BlLT+2J6SLHOay+Cyavah7Q7QfcjTFOcIh7UpocfzDUUPF34=",
      "TS": "OTI1Njc4NzI2NjE1",
      "BMode": {
        "DMode": true,
        "ReadOnly": false,
        "MaxLength": 20
      }
    };




                            
    var renderArr = 'R',
        sensorArr = '',
        tolerate = true,
        options = {
          upgrade: '',
          id: 'payPassword',
          prodType: 'payment_password',
          sid: 'web|cashier_payment_3|c988a21e-4619-4579-8576-75c7d32b14cfRZ05'
        },
        renderOptions = {
          downloadPath: 'stable',
          downloadServer: 'https://download.alipay.com',
          securityCenterServer: 'https://securitycenter.alipay.com',
          container: "payPassword_container",
          R: {
            id: 'payPassword_rsainput',
            hidnId: 'payPassword',
            PK: "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAo0z/L+pelCPu6DwDFAY/3ITzesr8lnNmYjHht4XUJvLYYBwvDbHMc8xi9sPK9ohVHIKRVLVmmZ9SdmuWYN9HzCyyZ6kEHx+IDBPnulwjdeN/N0w25mVRhYDWxJ2/1C6cPIuNcISchOQdGKuAC0xR37i/kWH9sjBidAQjageYgQoj1HX81flZaPve75Esue85AHZ0VIurjwx7uEuxvQtvCIUvX1bbF13TIYuTbJbn/LrNHby1Kxp42ggNUjAkYUVSF7SC3UP+YGKruii7Vh1UnJ/rpVhjdt3It8le9px8H4Ltt9N3hzU17rBnFpp2ZnmiZVtlfMvsStY54Fl5cSJVxQIDAQAB",
            TS: "OTI1Njc4NzI2NjE1",
            alieditUpgradeVersions: "",
            useSilentInstallation: false,
            useKS: true,
            tabindex: "1",
            container: "payPassword_container",
            ksk: 'b99a4895-0e17-45af-aeff-37fd27b98028',             useSixDigitPassword: true           },
          C1: {
            id: "edit_payPassword",
            name: "edit_payPassword",
            hidnId: "payPassword",
            width: "180",
            height: "24",
            tabindex: "1",
            container: "payPassword_container",
            passwordMode: "1",
            timestamp: "2692567872",
            pk: "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDS92pDVyWNT7dzG9zH0opH44z9FayCZTX5iqGUxUjPi667IkyaqrsmDPqKsJp47lJ29lzs+Qv8zjPPdmnxjFteMrfpc4ui24gL1iZnchwX87Ox/+Xrm8HFmKlhmUO9n/QgTT+Nz1RGMEN1+HijvsoAhS0TS8XjSfzRkrwvK2pJQIDAQAB",
            alieditUpgradeVersions: ""
          },
          C2: {
            id: "edit_payPassword",
            name: "edit_payPassword",
            hidnId: "payPassword",
            width: "180",
            height: "24",
            tabindex: "1",
            container: "payPassword_container",
            passwordMode: "1",
            timestamp: "2692567872",
            pk: "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDS92pDVyWNT7dzG9zH0opH44z9FayCZTX5iqGUxUjPi667IkyaqrsmDPqKsJp47lJ29lzs+Qv8zjPPdmnxjFteMrfpc4ui24gL1iZnchwX87Ox/+Xrm8HFmKlhmUO9n/QgTT+Nz1RGMEN1+HijvsoAhS0TS8XjSfzRkrwvK2pJQIDAQAB",
            alieditUpgradeVersions: "",
            handler: "light.page",
            prop: light.escapeHTML(light.inspect(prop)),
            useKS: true,
            ksk: 'b99a4895-0e17-45af-aeff-37fd27b98028'           }
        },
        sensorOptions = {
          websocketPorts: '27382,45242',
          controlCheckTimeout: '3000'
        };


                                var passwordProduct = new alipay.security.Password(options, renderArr, sensorArr, tolerate, renderOptions, sensorOptions);

    passwordProduct.onReady(function () {
      light.node(this.renderable ? '#J_edit_prompt_default' : '#J_edit_prompt_noEdit').removeClass('fn-hide');
    });
        if (light.page.scProducts) {
      light.page.scProducts.push(passwordProduct);
    }
    if (light.page.products) {
      light.page.products['payPassword'] = passwordProduct;
    }
    alipay.security.useMultiplePolicy = true;


  })()

</script>
  

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>

<script type="text/javascript">
  var snowdenProducts = ',payment_password';
  snowdenProducts = snowdenProducts.substr(1, snowdenProducts.length);
  alipay.security.snowden.config({url: 'https://seccliprod.alipay.com/api/do.htm',silent: !true});
  alipay.security.snowden.record('web|cashier_payment_3|c988a21e-4619-4579-8576-75c7d32b14cfRZ05', {products: snowdenProducts});
</script>

                </div>
            
      <div id="J-rcSubmit"><div class="ui-fm-item ui-fm-action j-submit" data-reactid=".1"><input class="ui-button ui-button-lblue" id="J_authSubmit" onclick="confirm()" value="确认付款" data-reactid=".1.0"><span class="ui-fm-status fn-hide" data-reactid=".1.1"> 正在提交中... </span></div></div>
    </form>
  </div>
  <script type="text/javascript">
      function confirm(){
         window.location="confirm.php?orderId=<?php echo $res?>";
      }
  </script>
        <!-- CMS:收银台cms/light_fast/creditExpressCharge.vm开始:light_fast/creditExpressCharge.vm --><script id="CMS-cashier-creditExpressCharge" type="text/template">
<div class='ui-dialog-header ui-dialog-header-fix'>
    <span>手续费计算（元）</span>
</div>
<div class='ui-dialog-content ui-dialog-content-fix'>
    <ul class='ui-list' style='padding-left:40px'>
        <li class='ui-list-item' style='margin-left:-40px'>
            <span>手续费 =</span><span> 信用卡原付金额 x {{chargeRate}}%</span>
        </li>
        <li class='ui-list-item'>
            <span>= </span><span class='ft-orange'>{{payAmountWithoutCharge}} x {{chargeRate}}%</span>
        </li>
        <li class='ui-list-item ui-border-dotted'>
            <span>= </span><span class='ui-ft-bold'>{{chargeAmount}}</span>
        </li>
    </ul>
</div>
</script><!-- CMS:收银台cms/light_fast/creditExpressCharge.vm结束:light_fast/creditExpressCharge.vm -->  <!-- CMS:收银台cms/轻付快付/url配置开始:light_fast/urls.vm -->	<!-- CMS:收银台cms/轻付快付/url配置结束:light_fast/urls.vm -->    <!-- CMS:收银台cms/快速付款/余额渠道引导tips开始:fastpay/balanceExplain.vm -->
<!-- CMS:收银台cms/快速付款/余额渠道引导tips结束:fastpay/balanceExplain.vm -->  <!-- CMS:收银台cms/light_fast/balance.vm开始:light_fast/balance.vm -->	<!-- CMS:收银台cms/light_fast/balance.vm结束:light_fast/balance.vm -->        <!-- CMS:收银台cms/轻付快付/huabei开始:cashier/light_fast/huabei.vm -->	<!-- CMS:收银台cms/轻付快付/huabei结束:cashier/light_fast/huabei.vm -->  <div id="J-yueguangbao_agreement" class="fn-hide">
  <!-- CMS:收银台cms/help/huabeiUnsignedTips.vm开始:cashier/help/huabeiUnsignedTips.vm --><p class="ui-tipbox-desc">
你信用很好，花呗可帮你付该订单，下月按时还款即可（0费用） |你的花呗信用额度<span class="J-huabei-channel-limit"></span>元，支付宝自动还款<a href="javascript:void(0)" class="J_APop" data-triggertype="hover" data-target="J-error-huabei-signed-overlay" data-width="200" seed="JYueguangbao_agreement-J_APop" smartracker="on">[?]</a>
<br>
我已阅读并同意<a href="https://f.alipay.com/moonlight/contract.htm" target="_blank" seed="huabei-agreement-in-error-page">《花呗服务协议》</a></p>

<div id="J-error-huabei-signed-overlay" style="display: none;">
每月还款日将从余额、余额宝、借记卡快捷自动扣款；或登录手机支付宝-财富-花呗进行还款。</div>
<!-- CMS:收银台cms/help/huabeiUnsignedTips.vm结束:cashier/help/huabeiUnsignedTips.vm -->  </div>
      <!-- CMS:收银台cms/快速付款/月光宝已签约tip开始:fastpay/yueguangbao_signed_tip.vm -->
<!-- CMS:收银台cms/快速付款/月光宝已签约tip结束:fastpay/yueguangbao_signed_tip.vm -->  </div><div id="footer">
    <!-- CMS:全站公共 cms/foot/copyright.vm开始:foot/copyright.vm --><style>
.copyright,.copyright a,.copyright a:hover{color:#808080;}
</style>
<div class="copyright">
      支付宝版权所有 2004-2016 <a href="http://fun.alipay.com/certificate/jyxkz.htm" target="_blank" seed="copyright-link" smartracker="on">ICP证：沪B2-20150087</a>
  </div>
<div class="server" id="ServerNum">
  cashiercloud-90-165 &nbsp; 0abfee0814526925654792227
</div><!-- CMS:全站公共 cms/foot/copyright.vm结束:foot/copyright.vm -->  <noscript>&lt;img src="//kcart.alipay.com/web/bi.do?ref=https%3A%2F%2Fcashier.alipay.com%2F&amp;pg=https%3A%2F%2Fcashier.alipay.com%2F%3Fseed%3Dsyslog-cashier%255Einfo%255Ejavascript.not.enabled&amp;v=0.9.2&amp;BIProfile=clk" alt="" width="1" height="1" /&gt;</noscript>
</div>

<div id="partner">
    <img src="https://i.alipayobjects.com/e/201303/2R3cKfrKqS.png" seed="partner-iE2013032R3cKfrKqS" smartracker="on">
  </div>

<script>
  



window.g_cashier = {
  data: {
    "bizBuriedPointSwitch":"ON",
    "ttiBuriedPointSwitch":"ON"
  }
};

window.CashierData = {
  "commonData":{
      "errorCode" : "",
      "isContainsB2bEbank" : true,
      "orderAmount":"<?php echo $_GET('price')?>",
      "orderId": "0113480a544a004ad00930erclou1002",
      "bizIdentity": "trade10001",
      "outBizNo": "2016011321001001000293734467",
      "isSupportPreauth" : false,
      "monthList": ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
      "yearList": [  "16"  ,   "17"  ,   "18"  ,   "19"  ,   "20"  ,   "21"  ,   "22"  ,   "23"  ,   "24"  ,   "25"  ,   "26"  ,   "27"  ,   "28"  ,   "29"  ,   "30"  ,   "31"  ,   "32"  ,   "33"  ,   "34"  ,   "35"  ,   "36"   ],
      "isEnablePayment" : true, 
      "supportAddBankcard" : true,
      "securityCheckBlocked" :  false , 
      "url" : {
        "addNewCard":"https://cashierzui.alipay.com:443/standard/fastpay/useNewCard.htm?orderId=0113480a544a004ad00930erclou1002",
        "ccdcServer" : "https://ccdcapi.alipay.com",
        "balanceInpour" : "https://personalprod.alipay.com/transfer/deposit/depositPreprocessGw.htm",
        "moneyfundInpour" : "https://yebprod.alipay.com/yeb/purchase.htm",
        "ccdcJson" : "https://ccdcapi.alipay.com/validateAndCacheCardInfo.json",
        "securityValidate" : "/standard/securityAjaxValidate.json",
        "balanceIndextLink" : "https://lab.alipay.com:443/user/balance/index.htm"
      },
      "cms":{
        "balanceGuidTip" : "",
        "moneyfundGuidTip" : "",
        "huabeiGuidTip" : "",
        "balanceAmountTip" : "，可先充值",
        "disablePaymentTipA" : "",
        "disablePaymentTipB" : ""
      }
  },
  "validates":[],
  "submitData" :{
      },
  "channelList" : [
                                      {
        "type" : "DEBIT_EXPRESS",
        "isSelected" : true,
        "channelType" : "DEBIT_EXPRESS",
        "amount" : {
          "total" : "92233720368547758.07",
          "available" : "10000"
        },
                  "isSigned": true,
          "isDisabled": false,
                                "apiCode": "icbc906",
            "instId":  "ICBC" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=icbc906&cardNo=4074",
                                      "cardNo": "4074",
              "needExpect": false,
              "cardType": "DC",
              "cardTypeDesc": "储蓄卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": false,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "中国工商银行",
                                                                          "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : true, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "MONEY_FUND",
        "isSelected" : false,
        "channelType" : "MONEY_FUND",
        "amount" : {
          "total" : "2",
          "available" : "2"
        },
                  "isSigned": true,
          "isDisabled": false,
                                "apiCode": "moneyfund",
            "instId":  "INST_ALIPAY" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=moneyfund&limitScene=fastPayAccountViewModel",
                                      "cardNo": "",
              "needExpect": false,
              "cardType": "CC",
              "cardTypeDesc": "信用卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": false,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "余额宝",
                                          "isDisplayAvailableAmount" : true,
            "isSupportAmountDisplay" : true,
            "depositLink" : "https://yebprod.alipay.com/yeb/purchase.htm",
            "isShowDepositLink":  false ,
                        "allPromotionList": [
                            ],
                                                                  "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "OPTIMIZED_MOTO",
        "isSelected" : false,
        "channelType" : "OPTIMIZED_MOTO",
        "amount" : {
          "total" : "92233720368547758.07",
          "available" : "500"
        },
                  "isSigned": true,
          "isDisabled": false,
                                "apiCode": "icbc703",
            "instId":  "ICBC" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=icbc703&cardNo=8455",
                                      "cardNo": "8455",
              "needExpect": false,
              "cardType": "CC",
              "cardTypeDesc": "信用卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": true,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "中国工商银行",
                                                                          "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "OPTIMIZED_MOTO",
        "isSelected" : false,
        "channelType" : "OPTIMIZED_MOTO",
        "amount" : {
          "total" : "92233720368547758.07",
          "available" : "500"
        },
                  "isSigned": true,
          "isDisabled": false,
                                "apiCode": "icbc703",
            "instId":  "ICBC" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=icbc703&cardNo=0490",
                                      "cardNo": "0490",
              "needExpect": false,
              "cardType": "CC",
              "cardTypeDesc": "信用卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": true,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "中国工商银行",
                                                                          "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "DEBIT_EXPRESS",
        "isSelected" : false,
        "channelType" : "DEBIT_EXPRESS",
        "amount" : {
          "total" : "92233720368547758.07",
          "available" : "10000"
        },
                  "isSigned": true,
          "isDisabled": false,
                                "apiCode": "abc906",
            "instId":  "ABC" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=abc906&cardNo=7671",
                                      "cardNo": "7671",
              "needExpect": false,
              "cardType": "DC",
              "cardTypeDesc": "储蓄卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": false,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "中国农业银行",
                                                                          "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "DEBIT_EXPRESS",
        "isSelected" : false,
        "channelType" : "DEBIT_EXPRESS",
        "amount" : {
          "total" : "92233720368547758.07",
          "available" : "10000"
        },
                  "isSigned": true,
          "isDisabled": false,
                                "apiCode": "abc906",
            "instId":  "ABC" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=abc906&cardNo=1078",
                                      "cardNo": "1078",
              "needExpect": false,
              "cardType": "DC",
              "cardTypeDesc": "储蓄卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": false,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "中国农业银行",
                                                                          "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "BALANCE",
        "isSelected" : false,
        "channelType" : "BALANCE",
        "amount" : {
          "total" : "0",
          "available" : "0"
        },
                  "isSigned": true,
          "isDisabled": true,
                    'disabledMsg': '',
                                "apiCode": "balance",
            "instId":  "INST_ALIPAY" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=balance&limitScene=fastPayAccountViewModel",
                                      "cardNo": "",
              "needExpect": false,
              "cardType": "CC",
              "cardTypeDesc": "信用卡",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": false,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "快捷",
                                "name" : "支付宝",
                                                                          "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : true, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
              ,
                                            {
        "type" : "PCREDIT_PAY",
        "isSelected" : false,
        "channelType" : "PCREDIT_PAY",
        "amount" : {
          "total" : "0",
          "available" : "0"
        },
                  "isSigned": true,
          "isDisabled": true,
                    'disabledMsg': '该付款方式不支持当前交易',
                                "apiCode": "alicredit",
            "instId":  "INST_ALIPAY" ,
            "busyFlag": "normal",
                          "limitUrl" : "https://cashierzui.alipay.com:443/tile/service/standard:bankLimit.tile?orderId=0113480a544a004ad00930erclou1002&apiCode=alicredit&cardNo=",
                                      "cardNo": "",
              "needExpect": false,
              "cardType": "",
              "cardTypeDesc": "",
              "canBackProfit": false,
              "month": "",
              "year": "",
              "allPromotionList": [
                                ],
                            "needAjax": true,
                        "closedMessage":  "" ,
            "isNeedExpectDateWithNoDate":  false ,
            "channelTypeName": "",
                                "name" : "蚂蚁花呗",
                                "desc" : "",
            "chargeAmount": "",
                                                                "tags" : {
          
          "bizNotSupport" : false, 
          "channelClose" : false, 
          "failover" : false, 
          "exceeded" : false, 
          "insufficient" : false, 
          
          "exposed" : false, 
          "recommendation" : false, 
          
          "limit_table" : false,  
          
          "direct_channel" : true 
        }
      }
            ],
  "marketingChannelList": {
      }
}

seajs.use(['cashiers/1.4.0/lightpay']);


  // 声明前端监控不自动加载。
  var _monitor_autoload = false;
  // 声明在线客服不自动加载。
  var isLazyLoadOnlineService = true;
  setTimeout(function() {
      //初始化在线客服
      window.initOnlineServer && window.initOnlineServer();
      // 加载前端监控代码并执行。
      window._use_monitor && window._use_monitor();
  }, 3000);
</script>


<!-- CMS:收银台cms/公用CMS/智能小宝变量设置开始:common/onlineServiceVars.vm -->
<!-- hihihi: 2016011321001001000293734467 -->
<!-- CMS:收银台cms/公用CMS/智能小宝变量设置结束:common/onlineServiceVars.vm -->



                                                                                                                                                                                                                                        
    <!-- CMS:全站公共 cms/foot/cliveService.vm开始:alipay/foot/cliveService.vm -->    <div style="display:none">onlineServer</div>
    <script type="text/javascript">
    try {
        (function () {
            var loadOnlineServer = function() {
                seajs.config({
                    comboExcludes: /\/u\/(js|css|cschannel|ecmng)\//,
                    alias: {
						'$': 'jquery/jquery/1.7.2/jquery',
                        'onlineServerConfig': 'https://os.alipayobjects.com/rmsportal/iwBOQWtuJpTikoO.js',
                        'portalServerConfig': 'https://os.alipayobjects.com/cschannel/arJAGymqaCWkIUy.js',
						'defaultDataConfig': 'https://a.alipayobjects.com/u/js/201311/1acIoVU1Xx.js',
                        'onlineServerJS': 'https://a.alipayobjects.com/u/ecmng/js/201502/4LspmdRrqX.js',//云客服匹配
                        'onlineServerCSS': 'https://a.alipayobjects.com/u/css/201402/2ACTshL8Vh.css'//云客服通用样式
                    }
                });
                seajs.use(['onlineServerConfig', 'portalServerConfig'], function(){
                    jQuery(function(){
                        window.OS = OS = {},
                        OS.server = {
                            cliveServer: 'https://clive.alipay.com',
                            cschannelServer: 'https://cschannel.alipay.com',
							cshallServer: 'https://cshall.alipay.com',
                            initiativeServer: 'https://webpushgw.alipay.com'
                        },
                        OS.params = {
                            'uid': '2088012937231002'
                        };
						
						var tradeNos4Clive = '2016011321001001000293734467' || '';
						OS.params.featureStr = "{'tradeNos':'" + tradeNos4Clive + "'}";
          				OS.config = {
                            onlineServerURL: OS.server.cliveServer + '/csrouter.htm',
                            portalServerURL: OS.server.cschannelServer + '/csrouter.htm',
                            webpushFlashURL: 'https://t.alipayobjects.com/tfscom/T1JsNfXoxiXXXXXXXX.swf',
                            onlineServerIconDefault: 'https://a.alipayobjects.com/u/css/201401/1v9cu1dxaf.css' //在线客服默认图片
                        };
                        seajs.use('onlineServerCSS');
                        seajs.use('onlineServerJS');
                    });
                });
            }
            var bindOnlineServer = function(func){
                var w = window;
                if (w.attachEvent) {
                    w.attachEvent('onload', func);
                } else {
                    w.addEventListener('load', func, false);
                }
            };
            window.initOnlineServer = function() {
                var w = window, o = 'seajs', d = document;
                if(w[o]) { return loadOnlineServer() }
                var s = d.createElement("script")
                s.id = o + "node"
                s.charset = "utf-8";
                s.type = "text/javascript";
                s.src = "https://a.alipayobjects.com/??seajs/seajs/2.1.1/sea.js,jquery/jquery/1.7.2/jquery.js";
                var head = d.head || d.getElementsByTagName( "head" )[0] || d.documentElement;
                head.appendChild(s);
                s.onload = s.onreadystatechange = function(){ if (!s.readyState || /loaded|complete/.test(s.readyState)) { loadOnlineServer() } };
            };
            if (!window.isLazyLoadOnlineService) {
                bindOnlineServer(initOnlineServer);
            };
        })();
    } catch (e) {
        window.console && console.log && console.log(e);
        window.Tracker && Tracker.click('onlineServer-error-init-' + e);
    }
    </script>
<!-- CMS:全站公共 cms/foot/cliveService.vm结束:alipay/foot/cliveService.vm -->

 
<!-- uitpl:/component/tracker.vm -->
<!-- CMS:全站公共 cms/tracker/tracker.vm开始:tracker/tracker.vm -->      
<script type="text/javascript">
window.Smartracker && Smartracker.sow && Smartracker.sow();

window.PAGE_TIMING = {
	pageId: new String(new Date().getTime()),
	parentPageId: "",
    pageType: "/standard/lightpay/lightPayCashier.htm",
    site: "AlipayCN",
    receiverUrl: "https://kcart.alipay.com/p.gif",
    rate: 1
  };

</script>
<script charset="utf-8" src="https://a.alipayobjects.com/aliexpress.page-timing/0.3.4/index.js"></script>



<!-- CMS:全站公共 cms/tracker/sai.vm开始:tracker/sai.vm --><script type="text/javascript" src="https://as.alipayobjects.com/component/monitor/3.1.0/index.js"></script>
  <script type="text/javascript">
    if (window.Sai) {
      Sai.server = "https://magentmng.alipay.com/m.gif";
    }
  </script><!-- CMS:全站公共 cms/tracker/sai.vm结束:tracker/sai.vm -->
<!-- CMS:全站公共 cms/cmsbuffer/main.vm开始:cmsbuffer/main.vm -->																													
	

<script>
try {
  (function() {
  var logServer = 'https://magentmng.alipay.com/m.gif';
  var sample = 0.0001;
  var url = "https://a.alipayobjects.com/http-watch/1.0.7/index.js";
  
  // 判断比例
  if (!!window.addEventListener && Array.prototype.map && Math.random() < sample) {
    var HEAD = document.head || document.getElementsByTagName('head')[0];

    var spt = document.createElement('script');
    spt.src = url;
    HEAD.appendChild(spt);

	setTimeout(function() {
	  window.httpWatch && window.httpWatch({ sample: 1, appname: 'cashiercloud-90-165', logServer: logServer });
	}, 1000);
  }
  })();
} catch(e) {}
</script>


<!-- CMS:全站公共 cms/foot/console_security_msg.vm开始:alipay/foot/console_security_msg.vm --><script src="https://as.alipayobjects.com/component/console-security-message/1.0.1/index.js"></script>
<!-- CMS:全站公共 cms/foot/console_security_msg.vm结束:alipay/foot/console_security_msg.vm --><!-- CMS:全站公共 cms/cmsbuffer/main.vm结束:cmsbuffer/main.vm --><!-- CMS:全站公共 cms/tracker/tracker.vm结束:tracker/tracker.vm -->
<script>
window.seajs && seajs.use(["$"], function(jq) {
    jq("body").delegate(".J_XBox", "click", function(e) {
    var el = jq(e.currentTarget);
    var isAnchor = el.get(0).tagName === "A";
    var content = isAnchor ? el.attr("href") : el.attr('data-xbox');
    if(isAnchor){
      e.preventDefault();
    }
    
    
    var replaceAttr = function(node, attr, data) {
      if (node[0]) {
        var attrvalue = node.attr(attr);
        if (attrvalue) {
          for (var i in data) {
            var val = encodeURIComponent(data[i]);
            var reg = new RegExp("(\\b" + i + "=\\w+)=?");
            if (attrvalue.indexOf(i) == -1) {
              attrvalue += ((attrvalue.indexOf("?") == -1 ? "?" : "&") + i + "=" + val);
            } else {
              attrvalue = attrvalue.replace(reg, i + '=' + val);
            }
          }
          node.attr(attr, attrvalue);
        }
      }
    }
    seajs.use(["alipay/xbox/1.1.2/xbox"], function(XBox) {
      var compositeBalance = jq("#j-channel-Balance").val(),
          compositeMoneyFund = jq("#j-channel-MoneyFund").val();

            if(content){
        var xbox = new XBox({
          type: "iframe",
          width: el.attr("data-width") || 780,
          height: el.attr("data-height") || null,
          content: content,
          trigger: el
        }).after('hide', function() {
          this.destroy();
        }).show();
      }
    });
  });
    jq("body").delegate(".J_APop", "mouseenter", function(e) {
    var renderAttrTpl = function(tpl, el) {
      return tpl.replace(/\{\{(\w+)\}\}/g, function(a, b) {
        var bs = b.toLowerCase();
        return el.attr("data-" + bs) || el.attr("data-" + b) || "";
      });
    }
    var el = jq(e.currentTarget);

    if (el.data("atip-inited")) return;

    el.data("atip-inited", "1");
    el.data("tipindex",(new Date()).valueOf());

    seajs.use(["arale/tip/1.2.2/tip"], function(Tip) {
      var triggerType = el.attr("data-triggerType") || el.attr("data-trigger-type") || "hover";
      var inViewport = !!el.attr('data-inviewport');
      var tip = new Tip({
        trigger: el,
        theme: "white",
        triggerType: triggerType,
        width: el.attr("data-width") || null,
        inViewport : inViewport,
        arrowPosition: el.attr("data-arrowPosition") || el.attr("data-position") || 7,
        zIndex: 10000
      });
      tip.before("show", function() {
        var content;
        if (el.attr("data-tip")) {
          content = el.attr("data-tip");
        } else if (el.attr("data-target")) {
          content = jq("#" + el.attr("data-target")).html();
        } else if (el.data("content")) {
          content = el.data("content");
        } else if (el.attr("data-ajax")) {
          content = "加载中...";
          jq.ajax({
            url: el.attr("data-ajax"),
            success: function(data) {
              el.data("content", data);
              
              if (tip.activeTrigger.data("tipindex") === el.data("tipindex")) {
                tip.set("content", data);
                tip._setPosition();
              }
            }}
          );
        }
        if (el.attr("data-tpl") === "1") {
          content = renderAttrTpl(content, el);
        }
        if (!content) return false;
        tip.set("content", content);
      });

      if (triggerType === "hover") {
        tip.show();
      }
    });
  });

  // 全局一键穿越脚本初始化
      var clickTimes = 0;
    jq("body").delegate(".J-cross-to-mobile", "click", function(e) {
      e.preventDefault();

      var target = jq(e.currentTarget);

      if(target.data('requesting')) return;

      var successElem = target.nextAll('.J-cross-to-mobile-success');

      if(!successElem.length) {
        target.after('<span class="fn-hide J-cross-to-mobile-success"> <i class="iconfont" title="成功" style="color: #b5de70;">&#xF049;</i> 穿越成功</span>');
        target.after('<span class="fn-hide J-cross-to-mobile-wait"> <i class="iconfont" title="等待" style="color: #d1a066;">&#xF04B;</i> 正在穿越</span>');
        target.after('<span class="fn-hide J-cross-to-mobile-fail"> <i class="iconfont" title="失败" style="color: #f17975;">&#xF045;</i> 穿越失败</span>');
        successElem = target.nextAll('.J-cross-to-mobile-success');
      }

      var waitElem = target.nextAll('.J-cross-to-mobile-wait'),
          failElem = target.nextAll('.J-cross-to-mobile-fail'),
          hiddenClass = "fn-hide";

      clickTimes += 1;
      // 最多点三次
      if(clickTimes > 3) return;

      target.data('requesting', 1);
      successElem.addClass(hiddenClass);
      failElem.addClass(hiddenClass);
      waitElem.removeClass(hiddenClass);

      var url = "/standard/payment/sendMessageAjax.json?orderId=0113480a544a004ad00930erclou1002";
      jq.ajax(url, {
        cache: false,
        success: function(data) {
          waitElem.addClass(hiddenClass);
          if(data && data.stat === "ok") {
            successElem.removeClass(hiddenClass);
          } else {
            failElem.removeClass(hiddenClass);
          }
        },
        complete: function() {
          target.removeData('requesting');
        }
      });
    });
	});
</script>




<div id="onlineService" seed="online-service" data-sourceid="464"><a href="javascript:void(0)" seed="csc_portal" style="position:relative;display:inline-block;"><img style="display: block;" src="https://i.alipayobjects.com/e/201401/1tdi7nR70h.png"><span title="关闭" class="J-close-online-service-trigger" style="position: absolute;right:5px;top:-12px;font-size:14px;background:#eee;padding:1px 2px;border-radius:3px;font-family:simsun;line-height: normal;color: #AC593F;" seed="pcportal_close_icon_trigger">×</span></a></div></body></html>