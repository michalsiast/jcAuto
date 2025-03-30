@if($items->count() > 0)
    <ul class="navigation clearfix">
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                } else {
                    $url = url()->to($item->url);
                }
                if($item->target) {
                    $target = $item->target;
                }
                $isActive = request()->fullUrlIs($url);
            @endphp
            @if($item->navItems->count() > 0)
                <li class="dropdown {{ $isActive ? 'current' : '' }}">
                    <a href="{{ $url }}" target="{{ $target }}">{{ $item->label }}</a>
                    <ul>
                        @foreach($item->navItems as $subItem)
                            @php
                                $isActive = false;
                                $url = null;
                                $target = '_self';
                                if($subItem->page) {
                                    $url = route($subItem->page->type);
                                } else {
                                    $url = url()->to($subItem->url);
                                }
                                if($subItem->target) {
                                    $target = $subItem->target;
                                }
                                $isActive = request()->fullUrlIs($url);
                            @endphp
                            @if($subItem->navItems->count() > 0)
                                <li class="dropdown {{ $isActive ? 'current' : '' }}">
                                    <a href="{{ $url }}" target="{{ $target }}">{{ $subItem->label }}</a>
                                    <ul>
                                        @foreach($subItem->navItems as $thirdItem)
                                            @php
                                                $isActive = false;
                                                $url = null;
                                                $target = '_self';
                                                if($thirdItem->page) {
                                                    $url = route($thirdItem->page->type);
                                                } else {
                                                    $url = url()->to($thirdItem->url);
                                                }
                                                if($thirdItem->target) {
                                                    $target = $thirdItem->target;
                                                }
                                                $isActive = request()->fullUrlIs($url);
                                            @endphp
                                            <li class="{{ $isActive ? 'current' : '' }}">
                                                <a href="{{ $url }}" target="{{ $target }}">{{ $thirdItem->label }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="{{ $isActive ? 'current' : '' }}">
                                    <a href="{{ $url }}" target="{{ $target }}">{{ $subItem->label }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="{{ $isActive ? 'current' : '' }}">
                    <a href="{{ $url }}" target="{{ $target }}">{{ $item->label }}</a>
                </li>
            @endif
        @endforeach
    </ul>
@endif
