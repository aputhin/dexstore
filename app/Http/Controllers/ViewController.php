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
     *  (admins manage the whole list, users only read the open stores)
     *
     * @param Request $request The request with admin key
     * @return View with the list of stores (depending on the kind of user)
     * 
     * @author arthur.puthin
     * @since 2016-12-13
     */
    public function list(Request $request) 
    {
        $control = new StoreController;
        $stores = $control->list($request);

        return view('store.list')
            ->with('list', $stores)
            ->with('admin', (bool) $request->get('admin'));
    }

    /**
     * Returns a single store for editing
     *
     * @param Int $id the ID of the store to be edited
     * @return View with the editable store
     * 
     * @author arthur.puthin
     * @since 2016-12-14
     */
    public function get(int $id) 
    {
        $control = new StoreController;
        $store = $control->get($id);

        return view('store.edit')->with('store', $store);
    }

    /**
     * Removes a store by its' ID.
     *
     * @param Int $id the ID of the store to be removed
     * @return String script with confirmation and redir
     * 
     * @author arthur.puthin
     * @since 2016-12-14
     */
    public function rm(int $id) 
    {
        $control = new StoreController;
        $store = $control->remove($id);

        return '<script>alert(\'Loja removida!\'); window.location.replace(\'/list?admin=1\');</script>';
    }

}
