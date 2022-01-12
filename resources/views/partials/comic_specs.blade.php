<div class="container">
  <div class="row">
    <div class="col-6">
      <table class="table">
        <tbody>
          <tr>
            <td><h4>Talent</h4></td>
            <td></td>
          </tr>
          <tr>
            <td>Art by:</td>
            <td class="td-authors">
              @foreach ($comic["artists"] as $artist)
                <a href="#">{{$artist}}</a><span>{{$loop->last ? "." : ","}}</span>
              @endforeach
            </td>
          </tr>
          <tr>
            <td>Written by:</td>
            <td class="td-authors">
              @foreach ($comic["writers"] as $writer)
              <a href="#">{{$writer}}</a><span>{{$loop->last ? "." : ","}}</span>
              @endforeach
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-6">
      <table class="table">
        <tbody>
          <tr>
            <td><h4>Specs</h4></td>
            <td></td>
          </tr>
          <tr>
            <td>Series:</td>
            <td><a href="#" class="text-uppercase">{{$comic["series"]}}</a></td>
          </tr>
          <tr>
            <td>U.S. Price:</td>
            <td>{{$comic["price"]}}</td>
          </tr>
          <tr>
            <td>On Sale Date:</td>
            <td>
              @php
                  $comic_date = new DateTime($comic["sale_date"]);
                  echo $comic_date->format('M d Y');
              @endphp
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>