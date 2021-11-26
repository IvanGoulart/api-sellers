<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

class RepositorySeller implements RepositorySellerInterface
{
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
        $salesSeller = $this->model->with('sales')->findOrFail($id);

        return $salesSeller;
    }


}
