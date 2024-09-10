<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //=========================================
    // Função Para Upload de Arquivos
    public function upload(Request $request, $id)
    {
        $request->validate([
            'files.*' => 'required|mimes:pdf,xlsx,ods|max:2048', // Validação para arquivos
        ]);

        $user = User::find($id);

        foreach ($request->file('files') as $file) {
            $path = $file->store('user_files', 'public'); // Armazena o arquivo na pasta 'user_files' dentro de 'public'
            $user->files()->create(['file_path' => $path]); // Salva o caminho do arquivo na tabela user_files
        }

        return back()->with('success', 'Arquivos enviados com sucesso!');
    }
    //=========================================

    //=========================================
    // Função Para Mostrar Arquivos

    public function showFile(){
        $user = auth()->user();
        $files = $user->files;

        dd($files);
        //return view('dashboard', compact('files'));
    }
    //=========================================

}
