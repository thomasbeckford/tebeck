<!DOCTYPE HTML>
<html>
<head>
	<title>Hornobar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta http-equiv="refresh" content="6">

</head>

<body>

 
<fb:like href="http://www.geeks.gallery/" layout="standard" action="like" show_faces="true" share="false"></fb:like>
<div id="fb-root"></div>


 <script>

 	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=245126446025547&version=v2.1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '245126446025547',
    xfbml      : true,
    version    : 'v2.1'
  });
  FB.Event.subscribe('edge.create', function(response) {
    // like clicked
    $.ajax({
      url: "path of a php file in server to insert user data in your database",
      type: "post",
      data: {type:'like',uid:'login session user id'},
      success: function(data){
       // On successful Response.
      },
      error:function(){
      // On Error.
       }   
    }); 
  });
};    
</script>


<footer>

</footer>

</body>
</html>