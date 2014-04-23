<?php

class m140319_170804_create_variable_details_table extends CDbMigration {

    public function up() {
        $this->createTable('variable_details', array(
            'id' => 'pk',
            'slug' => 'string NOT NULL',
            'shortness' => 'string NOT NULL',
            'name' => 'string NOT NULL',
            'description' => 'text',
            'status' => 'string',
            'user_profile_id' => 'integer',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));

        $this->createIndex('slug_variable_details_index', 'variable_details', 'slug');
        $this->createIndex('status_variable_details_index', 'variable_details', 'status');
        $this->createIndex('user_profile_id_variable_details_index', 'variable_details', 'user_profile_id');
    }

    public function down() {
        $this->dropTable('variable_details');
    }

}
