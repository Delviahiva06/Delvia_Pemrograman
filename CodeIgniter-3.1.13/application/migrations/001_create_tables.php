<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_tables extends CI_Migration {
    public function up()
    {
        // Tabel pengguna
        $this->dbforge->add_field([
            'p_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->dbforge->add_key('p_id', TRUE);
        $this->dbforge->create_table('pengguna', TRUE);

        // Tabel huruf_hijaiyah
        $this->dbforge->add_field([
            'hh_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'huruf_1' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'huruf_2' => [
                'type' => 'VARCHAR',
                'constraint' => 35,
            ],
            'h_sound' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'h_cbg' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'h_text' => [
                'type' => 'TEXT',
                'null' => TRUE,
            ],
            'tgl_input' => [
                'type' => 'DATE',
                'null' => TRUE,
            ],
            'deskripsi' => [
                'type' => 'MEDIUMTEXT',
                'null' => TRUE,
            ],
        ]);
        $this->dbforge->add_key('hh_id', TRUE);
        $this->dbforge->create_table('huruf_hijaiyah', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('pengguna', TRUE);
        $this->dbforge->drop_table('huruf_hijaiyah', TRUE);
    }
} 