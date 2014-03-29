<?php

class m140328_214408_insert_dummy_data_users extends CDbMigration {

    public function up() {
        $row = array();
        $user = array('admin', 'mahendri', 'expert', 'company', 'member', 'risky', 'hendra', 'winata', 'ade', 'naufal', 'dio', 'rio', 'rudi', 'atang', 'dian', 'adrian', 'adi', 'alfian', 'nicky', 'ricky', 'reza', 'aldi', 'eka', 'hermawan', 'nana', 'doris', 'bagus', 'agus', 'ifan', 'adam', 'adit', 'agung', 'akbar');
        foreach ($user as $username) {
            $row[] = array(
                'username' => User::model()->slugify($username),
                'email' => $username . '@sipsiko.com',
                'password' => User::model()->hashPassword($username),
                'status' => Status::ACTIVE,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            );
        }
        foreach ($row as $column) {
            $this->insert('users', $column);
        }
    }

    public function down() {
        
    }

}
