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
						<td width='30%' class='label-view text-right'>Nabavka Id</td>
						<td>{{ $row->nabavka_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Artikl</td>
						<td>{{ $row->artikl}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Kolicina</td>
						<td>{{ $row->kolicina}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Vrijeme</td>
						<td>{{ $row->vrijeme}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Proizvodjac</td>
						<td>{{ $row->proizvodjac}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Detalji</td>
						<td>{{ $row->detalji}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	