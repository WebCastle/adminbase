<?php namespace App\Http\Requests\Perms;

use App\Http\Requests\Request;

class CreatePermRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'name' => 'required|unique:permissions',
            'display_name' => 'required|unique:permissions,display_name,NULL,id,category,'.$this->get('category'),
            'category' => 'required'
		];
	}

}
