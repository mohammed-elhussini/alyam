@if ($paginator->hasPages())

        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex flex-wrap py-2 mr-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </a>
            @else

                    <a class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>

            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="btn btn-icon btn-sm btn-light-primary mr-2 my-1" aria-disabled="true"><span class="page-link">{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" aria-current="page"><span class="page-link">{{ $page }}</span></a>
                        @else
                           <a class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())

                    <a class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>

            @else
                <a class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </a>
            @endif
            </div>
        </div>
@endif
