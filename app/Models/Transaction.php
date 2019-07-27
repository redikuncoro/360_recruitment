<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 27 Jul 2019 04:51:26 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $id_car
 * @property int $id_user
 * @property string $name
 * @property string $email
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Car $car
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Transaction extends Eloquent
{
	protected $table = 'transaction';

	protected $casts = [
		'id_car' => 'int',
		'id_user' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id_car',
		'id_user',
		'name',
		'email',
		'status'
	];

	public function car()
	{
		return $this->belongsTo(\App\Models\Car::class, 'id_car');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_user');
	}
}
