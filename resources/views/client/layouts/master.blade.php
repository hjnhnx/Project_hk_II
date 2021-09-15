<!DOCTYPE html>
<html lang="vi">
@include('client.components.head')
<body class="">

@include('client.components.header')
<main id="main" style="margin-top: 10px">
    @csrf
    @include('client.components.banner')
    @yield('main_content')
</main>
@include('client.components.footer')

@include('client.components.script')
<a class="call_now" href="tel:0369042217"><i class="fas fa-phone-alt"></i></a>
</body>
</html>
