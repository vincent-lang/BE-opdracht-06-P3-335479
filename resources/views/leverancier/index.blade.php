<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>leverancier page</title>
</head>

<body>
    <div class="background">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="title">
        <h1>Overzicht leveranciers</h1>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Contactpersoon</th>
                    <th>Leveranciernummer</th>
                    <th>Mobiel</th>
                    <th>Aantal verschillende producten</th>
                    <th>Toon producten</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leveranciers as $info)
                <tr>
                    <td>{{$info->leverancier->naam}}</td>
                    <td>{{$info->leverancier->contactPersoon}}</td>
                    <td>{{$info->leverancier->leverancierNummer}}</td>
                    <td>{{$info->leverancier->mobiel}}</td>
                    <td>{{$info->amount}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>