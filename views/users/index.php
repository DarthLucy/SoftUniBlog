<?php $this->title = 'Users'; ?>

<div class="container">
    <div class="well">
        <h1><?=htmlspecialchars($this->title)?></h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full name</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['username']) ?></td>
                    <td><?= htmlspecialchars($user['full_name']) ?></td>
                    <td><a class="btn-block" href="<?=APP_ROOT?>/users/edit/<?=$user['id']?> ">Edit</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>