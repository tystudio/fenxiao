<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>

<link href="../addons/ewei_shopv2/plugin/app/static/css/page.css?v=20170922" rel="stylesheet" type="text/css"/>

<div class="page-header">
    当前位置：
    <span class="text-primary"><?php  echo m('plugin')->getName('app')?></span>
</div>

<div class="page-content">

    <div class="alert alert-primary">
        <p><b>小程序说明</b></p>
        <p>小程序是微信小程序的管理后台，可在此设置个性化首页排版、基本设置、设置微信支付、审核发布。</p>

    </div>

   <link onerror="wx_loaderror(this)" rel="stylesheet" 
   href="https://res.wx.qq.com/mpres/zh_CN/htmledition/comm_htmledition/style/page/wxopen/intro3a7b39.css">    </head>   
   <div class="banner">   
   <div class="banner_inner" id="js_bind_event">               
   <div class="banner_img" id="js_banner_move_container">        
   <img class="wap_banner_img_before js_banner_img" id="wap_banner_img_before" src="/htmledition/images/wxopen/wap_mockup@2.png">
   <canvas id='bubbles'></canvas>               
   <img src="/htmledition/images/wxopen/wap_mockup_top@2.png" id="wap_banner_img_after" 
   class="wap_banner_img_after js_banner_img">     
   </div>             
<script onerror="wx_loaderror(this)" type="text/javascript" src="https://res.wx.qq.com/mpres/zh_CN/htmledition/js/wxopen/swiper3a7b39.js"></script>     
<script onerror="wx_loaderror(this)" type="text/javascript" src="https://res.wx.qq.com/mpres/zh_CN/htmledition/js/wxopen/intro_full_canvas3a7b39.js"></script>
</div> 

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>
