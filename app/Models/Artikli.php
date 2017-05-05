<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class artikli extends Sximo  {
	
	protected $table = 'skladiste_artikl';
	protected $primaryKey = 'artikl_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_artikl.* FROM skladiste_artikl  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_artikl.artikl_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
