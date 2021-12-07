<?php

namespace App\Http\Controllers;

use App\Models\LegalCase;
use App\Http\Requests\StoreLegalCaseRequest;
use App\Http\Requests\UpdateLegalCaseRequest;

class LegalCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legalCase = LegalCase::paginate(10);
        return view('legalcase.index', compact('legalCase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('legalcase.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreLegalCaseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLegalCaseRequest $request)
    {
        if ($request->hasFile('file_path')) {
            $path = $request->file('file_path')->store('', 'public');
            $request->merge(['attachment' => $path]);
        }
        $legalCase = LegalCase::create($request->all());
        session()->flash('message', 'Legal case information successfully saved.');
        return redirect()->route('legalCase.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\LegalCase $legalCase
     * @return \Illuminate\Http\Response
     */
    public function show(LegalCase $legalCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\LegalCase $legalCase
     * @return \Illuminate\Http\Response
     */
    public function edit(LegalCase $legalCase)
    {
        return view('legalcase.edit', compact('legalCase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateLegalCaseRequest $request
     * @param \App\Models\LegalCase $legalCase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLegalCaseRequest $request, LegalCase $legalCase)
    {
        $legalCase->update($request->all());
        session()->flash('message', 'Legal case successfully updated.');
        return redirect()->route('legalCase.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\LegalCase $legalCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(LegalCase $legalCase)
    {
        $legalCase->delete();
        session()->flash('message', 'Legal case successfully deleted.');
        return redirect()->route('legalCase.index');
    }
}
