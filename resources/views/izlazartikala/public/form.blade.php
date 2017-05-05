

		 {!! Form::open(array('url'=>'izlazartikala/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Izlaz Artikala</legend>
									
									  <div class="form-group  " >
										<label for="Transfer Id" class=" control-label col-md-4 text-left"> Transfer Id </label>
										<div class="col-md-7">
										  <input  type='text' name='transfer_id' id='transfer_id' value='{{ $row['transfer_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Organizational Unit" class=" control-label col-md-4 text-left"> Organizational Unit </label>
										<div class="col-md-7">
										  <input  type='text' name='organizational_unit' id='organizational_unit' value='{{ $row['organizational_unit'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Num" class=" control-label col-md-4 text-left"> Num </label>
										<div class="col-md-7">
										  <input  type='text' name='num' id='num' value='{{ $row['num'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Storage Id" class=" control-label col-md-4 text-left"> Storage Id </label>
										<div class="col-md-7">
										  <input  type='text' name='storage_id' id='storage_id' value='{{ $row['storage_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Date" class=" control-label col-md-4 text-left"> Date </label>
										<div class="col-md-7">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date', $row['date'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Admission Doc Num" class=" control-label col-md-4 text-left"> Admission Doc Num </label>
										<div class="col-md-7">
										  <input  type='text' name='admission_doc_num' id='admission_doc_num' value='{{ $row['admission_doc_num'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Supplier Id" class=" control-label col-md-4 text-left"> Supplier Id </label>
										<div class="col-md-7">
										  <input  type='text' name='supplier_id' id='supplier_id' value='{{ $row['supplier_id'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Supplier Place" class=" control-label col-md-4 text-left"> Supplier Place </label>
										<div class="col-md-7">
										  <input  type='text' name='supplier_place' id='supplier_place' value='{{ $row['supplier_place'] }}' 
						     class='form-control ' /> 
										 </div> 
										 <div class="col-md-1">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Note" class=" control-label col-md-4 text-left"> Note </label>
										<div class="col-md-7">
										  <textarea name='note' rows='5' id='note' class='form-control '  
				           >{{ $row['note'] }}</textarea> 
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
