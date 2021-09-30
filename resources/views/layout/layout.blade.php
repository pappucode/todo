<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials._head')
</head>
<body>

@include('partials._nav')

<!-- main-content -->
<div class="container">

    @include('partials._message');

    @yield('content');

</div>
<hr/><br/>

@include('partials._footer')
@include('partials._javascript')

@yield('scripts')

</body>
</html>