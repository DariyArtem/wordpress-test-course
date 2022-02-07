<?php get_header() ?>
<?php get_post() ?>
    <div class="content-outer">
        <div id="page-content" class="row">

            <div id="primary" class="eight columns">
               <?php get_template_part('post-templates/post', get_post_format())?>
            </div>
        </div>
    </div>

<?php get_footer() ?>