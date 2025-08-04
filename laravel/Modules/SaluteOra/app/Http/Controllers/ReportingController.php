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
<<<<<<< HEAD
    public function index(): \Illuminate\Contracts\View\View
=======
    public function index()
>>>>>>> 54f4fa16 (.)
=======
    public function index(): \Illuminate\Contracts\View\View
>>>>>>> 8e4d163b (phpstan)
    {
        return view('reporting::index');
    }

    /**
     * Show the form for creating a new resource.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(): \Illuminate\Contracts\View\View
=======
    public function create()
>>>>>>> 54f4fa16 (.)
=======
    public function create(): \Illuminate\Contracts\View\View
>>>>>>> 8e4d163b (phpstan)
    {
        return view('reporting::create');
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
    public function store(\Illuminate\Http\Request $request): \Illuminate\Http\RedirectResponse
    {
        // Implementation of store method
        return redirect()->back();
    }
<<<<<<< HEAD
=======
    public function store(Request $request) {}
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 8e4d163b (phpstan)

    /**
     * Show the specified resource.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function show(int $id): \Illuminate\Contracts\View\View
=======
    public function show($id)
>>>>>>> 54f4fa16 (.)
=======
    public function show(int $id): \Illuminate\Contracts\View\View
>>>>>>> 8e4d163b (phpstan)
    {
        return view('reporting::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function edit(int $id): \Illuminate\Contracts\View\View
=======
    public function edit($id)
>>>>>>> 54f4fa16 (.)
=======
    public function edit(int $id): \Illuminate\Contracts\View\View
>>>>>>> 8e4d163b (phpstan)
    {
        return view('reporting::edit');
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
    public function update(\Illuminate\Http\Request $request, int $id): \Illuminate\Http\RedirectResponse
    {
        // Implementation of update method
        return redirect()->back();
    }
<<<<<<< HEAD
=======
    public function update(Request $request, $id) {}
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 8e4d163b (phpstan)

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        // Implementation of destroy method
        return redirect()->back();
    }
<<<<<<< HEAD
=======
    public function destroy($id) {}
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 8e4d163b (phpstan)
}
