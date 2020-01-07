<div class="modal-dialog eddialog" role="document">
    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Ticket #{{ $BookingTicket->BTicketId }}</h4>
	      </div>
	      <div class="modal-body" style="height:450px;overflow:auto;">
	      	<div class="DocumentsZone">
		        <div class="DocsLabel" style="width:65%">Información del ticket</div>
		    </div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Numero:</div><div class="fieldsValue">{{ $BookingTicket->BTicketRef }}</div>
	      		<div class="fieldsLabel">Estado:</div><div class="fieldsValue">{{ $BookingTicket->Status }}</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Hotel:</div><div class="fieldsValue">{{ $BookingTicket->Hotel }}</div>
	      		<div class="fieldsLabel">Nombre:</div><div class="fieldsValue">{{ $BookingTicket->Name }}</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Pasaporte:</div><div class="fieldsValue">{{ $BookingTicket->Passport }}</div>
	        	<div class="fieldsLabel">Phone:</div><div class="fieldsValue">{{ $BookingTicket->Phone }}</div>
	      	</div>
	        <div class="fieldsRow">
	      		<div class="fieldsLabel">Fecha:</div><div class="fieldsValue">{{ $BookingTicket->BTDate }}</div>
	      		<div class="fieldsLabel">Hora:</div><div class="fieldsValue">{{ $BookingTicket->BTTime }}</div>
	      	</div>
	      	<div class="fieldsRow">
	      		<div class="fieldsLabel">Tipo:</div><div class="fieldsValue">{{ $BookingTicket->Type }}</div>
	      		<div class="fieldsLabel">Vuelo:</div><div class="fieldsValue">{{ $BookingTicket->DFlightNo }}</div>
	      	</div>
	      	<div class="fieldsRow">
	      		<div class="fieldsLabel">PAX:</div><div class="fieldsValue">{{ $BookingTicket->PAX }}</div>
	      		<div class="fieldsLabel">Precio:</div><div class="fieldsValue">{{ $BookingTicket->Price }}</div>
	      	</div>
	      	
	      	
	      </div>
	      <div class="modal-footer">
	        <a class="btn btn-default" target="_blank" href="/BookingTickets/PdfTicket/{{ $BookingTicket->BTicketId }}">Genera Pdf</a>
	      	<button type="button" class="btn btn-default" onClick="EditBookingTicket('{{ $BookingTicket->BTicketId }}')">Editar</button>
	      	<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
	      </div>
	</div>
</div>
