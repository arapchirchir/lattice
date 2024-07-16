<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contacts');
    }

    public function advisory()
    {
        return view('pages.advisory');
    }

    public function training()
    {
        return view('pages.training');
    }

    public function consulting()
    {
        return view('pages.consulting');
    }

    public function aquaculture()
    {
        return view('pages.aquaculture');
    }

    public function aquacultureAccademy()
    {
        return view('pages.aquaculture-accademy');
    }

    public function projects()
    {
        return view('pages.projects');
    }
}
