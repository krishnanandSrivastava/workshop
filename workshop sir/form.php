<html>

<head>
    <title>Basic Form</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/formValidaiton.js" type="text/javascript">
    </script>
    <style>
        table,
        th,
        td {
            border: 0px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
        }

        .myformLabel {
            background-color: moccasin;
        }

        .myformControlBackground {
            background-color: #ccc;
        }

        .btn {
            background-color: saddlebrown;
            color: seashell;
        }
    </style>
</head>

<body bgcolor="">
    <form action="DBLogic.php?pageno=1" method="post" enctype="multipart/form-data" id="frm" name="frm">
        <table border="0" align="center">
            <tr>
                <td colspan="2">
                    <h1 align="center">Form</h1>
                </td>
            </tr>
            <tr>
                <td class="myformLabel">First Name</td>
                <td class="myformControlBackground"><input type="text" name="firstName" id="firstName"
                        placeholder="Enter First Name"></td>
            </tr>
            <tr>
                <td class="myformLabel">Last Name</td>
                <td class="myformControlBackground"><input type="text" name="lastName" id="lastName"
                        placeholder="Enter Last Name"></td>
            </tr>
            <tr>
                <td class="myformLabel">Mobile</td>
                <td class="myformControlBackground"><input type="text" name="mobile" id="mobile"
                        placeholder="Enter Mobile"></td>
            </tr>
            <tr>
                <td class="myformLabel">Email</td>
                <td class="myformControlBackground"><input type="text" name="email" id="email"
                        placeholder="Enter Email"></td>
            </tr>
            <tr>
                <td class="myformLabel">Gender</td>
                <td class="myformControlBackground">
                    <input class="gender" type="radio" name="gender" id="male"
                        value="M"> <label for="male">Male</label> &nbsp; 
                        <input class="gender" type="radio"
                        name="gender" id="female" Value="F"> <label for="female">Female</label></td>
            </tr>
            <tr>
                <td class="myformLabel">Hobbies</td>
                <td class="myformControlBackground">
                    <input type="checkbox" class="hobbies" name="hobbies[]" id="cricket" value="Cricket"> <label
                        for="cricket">Cricket</label>
                    <input type="checkbox" class="hobbies" name="hobbies[]" id="chess" Value="Chess"> <label
                        for="chess">Chess</label>
                    <input type="checkbox" class="hobbies" name="hobbies[]" id="football" Value="Football"> <label
                        for="football">Football</label>
                </td>
            </tr>
            <tr>
                <td class="myformLabel">City</td>
                <td class="myformControlBackground">
                    <select name="city" id="city" onchange="changeBGColor()">
                        <option value="">Select City</option>
                        <option value="LKW">Lucknow</option>
                        <option value="VNS">Varanasi</option>
                        <option value="MGS">Mughalsarai</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="myformLabel">Address</td>
                <td class="myformControlBackground">
                    <textarea name="address" id="address" placeholder="Enter street/Lane No./Flat No./ Address" rows="5"
                        cols="30"></textarea>
                </td>
            </tr>
            <tr>
                <td class="myformLabel">Photograph</td>
                <td class="myformControlBackground">
                    <input type="file" name="photo" id="photo">
                </td>
            </tr>
            <tr>
                <td class="myformLabel">Passowrd</td>
                <td class="myformControlBackground"><input type="password" name="password" id="password"
                        placeholder="Enter Password"></td>
            </tr>
            <tr>
                <td class="myformLabel">Confirm Passowrd</td>
                <td class="myformControlBackground"><input type="password" name="cpassword" id="cpassword"
                        placeholder="Enter Password Again"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input class="btn" style="width: 25em;" type="submit" name="save" value="Save">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <a href="detailPage.php">View List Page</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>