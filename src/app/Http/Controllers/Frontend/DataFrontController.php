<?php
namespace Sitebill\Realty\app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Sitebill\Entity\app\Helpers\Sitebill;
use Sitebill\Entity\app\Models\Config;
use Sitebill\Realty\app\Http\Controllers\Admin\DataCrudController;
use Sitebill\Realty\app\Http\Requests\DataRequest;
use Sitebill\Realty\app\Repositories\DataRepository;

class DataFrontController extends DataCrudController {
    public function show ($id) {
        $data_repository = new DataRepository(app());


        $data = $data_repository->join_select_by_id($id);

        return view('sitebill_realty::realty.show.item', compact('data'));
    }

    public function url_catcher ($slug) {
        $data_repository = new DataRepository(app());
        // Route::current()->parameters();
        $datas = $data_repository->join_select($slug);
        return view('sitebill_realty::home.index', compact('page_title','page_description', 'datas'));
    }


    public function edit($id)
    {
        $this->setup();
        $this->crud->setEditView('sitebill_realty::realty.edit.form');
        return parent::edit($id);
    }

    public function index()
    {
        $this->setup();
        $this->crud->setListView('sitebill_realty::realty.list.crud_list');
        //\Alert::success(trans('sitebill::entity.table_settings_updated'))->flash();

        return parent::index();
    }

    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setModel(\Sitebill\Realty\app\Models\Data::class);
        $this->crud->setRoute(config('sitebill.realty.account_prefix', 'account').'/data');
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


}
