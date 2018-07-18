<!DOCTYPE html>

<?php
 
require_once('inc/init.php');
if(logged_in() === false){
    header('Location:/maintenance');
}
require_once('header.php');?>
<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(uploads/images/test1.jpg);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1>blog timeline left sidebar</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="/index.php"><i class="fa fa-home"></i> Блог</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Blog</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>blog timeline left sidebar</span> </li>
       </ul>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
timeline -->

<section class="white-bg blog timeline-sidebar page-section-ptb">
 <div class="container">
   <div class="row">
       <div class="col-lg-3 col-md-3">
          <div class="sidebar-widget">
            <h6 class="mb-20">Търсене</h6>
              <div class="widget-search">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Търсене...." />
                </div>
          </div>
          <div class="sidebar-widget">
             <h6 class="mt-40 mb-20">About the blog</h6>
             <p>We are the <strong> webster </strong> dolor sit ametthis exercise Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br/> <br/>
              Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh  Aenean sollicitudin, </p>
          </div>
        <div class="sidebar-widget">
            <h6 class="mt-40 mb-20">Recent Posts </h6>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-responsive" src="images/blog/01.jpg" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a> 
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
             </div>
            </div>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-responsive" src="images/blog/02.jpg" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a> 
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
             </div>
            </div>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-responsive" src="images/blog/03.jpg" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a> 
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
             </div>
            </div>
        </div> 
        <div class="sidebar-widget clearfix">
          <h6 class="mt-40 mb-20">Archives</h6>
          <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> August 2018</a></li>
          </ul>
      </div>
      <div class="sidebar-widget">
       <h6 class="mt-40 mb-20">Tags</h6>
        <div class="widget-tags">
         <ul>
          <li><a href="#">Bootstrap</a></li>
          <li><a href="#">HTML5</a></li>
          <li><a href="#">Wordpress</a></li>
          <li><a href="#">CSS3</a></li>
          <li><a href="#">Creative</a></li>
          <li><a href="#">Multipurpose</a></li>
          <li><a href="#">Bootstrap</a></li>
          <li><a href="#">HTML5</a></li>
          <li><a href="#">Wordpress</a></li>
        </ul>
      </div>
     </div>
      <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">Meta</h6>
          <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Log in</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Entries RSS</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Comments RSS </a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> WordPress.org</a></li>
          </ul>
      </div>
      <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Testimonials</h6>
         <div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
             <div class="item">
               <div class="testimonial-widget">
                 <div class="testimonial-content">
                   <p>Webster provide me consectetur adipisicing elit. Voluptatum dignissimos amet numquam at est eum libero repellat reiciendis! Accusamus quibusdam.</p>
                 </div>
                 <div class="testimonial-info mt-20">
                   <div class="testimonial-avtar">
                     <img class="img-responsive" src="images/team/01.jpg" alt="">
                   </div>
                   <div class="testimonial-name">
                     <strong>Michael Bean</strong>
                     <span>Project Manager</span>
                   </div>
                 </div>
               </div>
             </div>
             <div class="item">
               <div class="testimonial-widget">
                 <div class="testimonial-content">
                   <p>I am happy with webster service adipisicing elit. Voluptatum dignissimos amet libero repellat reiciendis! Accusamus quibusdam numquam at est eum. </p>
                 </div>
                 <div class="testimonial-info mt-20">
                   <div class="testimonial-avtar">
                     <img class="img-responsive" src="images/team/01.jpg" alt="">
                   </div>
                   <div class="testimonial-name">
                     <strong>Paul Flavius</strong>
                     <span>Design</span>
                   </div>
                 </div>
               </div>
             </div>
          </div>
      </div>    
      <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Quick contact</h6>
          <form class="gray-form">
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputphone" placeholder="Email">
              </div>
         
              <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="message"></textarea>
              </div>
             <a class="button" href="#">Submit</a> 
          </form>
      </div> 
       <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Photo gallery</h6>
          <div class="widget-gallery popup-gallery clearfix">
            <ul>
              <li>      
                <a class="portfolio-img" href="images/portfolio/small/01.jpg">
                    <img class="img-responsive" src="images/portfolio/small/01.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/02.jpg">
                    <img class="img-responsive" src="images/portfolio/small/02.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/03.jpg">
                    <img class="img-responsive" src="images/portfolio/small/03.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/04.gif">
                    <img class="img-responsive" src="images/portfolio/small/04.gif" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/05.jpg">
                    <img class="img-responsive" src="images/portfolio/small/05.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/06.jpg">
                    <img class="img-responsive" src="images/portfolio/small/06.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/07.jpg">
                    <img class="img-responsive" src="images/portfolio/small/07.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/08.gif">
                    <img class="img-responsive" src="images/portfolio/small/08.gif" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/09.jpg">
                    <img class="img-responsive" src="images/portfolio/small/09.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/10.jpg">
                    <img class="img-responsive" src="images/portfolio/small/10.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/01.jpg">
                    <img class="img-responsive" src="images/portfolio/small/01.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/02.jpg">
                    <img class="img-responsive" src="images/portfolio/small/02.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/03.jpg">
                    <img class="img-responsive" src="images/portfolio/small/03.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/04.gif">
                    <img class="img-responsive" src="images/portfolio/small/04.gif" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/05.jpg">
                    <img class="img-responsive" src="images/portfolio/small/05.jpg" alt="" >
                  </a>
             </li>
             <li>      
                <a class="portfolio-img" href="images/portfolio/small/06.jpg">
                    <img class="img-responsive" src="images/portfolio/small/06.jpg" alt="" >
                  </a>
             </li>
            </ul>
          </div>
       </div>
        <div class="sidebar-widget">
         <h6 class="mt-40 mb-20">Newsletter</h6>
          <div class="widget-newsletter">
          <div class="newsletter-icon">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="newsletter-content">
            <i>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter. </i>
          </div>
          <div class="newsletter-form mt-20">
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Name">
              </div>
             <a class="button btn-block" href="#">Submit</a> 
          </div>
        </div>
       </div>
       <div class="sidebar-widget mb-80">
         <h6 class="mt-40 mb-20">Our clients</h6>
          <div class="widget-clients">
            <div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
              <div class="item">
                <img class="img-responsive center-block" src="images/clients/01.png" alt="">
              </div>
              <div class="item">
                <img class="img-responsive center-block" src="images/clients/02.png" alt="">
              </div>
              <div class="item">
                <img class="img-responsive center-block" src="images/clients/03.png" alt="">
              </div>
              <div class="item">
                <img class="img-responsive center-block" src="images/clients/04.png" alt="">
              </div>
            </div>
        </div>
       </div>   
   </div>
