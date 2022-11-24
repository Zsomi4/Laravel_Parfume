<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<title>Termékek</title>

@extends( "layouts.master" )

@section( "content" )
<h1>Új Termék</h1>
@if( $errors->any() )
    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif

<form action="/add-perfume" method="post">
    @csrf
    <p>
        <label for="">Név</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type">
    </p>
    <p>
        <label for="">Ár</label>
        <input type="text" name="price">
    </p>
    <p>
        <button type="submit" class="btn btn-success">Küldés</button> <a href="perfumes"><button type="button" class="btn btn-warning">Termékek</button></a>
    </p>
</form>
@endsection
