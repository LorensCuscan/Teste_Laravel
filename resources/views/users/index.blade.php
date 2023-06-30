<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <title>Step-by-Step Tutorial: Implementing Yajra Datatables in Laravel 10 - CodeAndDeploy.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
     
<div class="container">
    <h1>TESTE DATATABLES</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de nascimento</th>
                <th>Data de cadastro</th>
                <th width="105px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
     
</body>
     
<script type="text/javascript">
  $(function () {
      
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.index') }}",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'birth_date', name: 'birth_date'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]

        
    });
      
  });
</script>


</html>
=======
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Listagem de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
    <form>
       <a href="{{ route('users.create')}}" type="button" class="btn btn-primary">Cadastrar Novo Usuario</a>
    </form>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table id="user-table" class="table table-bordered table-responsive table-stripe">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
    </div>

<script>
$(document).ready(function() {
    $.ajax({
        url: '/api/users',  // Substitua com a URL da sua API
        type: 'GET',
        success: function(data) {
            var tbody = $("#user-table tbody");

            data.forEach(function(user) {
                var row = $("<tr>");
                row.append($("<td>").text(user.name));
                row.append($("<td>").text(user.email));
                row.append($("<td>").text(user.created_at));
                row.append($("<td>").text(user.actions)); // Substitua '...' com as ações que você deseja adicionar
                tbody.append(row);
            });
        }
    });
});
</script>

</body>
</html>
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
