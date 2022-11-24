<title>Termékek</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@extends( "layouts.master" )

@section( "content" )
<h1>Termékek</h1>
<title>Laravel</title>

<a href="/new-perfume"><button type="button" class="btn btn-success">Új termék</button></a>
<br>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <td><b>Id</b></td>
            <td><b>Termék</b></td>
            <td><b>Típus</b></td>
            <td><b>Ár</b></td>
            <td><b>Művelet</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach( $perfumes as $perfume )
            <tr>
                <td>{{ $perfume->id }}</td>
                <td>{{ $perfume->name }}</td>
                <td>{{ $perfume->type }}</td>
                <td>{{ $perfume->price }}</td>
                <td>
                    <a href="/edit-perfume/{{ $perfume->id }}">
                        <button type="button" class="btn btn-warning">Módosítás</button>
                    </a>
                    <a href="/delete-perfume/{{ $perfume->id }}">
                        <button type="button" class="btn btn-danger">Törlés</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>   
</table>
@endsection
