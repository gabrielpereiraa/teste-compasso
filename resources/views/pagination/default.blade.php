<div class="d-flex justify-content-between px-0">

    @php
        $interval = isset($interval) ? abs(intval($interval)) : 3 ;
        $from = $paginator->currentPage() - $interval;
        if($from < 1){
            $from = 1;
        }

        $to = $paginator->currentPage() + $interval;
        if($to > $paginator->lastPage()){
            $to = $paginator->lastPage();
        }

        if($paginator->total() <= $paginator->perPage()){
            $disabled = true;
        }else{
            $disabled = false;
        }


    @endphp

    @if($paginator->currentPage() > 1)
        <ul class="list-pagination-prev pagination pagination-tabs card-pagination mb-0">
            <li class="page-item">
                <a class="page-link ps-0 pe-4 border-end {{ $disabled ? 'footer-disabled' : '' }}"  href="{{ $paginator->url($paginator->currentPage() - 1) }}">
                    <i class="fa fa-chevron-left me-1"></i> Prev
                </a>
            </li>
        </ul>
    @else
        <ul class="list-pagination-prev pagination pagination-tabs card-pagination mb-0">
            <li class="page-item">
                <a class="page-link ps-0 pe-4 border-end {{ $disabled ? 'footer-disabled' : '' }}" href="#">
                    <i class="fa fa-chevron-left me-1"></i> Prev
                </a>
            </li>
        </ul>
    @endif

    <ul class="list-pagination pagination pagination-tabs card-pagination mb-0">
        @for($i = $from; $i <= $to; $i++)
            <?php
            $isCurrentPage = $paginator->currentPage() == $i;
            ?>

                <li class="pb-0 page-item {{ $isCurrentPage ? 'active' : '' }}">
                    <a class="page-link {{ $disabled ? 'footer-disabled' : '' }}"  href="{{ !$isCurrentPage ? $paginator->url($i) : '#' }}">
                        {{ $i }}
                    </a>
                </li>

        @endfor
    </ul>

    @if($paginator->currentPage() < $paginator->lastPage())
        <ul class="list-pagination-next pagination pagination-tabs card-pagination mb-0">
            <li class="page-item">
                <a class="page-link ps-4 pe-0 border-start {{ $disabled ? 'footer-disabled' : '' }}"  href="{{ $paginator->url($paginator->currentPage() + 1) }}">
                    Next <i class="fa fa-chevron-right ms-1"></i>
                </a>
            </li>
        </ul>
    @else
        <ul class="list-pagination-next pagination pagination-tabs card-pagination mb-0">
            <li class="page-item">
                <a class="page-link ps-4 pe-0 border-start {{ $disabled ? 'footer-disabled' : '' }}"  href="{{ $paginator->url($paginator->currentPage() + 1) }}">
                    Next <i class="fa fa-chevron-right ms-1"></i>
                </a>
            </li>
        </ul>
    @endif
</div>




