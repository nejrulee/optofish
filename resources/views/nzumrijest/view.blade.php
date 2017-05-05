@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
	   		<a href="{{ url('nzumrijest?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa  fa-arrow-left"></i></a>
			@if($access['is_add'] ==1)
	   		<a href="{{ url('nzumrijest/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif 
					
		</div>	

		<div class="sbox-tools " >
			<a href="{{ ($prevnext['prev'] != '' ? url('nzumrijest/show/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('nzumrijest/show/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-xs btn-default"> <i class="fa fa-arrow-right"></i>  </a>
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-default" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 			
		</div>


	</div>
	<div class="sbox-content" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>Mrijest Id</td>
						<td>{{ $row->mrijest_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ime Naloga</td>
						<td>{{ $row->ime_naloga}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Vrijeme Mrijesta</td>
						<td>{{ $row->vrijeme_mrijesta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Radnik</td>
						<td>{{ SiteHelpers::formatLookUp($row->id,'id','1:tb_users:id:first_name|last_name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Entry By</td>
						<td>{{ $row->entry_by}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Status</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Vrsta</td>
						<td>{{ $row->vrsta}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Bazen</td>
						<td>{{ $row->bazen}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Higijenski Uslovi</td>
						<td>{{ $row->higijenski_uslovi}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tretman</td>
						<td>{{ $row->tretman}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Prebacivanje Matica</td>
						<td>{{ $row->prebacivanje_matica}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ciscenje</td>
						<td>{{ $row->ciscenje}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Omamljivanje</td>
						<td>{{ $row->omamljivanje}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Mrijest</td>
						<td>{{ $row->mrijest}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ispiranje</td>
						<td>{{ $row->Ispiranje}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Lokalni Uzgoj</td>
						<td>{{ $row->lokalni_uzgoj}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pakovanje</td>
						<td>{{ $row->pakovanje}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Inkubator</td>
						<td>{{ $row->inkubator}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tretmani</td>
						<td>{{ $row->tretmani}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Transport</td>
						<td>{{ $row->transport}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop