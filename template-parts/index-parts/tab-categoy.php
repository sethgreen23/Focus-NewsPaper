<!--- Start Tab Category --->
<div class="categories-tab">
    <!-- Start Tab Menu --->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link text-capitalize active" id="popular-post-tab" data-toggle="tab" href="#popular-post" role="tab" aria-controls="popular-post" aria-selected="true">popular</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">videos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-capitalize" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">movies</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-capitalize" id="series-tab" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="false">series</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-capitalize" id="top-music-tab" data-toggle="tab" href="#top-music" role="tab" aria-controls="top-music" aria-selected="false">top music</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-capitalize" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">gallery</a>
      </li>
    </ul>
    <!-- End Tab Menu --->
    <!-- Start Tab content --->
    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade show active" id="popular-post" role="tabpanel" aria-labelledby="popular-post-tab">
        <?php get_template_part( 'template-parts/index-parts/tab-post/cat','popular-post');?>
      </div>

      <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat', 'video');?>
      </div>

      <div class="tab-pane fade" id="movies" role="tabpanel" aria-labelledby="movies-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','movies');?>
      </div>

      <div class="tab-pane fade" id="series" role="tabpanel" aria-labelledby="series-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','series');?>
      </div>

      <div class="tab-pane fade" id="top-music" role="tabpanel" aria-labelledby="top-music-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','top-music');?>
      </div>

      <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','gallery');?>
      </div>

    </div><!-- End Tab content --->
</div>
<!--- End Tab Category --->

<?php

// Show In Tab Post Format Img & popular-post & quate & Video
