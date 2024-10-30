<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConfigurationController extends Controller
{

    public function index() {
        $configurations = Configuration::all();
        return view('backend.config.index', get_defined_vars());
    }
    public function create() {
        return view('backend.config.create', get_defined_vars());
    }

    public function store(Request $request) {

        Log::info($request->all());
        $validatedData = $request->validate([
            'key' => 'required',
            'key_value' => 'required',
        ]);

        $data = [
            'key' => $request->key ?? null,
            'value' => $request->key_value ?? null,
        ];

        Configuration::create($data);
        return response()->json(['success' => 'Configurated added successfully!', 'redirect_to' => route('config.index'), 'data' =>  $request->all()]);
    }

    public function update(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'configurations.*' => 'required|string', // Ensure all fields are required and are strings
        ]);

        // Loop through the configurations to update them
        foreach ($validatedData['configurations'] as $id => $value) {
            $configuration = Configuration::find($id);
            if ($configuration) {
                $configuration->value = $value;
                $configuration->save();
            }
        }

        return redirect()->route('config.index')->with('success', 'Configurations updated successfully!');
    }

}
