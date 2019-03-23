<html>
<head>
	<title>Feedback Form</title>
  <style type="text/css">

select{width: 15.5em}
</style>
 
</head>
<body><CENTER>
<div id="frm">
	<table>
<form action="studupdate.php" method="POST">
<p>
	<tr><td>
<label>Name:</label></td>

<td>
  <input type="text" id="name" name="name">
   </td>
</p>
</tr>
<tr>
<p><td>
<label>Date:</label></td><td>
<input type="Date" id="date" name="dt"/></td></p>
</tr>
<tr>
<p><td>
<label>Message:</label></td>
<td>
<textarea name="message" rows="5" cols="40" id="message"></textarea></td>
</p><tr>
<td>
<p>
	<input type="submit" id="btn" value="Submit"/></td>
	<td>
    <input type="reset" id="btn" value="Reset"/></td>
</p></tr>
</tr>
</form></table></div></CENTER>
<a href="Choose.php"><h2 align = "center">Back to Home Page</h2></a>
</body></html>