<?php

namespace App\Repositories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class DocumentRepository extends RepositoryInterface
{
    function __construct(public Document $document) {}

    public function get(int $id) : Model {
        return $this->document->find($id);
    }

    public function fetch() : Collection {
        return $this->document->get();
    }

    public function create(array $params) : Model {
        return $this->document->create($params);
    }

    public function update(int $id, array $params) : Model {
        return $this->document->find($id)->update($params);
    }

    public function delete(int $id) : void {
        $this->document->delete($id);
    }
}