<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class kartica extends Sximo  {
	
	protected $table = 'skladiste_kartica';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_kartica.* FROM skladiste_kartica  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_kartica.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
