<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">

<head>
	<title>Hornobar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	
</head>

<body>

 
<fb:like href="https://www.facebook.com/Hornobar-939390592790568/" layout="standard" action="like" show_faces="true" share="false"></fb:like>
<div id="fb-root"></div>


 <script>

 	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=245126446025547&version=v2.1";
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
      url: "https://tebeck.com.ar/asdf.php",
      type: "post",
      data: {type:'like',uid:'login session user id'},
      success: function(data){
       // On successful Response.
       console.log("redirigiendo..");
      },
      error:function(){
      console.log("error")..;
       }   
    }); 
  });
};    
</script>


<footer>

</footer>

</body>
</html>