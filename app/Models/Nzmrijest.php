<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class nzmrijest extends Sximo  {
	
	protected $table = 'mrijest';
	protected $primaryKey = 'mrijest_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT mrijest.* FROM mrijest  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE mrijest.mrijest_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
