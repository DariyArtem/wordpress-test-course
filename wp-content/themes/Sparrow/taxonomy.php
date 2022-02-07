<?php
/*
 Template Name: Portfolio
 * */
?>
<?php get_header() ?>

<!-- Page Title
================================================== -->
<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
        </div>

    </div>

</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">

    <div id="page-content" class="row portfolio">

        <section class="entry cf">

            <div id="secondary" class="four columns entry-details">

                <h1>Our Portfolio.</h1>

                <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                    auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                    cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                    ornare odio.</p>

            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">
                <?php if (have_posts()):while (have_posts()): the_post();?>
                    <div id="portfolio-wrapper" class="bgrid-halves cf">
                        <div class="columns portfolio-item">
                            <div class="item-wrap">
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail();?>
                                    <div class="overlay"></div>
                                    <div class="link-icon"><i class="fa fa-link"></i></div>
                                </a>
                                <div class="portfolio-item-meta">
                                    <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                    <p><?php the_excerpt();?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endwhile;?>
                <?php else:?>
                <p>No posts in cycle</p>
                <?endif;?>
            </div>
        </section>
    </div>
</div>


<?php get_footer() ?>
