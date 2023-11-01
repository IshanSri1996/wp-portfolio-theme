<?php
get_header();
?>
      <!-- BLOG POSTS LISTING
      ============================================= -->
      <section id="blog-page" class="bg-snow wide-50 inner-page-hero blog-page-section division">
        <div class="container">


          <!-- SECTION TITLE -->  
          <div class="row justify-content-center">  
            <div class="col-md-10 col-lg-8">
              <div class="section-title title-02 mb-85">  
                <h2 class="h2-xs">Relevant news and more for you. Welcome to our blog</h2>
              </div>  
            </div>
          </div>


          <!-- FEATURED POST -->
          <div class="rel blog-post-wide featured-post">
            <div class="row d-flex align-items-center">

              <!-- Featured Badge -->
              <div class="featured-badge ico-25 bg-whitesmoke yellow-color">
                <span class="flaticon-star-1"></span>
              </div>
                                    
              <!-- BLOG POST IMAGE -->
              <div class="col-lg-7 blog-post-img">
                <div class="hover-overlay"> 
                  <img class="img-fluid" src="images/blog/featured-post.jpg" alt="blog-post-image" /> 
                  <div class="item-overlay"></div>
                </div>
              </div>

              <!-- BLOG POST TEXT -->
              <div class="col-lg-5 blog-post-txt">

                <!-- Post Tag -->

                <!-- Post Link -->
                <h5 class="h5-xl">
                  <a href="single-post.html">Tempor sapien donec gravida a suscipit and porta justo vitae</a>
                </h5>

                <!-- Text -->
                <p class="p-lg">Aliqum mullam blandit vitae tempor sapien and donec lipsum gravida and porta 
                   undo velna dolor in cubilia...
                </p>

                <!-- Post Meta -->
                <div class="post-meta"><p class="p-md">38 Comments</p></div>  

              </div>  <!-- END BLOG POST TEXT -->

            </div>   <!-- End row -->
          </div>  <!-- END FEATURED POST -->


          <!-- POSTS WRAPPER -->
          <div class="posts-wrapper">


            <!-- BLOG POSTS CATEGORY --> 
            <div class="row">
              <div class="col-md-12">
                <h5 class="h5-lg posts-category">Latest Articles</h5>
              </div>
            </div>


            <!-- BLOG POSTS -->
            <div class="row"> 
              <div class="col gallery-items-list">
                <div class="masonry-wrap grid-loaded">


                  <?php              
                    if ( have_posts() ) {
                      // Start the Loop.
                      while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content/content-archive', get_post_format() );
                        the_posts_pagination();
                      } // End the loop.

                      // If no content, include the "No posts found" template.
                    } else {
                      get_template_part( 'template-parts/content/content-about' );
                    }
                  ?>


                </div>
              </div>
            </div>  <!-- END BLOG POSTS -->


          </div>  <!-- END POSTS WRAPPER -->


        </div>     <!-- End container -->
      </section>  <!-- END BLOG POSTS LISTING -->




      <!-- PAGE PAGINATION
      ============================================= -->
      <div class="bg-snow pb-100 page-pagination division">
        <div class="container">
          <div class="row"> 
            <div class="col-md-12">
              <nav aria-label="Page navigation example">
                <ul class="pagination ico-20 justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">
                        <span class="flaticon-back"></span>
                      </a>
                    </li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span class="flaticon-next"></span>
                      </a>
                    </li>
                </ul>
              </nav>
            </div>
          </div>  <!-- End row -->  
        </div> <!-- End container -->
      </div>  <!-- END PAGE PAGINATION -->




      <!-- NEWSLETTER-1
      ============================================= -->
      <section id="newsletter-1" class="bg-snow newsletter-section division">
        <div class="container">
          <div class="newsletter-wrapper bg-white">
            <div class="row d-flex align-items-center row-cols-1 row-cols-lg-2">


              <!-- NEWSLETTER TEXT -->  
              <div class="col">
                <div class="newsletter-txt pr-20">  
                  <h4 class="h4-xl">Stay up to date with our news, ideas and updates</h4> 
                </div>                
              </div>


              <!-- NEWSLETTER FORM -->
              <div class="col">
                <form class="newsletter-form">
                      
                  <div class="input-group">
                    <input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">               
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-md btn-skyblue tra-grey-hover">Subscribe Now</button>
                    </span>                   
                  </div>

                  <!-- Newsletter Form Notification --> 
                  <label for="s-email" class="form-notification"></label>
                        
                </form>             
              </div>    <!-- END NEWSLETTER FORM -->


            </div>    <!-- End row -->
          </div>    <!-- End newsletter-wrapper -->
        </div>     <!-- End container --> 
      </section>  <!-- END NEWSLETTER-1 -->
            
<?php
get_footer();
