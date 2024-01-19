<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    public function get(int $id): Model;
    public function fetch(): Collection;
    public function create(array $params): Model;
    public function update(int $id, array $params): Model;
    public function delete(int $id): void;
}