<!--- Start Tab Category --->
<div class="categories-tab">
    <!-- Start Tab Menu --->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link text-capitalize active" id="fitness-tab" data-toggle="tab" href="#fitness" role="tab" aria-controls="fitness" aria-selected="true">fitness</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-capitalize" id="food-tab" data-toggle="tab" href="#food" role="tab" aria-controls="food" aria-selected="false">food</a>
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

      <div class="tab-pane fade show active" id="fitness" role="tabpanel" aria-labelledby="fitness-tab">
        <?php get_template_part( 'template-parts/index-parts/tab-post/cat','fitness');?>
      </div>

      <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
          <?php get_template_part( 'template-parts/index-parts/tab-post/cat','food');?>
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

// Show In Tab Post Format Img & Gallery & quate & Video
