<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioFormRequest;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    protected $user ; 

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $pesquisar = $this->user->getUserPesquisarIndex($request->input('pesquisar') ?? '');

        return view('pages.usuario.paginacao', compact('pesquisar'));
    }

    public function cadastrarUsuario(UsuarioFormRequest $request)
    {
        if ($request->method() == "POST") {
            //cria, posta e redireciona para pagina produto.index 
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            User::create($data);

            Toastr::success('Inserido com sucesso!');

            return redirect()->route('usuario.index');
        }
        //get na pagina criar produtos
        return view('pages.usuario.create');
    }

    public function atualizarUsuario(UsuarioFormRequest $request, $id)
    {
        $usuario = User::findOrFail($id); // já retorna 404 se o produto não for encontrado
    
        if ($request->isMethod('put')) {
            $dados = $request->validated(); // garante só os dados validos do FormRequestProduto
            $dados['password'] = Hash::make($dados['password']);
            $usuario->update($dados);
    
            Toastr::success('Editado com sucesso!');
            return redirect()->route('usuario.index');
        }
    
        return view('pages.usuario.atualizar', compact('usuario'));
    }
    
    public function delete(Request $request)
    {
        User::findOrFail($request->id)->delete();
    
        return response()->json(['success' => true]);
    }
}
