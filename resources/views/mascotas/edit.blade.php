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
        <div class="container w-25 card d-flex flex-column justify-content-center "style="background-color: #2c4674">
            <header class="container d-flex w-100 justify-content-between pt-2">
                <div class="d-flex w-25"><a class="bi bi-arrow-left text-light" href="/mascotas"></a></div>
                <div class="d-flex w-75 justify-content-center">
                    <p style="color: #FFFFFF">Adicionar Mascota</p>
                </div>
                <div class="d-flex w-25 justify-content-end">
                    <i class="bi bi-x-lg text-light"></i>
                </div>
            </header>
            <section class="container m-2 d-flex w-100 justify-content-center">
                <form action="{{route('mascotas.update',$mascota)}}" class="w-75" method="POST">
                    @method('PUT')
                    @csrf
                    <section class="container mb-3">
                        <input type="text" class="form-control bg-light" placeholder="nombre" name="nombre" value="{{$mascota->nombre}}">
                    </section>
                    <section class="container mb-3">
                        <select id="" class="form-select" value="nombre_categorias" name="categorias_id">
                            
                            <option value="{{$mascota->categorias_id}}" selected class=""> {{$mascota->categorias_id}}</option>
                            @foreach($categorias as $c )                           
                            <option value="{{$c->id}}">{{$c->nombre_categorias}}</option>
                            @endforeach
                        </select>
                    </section>
                    <section class="container mb-3">
                        <input type="text" class="form-control bg-light" placeholder="subir Foto" name="fotos">
                    </section>
                    <section class="container mb-3">
                        <select id="" class="form-select" name="razas_id">
                            <option value="" selected class=""> seleccione raza</option>
                            @foreach($razas as $r )
                            <option value="{{$r->id}}">{{$r->nombre_razas}}</option>
                            @endforeach
                        </select>
                    </section>
                    <section class="container mb-3">
                        <select id="" class="form-select" value="nombre_generos" name="generos_id">
                            <option value="" selected class=""> seleccione genero </option>
                            @foreach($generos as $g )
                            <option value="{{$g->id}}">{{$g->nombre_generos}}</option>
                            @endforeach
                        </select>
                    </section>
                    <section class="container d-flex justify-content-center w-100">
                        <button class="btn btn-success w-100">Aceptar</button>
                    </section>
                </form>
            </section>
        </div>  
    </div>
</body>
</html>