<!-- ================================= -->
 <div class="col-lg-9 col-md-9"> 
    <ul class="timeline">
       <li class="entry-date"> <span> October 2017 </span></li> 
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>13 <span>Oct</span></a></div>
          <div class="timeline-panel">
           <div class="blog-entry">
          <div class="entry-image clearfix">
              <img class="img-responsive" src="images/blog/01.jpg" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost With Image</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
          </div>
        </li>
 <!-- =========================================== -->
        <li class="timeline-inverted">
         <div class="timeline-badge primary"><a>22 <span>Sep</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
          <div class="entry-image clearfix">
            <div class="owl-carousel bottom-left-dots" data-nav-dots="ture" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
              <div class="item">
                <img class="img-responsive" src="images/blog/02.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive" src="images/blog/03.jpg" alt="">
              </div>
              <div class="item">
                <img class="img-responsive" src="images/blog/04.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost With slider</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident lorem.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
          </div>
        </li>
 <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>29 <span>Aug</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
          <div class="blog-entry-html-video clearfix">
            <video style="width:100%;height:100%;" id="player1" poster="video/video.jpg" controls preload="none">
              <source type="video/mp4" src="video/video.mp4" />
              <source type="video/webm" src="video/video.webm" />
              <source type="video/ogg" src="video/video.ogv" />
            </video>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost with Self Hosted Video (HTML5 Video)</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
       </div>
      </li>
 <!-- =========================================== -->
        <li  class="timeline-inverted">
          <div class="timeline-badge primary"><a>17 <span>Jul</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
           <div class="blog-entry-audio audio-video">
            <audio id="player2" src="video/audio.mp3"> </audio>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost with Audio</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
       </div>
     </li>

     <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>15 <span>Jun</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
            <div class="entry-soundcloud">
                    <iframe style="height: 300px; width: 100%;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                  </div>
              <div class="blog-detail">
                  <div class="entry-title mb-10">
                      <a href="#">Blogpost Audio Soundcloud</a>
                  </div>
                  <div class="entry-meta mb-10">
                      <ul>
                          <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                          <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                          <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                      </ul>
                  </div>
                  <div class="entry-content">
                      <p>Provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! Consectetur, assumenda A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div class="entry-share clearfix">
                      <div class="entry-button">
                          <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                      </div>
                      <div class="social list-style-none pull-right">
                          <strong>Share : </strong>
                          <ul>
                              <li>
                                  <a href="#"> <i class="fa fa-facebook"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-twitter"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-dribbble"></i> </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
           </div>
          </div>
        </li>
 <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>23 <span>May</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
           <div class="clearfix">
            <ul class="grid-post">
                 <li>
                  <div class="portfolio-item">
                    <img class="img-responsive" src="images/blog/05.jpg" alt="">
                     </div>
                  </li>
                 <li>
                  <div class="portfolio-item">
                    <img class="img-responsive" src="images/blog/06.jpg" alt="">
                     </div>
                  </li>
                  <li>
                  <div class="portfolio-item">
                     <img class="img-responsive" src="images/blog/07.jpg" alt="">
                     </div>
                  </li>
                  <li>
                  <div class="portfolio-item">
                    <img class="img-responsive" src="images/blog/08.jpg" alt="">
                     </div>
                  </li>
              </ul>
            </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost With Image Grid Gallery Format </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
        </div>
      </li>
 <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>09 <span>Apr</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
            <div class="blog-entry-you-tube">
               <div class="js-video [youtube, widescreen]">
                <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
              </div>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost with Youtube Video </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>A ea maiores corporis consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil!. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
        </div>
       </li>
 <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>06 <span>Mar</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
            <div class="blog-entry-vimeo">
             <div class="js-video [vimeo, widescreen]">
              <iframe src="https://player.vimeo.com/video/176916362"></iframe>
             </div>
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost with vimeo Video </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
        </div>
      </li>
 <!-- =========================================== -->
         <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>02 <span>Fed</span></a></div>
          <div class="timeline-panel">
           <div class="blog-entry blockquote">
          <div class="entry-blockquote clearfix">
              <blockquote class="mt-60 ">
                  The trouble with programmers is that you can never tell what a programmer is doing until it's too late. The future belongs to a different kind of person with a different kind of mind: artists, inventors, storytellers-creative and holistic ‘right-brain’ thinkers whose abilities mark the fault line between who gets ahead and who doesn’t.
                  <cite class="text-white"> – Daniel Pink</cite>
              </blockquote>
          </div>
          <div class="blog-detail mt-30">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost With blockquote </a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-share mt-20 clearfix">
                  <div class="entry-button">
                      <a class="button arrow white" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong class="text-white">Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
      </div>
     </li>
 <!-- =========================================== -->
        <li class="timeline-inverted">
          <div class="timeline-badge primary"><a>19 <span>jan</span></a></div>
          <div class="timeline-panel">
            <div class="blog-entry">
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#">Blogpost Without Image</a>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>Hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button">
                      <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
                  <div class="social list-style-none pull-right">
                      <strong>Share : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-dribbble"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
       </div>
    </li>
 <!-- =========================================== -->
        <li class="entry-date-bottom"> <a href="#">Load more...</a></li> 
 <!-- =========================================== -->
        <li class="clearfix timeline-inverted" style="float: none;"></li>
    </ul>
   </div>
  </div>
