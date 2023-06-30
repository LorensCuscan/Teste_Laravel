<!DOCTYPE html>
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
