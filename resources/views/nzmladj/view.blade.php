@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('nzmladj?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('nzmladj/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('nzmladj/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('nzmladj/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Mlađ Id</td>
						<td>{{ $row->mlađ_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ime Naloga</td>
						<td>{{ $row->ime_naloga}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Vrijeme Odvajanja</td>
						<td>{{ $row->vrijeme_odvajanja}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Radnik</td>
						<td>{{ SiteHelpers::formatLookUp($row->id,'id','1:tb_users:id:first_name|last_name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Status</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Higijenski Uslovi</td>
						<td>{{ $row->higijenski_uslovi}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ciscenje</td>
						<td>{{ $row->ciscenje}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prebacivanje Mladji</td>
						<td>{{ $row->prebacivanje_mladji}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Uslovi</td>
						<td>{{ $row->uslovi}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tretman</td>
						<td>{{ $row->tretman}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Hranjenje</td>
						<td>{{ $row->hranjenje}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prodaja</td>
						<td>{{ $row->prodaja}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Dnevnik Radova</td>
						<td>{{ $row->dnevnik_radova}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Entry By</td>
						<td>{{ $row->entry_by}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop