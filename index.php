<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./assests/images/favicon.png">
    
    <title>ECLECTIC</title>

    <!-- assests css -->
    <link rel="stylesheet" href="./assests/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- video css -->
    <link href="https://unpkg.com/video.js@7/dist/video-js.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />

    <!-- owl carousel -->
    <link rel="stylesheet" href="assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">
    
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- css gallery -->
    <link rel="stylesheet" href="./assests/css/imagebox.min.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="./assests/css/style.css" />

    
</head>
<body>
    
    <!-- header -->
    <header class="container-fluid bg-light position-fixed">
        <!-- <div class="container "> -->
            <nav class="navbar navbar-light p-0">
                <a href="#" class="navbar-brand w-50 ml-md-2">
                    <img src="./assests/images/Eclectic Logo website.png" alt="logo" width="185"  />
                </a>
                <button class="navbar-toggler" id="menu_btn" type="button" data-toggle="collapse" data-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon d-block animate__animated animate__fadeIn"></span>
                    <span aria-hidden="true" class="close_icon d-none animate__animated animate__fadeIn animate__delay-1s">&times;</span>

                </button>

                <!-- menu's -->
                <div class="collapse navbar-collapse animate__animated animate__fadeIn" id="menubar">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item ml-md-4">
                            <a href="#service" class="nav-link text_color_dark">Services</a>
                        </li>
                        <li class="nav-item ml-md-4">
                            <a href="#work" class="nav-link text_color_dark">Works</a>
                        </li>
                        <li class="nav-item ml-md-4">
                            <a href="#contactus" class="nav-link text_color_dark">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- </div> -->
    </header>
    <!-- header -->

    <div class="p-4"></div>

    <!-- banner -->
    <section class="banner  mt-1">
        <div class="container-fluid p-0">
            <div class="row m-0 w-100">
                <div class="banner_content col-md-8 d-flex align-items-center pt-md-5">
                    <div class="banner_title_sec_height text_color_dark animate__animated animate__fadeIn">
                        <h1 class="banner_title font-weight-bold mt-md-5">We design the experience <br />You experience the design</h1>
                        <p class="title_desc text_color_dark text-justify mt-2 mt-md-5">We are extremly thoughtful interior design studio based on chennai. 
                            We believe that the power of art, architecture and design thinking 
                            can create pleasantness in the world. With passion and international 
                            expertise we create human-centric designs that balance creative 
                            aesthetics and functionality.</p>
                        <a href="#contactus" class="btn consult_btn btn-lg mt-md-5">Let's talk <img src="./assests/images/right_arrow_light.png" class="right_arrow_light" /> </a>
                    </div>
                </div>
                <div class="banner_image w-100 col-md-4 no-gutters p-0 d-flex justify-content-end">
                    <div class="banner_image_placeholder animate__animated animate__fadeIn">

                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- banner -->

    <!-- why us -->
    <section class="why_us">
        <div class="container">
            <div class="banner_video_section my-5">
                <div class="row no-gutters py-5">
                    <div class="banner_video col-md-6 py-2 d-flex align-items-center animate__animated animate__fadeIn">
                        <video id="my-video" class="video-js vjs-theme-city" controls  preload="auto" data-setup="{}">
                            <source src="./assests/images/eclectic kitchen & testimonial.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="banner_video_description col-md-6 py-2 px-md-5 animate__animated animate__fadeIn">
                        <h1 class="text_color_dark font-weight-bold mt-5 mt-md-0">Why Eclectic?</h1>
                        <p class="title_desc mt-3 mt-md-4 text_color_dark text-justify">We have successfully completed more than 35 projects from small scale residences to large commercial projects in last 3 years with 100% client satisfaction. Our Transparency, commitment & work ethics are our pillars of stable growth. We personally work with clients at every step to deliver a space that truly fits thier style & budget.</p>
                        <!-- <a href="#contactus" class="btn consult_btn btn-lg mt-4">Consult now  <img src="./assests/images/right_arrow_light.png" class="right_arrow_light" /></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why us -->

    <!-- services -->
    <section class="services " id="service">
        
        
        <div class="container pt-5 position-relative">
            <h1 class="section_title position-absolute font-weight-bold">Our Services</h1>
            <div class="row py-5">

                <div class="col-xs-12 py-2 px-3 mb-5 animate__animated animate__fadeIn">
                    <div class="card">
                        <div class="row no-gutters w-100 h-100">
                            <div class="col-xs-12 col-md-4 w-100 p-3">
                                <img src="./assests/images/image1.jpg" alt="card image" class="service_card_img">
                            </div>
                            <div class="col-xs-12 col-md-8">
                                <div class="card-body py-5 p-md-5">
                                    <h3 class="card-title font-weight-bold pb-3">Full service interior design</h3>
                                    <p class="card-text text_color_dark text-justify">We provide personalized turn-key service to our clients where all that???s left for the client is to make design approvals and wait for their space to be transformed. From the initial consultation to the final execution we will walk them through every step of the design process. We specialize in seamlessly transforming new homes to make it ready for occupancy or give a complete makeover to spaces including renovation. We take quality so seriously, that we only use the finest materials and finishes in all our projects.</p>
                                    <a href="#contactus" class="btn consult_btn btn-lg mt-4">Consult now  <img src="./assests/images/right_arrow_light.png" class="right_arrow_light" /></a>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-2 mb-5 animate__animated animate__fadeIn">
                    <div class="card vertical_cards">
                        <div class="row no-gutters w-100 h-100">
                            <div class="col-xs-12 w-100 p-3">
                                <img src="./assests/images/image2.jpg" alt="card image" class="service_card_img">
                            </div>
                            <div class="col-xs-12">
                                <div class="card-body py-5">
                                    <h3 class="card-title font-weight-bold pb-3">3D design</h3>
                                    <p class="card-text text_color_dark text-justify">Clients can imagine their home before they even step in! We create stunning interior concepts in 3D, using advanced technologies to give a real feel of what a completed home would look like. We take time to understand the needs of the clients and recommend the right solutions tailored to their taste by shaping our combined ideas to reality.</p>
                                    <a href="#contactus" class="btn consult_btn btn-lg mt-4">Consult now  <img src="./assests/images/right_arrow_light.png" class="right_arrow_light" /></a>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 py-2 mb-5 animate__animated animate__fadeIn">
                    <div class="card vertical_cards">
                        <div class="row no-gutters w-100 h-100">
                            <div class="col-xs-12 w-100 p-3">
                                <img src="./assests/images/image3.jpg" alt="card image" class="service_card_img">
                            </div>
                            <div class="col-xs-12">
                                <div class="card-body py-5">
                                    <h3 class="card-title font-weight-bold pb-3">Consultation</h3>
                                    <p class="card-text text_color_dark text-justify">Our version of design helpline! We keenly listen to our client???s decor dilemmas, vision for the space. We will then discuss what is working for them in each space and come up with a tailor-made solution for them.</p>
                                    <a href="#contactus" class="btn consult_btn btn-lg mt-4">Consult now  <img src="./assests/images/right_arrow_light.png" class="right_arrow_light" /></a>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        
    </section>
    <!-- services -->

    <!-- works -->
    <section class="works " id="work">
        <div class="container position-relative">
            <h1 class="section_title font-weight-bold position-absolute">Our Works</h1>
            <div class="work_carousel owl-carousel owl-theme position-relative animate__animated animate__fadeIn">
                <div class="item work_card">
                    <img src="./assests/images/1 bedroom a/Eclectic-interior-bedroom-1a-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery" />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Bedroom design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/1 bedroom a/Eclectic-interior-bedroom-1b-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery" />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Bedroom design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/1 bedroom a/Eclectic-interior-bedroom-1c-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Bedroom design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/1 bedroom a/Eclectic-interior-bedroom-1d-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Bedroom design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/1 bedroom a/Eclectic-interior-bedroom-1e-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Bedroom design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/2 kitchen a/Eclectic-interior-kitchen-design-1a-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Kitchen Renovation, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/2 kitchen a/Eclectic-interior-kitchen-design-1b-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Kitchen Renovation, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/2 kitchen a/Eclectic-interior-kitchen-design-1c-chennai.jpg" alt="" class="w-100" style="object-position: 98% 100%;" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Kitchen Renovation, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/4 kitchen b/Eclectic-interior-kitchen-design-2a-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Kitchen Renovation, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/4 kitchen b/Eclectic-interior-kitchen-design-2b-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Kitchen Renovation, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/5 kitchen d/Eclectic-interior-kitchen-design-4b-chennai.jpg" alt="" class="w-100" style="object-position: 46% 100%" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Kitchen Renovation, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/6 powder room/Eclectic-Interior-party-hall-design-chennai-interiors-b.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Powder room, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/6 powder room/Eclectic-Interior-powder-room-design-chennai-interiors-a.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Powder room, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/7 home theatre/Eclectic-interior-chennai-home-theatre-design-a.jpg" alt="" class="w-100" data-imagebox="gallery"  >/
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Home Theatre, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/7 home theatre/Eclectic-interior-chennai-home-theatre-design-b.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Home Theatre, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/8 la alegria/Eclectic-Interior-office-design-chennai-interiors-a.jpg" alt="" class="w-100" data-imagebox="gallery" />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Office Interior design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/8 la alegria/Eclectic-Interior-office-design-chennai-interiors-b.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Office Interior design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/9 restaurant/Eclectic-Interior-cornel-restaurant-design-chennai-interiors-a.jpg" alt="" class="w-100" style="object-position: 98% 100%;" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Restaurant design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/9 restaurant/Eclectic-Interior-cornel-restaurant-design-chennai-interiors-b.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Restaurant design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/9 restaurant/Eclectic-Interior-cornel-restaurant-design-chennai-interiors-c.jpg" alt="" class="w-100" style="object-position: 99% 100%;" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Restaurant design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/10 base/Eclectic-interior-cabin-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Cabin design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/10 base/Eclectic-interior-conference-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Conferance design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/10 base/Eclectic-interior-conferenceroom-design-chennai.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Conferance design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/10 base/Eclectic-interior-officelobby-design-chennai.jpg" alt="" class="w-100" style="object-position: 2% 100%;" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Office lobby design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-a.jpg" alt="" class="w-100" style="object-position: 1% 100%;" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-d.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-e.jpg" alt="" class="w-100" style="object-position: 87% 100%;" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-b.jpg" alt="" class="w-100" data-imagebox="gallery"  />
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-c.jpg" alt="" class="w-100" data-imagebox="gallery"  /> 
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div>
                <!-- <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-f.jpg" alt="" class="w-100">
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div>
                <div class="item work_card">
                    <img src="./assests/images/11 party hall/Eclectic-Interior-party-hall-design-chennai-interiors-g.jpg" alt="" class="w-100">
                    <div class="image_desc">
                        <p class="text-center text_color_dark">Party hall design, Chennai</p>
                    </div>
                </div> -->
            </div>
        </div>
        
    </section>

    <!-- works -->

    <!--testnomial  -->
    <section class="testnomial pt-5">
        <div class="container-fluid">
            <div class="row feedbackrow">
                <div class="col-xs-12 col-md-4 p-0">
                    <img src="./assests/images/image4.jpg" alt="testnomial image"  class="w-100 h-100"/>
                </div>
                <div class="col-xs-12 col-md-8 p-0 animate__animated animate__fadeIn">
                    <div class="feedback_section w-100 h-100">
                        <div class="owl-carousel owl-theme w-100 h-100 feedback_carousel position-relative d-md-flex align-items-center">
                            <div class="item px-2 py-3 py-md-5 px-md-3 mx-md-auto">
                                <p class="text-center text_color_dark">Lorem Ipsum is simply dummy text of the printing and 
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <h3 class="text-center mb-0 font-weight-bold text_color_dark">Rajesh</h3>
                                <p class="text-center text_color_dark mb-0">Chennai</p>
                            </div>
                            <div class="item px-2 py-3 py-md-5 px-md-5 mx-md-auto">
                                <p class="text-center text_color_dark">Lorem Ipsum is simply dummy text of the printing and 
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <h3 class="text-center mb-0 font-weight-bold text_color_dark">Krishnan</h3>
                                <p class="text-center text_color_dark mb-0">Chennai</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testnomial -->

    <!-- contact -->
    <section class="contact py-5 px-3 px-md-0" id="contactus">
        <div class="container my-5 animate__animated animate__fadeIn">
            <div class="row">
                <div class="col-md-6 contact_left d-flex flex-column justify-content-between p-0">
                    <h1 class="px-3 px-md-5 py-5 font-weight-bold">Let's <br/> Connect</h1>
                    <div class="contact_info px-3 px-md-5 py-5">
                        <h3 class="info_title font-weight-bold">Support</h3>
                        <p class="address mb-0 mt-4 font-weight-bold mb-0">4th Floor, Kochar Bliss, A8 & A9,<br /> Thiru Vi Ka Industrial Estate, Guindy,<br/> Chennai -600032</p>
                        <p class="mobile mb-0 mt-2 font-weight-bold">+91 89399 07815</p>
                        <p class="email font-weight-bold">eclecticinteriorchennai@gmail.com</p>
                        <div class="social_media">
                            <a href="https://www.instagram.com/eclecticinterior.in/" class="mr-2">
                                <img src="./assests/images/instagram.png" alt="instagram" />
                            </a>
                            <a href="https://www.facebook.com/Eclecticinterior.in" >
                                <img src="./assests/images/facebook.png" alt="facebook" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 contact_form">
                    <form class="px-3 px-md-5 py-5 mt-2" id="user_query_form" method="post">
                        <p class="form_submission_text animate__animated animate__fadeIn p-2 mb-5 d-none">
                            Thanks for contacting us our executives will get back to you shortly.
                        </p>
                        <div class="form-group mb-5">
                            <input type="text" class="form-control" placeholder="name" name="cpname" id="name" required/>
                            <div class="invalid-feedback">
                                Please provide a valid name.
                            </div>
                        </div>
                        <div class="form-group mb-5">
                            <input type="text" class="form-control" placeholder="mobile number" name="cpphone" id="mobile" />
                            <div class="invalid-feedback">
                                Please provide a valid mobile no.
                            </div>
                        </div>
                        <div class="form-group mb-5">
                            <input type="email" class="form-control" placeholder="email" name="cpmail" id="email" />
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                        <div class="form-group mb-5">
                            <select class="form-control" aria-label="service" id="cservice" name="cservice" required>
                                <option value=""><span>Select your Service</span></option>
                                <option value="Interior design">Interior design</option>
                                <option value="3D design">3D design</option>
                                <option value="Consultation">Consultation</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a service.
                            </div>
                        </div>
                        <div class="form-group d-md-flex justify-content-center">
                            <button type="submit" class="btn btn-lg consult_btn mt-3 no-outline" id="contact_form_submit">Submit  <img src="./assests/images/right_arrow_light.png" class="right_arrow_light" /></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- footer -->
    <footer class="d-flex align-items-center justify-content-center">
        <p class="font-weight-bold mb-0">@eclecticineterior.in All rights Reserved</p>
    </footer>
    <!-- footer -->

    <!-- jquery -->
    <script src="./assests/js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- video js -->
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

    <!-- owl carousel -->
    <script src="./assests/js/owl.carousel.min.js"></script>

    <!-- assests js -->
    <script src="./assests/js/bootstrap.min.js"></script>

    <!-- gallery -->
    <!-- <script src="./assests/js/imagebox.ie.min.js"></script> -->
    <script src="./assests/js/imagebox.min.js"></script>
    
   
    <script>

        $(document).ready(function(){
            
            $('.work_carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                margin: 10,
                responsive:{
                    0:{
                        items: 1
                    },
                    720:{
                        items: 2
                    },
                    960:{
                        items: 2
                    },
                    1440:{
                        items: 3
                    }

                }
            });

             //remove disabled for owl carcousel
            var wrkNav = $('.work_carousel .owl-nav');
            wrkNav.removeClass('disabled');

            $('.feedback_carousel').owlCarousel({
                loop: true,
                nav: true,
                dots: false,
                responsive:{
                    0:{
                        items: 1
                    }
                }
                

            });
        });

        var menuItems     = $('.nav-link');

        //menu toggle between hamburger and close icon
        $('#menu_btn').on('click',(e) => {
            hideAndShowElement($('.navbar-toggler-icon'));
            hideAndShowElement($('.close_icon'));
        });

        //menu items click event
        menuItems.on('click', (e) => {
            menuItems.removeClass('active_menu');   
            $(e.target).toggleClass('active_menu');
            $('.navbar-collapse.collapse').removeClass('show');
            hideAndShowElement($('.navbar-toggler-icon'));
            hideAndShowElement($('.close_icon'));
        });

        //menu icon hiding operations
        function hideAndShowElement(element) {
                
            if(element.hasClass('d-block')){
                element.removeClass('d-block')
                element.addClass('d-none')
            }else{
                element.removeClass('d-none')
                element.addClass('d-block')
            }
        }
        
    </script>

    <!-- custom js -->
    <script src="./assests/js/index.js"/>
</body>
</html>