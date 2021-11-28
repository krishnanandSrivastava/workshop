<html>
<head>
	<title>Form Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="style1.css" rel="stylesheet"></link>
	<script src="p1script.js" type="text/javascript"></script>
</head>
<body>
	<p class="container">
	<form method="post" action="DBlogic.php?pageno=1" enctype="multipart/form-data">
			<table class="table table-bordered table-responsive container" border="1" align="center">
			<thead><th colspan="4" style="text-align:center"><h1>Form</h1></th></thead>
		<tr>
			<td class="btn-primary" >First Name</td>
			<td colspan="3"><input name="fname" type="text" placeholder="Enter First Name "/></td>
		</tr>
		<tr>
			<td class="btn-primary">Last Name</td>
			<td colspan="3"><input name="lname" type="text" placeholder="Enter Last Name "/></td>
		</tr>
		<tr>
			<td class="btn-primary">Password</td>
			<td colspan="3"><input name="pass" type="password" placeholder="Enter password"/></td>
		</tr>
		<tr>
			<td class="btn-primary">Confirm Password</td>
			<td colspan="3"><input name="cpass" type="password" placeholder="Re-enter password"/></td>
		</tr>
		<tr>
			<td class="btn-primary">Mobile No</td>
			<td colspan="3"><input name="mno" type="text" placeholder="Enter Mobile NO "/></td>
		</tr>
		<tr>
			<td class="btn-primary">Email</td>
			<td colspan="3"><input name="email" type="email" placeholder="Enter Email "/></td>
		</tr>
		<tr>
			<td class="btn-primary">Gender</td>
			<td ><input name="gen" id="gender1" type="radio" value='M' />Male</td>
			<td ><input name="gen" id="gender2" type="radio" value='F'/>Female</td>
		</tr>
		<tr>
			<td class="btn-primary">Hobbies</td>
			<td ><input name="hob" id="hob1" type="radio" value="cricket" />Cricket</td>
			<td ><input name="hob" id="hob2" type="radio" value="chess" />Chess</td>
			<td ><input name="hob" id="hob3" type="radio" value="football" />Football</td>
		</tr>
		<tr>
			<td class="btn-primary">City</td>
			<td ><select name="city">
					<option value="">Select city</option>
					<option value="vns">Vns</option>
					<option value="lkw">Lkw</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="btn-primary">Address</td>
			<td colspan="3"><textarea name="txtarea"></textarea></td>
		</tr>
		<tr>
			<td class="btn-primary">Photograph</td>
			<td colspan="3"><input name="photo" type="file" /></td>
		</tr>
		<tr>
			<td colspan="4" align="center">
                <input class="btn btn-primary" id="sub" type="button" onclick="f8()" value="Validate" />
                <input class="btn btn-primary" id="sub" type="submit" value="Save" />
            </td>
		</tr>
		<br>
	</table>
	</form>
	<p align="center"><a class="btn btn-link" href="p2.html">View Data</a></p>
	</p>
</body>
</html>