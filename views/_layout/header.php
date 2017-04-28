<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/bootstrap.min.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="<?=APP_ROOT?>" class="navbar-brand">SOFTUNI
                    BLOG</a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <?php if ($this->isLoggedIn) : ?>
                        <li>
                            <a href="<?=APP_ROOT?>/posts">Posts</a>
                        </li>
                        <li>
                            <a href="<?=APP_ROOT?>/posts/create">Create Post</a>
                        </li>
                        <li>
                            <a href="<?=APP_ROOT?>/users">Users</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($this->isLoggedIn) : ?>
                        <li>
                            <a href="<?=APP_ROOT?>/users/logout">Logout</a>
                        </li>
                    <?php else: ?>
                    <li>
                        <a href="<?=APP_ROOT?>/users/login">Login</a>
                    </li>
                    <li>
                        <a href="<?=APP_ROOT?>/users/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>
</header>
<?php require_once('show-notify-messages.php'); ?>