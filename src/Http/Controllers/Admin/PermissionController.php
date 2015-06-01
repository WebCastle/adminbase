<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\Perms\CreatePermRequest;
use App\Http\Controllers\AdminController;

use App\User;
use Illuminate\Http\Request;

use Auth;
use Laratables;


use App\Models\Role;
use App\Models\Permission;

 use Willishq\Flash\Flash;
use App\Forms\Perms\CreateForm;
use App\Forms\Perms\EditForm;
use App\Http\Requests\Perms\UpdatePermRequest;
use Kris\LaravelFormBuilder\FormBuilder;



class PermissionController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(Request $request)
    {
        $categories = Permission::groupBy('category')->get();
        return view('entrust.perms.list')
            ->with('categories', $categories);
    }


    public function view(Request $request)
    {
        $permission = Permission::findOrFail($request->route('id'));

        return view('entrust.perms.view', ['permission' => $permission]);
    }

    public function create(Request $request, FormBuilder $formBuilder)
    {
        $categories_list = Permission::groupBy('category')->get()->lists('category', 'category');

        $form = $formBuilder->create('App\Forms\Perms\CreateForm', [
            'method' => 'POST',
            'url' => route('admin_perms_store'),
            'data' => [ 'categories' => $categories_list ]
        ])
            ->add('Создать', 'submit');

        return view('entrust.perms.create', compact('form'));
    }


    public function store(Request $request,  CreatePermRequest $p)
    {
        Permission::create($request->all());
        $this->flash->success("Правило доступа создано!");
        return redirect("/admin/perms");
    }


    public function edit(Request $request, FormBuilder $formBuilder)
    {
        $permissionId = $request->route('id');
        $permission = Permission::findOrFail($permissionId);

        $categories_list = Permission::groupBy('category')->get()->lists('category', 'category');

        $form = $formBuilder->create('App\Forms\Perms\CreateForm', [
            'method' => 'POST',
            'url' => route('admin_perms_update', array('id'=>$permissionId)),
            'model' => $permission,
            'data' => [ 'categories' => $categories_list ]
        ])
            ->remove('name')
            ->modify('category', 'choice', [
                'selected' => $permission->category,
            ], false)
            ->add('Редактировать', 'submit');

        return view('entrust.perms.edit', compact('form'))
            ->with('permission', $permission);
    }

    public function update(Request $request, UpdatePermRequest $p)
    {
        $permissionId = $request->route('id');
        $permission = Permission::findOrFail($permissionId);
        $permission->update($request->all());

        $this->flash->success("Право доступа обновлено");
        return redirect('/admin/perms');
    }
}
