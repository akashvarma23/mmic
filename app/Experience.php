<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Experience extends Model
{
    use SoftDeletes;
    protected $table = 'experiences';
    protected $appends = ['name_slug'];
    protected $dates = ['deleted_at'];
    protected $fillable = ['parent_id','name','description'];

    public function setNameAttribute($param){
        $this->attributes['name'] = strtolower($param);
    }

    public function setDescriptionAttribute($param){
        $this->attributes['description'] = strtolower($param);
    }

    public function getNameSlugAttribute($param){
        return $this->attributes['name_slug'] = str_slug($this->name);
    }
    
    public function getExpParent($param = array()){

        if($param){ 
            return $this::where('name',$param)
                ->select('*')
                ->get();
        }
        else{
            return $this::where('parent_id',NUll)->select('name')->get();
        }
    }

    public function getExpChild($param){

        $exp_parent = $this->getExpParent($param);

        return $this::where('parent_id',$exp_parent[0]['id'])
            ->select('*')
            ->get();
    }

	public function store($data){
		return $this::create($data);
	}

	protected $hidden = [
        'created_at', 'updated_at','deleted_at',
    ];
}
