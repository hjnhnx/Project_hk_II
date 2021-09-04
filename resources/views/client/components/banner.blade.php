<section class="section-banner">
    <div class="container d-flex">
        <div class="left">
            <div id="home-banner-gallery" class="swiper-container no-height-init">
                <div class="swiper-wrapper" style="height: 100%!important;">
                    @foreach($banner as $item)
                        <div style="background-image: url('{{$item->image}}') ; background-size: cover;position: relative;background-position: center;"
                             class="swiper-slide">
                            <h4 style="color: white ; margin-left: 20px">{{$item->content}}</h4>
                            <div style="position: absolute;bottom: 10px;width: 100%;display: flex ;align-items: center ; justify-content: center;">
                                <button style="height: 45px;width: 145px;margin: 5px">Xem video</button>
                                <button style="height: 45px;width: 145px;margin: 5px">Xem chi tiết</button>
                            </div>
                        </div>
                    @endforeach



                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="info-container">
                <div id="home-banner-info" class="swiper-container info-carousel"></div>
            </div>
        </div>
        <div class="right d-flex" style="height: 371px">
            <div class="banner  banner2" style="height: 50%;margin-bottom:2px;;width: 100%">
                <a href="" style="height: 100%;width: 100%">
                    <img style="width: 100%;height: 100%"
                         src="{{$sub_banner[0]->image}}"
                         alt="">
                </a>
            </div>
            <div class="banner  banner2" style="height: 50%;margin-bottom:2px;width: 100%">
                <a href="" style="height: 100%;width: 100%">
                    <img style="width: 100%;height: 100%"
                         src="{{$sub_banner[1]->image}}"
                         alt="">
                </a>
            </div>

        </div>
    </div>
</section>
