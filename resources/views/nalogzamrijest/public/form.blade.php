

		 {!! Form::open(array('url'=>'nalogzamrijest/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Izdavanje Naloga za Mrijest</legend>
									
									  <div class="form-group  " >
										<label for="Mrijest Id" class=" control-label col-md-4 text-left"> Mrijest Id </label>
										<div class="col-md-7">
										  <input  type='text' name='mrijest_id' id='mrijest_id' value='{{ $row['mrijest_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Vrsta" class=" control-label col-md-4 text-left"> Vrsta </label>
										<div class="col-md-7">
										  <input  type='text' name='vrsta' id='vrsta' value='{{ $row['vrsta'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Bazen" class=" control-label col-md-4 text-left"> Bazen </label>
										<div class="col-md-7">
										  <input  type='text' name='bazen' id='bazen' value='{{ $row['bazen'] }}' 
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
										<label for="Tretman" class=" control-label col-md-4 text-left"> Tretman </label>
										<div class="col-md-7">
										  <input  type='text' name='tretman' id='tretman' value='{{ $row['tretman'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Radnik Id" class=" control-label col-md-4 text-left"> Radnik Id </label>
										<div class="col-md-7">
										  <input  type='text' name='radnik_id' id='radnik_id' value='{{ $row['radnik_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Prebacivanje Matica" class=" control-label col-md-4 text-left"> Prebacivanje Matica </label>
										<div class="col-md-7">
										  <input  type='text' name='prebacivanje_matica' id='prebacivanje_matica' value='{{ $row['prebacivanje_matica'] }}' 
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
										<label for="Omamljivanje" class=" control-label col-md-4 text-left"> Omamljivanje </label>
										<div class="col-md-7">
										  <input  type='text' name='omamljivanje' id='omamljivanje' value='{{ $row['omamljivanje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Mrijest" class=" control-label col-md-4 text-left"> Mrijest </label>
										<div class="col-md-7">
										  <input  type='text' name='mrijest' id='mrijest' value='{{ $row['mrijest'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Ispiranje" class=" control-label col-md-4 text-left"> Ispiranje </label>
										<div class="col-md-7">
										  <input  type='text' name='Ispiranje' id='Ispiranje' value='{{ $row['Ispiranje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Lokalni Uzgoj" class=" control-label col-md-4 text-left"> Lokalni Uzgoj </label>
										<div class="col-md-7">
										  <input  type='text' name='lokalni_uzgoj' id='lokalni_uzgoj' value='{{ $row['lokalni_uzgoj'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Pakovanje" class=" control-label col-md-4 text-left"> Pakovanje </label>
										<div class="col-md-7">
										  <input  type='text' name='pakovanje' id='pakovanje' value='{{ $row['pakovanje'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Inkubator" class=" control-label col-md-4 text-left"> Inkubator </label>
										<div class="col-md-7">
										  <input  type='text' name='inkubator' id='inkubator' value='{{ $row['inkubator'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tretmani" class=" control-label col-md-4 text-left"> Tretmani </label>
										<div class="col-md-7">
										  <input  type='text' name='tretmani' id='tretmani' value='{{ $row['tretmani'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Transport" class=" control-label col-md-4 text-left"> Transport </label>
										<div class="col-md-7">
										  <input  type='text' name='transport' id='transport' value='{{ $row['transport'] }}' 
						     class='form-control ' /> 
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
										<label for="Ime Naloga" class=" control-label col-md-4 text-left"> Ime Naloga </label>
										<div class="col-md-7">
										  <input  type='text' name='ime_naloga' id='ime_naloga' value='{{ $row['ime_naloga'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Vrijeme Mrijesta" class=" control-label col-md-4 text-left"> Vrijeme Mrijesta </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('vrijeme_mrijesta', $row['vrijeme_mrijesta'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
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
