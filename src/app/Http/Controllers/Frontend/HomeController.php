<?php
namespace Sitebill\Realty\app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index () {
        return view('sitebill_realty::home.index');
    }
}
