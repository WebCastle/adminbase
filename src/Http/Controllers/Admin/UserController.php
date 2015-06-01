<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Controllers\AdminController;

use App\Models\Role;
use Illuminate\Http\Request;
use App\User;
use App\Forms\Users\UpdateUserForm;
use App\Forms\Users\CreateUserForm;
use Kris\LaravelFormBuilder\FormBuilder;

class UserController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('entrust.users.list');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(FormBuilder $formBuilder)
	{
        $form = $formBuilder->create('App\Forms\Users\CreateUserForm', [
            'method' => 'POST',
            'url' => route('admin_users_store')
        ])->add('Создать', 'submit');

        return view('entrust.users.create', compact('form'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, CreateUserRequest $q)
	{
        User::create($request->all());
        $this->flash->success("Пользователь создан");
        return redirect("/admin/users");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::findOrFail($id);

		return view('entrust.users.view')
            ->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, FormBuilder $formBuilder, Request $request)
	{
        $user = User::findOrFail($request->route('id'));
        $form = $formBuilder->create('App\Forms\Users\UpdateUserForm', [
            'method' => 'POST',
            'url' => route('admin_users_update', ['id' => $user->id]),
            'model' => $user,
        ])
            ->remove('password')
            ->add('Редактировать', 'submit');
        $roles = Role::all();

        return view('entrust.users.edit', compact($form))
            ->with('user', $user)
            ->with('roles', $roles)
            ->with('form', $form);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($userId, Request $request)
	{
        $role = User::findOrFail($userId);
        $role->update($request->all());

        $this->flash->success("Пользователь обновлен");
        return redirect('/admin/users/'.$request->route('id'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
