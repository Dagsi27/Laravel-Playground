<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
use App\Http\Resources\User\UserCollectionResource;

class CompanyController extends Controller
{
    function __construct(protected CompanyRepository $companyRepository) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = $this->companyRepository->fetch();

        return UserCollectionResource::make(['data' => $collection, 'count' => $collection->count()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->companyRepository->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
