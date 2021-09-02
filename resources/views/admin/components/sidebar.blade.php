<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">
            <ul class="nav nav-main">
                <li class="nav-active">
                    <a href="#">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-parent">
                    <a href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Người dùng</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_user')}}">
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a href="{{route('create_user')}}">
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a href="#">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_product')}}">
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a href="{{route('create_product')}}">
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a href="#">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                        <span>Sản phẩm chi tiết</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_product_option')}}">
                                Xem tất cả
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a>
                        <i class="fa fa- fa-quote-left" aria-hidden="true"></i>
                        <span>Danh mục</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_category')}}">
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a href="{{route('create_category')}}">
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a>
                        <i class="fa fa-road" aria-hidden="true"></i>
                        <span>Hãng</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_brand')}}">
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a href="{{route('create_brand')}}">
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a>
                        <i class="fa   fa-tint" aria-hidden="true"></i>
                        <span>Màu sắc</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_color')}}">
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a href="{{route('create_color')}}">
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-parent">
                    <a>
                        <i class="fa fa-share-square-o" aria-hidden="true"></i>
                        <span>Đơn hàng</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_order')}}">
                                Xem tất cả
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Chi tiết đơn hàng</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_order_detail')}}">
                                Xem tất cả
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a>
                        <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                        <span>Banner</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_banner')}}">
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a href="{{route('create_banner')}}">
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Liên hệ</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a href="{{route('list_contact')}}">
                                Xem tất cả
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</div>
