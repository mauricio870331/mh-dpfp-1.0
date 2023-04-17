<?php

namespace App\Models\DpfpModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FingerPrint extends Model {

    use HasFactory;

    protected $table = "fingerprints";
    public $timestamps = false;
    
    protected $fillable = [
        "id",
        "finger_name",
        "image",
        "fingerprint",
        "notified",
        "user_id"
    ];
        
    
    //Relacion uno a uno Inversa    
    public function user() {
        return $this->belongsTo("App\Models\User");
    }

}
