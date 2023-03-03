<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Indexes extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {

        $this->table('categories')
            ->addIndex(
                [
                    'lft',
                ],
                [
                    'name' => 'lft',
                ]
            )
            ->addIndex(
                [
                    'parent_id',
                ],
                [
                    'name' => 'parent_id',
                ]
            )
            ->update();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {

        $this->table('categories')
            ->removeIndexByName('lft')
            ->removeIndexByName('parent_id')
            ->update();
    }
}
