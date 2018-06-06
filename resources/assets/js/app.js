
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const EventBus = new Vue()

Object.defineProperties(Vue.prototype, {
    $bus: {
        get: function () {
            return EventBus
        }
    }
})*/
/*
Vue.component('example', require('./components/Example.vue'));

Vue.component('datos_pacientes', require('./components/datos_paciente.vue'));
Vue.component('ejemplo', require('./components/Ejemplo.vue'));
*/
//hola  mundo
Vue.component('modalpaciente',require('./components/adminil/admisiones/dashboardpaciente'));
//Admisiones
Vue.component('admisionist', require('./components/adminil/admisiones/admisionista.vue'));
Vue.component('ingresopaciente', require('./components/adminil/admisiones/ingresopacientes.vue'));
Vue.component('confirmacion_cita', require('./components/adminil/admisiones/confirmacion_citas.vue'));
Vue.component('coordina', require('./components/adminil/admisiones/coordinacion.vue'));
Vue.component('crear_agend', require('./components/adminil/admisiones/crear_agenda.vue'));
Vue.component('crear_hora', require('./components/adminil/admisiones/crear_horario.vue'));
Vue.component('asignacion_sede', require('./components/adminil/admisiones/asignacion_sedes.vue'));
Vue.component('desbloqueo_agenda', require('./components/adminil/admisiones/desbloqueo_agendas.vue'));
Vue.component('extra_cupo', require('./components/adminil/admisiones/extra_cupos.vue'));
Vue.component('incapacida', require('./components/adminil/admisiones/incapacidad.vue'));
Vue.component('planillacppyp', require('./components/adminil/admisiones/planilla_cppyp.vue'));
Vue.component('demanda', require('./components/adminil/admisiones/demanda_inducida.vue'));
Vue.component('radicacioneps1', require('./components/adminil/admisiones/radicacioneps.vue'));
Vue.component('radicacion_eps2', require('./components/adminil/admisiones/radicacion _eps.vue'));
Vue.component('autorizacion_servicio', require('./components/adminil/admisiones/autorizacion_servicios.vue'));

//PNC
//Medico
 
Vue.component('medico_general', require('./components/adminil/PNC/medico/medico_general.vue'));
Vue.component('agenda_medica', require('./components/adminil/PNC/medico/agenda_medica.vue'));
//Vue.component('antecedente', require('./components/adminil/PNC/medico/antecedentes.vue'));
Vue.component('formulas_medica', require('./components/adminil/PNC/medico/formulas_medicas.vue'));
Vue.component('historias_clinica', require('./components/adminil/PNC/medico/historia_clinica.vue'));
Vue.component('nota_de_evolucion', require('./components/adminil/PNC/medico/notas_de_evolucion.vue'));
Vue.component('orden_laboratorio', require('./components/adminil/PNC/medico/orden_laboratorio.vue'));
Vue.component('ordenes_ambulatorias', require('./components/adminil/PNC/medico/ordenes_ambulatorias.vue'));
/*
* */

//Sistemas
Vue.component('addcentro', require('./components/adminil/sistemas/addcentros.vue'));
Vue.component('administracion', require('./components/adminil/sistemas/administracion.vue'));
Vue.component('medicos', require('./components/adminil/sistemas/medicos.vue'));
//Vue.component('personal_admins', require('./components/adminil/sistemas/personal_admins.vue'));
Vue.component('proveedores', require('./components/adminil/sistemas/proveedores.vue'));
//Vue.component('registro_usuarios', require('./components/adminil/sistemas/registro_usuarios.vue'));
Vue.component('config-centro', require('./components/adminil/sistemas/configCentro.vue'));

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*window.axios= require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

const app = new Vue({
    el: '#app'
});*/
const app = new Vue({
    el: '#app',
    data:{
    paciente:[],
    Nombre:'',
    cc: 0,
    idcentro:0
    },

    methods: {

    	prueba:function(e){
			
			var parametros
			 axios.get('/paciente/'+this.cc).then((response) =>{
			 	console.log(response);
                app.paciente= response.data;
            });
    		
    	}
    }	
    
});