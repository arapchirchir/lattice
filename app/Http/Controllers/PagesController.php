<?php

namespace App\Http\Controllers;

use App\Models\Project;

use function Laravel\Prompts\error;

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
        $projects = Project::where(['category' => 'aqua'])->latest()->get();
        $slider_projects = Project::where(['category' => 'projects'])->latest()->limit(4)->inRandomOrder()->get();

        return view('pages.aquaculture', compact('projects', 'slider_projects'));
    }

    public function aquacultureAccademy()
    {
        return view('pages.aquaculture-accademy');
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        $slider_projects = Project::where(['category' => 'projects'])->latest()->limit(5)->inRandomOrder()->get();

        return view('pages.projects', compact('projects', 'slider_projects'));
    }

    public function project($project)
    {
        $project = Project::where('slug', $project)->first();
        if ($project) {
            $related_projects = Project::where('id', '!=', $project->id)->get();

            return view('pages.project', compact('project', 'related_projects'));
        } else {
            error(404);
        }

    }
}
