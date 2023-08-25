<?php
include "connect.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary m-5"><a href="user.php" class="text-light text-decoration-none">Add user</a></button>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql= "SELECT * FROM `crud` ORDER BY `id` ASC";
                $result = mysqli_query($con,$sql);
                if($result){
                    foreach ($result as $row){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['mobile']?></td>
                            <td><?php echo $row['password']?></td>
<!--                            <td>-->
<!--                                <button class="btn btn-primary"><a href="update.php?id=--><?php //echo $row['id']?><!--" class="text-light text-decoration-none">Update</a></button>-->
<!--                                <button class="btn btn-danger"><a href="delete.php?id=--><?php //echo $row['id']?><!--" class="text-light text-decoration-none">Delete</a></button>-->
<!--                            </td>-->
                        </tr>
                        <?php
                    }
                }
                ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
