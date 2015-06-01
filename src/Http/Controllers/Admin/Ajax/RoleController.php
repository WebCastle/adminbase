<?php namespace App\Http\Controllers\Admin\Ajax;

use App\Http\Requests;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;

use App\Models\Role;
use App\Models\Permission;

use Illuminate\Http\Request;

use Auth;
use Datatables;
use Input;
use Willishq\Flash\Flash;


class RoleController extends AdminController {


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
        $roles = Role::select(array('id', 'name', 'display_name', 'description'));

        return Datatables::of($roles)
            ->addColumn('buttons','
                <div class="btn-group">
                                <a href="{{route(\'admin_roles_view\', [\'id\'=>$id])}}" class="btn btn-primary" type="button">Просмотр</a>
                            </div>
            ')
            ->filter(function($query){
                if (Input::get('search_id')) {
                    $query->where('id','=',Input::get('search_id'));
                }
                if (Input::get('search_name')) {
                    $query->where('display_name', 'LIKE', '%'.Input::get('search_name').'%' );
                }
                if (Input::get('search_machine_name')) {
                    $query->where('email', 'LIKE', '%'.Input::get('search_machine_name').'%' );
                }
            })
            ->make();
    }

    public function perm(Request $request)
    {
        $role = Role::findOrFail($request->input('role_id'));
        $permission = Permission::findOrFail($request->input('perm_id'));
        $allow = $request->input('allow');

        if ($allow )
        {
            $role->perms()->detach( $permission->id );
            $role->perms()->attach( $permission->id );
        }
        else
        {
            $role->perms()->detach( $permission->id );
        }

        return Response::json(array());
    }

    public function category(Request $request)
    {
        $allow = $request->input('allow');
        $category = $request->input('category');
        $role = Role::findOrFail($request->input('role_id'));

        $permsIds = Permission::where('category', '=', $category)->get()->lists('id');

        if ($allow )
        {
            $role->perms()->detach( $permsIds );
            $role->perms()->attach( $permsIds );
        }
        else
        {
            $role->perms()->detach( $permsIds );
        }

        return Response::json(array());
    }

}
