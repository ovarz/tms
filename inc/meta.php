<head>
<title>TMS</title>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">	
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-touch-fullscreen" content="yes"/>

<link rel="preconnect" href="https://www.ov4rz.com/">
<link rel="dns-prefetch" href="https://www.ov4rz.com/"/>
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>

<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico"/>

<link rel="preload" as="font" href="fonts/KFOlCnqEu92Fr1MmYUtfBBc4.woff2" type="font/woff2" crossorigin>
<link rel="preload" as="font" href="fonts/KFOmCnqEu92Fr1Mu4mxK.woff2" type="font/woff2" crossorigin>
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['TMS'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="preload" as="style" href="css/rancak.css?<?php echo $anticache; ?>">
<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
<?php if($layout == 'home') { ?>
  <link rel="preload" as="style" href="css/rancak-home.css?<?php echo $anticache; ?>">
  <link rel="stylesheet" type="text/css" href="css/rancak-home.css?<?php echo $anticache; ?>"/>
<?php } ?>
<?php if($layout == 'dashboard') { ?>
  <link rel="preload" as="style" href="css/rancak-dashboard.css?<?php echo $anticache; ?>">
  <link rel="stylesheet" type="text/css" href="css/rancak-dashboard.css?<?php echo $anticache; ?>"/>
<?php } ?>
</head>
<body>