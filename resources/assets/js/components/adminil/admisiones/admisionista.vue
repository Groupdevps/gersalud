<template>
<form id="admisionista" method="post" @submit.prevent="submit">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-2">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3>Menu</h3>
                    </div>
                        <div class="box-body">
                        <h4>Paciente:<span :value="paciente.name"></span></h4>
                        <h5>C.C:<span :value="paciente.cc"></span></h5>
                        <h5>Numero de ingreso:</h5>
                        <h5>Numero de atencion:</h5>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header">
                        <h3>Opciones<h3>
                    </div>
                    <div class="box-body">
                        <ul class="nav nav-tabs">
                        <h4>Coordinacion</h4>
                        </ul>>
                    </div>
                </div>
            </div>-->
            <div class="col-md-10">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingreso
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li> <!--class="active"--><a href="#ingreso" data-toggle="tab" aria-expanded="true">Ingreso pacientes</a></li>
                                <li><a href="#confirmacion" data-toggle="tab" aria-expanded="true">Confirmacion / cancelacion de citas</a></li>
                                <li><a href="#extra" data-toggle="tab" aria-expanded="true">Extra cupos</a></li>
                                <li><a href="#desbloqueo" data-toggle="tab" aria-expanded="true">Desbloqueo de agendas</a></li>
                                <li><a href="#planilla" data-toggle="tab" aria-expanded="true">Planilla CPPYP</a></li>
                                <li><a href="#demanda" data-toggle="tab" aria-expanded="true">Demanda inducida</a></li>
                            </ul>
                        </li><!--dropdown-->
                        <li><a href="#coordinacion" data-toggle="tab" aria-expanded="true">Coordinacion</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Radicacion
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li> <!--class="active"--><a href="#radicacion" data-toggle="tab" aria-expanded="true">Crear Radicacion</a></li>
                                <li><a href="#buscar" data-toggle="tab" aria-expanded="true">Buscar Radicacion</a></li>

                            </ul>
                        </li>
                        <li><a href="#incapacidad" data-toggle="tab" aria-expanded="true">Incapacidad</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="ingreso">
                           <!--@ include('adminlte::layouts.Adminil.admisiones.ingreso_pacientes')-->
                            <ingresopaciente></ingresopaciente>
                        </div>
                        <div class="tab-pane fade" id="confirmacion">
                            <!--@ include('adminlte::layouts.Adminil.admisiones.confirmacion_de_citas')-->
                           <confirmacion_cita></confirmacion_cita>
                       </div>
                       <div class="tab-pane fade" id="extra">
                            <!--@ include('adminlte::layouts.Adminil.admisiones.extra_cupos')-->
                           <extra_cupo></extra_cupo>
                       </div>
                       <div class="tab-pane fade" id="desbloqueo">
                            <!--@include('adminlte::layouts.Adminil.admisiones.desbloqueo_agendas')-->
                           <desbloqueo_agenda></desbloqueo_agenda>
                       </div>
                       <div class="tab-pane fade" id="planilla">
                            <!--@include('adminlte::layouts.Adminil.admisiones.planilla_cppyp')-->
                           <planillacppyp></planillacppyp>
                       </div>
                       <div class="tab-pane fade" id="demanda">
                            <!--@include('adminlte::layouts.Adminil.promocion.demanda_inducida')-->
                           <demanda></demanda>
                       </div>
                       <div class="tab-pane fade" id="coordinacion">
                            <!--@include('adminlte::layouts.Adminil.admisiones.coordinacion')-->
                           <coordina></coordina>
                       </div>
                       <div class="tab-pane fade" id="radicacion">
                            <!--@include('adminlte::layouts.Adminil.proveedores.radicacioneps')-->
                           <radicacioneps1></radicacioneps1>
                       </div>
                       <div class="tab-pane fade" id="buscar">
                            <!--@include('adminlte::layouts.PNC.radicacion_eps')-->
                           <radicacion_eps2></radicacion_eps2>
                       </div>
                       <div class="tab-pane fade" id="incapacidad">
                            <!--@include('adminlte::layouts.Adminil.admisiones.incapacidad')-->
                           <incapacida></incapacida>
                       </div>

                   </div>
               </div>
              <!--
               <div class="col-md-2">
                   <div class="box box-primary">
                       <div class="box-body">
                           <button id="hover2" class="btn btn-primary CustomBtn" type="button">
                               Prioridades
                               <span class="badge"></span>
                           </button>
                           <button id="hover1" class="btn btn-info CustomBtn" type="button" >
                               Notificaciones
                               <span class="badge"></span>
                           </button>
                       </div>
                   </div>
               </div>
               -->
           </div>
       </div>
   </div>
   </form>
</template>
<script>
 export default {
  data: function () {
    return{}
  },
  props: {

  },
  computed: {

  },
  watch: {

  },
  methods: {
    submit () {
      axios.post('Admisiones/escritorio', {
        datos:$("#admisionista").serializeArray()
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
