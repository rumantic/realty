<?php

namespace Sitebill\Realty\app\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Sitebill\Entity\app\Http\Controllers\Admin\EntityCrudController;
use Sitebill\Realty\app\Http\Requests\DataRequest;

class DataCrudController extends EntityCrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(\Sitebill\Realty\app\Models\Data::class);
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/data');
        $this->crud->setEntityNameStrings('data', 'data');
        $this->setEntityRequest(DataRequest::class);
        $this->defaultSetup();

        /*
        |--------------------------------------------------------------------------
        | LIST OPERATION
        |--------------------------------------------------------------------------
        */


        /*
        |--------------------------------------------------------------------------
        | CREATE & UPDATE OPERATIONS
        |--------------------------------------------------------------------------
        */
    }

    /**
     * Respond to AJAX calls from the select2 with entries from the Category model.
     * @return JSON
     */
    public function fetchCategory()
    {
        //return $this->fetch(\Backpack\NewsCRUD\app\Models\Category::class);
    }

    /**
     * Respond to AJAX calls from the select2 with entries from the Tag model.
     * @return JSON
     */
    public function fetchTags()
    {
        //return $this->fetch(\Backpack\NewsCRUD\app\Models\Tag::class);
    }
}
