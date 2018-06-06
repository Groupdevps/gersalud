<template>
<form id="crear_horario" method="get" @submit.prevent="submit">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="form-horizontal">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>ID. Profesional</th>
                    <th>Fecha</th>
                    <th>Turno</th>

                    <tr>
                        <td><label for="">{{iddoctor}}</label></td>
                        <td>
                            <select id="fechaagenda" @change.prevent="cargarTurnos" class="form-control" type="date" name="fecha" placeholder="Ingresar fecha" required>
                                <option>seleccione</option>
                                <option :id="item.id" v-for="item in  agenda" :value="item.fecha">{{item.fecha}}</option>
                            </select>
                        </td>
                        <td>
                          <select id="hora_i" @change.prevent="cargarHora" class="form-control" type="time" name="hora_inicial" placeholder="Ingresar hora inicial" required>
                              <option>seleccione</option>
                              <option :id="itemt.id" v-for="itemt in  turnos" :value="itemt.id">{{itemt.horain}}-{{itemt.horafin}}</option>
                          </select>
                          </td>

                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="btn-group">
                <button class="btn btn-primary">Guardar</button>
                <button class="btn btn-primary">Eliminar</button>
            </div>
        </div>
    </div>
    </div>
</form>
</template>
<script>
export default {
  data(){
    return{
        doctor:[],
        agenda:[],
        iddoctor:"",
        turnos:[]
    }


  },
  props: {

  },
  created:function () {
     var v=this;
      this.$bus.$on('cargaragenda', ($event) => {
          this.doctor=$event
          this.iddoctor=$event.id;
          axios.get('/admicionista/infoAgendaMedico/'+ v.doctor.id+" ")
              .then(function (response) {
                  console.log(response);
                  v.agenda=response.data;



              })
              .catch(function (error) {
                  console.log(error);
              })


      });

  },
  computed: {

  },
  watch: {

  },
  methods: {
    submit () {
      axios.post('/admicionista/crear_horario', {
        datos:$("#crear_horario").serializeArray(),
          iddoctor
      })
        .then(function (response){
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
    },
    cargarTurnos(){
        var vm=this;
        axios.get('/admicionista/infoTurnoAgenda/'+$("#fechaagenda option:selected").attr('id')+"")
            .then(function (response){
                console.log(response);
                vm.turnos=response.data;
            })
            .catch(function (error) {
                console.log(error);
            })
    },
    cargarHora(){
      console.log("hora select "+$("#hora_i option:selected").val());
    }

  }
}
</script>