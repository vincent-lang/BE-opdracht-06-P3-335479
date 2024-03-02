<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Levering product page</title>
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
        <h1>Levering product</h1>
    </div>

    <div class="contact">
        <h3>Leverancier: {{$info->naam}}</h3>
        <h3>Contact persoon: {{$info->contactPersoon}}</h3>
        <h3>Mobiel: {{$info->mobiel}}</h3>
    </div>
    <div class="form">
        @foreach($leverings as $levering)
        <form action="{{route('update.index', [$info->id,$data->id])}}" method="post">
            @csrf
            @method('put')
            <div class="section">
                <label for="aantal">Aantal producteenheden</label>
                @foreach($magazijns as $magazijn)
                <input id="amount" type="text" name="aantalAanwezig" value="{{$magazijn->aantalAanwezig}}" required>
                @endforeach
            </div>
            <div class="section">
                <label for="datumEerstVolgendeLevering">Datum eerst volgende levering</label>
                <input type="date" name="datumLevering" value="{{$levering->datumLevering}}" required>
            </div>
            <div class="section submit">
                <input id="submit" type="submit" value="Sla op">
                <div class="buttons">
                    <a href="{{route('product.index', [$info->id])}}">Terug</a>
                </div>
                <div class="buttons">
                    <a href="{{route('home')}}">Home</a>
                </div>
            </div>
        </form>
        @endforeach
    </div>

    <script>
        const button = document.querySelector('#submit');
        const data = document.querySelector('#amount');
        const getStorage = sessionStorage.getItem("aantal");
        button.addEventListener("click", () => {
            const setStorage = window.sessionStorage.setItem("aantal", data.value);
        });
        if (getStorage != null) {
            data.value = getStorage;
        }
    </script>

    @if(session()->has('succes'))
    <h3 class="succes-text">
        {{session('succes')}}
    </h3>
    <script>
        setTimeout(function() {
            window.location.href = "{{route('productperleverancier.index', [$info->id, $data->id])}}";
        }, 3000);
    </script>
    @endif
</body>

</html>