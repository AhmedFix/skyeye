@include('layouts._header')

<main class="app-content">

    @include('partials._session')

    @yield('content')

</main><!-- end of main -->

@include('layouts._footer')