<!DOCTYPE html>

<html>
<head>
	<title>this is php</title>
	<meta charset="utf-8" >
	<meta name="description" content="thsi is soubhagya's first php website">
</head>
<body>
	
<form action="userdata.php" method="post" enctype="multipart/form-data">
	<table align="center" width="60%"  border="6px" cellspacing="7" cellpadding="6" height=78 style="border-color: orange; border-spacing: 34px;">
		<tr>
			<td>Name </td>
			<td> <input type="text" name="name" placeholder="Enter your name here" /></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea type="text" name="addr" placeholder="Enter your Address" ></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male <input type="radio" name="gender" value="male">Female<input type="radio" name="gender" value="female">
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd" ></td>
		</tr>
		<tr>
			<td>upload your phot here</td>
			<td><input type="file" name="userfile" value="upload" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
