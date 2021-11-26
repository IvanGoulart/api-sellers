<?php
namespace App\Repositories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Model;

class RepositorySale implements RepositorySaleInterface
{
    // propriedade model classe
    protected $model;

    // Constutor para vincular o modelo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {

        return $this->model->all();
    }

    public function create(array $data)
    {

        return $this->model->create($data);
    }

/*    public function update(array $data, $id)
    {
        $record = $this->find($id);
        return $record->update($data);
    }*/

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function show($id)
    {

        return $this->model->with('seller')->find($id);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

}
