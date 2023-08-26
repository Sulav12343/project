<?php
require_once("../classes/user.class.php");
$user = new User();
?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($user->all() as $user) {
        ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['address'] ?></td>
                <td><?= $user['phone'] ?></td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>