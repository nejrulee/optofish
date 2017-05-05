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
						<td width='30%' class='label-view text-right'>Artikl Id</td>
						<td>{{ $row->artikl_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Artikl Kod</td>
						<td>{{ $row->artikl_kod}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ime Artikla</td>
						<td>{{ $row->ime_artikla}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Detalji</td>
						<td>{{ $row->detalji}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Min Kolicina</td>
						<td>{{ $row->min_kolicina}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Trademark Id</td>
						<td>{{ $row->trademark_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Unit Id</td>
						<td>{{ $row->unit_id}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	