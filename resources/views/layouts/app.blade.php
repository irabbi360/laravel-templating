@include('layouts.include.head')
<body>
@include('layouts.include.header')

@include('layouts.include.sidebar')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

@include('layouts.include.footer')
</body>
</html>