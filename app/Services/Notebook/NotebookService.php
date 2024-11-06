<?php

namespace App\Services\Notebook;

use App\Models\Notebook;

class NotebookService 
{
    public function store(array $data) {
        Notebook::createOrFirst($data);
    }

    public function edit(int $id, array $data) {
        Notebook::findOrFail($id)->updateOrFail($data);
    }

    public function show(int $id) {
        return Notebook::findOrFail($id);
    }

    public function delete(int $id) {
        Notebook::findOrFail($id)->delete();
    }

    public function index() {
        return Notebook::all();
    }
};

