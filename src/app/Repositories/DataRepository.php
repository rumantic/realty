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

    public function join_select () {
        $this->makeModel();
        $joins = $this->model->prepareJoins();

        $query = $this->model->newQuery();
        $selects[] = $this->model->getTable().'.*';

        if ( !empty($joins) ) {
            foreach ($joins as $join) {
                $query->leftJoin($join['table'], $join['first'], $join['operator'], $join['second']);
                $selects[] = $join['select'];
            }

        }
        $query->select($selects);
        return $query->paginate(5);
    }


}
