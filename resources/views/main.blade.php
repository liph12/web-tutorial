<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
</head>
<style>
   .form-container{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
   }
   .form-content{
      width: 30%;
   }
</style>
<body>
   @yield('content')
</body>
</html>