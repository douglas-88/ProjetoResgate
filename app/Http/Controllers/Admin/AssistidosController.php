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
        $data = $this->_validation($request);
        Assistido::create($data);
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
       return $this->validate($request,[
            "nome" => "required|min:3",
            "email" => "required|email",
            "cpf"   => "required|cpf",
            "rg"    => "required|digits_between:9,9",
            "orgao_emissor" => "required",
            "endereco" => "required",
            "bairro" => "required",
            "cidade" => "required",
            "cep" => "required",
            "up" => "required",
            "naturalidade" => "required",
            "nome_da_mae" => "required",
            "nome_do_pai" => "required",
            "nome_do_responsavel" => "required",
            "nascimento" => "required",
            "civil" => "required",
            "escolaridade" => "required",
            "renda_familiar_total" => "required",
            "ocupacao" => "required",
            "doenca" => "required",
            "beneficio_social" => "required",
            "tel1" => "required",
            "tel2" => "required",
            "cel1" => "required",
            "cel2" => "required",
            "como_conheceu_projeto" => "required",
            "observacao" => "required",
        ]);


    }

}
