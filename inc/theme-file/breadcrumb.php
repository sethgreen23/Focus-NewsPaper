<?php $all_cates = get_the_category(); ?>
<div class="container breadcrumb-post">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo get_home_url() ?>"> 
                    <i class="fas fa-house-damage"></i>
                </a>
            </li>
            <li class="breadcrumb-item text-capitalize">
                <a href="<?php echo get_category_link($all_cates[0]->term_id)?>">
                    <?php echo $all_cates[0]->name?>
                </a>
            </li>
            <li class="breadcrumb-item text-capitalize active" aria-current="page">
                <?php echo get_the_title()?>
            </li>
        </ol>
    </nav>
</div>