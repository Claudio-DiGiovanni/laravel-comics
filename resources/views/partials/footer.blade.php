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
  <div class="buttons">
    <div class="container">
      <button>sign-up now!</button>
      <div class="social">
        <span>follow us</span>
        <img src="{{asset('/img/footer-facebook.png')}}" alt="">
        <img src="{{asset('/img/footer-twitter.png')}}" alt="">
        <img src="{{asset('/img/footer-youtube.png')}}" alt="">
        <img src="{{asset('/img/footer-pinterest.png')}}" alt="">
        <img src="{{asset('/img/footer-periscope.png')}}" alt="">
      </div>
    </div>
  </div>
