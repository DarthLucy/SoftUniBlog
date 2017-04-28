<?php $this->title = 'Register New User'; ?>

<main>
    <div class="container body-content span=8 offset=2">
        <div class="well">
            <form class="form-horizontal" method="post">
                <fieldset>
                    <legend>Register</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="username">Username</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="text" id="username" placeholder="Username" name="username"
                                   required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="full_name">Full Name</label>
                        <div class="col-sm-4 ">
                            <input class="form-control" type="text" id="full_name" placeholder="Full Name" name="full_name"
                                   required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="password">Password</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="password" id="user-password-first" placeholder="Password"
                                   name="password" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="password-repeat">Confirm Password</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="password" id="user-password-second" placeholder="Password"
                                   name="password-repeat" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input type="submit" value="Submit" class="btn btn-primary"/>
                            <a class="btn btn-default" href="<?=APP_ROOT?>">Cancel</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <a href="<?=APP_ROOT?>/users/login">Already have an account? Log in</a>
    </div>
</main>
