<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Cruzeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/app.css">
    <script src="https://kit.fontawesome.com/186c83f818.js" crossorigin="anonymous"></script>
</head>
<body>

<header class="header">
        <div class="container container-header">
            <h1>Bienvenido</h1>
        </div>
</header>
<div class="p-5">
<table class="table table-striped table-bordered table-hover">
  <thead class="p-3 mb-2 bg-primary text-white">
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
          <th>{{$player->number}}</th>
          <td>{{$player->name}}</td>
          <td>{{$player->lastname}}</td>
          <td>{{$player->location}}</td>
          <td>
            <a href="" class="btn bg-success text-white" ><i class="fa-solid fa-eye"></i></a> 
          </td>
      </tr>       
    @endforeach
  </tbody>
</table>
</div>

</body>
</html>