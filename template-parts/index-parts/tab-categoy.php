<!--- Start Tab Category --->
<div class="categories-tab">
    <!-- Start Tab Menu --->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link text-capitalize" id="world-tab" data-toggle="tab" href="#world" role="tab" aria-controls="world" aria-selected="false">world</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize" id="tech-tab" data-toggle="tab" href="#tech" role="tab" aria-controls="tech" aria-selected="false">tech</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize active" id="popular-post-tab" data-toggle="tab" href="#popular-post" role="tab" aria-controls="popular-post" aria-selected="true">popular</a>
      </li>
    </ul>
    <!-- End Tab Menu --->
    <!-- Start Tab content --->
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade" id="world" role="tabpanel" aria-labelledby="world-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat', 'world');?>
      </div>

      <div class="tab-pane fade" id="tech" role="tabpanel" aria-labelledby="tech-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','tech');?>
      </div>
      <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','gallery');?>
      </div>
      <div class="tab-pane fade show active" id="popular-post" role="tabpanel" aria-labelledby="popular-post-tab">
        <?php get_template_part( 'template-parts/index-parts/tab-post/cat','popular-post');?>
      </div>

    </div><!-- End Tab content --->
</div><!--- End Tab Category --->
