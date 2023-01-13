<nav>
    <ul>
        @foreach ($menu as $item)
            <li><a href="/">{{ $item['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
