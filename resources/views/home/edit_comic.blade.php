@extends('layouts.default')

@section('title', 'Modifica fumetto')

@section('content')
<div class="container">

  @if($errors->any())
  <div class="alert alert-danger mt-5" role="alert">
    <ul class="mb-0">
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
      <input type="text" class="form-control" id="floatingInput" placeholder="Titolo" value="{{$comic->title}}" name="title">
      <label for="floatingInput">Titolo</label>
    </div>

    <div class="form-floating mb-3">
      <textarea class="form-control" id="floatingInput" placeholder="Descrizione" style="height:200px" name="description">{{$comic->description}}</textarea>
      <label for="floatingTextarea2">Descrizione</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Immagine" value="{{$comic->thumb ?? $comic->old("thumb")}}" name="thumb">
      <label for="floatingInput">Immagine</label>
    </div>

    <div class="form-floating mb-3">
      <input type="number" step="0.99" class="form-control" id="floatingInput" placeholder="Prezzo" value="{{$comic->price}}" name="price">
      <label for="floatingInput">Prezzo</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Serie" value="{{$comic->series}}" name="series">
      <label for="floatingInput">Serie</label>
    </div>

    <div class="form-floating mb-3">
      <input type="date" class="form-control" id="floatingInput" placeholder="Pubblicazione" value="{{$comic->sale_date}}" name="sale_date">
      <label for="floatingInput">Pubblicazione</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Categoria" value="{{$comic->type}}" name="type">
      <label for="floatingInput">Categoria</label>
    </div>

    <div class="d-flex align-items-center mt-5">
      <input type="submit" value="Salva modifiche" class="btn btn-primary">
      <a href="{{route("comics.show", $comic->id)}}" class="btn btn-secondary ms-3">Annulla</a>
    </div>
  </form>
</div>
@endsection