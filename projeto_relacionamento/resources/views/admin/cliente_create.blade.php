<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('cliente.store') }}" class="mt-6 space-y-6">
                        @csrf

                        <div><!-- name é igual a chave extrangeira que está na tabela CLientes -->
                            <!-- <x-input-label id="user_id" name="user_id" for="user_id" class="mt-1 block w-full" value="{{ Auth::user()->id }}" /> -->
                            <x-text-input id="user_id" name="user_id" type="text" class="mt-1 block w-full" value="{{ Auth::user()->id }}" required autofocus/>
                        </div>

                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" autocomplete="new-password" required autofocus/>
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('E-Mail')" />
                            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" required />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Cadastrar') }}</x-primary-button>

                        </div>
                        <div class="mb-3">
                            @if (session('msg'))
                                <p>{{ session('msg')}}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>