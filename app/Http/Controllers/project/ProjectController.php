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
        parent::__construct();
        $this->project = $project;
    }

    public function index()
    {
        $list = $this->project->getList();
        return response(['code' => 200, 'result' => $list, 'msg' => '获取成功'])
            ->withHeaders([
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => 'GET, PUT, POST, DELETE, HEAD, OPTIONS',
                'Access-Control-Allow-Headers' => 'X-Requested-With, Origin, X-Csrftoken, Content-Type, Accept,Acc-Token'
            ])
            ;

    }
}
