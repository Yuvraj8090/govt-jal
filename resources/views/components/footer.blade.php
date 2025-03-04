
<section class="pricing-section bg-white ">
    <div class="container">
        <div class="tab-content wow fadeInUp" id="priceTabContent" data-wow-delay=".5s">
            <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                <div class=" text-center gy-lg-0 gy-4">
                    <h3 class="text-center">Gallery</h3>
                    <div class="pricing-item row" style="max-height:fit-content !important;">
                        <div class="col-lg-6 col-md-12">
                            <div class="container gallery-container">
                                <div class="tz-gallery">
                                    <div class="row">
                                        @foreach(["mkbq.jpg", "slider1.jpg", "slider2.jpg", "slider3.jpg", "slider4.jpg"] as $image)
                                            <div class="col-sm-6 col-md-4">
                                                <a class="lightbox" href="{{ asset('assets/image/' . $image) }}">
                                                    <img src="{{ asset('assets/image/' . $image) }}" alt="Gallery Image">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="content-img-wrap-2 wow fade-in-left" data-wow-delay="400ms">
                                <div class="content-img">
                                    <img src="{{ asset('assets/image/slider4.jpg') }}" alt="content">
                                </div>
                                <div class="video-btn">
                                    <a class="video-popup venobox vbox-item" data-autoplay="true" data-vbtype="video" href="https://youtu.be/JwC-Qx1lJso?feature=shared">
                                        <div class="play-btn">
                                            <i class="fa-sharp fa-solid fa-play"></i>
                                        </div>
                                        <div class="ripple"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" text-center gy-lg-0 gy-4">
                    <div class="pricing-item row">
                        <div class="card">
                            <div class="logos-slider">
                                <div class="logos-slider-container">
                                    @foreach(["f1.jpg", "f2.jpg", "f3.jpg", "f4.jpg", "f5.jpg"] as $logo)
                                        <img src="{{ asset('assets/image/' . $logo) }}">
                                    @endforeach
                                </div>
                                <div class="logos-slider-container">
                                    @foreach(["f1.jpg", "f2.jpg", "f3.jpg", "f4.jpg", "f5.jpg"] as $logo)
                                        <img src="{{ asset('assets/image/' . $logo) }}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" text-center gy-lg-0 gy-4">
                    <div class="pricing-item row" style="background: var(--primary-color); color: var(--background-color)">
                        <p><b> Disclaimer:</b> All efforts have been made to provide information as accurate as possible. Central Soil and Materials Research Station (CSMRS), Department of Water Resources, River Development and Ganga Rejuvenation, Ministry of Jal Shakti, Government of India will not be responsible for any loss due to inaccuracy in the information available on this website.</p>
                        <p><b> Accessibility Option | SiteMap | Terms of Use | Privacy Policy | Copyright Policy | Archive | Help | Disclaimer | Hyperlinking Policy </b></p>
                        <p>© Content Owned, Updated, and Maintained by Central Soil And Materials Research Station, Government of India.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap-bundle.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.isotope.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/daterangepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
<script src="{{ asset('assets/js/vendor/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
