<?= get_header() ?>

<section class="image">
    <span class="overlay"></span>
</section>

<section class="cards">
    <div class="container pb-5">
        <h1 class="text-white">Portal do cliente</h1>
        <div class="row mt-5">
            <?php
            $args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'order_by'        => 'ID',
                'order'          => 'ASC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                $onde_estamos_case = '';
                while ($query->have_posts()) : $query->the_post();
                    $imagem = get_the_post_thumbnail_url(get_the_ID());
            ?>
                    <div class="col-lg-4 pb-3">
                        <div class="card">
                            <div class="image" style="background:url('<?= $imagem ?>') no-repeat top center; background-size: cover;"></div>
                            <div class="badge">
                                <?= get_the_category(get_the_ID())[0]->name ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= get_the_title() ?></h5>
                                <div class="card-text">
                                    <?= the_excerpt() ?>
                                </div>
                                <a href="<?= get_permalink() ?>" class="d-flex align-items-center gap-1 mt-5">
                                    Leia mais
                                    <i class="bx bx-chevrons-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            }
            ?>
            <!-- <div class="col-lg-4 pb-3">
                <div class="card">
                    <div class="image"></div>
                    <div class="badge">TEXTO BADGE</div>
                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nam condimentum fermentum
                            odio vitae gravida. Nam malesuada elit
                            ipsum, in pretium mi tincidunt vitae.
                            Maecenas accumsan orci quis dignissim
                            dapibus. Phasellus orci erat, suscipit sit
                            amet scelerisque vitae, sagittis at augue.
                            Suspendisse eu tellus ac lacus consequat
                            euismod.
                        </p>
                        <a href="#" class="d-flex align-items-center gap-1 mt-5">
                            Leia mais
                            <i class="bx bx-chevrons-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-3">
                <div class="card">
                    <div class="image"></div>
                    <div class="badge">TEXTO BADGE</div>
                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nam condimentum fermentum
                            odio vitae gravida. Nam malesuada elit
                            ipsum, in pretium mi tincidunt vitae.
                            Maecenas accumsan orci quis dignissim
                            dapibus. Phasellus orci erat, suscipit sit
                            amet scelerisque vitae, sagittis at augue.
                            Suspendisse eu tellus ac lacus consequat
                            euismod.
                        </p>
                        <a href="#" class="d-flex align-items-center gap-1 mt-5">
                            Leia mais
                            <i class="bx bx-chevrons-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-3">
                <div class="card">
                    <div class="image"></div>
                    <div class="badge">TEXTO BADGE</div>
                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nam condimentum fermentum
                            odio vitae gravida. Nam malesuada elit
                            ipsum, in pretium mi tincidunt vitae.
                            Maecenas accumsan orci quis dignissim
                            dapibus. Phasellus orci erat, suscipit sit
                            amet scelerisque vitae, sagittis at augue.
                            Suspendisse eu tellus ac lacus consequat
                            euismod.
                        </p>
                        <a href="#" class="d-flex align-items-center gap-1 mt-5">
                            Leia mais
                            <i class="bx bx-chevrons-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-3">
                <div class="card">
                    <div class="image"></div>
                    <div class="badge">TEXTO BADGE</div>
                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nam condimentum fermentum
                            odio vitae gravida. Nam malesuada elit
                            ipsum, in pretium mi tincidunt vitae.
                            Maecenas accumsan orci quis dignissim
                            dapibus. Phasellus orci erat, suscipit sit
                            amet scelerisque vitae, sagittis at augue.
                            Suspendisse eu tellus ac lacus consequat
                            euismod.
                        </p>
                        <a href="#" class="d-flex align-items-center gap-1 mt-5">
                            Leia mais
                            <i class="bx bx-chevrons-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-3">
                <div class="card">
                    <div class="image"></div>
                    <div class="badge">TEXTO BADGE</div>
                    <div class="card-body">
                        <h5 class="card-title">Título</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Nam condimentum fermentum
                            odio vitae gravida. Nam malesuada elit
                            ipsum, in pretium mi tincidunt vitae.
                            Maecenas accumsan orci quis dignissim
                            dapibus. Phasellus orci erat, suscipit sit
                            amet scelerisque vitae, sagittis at augue.
                            Suspendisse eu tellus ac lacus consequat
                            euismod.
                        </p>
                        <a href="#" class="d-flex align-items-center gap-1 mt-5">
                            Leia mais
                            <i class="bx bx-chevrons-right"></i>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>


<?= get_footer() ?>