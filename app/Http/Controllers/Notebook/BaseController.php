<?php

namespace App\Http\Controllers\Notebook;

use App\Http\Controllers\Controller;
use App\Services\Notebook\NotebookService;

class BaseController extends Controller {
    protected NotebookService $service;

    public function __construct(NotebookService $service) {
        $this->$service = $service;
    }
}