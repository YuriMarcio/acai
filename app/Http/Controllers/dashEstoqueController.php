<?php

namespace App\Http\Controllers;
use App\Models\categoria;
use App\Models\produto;
use Illuminate\Http\Request;

class dashEstoqueController extends Controller
{
    public function estoque(Request $request ){
        $listarCategorias = categoria::all();
        $termoPesquisa = $request->input('q');
        $produtos = Produto::query();
        if (!empty($termoPesquisa)) {
            $produtos->where('nameProd', 'like', '%' . $termoPesquisa . '%')
                     ->orWhere('descriProd', 'like', '%' . $termoPesquisa . '%')
                     ->orWhere('supplierProd', 'like', '%' . $termoPesquisa . '%')
                     ->orWhereHas('categoria', function($query) use ($termoPesquisa) {
                        $query->where('nome', 'like', '%' . $termoPesquisa . '%');
                    });
            // Adicione mais colunas aqui, se necessário
            $listarProduto = $produtos->get();
        }else{
            $listarProduto = produto::all();
        }


        return view('dashboard.pagesdash.dashStorage',['listarCate'=>$listarCategorias],['listarProd'=>$listarProduto]);
    }

    public function excluirProd($id){
        $excluirProd = produto::find($id);
        if(!$excluirProd){
            return redirect()->back()->with('error', 'registro não encontrado');
        }
        $excluirProd->delete();
        return redirect()->back()->with('seccess', "Registro excluido com sucesso");

    }

