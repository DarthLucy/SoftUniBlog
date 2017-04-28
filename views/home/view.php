<?php $this->title = $this->post['title'] ?>

<main>
    <div class="container body-content">
        <div class="row">
            <div class="col-md-12">
                <article>
                    <header>
                        <h2><?=htmlspecialchars($this->title)?></h2>
                    </header>

                    <small class="author">
                        <i>Posted on</i> <?=(new DateTime($this->post['date']))->format('d-M-Y')?>
                        <i>by</i> <?=htmlentities($this->post['full_name'])?>
                    </small>

                    <p><?=$this->post['content']?></p>

                    <footer>
                        <div class="pull-right">
                            <a class="btn btn-success btn-md" href="<?=APP_ROOT?>">Back &raquo;</a>

                        </div>
                    </footer>
                </article>
            </div>
        </div>
    </div>
</main>
