

		 {!! Form::open(array('url'=>'nzumladj/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> mladj-nalog-user</legend>
									
									  <div class="form-group  " >
										<label for="Mlađ Id" class=" control-label col-md-4 text-left"> Mlađ Id </label>
										<div class="col-md-7">
										  <input  type='text' name='mlađ_id' id='mlađ_id' value='{{ $row['mlađ_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ime Naloga" class=" control-label col-md-4 text-left"> Ime Naloga </label>
										<div class="col-md-7">
										  <input  type='text' name='ime_naloga' id='ime_naloga' value='{{ $row['ime_naloga'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Vrijeme Odvajanja" class=" control-label col-md-4 text-left"> Vrijeme Odvajanja </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('vrijeme_odvajanja', $row['vrijeme_odvajanja'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-7">
										  <input  type='text' name='status' id='status' value='{{ $row['status'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
										<div class="col-md-7">
										  <input  type='text' name='id' id='id' value='{{ $row['id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Higijenski Uslovi" class=" control-label col-md-4 text-left"> Higijenski Uslovi </label>
										<div class="col-md-7">
										  <input  type='text' name='higijenski_uslovi' id='higijenski_uslovi' value='{{ $row['higijenski_uslovi'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ciscenje" class=" control-label col-md-4 text-left"> Ciscenje </label>
										<div class="col-md-7">
										  <input  type='text' name='ciscenje' id='ciscenje' value='{{ $row['ciscenje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prebacivanje Mladji" class=" control-label col-md-4 text-left"> Prebacivanje Mladji </label>
										<div class="col-md-7">
										  <input  type='text' name='prebacivanje_mladji' id='prebacivanje_mladji' value='{{ $row['prebacivanje_mladji'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Uslovi" class=" control-label col-md-4 text-left"> Uslovi </label>
										<div class="col-md-7">
										  <input  type='text' name='uslovi' id='uslovi' value='{{ $row['uslovi'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tretman" class=" control-label col-md-4 text-left"> Tretman </label>
										<div class="col-md-7">
										  <input  type='text' name='tretman' id='tretman' value='{{ $row['tretman'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Hranjenje" class=" control-label col-md-4 text-left"> Hranjenje </label>
										<div class="col-md-7">
										  <input  type='text' name='hranjenje' id='hranjenje' value='{{ $row['hranjenje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prodaja" class=" control-label col-md-4 text-left"> Prodaja </label>
										<div class="col-md-7">
										  <input  type='text' name='prodaja' id='prodaja' value='{{ $row['prodaja'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Dnevnik Radova" class=" control-label col-md-4 text-left"> Dnevnik Radova </label>
										<div class="col-md-7">
										  <input  type='text' name='dnevnik_radova' id='dnevnik_radova' value='{{ $row['dnevnik_radova'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
