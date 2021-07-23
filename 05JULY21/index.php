<script>
  function checkLoginState() {             
    FB.getLoginStatus(function(response) {  
      if (response.status === 'connected') {   
		  FB.api('/me', function(response) {
			console.log(response);
			/*jQuery.ajax({
				url:'check_login.php',
				data:"name="+response.name+"&id="+response.id,
				type:"post",
				success:function(result){
					window.location.href='';
				}
			});*/
		  });
		} 
    });
  }
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '4004954689617151',
      cookie     : true,                     
      xfbml      : true,                     
      version    : 'v11.0'           
   });

  };
</script>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>