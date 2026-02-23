<div class="row">

    <div class="col-md-8">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control"
                value="{{ old('title', $learning_material->title ?? '') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Excerpt</label>
            <textarea name="excerpt" class="form-control" rows="3">
            {{ old('excerpt', $learning_material->excerpt ?? '') }}
            </textarea>
        </div>

        {{-- Content (Quill Editor) --}}
        <div class="mb-4">
            <label class="form-label fw-bold">Content</label>

            <!-- Quill Editor -->
            <div id="quillEditor" style="height: 250px;">
                {!! old('content', $learning_material->content ?? '') !!}
            </div>

            <!-- Hidden input -->
            <input type="hidden" name="content" id="content">

            @error('content') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>
    </div>

    <div class="col-md-4">

        <div class="mb-3">
            <label class="form-label">Material Type</label>
            <select name="material_type" class="form-control">
                <option value="article">Article</option>
                <option value="video">Video</option>
                <option value="pdf">PDF</option>
                <option value="infographic">Infographic</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- None --</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}"
                    @selected(old('category_id', $learning_material->category_id ?? '') == $cat->id)>
                    {{ $cat->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Upload File</label>
            <input type="file" name="file" class="form-control">
        </div>

        <div class="mb-3">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">

            @if(isset($learning_material) && $learning_material->thumbnail)
            <img src="{{ asset('storage/'.$learning_material->thumbnail) }}" width="90" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>

    </div>
</div>
<!-- Include Quill -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    var quill = new Quill('#quillEditor', {
        theme: 'snow',
        placeholder: 'Write your post content here...',
        modules: {
            toolbar: [
                [{
                    header: [1, 2, 3, false]
                }],
                ['bold', 'italic', 'underline'],
                [{
                    list: 'ordered'
                }, {
                    list: 'bullet'
                }],
                ['link', 'image'],
                ['clean']
            ]
        }
    });

    // Sync Quill content to hidden input before submit
    document.querySelector("form").addEventListener("submit", function() {
        document.querySelector("#content").value = quill.root.innerHTML;
    });
</script>