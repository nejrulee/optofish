<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dobavljaci extends Sximo  {
	
	protected $table = 'skladiste_supplier';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_supplier.* FROM skladiste_supplier  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_supplier.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
