
<!DOCTYPE html>
<html lang="en">

@include('frontend.inc.head')

<body>
     {{-- header start --}}
     @include('frontend.inc.header')
     {{-- header end --}}

    {{-- main start --}}
    @yield('_content')
    {{-- main end --}}


    {{-- footer start --}}
    @include('frontend.inc.footer')
    {{-- footer end --}}



    @include('frontend.inc.scripts')
</body>

</html>
