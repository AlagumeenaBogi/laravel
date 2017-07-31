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