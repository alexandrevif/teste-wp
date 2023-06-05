<?= get_header() ?>
<section class="image post-image" style="background:url('<?= get_the_post_thumbnail_url(get_the_ID()) ?>') no-repeat center;">
    <span class="overlay"></span>
</section>
<section class="post">
    <div class="container pb-5">
        <div class="row">
            <div class="col p-5 post-content">
                <div class="post-hedaer">
                    <div>
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" />
                    </div>
                    <div class="post-category"><?= get_the_category(get_the_ID())[0]->name ?></div>
                    <div class="d-flex align-items-center gap-3">
                        <p>
                            <i class="bx bxs-calendar"></i> <?= the_time('j \d\e F \d\e Y') ?>
                        </p>
                        <p>
                            <i class="bx bxs-purchase-tag"></i>
                            Ansiedade, depressão
                        </p>
                    </div>
                </div>
                <div class="post-text">
                    <h1><?= get_the_title() ?></h1>

                    <p class="author">Autor: <?= get_the_author_meta('display_name', $post->post_author) ?></p>

                    <?= the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= get_footer() ?>