<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    Halaman Home
    <div class="container">
        <div class="row">
    @foreach($data as $item)
    <div class="col-md-3">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('storage/'.$item->photo) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $item->desc }}</h5>
            <p class="card-text">{{ $item->harga}}</p>
        </div>
    </div>
    </div>
  @endforeach
        </div>
    </div>
    <br>
    <div class="center">
    {{ $data->links() }}
    </div>
</body>
</html>