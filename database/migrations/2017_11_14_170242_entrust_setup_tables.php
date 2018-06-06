<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use App\User;
use App\Permission;
use App\centro;
class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });

        /*
            grupo de  permisos  de  centros 
        */
            $createCentro = new Permission();
            $createCentro->name         = 'create-centro';
            $createCentro->display_name = 'Crear Centros'; // optional
            // Allow a user to...
            $createCentro->description  = 'Puede  crear  un  centro de  salud '; // optional
            $createCentro->save();

            $readCentro = new Permission();
            $readCentro->name         = 'read-centro';
            $readCentro->display_name = 'lectura Centros'; // optional
            // Allow a user to...
            $readCentro->description  = 'Puede  leer    un  centro de  salud '; // optional
            $readCentro->save();

            $updateCentro = new Permission();
            $updateCentro->name         = 'update-centro';
            $updateCentro->display_name = 'Crear Centros'; // optional
            // Allow a user to...
            $updateCentro->description  = 'Puede  etidar  un  centro de  salud '; // optional
            $updateCentro->save();

            $deleteCentro = new Permission();
            $deleteCentro->name         = 'delete-centro';
            $deleteCentro->display_name = 'Crear Centros'; // optional
            // Allow a user to...
            $deleteCentro->description  = 'Puede  borrar  un  centro de  salud '; // optional
            $deleteCentro->save();//ojo esta  liena  tiene error


            //Admisiones-Ingreso pacientes

            $createPaciente = new Permission();
            $createPaciente->name         = 'create-paciente';
            $createPaciente->display_name = 'Crear Paciente'; // optional
            // Allow a user to...
            $createPaciente->description  = 'Puede crear un paciente'; // optional
            $createPaciente->save();

            $readPaciente = new Permission();
            $readPaciente->name         = 'read-paciente';
            $readPaciente->display_name = 'lectura Paciente'; // optional
            // Allow a user to...
            $readPaciente->description  = 'Puede leer un paciente'; // optional
            $readPaciente->save();

            $updatePaciente = new Permission();
            $updatePaciente->name         = 'update-paciente';
            $updatePaciente->display_name = 'Editar paciente'; // optional
            // Allow a user to...
            $updatePaciente->description  = 'Puede  editar  un  paciente '; // optional
            $updatePaciente->save();

            //Admisiones-Crear Agenda
            $createAgenda = new Permission();
            $createAgenda->name         = 'create-agenda';
            $createAgenda->display_name = 'Crear Agenda'; // optional
            // Allow a user to...
            $createAgenda->description  = 'Puede  crear  una agenda '; // optional
            $createAgenda->save();

            $readAgenda = new Permission();
            $readAgenda->name         = 'read-agenda';
            $readAgenda->display_name = 'lectura Agenda'; // optional
            // Allow a user to...
            $readAgenda->description  = 'Puede  leer    una agenda '; // optional
            $readAgenda->save();

            $updateAgenda = new Permission();
            $updateAgenda->name         = 'update-agenda';
            $updateAgenda->display_name = 'Crear Agenda'; // optional
            // Allow a user to...
            $updateAgenda->description  = 'Puede  etidar  una agenda '; // optional
            $updateAgenda->save();

            $deleteAgenda = new Permission();
            $deleteAgenda->name         = 'delete-agenda';
            $deleteAgenda->display_name = 'Crear Agenda'; // optional
            // Allow a user to...
            $deleteAgenda->description  = 'Puede  borrar  una agenda '; // optional
            $deleteAgenda->save();

            //Medico-Crear notas
            $createNotas = new Permission();
            $createNotas->name         = 'create-notas';
            $createNotas->display_name = 'Crear Notas'; // optional
            // Allow a user to...
            $createNotas->description  = 'Puede  crear  una nota '; // optional
            $createNotas->save();

            $readNotas = new Permission();
            $readNotas->name         = 'read-notas';
            $readNotas->display_name = 'lectura Notas'; // optional
            // Allow a user to...
            $readNotas->description  = 'Puede  leer    una nota '; // optional
            $readNotas->save();

            $updateNotas = new Permission();
            $updateNotas->name         = 'update-notas';
            $updateNotas->display_name = 'Crear Notas'; // optional
            // Allow a user to...
            $updateNotas->description  = 'Puede  etidar  una nota '; // optional
            $updateNotas->save();

            $deleteNotas = new Permission();
            $deleteNotas->name         = 'delete-notas';
            $deleteNotas->display_name = 'Crear Notas'; // optional
            // Allow a user to...
            $deleteNotas->description  = 'Puede  borrar  una nota '; // optional
            $deleteNotas->save();

            //Medico-formulas medicas
            $createFormula = new Permission();
            $createFormula->name         = 'create-formula_m';
            $createFormula->display_name = 'Crear Formula medica'; 
            $createFormula->description  = 'Puede  crear  una formula medica ';
            $createFormula->save();

            $readFormula = new Permission();
            $readFormula->name         = 'read-formula_m';
            $readFormula->display_name = 'lectura Formula medica'; 
            $readFormula->description  = 'Puede  leer    una formula medica '; 
            $readFormula->save();

            $updateFormula = new Permission();
            $updateFormula->name         = 'update-formula_m';
            $updateFormula->display_name = 'Crear Formula medica'; 
            $updateFormula->description  = 'Puede  etidar  una formula medica '; 
            $updateFormula->save();

            $deleteFormula = new Permission();
            $deleteFormula->name         = 'delete-formula_m';
            $deleteFormula->display_name = 'Crear Formula medica';
            $deleteFormula->description  = 'Puede  borrar  una formula medica '; 
            $deleteFormula->save();

             //Medico-historia clinica
            $createHistoriac = new Permission();
            $createHistoriac->name         = 'create-historiac';
            $createHistoriac->display_name = 'Crear Historia clinica'; 
            $createHistoriac->description  = 'Puede  crear  una historia clinica ';
            $createHistoriac->save();

            $readHistoriac = new Permission();
            $readHistoriac->name         = 'read-historiac';
            $readHistoriac->display_name = 'lectura Historia clinica'; 
            $readHistoriac->description  = 'Puede  leer    una historia clinica '; 
            $readHistoriac->save();

            $updateHistoriac = new Permission();
            $updateHistoriac->name         = 'update-historiac';
            $updateHistoriac->display_name = 'Crear Historia clinica'; 
            $updateHistoriac->description  = 'Puede  etidar  una historia clinica '; 
            $updateHistoriac->save();

            $deleteHistoriac = new Permission();
            $deleteHistoriac->name         = 'delete-historiac';
            $deleteHistoriac->display_name = 'Crear Historia clinica';
            $deleteHistoriac->description  = 'Puede  borrar  una historia clinica '; 
            $deleteHistoriac->save();

        DB::table('roles')->insert(
            array(
                'name' => 'admin',
                'display_name'=>'admin',
                'description'=>'administrador del sistema'

            )
        );


       
