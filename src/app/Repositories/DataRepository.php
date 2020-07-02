<?php
namespace Sitebill\Realty\app\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class DataRepository extends BaseRepository {
    use CacheableRepository;


    public function model()
    {
        return "Sitebill\Realty\app\Models\Data";
    }
}
