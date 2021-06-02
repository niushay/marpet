<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title' ,'sub_title' ,'description' ,'price' ,'brand' ,'qty', 'category_id'];
    /**
     * @var mixed
     */
    private $picture;

    public function pictures(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductPhoto::class);
    }

    public function getPictureAttribute()
    {
        if($this->pictures()->first() != null){
            return 'storage/'.$this->pictures()->first()->image_url;
        }else{
            return url('images/product.png');
        }
    }
}
