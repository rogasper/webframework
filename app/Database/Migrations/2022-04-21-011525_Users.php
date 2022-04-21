<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'tanggal_lahir' => [
                'type' => 'DATE'
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['LAKI-LAKI', 'PEREMPUAN']
            ],
            'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
