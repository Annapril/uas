<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
</head>
<body>
    <div class="col-md-12">
        <h3>Detail Users</h3>
        <table border="1" class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Last login</th>
                <th>status</th>
                <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $pengguna->id ?></td>
                    <td><?php echo $pengguna->username ?></td>
                    <td><?php echo $pengguna->password ?></td>
                    <td><?php echo $pengguna->email ?></td>
                    <td><?php echo $pengguna->created_at ?></td>
                    <td><?php echo $pengguna->last_login ?></td>
                    <td><?php echo $pengguna->status ?></td>
                    <td><?php echo $pengguna->role ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
