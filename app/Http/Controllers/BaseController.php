<?php

namespace App\Http\Controllers;

use App;
//use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Route; // teste
use DB; // teste
use Session; // teste

class BaseController extends Controller {
    public function __construct() {
        //$this->beforeFilter(function() {
        $this->middleware(function() {
            View::share('typenav', CarType::all());
        });
    }
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
}


//$this->middleware(function() {
