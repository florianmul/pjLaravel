<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Jun 2018 20:13:13 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Slider
 * 
 * @property int $id
 * @property string $titre
 * @property string $auteur
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Sliders extends Eloquent
{
	protected $fillable = [
		'titre',
		'auteur'
	];
}
