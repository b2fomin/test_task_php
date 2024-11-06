<?php

namespace App\Http\Controllers\Notebook;

use App\Models\Notebook;

class IndexController extends BaseController
{
    public function __invoke() {
        return Notebook::all();
    }
}
