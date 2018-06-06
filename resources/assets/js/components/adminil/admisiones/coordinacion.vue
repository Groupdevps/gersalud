<template>
<form id="coordinacion" method="get" @submit.prevent="submit">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#crear" data-toggle="tab" aria-expanded="true">Crear agendas</a></li>
                    <!--li><a href="#crear_horarios" data-toggle="tab" aria-expanded="true">Crear horarios</a></li-->
                    <li><a href="#asignacion" data-toggle="tab" aria-expanded="true">Asignacion de sedes</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="crear">
                        <!--@ include('adminlte::layouts.Adminil.admisiones.crear_agenda')-->
                        <crear_agend></crear_agend>
                    </div>
                    <!--div class="tab-pane fade" id="crear_horarios">
                        <!- - @ include('adminlte::layouts.Adminil.admisiones.crear_horario')- ->
                        <crear_hora></crear_hora>
                    </div>-->
                    <div class="tab-pane fade" id="asignacion">
                        <!--@ include('adminlte::layouts.Adminil.admisiones.asignacion_sedes')-->
                        <asignacion_sede></asignacion_sede>
                    </div>
                </div>
            </div>
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
    /*submit () {
      axios.get('Admisiones/coordinacion', {
        datos:$("#coordinacion").serializeArray()
      })
        .then(function (response){
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
    }*/

  }
}
</script>