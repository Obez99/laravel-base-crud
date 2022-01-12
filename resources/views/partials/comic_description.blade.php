<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-8  my-3">
        <h3>{{$comic["title"]}}</h3>
        <table class="table price-table">
          <tbody>
            <tr>
              <td class="price-td"><span>U.S. Price: <span class="text-light">{{$comic["price"]}}</span></span><span>AVAILABLE</span></td>
              <td class="text-center availability-td col-3 text-light">Check Availability <i class="fas fa-caret-down"></i></td>
            </tr>
          </tbody>
        </table>
        <p>{{$comic["description"]}}</p>
      </div>
      <div class="col-4 d-flex flex-column align-items-end">
        <h5 class="text-end">Advertisement</h5>
        <img class="text-end" src="{{asset('img/adv.jpg')}}">
      </div>
    </div>
  </div>
</section>