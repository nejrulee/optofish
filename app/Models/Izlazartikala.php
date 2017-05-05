<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class izlazartikala extends Sximo  {
	
	protected $table = 'skladiste_izlaz';
	protected $primaryKey = 'transfer_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_izlaz.* FROM skladiste_izlaz  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_izlaz.transfer_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
