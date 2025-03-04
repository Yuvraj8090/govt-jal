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