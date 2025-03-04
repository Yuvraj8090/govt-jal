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