@extends('layouts.default')

@section('title', "DC Comics - Homepage")

@section('content')
<section class="comics-section">
  <div class="container">
    <h4>CURRENT SERIES</h4>

      <div class="comics-container">
        <div class="row row-cols-6">
          @foreach ($comics as $comic)
          <a href="{{route("comics.show", $comic->id)}}">
            <div class="col comics-card">
              @if($comic->thumb)
                <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
                @else
                <img src="{{asset('img/no-image.jpg')}}" alt="no-image">
                @endif
                <h6>{{$comic->title}}</h6>
            </div> 
          </a>
          @endforeach
        </div>

        <div class="d-flex justify-content-center">
          <a class="buttons ms-5" href="{{route("comics.create")}}">ADD COMIC</a>
        </div>
      </div>
    </div>
  </section>

  <section class="shop-section">
    <div class="container">
      <div class="row row-cols align-items-center">
        <div class="col">
          <div class="shop-menu-item">
            <a href="#">
            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
            <h6>DIGITAL COMICS</h6>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="shop-menu-item">
            <a href="#">
            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
            <h6>MERCHANDISE</h6>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="shop-menu-item">
            <a href="#">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
            <h6>SUBSCRIPTION</h6>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="shop-menu-item">
            <a href="#">
            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
            <h6>SHOP LOCATOR</h6>
            </a>
          </div>
        </div>
        <div class="col">
          <div class="shop-menu-item">
            <a href="#">
            <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
            <h6>POWER VISA</h6>
            </a>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection