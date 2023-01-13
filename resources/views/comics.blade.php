@extends('layout.base')

@section('content')
  <main>
    <div class="container">
      <h1>current series</h1>
      @foreach ($comics as $item)
      <div class="card">
        <div class="contents">
          <img src="{{ $item['thumb'] }}" alt="/">
          <h2 class="title">{{ $item['title'] }}</h2>
        </div>
      </div>
      @endforeach
      <button>load more</button>
    </div>
    <div class="prefooter">
        <div class="container">
          <img src="{{ asset('/img/buy-comics-digital-comics.png') }}" alt="">
          <span>digital comics</span>
          <img src="{{asset('/img/buy-comics-merchandise.png')}}" alt="">
          <span>dc merchandise</span>
          <img src="{{asset('/img/buy-comics-subscriptions.png')}}" alt="">
          <span>subscription</span>
          <img src="{{asset('/img/buy-comics-shop-locator.png')}}" alt="">
          <span>dcomic shop locator</span>
          <img src="{{asset('/img/buy-dc-power-visa.svg')}}" alt="">
          <span>dc power visa</span>
        </div>
      </div>
  </main>
@endsection
