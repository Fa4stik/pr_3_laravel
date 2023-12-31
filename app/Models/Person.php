<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Person extends Model{
    protected $table = 'person';

    protected $fillable = [
        'FIO', 'Staff', 'Phone', 'Stage', 'Image'
    ];

    public function profession()
    {
        return $this->belongsTo(Staff::class, 'Staff');
    }
}
