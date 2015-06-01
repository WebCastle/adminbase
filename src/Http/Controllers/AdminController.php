<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Willishq\Flash\Flash;
use View;
use Auth;

abstract class AdminController extends BaseController {


    /**
     * @var Flash
     */
    protected $flash;

    /**
     * @var User
     */
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Flash $flash){
        $this->flash = $flash;
        $this->user = Auth::user();
        $this->middleware('admin');
        View::addLocation(base_path() . '/resources/admin/views/');
    }

}
