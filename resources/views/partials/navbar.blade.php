<nav>
    <ul>
        @foreach ($menu as $item)
            <li><a href="/comics">{{ $item['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
