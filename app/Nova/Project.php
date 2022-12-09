<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
//use Outl1ne\NovaSortable\Traits\HasSortableRows;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Laravel\Nova\Http\Requests\NovaRequest;

class Project extends Resource
{

    use HasSortableRows;

    public static $sortableCacheEnabled = false;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_ar';
    public static $priority = 2;

    public static function label()
    {
        return "المشاريع";
    }

    public static function singularLabel()
    {
        return "المشاريع";
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title_ar',
        'title_en',
        'body_ar',
        'body_en',
        'url',

    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [


//            ID::make(__('ID'), 'id')->sortable(),
            BelongsTo::make('Category', 'Category', Category::class)->rules('required'),
            Text::make(trans('lang.title_ar'), 'title_ar')->rules('required'),
            Text::make(trans('lang.title_en'), 'title_en')->rules('required'),
            Text::make(trans('lang.url'), 'url')->hideFromIndex()->rules('required', 'url'),
            Trix::make(trans('lang.body_ar'), 'body_ar')->rules('required'),
            Trix::make(trans('lang.body_en'), 'body_en')->rules('required'),
            Image::make(trans('lang.image'), 'image')->creationRules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [new Metrics\ProjectPerCategory];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function canSort(NovaRequest $request, $resource)
    {
        // Do whatever here, ie:
        // return user()->isAdmin();
        // return $resource->id !== 5;
        return true;
    }
}
