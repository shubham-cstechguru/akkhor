@if ($paginator->hasPages())
<ul class="page">

    @if ($paginator->onFirstPage())
    <li class="disabled page__btn"><span>←</span></li>
    @else
    <li><a href="{{ $paginator->previousPageUrl() }}" class="page__btn" rel="prev">←</a></li>
    @endif



    @foreach ($elements as $element)

    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif



    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page__numbers active my-active"><span>{{ $page }}</span></li>
    @else
    <li class="page__numbers"><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach



    @if ($paginator->hasMorePages())
    <li><a href="{{ $paginator->nextPageUrl() }}" class="page__btn" rel="next">→</a></li>
    @else
    <li class="disabled page__btn"><span>→</span></li>
    @endif
</ul>
@endif