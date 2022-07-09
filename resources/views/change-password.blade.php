<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href='{{url("css/change.css")}}'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="/change" method="post">
		@csrf
     	<h2>Change Password</h2>
     	
		@isset($error)
     		<p class="error">{{ $error }}</p>
     	@endif

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href='{{url("/home")}}' class="ca"><strong>HOME</strong></a>
     </form>
</body>
</html>