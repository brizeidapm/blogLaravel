<html>
     <head>
          <title>Blog -@yiled('titulo')</title>
    </head>
<body>
     @section('sidebar')
        Esto es un sidebar del master
     @show

     <h1> Hola {{ $name }},Estas pasando datos a blade</h1>
     @yield('content')
</body>
</html>
