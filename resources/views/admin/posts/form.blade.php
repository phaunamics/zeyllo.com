<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input id="title" name="title" type="text" class="block w-full mt-1" :value="old('title', $post->title)" autofocus
        autocomplete="title" />
    <x-input-error class="mt-2" :messages="$errors->get('title')" />
</div>

<x-quill-editor label="Body" name="body" :value="old('body', $post->body)" endpoint="{{ route('upload') }}"
    placeholder="Content here..." />

<div>
    <div class="relative flex items-start mb-5">
        <div class="flex items-center h-5">
            <input id="draft" name="status" type="radio" value="draft"
                class="w-4 h-4 text-gray-600 border-gray-300 focus:ring-gray-500"
                {{ old('status', $post->status) == 'draft' ? 'checked' : '' }} />
        </div>
        <div class="ml-3 text-sm">
            <label for="draft" class="font-medium text-gray-700 cursor-pointer">Draft</label>
        </div>
    </div>

    <div class="relative flex items-start">
        <div class="flex items-center h-5">
            <input id="published" name="status" type="radio" value="published"
                class="w-4 h-4 text-gray-600 border-gray-300 focus:ring-gray-500"
                {{ old('status', $post->status) == 'published' ? 'checked' : '' }} />
        </div>
        <div class="ml-3 text-sm">
            <label for="published" class="font-medium text-gray-700 cursor-pointer">Published</label>
        </div>
    </div>

    <x-input-error class="mt-2" :messages="$errors->get('status')" />
</div>

<x-primary-button>{{ $type }}</x-primary-button>

@push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js" defer></script>
    <script src="https://unpkg.com/quill-paste-smart@latest/dist/quill-paste-smart.js" defer></script>
@endpush
