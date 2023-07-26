<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Infographic extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'title',
		'slug',
		'image'
	];

	public function getThumbnailAttribute()
	{
		if ($this->image) {
			return Storage::url($this->image);
		}

		return 'https://via.placeholder.com/900x650';
	}
}
