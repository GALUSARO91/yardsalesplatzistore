<?php
    $args = [
        'post_type' => ['producto'],
        'posts_per_page' => -1
    ];
    $products = new WP_Query($args);
?>

    <div class="productos__container">
            <?php if($products->have_posts()){?>
                <?php while($products->have_posts()){$products->the_post();?>
                <div class="productos__card">
                    <?php the_post_thumbnail('post_thumbnail');?>
                    <div class="producto__caption">
                        <div class="productos__desc">
                            <a class="producto__link" href="<?php the_permalink();?>">
                                <h4 class="productos__titulo"><?php the_title();?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>