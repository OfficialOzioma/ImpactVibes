<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\Role;
class CreateAdminRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = New User();
        $role = New Role();


        $role->name = "Admin";
        $role->save();


        $user->role_id = 1;
        $user->is_active = 1;
        $user->name = "Super Admin";
        $user->email = "superAdmin@gmail.com";
        $user->password =  bcrypt('adminpassword');
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_role');
    }
}
