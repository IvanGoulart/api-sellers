<?php namespace App\Repositories;

interface RepositorySaleInterface
{
    public function all();

    public function create(array $data);

}
