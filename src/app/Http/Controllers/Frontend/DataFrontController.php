<?php
namespace Sitebill\Realty\app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Sitebill\Realty\app\Repositories\DataRepository;

class DataFrontController extends Controller {
    public function show ($id) {
        $data_repository = new DataRepository(app());


        $data = $data_repository->join_select_by_id($id);

        return view('sitebill_realty::realty.show.item', compact('data'));
    }
}
