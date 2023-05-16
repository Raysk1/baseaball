<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lanzador
 * 
 * @property int $idLanzadores
 * @property int $idJuego
 * @property int $idAfiliacion
 * @property float|null $IP
 * @property int|null $BA
 * @property int|null $C
 * @property int|null $H
 * @property int|null $BB
 * @property int|null $K
 * @property float|null $PCA
 * @property float|null $POP
 * 
 * @property Juego $juego
 * @property Jugador $jugador
 * @property Collection|Turno[] $turnos
 *
 * @package App\Models
 */
class Lanzador extends Model
{
	protected $table = 'lanzadores';
	protected $primaryKey = 'idLanzadores';
	public $timestamps = false;

	protected $casts = [
		'idJuego' => 'int',
		'idAfiliacion' => 'int',
		'IP' => 'float',
		'BA' => 'int',
		'C' => 'int',
		'H' => 'int',
		'BB' => 'int',
		'K' => 'int',
		'PCA' => 'float',
		'POP' => 'float'
	];

	protected $fillable = [
		'idJuego',
		'idAfiliacion',
		'IP',
		'BA',
		'C',
		'H',
		'BB',
		'K',
		'PCA',
		'POP'
	];

	public function juego()
	{
		return $this->belongsTo(Juego::class, 'idJuego');
	}

	public function jugador()
	{
		return $this->belongsTo(Jugador::class, 'idAfiliacion');
	}

	public function turnos()
	{
		return $this->hasMany(Turno::class, 'idLanzador');
	}
}
