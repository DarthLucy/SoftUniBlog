<?php $this->title = 'Delete Post'; ?>

<main>
    <div class="container body-content span=8 offset=2">
        <div class="well">
            <form class="form-horizontal" method="POST">
                <fieldset>
                    <legend>Are you sure you want to delete this post?</legend>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="post_title">Post Title</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" id="article_title" placeholder="Post Title"
                                   name="post_title" value="<?=htmlspecialchars($this->post['title'])?>"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="post_content">Content</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" rows="6" id="article_content"
                                      name="post_content"><?=htmlspecialchars($this->post['content'])?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="post_date">Date (yyyy-MM-dd hh:mm:ss)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="post_date"
                                   name="post_date" value="<?=htmlspecialchars($this->post['date'])?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="author">Author</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username"
                                   name="username" value="<?=htmlspecialchars($this->post['username'])?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input type="submit" class="btn btn-primary" value="Delete"/>
                            <a class="btn btn-default" href="<?=APP_ROOT?>/posts">Cancel</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</main>
