<template>
<form id="asignacion_sede" method="post" @submit.prevent="submit">
<div class="container">
	<div class="row">
		<h3>Asignacion de sede</h3>
		<div class="col-md-8">
			<div class="row">
				<div class="form-inline">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">ID: </span>
							<input class="form-control" type="text" name="id_profesional" placeholder="Profesional" v-model="id_profesional" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input class="form-control" type="date" name="fecha" v-model="fecha" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon">Sede: </span>
							<input class="form-control" type="text" name="sede" v-model="sede" required>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4 col-md-offset-6">
			<div class="btn-group">
				<button type="submit" class="btn btn-primary">Guardar</button>
				<button class="btn btn-primary">Eliminar</button>
			</div>
		</div>
	</div>
</div>
</form>
</template>
<script>
export default {
  data: function () {
  	return {
  	id_profesional:'',
  	fecha:'',
  	sede:''
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
      axios.post('Admisiones/asig_sedes', {
        datos:$("#asignacion_sede").serializeArray()
      })
        .then(function (response){
          console.log(response);
          self.id_profesional='',
  		  self.fecha='',
  		  self.sede='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>
