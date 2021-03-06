@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('kartica?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('kartica/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('kartica/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('kartica/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Artikl </td>
						<td>{{ SiteHelpers::formatLookUp($row->artikl_id,'artikl_id','1:skladiste_artikl:artikl_id:ime_artikla') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Proizvodjac</td>
						<td>{{ SiteHelpers::formatLookUp($row->trademark_id,'trademark_id','1:skladiste_trademark:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Jedinica</td>
						<td>{{ SiteHelpers::formatLookUp($row->unit_id,'unit_id','1:skladiste_unit:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>In</td>
						<td>{{ $row->in}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Out</td>
						<td>{{ $row->out}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Trenutno Stanje</td>
						<td>{{ $row->current_state}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Detalji</td>
						<td>{{ $row->note}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Minimalna Kolicina</td>
						<td>{{ $row->min_quantity}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop