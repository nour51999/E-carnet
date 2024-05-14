<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Article extends Model
{
    use HasFactory,Searchable;
    protected $guarded=[""];

    public function toSearchableArray(){
        $searchArray=[
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'niv'=>$this->niv,
            'grp'=>$this->grp,
        ];
        return $searchArray;
    }
}
