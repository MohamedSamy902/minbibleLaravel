<!DOCTYPE html>
<html lang="en">

<head>

    @include('site.layouts.css')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('site.layouts.header')
    <!-- End Header -->
    @yield('content')


    {{-- Footer --}}
    @include('site.layouts.footer')



    @include('site.layouts.js')

</body>

</html>
