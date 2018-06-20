<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Jun 2018 20:13:12 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Image
 * 
 * @property int $id
 * @property string $file
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Image extends Eloquent
{
	protected $fillable = [
		'file'
	];
}
