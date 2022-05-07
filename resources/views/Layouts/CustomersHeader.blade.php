<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="topnav">
                <a href="/" class="logo">LOGO</a>
                <!-- Navigation links (hidden by default) -->
                <div class="dumdum">
                    <div id="myLinks">
                        {{-- <a href="#" id="call_waiter">CALL WAITER</a> --}}
                        <div id="call-waiter">CALL WAITER</div>
                        
                        <a href="/cart">CART</a>
                        <a href="/menus">MENUE</a>
                        <a href="bill">BILL</a>
                    </div>
                </div>
                <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
            </div>
        </nav>
    </header>

    @include('/customers/waiters')
    @yield('content')

    <footer>
    </footer>
    <script src="{{ asset('js/homepage.js') }}"></script>
    <script src="{{ asset('js/waiters.js') }}"></script>
</body>

