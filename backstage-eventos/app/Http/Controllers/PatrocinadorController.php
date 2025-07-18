<?php

namespace App\Http\Controllers;
use App\Models\Patrocinador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatrocinadorController extends Controller
{
    public function index()
    {
        $patrocinadores = Patrocinador::all();
        return view('patrocinadores.index', compact('patrocinadores'));
    }

    public function create()
    {
        return view('patrocinadores.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'site' => 'nullable|url',
            'logo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('patrocinadores', 'public');
        }

        Patrocinador::create($data);

        return redirect()->route('patrocinadores.index')->with('success', 'Patrocinador criado com sucesso!');
    }

    public function edit(Patrocinador $patrocinador)
    {
        return view('patrocinadores.edit', compact('patrocinador'));
    }

    public function update(Request $request, Patrocinador $patrocinador)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'site' => 'nullable|url',
            'logo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            // Apaga logo antiga se existir
            if ($patrocinador->logo) {
                Storage::disk('public')->delete($patrocinador->logo);
            }
            $data['logo'] = $request->file('logo')->store('patrocinadores', 'public');
        }

        $patrocinador->update($data);

        return redirect()->route('patrocinadores.index')->with('success', 'Patrocinador atualizado com sucesso!');
    }

    public function destroy(Patrocinador $patrocinador)
    {
        if ($patrocinador->logo) {
            Storage::disk('public')->delete($patrocinador->logo);
        }

        $patrocinador->delete();

        return redirect()->route('patrocinadores.index')->with('success', 'Patrocinador excluído com sucesso!');
    }
}
