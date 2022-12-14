<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}"> --}}
        @yield('css')
</head>
<body>
    @include('clients.blocks.header')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <aside>
                        @include('clients.blocks.sidebar')

                    @show
                    </aside>
                </div>
            <div class="col-10">
                <div class="content">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    </main>
    @include('clients.blocks.footer')
    <script href="{{asset('assets/clients/css/bootstrap.min.js')}}"></script>
    <script href="{{asset('assets/clients/css/custom.js')}}"></script>
    @yield('js')
</body>
</html>
