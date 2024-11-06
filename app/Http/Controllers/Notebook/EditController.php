<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\EditRequest;

class EditController extends BaseController
{
    public function __invoke(int $id, EditRequest $request) {
        try {
            $data = $request->validated();
            $this->service->edit($id, $data);
            return response()->json(['success' => True]);
        } catch (\Exception $e) {
            return response()->json(['success' => False, 'err_msg' => $e]);
        }
    }
}
