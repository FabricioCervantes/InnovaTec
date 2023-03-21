<div>
    <x-slot name="header">
        <div class="flex items-center justify-center">
            <img src="{{ asset('/build/assets/img/logo.png') }}" class="h-16" alt="Logo Tec nacional">

        </div>
    </x-slot>

    <div class="flex flex-col">
        <div class="overflow-x-auto p-5">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-3xl mb-5 text-gray-800 leading-tight">
                    {{ __('Proyectos Innovatec') }}
                </h2>
                <div class="overflow-hidden shadow-xl rounded-lg">
                    <div class="pt-5 px-5 flex gap-10 bg-slate-50">
                        <div class="flex items-center">
                            <span>Mostrar</span>
                            <select wire:model="cant"
                                class="mx-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span>entradas</span>
                        </div>

                        <x-input wire:model="search" placeholder="Buscar por nombre o escuela" class="w-full p-2">
                        </x-input>
                        <x-secondary-button>Buscar</x-secondary-button>
                    </div>

                    @if ($proyectos->count())
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium bg-slate-50">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Nombre</th>
                                    <th scope="col" class="px-6 py-4">Descripción</th>
                                    <th scope="col" class="px-6 py-4">Institución</th>
                                    <th scope="col" class="px-6 py-4">Calificación</th>
                                    <th scope="col" class="px-6 py-4">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proyectos as $item)
                                    <tr class="border-b bg-white">
                                        <td class="whitespace-nowrap px-10 py-4 text-xl">{{ $item->NombreCorto }}</td>
                                        <td class="px-10 py-4 capitalize-first max-w-xs">
                                            {{ $item->NombreDescriptivo }}
                                        </td>
                                        <td class="whitespace-nowrap px-10 py-4">{{ $item->Nombre }}</td>
                                        <td class="whitespace-nowrap px-10 py-4">{{ $item->Calificacion }}</td>
                                        <td class="px-10 py-4">
                                            <x-secondary-button wire:click="mostrar('{{ $item->Id }}')"
                                                type="button">Ver más
                                            </x-secondary-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="p-5">No existe ningún registro coincidente.</div>
                    @endif
                </div>
            </div>
        </div>
        @if ($modal)
            @include('livewire.mostrar')
        @endif
        @if ($proyectos->hasPages())
            <div class="p-5">
                {{ $proyectos->links() }}
            </div>
        @endif
    </div>


</div>
