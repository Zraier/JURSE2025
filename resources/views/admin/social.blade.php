<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Social Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 65%">
                <div class="p-6 text-gray-900">
                   Here you can add Events name and link to your JURSE 2025 Website to display them in Social Event page
                    <br>
                    @if(session('success'))
                        <div style="color: green">{{ session('success') }}</div>
                    @endif
                    <br>
                    <form action="{{ route('Sociale.add') }}" method="post">
                        @csrf
                        <div>
                            <label>Event Name</label>
                            <input type="text" class="block mt-1 w-full" name="name_event" placeholder="Event Name" required autofocus>  
                        </div>

                        <div>
                            <label>Event Link</label>
                            <input type="text" class="block mt-1 w-full" name="name_link" placeholder="Event Link" required autofocus>  
                        </div>

                        <div class="flex items-center justify-end mt-4">
                           
                
                            <x-primary-button class="ms-3">
                                {{ __('Add Link') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>