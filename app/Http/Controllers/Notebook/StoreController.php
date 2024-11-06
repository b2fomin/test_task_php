<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {
        try{
            $data = $request->validated();
            $this->service->store($data);
            return response()->json(['success' => True]);
        } catch(\Exception $e) {
            return response()->json(['success' => False, 'err_msg' => $e]);
        }
    }
}
