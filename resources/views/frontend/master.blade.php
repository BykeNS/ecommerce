{{-- <!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
--> --}}

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

