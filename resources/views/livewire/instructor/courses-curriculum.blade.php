<div>
    <x-slot name="course">
        {{$course->slug}}
    </x-slot>

    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>

    <hr class="mt-2 mb-6">

    {{$section}}

    @foreach ($course->sections as $item)

     <article class="card mb-6">
        <div class="card-body bg-gray-100">

            @if ($section->id == $item->id)

               <form wire:submit.prevent="update">
                   <x-input wire:model.live="section.name" class="form-input w-full" placeholder="Ingrese el nombre de la sección" />

                   @error('section.name')
                       <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
               </form>

            @else
                
           
                <header class="flex justify-between items-center">
                    <h1 class="cursor-pointer"><strong>Seccion:</strong> {{$item->name}}</h1>

                    <div>
                        <i class="fas fa-edit cursor-pointer text-blue-500" wire:click="edit({{$item}})"></i>
                        <i class="fas fa-eraser cursor-pointer text-red-500" wire:click="destroy({{$item}})" ></i>
                    </div>
                </header>

                <div>
                    @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                </div>

            @endif

        </div>
     </article>
        
    @endforeach

    <div x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
           <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
           Agregar nueva seccion
        </a>

        <article class="card" x-show="open">
            <div class="card-body bg-gray-100">
                <h1 class="text-xl font-bold mb-4">Agregar nueva seccion</h1>

                <div class="mb-4">
                    <input wire:model="name" class="form-input w-full" placeholder="Escriba el nombre de la seccion">
                    @error('name')
                         <span class="text-es text-red-500">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                    <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
                </div>
            </div>
        </article>
    </div>
   
</div>