</div>  
</section>

<!--=================================
timeline -->
 
 
<!--=================================
action box- -->

<section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
        <a class="button border white" href="#">
          <span>Purchase Now</span>
          <i class="fa fa-download"></i>
       </a> 
    </div>
  </div>
 </div>
</section>
 
<!--=================================
action box- -->
 
 
<!--=================================
 footer -->
 
<footer class="footer page-section-pt black-bg">
 <div class="container">
  <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-6 xs-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Team</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6 xs-mb-30">
      <div class="footer-useful-link footer-hedding">
        <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
        <ul>
          <li><a href="#">Create Account</a></li>
          <li><a href="#">Company Philosophy</a></li>
          <li><a href="#">Corporate Culture</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Client Management</a></li>
        </ul>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 xs-mb-30">
    <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
    <ul class="addresss-info"> 
        <li><i class="fa fa-map-marker"></i> <p>Address: 17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p> </li>
        <li><i class="fa fa-phone"></i> <a href="tel:7042791249"> <span>+(704) 279-1249 </span> </a> </li>
        <li><i class="fa fa-envelope-o"></i>Email: letstalk@webster.com</li>
      </ul>
    </div>
<div class="col-lg-4 col-md-4 col-sm-6">
<h6 class="text-white mb-30 mt-10 text-uppercase">Subscribe to Our Newsletter</h6>
<p>Sign Up to our Newsletter to get the latest news and offers.</p>
<div class="footer-Newsletter">
          <div id="mc_embed_signup_scroll">
            <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
             <div id="msg"> </div>                 
              <div id="mc_embed_signup_scroll_2">
                <input id="mce-EMAIL" class="form-control" type="text" placeholder="Email address" name="email1" value="">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                </div>
                <div class="clear">
                  <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button border mt-20 form-button">  Get notified </button>
                </div>
              </form>
            </div>
            </div>
            </div>
   </div>
     <div class="footer-widget mt-20">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 xs-mb-20">
      <p class="mt-15">&copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 text-right xs-text-left">
        <div class="footer-widget-social">
         <ul> 
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i> </a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i> </a></li>
         </ul>
       </div>
      </div>
    </div>    
  </div>
  </div>
</footer>

<!--=================================
 footer -->

</div>
 
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

 
</body>
</html>