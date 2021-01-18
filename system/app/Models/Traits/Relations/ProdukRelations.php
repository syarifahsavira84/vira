<?php 

namespace App\Models\Traits\Relations;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Penjual;

trait ProdukRelations{
	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}
	
	
}