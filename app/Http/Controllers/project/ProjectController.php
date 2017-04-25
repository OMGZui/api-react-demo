<?php

namespace App\Http\Controllers\project;

use App\Model\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    protected $project;

    function __construct(Project $project)
    {
        $this->project = $project;
    }

    public function index()
    {
        $list = $this->project->getList();
        return response()->json(['code' => 200, 'result' => $list, 'msg' => '获取成功']);
    }
}
