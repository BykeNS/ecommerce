<!DOCTYPE html>
<html>
  <head>
    @include('frontend.include.header')
    <title>Teashop Ecommerce | @yield('title') </title>
   </head>

    <body>
        <div class="banner-top container-fluid" id="home">
            @include('messages.message')
            @include('frontend.include.nav')

            @yield('content')

            @include('frontend.include.footer')

            @include('frontend.include.modal')
           
            @include('frontend.include.scripts')

        </div>
    </body>
</html>

