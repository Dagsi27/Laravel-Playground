<?php

namespace App\Repositories;

use App\Models\OutstandingBalanceReport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class OutstandingBalanceReportRepository extends RepositoryInterface
{
    function __construct(public OutstandingBalanceReport $outstandingBalanceReport) {}

    public function get(int $id) : Model {
        return $this->outstandingBalanceReport->find($id);
    }

    public function fetch() : Collection {
        return $this->outstandingBalanceReport->get();
    }

    public function create(array $params) : Model {
        return $this->outstandingBalanceReport->create($params);
    }

    public function update(int $id, array $params) : Model {
        return $this->outstandingBalanceReport->find($id)->update($params);
    }

    public function delete(int $id) : void {
        $this->outstandingBalanceReport->delete($id);
    }
}