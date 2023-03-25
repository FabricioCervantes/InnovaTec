<div>
    <x-dialog-modal maxWidth="2xl" wire:model="modal" class="">
        <x-slot name="title">Información del proyecto</x-slot>
        <x-slot name="content">
            <div class="flex gap-2 sm:gap-10 sm:justify-between">
                <div>
                    <div class="mb-4">
                        <h1 class="text-xl">Nombre del proyecto </h1>
                        <p class="text-lg whitespace-normal text-justify capitalize-first">{{ strip_tags($NombreCorto) }}
                        </p>
                    </div>
                    <div class="mb-4">
                        <h1 class="text-xl">Nombre de la escuela </h1>
                        <p class="text-lg whitespace-normal text-justify capitalize-first">{{ strip_tags($Nombre) }}</p>
                    </div>
                    {{-- <div class="mb-4">
                        <h1 class="text-xl">Asesor </h1>
                        <p class="text-lg whitespace-normal text-justify capitalize-first">{{ strip_tags($asesor) }}</p>
                    </div> --}}

                </div>
                <div>

                    <div class="mb-4">
                        <h1 class="text-lg">Calificación </h1>
                        <p class="text-xl whitespace-normal text-justify capitalize-first">

                            {{ strip_tags($Calificacion) }}</p>
                    </div>
                    <div class="mb-4">
                        <h1 class="text-xl">Integrantes: </h1>
                        @foreach ($Usuario as $item)
                            <p class="text-xs whitespace-normal text-justify capitalize-first">{{ $item }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h1 class="text-2xl">Observaciones</h1>
                <p class="text-sm whitespace-normal text-justify capitalize-first">{{ strip_tags($comentario) }}
                </p>
            </div>
            <div class="mb-4">
                <h1 class="text-2xl">Descripción de la problemática </h1>
                <div class="text-sm whitespace-normal text-justify capitalize-first ">
                    {{ strip_tags($DescripciónProblematica) }}</div>
            </div>
            <div class="mb-4">
                <h1 class="text-2xl">Objetivo </h1>
                <p class="text-sm whitespace-normal text-justify capitalize-first">{{ strip_tags($Objetivo) }}</p>
            </div>
            <div class="mb-4 test">
                <h1 class="text-2xl">Resultados a alcanzar </h1>
                <p class="text-sm whitespace-normal text-justify capitalize-first">{{ strip_tags($ResultadosAlcanzar) }}
                </p>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-danger-button wire:click="cerrarModal">Cerrar</x-danger-button>
        </x-slot>
    </x-dialog-modal>

</div>
<script></script>
