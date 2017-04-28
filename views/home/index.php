<?php $this->title = 'Welcome to My Blog'; ?>

<!--<div class="well">-->
<!--    <h2>Recent Posts</h2>-->
<!--    <ul>-->
<!--        --><?php //foreach ($this->posts as $post) : ?>
<!--            <li>-->
<!--                <a href="--><?//=APP_ROOT?><!--/home/view/--><?//=$post['id']?><!--">-->
<!--                    --><?//=htmlentities($post['title'])?>
<!--                </a>-->
<!--            </li>-->
<!--        --><?php //endforeach ?>
<!--    </ul>-->
<!--</div>-->

<main>
    <div class = "container body-content">

        <div class="well">
            <h1><?=htmlspecialchars($this->title)?></h1>
        </div>

        <div class = "row">
            <?php foreach ($this->posts as $post): ?>
                <div class="col-6">
                    <article>
                        <header>
                            <h2 class="title"><?=htmlentities($post['title'])?></h2>
                        </header>

                        <small class="author">
                            <i>Posted on</i> <?=(new DateTime($post['date']))->format('d-M-Y')?>
                            <i>by</i> <?=htmlentities($post['full_name'])?>
                        </small>

                        <p>
                            <?php if (strlen($post['content']) > 300)
                            {
                                $summary = substr(strip_tags($post['content']),0,200) . "...";
                                print($summary);
                            }
                            else
                            {
                                print($post['content']);
                            } ?>
                        </p>


                        <footer>
                            <div class="pull-right">
                                <a class="btn btn-success btn-md"
                                <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>">
                                    Read more...
                                </a>
                            </div>
                        </footer>

                    </article>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>