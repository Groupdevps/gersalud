
<script type="text/babel">
    export default {
        props: ['message', 'btnClass', 'btnText'],
        created () {
            //this.dataToSend = this.postData
        },
        data () {
            return {
                dataToSend: null,
                modalState: false,
                option:null,
                medicos:[]
            }
        },
        created:function(){
            var cvm=this
            axios.get('/admicionista/infocentro/')
                .then(function (response) {
                    console.log(response);
                    cvm.medicos=response.data[0].medicos;
                    cvm.sede=response.data[0].nombre;
                });
        },
        methods: {
            handleCloseButton () {

                this.modalState = false
                //window.eventBus.$emit('closed-modal-popup')
            },
            handleActionButton () {
                this.modalState = true
            },
            handleConfirmButton () {

            },
            showModal(){
                this.modalState = true
            },
            cargarAgenda(medico){
                let  evenbus=this.$bus;
                evenbus.$emit('cargaragenda', medico);
            }
        }
    }
</script>

<template>
    <div class="ConfirmModalWrapper">
        <label for="sel9">Servicios:</label>
        <select @change.prevent="showModal" class="form-control" id="sel9" v-model="option">
            <option>Medicina general</option>
            <option>Odontologia</option>
            <option>Promocion y prevencion</option>
            <option>Ayudas diagnostica</option>
            <option>Laboratorio</option>
            <option>Especialidad</option>
        </select>

        <button class="btn btn-xs"
                @click.prevent="handleActionButton"
                v-bind:class="btnClass">
            <div v-html="btnText"></div>
        </button>
        <div class="modal" v-bind:class="{'is-active': modalState}">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="modal-card-head">
                    <span class="modal-card-title">
                        Asignacion de citas de: {{option}}
                    </span>
                </div>
                <div class="modal-card-body">
                    <div class="col-md-3">
                        Listado de  Doctores
                        <div v-for="medico in medicos">
                            <div class="row">
                                <a class="linkdoc" @click.prevent="cargarAgenda(medico)">
                                    <div class="user-panel">
                                        <div class="pull-left image">
                                            <img src="http://www.gravatar.com/avatar/406175c9cde97d100e93e7c0be4404d0.jpg?s=80&amp;d=mm&amp;r=g" alt="User Image" height="35px" class="img-circle">
                                        </div>
                                        <div class="pull-left info">
                                            <p class="colorblack">{{medico.nombre}}</p>
                                            <a class="colorblack" href="#"><i class="fa fa-circle text-success"></i> En Línea
                                            </a>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>

                        <!-- /.users-list -->
                    </div>
                    <div class="col-md-9">
                        Agenda
                        <crear_hora></crear_hora>
                    </div>
                </div>

                <div class="modal-card-foot">
                    <button class="btn btn-success" @click="handleConfirmButton">Ok</button>
                    <button class="btn btn-warning" @click="handleCloseButton">Cancel</button>
                </div>






            </div>
            <button class="modal-close" @click.prevent="handleCloseButton"></button>
        </div>
    </div>
</template>

<style>
    .colorblack{
        color:black!important;
    }
    .user-panel:hover{
        background-color: #001a35!important;
        color: white!important;
    }
    .user-panel:hover p{

        color: white!important;
    }
    .linkdoc:hover{
        background-color: #001a35;
        color: white!important;
    }
    .modal-background {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        background-color: rgba(10, 10, 10, 0.86);
    }
    .modal-content,
    .modal-card {
        margin: 0 20px;
        max-height: calc(100% - 160px);
        overflow: auto;
        position: relative;
        width: 90%!important;
        padding: 20px;
    }
    .modal-content h4 {
        padding-bottom: 20px;
        text-align: left;
    }
    @media screen and (min-width: 769px) {
        .modal-content,
        .modal-card {
            margin: 0 auto;
            max-height: calc(100vh - 40px);
            width: 640px;
        }
    }
    .modal-close {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        background-color: rgba(10, 10, 10, 0.2);
        border: none;
        border-radius: 290486px;
        cursor: pointer;
        display: inline-block;
        font-size: 1rem;
        height: 20px;
        outline: none;
        position: relative;
        transform: rotate(45deg);
        transform-origin: center center;
        vertical-align: top;
        width: 20px;
        background: none;
        height: 40px;
        position: fixed;
        right: 20px;
        top: 20px;
        width: 40px;
    }
    .modal-close:before, .modal-close:after {
        background-color: white;
        content: "";
        display: block;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    .modal-close:before {
        height: 2px;
        width: 50%;
    }
    .modal-close:after {
        height: 50%;
        width: 2px;
    }
    .modal-close:hover, .modal-close:focus {
        background-color: rgba(10, 10, 10, 0.3);
    }
    .modal-close:active {
        background-color: rgba(10, 10, 10, 0.4);
    }
    .modal-close.is-small {
        height: 14px;
        width: 14px;
    }
    .modal-close.is-medium {
        height: 26px;
        width: 26px;
    }
    .modal-close.is-large {
        height: 30px;
        width: 30px;
    }
    .modal-card {
        display: flex;
        flex-direction: column;
        max-height: calc(100vh - 40px);
        overflow: hidden;
    }
    .modal-card-head,
    .modal-card-foot {
        align-items: center;
        background-color: whitesmoke;
        display: flex;
        flex-shrink: 0;
        justify-content: flex-start;
        padding: 20px;
        position: relative;
    }
    .modal-card-head {
        border-bottom: 1px solid #dbdbdb;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    .modal-card-title {
        color: #363636;
        flex-grow: 1;
        flex-shrink: 0;
        font-size: 1.5rem;
        line-height: 1;
    }
    .modal-card-foot {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        border-top: 1px solid #dbdbdb;
    }
    .modal-card-foot .button:not(:last-child) {
        margin-right: 10px;
    }
    .modal-card-body {
        -webkit-overflow-scrolling: touch;
        background-color: white;
        flex-grow: 1;
        flex-shrink: 1;
        overflow: auto;
        padding: 20px;
    }
    .modal {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        align-items: center;
        display: none;
        justify-content: center;
        overflow: hidden;
        position: fixed;
        z-index: 1986;
    }
    .modal.is-active {
        display: flex;
    }
</style>