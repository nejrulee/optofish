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
						<td width='30%' class='label-view text-right'>Transfer Id</td>
						<td>{{ $row->transfer_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Organizational Unit</td>
						<td>{{ $row->organizational_unit}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Num</td>
						<td>{{ $row->num}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Storage Id</td>
						<td>{{ $row->storage_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Date</td>
						<td>{{ $row->date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Admission Doc Num</td>
						<td>{{ $row->admission_doc_num}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Supplier Id</td>
						<td>{{ $row->supplier_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Supplier Place</td>
						<td>{{ $row->supplier_place}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Note</td>
						<td>{{ $row->note}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	