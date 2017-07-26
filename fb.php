<html>
<head>
  <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://127.0.0.1/learning_taks/fb.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
 <meta property="og:image" content="https://www.e-socialite.com/images/fbopengraph/img.png" link rel="image_src" type="image/jpeg" href="https://www.e-socialite.com/images/fbopengraph/img.png" />



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