<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Store as Store;

class ViewController extends BaseController
{
    
    /**
     * Lists the stores on the database based on the user type
     *	(admins can see the whole list, users only the open stores)
     *
	 * @param Request $request The request with the new store params
	 * @return JSON object with the list of stores
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function list(Request $request) 
    {
        $control = new StoreController;
        $stores = $control->list($request);
        dd($stores);

    	return view('store.list')
            ->with('list', $stores)
            ->with('admin', (bool) $request->get('admin'));
    }

}
