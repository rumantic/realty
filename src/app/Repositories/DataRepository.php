<?php
namespace Sitebill\Realty\app\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;
use Sitebill\Entity\app\Repositories\EntityRepository;

class DataRepository extends EntityRepository {
    public function model()
    {
        return "Sitebill\Realty\app\Models\Data";
    }
}
