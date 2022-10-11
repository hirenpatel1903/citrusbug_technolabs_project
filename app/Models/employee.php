<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'name', 'gender', 'languages', 'address',
    ];

    public static function createEmployee($request) {
        $data = new employee();
        $data->name = $request->name ?? NULL;
        $data->gender = implode(',', $request->gender);
        $data->languages = implode(',', $request->languages);
        $data->address = $request->address ?? NULL;

        $data->save();
        return $data;
    }

}
