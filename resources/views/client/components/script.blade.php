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
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }
    });

    function add_to_cart(id,item) {
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
            $.post('{{route('add_to_cart')}}', {
                    product_option_id: item.slot,
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
        }
    }

    function update_cart(code, id) {
        var quantity = $(`input[name = "${code}"]`).val()
        if (quantity >= 1) {
            $.post('{{route('add_to_cart')}}', {
                    product_option_id: id,
                    action: 'update',
                    quantity: quantity,
                    _token: $('input[name = "_token"]').val()
                }, function (res) {
                    if (res.code === 200) {
                        toastr.success(`Cập nhật thành công`);
                        $(`#all_price${id}`).text(res.price)
                        $(`#all_price2${id}`).text(res.price)
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
        } else {
            toastr.error(`Vui lòng kiểm tra lại số lượng và đảm bảo rằng số lượng lớn hơn 0`);
        }
    }

    function remove_cart(code) {
        var check = confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng')
        if (check) {
            $.post('{{route('remove_cart')}}', {
                product_id: code,
                _token: $('input[name = "_token"]').val()
            }, function (response) {
                if (response.code === 200) {
                    $(`#cart_id_${code}`).remove()
                    $(`#cart2_id_${code}`).remove()
                    toastr.info(response.message);
                    $('.cart_count').text(response.p_count)
                    $(`.show_total_price`).text(response.total_price)
                }
            });
        }
    }

    function get_id() {
        var ids = document.querySelectorAll('.checked_option')
        var arr_id = []
        for (let i = 0; i < ids.length; i++) {
            arr_id.push(ids[i].nonce)
        }
        $('.all_id').val(JSON.stringify(arr_id))
    }

    function change_price(code, element) {
        $(`#${code}`).val(element.value)
    }

    function is_checked(item) {
        item.classList.toggle('checked_option2')
    }

    $('#mobile-menu-btn').click(function () {
        $('#modal_menu').removeClass('d-none')
    })

    $('#close_modal_menu').click(function () {
        $('#modal_menu').addClass('d-none')
    })

    $('.product_image').click(function () {
        $('.show_image').attr('src', this.src)
    })

    $('.buy-now').click(function () {
        var url = window.location.origin + `/api/get-data-product/${this.slot}`
        $.get(url, function (data, status) {
            console.log(data)
            $('.show_image').attr('src', data.product.thumbnail)
            var images = JSON.parse(data.product.images)
            $('.show_mini_images').html(``)
            for (let i = 0; i < images.length; i++) {
                $('.show_mini_images').append(`<img class="mr-2" onclick="change_img(this)" style="object-fit: cover;height: 100%;width: 85px" src="${images[i]}" alt="">`)
            }
            $('.after_price').text(`${formatNumber(Number(data.product.price) + Number(data.product_option[0].price) - ((Number(data.product.price) + Number(data.product_option[0].price)) * Number(data.product.discount) / 100))} vnđ`)
            $('.before_price').text(`${formatNumber(data.product.price + data.product_option[0].price)} vnđ`)
            $('.show_option').html('')
            for (let i = 0; i < data.product_option.length; i++) {
                $('.show_option').append(`<div onclick="choi_option(this)" id="${data.product_option[i].id}" slot="${data.product_option[i].thumbnail}~!!!~${Number(data.product.price) + Number(data.product_option[i].price) - ((Number(data.product.price) + Number(data.product_option[i].price)) * Number(data.product.discount) / 100)}~!!!~${formatNumber(Number(data.product.price) + Number(data.product_option[i].price))}~!!!~${data.product_option[i].ram}" style="border: #bdbdbd 1px solid;height: 90px;overflow: hidden;margin: 5px 0"
class="row p-0">
                            <img style="height: 90px;width: 90px;object-fit: cover" src="${data.product_option[i].thumbnail}" alt="">
                            <div class="col" style="height: 100%">
                                <p class="m-0 pt-1 ">${data.product_option[i].color.name} - ${data.product_option[i].ram} / ${data.product_option[i].rom}GB</p>
                                <p class="m-0 pt-1 text-danger ">${formatNumber(Number(data.product.price) + Number(data.product_option[i].price) - ((Number(data.product.price) + Number(data.product_option[i].price)) * Number(data.product.discount) / 100))} vnđ</p>
                                <p style="text-decoration: line-through" class="text-secondary m-0 pt-1">${formatNumber(Number(data.product.price) + Number(data.product_option[i].price))} vnđ</p>
                            </div>
                        </div>`)
            }
            $('.product_name').text(data.product.name)
        });
    })

    function change_img(item) {
        $('.show_image').attr('src', item.src)
    }

    function choi_option(item){
        $('#option_id').val(item.id)
        $('.option_active').removeClass('option_active')
        item.classList.add('option_active')
        var image = item.slot.split('~!!!~')[0]
        var sale_price = Number(item.slot.split('~!!!~')[1].replaceAll(',',''))
        var price = item.slot.split('~!!!~')[2].replaceAll(',','')
        var ram = item.slot.split('~!!!~')[3]
        $('.show_image').attr('src', image)
        $('.sale_price').html(formatNumber(sale_price)+' vnđ')
        $('.price').html(price + ' vnđ')
        $('.total_price').val(Number(sale_price))
    }

    $('.btn_buy_now').click(function (){
        var arr_id = []
        arr_id.push($('#option_id').val())
        $('.all_id').val(JSON.stringify(arr_id))
        $('.no_cart').val(1)
        $('.exampleModal1').click()
    })

    $('.btn_buy_now2').click(function (){
        choi_option(document.querySelector('.option_active'))
        var arr_id = []
        arr_id.push(document.querySelector('.option_active').id)
        $('.all_id').val(JSON.stringify(arr_id))
        $('.no_cart').val(1)
        $('.exampleModal1').click()
    })

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }

</script>
