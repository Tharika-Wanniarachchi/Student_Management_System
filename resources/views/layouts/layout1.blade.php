<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>

    @include('libraries.style')

</head>
<body>
        @include('components.nav')

        <div class="row">

            <div class="col-md-3">
                @include('components.sidebar')
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>

        </div>

        @include('components.footer')


    @include('libraries.script')

</body>
</html>
