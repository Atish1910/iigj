<!doctype html>
<html>


<head>
  <meta charset="utf-8">
  <title>IIGJ Admission Open 2024</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="images/iigj/logo/fevicon.png" rel="icon">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPZNGG3B');</script>
<!-- End Google Tag Manager -->

</head>


<body>
  <canvas class="grey darken-4" id="canvas" width="" height="">
  </canvas>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
      background: #4A146D;
    }

    img {
      max-width: 100%
    }

    #canvas {
      width: 100%;
      height: 100%;
    }

    .text span {
      font-weight: 500;
    }

    .btn {
      margin: 40px auto 0;
      width: 200px;
      position: relative;
    }

    .text span.complete {
      font-weight: bold;
      margin: 19px 0 7px;
      display: inline-block;
      font-size: 30px;
    }

    .btn::before {
      content: "";
      margin: 40px auto 0;
      width: 73px;
      background-image: url(images/degree.png);
      position: absolute;
      left: -55px;
      bottom: -5px;
      height: 50px;
      background-size: 70px;
      background-repeat: no-repeat;
    }

    .text {
      font-size: 24px;
      text-align: center;
      font-weight: 100;
      color: #fff;
    }

    .tankyou {
      max-width: 700px;
      margin: auto;
      position: absolute;
      transform: translate(-50%, -50%);
      left: 50%;
      top: 50%;
    }

    .logo {
      width: 200px;
      margin: 0 90px 40px;
      position: relative;
      z-index: 9;
    }

    /*
  .tankyou::before {
   content: "";
   background-image: url(./img/bg1.jpg);
   position: absolute;
   width: 260px;
   height: 240px;
   background-size: 100%;
   top: -80px;
   right: -50px;
  }

  .tankyou::after {
   content: "";
   background-image: url(./img/bg2.jpg);
   position: absolute;
   width: 190px;
   height: 210px;
   background-size: 100%;
   left: -240px;
   bottom: -100px;
  }
*/

    .btn a {
      background: #EB731E;
      color: #fff;
      text-decoration: none;
      padding: 9px 40px;
      border-radius: 50px;
      text-transform: uppercase;
      font-size: 19px;
      font-weight: bold;
    }

    .btn a:hover {
      background: #1a1a1a;
    }

    @media screen and (max-width:480px) {
      .text span.complete {

        font-size: 26px;
        line-height: 25px;
      }

      .text {
        font-size: 15px;
        text-align: center;
        font-weight: 100;
        line-height: 22px;
      }
    }
  </style>

  <div class="tankyou">
    <div class="logo"><img src="images/iigj/thankyou/1.png" alt="logo"> </div>
    <div class="logo"><img src="images/iigj/thankyou/2.png" alt="Congratulations"> </div>


    <div class="text">

      You have successfully completed<br>
      <span>your Step 1 towards Application at IIGJ.</span><br>
      <!-- <span class="complete">To complete your application</span> -->
    </div>

    <div class="btn">

      <!-- <a href="https://www.mituniversity.ac.in/2023/Apply_Now" target="_blank">Click Here</a> -->
    </div>
  </div>


  <script>
    var canvas = document.getElementById('canvas');
    var c = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    var mouse = {
      x: undefined,
      y: undefined
    }

    window.addEventListener('mousemove', function (e) {
      mouse.x = e.x;
      mouse.y = e.y;
    });

    window.addEventListener('resize', function () {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    function Circle() {
      this.radius = getRandomInt(10);
      this.originalSize = this.radius;
      this.x = Math.random() * (innerWidth - this.radius * 2) + this.radius;
      this.y = Math.random() * (innerHeight - this.radius * 2) + this.radius;
      this.gradient = Math.random();
      this.color = 'rgba(' + getRandomInt(255) + ',' + getRandomInt(255) + ',' + getRandomInt(255) + ',' + this
        .gradient + ')';
      this.xVelocity = 5 * (Math.random() - Math.random());
      this.yVelocity = 5 * (Math.random() - Math.random());
      this.draw = function () {
        // c.font = 'lighter 80px sans-serif';
        // c.fillStyle = '#dedede';
        // c.textAlign = 'center';
        // c.fillText('Bouncing Bubbles', canvas.width/2, canvas.height/2);
        c.beginPath();
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        c.strokeStyle = this.color;
        c.stroke();
        c.fillStyle = this.color;
        c.fill();
        this.update();
      }
      this.update = function () {
        if (this.x + this.radius > innerWidth || this.x - this.radius < 0) {
          this.xVelocity = -this.xVelocity;
        }
        if (this.y + this.radius > innerHeight || this.y - this.radius < 0) {
          this.yVelocity = -this.yVelocity;
        }
        this.x += this.xVelocity;
        this.y += this.yVelocity;

        if (mouse.x - this.x < 50 && mouse.x - this.x > -50 &&
          mouse.y - this.y < 10 && mouse.y - this.y > -50) {
          if (this.radius < 100) {
            this.radius += 2;
          }
        } else if (this.radius !== this.originalSize) {
          this.radius -= 2;
        }
      }
    }

    var circleArray = [];

    for (var i = 0; i < 30; i++) {
      circleArray.push(new Circle());
    }

    function animate() {
      c.clearRect(0, 0, innerWidth, innerHeight);
      for (var i = 0; i < circleArray.length; i++) {
        circleArray[i].draw();
      }
      requestAnimationFrame(animate);
    }
    animate();
  </script>

  <!--Form Tracking for Forms-->
<script type="text/javascript"> 
function ZFAdvLead(){
}
ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

ZFAdvLead.utmPNameArr = new Array('utm_source','utm_medium','utm_campaign','utm_term','utm_content');ZFAdvLead.utmcustPNameArr = new Array();ZFAdvLead.isSameDomian = false;

ZFAdvLead.prototype.zfautm_sC = function( paramName,path,domain,secure ){
  var value = ZFAdvLead.utmPValObj[paramName];
  if ( typeof value !== "undefined" && value !== null ){
    var cookieStr = paramName + "=" + encodeURIComponent( value );
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+7);
    cookieStr += "; expires=" + exdate.toGMTString();
    cookieStr += "; path=/";
    if ( domain ) {
      cookieStr += "; domain=" + encodeURIComponent( domain );
    }
    if ( secure ) {
      cookieStr += "; secure";
    }
    document.cookie = cookieStr;
  }
};
ZFAdvLead.prototype.zfautm_ini = function (){
  this.zfautm_bscPCap();
  var url_search = document.location.search;
  for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length ; i ++){
    var zf_pN = ZFAdvLead.utmcustPNameArr[i];
    var zf_pV;
    if ( zf_pN == 'referrername' ) {
      zf_pV = ( document.URL || '' ).slice( 0, 1500 );
    } else {
      zf_pV = this.zfautm_gP(url_search, zf_pN);
      if (zf_pV == undefined || zf_pV == ''){
          zf_pV = this.zfautm_gC(zf_pN);
      }
    }
    if ( typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "" ) {
      ZFAdvLead.utmPValObj[ zf_pN ] = zf_pV;
    }
  }
  for (var pkey in ZFAdvLead.utmPValObj) {
    this.zfautm_sC(pkey);
  }
};
ZFAdvLead.prototype.zfautm_bscPCap = function () {
  var trafSrc = this.zfautm_calcTrafSrc();
  if ( trafSrc.source != "" ) {
    ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
  }
  if ( trafSrc.medium != "" ) {
    ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
  }
  if ( trafSrc.campaign != "" ) {
    ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
  }
  if ( trafSrc.term != "" ) {
    ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
  }
  if ( trafSrc.content != "" ) {
    ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
  }
}
ZFAdvLead.prototype.zfautm_calcTrafSrc = function() {
  var u1='', u2='', u3='', u4='', u5='';
  var search_engines = [['bing', 'q'], ['google', 'q'], ['yahoo', 'q'], ['baidu', 'q'], ['yandex', 'q'], ['ask', 'q']]; //List of search engines 
  var ref = document.referrer;
  ref = ref.substr(ref.indexOf('//')+2);
  ref_domain = ref;
  ref_path = '/';
  ref_search = '';

  // Checks for campaign parameters
  var url_search = document.location.search;
  if(url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search.indexOf('utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf('utm_content') > -1) {
    u1 = this.zfautm_gP(url_search, 'utm_source'); 
    u2 = this.zfautm_gP(url_search, 'utm_medium'); 
    u3 = this.zfautm_gP(url_search, 'utm_campaign'); 
    u4 = this.zfautm_gP(url_search, 'utm_term'); 
    u5 = this.zfautm_gP(url_search, 'utm_content'); 
  } else if ( this.zfautm_gP(url_search, 'gclid')) {
    u1 = 'Google Ads'; 
    u2 = 'cpc'; 
    u3 = '(not set)'; 
    if ( !ZFAdvLead.utmcustPNameArr.includes('gclid') ) {
      ZFAdvLead.utmcustPNameArr.push('gclid');
    }
  } else if(ref) {
    var r_u1 = this.zfautm_gC('utm_source'); 
    var r_u2 = this.zfautm_gC('utm_medium'); 
    var r_u3 = this.zfautm_gC('utm_campaign'); 
    var r_u4 = this.zfautm_gC('utm_term'); 
    var r_u5 = this.zfautm_gC('utm_content'); 
    if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
      // separate domain, path and query parameters
      if (ref.indexOf('/') > -1) {
        ref_domain = ref.substr(0,ref.indexOf('/'));
        ref_path = ref.substr(ref.indexOf('/'));
        if (ref_path.indexOf('?') > -1) {
          ref_search = ref_path.substr(ref_path.indexOf('?'));
          ref_path = ref_path.substr(0, ref_path.indexOf('?'));
        }
      }
      u2 = 'referral'; 
      u1 = ref_domain;                    
    // Extract term for organic source
      for (var i=0; i<search_engines.length; i++){
        if(ref_domain.indexOf(search_engines[i][0]) > -1){
          u2 = 'organic'; 
          u1 = search_engines[i][0];
          u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
          break;
        }
      }
    } else {
      if ( typeof r_u1 !== "undefined" ) {
        u1 = r_u1;
      }
      if ( typeof r_u2 !== "undefined" ) {
          u2 = r_u2;
      }
      if ( typeof r_u3 !== "undefined" ) {
        u3 = r_u3;
      }
      if ( typeof r_u4 !== "undefined" ) {
        u4 = r_u4;
      }
      if ( typeof r_u5 !== "undefined" ) {
        u5 = r_u5;
      }
    }
  } else {
    var r_u1 = this.zfautm_gC('utm_source'); 
    var r_u2 = this.zfautm_gC('utm_medium'); 
    var r_u3 = this.zfautm_gC('utm_campaign'); 
    var r_u4 = this.zfautm_gC('utm_term'); 
    var r_u5 = this.zfautm_gC('utm_content'); 
    if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
      var locRef = document.URL;
      locRef = locRef.substr(locRef.indexOf('//')+2);
      if (locRef.indexOf('/') > -1) {
        locRef = locRef.substr(0,locRef.indexOf('/'));
      }
      u1 = locRef;
      u2 = 'referral'; 
    } else {
      if ( typeof r_u1 !== "undefined" ) {
        u1 = r_u1;
      }
      if ( typeof r_u2 !== "undefined" ) {
        u2 = r_u2;
      }
      if ( typeof r_u3 !== "undefined" ) {
        u3 = r_u3;
      }
      if ( typeof r_u4 !== "undefined" ) {
        u4 = r_u4;
      }
      if ( typeof r_u5 !== "undefined" ) {
        u5 = r_u5;
      }
    }
  }
  return {
    'source'  : u1, 
    'medium'  : u2, 
    'campaign': u3, 
    'term'    : u4, 
    'content' : u5 
  };
}
ZFAdvLead.prototype.zfautm_gP = function(s, q) {
  try{
      var match = s.match('[?&]' + q + '=([^&]+)');
      return match ? decodeURIComponent(match[1]) : '';
  } catch(e){
    return '';  
  }
}
ZFAdvLead.prototype.zfautm_gC = function( cookieName ){
  var cookieArr = document.cookie.split('; ');
  for ( var i = 0 ; i < cookieArr.length ; i ++ ){
    var cookieVals = cookieArr[i].split('=');
      if ( cookieVals[0] === cookieName && cookieVals[1] ) {
        return decodeURIComponent(cookieVals[1]);
      }
  }
};
ZFAdvLead.prototype.zfautm_gC_enc = function( cookieName ){
  var cookieArr = document.cookie.split('; ');
  for ( var i = 0 ; i < cookieArr.length ; i ++ ){
    var cookieVals = cookieArr[i].split('=');
      if ( cookieVals[0] === cookieName && cookieVals[1] ) {
        return cookieVals[1];
      }
  }
};
ZFAdvLead.prototype.zfautm_iframeSprt = function () {
  var zf_frame = document.getElementsByTagName("iframe");
  for(var i = 0; i < zf_frame.length; ++i){
    if((zf_frame[i].src).indexOf('formperma') > 0 ){
      var zf_src = zf_frame[i].src;
      for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
        var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
        utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
        var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
        if ( typeof utmVal !== "undefined" ) {
          if ( utmVal != "" ){
            if(zf_src.indexOf('?') > 0){
              zf_src = zf_src+'&'+utmPm+'='+ utmVal;
            }else{
              zf_src = zf_src+'?'+utmPm+'='+ utmVal;
            }
          }
        }
      }
      if ( zf_frame[i].src.length < zf_src.length ) {
        zf_frame[i].src = zf_src;
      }
    }
  }
};
ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
  var zf_formsArr = document.forms;
  for ( var frmInd = 0 ; frmInd < zf_formsArr.length ; frmInd ++ ) {
    var zf_form_act = zf_formsArr[frmInd].action;
      if ( zf_form_act && zf_form_act.indexOf('formperma') > 0 ){
        for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
          var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
          var utmVal = this.zfautm_gC( ZFAdvLead.utmPNameArr[ prmIdx ] );
          if ( typeof utmVal !== "undefined" ) {
            if ( utmVal != "" ) {
              var fieldObj = zf_formsArr[frmInd][utmPm];
            if ( fieldObj ) {
              fieldObj.value = utmVal;
            }
          }
        }
      }
    }
  }
};
ZFAdvLead.prototype.zfautm_jsEmbedSprt = function ( id ) {
  document.getElementById('zforms_iframe_id').removeAttribute("onload");
  var jsEmbdFrm = document.getElementById("zforms_iframe_id");
  var embdSrc = jsEmbdFrm.src;
  for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
    var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
    utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
    var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
    if ( typeof utmVal !== "undefined" ) {
      if ( utmVal != "" ) {
        if(embdSrc.indexOf('?') > 0){
                    embdSrc = embdSrc+'&'+utmPm+'='+utmVal;
        }else{
            embdSrc = embdSrc+'?'+utmPm+'='+utmVal;
        }
      }
    }
  }
  jsEmbdFrm.src = embdSrc;
};
var zfutm_zfAdvLead = new ZFAdvLead();
zfutm_zfAdvLead.zfautm_ini();
if( document.readyState == "complete" ){
    zfutm_zfAdvLead.zfautm_iframeSprt();
    zfutm_zfAdvLead.zfautm_DHtmlSprt();
} else {
  window.addEventListener('load', function (){
        zfutm_zfAdvLead.zfautm_iframeSprt();
        zfutm_zfAdvLead.zfautm_DHtmlSprt();
  }, false);
}
</script>
<!--End-->

