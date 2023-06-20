<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" >
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>
    <body>
    <?php get_header(); ?>
<!-- Deejee Home  -->
    <div class="container-fluid bgMaster">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 mt-5 p-5">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/djimg.png" class="float-end">
                </div>
                <div class="col-6 text-center mx-auto p-2">
                    <h2> Hello, I'm Dejee </h2>
                    <h1 class="fw-bold">Web Developer</h1>
                    <p>Currently available for select projects, <br>collaborations and consulting.</p>
                    <button type="button" class="btn btn-primary btn-lg rounded-pill text-uppercase fw-bold" onclick="window.location.href='#portfoliosec'">see my work</button>
                </div>
            </div>
        </div>
    </div>

<!-- Dejee Services -->
    <div class="container justi text-center">
        <div class="row g-0">
            <div class="col">
                <h5 class="text-uppercase display-5">services </h5>
            </div>
        </div>                            
        <div class="row align-items-center">
            <div class="col-sm-4">
                <div class="card p-3 mt-5 border-0">
                    <div class="card-body">
                        <i class="bi bi-paint-bucket fs-3"></i>
                        <h5 class="card-title fw-bold">WEB DESIGN </h5>
                        <i class="bi bi-dash-lg"></i>
                        <p class="card-text">Well we're movin' on up to the east <br>side. To a deluxe apartment</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="card p-3 mt-5 bg-primary border-0">
                    <div class="card-body mb-2 text-light">
                        <i class="bi bi-gem fs-3"></i>
                        <h5 class="card-title fw-bold ">MOBILE APP </h5>
                        <i class="bi bi-dash-lg"></i>
                        <p class="card-text">Tracking immunizations has never <br>been easier or more secure...</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" >
                <div class="card p-3 mt-5 border-0" >
                    <div class="card-body">
                        <i class="bi bi-magic fs-3 mt-3"></i>
                        <h5 class="card-title fw-bold text-uppercase">Branding</h5>
                        <i class="bi bi-dash-lg"></i>
                        <p class="card-text">Well we're movin' on up to the east <br>side. To a deluxe apartment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- PORTFOLIO -->
    <div class="container-port bgMaster">
        <section id="portfoliosec">
        <h3 class="display-3 text-uppercae mb-5 offset-5">Portfolio</h3>
<!-- PORTFOLIO CAROUSEL -->
        <div id="portfolio" class="carousel slide  ">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port1.png" class="carouselItemBg img-fluid">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port2.png" class="carouselItemBg img-fluid">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port3.png" class="carouselItemBg img-fluid">
                        </div>                                               
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port4.png" class="carouselItemBg">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port5.png" class="carouselItemBg">
                        </div>
                        <div class="col-sm-4">
                            <div class="card carouselCard bg-primary border-0">
                                <h5 class="card-title float-center fw-bold text-center">Branding</h5>                    
                                <p class="card-text float-center text-capitalize text-center">home decoration</p>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port5.png" class="carouselItemBg img-fluid">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port4.png" class="carouselItemBg img-fluid">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port3.png" class="carouselItemBg img-fluid">
                        </div>                                               
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port2.png" class="carouselItemBg">
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/port1.png" class="carouselItemBg">
                        </div>
                        <div class="col-sm-4">
                            <div class="card carouselCard bg-danger border-0">
                                <h5 class="card-title  fw-bold text-center">Branding</h5>                    
                                <p class="card-text  text-capitalize text-center">home decoration</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#portfolio" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#portfolio" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </section>
    </div>

<!-- HIRE ME NOW -->
    <div class="containerHire">
        <div class="row align-items-center">
            <div class="col-8 ">
                <h3 class="display-6 fw-medium">Make it awesome!</h3>
                <p class="blockquote">In an era when a multitude of corporations have entered space and built a <br> huge economic system, 
                    Suletta Mercury transfers to the Asticassia School of Technology that is run by the Beneritt Group.
                </p>
            </div>
            <div class="col-4 ">
                <button type="button" class="btn btn-outline-primary rounded-pill text-uppercase fw-bold text-capitalize float-end">hire me now!</button>
            </div>
        </div>
    </div>

<!-- Feedback -->
    <div class="containerFb bgMaster text-center">
        <h4 class="display-4 mb-5"> What clients' <br> Feedback about me</h4>
<!-- Feedback carousel -->
        <div id="feedback" class="carousel slide">
            <div class="carousel inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/fdb.png" class="mb-5">
                    <h5 class="fw-semibold">Allen Bell</h5>
                    <p class="lead mb-5">Ux Designer</p>
                    <blockquote class="blockquote">
                        <p> My name is Miguel O'Hara. I'm this dimension's one and only Spider-Man. At least I was. But I'm not like the others.
                            <br>I don't always like what I have to do. But I know I have to be the one to do it. 
                        </p>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/fdb.png" class="mb-5">
                    <h5 class="fw-semibold">Pavitr Prabhakar</h5>
                    <p class="lead mb-5">Director</p>
                    <blockquote class="blockquote">
                        <p> What did you just say? Chai tea? Chai means "tea", bro! You are saying "tea tea"! <br>
                            Would I ask you for a "coffee coffee" with room for "cream cream"?
                        </p>
                    </blockquote>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#feedback" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#feedback" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

<!-- contact forms -->
    <div class="container-fluid contactFlex bgContact">
        <h3 class="display-3 fw-medium text-center mb-5">
            Contact Me
        </h3>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <label for="name" class="form-label text-light">Name</label>
                <input type="text" class="form-control text-light" style=" border-top: none; border-left: none; border-right: none; background-color: transparent;">
            </div>
            <div class="col-md-3 ">
                <label for="name" class="form-label text-light">Email</label>
                <input type="email" class="form-control text-light" style=" border-top: none; border-left: none; border-right: none; background-color: transparent;">

            </div>
            <div class="col-md-3 ">
                <label for="name" class="form-label text-light">Phone</label>
                <input type="text" class="form-control border-bottom " style=" border-top: none; border-left: none; border-right: none; background-color: transparent;" >
            </div>    
        </div>
        <div class="row justify-content-center">
            <div class="col-9">
                <label for="name" class="form-label text-light">Message</label>
                <textarea class="form-control text-light" style=" border-top: none; border-left: none; border-right: none; background-color: transparent;"  rows="3"></textarea>
            </div>
        </div>
        <div class="row justify-content-md-center">          
            <div class="col-sm-auto mx-auto p-3 mt-5">
                <button type="button" class="btn btn-primary btn-lg text-uppercase text-capitalize">Submit</button>
            </div>         
        </div>
    </div>
    <?php get_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/bootstrap.min.js"></script>
    </body>
</html>