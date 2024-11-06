<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\DeleteRequest;

class DeleteController extends BaseController
{
    public function __invoke(DeleteRequest $request) {
        $data = $request->validated();
        $this->service->delete($data['id']);
    }
}
