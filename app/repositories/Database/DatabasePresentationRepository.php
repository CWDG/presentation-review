<?php

class DatabasePresentationRepository implements PresentationRepositoryInterface
{
    public function all()
    {
        return Presentation::all();
    }

    public function find($id)
    {
        return Presentation::find($id);
    }

    public function create($input)
    {
        return Presentation::create($input);
    }
}