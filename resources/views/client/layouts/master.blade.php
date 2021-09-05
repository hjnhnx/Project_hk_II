<!DOCTYPE html>
<html lang="vi">
@include('client.components.head')
<body class="">

@include('client.components.header')
<main id="main" style="margin-top: 10px">
    @include('client.components.banner')
    @yield('main_content')
</main>
@include('client.components.footer')

@include('client.components.script')

</body>
</html>
