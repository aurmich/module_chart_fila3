<?php

namespace Modules\SaluteOra\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index(): \Illuminate\Contracts\View\View
=======
    public function index()
>>>>>>> 54f4fa16 (.)
    {
        return view('reporting::index');
    }

    /**
     * Show the form for creating a new resource.
     */
<<<<<<< HEAD
    public function create(): \Illuminate\Contracts\View\View
=======
    public function create()
>>>>>>> 54f4fa16 (.)
    {
        return view('reporting::create');
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(\Illuminate\Http\Request $request): \Illuminate\Http\RedirectResponse
    {
        // Implementation of store method
        return redirect()->back();
    }
=======
    public function store(Request $request) {}
>>>>>>> 54f4fa16 (.)

    /**
     * Show the specified resource.
     */
<<<<<<< HEAD
    public function show(int $id): \Illuminate\Contracts\View\View
=======
    public function show($id)
>>>>>>> 54f4fa16 (.)
    {
        return view('reporting::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(int $id): \Illuminate\Contracts\View\View
=======
    public function edit($id)
>>>>>>> 54f4fa16 (.)
    {
        return view('reporting::edit');
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(\Illuminate\Http\Request $request, int $id): \Illuminate\Http\RedirectResponse
    {
        // Implementation of update method
        return redirect()->back();
    }
=======
    public function update(Request $request, $id) {}
>>>>>>> 54f4fa16 (.)

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        // Implementation of destroy method
        return redirect()->back();
    }
=======
    public function destroy($id) {}
>>>>>>> 54f4fa16 (.)
}
