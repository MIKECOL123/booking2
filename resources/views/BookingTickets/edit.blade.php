<form id="ModalForm">
<div class="modal-dialog eddialog" role="document">
    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Ticket #{{ $BookingTicket->BTicketId }}</h4>
	      </div>
	      <div class="modal-body" style="height:450px;overflow:auto;">
	      	<div class="DocumentsZone">
		        <div class="DocsLabel">Información del ticket</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Numero:</div><div class="fieldsValue">
					<input id="BTicketRef" name="BTicketRef" type="text" class="form-control" placeholder="Introduce un Numero" value="{{ $BookingTicket->BTicketRef }}" />
	      		</div>
	      		<div class="fieldsLabel" style="padding-left:10px;">Estado</div><div class="fieldsValue">
			      	<select id="StatusId" name="StatusId" class="form-control">
						@foreach ($Statuses as $key => $value)
  							@if ($BookingTicket->StatusId == $key)
								<option value="{{$key}}" selected>{{$value}}</option>
  							@else
								<option value="{{$key}}">{{$value}}</option>
  							@endif  
  						@endforeach
			      	</select>
	      		</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Hotel:</div><div class="fieldsValue">
					<input id="Hotel" name="Hotel" type="text" class="form-control" placeholder="Introduce Hotel" value="{{ $BookingTicket->Hotel }}" />
	      		</div>
	      		<div class="fieldsLabel">Nombre:</div><div class="fieldsValue">
					<input id="Name" name="Name" type="text" class="form-control" placeholder="Introduce Nombre" value="{{ $BookingTicket->Name }}" />
	      		</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Pasaporte:</div><div class="fieldsValue">
					<input id="Passport" name="Passport" type="text" class="form-control" placeholder="Introduce pasaporte" value="{{ $BookingTicket->Passport }}" />
	      		</div>
	        	<div class="fieldsLabel">Phone:</div><div class="fieldsValue">
					<input id="Phone" name="Phone" type="text" class="form-control" placeholder="Introduce Teléfono" value="{{ $BookingTicket->Phone }}" />
	      		</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Fecha:</div><div class="fieldsValue">
					<input id="BTDate" name="BTDate" type="text" class="form-control" placeholder="Introduce Fecha" value="{{ $BookingTicket->BTDate }}" />
	      		</div>
	      		<div class="fieldsLabel">Hora:</div><div class="fieldsValue">
					<input id="BTTime" name="BTTime" type="text" class="form-control" placeholder="Introduce Hora" value="{{ $BookingTicket->BTTime }}" />
	      		</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Tipo:</div><div class="fieldsValue">
			      	<select id="TypeId" name="TypeId" class="form-control">
						@foreach ($Types as $key => $value)
  							@if ($BookingTicket->TypeId == $key)
								<option value="{{$key}}" selected>{{$value}}</option>
  							@else
								<option value="{{$key}}">{{$value}}</option>
  							@endif  
  						@endforeach
			      	</select>
	      		</div>
	      		<div class="fieldsLabel">Vuelo:</div><div class="fieldsValue">
					<input id="DFlightNo" name="DFlightNo" type="text" class="form-control" placeholder="Introduce vuelo" value="{{ $BookingTicket->DFlightNo }}" />
	      		</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">PAX:</div><div class="fieldsValue">
					<input id="PAX" name="PAX" type="text" class="form-control" placeholder="Introduce Personas" value="{{ $BookingTicket->PAX }}" />
	      		</div>
	      		<div class="fieldsLabel">Precio:</div><div class="fieldsValue">
					<input id="Price" name="Price" type="text" class="form-control" placeholder="Introduce Precio" value="{{ $BookingTicket->Price }}" />
	      		</div>
	      	</div>
	      	
	      	
	      	
	      	
	      	
	      	
	      </div>
	      <div class="modal-footer">
	      		<div class="ErrorZone" id="ErrorZone"></div>
	        @if ($BookingTicket->BTicketRef != "")
	        	<button type="button" class="btn btn-default" onClick="ShowBookingTicket('{{ $BookingTicket->BTicketId }}')">Cancelar</button>
	        @endif
	      	<button type="button" class="btn btn-primary" onClick="SaveBookingTicket('{{ $BookingTicket->BTicketId }}')">Guardar</button>
	      </div>
	</div>
</div>
<script type="text/javascript">
$(function() {
	$("#Client").keyup(function() 
	{
		if($("#Client").val() != $("#ClientLast").val())
		{
			$("#ClientId").val("");
			$("#ClientRef").html("");
		}
	});
	$("#Client").autocomplete({
		source: "/clients/SearchByDescription",
		minLength: 2,
		search:function(event, ui)
		{
			if($("#Client").val() != $("#ClientLast").val())
			{
				$("#ClientId").val("");
				$("#ClientRef").html("");
			}
		},
		select: function( event, ui ) {
			this.value = ui.item.selec;
			ui.item.value = ui.item.selec;
			$("#ClientLast").val(ui.item.selec);
			$("#ClientId").val(ui.item.id.ClientId);
			$("#ClientRef").html(ui.item.id.ClientRef);
		}
	});
});
</script>
</form>
