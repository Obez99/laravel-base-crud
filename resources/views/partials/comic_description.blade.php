<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-8  my-3">
        <h3>{{$comic->title}}</h3>
        <table class="table price-table">
          <tbody>
            <tr>
              <td class="price-td"><span>U.S. Price: <span class="text-light">{{$comic->price ? "$ " . $comic->price : "Nessun prezzo disponibile."}}</span></span><span>AVAILABLE</span></td>
              <td class="text-center availability-td col-3 text-light">Check Availability <i class="fas fa-caret-down"></i></td>
            </tr>
          </tbody>
        </table>
        <p>{{$comic->description}}</p>

        <ul class="list-group">
          <li class="list-group-item list-group-item-success"><strong>Serie:</strong> {{$comic->series}}</li>
          <li class="list-group-item list-group-item-success"><strong>Pubblicazione:</strong> {{$comic->sale_date ? $comic->sale_date : "Nessuna data disponibile."}}</li>
          <li class="list-group-item list-group-item-success"><strong>Genere:</strong> {{$comic->type}}</li>
        </ul>
        
        <form action="{{route("comics.destroy", $comic->id)}}" method="post" class="delete-form">
          @csrf
          @method("DELETE")
          <input type="submit" value="Elimina" class="btn btn-outline-danger mt-5 float-end">
        </form>

        <a href="{{route("comics.edit", $comic->id)}}" class="btn btn-outline-primary me-3 mt-5 float-end">Modifica</a>
      </div>
      <div class="col-4 d-flex flex-column align-items-end">
        <h5 class="text-end">Advertisement</h5>
        <img class="text-end" src="{{asset('img/adv.jpg')}}">
      </div>
    </div>
  </div>

  <script src="{{asset('js/app.js')}}"></script>
</section>