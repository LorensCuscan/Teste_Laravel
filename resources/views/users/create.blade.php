<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<<<<<<< HEAD
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
=======
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/query@0.2.0/index.min.js"></script>
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criação de Usuario</title>
</head>

<body>
    <div class="container my-5">
<<<<<<< HEAD
        <form id="user-form" action="" method="post" autocomplete="off">  
            @csrf   
            <div class="form-group">
                <label for="name">Nome:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="name" 
                    name="name"
                    value="{{ isset($user->name) ? $user->name : '' }}"
                    >
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="email" 
                    name="email"
                    value="{{ isset($user->email) ? $user->email : '' }}"
                    >
=======
        <form action="{{ route('users.store') }}" method="post" autocomplete="off">  
            @csrf   
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
     
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" id="E-mail" name="E-mail">
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
            </div>
    
            <div class="form-group">
                <label for="birth_date">Data de nascimento:</label>
<<<<<<< HEAD
                <input 
                    type="date" 
                    class="form-control" 
                    id="birth_date" 
                    name="birth_date"
                    value="{{ isset($user->birth_date) ? $user->birth_date->format('d/m/Y') : '' }}"
                    >
=======
                <input type="text" class="form-control" id="birth_date" name="birth_date">
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
<<<<<<< HEAD
                <input 
                    type="text" 
                    class="form-control" 
                    id="password" 
                    name="password"
                    ><br>
            </div>
    
            <button class="btn btn-primary">Salvar!</button>
        </form>
        <div id="errors-container"></div>
    </div> 

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('#user-form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: '{{ route("users.store") }}',
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {
                    console.log(data);
                    if(date.status == 'error'){
                    } else {

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    var errorData = jqXHR.responseJSON.message;
                    var errorsContainer = $("#errors-container");
                    errorsContainer.html("");
                    
                        // Display the validation error messages
                    $.each(errorData, function(field, errors) {
                        $.each(errors, function(index, error) {
                            errorsContainer.append('<p class="text-danger">' + error + '</p>');
                        });
                    }); 
                }
            });
        });
    });
    </script>
=======
                <input type="text" class="form-control" id="password" name="password"><br>
            </div>
    
            <button class="btn btn-primary">Enviar!</button>
        </form>
    </div> 
    <script src="{{ asset('js/app.js') }}"></script>
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
</body>
</html>
