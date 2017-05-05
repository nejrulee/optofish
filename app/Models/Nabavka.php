<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class nabavka extends Sximo  {
	
	protected $table = 'nabavka';
	protected $primaryKey = 'nabavka_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT nabavka.* FROM nabavka  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE nabavka.nabavka_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
