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
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Storage Id</td>
						<td>{{ $row->storage_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Artikl Id</td>
						<td>{{ $row->artikl_id}} </td>
						
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
						<td width='30%' class='label-view text-right'>Code</td>
						<td>{{ $row->code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Date</td>
						<td>{{ $row->date}} </td>
						
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
						<td width='30%' class='label-view text-right'>Current State</td>
						<td>{{ $row->current_state}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Note</td>
						<td>{{ $row->note}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Min Quantity</td>
						<td>{{ $row->min_quantity}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	