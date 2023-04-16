<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(CategoriesCRUDDataTypeAdded::class);
        $this->seed(CategoriesCRUDDataRowAdded::class);
        $this->seed(PublishersCRUDDataTypeAdded::class);
        $this->seed(PublishersCRUDDataRowAdded::class);
        $this->seed(BookhelvesCRUDDataTypeAdded::class);
        $this->seed(BookhelvesCRUDDataRowAdded::class);
        $this->seed(BooksCRUDDataTypeAdded::class);
        $this->seed(BooksCRUDDataRowAdded::class);
        $this->seed(TransactionsCRUDDataTypeAdded::class);
        $this->seed(TransactionsCRUDDataRowAdded::class);
    }
}
