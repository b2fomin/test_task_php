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
        return Notebook::findOrFail($id, [
        'full_name',
        'company',
        'phone_number',
        'email',
        'date_of_birth',
        'photo']);
    }

    public function delete(int $id) {
        Notebook::findOrFail($id)->delete();
    }

    public function index() {
        return Notebook::all(columns: [
        'full_name',
        'company',
        'phone_number',
        'email',
        'date_of_birth',
        'photo']);
    }
};

