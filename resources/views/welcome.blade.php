<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" href="">
    <title>Document</title>
</head>
<body style="background-color: #0BE0FD">
    

		
             <div class="mt-5">
                            <h2 class="text-center text-light">AUTHENTIFICATION</h2>
                        </div>
                    </div>
                    <div class="row">

    <div class="d-flex justify-content-center mb-5">
        <form class="shadow p-5 mt-5 bg-secondary" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3 text-light">
                <label for="exampleInputEmail1" class="form-label text-light">Adresse email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text-light">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
            </div>
            <div class="mb-3 text-light">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control " id="exampleInputPassword1">
                
            </div>
            <div class="mb-3 form-check text-light">
                <input type="checkbox" class="form-check-input text-light" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-info">Soumettre</button>
        </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"> 
</script>
</body>
</html>