<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <p>Enrgisrer un colis</p>

    <form action="{{url('/register')}}" method="post">
        @csrf <!-- token-->
        <label for="adresse dep">Adresse départ</label>
        <input type="text" name="adresse_dep" placeholder="1 rue des maréchers">
        
        
        <label for="">Adresse d'arrivée</label>
        <input type="text" name="adresse_arr" placeholder="25 rue des Simone Veil">
        
        <label for="">Poids du colis</label>
        <input type="text" name="poids" placeholder="20g">

        <button type="submit">Envoyer formulaire</button>
        
    </form>

    @if (isset($message))
    <p>{{$message}}</p>
    @endif

    <a href="{{ url('/') }}">Retour</a>
</body>
</html>