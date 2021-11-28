<?php
include("Database.php");
$db = new Database();
?>
<html lang="en">

<head>
    <title>List Page</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
        }

        tr:hover {
            background-color: lightgray;
        }

        td:hover {
            background-color: white;
        }
    </style>
</head>

<body>
    <table border="1" align="center">
        <h3 align="center">Person List</h3>
        <thead>
            <tr>
                <td colspan="10" style="text-align:center"><a href="form.php">Add More Data</a></td>
            </tr>
            <tr>
                <td>Sno.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Mobile</td>
                <td>Gender</td>
                <td>Address</td>
                <td>City</td>
                <td>hobbies</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Sno.</td>
                <td>Name</td>
                <td>Email</td>
                <td>Mobile</td>
                <td>Gender</td>
                <td>Address</td>
                <td>City</td>
                <td>hobbies</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
                <?php
                $data = $db->getData();
                if (sizeof($data)) {
                    for ($i = 0; $i < sizeof($data); $i++) {
                        $row = $data[$i];
                        ?>
                            <tr>
                                <td><?php echo $i+1;?></td>
                                <td><?php echo $row["firstName"];?></td>
                                <td><?php echo $row["lastName"];?></td>
                                <td><?php echo $row["mobile"];?></td>
                                <td><?php echo $row["email"];?></td>
                                <td><?php echo ($row["gender"] == "M") ? "Male": "Female";?></td>
                                <td><?php echo $row["city"];?></td>
                                <td><?php echo $row["address"];?></td>
                                <td><?php echo $row["hobbies"];?></td>
                                <td>
                                    <img width="50" src="<?php echo $row["photo"];?>">
                                
                                </td>
                            </tr>
                        <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="10" style="color:red; text-align:center;">No Records Found</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
    </table>
</body>

</html>