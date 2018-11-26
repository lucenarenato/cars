<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Routing\Controller

class BaseController extends Controller {

    public function __construct() {
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
