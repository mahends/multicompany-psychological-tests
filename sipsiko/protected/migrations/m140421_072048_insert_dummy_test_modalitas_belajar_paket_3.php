<?php

class m140421_072048_insert_dummy_test_modalitas_belajar_paket_3 extends CDbMigration
{
	public function up() {
        $slug = Type::model()->slugify('Modalitas Belajar');
        $typeModel = Type::model()->findBySlug($slug);

        $visualSlug = Variable::model()->slugify('Visual');
        $visualModel = Variable::model()->findBySlug($slug . '-' . $visualSlug);

        $auditorySlug = Variable::model()->slugify('Auditory');
        $auditoryModel = Variable::model()->findBySlug($slug . '-' . $auditorySlug);

        $kinestheticSlug = Variable::model()->slugify('Kinesthetic');
        $kinestheticModel = Variable::model()->findBySlug($slug . '-' . $kinestheticSlug);
        $row = array(
            /**
             * $visualModel->id - Visual
             * $auditoryModel->id - Auditory
             * $kinestheticModel->id - Kinesthetic
             */
            array(
                'slug' => Test::model()->slugify('Modalitas Belajar Paket 3'),
                'name' => 'Modalitas Belajar',
                'description' => 'Tes Modalitas Belajar digunakan untuk menentukan gaya belajar anak pada siswa Sekolah Belajar (SD) atau Sekolah Menengah Pertama (SMP).',
                'is_expert' => true,
                'is_public' => false,
                'show_result' => true,
                'combination_variable' => 1,
                'user_profile_id' => 2,
                'type_id' => $typeModel->id,
                'questions' => array(
                    array(
                        'description' => 'Kamu lebih baik disuruh menggambarkan peta daripada menerangkan arah jalan kepada seseorang',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat/pernah memainkan suatu alat musik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat menghubungkan musik dengan perasaanmu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu bisa menjumlah atau mengalikan dengan cepat diluar kepala',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang bekerja dengan komputer atau kalkulator',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Belajar langkah baru dalam suatu tarian/gerakan dansa, mudah buat kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk mengungkapkan pendapat kamu dalam suatu debat',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu senang mengikuti ceramah atau seminar',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Dimanapun kamu berada, kamu tahu arah mata angin',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Hidupmu rasanya hampa tanpa musik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu selalu mengerti instruksi-instruksi dalam buku manual suatu barang',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Puzzle dan Games sangat kamu sukai',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk belajar mengendarai motor/mobil',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu merasa terpancing saat mendengar ada orang yang berbicara tapi pembicaraannya terdengar tidak logis',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Koordinasi tubuh dan keseimbangan kamu cukup baik',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu merasa lebih cepat dari orang lain saat melihat pola atau hubungan antara suatu angka',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu menyukai kegiatan membuat model atau membuat patung',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Mudah bagi kamu untuk menangkap inti suatu pembicaraan/kalimat',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu dapat dengan mudah membayangkan suatu objek dalam berbagai posisi',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Seringkali kamu menjadikan suatu lagu sebagai "soundtrack" suatu kejadian dalam hidup kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu suka bekerja dengan angka-angka dan bentuk',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Menyenangkan buat kamu untuk memperhatikan bentuk-bentuk gedung/rumah',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $visualModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $visualModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Diwaktu kamu sendiri atau di kamar mandi, kamu senang bersenandung atau bersiul',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup baik di salah satu cabang olahraga',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu berminat untuk belajar struktur bahasa',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $auditoryModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $auditoryModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Biasanya kamu cukup sadar terhadap ekspresi wajah kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perubahan ekspresi tubuh orang lain',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perasaan-perasaan kamu dan mudah untuk membedakannya',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka terhadap perasaan orang lain',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                    array(
                        'description' => 'Kamu cukup peka tentang pandangan orang terhadap kamu',
                        'answers' => array(
                            array(
                                'description' => 'Benar',
                                'value' => 1,
                                'variable_id' => $kinestheticModel->id
                            ),
                            array(
                                'description' => 'Salah',
                                'value' => 0,
                                'variable_id' => $kinestheticModel->id
                            ),
                        )
                    ),
                )
            )
        );
        
        $testModel = Test::model()->find(array('order' => 'id DESC'));
        if (empty($testModel))
            $startTest = 1;
        else
            $startTest = $testModel->id + 1;

        $qustionModel = Test::model()->find(array('order' => 'id DESC'));
        if (empty($questionModel))
            $startQuestion = 1;
        else
            $startQuestion = $questionModel->id + 1;

        foreach ($row as $column) {
            $column['status'] = Status::ACTIVE;
            $column['created_at'] = date('Y-m-d H:i:s');
            $column['updated_at'] = date('Y-m-d H:i:s');

            $questions = $column['questions'];
            unset($column['questions']);
            $this->insert('tests', $column);
            foreach ($questions as $id => $question) {
                $question['test_id'] = $startTest;
                $question['status'] = Status::ACTIVE;
                $question['created_at'] = date('Y-m-d H:i:s');
                $question['updated_at'] = date('Y-m-d H:i:s');

                $answers = $question['answers'];
                unset($question['answers']);
                $this->insert('questions', $question);
                foreach ($answers as $answer) {
                    $answer['question_id'] = $id + $startQuestion;
                    $answer['status'] = Status::ACTIVE;
                    $answer['created_at'] = date('Y-m-d H:i:s');
                    $answer['updated_at'] = date('Y-m-d H:i:s');
                    $this->insert('answers', $answer);
                }
            }
        }
    }

    public function down() {
        $testSlug = Test::model()->slugify('Modalitas Belajar Paket 3');
        $testModel = Test::model()->findBySlug($testSlug);
        Test::model()->deleteWithQuestionAndAnswer($testModel->id);
    }
}