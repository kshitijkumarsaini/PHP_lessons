<html>
	<head>
		<meta name="google-signin-client_id" content="657839551372-f4k428fnp2jeu741nq1crb24jesq6s09.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js"></script>
	</head>
	
	<body>
		<div class="g-signin2" data-onsuccess="myGmailLogin"></div>
		<a href="javascript:void(0)" onclick="logout()">Logout</a>
		<script>
		function myGmailLogin(userDetails){
			var userDetails=userDetails.getBasicProfile();
			console.log(userDetails);
		}
		
		function logout(){
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut();
		}
		</script>
	</body>
</html>