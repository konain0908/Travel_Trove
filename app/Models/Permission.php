<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;

class Permission extends Model
{
    use HasFactory;
    static public function getRecord()
    {
        $getPermission = Permission::groupBy('groupby')->get();
        $result = array();
        foreach($getPermission as $value){

            $getPermissionGroup = Permission::getPermissionGroup($value->groupby);
            $data = array();
            $data['id'] = $value->id;
            $data['name'] = $value->name;
            $group = array();
            foreach ($getPermissionGroup as $valueG) {
                $dataG  = array();
                $dataG['id'] = $valueG->id;
                $dataG['name'] = $valueG->name;
                $group[] = $dataG;
            }
            $data['group'] = $group;
            $result[] = $data;
        }
        return $result;
    }

    static public function getPermissionGroup($groupby)
    {
        return  Permission::where('groupby', '=', $groupby)->get();
    }
    protected $fillable = ['name', 'slug', 'groupby'];
}