<!--Form Tracking for Existing User-->
<script type="text/javascript"> 
function ZFAdvLead(){
}
ZFAdvLead.utmPValObj = ZFAdvLead.utmPValObj || {};

ZFAdvLead.utmPNameArr = new Array('utm_source','utm_medium','utm_campaign','utm_term','utm_content');ZFAdvLead.utmcustPNameArr = new Array();ZFAdvLead.isSameDomian = false;

ZFAdvLead.prototype.zfautm_sC = function( paramName,path,domain,secure ){
  var value = ZFAdvLead.utmPValObj[paramName];
  if ( typeof value !== "undefined" && value !== null ){
    var cookieStr = paramName + "=" + encodeURIComponent( value );
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+7);
    cookieStr += "; expires=" + exdate.toGMTString();
    cookieStr += "; path=/";
    if ( domain ) {
      cookieStr += "; domain=" + encodeURIComponent( domain );
    }
    if ( secure ) {
      cookieStr += "; secure";
    }
    document.cookie = cookieStr;
  }
};
ZFAdvLead.prototype.zfautm_ini = function (){
  this.zfautm_bscPCap();
  var url_search = document.location.search;
  for (var i = 0; i < ZFAdvLead.utmcustPNameArr.length ; i ++){
    var zf_pN = ZFAdvLead.utmcustPNameArr[i];
    var zf_pV;
    if ( zf_pN == 'referrername' ) {
      zf_pV = ( document.URL || '' ).slice( 0, 1500 );
    } else {
      zf_pV = this.zfautm_gP(url_search, zf_pN);
      if (zf_pV == undefined || zf_pV == ''){
          zf_pV = this.zfautm_gC(zf_pN);
      }
    }
    if ( typeof zf_pV !== "undefined" && zf_pV !== null & zf_pV != "" ) {
      ZFAdvLead.utmPValObj[ zf_pN ] = zf_pV;
    }
  }
  for (var pkey in ZFAdvLead.utmPValObj) {
    this.zfautm_sC(pkey);
  }
};
ZFAdvLead.prototype.zfautm_bscPCap = function () {
  var trafSrc = this.zfautm_calcTrafSrc();
  if ( trafSrc.source != "" ) {
    ZFAdvLead.utmPValObj.utm_source = trafSrc.source;
  }
  if ( trafSrc.medium != "" ) {
    ZFAdvLead.utmPValObj.utm_medium = trafSrc.medium;
  }
  if ( trafSrc.campaign != "" ) {
    ZFAdvLead.utmPValObj.utm_campaign = trafSrc.campaign;
  }
  if ( trafSrc.term != "" ) {
    ZFAdvLead.utmPValObj.utm_term = trafSrc.term;
  }
  if ( trafSrc.content != "" ) {
    ZFAdvLead.utmPValObj.utm_content = trafSrc.content;
  }
}
ZFAdvLead.prototype.zfautm_calcTrafSrc = function() {
  var u1='', u2='', u3='', u4='', u5='';
  var search_engines = [['bing', 'q'], ['google', 'q'], ['yahoo', 'q'], ['baidu', 'q'], ['yandex', 'q'], ['ask', 'q']]; //List of search engines 
  var ref = document.referrer;
  ref = ref.substr(ref.indexOf('//')+2);
  ref_domain = ref;
  ref_path = '/';
  ref_search = '';

  // Checks for campaign parameters
  var url_search = document.location.search;
  if(url_search.indexOf('utm_source') > -1 || url_search.indexOf('utm_medium') > -1 || url_search.indexOf('utm_campaign') > -1 || url_search.indexOf('utm_term') > -1 || url_search.indexOf('utm_content') > -1) {
    u1 = this.zfautm_gP(url_search, 'utm_source'); 
    u2 = this.zfautm_gP(url_search, 'utm_medium'); 
    u3 = this.zfautm_gP(url_search, 'utm_campaign'); 
    u4 = this.zfautm_gP(url_search, 'utm_term'); 
    u5 = this.zfautm_gP(url_search, 'utm_content'); 
  } else if ( this.zfautm_gP(url_search, 'gclid')) {
    u1 = 'Google Ads'; 
    u2 = 'cpc'; 
    u3 = '(not set)'; 
    if ( !ZFAdvLead.utmcustPNameArr.includes('gclid') ) {
      ZFAdvLead.utmcustPNameArr.push('gclid');
    }
  } else if(ref) {
    var r_u1 = this.zfautm_gC('utm_source'); 
    var r_u2 = this.zfautm_gC('utm_medium'); 
    var r_u3 = this.zfautm_gC('utm_campaign'); 
    var r_u4 = this.zfautm_gC('utm_term'); 
    var r_u5 = this.zfautm_gC('utm_content'); 
    if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
      // separate domain, path and query parameters
      if (ref.indexOf('/') > -1) {
        ref_domain = ref.substr(0,ref.indexOf('/'));
        ref_path = ref.substr(ref.indexOf('/'));
        if (ref_path.indexOf('?') > -1) {
          ref_search = ref_path.substr(ref_path.indexOf('?'));
          ref_path = ref_path.substr(0, ref_path.indexOf('?'));
        }
      }
      u2 = 'referral'; 
      u1 = ref_domain;                    
    // Extract term for organic source
      for (var i=0; i<search_engines.length; i++){
        if(ref_domain.indexOf(search_engines[i][0]) > -1){
          u2 = 'organic'; 
          u1 = search_engines[i][0];
          u4 = this.zfautm_gP(ref_search, search_engines[i][1]) || '(not provided)';
          break;
        }
      }
    } else {
      if ( typeof r_u1 !== "undefined" ) {
        u1 = r_u1;
      }
      if ( typeof r_u2 !== "undefined" ) {
          u2 = r_u2;
      }
      if ( typeof r_u3 !== "undefined" ) {
        u3 = r_u3;
      }
      if ( typeof r_u4 !== "undefined" ) {
        u4 = r_u4;
      }
      if ( typeof r_u5 !== "undefined" ) {
        u5 = r_u5;
      }
    }
  } else {
    var r_u1 = this.zfautm_gC('utm_source'); 
    var r_u2 = this.zfautm_gC('utm_medium'); 
    var r_u3 = this.zfautm_gC('utm_campaign'); 
    var r_u4 = this.zfautm_gC('utm_term'); 
    var r_u5 = this.zfautm_gC('utm_content'); 
    if ( typeof r_u1 === "undefined" && typeof r_u2 === "undefined" && typeof r_u3 === "undefined" && typeof r_u4 === "undefined" && typeof r_u5 === "undefined") {
      var locRef = document.URL;
      locRef = locRef.substr(locRef.indexOf('//')+2);
      if (locRef.indexOf('/') > -1) {
        locRef = locRef.substr(0,locRef.indexOf('/'));
      }
      u1 = locRef;
      u2 = 'referral'; 
    } else {
      if ( typeof r_u1 !== "undefined" ) {
        u1 = r_u1;
      }
      if ( typeof r_u2 !== "undefined" ) {
        u2 = r_u2;
      }
      if ( typeof r_u3 !== "undefined" ) {
        u3 = r_u3;
      }
      if ( typeof r_u4 !== "undefined" ) {
        u4 = r_u4;
      }
      if ( typeof r_u5 !== "undefined" ) {
        u5 = r_u5;
      }
    }
  }
  return {
    'source'  : u1, 
    'medium'  : u2, 
    'campaign': u3, 
    'term'    : u4, 
    'content' : u5 
  };
}
ZFAdvLead.prototype.zfautm_gP = function(s, q) {
  try{
      var match = s.match('[?&]' + q + '=([^&]+)');
      return match ? decodeURIComponent(match[1]) : '';
  } catch(e){
    return '';  
  }
}
ZFAdvLead.prototype.zfautm_gC = function( cookieName ){
  var cookieArr = document.cookie.split('; ');
  for ( var i = 0 ; i < cookieArr.length ; i ++ ){
    var cookieVals = cookieArr[i].split('=');
      if ( cookieVals[0] === cookieName && cookieVals[1] ) {
        return decodeURIComponent(cookieVals[1]);
      }
  }
};
ZFAdvLead.prototype.zfautm_gC_enc = function( cookieName ){
  var cookieArr = document.cookie.split('; ');
  for ( var i = 0 ; i < cookieArr.length ; i ++ ){
    var cookieVals = cookieArr[i].split('=');
      if ( cookieVals[0] === cookieName && cookieVals[1] ) {
        return cookieVals[1];
      }
  }
};
ZFAdvLead.prototype.zfautm_iframeSprt = function () {
  var zf_frame = document.getElementsByTagName("iframe");
  for(var i = 0; i < zf_frame.length; ++i){
    if((zf_frame[i].src).indexOf('formperma') > 0 ){
      var zf_src = zf_frame[i].src;
      for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
        var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
        utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
        var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
        if ( typeof utmVal !== "undefined" ) {
          if ( utmVal != "" ){
            if(zf_src.indexOf('?') > 0){
              zf_src = zf_src+'&'+utmPm+'='+ utmVal;
            }else{
              zf_src = zf_src+'?'+utmPm+'='+ utmVal;
            }
          }
        }
      }
      if ( zf_frame[i].src.length < zf_src.length ) {
        zf_frame[i].src = zf_src;
      }
    }
  }
};
ZFAdvLead.prototype.zfautm_DHtmlSprt = function () {
  var zf_formsArr = document.forms;
  for ( var frmInd = 0 ; frmInd < zf_formsArr.length ; frmInd ++ ) {
    var zf_form_act = zf_formsArr[frmInd].action;
      if ( zf_form_act && zf_form_act.indexOf('formperma') > 0 ){
        for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
          var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
          var utmVal = this.zfautm_gC( ZFAdvLead.utmPNameArr[ prmIdx ] );
          if ( typeof utmVal !== "undefined" ) {
            if ( utmVal != "" ) {
              var fieldObj = zf_formsArr[frmInd][utmPm];
            if ( fieldObj ) {
              fieldObj.value = utmVal;
            }
          }
        }
      }
    }
  }
};
ZFAdvLead.prototype.zfautm_jsEmbedSprt = function ( id ) {
  document.getElementById('zforms_iframe_id').removeAttribute("onload");
  var jsEmbdFrm = document.getElementById("zforms_iframe_id");
  var embdSrc = jsEmbdFrm.src;
  for( var prmIdx = 0 ; prmIdx < ZFAdvLead.utmPNameArr.length ; prmIdx ++ ) {
    var utmPm = ZFAdvLead.utmPNameArr[ prmIdx ];
    utmPm = ( ZFAdvLead.isSameDomian && ( ZFAdvLead.utmcustPNameArr.indexOf(utmPm) == -1 ) ) ? "zf_" + utmPm : utmPm;
    var utmVal = this.zfautm_gC_enc( ZFAdvLead.utmPNameArr[ prmIdx ] );
    if ( typeof utmVal !== "undefined" ) {
      if ( utmVal != "" ) {
        if(embdSrc.indexOf('?') > 0){
                    embdSrc = embdSrc+'&'+utmPm+'='+utmVal;
        }else{
            embdSrc = embdSrc+'?'+utmPm+'='+utmVal;
        }
      }
    }
  }
  jsEmbdFrm.src = embdSrc;
};
var zfutm_zfAdvLead = new ZFAdvLead();
zfutm_zfAdvLead.zfautm_ini();
if( document.readyState == "complete" ){
    zfutm_zfAdvLead.zfautm_iframeSprt();
    zfutm_zfAdvLead.zfautm_DHtmlSprt();
} else {
  window.addEventListener('load', function (){
        zfutm_zfAdvLead.zfautm_iframeSprt();
        zfutm_zfAdvLead.zfautm_DHtmlSprt();
  }, false);
}
</script>
<!--End-->

</body>

</html>