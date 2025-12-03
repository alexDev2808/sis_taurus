<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderSetting extends Model
{
    protected $fillable = [
        'tiempo_transicion',
        'color_fondo'
    ];

    /**
     * Obtiene la configuración actual o crea una por defecto
     */
    public static function getConfig()
    {
        return self::firstOrCreate(
            ['id' => 1],
            ['tiempo_transicion' => 60],
            ['color_fondo' => '002455']
        );
    }

    /**
     * Obtiene el delay en milisegundos para el slider
     */
    public function getDelayAttribute()
    {
        return $this->tiempo_transicion * 1000;
    }
}
