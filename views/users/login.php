<main>
    <div class="container body-content span=8 offset=2">
        <div class="well">
            <form class="form-horizontal" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="username">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="password">Password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                   name="password" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a class="btn btn-default" href="${pageContext.request.contextPath}/">Cancel</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <a href="<?=APP_ROOT?>/users/register">Don't have an account? Register</a>
    </div>
</main>