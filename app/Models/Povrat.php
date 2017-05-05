<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class povrat extends Sximo  {
	
	protected $table = 'skladiste_povrat';
	protected $primaryKey = 'transfer_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_povrat.* FROM skladiste_povrat  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_povrat.transfer_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
