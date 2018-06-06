<template>
    <div class="container">
         <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
               
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#PerAsis">Personal Asistencial</a></li>
                        <!--<li><a data-toggle="tab" href="#infoad">Admnistrativo</a></li>-->
                        <li><a data-toggle="tab" href="#PerAdmi">Personal Administartivo</a></li>
                        <li><a data-toggle="tab" href="#proveedores">Proveedores</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <!--<div id="infoad" class="tab-pane fade">
                        <h3>Adminitrativo</h3>
                        <!-<administracion></administracion>->
                    </div>-->
                    <div id="PerAsis" class="tab-pane active fade in">
                        <h3>Registro Medico</h3>
                        <medicos :centroinfo="this.centroidnew"></medicos >

                    </div>
                    <div id="PerAdmi" class="tab-pane fade in">
                        <h3>Registro usuarios</h3>
                        <administracion :centroinfo="this.centroidnew"></administracion>

                    </div>
                      <div id="proveedores" class="tab-pane fade in">
                        <h3>Proveedores</h3>
                        <proveedores :centroinfo="this.centroidnew"></proveedores>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "config-centro",
        created () {
            this.$bus.$on('newcentroe', ($event) => {
                this.centroidnew=$event
                console.log($event)
            })

        },
        data:function () {
            return{
                centroidnew:''
            }
        },
        mounted() {

        },
        computed:{

        },
        watch:{

        },
        methods:{

        }
    }
</script>

<style scoped>

</style>