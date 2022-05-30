<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $creditos_mat
 * @property $nombre_mat
 * @property $profesor
 * @property $turno
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @property Pivote[] $pivotes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'creditos_mat' => 'required',
		'nombre_mat' => 'required',
		'profesor' => 'required',
		'turno' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['creditos_mat','nombre_mat','profesor','turno','disponible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotes()
    {
        return $this->hasMany('App\Pivote', 'materia_id', 'id');
    }
    

}
