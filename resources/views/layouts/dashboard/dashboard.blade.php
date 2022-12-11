<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('path.header.title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

 <!-- partial:index.partial.html -->
 @include('path.header.header')
 <link rel="stylesheet" href="/assets/css/style.css">
 {{-- end --}}
 @yield('dashcontent')
    </body>
    </html>