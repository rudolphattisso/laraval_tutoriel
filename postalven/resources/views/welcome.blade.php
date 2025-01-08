<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>postalven</h1>
    <p>bienvenue chez postalven leader mondial dans la livraison</p>
    @if ($nbParcel>0)
    <p>il y'a actuellement {{$nbParcel}} </p>
    @else
    <p>il n'y aucun colis en traitement en cours</p>
    @endif
    <img src="images/pixel_art.jpeg" alt="">
    
    
    <a href="{{ url('/register') }}">Enregistrer un colis</a>
</body>
</html>