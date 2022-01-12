@extends('layouts.default')

@section('title', "DC Comics - Homepage")

@section('content')
  <section class="comics-section">
    <div class="container">
    <h4>CURRENT SERIES</h4>

      <div class="comics-container">
        <div class="row row-cols-6">
          <a href="#">
            <div class="col comics-card">
              <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX">
              <h6>Title</h6>
            </div> 
          </a>
        </div>

        <button>LOAD MORE</button>
        <a href="{{route("create")}}">+</a>
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