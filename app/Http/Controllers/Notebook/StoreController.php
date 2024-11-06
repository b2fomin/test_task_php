<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
        $this->service->store($data);
    }
}
