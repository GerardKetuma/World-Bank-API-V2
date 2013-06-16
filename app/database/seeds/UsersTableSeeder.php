<?php

class UsersTableSeeder extends Seeder {

  public function run()
  {
    // Uncomment the below to wipe the table clean before populating
    DB::table('users')->delete();

    $users = array(
      array(
        'username' => 'johndoe',
        'password' => Hash::make('chicago')
      )
    );

    // Uncomment the below to run the seeder
    DB::table('users')->insert($users);
  }

}
