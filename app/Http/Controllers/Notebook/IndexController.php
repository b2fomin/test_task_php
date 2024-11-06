<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\IndexRequest;
use App\Models\Notebook;

class IndexController extends BaseController
{
    public function __invoke(IndexRequest $request) {
        $data = $request->validated();
        $page = $per_page = 1;
        if (isset($data['page'])) {
            $page = $data['page'];
            unset($data['page']);
        }

        if (isset($data['per_page'])) {
            $per_page = $data['per_page'];
            unset($data['per_page']);
        }
        try {
            return Notebook::paginate(perPage: $per_page, page: $page);
        } catch (\Exception $e) {
            return response()->json(['success'=>False, 'err_msg'=>$e]);
        }
    }
}
