<?php

namespace App\Http\Controllers;

use App\Models\Short;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ShortRequest;

class ShortController extends Controller
{
    public function index()
    {
        return view('shortener-index', [
            'shorts' => Short::orderBy('updated_at', 'desc')->paginate(13)
        ]);
    }

    public function indexTrashed(){
        return view('shortener-index', [
            'shorts' => Short::onlyTrashed()->orderBy('updated_at', 'desc')->paginate(13)
        ]);
    }

    public function show(Short $short)
    {
        return view('shortener-show', [
            'short' => $short
        ]);
    }

    public function create()
    {
        return view('shortener-create');
    }

    public function edit(Short $short)
    {
        return view('shortener-edit', [
            'short' => $short
        ]);
    }

    public function store(ShortRequest $request)
    {
        $short = Short::create($request->validated() + ['uuid' => Str::uuid()]); //tambah satu kolom uuid
        return redirect()->route('shortener.show', $short)->with('success', 'Short created successfully');
    }

    public function update(ShortRequest $request, Short $short)
    {
        $short->update($request->validated() + ['updated_at' => now()]);
        return redirect()->route('shortener.show', $short)->with('success', 'Short updated successfully');
    }

    public function destroy(Short $short)
    {
        $short->delete();
        return redirect()->route('shortener.index')->with('success', 'Short trashed successfully');
    }

    public function restore(Short $short)
    {
        $short->restore();
        return redirect()->route('shortener.index')->with('success', 'Short restored successfully');
    }

    public function redirect(Short $short)
    {
    return redirect($short->url);
    }

}
