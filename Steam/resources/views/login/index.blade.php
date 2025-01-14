<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
    <title>Document</title>
</head>


<body class="main-bg">

    @if(session('errors') && $errors->any())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
    </div>
    @endif
    <div class="login-container text-c animated flipInX">
            <div>
                <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
            </div>
                <h3 class="text-whitesmoke">Connexion</h3>
                <p class="text-whitesmoke">Entrez vos informations</p>
            <div class="container-content">
                <form class="margin-t" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="matricule" class="form-control" placeholder="Matricule" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit" class="form-button button-l margin-b">Se connecter</button>
    
                   
                    <p class="text-whitesmoke text-center"><small>Vous n'avez pas de compte ?</small></p>
                    <a class="text-darkyellow" href="/usagers/create"><small>Ajouter un usager</small></a>
                </form>
                <p class="margin-t text-whitesmoke"><small> Your Name &copy; 2018</small> </p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
