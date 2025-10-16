<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php wp_head(); ?>
    </head>

    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>Readova</span>
                    </a>
                    <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Author</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">The Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span>Download</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="hero-section" id="section_1">
                <div class="container text-lg-end text-center">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/education-online-books.png" class="hero-floating-image img-fluid" alt="education online books">
                        </div>
                        <div class="col-lg-6 col-12 mt-lg-4">
                            <h1 class="">Welcome to the hero’s space</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, ratione.</p>
                            <div>
                                <a href="#section_2" class="btn custom-btn btn-lg smoothscroll me-2">Explore More</a>
                                <a href="#section_3" class="btn custom-btn custom-border-btn smoothscroll">Meet the Author</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="diagonal-section">
                <svg class="diagonal-bg" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="0,0 100,0 100,42.265 0,100" />
                </svg>
            </section>

            <section id="bestseller" class="py-5">
                <div class="container text-center">
                    <div class="row justify-content-center mb-2">
                        <div class="col-12 col-lg-4">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/images/NYT_bestseller_badge.png"
                                    alt="bestseller badge"
                                    class="img-fluid bestseller-img"
                            >
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <blockquote class="initial-blockquote mb-0">
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Kengan omeg kohm tokito.”
                            </blockquote>
                            <p class="mb-0">-- John Doe</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>A little bit of history</h6>

                                <h2 class="mb-4">Why I decided to write this book?</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est natus sapiente sit? Adipisci, amet, animi aperiam autem beatae dolores earum enim eos, in laboriosam laborum laudantium nulla numquam quia reprehenderit..</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/ebook.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <h6>A sneak peak?</h6>
                            <h2 class="mb-5">Quick Preview</h2>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                                <div class="scrollspy-example-item" id="item-1">
                                    <h5>Introduction</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, omnis.</p>

                                    <p><strong>Lorem ipsum dolor sit amet?</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                    <blockquote class="blockquote">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</blockquote>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores officiis quos sint voluptate voluptatibus.</p>

                                </div>

                                <div class="scrollspy-example-item" id="item-2">
                                    <h5>How to manage your time</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci.</p>

                                    <div class="row">
                                        <div class="col-lg-12 col-12 mb-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/girl-reading.jpg" class="scrollspy-example-item-image img-fluid" alt="">
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                </div>

                                <div class="scrollspy-example-item" id="item-3">
                                    <h5>Pradigm Shift</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

                                    <p>Lorem ipsum dolor sit amet, consive adipisicing elit, sed do eiusmod. tempor incididunt ut labore.</p>

                                    <img src="<?php echo get_template_directory_uri(); ?>/images/typewriter-illustration.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="">


                                </div>

                                <div class="scrollspy-example-item" id="item-4">
                                    <h5>Time Management Matrix</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <p>Lorem ipsum dolor sit amet, consive adipisicing elit, sed do eiusmod. tempor incididunt ut labore.</p>

                                    <img src="<?php echo get_template_directory_uri(); ?>/images/pattern.jpg" class="scrollspy-example-item-image img-fluid mb-3" alt="">
                                </div>

                                <div class="scrollspy-example-item" id="item-5">
                                    <h5>Micro Habits</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                    <blockquote class="blockquote">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</blockquote>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <nav class="timeline-container">
                                <nav class="nav-pills timeline">
                                    <a class="nav-link smoothscroll" href="#item-1">Introduction</a>
                                    <a class="nav-link smoothscroll" href="#item-2">Chapter 1: <strong>How to manage your time</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-3">Chapter 2: <strong>Paradigm Shift</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-4">Chapter 3: <strong>Time Management Matrix</strong></a>
                                    <a class="nav-link smoothscroll" href="#item-5">Chapter 4: <strong>Micro Habits</strong></a>
                                </nav>
                            </nav>
                        </div>
                    </div>

                </div>
            </section>

            <section class="author-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/male-writer.jpg" class="author-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h6>Meet The Author</h6>

                            <h2 class="mb-4">James Smith</h2>

                            <p>Lorem ipsum dolor sit amet, consive adipisicing elit, sed do eiusmod. tempor incididunt ut labore.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>Testimonials</h6>

                            <h2>What others say</h2>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/john.jpg" class="avatar  rounded-circle mb-3" alt="Client Avatar">
                                    <h5 class="card-title">John Doe</h5>
                                    <p class="card-text text-muted">CEO, Company Inc.</p>
                                    <p class="card-text truncate-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed
                                        dapibus leo nec ornare diam."</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/christina.jpg" class="avatar rounded-circle mb-3" alt="Client Avatar">
                                    <h5 class="card-title">Jane Smith</h5>
                                    <p class="card-text text-muted">Marketing Director, Agency XYZ</p>
                                    <p class="card-text truncate-3">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium."</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/steven.jpg" class="avatar rounded-circle mb-3" alt="Client Avatar">
                                    <h5 class="card-title">Mike Johnson</h5>
                                    <p class="card-text text-muted">Freelance Designer</p>
                                    <p class="card-text truncate-3">"At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium voluptatum."</p>
                                    <div class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center text-center">
                            <div class="">
                                <div class="text-center py-5 px-4">
                                    <h6 class="mb-2">Let's get in touch</h6>
                                    <h2 class="mb-4">Contact</h2>

                                    <div class="contact-details">
                                        <p class="mb-3">
                                            <i class="bi bi-geo-alt-fill me-2"></i>
                                            Berlin, Germany
                                        </p>
                                        <p class="mb-2">
                                            <i class="bi bi-telephone-fill me-2"></i>
                                            <a href="tel:012-345-678" class="contact-link">012-345-678</a>
                                        </p>
                                        <p>
                                            <i class="bi bi-envelope-fill me-2"></i>
                                            <a href="mailto:info@author.com" class="contact-link">
                                                info@author.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <h6 class="site-footer-title mt-1 mb-3">Find us on</h6>
                                <ul class="social-icon mb-4">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p class="copyright-text">Copyright © 2025
                                    <br><br><a rel="nofollow" href="#" target="_blank">Readova</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form ebook-download-form bg-secondary-custom shadow" action="#" method="post" role="form">
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Get the ebook</h2>
                                </div>

                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <input type="text" name="ebook-form-name" id="ebook-form-name" class="form-control" aria-label="ebook-form-name" aria-describedby="basic-addon1" placeholder="Your Name" required>

                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-person"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" name="ebook-email" id="ebook-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@company.com" aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">

                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="custom-form-icon bi-envelope"></i>
                                        </span>
                                    </div>

                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Download</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>