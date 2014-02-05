<?php

class CachingReviewRepository implements ReviewRepositoryInterface
{
    public function all()
    {
        return Review::all();
    }

    public function find($id)
    {
        return Review::find($id);
    }

    public function create($input)
    {
        return Review::create($input);
    }
}