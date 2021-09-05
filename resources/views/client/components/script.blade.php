<script type="text/javascript" src="/libs/client/scripts/common.min.js"></script>
<script type="text/javascript" src="/libs/client/scripts/swiper-bundle.js"></script>
<script type="text/javascript" src="/libs/client/scripts/home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@yield('custom_js')
<script>
    $('.btn_play_video').click(function (){
        $('.video_iframe').attr('src',this.slot)
    })
    $('.close_video').click(function (){
        $('.video_iframe').attr('src','')
    })
</script>
