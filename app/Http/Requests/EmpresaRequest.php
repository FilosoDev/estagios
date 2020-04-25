<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_da_empresa' => 'required',
            'cnpj_da_empresa' => 'required',
            'area_de_atuacao_da_empresa' => 'required',
            'endereco_da_empresa' => 'required',
            'nome_do_representante_da_empresa' => 'required',
            'cargo_do_representante_da_empresa' => 'required',
            'nome_do_supervisor_do_estagio' => 'required',
            'cargo_do_supervisor_do_estagio' => 'required',
            'telefone_do_supervisor_do_estagio' => 'required',
            'email_do_supervisor_do_estagio' => 'required'
        ];
    }
}