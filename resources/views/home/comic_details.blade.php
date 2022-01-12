@extends('layouts.default')

@section('title',"DC Comics - " . $comic["title"])

@section('content')
  <section class="divider">
    <div class="container">
      <div class="cover-container">
        <img src="{{$comic["thumb"]}}" alt="">
        <div class="cover-text text-uppercase">{{$comic["type"]}}</div>
        <a href="#" class="cover-text">VIEW GALLERY</a>
      </div>
    </div>
  </section>

  @include('partials.comic_description')

  <section class="table-section">

    @include('partials.comic_specs')

    <div class="full-page-borders">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <a href="#">
                <div class="alt-shop-text">DIGITAL COMICS</div>
                <div class="alt-shop-image img-1"></div>
            </a>
          </div>

          <div class="col-3">
            <div class="alt-shop-text">SHOP DC</div>
            <div class="alt-shop-image img-2"></div>
          </div>
          <div class="col-3">
            <div class="alt-shop-text">SHOP LOCATOR</div>
            <div class="alt-shop-image img-3"></div>
          </div>
          <div class="col-3">
            <div class="alt-shop-text">SUBSCRIPTIONS</div>
            <div class="alt-shop-image img-4"></div>
          </div>
        </div>
      </div>
    </div>

  </section>
@endsection