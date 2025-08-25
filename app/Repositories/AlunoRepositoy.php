<?php
namespace App\Repositories;

use App\Interfaces\CRUDInterface;
use App\Models\Aluno;

class AlunoRepository implements CRUDInterface
{
    protected $model;

    public function __construct(Aluno $estudante)
    {
        $this->model = $aluno;
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public function findOrFail(string $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data)
    {
        $this->model->findOrFail($id)->update($id);
    }

    public function delete(string $id)
    {
        $this->model->findOrFail($id)->delete();
    }
}