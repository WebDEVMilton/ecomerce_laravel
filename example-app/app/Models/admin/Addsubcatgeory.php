<?php

namespace App\Models\admin;

use App\Models\admin\Addcategory;
use App\Models\admin\Addproduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Addsubcatgeory extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Addcategory::class,'addcat_id','id');
    }

    public function product(){

        return $this->hasMany(Addproduct::class,'subcat_id');

    }
}
