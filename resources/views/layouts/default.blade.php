@include('style')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
@include('includes.header') <!-- Header dosyanız -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 p-0">
            @include('includes.sidebar') <!-- Sidebar dosyanız -->
        </div>
        <div class="col-md-12 p-0">
            <div class="content">
                @yield('content') <!-- Sayfa içeriği -->
            </div>
        </div>
    </div>
</div>

@include('includes.footer') <!-- Footer dosyanız -->
</body>
</html>
