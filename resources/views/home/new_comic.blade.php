@extends('layouts.default')

@section('title', "DC Comics - Aggiungi fumetto")

@section('content')
<div class="container">
  <form action="{{route("store")}}" method="post" class="py-5">
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Titolo">
      <label for="floatingInput">Titolo</label>
    </div>

    <div class="form-floating mb-3">
      <textarea class="form-control" id="floatingInput" placeholder="Descrizione" style="height:200px"></textarea>
      <label for="floatingTextarea2">Descrizione</label>
    </div>

    <div class="mb-3">
      <input class="form-control form-control-lg" id="formFileLg" type="file">
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Prezzo">
      <label for="floatingInput">Prezzo</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Serie">
      <label for="floatingInput">Serie</label>
    </div>

    <div class="form-floating mb-3">
      <input type="date" class="form-control" id="floatingInput" placeholder="Pubblicazione">
      <label for="floatingInput">Pubblicazione</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Categoria">
      <label for="floatingInput">Categoria</label>
    </div>

    <input type="submit" value="Aggiungi fumetto" class="btn btn-primary mt-3"></a>
  </form>
</div>
@endsection