    public function editProd(Request $request,$id){
        $produto = Produto::find($id);

        $request->validate([
            'nameProd' => 'nullable|string|max:255',
            'descriProd' => 'nullable|string|max:450',
            'categoria_id' => 'nullable', // Certifique-se de adicionar as regras apropriadas aqui
            'supplierProd' => 'nullable|string|max:255',
            'amountProd' => 'nullable|integer|min:0',
            'unitPriceProd' => 'nullable|numeric|min:0',
            'imageProd' => 'nullable|file|mimes:png,jpg|max:2048'
        ], $message = [
            'nameProd.required' => 'O campo nome é obrigatório.',
            'nameProd.string' => 'O campo nome deve ser uma string.',
            'nameProd.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'descriProd.string' => 'O campo descrição deve ser uma string.',
            'descriProd.max' => 'O campo descrição não pode ter mais de 450 caracteres.',
            'categoria_id.required' => 'O campo categoria é obrigatório.',
            'supplierProd.required' => 'O campo fornecedor é obrigatório.',
            'supplierProd.string' => 'O campo fornecedor deve ser uma string.',
            'supplierProd.max' => 'O campo fornecedor não pode ter mais de 255 caracteres.',
            'amountProd.required' => 'O campo quantidade é obrigatório.',
            'amountProd.integer' => 'O campo quantidade deve ser um número inteiro.',
            'amountProd.min' => 'O campo quantidade não pode ser menor que 0.',
            'unitPriceProd.required' => 'O campo preço unitário é obrigatório.',
            'unitPriceProd.numeric' => 'O campo preço unitário deve ser um número.',
            'unitPriceProd.min' => 'O campo preço unitário não pode ser menor que 0.',
            'imageProd.required' => 'A imagem do produto é obrigatória.',
            'imageProd.file' => 'O arquivo da imagem do produto deve ser um arquivo válido.',
            'imageProd.mimes' => 'A imagem do produto deve ser um arquivo PNG ou JPG.',
            'imageProd.max' => 'A imagem do produto não pode exceder 2MB.',
        ]);
        if(isset($id)){
            if ($request->hasFile('imageProd') && $request->file('imageProd')->isValid()) {
                // A imagem é válida, você pode prosseguir com o salvamento

                $produto->nameProd = $request->input('nameProd');
                $produto->descriProd = $request->input('descriProd');
                $produto->categoria_id = $request->input('categoria_id');
                $produto->supplierProd = $request->input('supplierProd');
                $produto->amountProd = $request->input('amountProd');
                $produto->unitPriceProd = $request->input('unitPriceProd');

                // Salvando a imagem (conforme seu código)
                $requestImage = $request->file('imageProd');
                $extension = $requestImage->getClientOriginalExtension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('img/productImg'), $imageName);

                $produto->imageProd = $imageName;

                // Salvando o produto no banco de dados
                $produto->save();

                return redirect()->route('dash.estoque')->with('success', "Produto $produto->id adicionado com sucesso.");
            } else {
                $produto->nameProd = $request->input('nameProd');
                $produto->descriProd = $request->input('descriProd');
                $produto->categoria_id = $request->input('categoria_id');
                $produto->supplierProd = $request->input('supplierProd');
                $produto->amountProd = $request->input('amountProd');
                $produto->unitPriceProd = $request->input('unitPriceProd');
                $produto->save();
                // A imagem é inválida, retorne uma mensagem de erro
                return redirect()->route('dash.estoque')->with('success', "Produto $produto->id adicionado com sucesso.");
            }
        }else{
            return redirect()->route('dash.estoque')->with('error', "Produto $produto->id não encontrado");
        }



    }



    public function cadProd(Request $request){
        // Correção: adicione os parênteses ()
        $produtos = $request->all();

        $request->validate([
            'nameProd' => 'required|string|max:255',
            'descriProd' => 'nullable|string|max:450',
            'categoria_id' => 'required', // Certifique-se de adicionar as regras apropriadas aqui
            'supplierProd' => 'required|string|max:255',
            'amountProd' => 'required|integer|min:0',
            'unitPriceProd' => 'required|numeric|min:0',
            'imageProd' => 'required|file|mimes:png,jpg|max:2048'
        ], $message = [
            'nameProd.required' => 'O campo nome é obrigatório.',
            'nameProd.string' => 'O campo nome deve ser uma string.',
            'nameProd.max' => 'O campo nome não pode ter mais de 255 caracteres.',
            'descriProd.string' => 'O campo descrição deve ser uma string.',
            'descriProd.max' => 'O campo descrição não pode ter mais de 450 caracteres.',
            'categoria_id.required' => 'O campo categoria é obrigatório.',
            'supplierProd.required' => 'O campo fornecedor é obrigatório.',
            'supplierProd.string' => 'O campo fornecedor deve ser uma string.',
            'supplierProd.max' => 'O campo fornecedor não pode ter mais de 255 caracteres.',
            'amountProd.required' => 'O campo quantidade é obrigatório.',
            'amountProd.integer' => 'O campo quantidade deve ser um número inteiro.',
            'amountProd.min' => 'O campo quantidade não pode ser menor que 0.',
            'unitPriceProd.required' => 'O campo preço unitário é obrigatório.',
            'unitPriceProd.numeric' => 'O campo preço unitário deve ser um número.',
            'unitPriceProd.min' => 'O campo preço unitário não pode ser menor que 0.',
            'imageProd.required' => 'A imagem do produto é obrigatória.',
            'imageProd.file' => 'O arquivo da imagem do produto deve ser um arquivo válido.',
            'imageProd.mimes' => 'A imagem do produto deve ser um arquivo PNG ou JPG.',
            'imageProd.max' => 'A imagem do produto não pode exceder 2MB.',
        ]);

        if ($request->hasFile('imageProd') && $request->file('imageProd')->isValid()) {
            // A imagem é válida, você pode prosseguir com o salvamento
            $produto = new Produto();
            $produto->nameProd = $request->input('nameProd');
            $produto->descriProd = $request->input('descriProd');
            $produto->categoria_id = $request->input('categoria_id');
            $produto->supplierProd = $request->input('supplierProd');
            $produto->amountProd = $request->input('amountProd');
            $produto->unitPriceProd = $request->input('unitPriceProd');

            // Salvando a imagem (conforme seu código)
            $requestImage = $request->file('imageProd');
            $extension = $requestImage->getClientOriginalExtension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/productImg'), $imageName);

            $produto->imageProd = $imageName;

            // Salvando o produto no banco de dados
            $produto->save();

            return redirect()->route('dash.estoque')->with('success', 'Produto adicionado com sucesso.');
        } else {
            // A imagem é inválida, retorne uma mensagem de erro
            return redirect()->route('dash.estoque')->with('error', 'Imagem inválida');
        }
    }

    public function excluirCate($id){
        $categoria = categoria::find($id);

        if (!$categoria) {
            return redirect()->back()->with('error', 'Categoria não encontrada');
        }

        // Encontre a categoria padrão, por exemplo, "Sem Categoria"
        $categoriaPadrao = categoria::where('nome', 'Sem Categoria')->first();

        if (!$categoriaPadrao) {
            return redirect()->back()->with('error', 'Categoria padrão não encontrada');
        }

        // Encontre todos os produtos associados a esta categoria e atualize o 'categoria_id' para a categoria padrão
        produto::where('categoria_id', $categoria->id)->update(['categoria_id' => $categoriaPadrao->id]);

        // Agora você pode excluir a categoria
        $categoria->delete();

        return redirect()->back()->with('success', 'Categoria excluída com sucesso');

    }

    public function cadscategorie(Request $request){
        $nameCate = $request->only("nome");


        if(empty($nameCate['nome'])){
            return redirect()->back()->with('error', 'insira o nome da categoria');
        }else{
            $nameCategorie = $nameCate["nome"];
            echo($nameCategorie);
            categoria::create([
                'nome' => $nameCate['nome'],
            ]);
            $listarCategorias = categoria::all();
            return redirect()->route('dash.estoque',['listarCate'=>$listarCategorias]);
        }

    }
}
