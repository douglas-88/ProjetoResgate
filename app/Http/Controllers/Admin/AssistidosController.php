<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Assistido;

class AssistidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $assistidos = Assistido::paginate(10);

        return view("admin.assistidos.index")->with("assistidos",$assistidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.assistidos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);
        //dd($request->except(["submit","_token"]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assistido = Assistido::find($id);
        return view("admin.assistidos.show")->with(["assistido" => $assistido]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request,Assistido $assistido){

        $data = $request->except("_token");
        $assistidos = $assistido->search($data);

        return view("admin.assistidos.index",compact("data","assistidos"));

    }

    protected function _validation(Request $request)
    {
        $this->validate($request,[
            "nome" => "required|min:3",
            "email" => "required|email",
            "cpf"   => "required|cpf",
            "rg"    => "required|digits_between:9,9"
        ]);
        /*
         * "nome" => null
  "email" => null
  "cpf" => null
  "rg" => null
  "orgao_emissor" => null
  "endereco" => null
  "bairro" => null
  "cidade" => null
  "cep" => null
  "naturalidade" => null
  "nome_da_mae" => null
  "nome_do_pai" => null
  "nome_do_responsavel" => null
  "nascimento" => null
  "civil" => null
  "escolaridade" => null
  "renda_familiar_total" => null
  "ocupacao" => null
  "doenca" => null
  "beneficio_social" => null
  "tel1" => null
  "tel2" => null
  "cel1" => null
  "cel2" => null
  "como_conheceu_projeto" => null
  "observacao" => null
         */
    }

}
