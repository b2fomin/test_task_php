<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\ShowRequest;
use App\Models\Notebook;

class ShowController extends BaseController
{
    public function __invoke(ShowRequest $request) {
        $data = $request->validated();
        return Notebook::findOrFail($data['id']);
    }
}
