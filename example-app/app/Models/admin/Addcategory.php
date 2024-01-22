<?php

namespace App\Models\admin;
use App\Models\admin\Addsubcatgeory;
use App\Models\admin\Addproduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Addcategory extends Model
{
    use HasFactory;
    public function subcategory()
    {
        return $this->hasMany(Addsubcatgeory::class,'addcat_id');
    }

    public function product()
    {
        return $this->HasManyThrough(Addproduct::class,Addsubcatgeory::class,'cat_id','subcat_id','id');
    }



}
