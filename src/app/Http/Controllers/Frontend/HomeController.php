<?php
namespace Sitebill\Realty\app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Sitebill\Realty\app\Models\Data;

class HomeController extends Controller {
    public function index () {
        //$datas = DB::table('data')->skip(10)->take(25)->get();
        $datas = Data::all()->skip(10)->take(25);
        return view('sitebill_realty::home.index', compact('page_title','page_description', 'datas'));
    }
}
