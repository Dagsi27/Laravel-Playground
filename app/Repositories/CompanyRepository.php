<?php

namespace App\Repositories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository implements RepositoryInterface
{
    function __construct(protected Company $company) {}

    public function get(int $id) : Model {
        return $this->company->find($id);
    }

    public function fetch() : Collection {
        return $this->company->get();
    }

    public function create(array $params) : Model {
        return $this->company->create($params);
    }

    public function update(int $id, array $params) : Model {
        return $this->company->find($id)->update($params);
    }

    public function delete(int $id) : void {
        $this->company->delete($id);
    }
}