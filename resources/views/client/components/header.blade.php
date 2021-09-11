<header id="header">
    <div class="header">
        <div class="header-container">
            <a href="/">
                <img src="/libs/client/images/logo.png" alt="" style="height: 60px">
            </a>
            <div class="search-bar">
                <form action="/tim-kiem">
                    <input type="text" placeholder="Tìm kiếm sản phẩm" name="key" id="header-search-field"
                           onkeyup="productSearch()">
                    <button></button>
                </form>
            </div>
            <div class="header-right">
                <div class="hotline">
                    <div class="header-content-bottom">
                        <i class="fas fa-phone-alt"></i>
                        <a class="header_item" rel="nofollow" href="tel:0888888888">0888.888.888</a>
                    </div>
                </div>
                <div class="hotline">
                    <div class="header-content-bottom">
                        <i class="fas fa-user"></i>&nbsp;
                        <a class="header_item" rel="nofollow" href="{{route('login_register')}}">Login/register</a>
                    </div>
                </div>
                <div class="hotline">
                    <div class="header-content-bottom">
                        <i class="fas fa-shopping-cart"></i>
                        <a class="header_item" href="">Giỏ hàng 0</a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-btn" class="mobile-menu-btn" onclick="openMenu(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </div>
    <div id="cat-nav">
        <div class="container cat-menu">
            <div class="item mobile dropdown has-child">
                <a class="main-menu-dien-thoai" href="/dien-thoai">
                    <i class="lazy-class ic" data-class="ic ic-mobile"></i> Trang chủ</a>
            </div>
            <div class="item mobile dropdown has-child">
                <a class="main-menu-dien-thoai" href="/dien-thoai">
                    <i class="lazy-class ic" data-class="ic ic-mobile"></i> Sản phẩm</a>
            </div>
            <div class="item mobile dropdown has-child">
                <a class="main-menu-dien-thoai" href="/dien-thoai">
                    <i class="lazy-class ic" data-class="ic ic-mobile"></i>Liên hệ</a>
            </div>
            <div class="item mobile dropdown has-child">
                <a class="main-menu-dien-thoai" href="/dien-thoai">
                    <i class="lazy-class ic" data-class="ic ic-mobile"></i>Về chúng tôi</a>
            </div>
            <div class="item mobile dropdown has-child">
                <a class="main-menu-dien-thoai" href="/dien-thoai">
                    <i class="lazy-class ic" data-class="ic ic-mobile"></i>Thông tin cá nhân</a>
            </div>
            <div class="item mobile dropdown has-child">
                <a class="main-menu-dien-thoai" href="/dien-thoai">
                    <i class="lazy-class ic" data-class="ic ic-mobile"></i>Đơn hàng</a>
            </div>
        </div>
    </div>
</header>
