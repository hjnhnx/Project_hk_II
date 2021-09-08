@if($banner && $sub_banner)
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
                                    <button class="btn_play_video" slot="{{$item->video}}" style="height: 45px;width: 145px;margin: 5px" data-toggle="modal" data-target="#exampleModal">Xem video</button>
                                    <a href="{{$item->link_to_product}}" style="text-decoration: none">
                                        <button style="height: 45px;width: 145px;margin: 5px">Xem chi tiết</button>
                                    </a>
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
                <div class="banner  banner2" style="height: 33.3%;margin-bottom:2px;;width: 100%">
                    <a href="{{$sub_banner[0]->link_to_product}}" style="height: 100%;width: 100%">
                        <img style="width: 100%;height: 100%"
                             src="{{$sub_banner[0]->image}}"
                             alt="">
                    </a>
                </div>
                <div class="banner  banner2" style="height: 32.7%;margin-bottom:2px;;width: 100%">
                    <a href="{{$sub_banner[1]->link_to_product}}" style="height: 100%;width: 100%">
                        <img style="width: 100%;height: 100%"
                             src="{{$sub_banner[1]->image}}"
                             alt="">
                    </a>
                </div>
                <div class="banner  banner2" style="height: 33.3%;margin-bottom:2px;;width: 100%">
                    <a href="{{$sub_banner[2]->link_to_product}}" style="height: 100%;width: 100%">
                        <img style="width: 100%;height: 100%"
                             src="{{$sub_banner[2]->image}}"
                             alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="margin: 0;height:50px">
                        <button type="button" class="close close_video" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" height="270" class="video_iframe" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer d-none">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
