<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: admin-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="../style/user.css">
    <link rel="stylesheet" href="../style/admin-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<?php include("./sidebar.php"); ?>
    <div class="main-content">
        <h1>Admin Panel - Users</h1>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../config.php");
                $selectquery="select * from user ";
                $query=mysqli_query($con, $selectquery);
                $nums = mysqli_num_rows($query);
                while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['fullname']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td>User</td>
                    <td>
                        <button><a style="color:black; text-decoration:none;" href="./edit-user.php?id=<?php echo $res['id']; ?>">Edit</a></button>
                        <button><a style="color:black; text-decoration:none;" href="./delete-user.php?id=<?php echo $res['id']; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php } ?>
                <!-- Add more rows for other users -->
            </tbody>
        </table>
    </div>
</body>
</html>
