<?php $this->title = 'Create New Post'; ?>

<main>
    <div class="container body-content span=8 offset=2">
        <div class="well">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <legend>New Post</legend>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="post_title">Article Title</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" id="article_title" placeholder="Post Title"
                                   name="post_title"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="post_content">Content</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" rows="6" id="article_content" name="post_content"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input type="submit" class="btn btn-primary" value="Create"/>
                            <a class="btn btn-default" href="<?=APP_ROOT?>/posts">Cancel</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>
