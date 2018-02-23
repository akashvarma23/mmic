<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Contact extends Model
{
	use SoftDeletes;
    protected $table = 'contacts';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'email', 'contact_number', 'message'];


	public function store($data){
		return $this::create($data);
	}

	protected $hidden = [
        'created_at', 'updated_at','deleted_at',
    ];
}
