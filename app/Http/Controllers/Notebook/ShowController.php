<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Requests\Notebook\ShowRequest;
use App\Models\Notebook;

class ShowController extends BaseController
{
    public function __invoke(int $id) {
        return $this->service->show($id);
    }
}
