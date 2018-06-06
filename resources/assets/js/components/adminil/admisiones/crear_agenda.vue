<template>
<form id="crear_agenda" method="post" @submit.prevent="submit">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form-horizontal">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>Ingresar Fecha</th>
                    <th>Hora inicial</th>
                    <th>Hora final</th>
                    <th>ID. Profesional</th>
                    <th>Sede</th>
                    <tr>
                        <td><input class="form-control" type="date" name="fecha" placeholder="Ingresar fecha" v-model="fecha" required></td>
                        <td><input class="form-control" type="time" name="hora_inicial" placeholder="Ingresar hora inicial" v-model="hora_in" required></td>
                        <td><input class="form-control" type="time" name="hora_final" placeholder="Ingresar hora final" v-model="hora_out" required></td>
                        <td>
                            <select id="doctor" class="form-control" type="text" name="id_profesional" placeholder="ID. Profesional" required>
                              <option v-bind:id="medico.id" v-for="medico in medicos">{{medico.nombre}}</option>
                            </select>
                        </td>
                        <td><input readonly class="form-control" type="text" name="sedes" placeholder="Sede" v-model="sede" required>
                        </td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-5">
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
        </div>
    </div>
    </div>
</form>
</template>
<script>
export default {
  data: function () {
      return{
          fecha:'',
          hora_in:'',
          hora_out:'',
          User_id:'',
          sede:'',
          medicos:[]
      }
  },
  props: {

  },
  created:function() {
      var cvm=this
          axios.get('/admicionista/infocentro/')
              .then(function (response) {
                  console.log(response);
                  cvm.medicos=response.data[0].medicos;
                  cvm.sede=response.data[0].nombre;
              });
  },
  computed: {
      isdoctor: function () {
          var x =$("#doctor option:selected").attr('id');
          return this.User_id=x;
      }



  },
  watch: {

  },
  methods: {
    submit () {
      axios.post('/admicionista/crear_agenda', {
        datos:$("#crear_agenda").serializeArray(),
        iddoctor:$("#doctor option:selected").attr('id')
      })
        .then(function (response){
          console.log(response);

          self.fecha='',
          self.hora_in='',
          self.hora_out='',
          self.User_id='',
          self.sede='';
        })
        .catch(function (error) {
          console.log(error);
        })
    }

  }
}
</script>