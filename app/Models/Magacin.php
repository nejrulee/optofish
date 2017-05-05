<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class magacin extends Sximo  {
	
	protected $table = 'storage_types';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT storage_types.* FROM storage_types  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE storage_types.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
