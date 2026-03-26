<?php

namespace JeffersonCarvalho\DataTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \JeffersonCarvalho\DataTables\DataTables
 *
 * @method static \JeffersonCarvalho\DataTables\EloquentDataTable eloquent($builder)
 * @method static \JeffersonCarvalho\DataTables\QueryDataTable query($builder)
 * @method static \JeffersonCarvalho\DataTables\CollectionDataTable collection($collection)
 *
 * @see \JeffersonCarvalho\DataTables\DataTables
 */
class DataTables extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'datatables';
    }
}
