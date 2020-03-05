<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Admin{
/**
 * App\Models\Admin\Assistido
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string|null $foto
 * @property string $cpf
 * @property string $rg
 * @property string|null $orgao_emissor
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property string $cep
 * @property string $uf
 * @property string $naturalidade
 * @property string $nome_da_mae
 * @property string $nome_do_pai
 * @property string|null $nome_do_responsavel
 * @property string $sexo
 * @property string $nascimento
 * @property string $civil
 * @property string $escolaridade
 * @property string $ocupacao
 * @property float $renda_familiar_total
 * @property string|null $doenca
 * @property string|null $beneficio_social
 * @property string|null $tel1
 * @property string|null $tel2
 * @property string $cel1
 * @property string|null $cel2
 * @property string|null $como_conheceu_projeto
 * @property string|null $observacao
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereBairro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereBeneficioSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereComoConheceuProjeto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereDoenca($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereEndereco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereEscolaridade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereNascimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereNaturalidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereNomeDaMae($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereNomeDoPai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereNomeDoResponsavel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereObservacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereOcupacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereOrgaoEmissor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereRendaFamiliarTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereRg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereSexo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereTel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereTel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin\Assistido whereUserId($value)
 */
	class Assistido extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

