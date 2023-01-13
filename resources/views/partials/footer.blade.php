<footer>
    <div class="container">
      <div class="link-footer">
        @foreach ($link as $obj)
        <ul>
            <li><h2>{{ $obj['title'] }}</h2></li>
            @foreach ($obj['links'] as $item)
            <li><a href="{{ $item['url'] }}">{{ $item['text'] }}</a></li>
            @endforeach
          </ul>
        @endforeach

      </div>
      <img src="{{asset('/img/dc-logo-bg.png')}}" alt="">
    </div>
  </footer>
