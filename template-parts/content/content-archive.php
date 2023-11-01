<!-- BLOG POST -->
    <div class="blog-3-post masonry-image">

      <!-- BLOG POST IMAGE -->
      <div class="blog-post-img">
        <div class="hover-overlay"> 
          <img class="img-fluid" src="images/blog/post-1-img.jpg" alt="blog-post-image" />
          <div class="item-overlay"></div>
        </div>
      </div>

      <!-- BLOG POST TEXT -->
      <div class="blog-post-txt">

        <!-- Post Tag -->
        <p class="p-md post-tag">OLMO News &ensp;|&ensp; <?php the_date(); ?></p>  

        <!-- Post Link -->
        <h5 class="h5-md">
          <a class="link-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?>
        </h5>

        <!-- Post Meta -->
        <div class="post-meta"><p class="p-md"><?php comments_number(); ?> Comments</p></div> 

      </div>  <!-- END BLOG POST TEXT -->

    </div>  <!-- END BLOG POST -->