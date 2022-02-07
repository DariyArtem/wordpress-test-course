<article class="post">
    <div class="entry-header cf">
        <h1><a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a></h1>
        <p class="post-meta">
            <span class="categories"><?php the_tags(null, '/'); ?></span>
        </p>
    </div>
    <div class="post-content">
        <?php the_excerpt(); ?>
    </div>
</article>