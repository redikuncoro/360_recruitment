<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 27 Jul 2019 04:51:26 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Car
 * 
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $stock
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $transactions
 *
 * @package App\Models
 */
class Car extends Eloquent
{
	protected $casts = [
		'price' => 'int',
		'stock' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'price',
		'stock',
		'status'
	];

	public function transactions()
	{
		return $this->hasMany(\App\Models\Transaction::class, 'id_car');
	}
}
