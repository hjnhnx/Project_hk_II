<script type="text/javascript" src="/libs/client/scripts/common.min.js"></script>
<script type="text/javascript" src="/libs/client/scripts/swiper-bundle.js"></script>
<script type="text/javascript" src="/libs/client/scripts/home.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
@yield('cart-js')
@yield('custom_js')
<script>
    $('.btn_play_video').click(function () {
        $('.video_iframe').attr('src', this.slot)
    })
    $('.close_video').click(function () {
        $('.video_iframe').attr('src', '')
    })

    jQuery(document).ready(function ($) {
        $('.fadeshop').hover(
            function () {
                $(this).find('.captionshop').fadeIn(150);
            },
            function () {
                $(this).find('.captionshop').fadeOut(150);
            }
        );
    });

    $(document).ready(function () {
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': true,
            'progressBar': false,
            'positionClass': 'toast-bottom-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '7000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }
    });

    function add_to_cart(id) {
        if (id !== '') {
            $.post('{{route('add_to_cart')}}', {
                    product_option_id: id,
                    _token: $('input[name = "_token"]').val()
                }, function (res) {
                    if (res.code === 200) {
                        toastr.success('Đã thêm sản phẩm vào giỏ hàng thành công');
                        $('.cart_count').text(res.p_quantity)
                    } else if (res.code === 401) {
                        toastr.error(res.message);
                    } else {
                        toastr.error('Đã có lỗi xảy ra vui lòng thử lại sau');
                    }
                }
            )
        } else {
            toastr.warning('Vui lòng chọn phiên bản trước');
        }
    }

    function update_cart(code, id) {
        var quantity = $(`input[name = "${code}"]`).val()
        if (quantity >= 1 ){
            $.post('{{route('add_to_cart')}}', {
                    product_option_id: id,
                    action: 'update',
                    quantity: quantity,
                    _token: $('input[name = "_token"]').val()
                }, function (res) {
                    if (res.code === 200) {
                        toastr.success(`Cập nhật thành công`);
                        $(`#all_price${id}`).text(res.price)
                        document.getElementById(`price_id_${id}`).slot = res.price_
                        $(`.show_total_price`).text(res.total_price)
                        show_choice_price()
                    } else if (res.code === 401) {
                        toastr.error(`Trong kho chỉ còn ${res.quantity_product} sản phẩm này`);
                    } else {
                        toastr.error(`Vui lòng kiểm tra lại kết nối`);
                    }
                }
            )
        }else {
            toastr.error(`Vui lòng kiểm tra lại số lượng và đảm bảo rằng số lượng lớn hơn 0`);
        }

    }


    function remove_cart(code){
        var check = confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng')
        if (check){
            $.post('{{route('remove_cart')}}', {
                product_id: code,
                _token: $('input[name = "_token"]').val()
            }, function (response) {
                if (response.code === 200) {
                    $(`#cart_id_${code}`).remove()
                    toastr.info(response.message);
                    $('.cart_count').text(response.p_count)
                    $(`.show_total_price`).text(response.total_price)
                }
            });
        }

    }


</script>
