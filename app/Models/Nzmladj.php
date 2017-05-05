<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class nzmladj extends Sximo  {
	
	protected $table = 'mlađ';
	protected $primaryKey = 'mlađ_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT mlađ.* FROM mlađ  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE mlađ.mlađ_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
