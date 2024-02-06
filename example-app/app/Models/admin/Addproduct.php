<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Addsubcatgeory;
use App\Models\admin\Addcategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Addproduct extends Model
{
    use HasFactory;
    protected $fillable = ['pimage'];


    public function subcategory(){
        return $this->belongsTo(Addsubcatgeory::class,'subcat_id');
    }
    public function category(){
        return $this->belongsTo(Addcategory::class,'cat_id');
    }

}
