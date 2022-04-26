<?php

use Illuminate\Container\Container;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

function paginate(Collection $results, $showPerPage, $pageName)
{
    $pageNumber = Paginator::resolveCurrentPage($pageName);
    
    $totalPageNumber = $results->count();

    return paginator($results->forPage($pageNumber, $showPerPage), $totalPageNumber, $showPerPage, $pageNumber, [
        'path' => Paginator::resolveCurrentPath(),
        'pageName' =>$pageName,
    ]);

}

function paginator($items, $total, $perPage, $currentPage, $options)
{
    return Container::getInstance()->makeWith(LengthAwarePaginator::class, compact(
        'items', 'total', 'perPage', 'currentPage', 'options'
    ));
}