<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>product page</title>
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
        <h1>Geleverde producten</h1>
    </div>

    <div class="contact">
        <h3>Naam leverancier: {{$info->naam}}</h3>
        <h3>Contact persoon: {{$info->contactPersoon}}</h3>
        <h3>Leverancier NR: {{$info->leverancierNummer}}</h3>
        <h3>Mobiel: {{$info->mobiel}}</h3>
    </div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam product</th>
                    <th>Aantal in magazijn</th>
                    <th>Verpakkingseenheid</th>
                    <th>Laatste levering</th>
                    <th>Nieuwe levering</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $data)
                <tr>
                    @if($data->aantalAanwezig != null)
                    <td>{{$data->product_naam}}</td>
                    <td>{{$data->aantalAanwezig}}</td>
                    <td>{{$data->verpakkingsEenheid}} kg</td>
                    <td>{{date('d/m/Y',strtotime($data->datumLevering))}}</td>
                    <td>
                        <a href="{{route('productperleverancier.index', [$info->id, $data->id])}}"><img class="small-img" src="/img/plus.png" alt="plus.png"></a>
                    </td>
                    @else
                    <script>
                        setTimeout(function() {
                            window.location.href = "{{route('leverancier.index')}}"
                        }, 3000);
                    </script>
                    <td colspan="5">Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="button-box">
            <div class="buttons">
                <a href="{{route('leverancier.index')}}">Terug</a>
            </div>

            <div class="buttons">
                <a href="{{route('home')}}">Home</a>
            </div>
        </div>

    </div>
    <script>
        sessionStorage.clear();
    </script>
</body>

</html>