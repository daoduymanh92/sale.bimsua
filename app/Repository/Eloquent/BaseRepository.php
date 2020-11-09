<?php   

namespace App\Repository\Eloquent;   

use App\Repository\EloquentRepositoryInterface; 
use Illuminate\Database\Eloquent\Model;   

use Carbon\Carbon;

class BaseRepository implements EloquentRepositoryInterface 
{     
    /**      
     * @var Model      
     */     
     protected $model;       

    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }
 
    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $data)
    {
        // $created_at = Carbon::now()->toDateTimeString();
        // $updated_at = Carbon::now()->toDateTimeString();

        // $data['created_at'] = $created_at;
        // $data['updated_at'] = $created_at;
        
        $this->model->create($data);
        return true;
    }
 
    /**
    * @param $id
    * @return Model
    */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function getList($data) {
        return $this->model->orderBy('created_at', 'DESC')->where($data)->get();
    }

    public function update($id, $data) {
        return $this->model
                    ->where('id', $id)
                    ->update($data);
    }

    // create or update
    public function createOrUpdate($phone, $data) {
        return $this->model->updateOrCreate (
                ['phone' => $phone],
                $data
        );
    }

    public function delete($id) {
        return $this->model->where('id', $id)->delete();
    }
}