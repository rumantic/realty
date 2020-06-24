<?php

namespace Sitebill\Realty\app\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Sitebill\Entity\app\Http\Controllers\Admin\EntityCrudController;
use Sitebill\Entity\app\Http\Requests\EntityRequest;

class ClientCrudController extends EntityCrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;

    use \Sitebill\Entity\app\Http\Controllers\Traits\Columns;

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel(\Sitebill\Realty\app\Models\Client::class);
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/client');
        $this->crud->setEntityNameStrings('client', 'clients');
        $this->setEntityRequest(EntityRequest::class);
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
}
