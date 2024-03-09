<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Cruzeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/app.css">
    <script src="https://kit.fontawesome.com/186c83f818.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</head>

<body>

    <header class="header">
        <div class="container container-header">
            <h1>Bienvenido</h1>
        </div>
    </header>
    <div class="p-5">
        <button type="button" class="btn btn-success fs-3" data-bs-toggle="modal" data-bs-target="#modal-add">Añadir jugador</button>
        <br>
        <hr>        
        <center>
        <div class="search">
            <div class="searchea">
                <form>
                    
                         <input type="search" placeholder="Ingrese el Nombre" aria-label="Search" class="ip-search"">                            
                   
             <button type="submit" class="btn-searchea btn btn-primary text-white fs-3">Buscar</button>
         </form>
        </div> 
        </div>
        </center>
        <style>.search{display: flex;} .searchea {width: 100%}.ip-search {width: 70%; height: 35px; border-radius:10px; border-width:1px; }.btn-searchea{width: 10%;height: 35px;border-radius: 10px;}
                
                @media only screen and (max-width: 600px) {                         
                    .search{display: block;}
                    .btn-searchea {                        
                        width: 50%; 
                        font-size: 14px;
                    }
                    .ip-search{
                        width: 100%;
                        margin-bottom: 1rem;
                    } 
                }
                
        </style>

        <hr>
        <table class="table table-striped table-bordered table-hover ">
            <thead class="p-3 mb-2 ">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nombre/s</th>
                    <th scope="col">Apellido/s</th>
                    <th scope="col">Sede</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    <tr>
                        <th>{{ $player->number }}</th>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->lastname }}</td>
                        <td>{{ $player->location }}</td>
                        <td>
                            <a href="" class="btn bg-success text-white" data-bs-toggle="modal"
                                data-bs-target="#modal-view"><i class="fa-solid fa-eye"></i></a>
                        </td>



                        <!-- Modal for edit and download documents -->
                        <div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-2" id="exampleModalLabel">{{ $player->name }}
                                            {{ $player->lastname }} # {{ $player->number }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                            <div class="mb-3">
                                                <label  class="form-label ">Nombre</label>
                                                <input type="text" class="form-control fs-4"
                                                    name="txtname" id="form-name">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" >Apellido</label>
                                                <input type="text" class="form-control fs-4"
                                                    name="txtlastname" id="form-lastname">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Número</label>
                                                <input type="text" class="form-control fs-4"
                                                    name="txtnumber" id="form-number">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Sede</label>
                                                <select class="form-select fs-4" aria-label="Default select example">
                                                    <option value="1">Atocha-Pinllo</option>
                                                    <option value="2">Atocha</option>
                                                    <option value="3">Pinllo</option>                                                    
                                                  </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary fs-3">Submit</button>
                                        </form>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary fs-3"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary fs-3">Save changes</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- Modal for add documents -->
                        <div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title id="exampleModalLabel">Añadir jugador</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                            <div class="mb-3">
                                                <label  class="form-label">Nombres</label>
                                                <input type="text" class="form-control fs-4"
                                                    name="txtname" id="form-name" placeholder="Ingrese los nombres">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" >Apellidos</label>
                                                <input type="text" class="form-control fs-4"
                                                    name="txtlastname" id="form-lastname" placeholder="Ingrese los apellidos">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Número</label>
                                                <input type="text" class="form-control fs-4"
                                                    name="txtnumber" id="form-number" placeholder="Ingrese el número">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Sede</label>
                                                <select class="form-select fs-4" aria-label="Default select example">
                                                    <option value="1">Atocha-Pinllo</option>
                                                    <option value="2">Atocha</option>
                                                    <option value="3">Pinllo</option>                                                    
                                                  </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary fs-3"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-success fs-3">Añadir</button>
                                            </div>
                                        </form>

                               

                                    </div>

                                </div>
                            </div>
                        </div>




                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
