<?php namespace App\Http\Controllers\Admin\Ajax;

use App\Http\Requests;

use App\Http\Controllers\AdminController;

use App\Models\Permission;
use Illuminate\Http\Request;

use Auth;
use Datatables;
use Input;
use Willishq\Flash\Flash;

class PermissionController extends AdminController {

    public function __construct(Flash $flash){

        if( ! Auth::user()->hasRole('admin') ){
            abort(403);
        }

        parent::__construct($flash);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function postList(Request $request)
    {

        $perms = Permission::select(array('id', 'name', 'display_name', 'category', 'description'));

        return Datatables::of($perms)
            ->addColumn('buttons','
                <div class="btn-group">
                                <a href="{{route(\'admin_perms_view\', [\'id\'=>$id])}}" class="btn btn-default btn-xs" type="button">Просмотр</a>
                            </div>
            ')
            ->filter(function($query){
                if (Input::get('search_id')) {
                    $query->where('id','=',Input::get('search_id'));
                }
                if (Input::get('search_name')) {
                    $query->where('name', 'LIKE', '%'.Input::get('search_name').'%' );
                }
                if (Input::get('search_machine_name')) {
                    $query->where('display_name', 'LIKE', '%'.Input::get('search_machine_name').'%' );
                }
            })
            ->make();
    }

}
