@extends('layouts.default')

@section('title', 'Modifica fumetto')

@section('content')
<div class="container">

  @if($errors->any())
  <div class="alert alert-danger mt-5" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{route("comics.update", $comic->id)}}" method="post" class="py-5">
    @csrf
    @method("PATCH")

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Titolo" name="title">
      <label for="floatingInput">Titolo</label>
    </div>

    <div class="form-floating mb-3">
      <textarea class="form-control" id="floatingInput" placeholder="Descrizione" style="height:200px" name="description"></textarea>
      <label for="floatingTextarea2">Descrizione</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Immagine" name="thumb">
      <label for="floatingInput">Immagine</label>
    </div>

    <div class="form-floating mb-3">
      <input type="number" class="form-control" id="floatingInput" placeholder="Prezzo" name="price">
      <label for="floatingInput">Prezzo</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Serie" name="series">
      <label for="floatingInput">Serie</label>
    </div>

    <div class="form-floating mb-3">
      <input type="date" class="form-control" id="floatingInput" placeholder="Pubblicazione" name="sale_date">
      <label for="floatingInput">Pubblicazione</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Categoria" name="type">
      <label for="floatingInput">Categoria</label>
    </div>

    <input type="submit" value="Aggiungi fumetto" class="btn btn-primary mt-3"></a>
  </form>
</div>
@endsection