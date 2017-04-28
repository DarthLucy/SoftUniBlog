<?php $this->title = 'Posts'; ?>

<div class="container">
    <div class="well">
        <h1><?=htmlspecialchars($this->title)?></h1>
    </div>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->posts as $post) : ?>

            <tr>
                <td><?= $post ['id'] ?></td>
                <td><?= htmlspecialchars($post['title']) ?></td>
                <td><?= cutLongText ($post['content']) ?></td>
                <td><?= htmlspecialchars($post['date']) ?></td>
                <td><?= $post['user_id'] ?></td>
                <td><a class="btn btn-block" href="<?=APP_ROOT?>/posts/edit/<?=$post['id']?> ">Edit</a>
                    <a class="btn btn-danger" href="<?=APP_ROOT?>/posts/delete/<?=$post['id']?> ">Delete</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>

    </table>

    <a class="btn btn-success" href="<?=APP_ROOT?>/posts/create">Create New</a>
</div>

