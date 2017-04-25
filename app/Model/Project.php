<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $fillable = ['name', 'info', 'company', 'logo'];

    public function getList()
    {
        $rs = Project::all();
        return $rs;
    }
}
