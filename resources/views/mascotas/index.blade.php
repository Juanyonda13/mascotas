<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mw-100">
        <div class="container w-25 card d-flex flex-column justify-content-center " style="background-color: #2c4674">
            <header class="container d-flex w-100 justify-content-between pt-2">
                <div class="d-flex w-75 justify-content-end">
                    <p class=""style="color: #FFFFFF">Adiministrar Mascota</p>
                </div>
                <div class="d-flex w-25 justify-content-end mx-2">
                    <i class="bi bi-x-lg"style="color: #FFFFFF"></i>
                </div>
            </header>
            <section class="container w-100 d-flex flex-column">
                   <div class="container w-100 d-flex justify-content-center">
                        <a class="btn btn-success w-100" href="/mascotas/create">+ Adicionar</a>
                   </div>
                   @foreach($mascotas as $m)
                   <div class="card container w-100 d-flex flex-row mt-2 justify-content-between">
                        <article class="container w-50 d-flex flex-row p-2">
                            <div class="container w-50 d-flex">
                                <i class="bi bi-person-circle"></i>
                            </div> 
                            <div class="container flex-column">
                                <p class="m-0">{{$m->nombre}}</p>
                                @foreach($razas as $r)
                                    @if($m->razas_id==$r->id)
                                    <p class="text-success">{{$r->nombre_razas}}</p>
                                    @endif
                                @endforeach
                            </div> 
                        </article>

                        <article class="container w-50 d-flex  pt-2">
                            <div class="container">
                                <i class="bi bi-search"></i>
                            </div>
                            <div class="container">
                                <a class="bi bi-pencil" href="/mascotas/{{$m->id}}/edit" type="submit" role="button"></a>
                            
                            </div>
                            <div class="container">
                                <i class="bi bi-trash3"></i>
                            </div>
                        </article>
                    
                   </div>
                   @endforeach
            </section>
        </div>
    </div>
</body>
</html>