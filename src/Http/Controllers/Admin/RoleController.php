<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\Roles\CreateRoleRequest;
use App\Http\Requests\Roles\UpdateRoleRequest;
use App\Http\Controllers\AdminController;

use App\User;
use Illuminate\Http\Request;

use Auth;
use Laratables;

use App\Models\Role;
use App\Models\Permission;

//use Willishq\Flash\Flash;
//use Forms\RoleCreateForm;
use Kris\LaravelFormBuilder\FormBuilder;


class RoleController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


    public function index(Request $request)
    {
        return view('entrust.roles.list');
    }


    public function view(Request $request)
    {
        $role = Role::findOrFail($request->route('id'));

        return view('entrust.roles.view', ['role' => $role]);
    }

    public function create(Request $request, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('App\Forms\Roles\RoleForm', [
            'method' => 'POST',
            'url' => route('admin_roles_store')
        ])->add('Создать', 'submit');

        return view('entrust.roles.create', compact('form'));
    }


    public function store(Request $request,  CreateRoleRequest $p)
    {
        Role::create($request->all());
        $this->flash->success("Роль создана");
        return redirect("/admin/roles");
    }


    public function edit(Request $request, FormBuilder $formBuilder)
    {
        $roleId = $request->route('id');
        $role = Role::findOrFail($roleId);
        $form = $formBuilder->create('App\Forms\Roles\RoleForm', [
            'method' => 'POST',
            'url' => route('admin_roles_update', array('id'=>$roleId)),
            'model' => $role,
        ])
            ->remove('name')
            ->add('Редактировать', 'submit');

        $permissionsGroups = Permission::categorize();
        return view('entrust.roles.edit', compact('form'))
            ->with('permissionsGroups', $permissionsGroups)
            ->with('role', $role);
    }

    public function update(Request $request,  UpdateRoleRequest $p)
    {
        $roleId = $request->route('id');
        $role = Role::findOrFail($roleId);
        $role->update($request->all());

        $this->flash->success("Роль обновлена");
        return redirect('/admin/roles/'.$request->route('id'));
    }

}
