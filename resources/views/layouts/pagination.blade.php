@if ($paginator->hasPages())

    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        
    <button class="news-page-paginate-btn" >
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
                <path
                    d="M11.4165 0.0639724L3.45917 8.03197L11.3728 15.936L12.496 14.8117L5.70557 8.03091L12.5408 1.18611L11.4165 0.0639724Z"
                    fill="black" />
            </g>
            <defs>
                <clipPath id="clip0">
                    <rect width="16" height="16" fill="white"
                        transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 16 16)" />
                </clipPath>
            </defs>
        </svg>

        @lang('messages.prev')
    </button>
    @else
    <a href="#" wire:click="previousPage" class="news-page-paginate-btn" >
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0)">
                <path
                    d="M11.4165 0.0639724L3.45917 8.03197L11.3728 15.936L12.496 14.8117L5.70557 8.03091L12.5408 1.18611L11.4165 0.0639724Z"
                    fill="black" />
            </g>
            <defs>
                <clipPath id="clip0">
                    <rect width="16" height="16" fill="white"
                        transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 16 16)" />
                </clipPath>
            </defs>
        </svg>

        @lang('messages.prev')
    </a>
        
    @endif
    <ul class="news-page-paginate-links">
    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li class="disabled news-page-paginate-links-item"><span>{{ $element }}</span></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    
                    <li class="news-page-paginate-links-item active"><a class="news-page-paginate-links-link " href="#">{{ $page }}</a></li>
                @else
                    <li class="news-page-paginate-links-item"><a class="news-page-paginate-links-link" href="#" wire:click="gotoPage({{$page}}) ">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    </ul>
    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <a  class="news-page-paginate-btn" wire:click="nextPage" href="#" >@lang('messages.next')
            <svg class="news-page-paginate-svg" width="10" height="16" viewBox="0 0 10 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1.58349 0.0639724L9.54083 8.03197L1.62723 15.936L0.504029 14.8117L7.29443 8.03091L0.459228 1.18611L1.58349 0.0639724Z"
                    fill="black" />
            </svg></a></button>
       
    @else
    <button class="news-page-paginate-btn">
        @lang('messages.next')
        <svg class="news-page-paginate-svg" width="10" height="16" viewBox="0 0 10 16" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.58349 0.0639724L9.54083 8.03197L1.62723 15.936L0.504029 14.8117L7.29443 8.03091L0.459228 1.18611L1.58349 0.0639724Z"
                fill="black" />
        </svg>
    </button>
        
    @endif

@endif

