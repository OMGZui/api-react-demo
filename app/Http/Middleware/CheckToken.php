<?php

namespace App\Http\Middleware;

use App\Model\Project;
use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $project = new Project();
        $list = $project->getList();
        $num = 0;
        foreach ($list as $item) {
            if($item['token'] == 123456){
                $num++;
            }
        }
        if($num != count($list)){
            return response()->json(['code' => 403, 'result' => [], 'msg' => 'token错误']);
        }
        return $next($request);
    }
}
