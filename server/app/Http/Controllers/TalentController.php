<?php

namespace App\Http\Controllers;

use App\Http\Requests\TalentStoreRequest;
use App\Http\Requests\TalentUpdateRequest;
use App\Http\Resources\TalentResource;
use App\Models\Talent;

class TalentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talents = Talent::with(['affiliation', 'branch', 'generation'])->get();
        $talentResources = TalentResource::collection($talents);

        return $this->sendResponse($talentResources, 'Data retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TalentStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TalentStoreRequest $request)
    {
        $input = $request->validated();

        if ($request->hasFile('images_url')) {
            $filename = uniqid().'.'.$request->file('images_url')->getClientOriginalExtension();
            $request->file('images_url')->storeAs('images', $filename);
            $input->images_url = basename($filename);
        }

        $talent = Talent::create($input);

        return $this->sendResponse(new TalentResource($talent), 'Talent created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function show(Talent $talent)
    {
        return $this->sendResponse(new TalentResource($talent), 'Talent retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TalentUpdateRequest  $request
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(TalentUpdateRequest $request, Talent $talent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        $talent->delete();

        return $this->sendResponse([], 'Talent deleted successfully.');
    }
}
