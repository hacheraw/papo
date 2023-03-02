<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriesFixture
 */
class CategoriesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'parent_id' => 1,
                'lft' => 1,
                'rght' => 1,
                'position' => 1,
                'created' => '2023-03-02 21:48:30',
                'modified' => '2023-03-02 21:48:30',
            ],
        ];
        parent::init();
    }
}
