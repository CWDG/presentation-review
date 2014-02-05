<?php

interface ReviewRepositoryInterface
{
    public function all();

    public function find($id);

    public function create($input);

}