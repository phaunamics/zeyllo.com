<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('posts.store') }}" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="block w-full mt-1"
                                :value="old('title')" autofocus autocomplete="title" />
                            {{-- :value="old('title', $user->title)" autofocus autocomplete="title" /> --}}
                            {{-- autofocus autocomplete="title" /> --}}
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <x-quill-editor label="Body" name="body" value="" endpoint="{{ route('upload') }}"
                            placeholder="Content here..." />

                        <div>
                            <div class="relative flex items-start mb-5">
                                <div class="flex items-center h-5">
                                    <input id="draft" aria-describedby="comments-description" name="status"
                                        type="radio" value="draft"
                                        class="w-4 h-4 text-gray-600 border-gray-300 focus:ring-gray-500"
                                        @checked(old('status')) />
                                    {{-- @checked(old('status', $user->active)) /> --}}
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="draft" class="font-medium text-gray-700 cursor-pointer">Draft</label>
                                </div>
                            </div>

                            <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="publish" aria-describedby="comments-description" name="status"
                                        type="radio" value="published"
                                        class="w-4 h-4 text-gray-600 border-gray-300 focus:ring-gray-500"
                                        @checked(old('status')) />
                                    {{-- @checked(old('status', $user->active)) /> --}}
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="published"
                                        class="font-medium text-gray-700 cursor-pointer">Published</label>
                                </div>
                            </div>

                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>

                        <x-primary-button>Create</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    @endpush

    @push('scripts')
        <script src="https://cdn.quilljs.com/1.3.6/quill.js" defer></script>
        <script src="https://unpkg.com/quill-paste-smart@latest/dist/quill-paste-smart.js" defer></script>
    @endpush
</x-app-layout>
