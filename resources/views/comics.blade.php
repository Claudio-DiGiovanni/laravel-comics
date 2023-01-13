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
  </main>
@endsection
