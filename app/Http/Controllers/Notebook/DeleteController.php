<?php

namespace App\Http\Controllers\Notebook;

class DeleteController extends BaseController
{
    public function __invoke(int $id) {
        $this->service->delete($id);
    }
}
