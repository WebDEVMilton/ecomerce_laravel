<?php

namespace App\Models\admin;
use App\Models\admin\Addsubcatgeory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Addcategory extends Model
{
    use HasFactory;
    public function addsubcategory()
    {
        return $this->hasMany(Addsubcatgeory::class);
    }


}
