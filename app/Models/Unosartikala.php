<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class unosartikala extends Sximo  {
	
	protected $table = 'skladiste_unos';
	protected $primaryKey = 'transfer_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_unos.* FROM skladiste_unos  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_unos.transfer_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