/*
asignacion de default  usuario  admint
*/


        DB::table('role_user')->insert(
            array(
                'user_id' => '1',
                'role_id'=>'1'

            )
        );

        DB::table('roles')->insert(
            array(
                'name' => 'doctor',
                'display_name'=>'Doctor',
                'description'=>'Medico General'

            )
        );
        DB::table('roles')->insert(
            array(
                'name' => 'especialista',
                'display_name'=>'Especialista',
                'description'=>'Medico Especialista'

            )
        );
        DB::table('roles')->insert(
            array(
                'name' => 'enfermera',
                'display_name'=>'Enfermera',
                'description'=>'enfermera'

            )
        );
        DB::table('roles')->insert(
            array(
                'name' => 'gerente',
                'display_name'=>'Gerente',
                'description'=>'Gerente De Centro'

            )
        );
        DB::table('roles')->insert(
            array(
                'name' => 'admicionista',
                'display_name'=>'Admicion',
                'description'=>'Administrativo'

            )
        );
        /*asignacion default de  admisionista de  prueba*/

        /* tabla personal administrativo
    $table->increments('id');
    $table->string('nombre');
    $table->string('apellido');
    $table->string('direccion');
    $table->string('cc');
    $table->integer('cargo_id');
    $table->integer('User_id')->unsigned()->nullable(false)->change();
    $table->string('id_centro')->unsigned()->nullable(false)->change();
     */
        $centro=new App\centro();
        $centro->nombre="prueba";
        $centro->email="prueba@preuba.com";
        $centro->ubicacion="prueba";
        $centro->celular="123456789";
        $centro->nit="123456789";
        $centro->direccion="cra12#48a03";
        $centro->nombreContacto="JEAN CARLOS";
        $centro->telefonoContacto="123456789";
        $centro->save();

        $u=new User();
        $u->email= 'admision1@il.com';
        $u->name='admision1';
        $u->password=bcrypt('admin');
        $u->type='Administracion';
        $u->save();
        DB::table('role_user')->insert(
            array(
                'user_id' => $u->id,
                'role_id'=>'6'

            )
        );

        //prueba
        /*$u=new User();
        $u->email= 'doctor1@prueba.com';
        $u->name='prueba';
        $u->password=bcrypt('123456');
        $u->type='Medico';
        $u->save();
        DB::table('role_user')->insert(
            array(
                'user_id' => $u->id,
                'role_id'=>'2'

            )
        );*/

        $padmin=new App\personal_admint();
        $padmin->nombre="admision1";
        $padmin->apellido="admision1";
        $padmin->direccion="craxx xx#xx-xx";
        $padmin->cc="11295368585";
        $padmin->cargo_id="1";
        $padmin->User_id=$u->id;
        $padmin->id_centro=$centro->nit;
        $padmin->save();

        /*
         * $table->increments('id');
            $table->string('nombre');
            $table->string('email');
            $table->string('ubicacion');
            $table->bigInteger('celular');
            $table->bigInteger('nit')->unique();
            $table->string('direccion',255);
            $table->string('nombreContacto');
            $table->bigInteger('telefonoContacto');
            $table->timestamps();
         * */



        $docentro1=new App\medico();
        $docentro1->nitcentro= $centro->nit;
        $docentro1->nombre="doctor1";
        $docentro1->apellido="PRUEBA";
        $docentro1->email="doctor1@prueba.com";
        $docentro1->cc="11295368581";
        $docentro1->telefono="11295368581";
        $docentro1->tarjeta_p="11295368581";
        $docentro1->save();

        $docentro2=new App\medico();
        $docentro2->nitcentro= $centro->nit;
        $docentro2->nombre="doctor2";
        $docentro2->apellido="PRUEBA";
        $docentro2->email="doctor2@prueba.com";
        $docentro2->cc="11295368582";
        $docentro2->telefono="11295368582";
        $docentro2->tarjeta_p="11295368582";
        $docentro2->save();

        $docentro3=new App\medico();
        $docentro3->nitcentro= $centro->nit;
        $docentro3->nombre="doctor3";
        $docentro3->apellido="PRUEBA";
        $docentro3->email="doctor3@prueba.com";
        $docentro3->cc="11295368583";
        $docentro3->telefono="11295368583";
        $docentro3->tarjeta_p="11295368583";
        $docentro3->save();

        $u=new User();
        $u->email= $docentro1->email;
        $u->name=$docentro1->nombre;
        $u->password=bcrypt('admin');
        $u->type='Medico';
        $u->save();
        DB::table('role_user')->insert(
            array(
                'user_id' => $u->id,
                'role_id'=>'2'

            )
        );
        $u=new User();
        $u->email= $docentro2->email;
        $u->name=$docentro2->nombre;
        $u->password=bcrypt('admin');
        $u->type='Medico';
        $u->save();
        DB::table('role_user')->insert(
            array(
                'user_id' => $u->id,
                'role_id'=>'2'

            )
        );
        $u=new User();
        $u->email= $docentro3->email;
        $u->name=$docentro3->nombre;
        $u->password=bcrypt('admin');
        $u->type='Medico';
        $u->save();
        DB::table('role_user')->insert(
            array(
                'user_id' => $u->id,
                'role_id'=>'2'

            )
        );

    }




    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('permission_role');
        Schema::drop('permissions');
        Schema::drop('role_user');
        Schema::drop('roles');
    }
}
