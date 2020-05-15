@if ($paginator->hasPages())
    <ul class="page-list clearfix text-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" style="min-height: 40px; width: 120px"><span>← Previous</span></li>
        @else
            <li style="min-height: 40px;"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="width: 120px;min-height: 40px;"><span>← Previous</span></a></li>
        @endif


        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" style="min-height: 40px;"><span>{{ $element }}</span></li>
            @endif


            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active" style="min-height: 40px; background-color:#ff4c4c">
                            <span style="background-color:#ff4c4c">{{ $page }}</span>
                        </li>
                    @else
                        <li style="min-height: 40px;"><a href="{{ $url }}" style="min-height: 40px;">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li style=""><a href="{{ $paginator->nextPageUrl() }}" rel="next" style="width:100px; min-height: 40px;">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
    </ul>
@endif