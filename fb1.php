<html>
<head>
<title>
Share on Facebook
</title>
<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.5.1.js">
</script>
<script src="https://connect.facebook.net/en_US/all.js">
</script>
<script type="text/javascript">
 $(document).ready(function () {
 $('#shareonfacebook').click(function (e) {
 alert('hello9');
 e.preventDefault();
 FB.ui(
 {
 method: 'feed',
 name: 'DebugmodeEventPlans',
 link: 'http://localhost:1461/ShareonFB.html',
 caption: 'hey how is my Application ? tell me dude',
 description: 'hey how is my Application ?',
 message: ''
 });
 });
 });
</script>
</head>
<body>
<button id="shareonfacebook" >ShareOnFaceBook</button>
 
<script>
FB.init({
appId : 'urappid'
});
</script>
</body>
</html>
<!---------
https://debugmode.net/2012/06/25/sharing-on-facebook-using-javascript/

https://developers.facebook.com/docs/php/howto/example_upload_photo

https://github.com/facebook/php-graph-sdk/tree/5.5/docs

FB.ui(
  {
    method: 'share',
    href: 'https://developers.facebook.com/docs/',
  },
  // callback
  function(response) {
    if (response && !response.error_message) {
      alert('Posting completed.');
    } else {
      alert('Error while posting.');
    }
  }
);
https://developers.facebook.com/docs/javascript/reference/FB.ui
--------->


<!________ONE______>

<html lang="en">
    <head>
        <title> Microfinance - Micro manage Software</title>          <link href="bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="jquery.js"></script>
        <script type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
 
    <body>
<h1>Sharing using FB.ui() Dialogs</h1>

<p>Below are some simple examples of how to use UI dialogs in a web page.</p>

<h3>Sharing Links</h3>

<!---div id="shareBtn" class="btn btn-success clearfix">Share Dialog</div---->

<div  class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
    <a class="fb-xfbml-parse-ignore" target="popup" 
    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;','popup','width=600,height=500'); return false;" >anbu</a>
</div>
<!---<div  class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
    <a class="fb-xfbml-parse-ignore" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sssdkpreparse&quote=here+comes+the+quote','popup','width=600,height=500'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse&quote=here+comes+the+quote">anbu</a>
</div>---->

<p>The Share Dialog enables you to share links to a person's profile without them having to use Facebook Login. <a href="https://developers.facebook.com/docs/sharing/reference/share-dialog">Read our Share Dialog guide</a> to learn more about how it works.</p>
<script>
document.getElementById('shareBtn').onclick = function() { 
  FB.ui({
    display: 'popup',
    method: 'share',
    href: 'https://developers.facebook.com/docs/',
  }, function(response){});
}
</script>


</body>
</html>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
$im="https://www.w3schools.com/html/pic_mountain.jpg"; echo $im."<BR>";
?>
<div class="fb-share-button" data-href="<?=$im;?>" data-layout="button" data-size="small" data-mobile-iframe="false">
     <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=".<?=$im;?>."&amp;src=sdkpreparse">Share</a>
 </div>



 <html>
<head>
  <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://127.0.0.1/learning_taks/fb.php" />
  <meta property="og:type"          content="anbu" />
  <meta property="og:title"         content="anbukuti" />
  <meta property="og:description"   content="anbukutimeena" />
 <meta property=”og:image” content=”http://www.yourdomain.com/image-name.jpg” />


 <!--meta property="og:image" content="http://www.w3schools.com/html/pic_mountain.jpg" />
<meta property="og:image:secure_url" content="http://www.w3schools.com/html/pic_mountain.jpg" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" /---->


  <!--https://www.w3schools.com/html/pic_mountain.jpg
  https://i.stack.imgur.com/QF81q.png
  C:\xampp\htdocs\learning_taks\images.jpg ---->


</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="http://127.0.0.1/learning_taks/fb.php" 
    data-layout="button_count">
  </div>

</body>
</html>
<!-----
    IMAGE:
https://gist.github.com/chrisjhoughton/e970e5259f2636606afb
http://ogp.me/
https://www.h3xed.com/web-and-internet/how-to-use-og-image-meta-tag-facebook-reddit
http://www.e-socialite.com/2015/facebook-preview-image-title-and-description
https://blog.kissmetrics.com/open-graph-meta-tags/
-------->

 <?php $url = urlencode('http://www.kokopame.com/test_share_images.php'); 
 https://stackoverflow.com/questions/22652041/how-to-pass-parameter-like-title-summary-and-image-in-facebook-sharer-url
 ?>

 <html>
<head>
  <title>Your Website Title</title> 
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

  <!-- Your share button code -->
  <div class="fb-share-button" data-href="https://pixabay.com/en/tiger-wildlife-zoo-cat-2535888/" 
    data-layout="button_count" data-action="share" >
  </div>

</body>
</html>
http://voidcanvas.com/make-dynamic-url-based-social-share-buttons-for-any-website/

https://www.facebook.com/sharer/sharer.php?u=http://www.test.com/

https://www.facebook.com/help/community/ask/

<html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<!--
  <head prefix=”og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#spaceospaceo:http://ogp.me/ns/fb/spaceospaceo#”> 
  html prefix="og: http://ogp.me/ns#"---->
