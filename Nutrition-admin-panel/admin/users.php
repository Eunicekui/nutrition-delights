<?php include('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>User Lists
                    <a href="users-create.php" class=" btn btn-danger float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">

                <?php alertMessage(); ?>

                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>role</th>
                            <th>Is Ban</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $users = getAll('users');
                        if (mysqli_num_rows($users) > 0) {
                            foreach ($users as $userItem) {
                        ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['phone']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td><?= $userItem['is_ban'] == 1 ? 'Banned' : 'Active'; ?></td>
                                    <td>
                                        <a href="users-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php?id=<?= $userItem['id']; ?>"" 
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this data?')"
                                        >Delete</a>
                                    </td>

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
</div>














<?php include('includes/footer.php') ?>