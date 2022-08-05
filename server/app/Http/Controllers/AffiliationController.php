<?php

namespace App\Http\Controllers;

use App\Http\Requests\AffiliationStoreRequest;
use App\Http\Requests\AffiliationUpdateRequest;
use App\Http\Resources\AffiliationResource;
use App\Models\Affiliation;

class AffiliationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affiliations = Affiliation::with(['branches.generations.talents'])->get();
        $affiliationResources = AffiliationResource::collection($affiliations);

        return $this->sendResponse($affiliationResources, 'Data retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AffiliationStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AffiliationStoreRequest $request)
    {
        $affiliation = Affiliation::create($request->validated());

        return $this->sendResponse(new AffiliationResource($affiliation), 'Affiliation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Affiliation  $affiliation
     * @return \Illuminate\Http\Response
     */
    public function show(Affiliation $affiliation)
    {
        return $this->sendResponse(new AffiliationResource($affiliation), 'Affiliation retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AffiliationUpdateRequest  $request
     * @param  \App\Models\Affiliation  $affiliation
     * @return \Illuminate\Http\Response
     */
    public function update(AffiliationUpdateRequest $request, Affiliation $affiliation)
    {
        $affiliation->update($request->validated());

        return $this->sendResponse(new AffiliationResource($affiliation), 'Affiliation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Affiliation  $affiliation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affiliation $affiliation)
    {
        $affiliation->delete();

        return $this->sendResponse([], 'Affiliation deleted successfully.');
    }
}
