<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends RepositoryInterface
{
    function __construct(public User $user) {}

    public function get(int $id) : Model {
        return $this->user->find($id);
    }

    public function fetch() : Collection {
        return $this->user->get();
    }

    public function create(array $params) : Model {
        return $this->user->create($params);
    }

    public function update(int $id, array $params) : Model {
        return $this->user->find($id)->update($params);
    }

    public function delete(int $id) : void {
        $this->user->delete($id);
    }
}