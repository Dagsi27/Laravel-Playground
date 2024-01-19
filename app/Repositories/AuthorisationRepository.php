<?php

namespace App\Repositories;

use App\Models\Authorisation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AuthorisationRepository extends RepositoryInterface
{
    function __construct(public Authorisation $authorisation) {}

    public function get(int $id) : Model {
        return $this->authorisation->find($id);
    }

    public function fetch() : Collection {
        return $this->authorisation->get();
    }

    public function create(array $params) : Model {
        return $this->authorisation->create($params);
    }

    public function update(int $id, array $params) : Model {
        return $this->authorisation->find($id)->update($params);
    }

    public function delete(int $id) : void {
        $this->authorisation->delete($id);
    }
}