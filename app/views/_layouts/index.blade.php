<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo Dropdown Dependency</title>
        {{ HTML::script("assets/js/jquery.js") }}
    </head>
    <body>
        @yield('content')
        <script type="text/javascript">
            $(document).ready(function() {
                @yield('script')
            });
        </script>
    </body>
</html>