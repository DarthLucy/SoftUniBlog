<?php $this->title = 'Edit User'; ?>

<main>
    <div class="container body-content span=8 offset=2">
        <div class="well">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <legend>Edit User</legend>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="username">Username</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" id="article_title" placeholder="Username"
                                   name="username" value="<?=htmlspecialchars($this->user['username'])?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="full_name">Full Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="full_name" placeholder="Full Name"
                                   name="full_name" value="<?=htmlspecialchars($this->user['full_name'])?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input type="submit" class="btn btn-primary" value="Edit"/>
                            <a class="btn btn-default" href="<?=APP_ROOT?>/users">Cancel</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>
