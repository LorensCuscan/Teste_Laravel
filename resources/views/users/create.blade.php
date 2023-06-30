<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/query@0.2.0/index.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criação de Usuario</title>
</head>

<body>
    <div class="container my-5">
        <form action="{{ route('users.store') }}" method="post" autocomplete="off">  
            @csrf   
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
     
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" id="E-mail" name="E-mail">
            </div>
    
            <div class="form-group">
                <label for="birth_date">Data de nascimento:</label>
                <input type="text" class="form-control" id="birth_date" name="birth_date">
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="text" class="form-control" id="password" name="password"><br>
            </div>
    
            <button class="btn btn-primary">Enviar!</button>
        </form>
    </div> 
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
