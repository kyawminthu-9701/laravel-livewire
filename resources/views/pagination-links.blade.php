<div>
    @if ($paginator->hasPages())
        <ul class="pagination" role="navigation">
             {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">
                        <span class="d-none d-md-block">&lsaquo;</span>
                        <span class="d-block d-md-none">@lang('pagination.previous')</span>
                    </span>
                </li>
            @else
                <li class="page-item">
                    <button type="button" class="page-link" wire:click="previousPage" rel="prev" aria-label="@lang('pagination.previous')">
                        <span class="d-none d-md-block">&lsaquo;</span>
                        <span class="d-block d-md-none">@lang('pagination.previous')</span>
                    </button>
                </li>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <button type="button" class="page-link" wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">
                        <span class="d-block d-md-none">@lang('pagination.next')</span>
                        <span class="d-none d-md-block">&rsaquo;</span>
                    </button>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">
                        <span class="d-block d-md-none">@lang('pagination.next')</span>
                        <span class="d-none d-md-block">&rsaquo;</span>
                    </span>
                </li>
            @endif
        </ul>
    @endif
</div>
