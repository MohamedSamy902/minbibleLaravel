<?php $__env->startSection('content'); ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">

                <div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <p data-aos="fade-up" class="aos-init aos-animate"
                        style="font-family: calibri;font-size: 50px;font-weight: 600;"><?php echo e($home->title); ?></p>
                    <p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate" style="font-size: 19px;">
                        <?php echo $home->content; ?>

                    </p>
                    <div data-aos="fade-up" data-aos-delay="800" class="aos-init aos-animate">
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>




                <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?php echo e(url('media/' . $home->image->name)); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2><?php echo e($aboutTheBook->title); ?></h2>
                </div>

                <div class="row content">
                    <div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="image text-center" data-aos="fade-right" data-aos-delay="150">
                            <img src="<?php echo e(url('media/' . $aboutTheBook->image->name)); ?>" alt="" class="img-fluid"
                                style="box-shadow: -13px 12px 0px 0px #00b3a4; background-color: #FFF;height: 55vh;">
                        </div>
                    </div>
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="150">
                        <?php echo $aboutTheBook->content; ?>


                        </ul>
                    </div>

                </div>

            </div>
        </section>

        <section id="aboutWriter" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2 style="text-align: left;"><?php echo e($aboutTheWriter->title); ?></h2>
                </div>

                <div class="row content">
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="150">
                        <?php echo $aboutTheWriter->content; ?>


                        </ul>
                    </div>
                    <div class="col-lg-4 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="image text-center" data-aos="fade-right" data-aos-delay="150">
                            <img src="<?php echo e(url('media/' . $aboutTheWriter->image->name)); ?>" alt="" class="img-fluid"
                                style="box-shadow: -13px 12px 0px 0px #00b3a4; background-color: #FFF;">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Video Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">
                    <div class="col-xl-12 d-flex align-items-stretch pt-5 pt-xl-0" data-aos="fade-left">
                        <video style="padding-top: 50px;" src="./assets/img/video/video_en.mp4" autoplay="autoplay"
                            controls="controls" width="100%" type="video/mp4"></video>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Video Section -->

        <!-- ======= Product Section ======= -->
        <section id="product" class="product">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>OUR PRODUCTS</h2>
                    <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p> -->
                </div>

                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 d-flex align-items-stretch mt-md-0">
                            <div class="card" data-aos="fade-up" data-aos-delay="100">
                                <img src="<?php echo e(url('media/' . $product->image->name)); ?>" class="img-fluid">
                                <div class="card-body" style="position: absolute;left: 5%;">
                                    <h5 class="card-title"><?php echo e($product->title); ?></h5>
                                    <p class="card-text"><?php echo $product->content; ?></p>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal<?php echo e($product->id); ?>"><i
                                                    class="bi bi-filetype-pdf"></i>View
                                                Sample</a>
                                        </div>

                                        <div class="col-6">
                                            <a href="#contact"><i class="bi bi-cart-plus"></i>Order Now </a>
                                        </div>
                                        <?php if($product->audio != null): ?>
                                            <div class="col-6">
                                                <a style="padding-top: 10px;" href="" type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#AudioModal<?php echo e($product->id); ?>"><i
                                                        class="bi bi-soundwave"></i>Audio</a>
                                            </div>
                                        <?php endif; ?>


                                    </div>

                                </div>
                            </div>
                            <div class="modal fade modal-lg" id="exampleModal<?php echo e($product->id); ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e($product->title); ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe src="<?php echo e(url('file/' . $product->image->name)); ?>" width="100%"
                                                height="500px"></iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($product->audio != null): ?>
                                <div class="modal fade" id="AudioModal<?php echo e($product->id); ?>" tabindex="-1"
                                    aria-labelledby="AudioModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="AudioModalLabel">BROCHURE</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <audio controls style="width: 100%;">
                                                    <source src="horse.ogg" type="audio/ogg">
                                                    <source src="horse.mp3" type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                </div>

            </div>
        </section><!-- End Product Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Non-Muslim View About MUHAMMAD (pbuh) </h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $nonMuslims; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nonMuslim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="<?php echo e(asset('site')); ?>/assets/img/img/Ghandy.jpg" class="testimonial-img"
                                            alt="">
                                        <h3><?php echo e($nonMuslim->title); ?></h3>
                                        <!-- <h4>Ceo &amp; Founder</h4> -->
                                        
                                        
                                        <?php echo $nonMuslim->content; ?>

                                        
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>info@mohammedinthebible.com taha@mohammedinthebible.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+966 564317621</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/masterLaravel/resources/views/site/index.blade.php ENDPATH**/ ?>