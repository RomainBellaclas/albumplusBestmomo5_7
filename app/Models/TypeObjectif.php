<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeObjectif extends Model
{
    public $table = "typeobjectif";
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lettre', 'slug', 'libellé','grossMin','grossMax'
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saving' => NameSaving::class,
    ];

    /**
     * Get the images.
     */
    public function images()
    {
        return $this->hasMany (Image::class);
    }
}
