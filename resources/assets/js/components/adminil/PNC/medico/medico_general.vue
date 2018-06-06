<template>
<form id="medico_general" method="get" @submit.prevent="submit">
<div class="container">
	<div class="row" ><!--v- show="false"-->
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header-fluid">
					<h4>Datos del paciente</h4>
				</div>
				<div class="box-body-fluid">
					
						<h5>Nombre:<span ></span></h5> <!--: class="paciente. name"-->
						<h5>C.C:<span ></span></h5><!--: class="paciente. cc"-->
						<h5>EPS:<span ></span></h5><!--: class="paciente. eps"-->
					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<div class="box box-primary">
				<div class="box-header-fluid">
					<h3 class="text-center">Menu</h3>
				</div>
				<div class="box-body">
					<h3>Opciones</h3>
					<ul class="nav nav-pills">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Historial
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
							<li> <!--class="active"--><a href="#historia" data-toggle="pill" aria-expanded="true">Historia</a></li>
							<li><a href="#antecedentes" data-toggle="pill" aria-expanded="true">Antecedentes</a></li>
						</ul>
						</li>
						<li><a href="#notas" data-toggle="pill" aria-expanded="true">Notas de evolucion</a></li>
						<li><a href="#ordenes" data-toggle="pill" aria-expanded="true">Ordenes</a></li>
						<li><a href="#laboratorio" data-toggle="pill" aria-expanded="true">Laboratorio</a></li>
						<li><a href="#ayuda" data-toggle="pill" aria-expanded="true">Ayuda diagnostica</a></li>
						<li><a href="#formula" data-toggle="pill" aria-expanded="true">Formula</a></li>
						<li><a href="#radicacion" data-toggle="pill" aria-expanded="true">Radicacion EPS</a></li>
						<li><a href="#agenda" data-toggle="pill" aria-expanded="true">Agenda de revision</a></li>
						<li><a href="#multimedicos" data-toggle="pill" aria-expanded="true">Multimedicos</a></li>
					</ul>
				</div>
			</div>			
		</div><!--col-md-2-->		
		<div class="col-md-10">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<!--<li class="active"><a  href="#Agenda" data-toggle="tab" aria expanded="true">Agenda</a></li>-->
					<li class="active"><a href="#Opciones" data-toggle="tab" aria expanded="true">Opciones</a>
					</li>
				</ul>
				<div class="tab-content">
					<!--<div class="tab-pane fade in active" id="Agenda">
						@ include('adminlte::layouts.escritorios.agenda')
					</div>-->
					<div class="tab-pane fade in active" id="Opciones">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="historia">
								<!-- @ include('adminlte::layouts.PNC.historiaclinica') -->
								<historias_clinica></historias_clinica>
							</div>
							<div class="tab-pane fade" id="notas">
								<!-- @ include('adminlte::layouts.PNC.notasdeevolucion') -->
								<nota_de_evolucion></nota_de_evolucion>
							</div>
							<div class="tab-pane fade" id="ordenes">
								<!-- @ include('adminlte::layouts.PNC.ordenesambulatorias') -->
								<ordenes_ambulatorias></ordenes_ambulatorias>
							</div>
							<div class="tab-pane fade" id="laboratorio">
								<!-- @ include('adminlte::layouts.PNC.Ordenlaboratorio') -->
								<orden_laboratorio></orden_laboratorio>
							</div>
							<div class="tab-pane fade" id="ayuda">
								<!-- @ include('adminlte::layouts.PNC.ayudadiagnostica') -->
							</div>
							<div class="tab-pane fade" id="formula">
								<!-- @ include('adminlte::layouts.PNC.formulasmedicas') -->
								<formulas_medica></formulas_medica>
							</div>
							<div class="tab-pane fade" id="radicacion">
								<!-- @ include('adminlte::layouts.PNC.radicacion_eps') -->
							</div>
							<div class="tab-pane fade" id="agenda">
								<!-- @ include('adminlte::layouts.PNC.agendamedica') -->
								<agenda_medica></agenda_medica>
							</div>
							<!--div class="tab-pane fade" id="antecedentes">
								<! - - @ include('adminlte::layouts.PNC.antecedentes') - ->
								<antecedente></antecedente>
							</div-->
							<!--div class="tab-pane fade" id="multimedicos">
								<!- - @ include('adminlte::layouts.PNC.multimedicos') - ->
							</div-->
						</div>
					</div>
				</div>			
			</div>				
		</div>
	</div>
</div><!--container-->
</form>
</template>
<script>
 export default {
  data: function () {
  	return{
  		
  	}

  },
  props: {

  },
  computed: {

  },
  watch: {

  },
  methods: {
    submit () {
      axios.get('Medico/dashboard', {
        datos:$("#medico_general").serializeArray()
      })
        .then(function (response){
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>