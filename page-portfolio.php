<?php get_header();?>


<div class="thumb">
    <img class="thumb__img" src="<?php echo INTERNO_IMG_DIR ?>/bg-blog.jpg" alt="">
    <div class="thumb__info">
        <h2 class="title thumb__title">Portfolio</h2>
        <ul class="breadcrumbs">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li>Project</li>
        </ul>
    </div>
</div>
<div class="page">
    <div class="container">
        <div class="tabs">
            <button class="tab-link active" onclick="openTab(event, 'tab1')">Bathroom</button>
            <button class="tab-link" onclick="openTab(event, 'tab2')">Bed Room</button>
            <button class="tab-link" onclick="openTab(event, 'tab3')">Kitchen</button>
            <button class="tab-link" onclick="openTab(event, 'tab4')">Living Area</button>
        </div>
        <div id="tab1" class="tab-content" style="display: block;">
            <?php echo do_shortcode('[FinalTilesGallery id="2"]'); ?>
        </div>
        <div id="tab2" class="tab-content">
            <?php echo do_shortcode('[FinalTilesGallery id="5"]'); ?>
        </div>
        <div id="tab3" class="tab-content">
            <?php echo do_shortcode('[FinalTilesGallery id="6"]'); ?>
        </div>
        <div id="tab4" class="tab-content">
            <?php echo do_shortcode('[FinalTilesGallery id="7"]'); ?>
        </div>
    </div>
</div>

<?php get_footer();?>


