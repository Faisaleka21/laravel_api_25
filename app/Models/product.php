<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    protected $fillable = ['name', 'code'];

    protected $fillable = [&#39;name&#39;, &#39;description&#39;, &#39;category_id&#39;];
public function category() {
return $this-&gt;belongsTo(ProductCategory::class, 'category_id');
}
}
