<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'category_id' => 'required',
        'title' => 'required',
    );

    public function getTitle()
    {
        return 'ID' . $this->id . ':' . $this->title;
    }
}
