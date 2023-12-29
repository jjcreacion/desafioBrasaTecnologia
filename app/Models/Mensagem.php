<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mensagem
 *
 * @property $id
 * @property $idp
 * @property $aluno
 * @property $email
 * @property $whatsapp
 * @property $mensagem
 * @property $data
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mensagem extends Model
{
    
    static $rules = [
		'idp' => 'required',
		'aluno' => 'required',
		'email' => 'required',
		'whatsapp' => 'required',
		'mensagem' => 'required',
		'data' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idp','aluno','email','whatsapp','mensagem','data','status'];



}
