<?php
namespace Sitebill\Realty\app\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    public function index () {
        return view('sitebill_realty::profile.index');

    }
}
