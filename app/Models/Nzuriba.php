<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class nzuriba extends Sximo  {
	
	protected $table = 'riba';
	protected $primaryKey = 'riba_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT riba.* FROM riba  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE riba.riba_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
