<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 19 Jun 2018 20:11:47 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Medium
 * 
 * @property int $id
 * @property string $filename
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Medium extends Eloquent
{
	protected $fillable = [
		'filename'
	];
}
