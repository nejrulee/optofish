<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

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
						<td width='30%' class='label-view text-right'>Status</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id}} </td>
						
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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	