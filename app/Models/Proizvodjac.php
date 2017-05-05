<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class proizvodjac extends Sximo  {
	
	protected $table = 'skladiste_trademark';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT skladiste_trademark.* FROM skladiste_trademark  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE skladiste_trademark.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
