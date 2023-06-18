@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @php
                        $showStartDots = false;
                        $showEndDots = false;
                    @endphp

                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            @php
                                // Show only 5 pages around the current page
                                $minPageToShow = $paginator->currentPage() - 2;
                                $maxPageToShow = $paginator->currentPage() + 2;

                                // Show dots if there are more pages before or after the visible range
                                $showStartDots = $showStartDots || ($page < $minPageToShow && $minPageToShow > 1);
                                $showEndDots = $showEndDots || ($page > $maxPageToShow && $maxPageToShow < $paginator->lastPage());

                                // Show page link if it's within the visible range or is one of the first/last pages
                                $showPageLink = $page >= $minPageToShow && $page <= $maxPageToShow;

                            @endphp

                            @if ($showStartDots && $page == $minPageToShow)
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                            @endif

                            @if ($showPageLink)
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif

                            @if ($showEndDots && $page == $maxPageToShow)
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                            @endif
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