<head prefix=”og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#spaceospaceo:http://ogp.me/ns/fb/spaceospaceo#”> 
<title>Himanshu's Open Graph Protocol</title>
<meta http-equiv="Content-Type" content="text/html;charset=WINDOWS-1252" />
<meta http-equiv="Content-Language" content="en-us" />
<link rel="stylesheet" type="text/css" href="https://www.eventeducation.com/event-education.css" />
<meta name="verify-v1" content="so4y/3aLT7/7bUUB9f6iVXN0tv8upRwaccek7JKB1gs=" >
<meta property="og:title" content="Himanshu's Open Graph Protocol"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://www.eventeducation.com/test.php"/>
<meta property="og:image" content="https://www.eventeducation.com/images/982336_wedding_dayandouan_th.jpg"/>
<meta property="fb:admins" content="himanshu160"/>
<meta property="og:site_name" content="Event Education"/>
<meta property="og:description" content="Event Education provides free courses on event planning and management to event professionals worldwide."/>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=501839739845103";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div
  class="fb-login-button"
  data-show-faces="true"
  data-width="200"
  data-max-rows="1"
  data-scope="publish_actions">
</div>

</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# MY_APP_NAME_SPACE: http://ogp.me/ns/fb/MY_APP_NAME_SPACE#">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>


<!------------------27.7.2017 START----------------------------->
        <html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<!--
  <head prefix=”og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#spaceospaceo:http://ogp.me/ns/fb/spaceospaceo#”> 
  html prefix="og: http://ogp.me/ns#"---->
<head prefix=”og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#spaceospaceo:http://ogp.me/ns/fb/spaceospaceo#”> 
<title>Himanshu's Open Graph Protocol</title><meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=WINDOWS-1252" />
<meta http-equiv="Content-Language" content="en-us" />
<link rel="stylesheet" type="text/css" href="https://www.eventeducation.com/event-educatiodn.css" />
<meta name="verify-v1" content="so4y/3aLT7/7bUUB9f6iVXN0tv8upRwaccek7JKB1gs=" >
<meta property="og:title" content="Himanshu's Open Graph Protocol"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://www.eventeducation.com/test.php"/>
<meta property="og:image" content="https://www.eventeducation.com/images/982336_wedding_dayandouan_th.jpg"/>
<meta property="fb:admins" content="himanshu160"/>
<meta property="og:site_name" content="Event Education"/>
<meta property="og:description" content="Event Education provides free courses on event planning and management to event professionals worldwide."/>
<meta property="og:image" content="https://developer.cdn.mozilla.net/static/img/opengraph-logo.dc4e08e2f6af.png">
<meta property="og:description" content="The Mozilla Developer Network (MDN) provides
information about Open Web technologies including HTML, CSS, and APIs for both Web sites
and HTML5 Apps. It also documents Mozilla products, like Firefox OS.">
<meta property="og:title" content="Mozilla Developer Network">
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=501839739845103";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div
  class="fb-login-button"
  data-show-faces="true"
  data-width="200"
  data-max-rows="1"
  data-scope="publish_actions">
</div>

</body>
</html>
TYPE1:
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
$photos=array('https://www.w3schools.com/html/pic_mountain.jpg','https://pixabay.com/en/tiger-wildlife-zoo-cat-2535888/');

//$im="https://www.w3schools.com/html/pic_mountain.jpg";
$im="https://pixabay.com/en/tiger-wildlife-zoo-cat-2535888/";
//$im="http://127.0.0.1/learning_taks/images.jpg";
// echo $im."<BR>";
?>
<div class="fb-share-button" data-href="<?=$im;?>" data-layout="button" data-size="small" data-mobile-iframe="false">
     <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=".<?=$im;?>."&amp;src=sdkpreparse">Share</a>
 </div>
TYPE2:

<div id="mImageBox">
<img id='my_image' src='https://pixabay.com/en/tiger-wildlife-zoo-cat-2535888/' alt='aathis' width="auto" height="auto" onclick="fbs_click(this)"/>
</div>

<script>
     function fbs_click(TheImg) {
      alert(TheImg);
     u=TheImg.src;
     // t=document.title;
    t=TheImg.getAttribute('alt');
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
}
</script>https://stackoverflow.com/questions/17139272/onclick-share-image-on-facebook
TYPE3:
<html>
<head>
<title>
Share on Facebook
</title>
<script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.5.1.js"></script>
<script src="https://connect.facebook.net/en_US/all.js"></script>
</head>
<div  class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
    <a class="fb-xfbml-parse-ignore" target="popup" 
    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;','popup','width=600,height=500'); return false;" >anbu</a>
</div>
<!---<div  class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
    <a class="fb-xfbml-parse-ignore" target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sssdkpreparse&quote=here+comes+the+quote','popup','width=600,height=500'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse&quote=here+comes+the+quote">anbu</a>
</div>---->

<p>The Share Dialog enables you to share links to a person's profile without them having to use Facebook Login. <a href="https://developers.facebook.com/docs/sharing/reference/share-dialog">Read our Share Dialog guide</a> to learn more about how it works.</p>
<script>
document.getElementById('shareBtn').onclick = function() { 
  FB.ui({
    display: 'popup',
    method: 'share',
    href: 'https://developers.facebook.com/docs/',
  }, function(response){});
}
</script>
</html>
+++++++++++++++++++++

<a
    id="fb-share"
    style='text-decoration:none;'
    type="icon_link"
    onClick="window.open(
        'http://www.facebook.com/sharer.php?s=100&p[title]=YOUR_TITLE&p[summary]='
            + 'YOUR_DESCRIPTION&p[url]=YOUR_URL&p[images][0]=YOUR_IMAGE',
        'sharer',
        'toolbar=0,status=0,width=580,height=325');"
    href="javascript: void(0)"
>Share</a> 


<!_________________27.7.2017 END______________________________>