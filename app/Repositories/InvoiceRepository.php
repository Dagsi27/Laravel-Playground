<?php

namespace App\Repositories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class InvoiceRepository extends RepositoryInterface
{
    function __construct(public Invoice $invoice) {}

    public function get(int $id) : Model {
        return $this->invoice->find($id);
    }

    public function fetch() : Collection {
        return $this->invoice->get();
    }

    public function create(array $params) : Model {
        return $this->invoice->create($params);
    }

    public function update(int $id, array $params) : Model {
        return $this->invoice->find($id)->update($params);
    }

    public function delete(int $id) : void {
        $this->invoice->delete($id);
    }
}