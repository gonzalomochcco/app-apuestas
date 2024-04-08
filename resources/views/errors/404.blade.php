<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Página no encontrada </title>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logo_verde_responsive.png')}}">      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body class="d-flex" style="background:#f7fafc;height:100vh;width:100vw">
   
    <div class="m-auto" style="max-width:320px">
        <div class="text-dark font-bold" style="font-size:100px">404</div>
        <div id="line" class="bg-dark mb-1" style="height:2px;width:70px"></div>
        <div class="text-muted font-18 mb-4" style="font-size: 18px">Lo sentimos, no hemos podido encontrar la página que estás buscando.</div>
        <div>            
            <a href="@guest {{route('login')}} @endguest @auth {{ redirect()->back() }} @endauth" class="btn btn-md btn-dark text-white">Regresar</a>        
        </div>
 
    </div>

</body>
</html>