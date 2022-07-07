<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
	protected $table='artistas';
    protected $fillable=['nombre','avatar','slug', 'detail', 'instagram', 'facebook', 'telefono', 'mail', 'spotify',
    'imagenuno', 'imagendos', 'imagentres', 'biografia'];
	    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
