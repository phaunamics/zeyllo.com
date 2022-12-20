<x-app-layout>
    <x-slot name="header">
        {{ __('My profile') }}
    </x-slot>

    <x-success />

    <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">

            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <x-input-label for="name" :value="__('Name')"/>
                        <x-text-input type="text"
                                 name="name"
                                 id="name"
                                 value="{{ old('name', auth()->user()->name) }}"
                                 required
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')"/>
                        <x-text-input type="email"
                                 name="email"
                                 id="email"
                                 value="{{ old('email', auth()->user()->email) }}"
                                 required
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Password')"/>
                        <x-text-input type="password"
                                 name="password"
                                 id="password"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
                        <x-text-input type="password"
                                 name="password_confirmation"
                                 id="password_confirmation"
                        />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
