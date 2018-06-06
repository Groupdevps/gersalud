<template>
<form id="agenda_medica" method="get" @submit.prevent="submit">
<h2>Agenda Medica</h2>

<div clas="container-fluid">
 
  <!--form method="GET"  action="-"-->
  <div class="row">
    <div class="form-horizontal">
      <div class="col-md-2">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-search"></i></span>
          <input class="form-control"  type="text" name="doctor" placeholder="Doctor" v-model="doctor">
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          <input class="form-control"  type="date" name="fecha" v-model="fecha" placeholder="Fecha">
        </div>
      </div>
      <div class="col-md-2">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-building"></i></span>
          <input class="form-control" type="text" name="sede" v-model="sede" placeholder="Sede">
        </div>
      </div>
      <div class="col-md-2">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
          <input class="form-control"  type="time"  name="hora_inicial" v-model="hora_inicial">
        </div>
      </div>
      <div class="col-md-2">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
          <input class="form-control"  type="time" name="hora_final" v-model="hora_final">
        </div>
      </div>
    </div>
    <div class="col-md-1">
      <div class="output-group">
        <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
    </div>
  </div><!--row-->
    <br>
    <div class="row">
      <div class="col-md-12">
      <table class="table table-bordered table-hover">
        <thead>
        <th>Doctor</th>
        <th>Fecha</th>
        <th>Sede</th>
        <th>Hora inicial</th>
        <th>Hora Final</th>
        </thead>
      </table>
      </div>
    </div>
 <!--/form-->  
</div>
</form>
</template>
<script>
 export default {
  data: function () {
    return {
      doctor:'',
      fecha:'',
      sede:'',
      hora_inicial:'',
      hora_final:''
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
      axios.get('Medico/agend', {
        datos:$("#agenda_medica").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.doctor='',
          self.fecha='',
          self.sede='',
          self.hora_inicial='',
          self.hora_final='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>