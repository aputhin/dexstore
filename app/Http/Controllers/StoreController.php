<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Store as Store;

class StoreController extends BaseController
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
    	if ($request->get('admin')) {
    		return Store::all();
    	}

    	return Store::where('opens', '<=', Carbon::now()->format('H:i'))
    		->where('closes', '>=', Carbon::now()->format('H:i'))
    		->get();
    }

    /**
     * Inserts a store in the database
     *
	 * @param Request $request The request with the store params
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function save(Request $request) 
    {
    	$store = new Store();
        if (strlen($request->get('id')) > 0) {
            $store = Store::find($request->get('id'));
        }

    	$this->parseAttributes($store, $request);

    	$store->save();
    }

    /**
     * Removes a store from the database by it's id
     *
     * @param Int $id The id of the store
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function remove(int $id) 
    {
    	Store::destroy($id);
    }

    /**
     * Fetches a store based on its id
     *
     * @param Int $id The id of the store
     * @return Store corresponding to that id
     * 
     * @author arthur.puthin
     * @since 2016-12-14
     */
    public function get(int $id) 
    {
        return Store::find($id);
    }


    /**
     * Parses the store attributes for adding or editing
     *
     * @param Store &$store The store to have it's attributes parsed
	 * @param Request $request The request with the store params
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    private function parseAttributes(Store &$store, Request $request) 
    {
    	$store->name           = $request->get('name');
    	$store->logo_link      = $request->get('logo');
    	$store->description    = $request->get('desc');
    	$store->opens          = $request->get('opens');
    	$store->closes         = $request->get('closes');
    }

}
