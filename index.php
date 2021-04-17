<?php
    require_once 'header.php';
    $social = "SELECT * FROM socials WHERE status = 'active'";
    $social_query =mysqli_query($db, $social); 
    
    $settings = "SELECT * FROM settings WHERE status = 1";
    $settings_query =mysqli_query($db, $settings);
    // $settings_assoc = mysqli_fetch_assoc($settings_query);
    
    $services = "SELECT * FROM services WHERE status = 1";
    $services_query =mysqli_query($db, $services); 
    
    $educations = "SELECT * FROM educations WHERE status = 1 ORDER BY year DESC";
    $education_query =mysqli_query($db, $educations); 
    
    $counters = "SELECT * FROM counters";
    $counter_query =mysqli_query($db, $counters);
    
    $testimonials = "SELECT * FROM testimonials";
    $testimonial_query =mysqli_query($db, $testimonials);

    $portfolios = "SELECT * FROM portfolios WHERE status = 1 ";
    $portfolios_query =mysqli_query($db, $portfolios); 
    
    $partners = "SELECT * FROM partners";
    $partners_query =mysqli_query($db, $partners);
    
?>

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will Smith</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will Smith, professional web developer with long time experience in this field​.</p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        
                                        <?php
                                            foreach ($social_query as $key => $value) :?>
                                                <li><a target="_blank" href="<?= $value['link']?>"><i class="<?= $value['icon']?>"></i></a></li>
                                           <?php endforeach ?>
                                        
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="front/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="front/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="front/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>ABOUT ME</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                                    quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                                    blanditiis culpa vitae velit. Numquam!</p>
                                <h3>Education:</h3>
                            </div>
                            <?php
                                foreach ($education_query as $key => $value) : ?>
                                    <!-- Education Item -->
                                        <div class="education">
                                            <div class="year"><?=$value['year']?></div>
                                            <div class="line"></div>
                                            <div class="location">
                                                <span><?=$value['tittle']?></span>
                                                <div class="progressWrapper">
                                                    <div class="progress">
                                                        <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$value['progress']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- End Education Item -->
                                <?php endforeach ?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                    <?php foreach ($services_query as $key => $value) :?>
                        <div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $value['icon']?>"></i>
								<h3><?= $value['name']?></h3>
								<p><?= $value['summary']?></p>
							</div>
						</div>
                    <?php endforeach ?>
						
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <?php foreach ($portfolios_query as $key => $portfolios) : ?>
                            <div class="col-lg-4 col-md-6 pitem">
                                <div class="speaker-box">
                                    <div class="speaker-thumb">
                                        <img src="dashboard/upload/thumbnail/<?= $portfolios['thumbnail']?>" alt="img">
                                    </div>
                                    <div class="speaker-overlay">
                                        <span><?= $portfolios['category']?></span>
                                        <h4><a href="portfolio-single.html"><?= $portfolios['tittle']?></a></h4>
                                        <a href="portfolio-single.php?id=<?= $portfolios['id']?>" class="arrow-btn">More information <span></span></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                        

                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                    
                        <div class="row justify-content-between">
                        <?php foreach ($counter_query as $key => $counters) : ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $counters['icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $counters['number']?></span></h2>
                                        <span><?= $counters['name']?></span>
                                    </div>
                                </div>
                            </div>
                        
                        <?php endforeach?>
                            
                    </div>   
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="section-title text-center mb-70">
                                    <span>testimonial</span>
                                    <h2>happy costomer qoutes</h2>
                                </div>
                            </div>
                    </div>
                    <div class="row justify-content-center">
                            <div class="col-xl-9 col-lg-10">
                                <div class="testimonial-active">
                                    <?php foreach ($testimonial_query as $key => $testimonials) : ?>
                                            <div class="single-testimonial text-center">
                                                <div class="testi-avatar">
                                                    <img width="100" height="100" style="border-radius:50%;" src="dashboard/upload/testimonial_image/<?= $testimonials['test_img']?>">
                                                </div>
                                                <div class="testi-content">
                                                    <h4><span>“</span><?= $testimonials['paragraph']?><span>”</span></h4>
                                                    <div class="testi-avatar-info">
                                                        <h5><?= $testimonials['name']?></h5>
                                                        <span><?= $testimonials['position']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                         
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php foreach ($partners_query as $key => $partners): ?>
                            <div class="col-xl-2">
                                <div class="single-brand">
                                    <img width="50" src="dashboard/upload/partner_logo/<?= $partners['logo']?>" alt="img">
                                </div>
                            </div>
                        <?php endforeach ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img05.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New York</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="contact-post.php" method="post">
                                    <input name="name" type="text" placeholder="your name *">
                                    <input name="email" type="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

<?php
    require_once 'footer.php';
?>