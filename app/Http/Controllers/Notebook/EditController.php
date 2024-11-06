<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\EditRequest;

class EditController extends BaseController
{
    public function __invoke(EditRequest $request) {
        $data = $request->validated();
        $id = $data['id'];
        unset($data['id']);
        $this->service->edit($id, $data);
    }
}
