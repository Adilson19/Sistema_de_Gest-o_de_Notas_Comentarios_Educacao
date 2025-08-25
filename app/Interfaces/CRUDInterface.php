<?php
namespace App\Interfaces;

interface CRUDInterface
{
    public function findAll();

    public function findOrFail(string $id);

    public function create(array $data);

    public function update(array $data);
    
    public function delete(string $id);
}
