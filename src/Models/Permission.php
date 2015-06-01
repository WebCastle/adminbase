<?php namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $fillable = ['name', 'display_name', 'description', 'category'];

    public function scopeCategorize($query)
    {
        return $query->groupBy('category')->get()->keyBy('category')->transform(function($el){
            return Permission::where('category', '=', $el->category)->get();
        });
    }
}