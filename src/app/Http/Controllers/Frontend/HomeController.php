<?php
namespace Sitebill\Realty\app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Sitebill\Realty\app\Models\Data;
use Sitebill\Realty\app\Repositories\DataRepository;

class HomeController extends Controller {
    public function index () {
        $data_repository = new DataRepository(app());

        //$datas = DB::table('data')->skip(10)->take(25)->get();
        //$datas = Data::all()->skip(10)->take(25);
        $datas = $data_repository->paginate(3, $columns = ['*']);
        return view('sitebill_realty::home.index', compact('page_title','page_description', 'datas'));
    }
}
