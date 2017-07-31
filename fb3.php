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
