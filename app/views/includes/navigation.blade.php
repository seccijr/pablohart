<ul class="menuNavigation">
    @foreach ($locations as $name => $location)
        <li href="{{ isset($location['url']) ?$location['url'] : '' }}"
            class="mpa {{ isset($location['selected']) ? 'selected' : '' }}">
            <a href="{{ isset($location['url']) ?$location['url'] : '' }}"
                class="{{ isset($location['selected']) ? 'selected' : '' }}"
                title="{{ $name }}">
                {{ $name }}
            </a>
            @if (isset($location->children))
            <ul class="subMenu">
                @foreach ($location->children as $childName => $child)
                    <li>
                        <a href="{{ isset($child['url']) ? $child['url'] : '' }}" title="{{ $childName }}">{{ $childName }}</a>
                    </li>
                @endforeach
            </ul>
            @endif
        </li>
    @endforeach
</ul>
