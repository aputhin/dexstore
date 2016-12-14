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

    	return Store::where('opens', '>=', Carbon::now())
    		->where('closes', '<=', Carbon::now())
    		->get();
    }

    /**
     * Inserts a store in the database
     *
	 * @param Request $request The request with the new store params
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function add(Request $request) 
    {
    	$store = new Store();

    	$this->parseAttributes($store, $request);

    	$store->save();

    	return Store::all()->toJson();
    }

    /**
     * Updates a store's attributes
     *
	 * @param Request $request The request with the store id and params
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function edit(Request $request)
    {
    	$store = Store::find($request->get('id'));

    	$this->parseAttributes($store, $request);

    	$store->save();

    	return Store::all()->toJson();
    }

    /**
     * Removes a store from the database by it's id
     *
	 * @param Request $request The request with the store id
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function remove(Request $request) 
    {
    	Store::destroy($request->get('id'));

    	return Store::all()->toJson();
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
    	$store->name = $request->get('name');
    	$store->logo_link = $request->get('link');
    	$store->description = $request->get('description');
    	$store->opens = Carbon::now()->addHours(-2); #TODO
    	$store->closes = Carbon::now()->addHours(2); #TODO
    }

}
