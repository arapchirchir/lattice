<div class="row g-3">
    <div class="col-md-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="py-4">
            <form action="#" method="post" wire:submit.prevent='{{ $status == 'edit' ? 'updateProject' : 'store' }}'
                enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="title" class="form-label mb-1">Title</label>
                            <input type="text" class="form-control rounded-1 shadow-none" wire:model='title'
                                placeholder="Enter program title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group" wire:ignore>
                            <label for="description" class="form-label">Description</label>
                            <textarea id="editor" wire:ignore class="form-control rounded-1 shadow-none" placeholder="Enter program description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div style="min-height: 200px;" class="position-relative border rounded-2 mb-2">
                            <div
                                class="position-absolute top-50 start-50 translate-middle d-flex align-items-center justify-content-center flex-column">
                                <h6>Upload project image</h6>
                                <input type="file" wire:model.lazy='image' class="form-control d-none"
                                    id="image">
                                <button class="btn btn-success rounded-1"
                                    onclick="event.preventDefault();document.getElementById('image').click();">{{ $image ? 'Change' : 'Upload' }}</button>
                                <div wire:loading wire:target='image' class="mt-2">
                                    <div class="spinner-border text-primary spinner-grow-sm" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            @if ($image)
                                @if ($status == 'edit' && is_string($image))
                                    <img src="{{ asset('storage/' . $image) }}" alt=""
                                        class="img-fluid rounded-1">
                                @else
                                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid rounded-1"
                                        alt="{{ $title }}">
                                @endif
                            @endif
                        </div>

                        <div class="form-group mb-3">
                            <label for="video" class="form-label">Paste video link/embeded link</label>
                            <input type="text" class="form-control rounded-1 shadow-none" wire:model.lazy='video'
                                placeholder="eg. https://www.youtube.com/watch?v=GgzJ0GEmK24">
                        </div>
                        @if ($video && $video_code)
                            <div class="mt-2 mb-3">
                                <iframe width="100%" height="400" class="rounded-2" src="{{ $video_code }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="post_status">Post status</label>
                                <select class="form-select rounded-1 shadow-none" wire:model.lazy='post_status'>
                                    <option value="">Select post status</option>
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary rounded-1"
                        type="submit">{{ $status == 'edit' ? 'Update' : 'Submit' }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-4">
        @if ($projects && count($projects) > 0)
            <div class="card rounded-1">
                <div class="card-header px-3 py-2">
                    <h5 class="card-title">Projects</h5>
                </div>
                <div class="card-body px-3 py-2">
                    <ul class="list-unstyled">
                        @foreach ($projects as $project)
                            <li class="">
                                <p>{{ $project->title }} </p>
                                <button class="btn btn-info rounded-1"
                                    wire:click.prevent='update("{{ $project->slug }}")'>Edit</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @else
            <div class="alert alert-info">
                No projects available
            </div>
        @endif
    </div>
</div>
<script>
    document.addEventListener('livewire:init', () => {
        // textarea autoresize on input
        const textarea = document.getElementById('editor');
        textarea.addEventListener('input', () => {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
            @this.set('description', textarea.value);
            console.log(textarea.value);
        });

        Livewire.on('refreshProjects', () => {
            // reset texarea
            textarea.style.height = 'auto';
            textarea.value = '';
            // reset image
            document.getElementById('image').value = '';
            // reset video
            document.getElementById('video').value = '';
        });

        Livewire.on('populateTextarea', (data) => {
            textarea.value = data[0];
            textarea.style.height = textarea.scrollHeight + 'px';
        });
    });
</script>
