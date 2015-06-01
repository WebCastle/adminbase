<?php namespace App\Http\Controllers\Admin\Ajax;

use App\Http\Requests;
use App\Http\Controllers\AdminController;

use App\User;
use App\Models\Role;
use Illuminate\Http\Request;

use Auth;
use Datatables;
use Input;
use Willishq\Flash\Flash;


class UserController extends AdminController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    protected $flash;

    public function __construct(Flash $flash){

        if( ! Auth::user()->hasRole('admin') ){
            abort(403);
        }

        parent::__construct($flash);
    }

    public function postList(Request $request)
    {
        $perms = User::select(array('id', 'name', 'email', 'created_at'));

        return Datatables::of($perms)
            ->addColumn('buttons','
                <div class="btn-group">
                                <a href="{{route(\'admin_users_view\', [\'id\'=>$id])}}" class="btn btn-primary" type="button">Просмотр</a>
                            </div>
            ')
            ->filter(function($query){
                if (Input::get('search_id')) {
                    $query->where('id','=',Input::get('search_id'));
                }
                if (Input::get('search_name')) {
                    $query->where('name', 'LIKE', '%'.Input::get('search_name').'%' );
                }
                if (Input::get('search_email')) {
                    $query->where('email', 'LIKE', '%'.Input::get('search_email').'%' );
                }
            })
            ->make();
    }

    public function role(Request $request)
    {
        $userId = $request->input('user_id');
        $user = User::findOrFail($userId);
        $roleId = $request->input('role_id');
        $role = Role::findOrFail($roleId);
        $allow = $request->input('allow');
        if ($allow)
        {
            $user->roles()->detach($role->id);
            $user->roles()->attach($role->id);
        }
        else
        {
            $user->roles()->detach($role->id);
        }
        return array();
    }

}
