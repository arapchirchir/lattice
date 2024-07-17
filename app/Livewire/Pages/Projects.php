<?php

namespace App\Livewire\Pages;

use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Projects extends Component
{
    use WithFileUploads;

    public $title;

    public $description;

    public $image;

    public $video;

    public $video_code;

    public $perPage = 15;

    public $status = 'projects';

    public $post_status = '';

    public $project_id;

    public function render()
    {
        $projects = Project::latest()->paginate($this->perPage);

        return view('livewire.pages.projects', compact('projects'));
    }

    public function loadMore()
    {
        $this->perPage += 15;
    }

    public function updatedVideo()
    {
        if (strpos($this->video, 'watch?v=') !== false) {
            $video_code = substr($this->video, strpos($this->video, 'watch?v=') + 8);
            $this->video_code = 'https://www.youtube.com/embed/'.$video_code;
        } elseif (strpos($this->video, 'src="') !== false) {
            $video_code = substr($this->video, strpos($this->video, 'src="') + 5);
            $video_code = substr($video_code, 0, strpos($video_code, '"'));
            $this->video_code = $video_code;
        }

    }

    public function update($project)
    {
        // toggle status between projects and edit
        $this->status = 'edit';
        $project_info = Project::where('slug', $project)->first();
        if ($project_info) {
            $this->project_id = $project_info->id;
            $this->title = $project_info->title;
            $this->description = $project_info->description;
            $this->video = $project_info->video;
            $this->video_code = $project_info->video;
            $this->image = $project_info->image;
            $this->post_status = $project_info->status;
            $this->dispatch('populateTextarea', $project_info->description);
        }
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'video' => 'nullable|string',
            'post_status' => 'required',
        ], [
            'title.required' => 'The title is required.',
            'description.required' => 'The description is required.',
            'image.required' => 'The image is required.',
            'image.image' => 'The image must be an image.',
            'video.string' => 'The video must be a string.',
            'post_status.required' => 'The post status is required.',
        ]);

        $image = $this->image->store('images', 'public');

        $project = new Project();
        $project->title = $this->title;
        $project->description = $this->description;
        $project->image = $image;
        $project->slug = Str::slug($this->title);
        $project->video = $this->video_code;
        $project->status = $this->post_status;
        $project->save();

        session()->flash('message', 'Project created successfully.');

        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->video = '';
        $this->status = 'projects';
        $this->post_status = '';

        $this->dispatch('refreshProjects');
    }

    public function updateProject()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|'.(is_string($this->image) ? '' : 'image'),
            'video' => 'nullable|string',
            'post_status' => 'required',
        ], [
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
            'image.image' => 'The image must be an image.',
            'video.string' => 'The video must be a string.',
            'post_status.required' => 'The post status field is required.',
        ]);

        $project_info = Project::where('id', $this->project_id)->first();

        if ($this->image && ! is_string($this->image)) {
            $image = $this->image->store('images', 'public');
        } else {
            $image = $this->image;
        }

        $project_info->title = $this->title;
        $project_info->description = $this->description;
        $project_info->image = $image;
        $project_info->slug = Str::slug($this->title);
        $project_info->video = $this->video_code;
        $project_info->status = $this->post_status;
        $project_info->save();

        session()->flash('message', 'Project updated successfully.');

        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->video = '';
        $this->status = 'projects';
        $this->post_status = '';

        $this->dispatch('refreshProjects');
    }
}