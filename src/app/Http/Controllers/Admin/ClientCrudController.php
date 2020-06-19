<?php

namespace Sitebill\Realty\app\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Sitebill\Realty\app\Http\Requests\DataRequest;

class ClientCrudController extends CrudController
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

        /*
        |--------------------------------------------------------------------------
        | LIST OPERATION
        |--------------------------------------------------------------------------
        */
        $this->crud->operation('list', function () {
            $this->getEntityColumns();
        });

        /*
        |--------------------------------------------------------------------------
        | CREATE & UPDATE OPERATIONS
        |--------------------------------------------------------------------------
        */
        $this->crud->operation(['create', 'update'], function () {

            $this->crud->addField([
                'name' => 'text',
                'label' => 'Text',
                'type' => 'ckeditor',
                'placeholder' => 'Your title here',
            ]);
            $this->crud->addField([
                'name' => 'date_added',
                'label' => 'Date',
                'type' => 'date',
                'default' => date('Y-m-d'),
            ]);
            $this->crud->addField([
                'label' => 'Topic',
                'type' => 'select2_nested',
                'name' => 'topic_id',
                'entity' => 'topic',
                'attribute' => 'name',
                'inline_create' => true,
                'model' => "Sitebill\Realty\app\Models\Topic", // force foreign key model

                //'ajax' => true,
            ]);

            /*
            $this->crud->addField([
                'name' => 'content',
                'label' => 'Content',
                'type' => 'ckeditor',
                'placeholder' => 'Your textarea text here',
            ]);
            $this->crud->addField([
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
            ]);
            $this->crud->addField([
                'label' => 'Tags',
                'type' => 'relationship',
                'name' => 'tags', // the method that defines the relationship in your Model
                'entity' => 'tags', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
                'inline_create' => ['entity' => 'tag'],
                'ajax' => true,
            ]);
            $this->crud->addField([
                'name' => 'status',
                'label' => 'Status',
                'type' => 'enum',
            ]);
            $this->crud->addField([
                'name' => 'featured',
                'label' => 'Featured item',
                'type' => 'checkbox',
            ]);
            */
        });
    }
}
