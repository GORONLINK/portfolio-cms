<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
	public function validation(Request $request) {
        return $request->validate([
            'img' => 'required',
            'title' => 'required'
        ]);
    }

    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }


    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
		$validated = $this->validation($request);
        About::create($validated);

        return redirect('/about');
    }

    public function show()
    {
        
    }

    public function edit(About $abouts)
    {
        return view('about.edit', compact('abouts'));
    }

    public function update(Request $request, About $abouts)
    {
        $abouts->update($this->validation($request));

        return redirect('/about');
    }

    public function destroy(About $abouts)
    {
        $abouts->delete();

        return redirect('about');
    }
}
