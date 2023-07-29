<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfographicStoreRequest;
use App\Http\Requests\InfographicUpdateRequest;
use App\Models\Infographic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Mailer\DelayedEnvelope;

class InfographicController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$infographics = Infographic::all();

		return view('admin.infografik.index', compact('infographics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.infografik.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(InfographicStoreRequest $request)
	{
		$data = $request->all();
		$data['slug'] = Str::slug($data['title']) . '-' . Str::lower(Str::random(3));
		$data['image'] = $request->file('image')->store('assets/infografik', 'public');
		// dd($data);
		Infographic::create($data);
		return redirect()->route('admin.infografik.index')->with('success', 'Infografik berhasil ditambahkan!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Infographic $infografik)
	{
		return view('admin.infografik.edit', compact('infografik'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(InfographicUpdateRequest $request, Infographic $infografik)
	{
		$data = $request->all();
		$data['slug'] = Str::slug($data['title']) . '-' . Str::lower(Str::random(3));

		// jika ada foto/gambar yg diupload
		if ($request->hasFile('image')) {
			$data['image'] = $request->file('image')->store('assets/infografik', 'public');
		}

		$infografik->update($data);

		return redirect()->route('admin.infografik.index')->with('success', 'Infografik berhasil diupdate!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Infographic $infografik)
	{
		$infografik->delete();

		return redirect()->route('admin.infografik.index')->with('success', 'Infografik berhasil dihapus!');
	}
}
