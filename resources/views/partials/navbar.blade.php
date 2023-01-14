<nav>
    <ul>
        @foreach ($menu as $item)
            <li><a href="/{{ $item['route'] }}">{{ $item['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
