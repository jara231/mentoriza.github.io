<div>
    @foreach ($section->lessons as $item)

        <article class="card mt-4">
            <div class="card-body">

                @if ($lesson->id == $item->id)
                    <div>
                        <div class="flex items-center">
                             <label class="w-32">Nombre:</label>
                             <x-input type="text" wire:model="lesson.name" class="form-input w-full"/>
                        </div>

                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror

                        <div class="flex items-center mt-4">
                            
                            <label class="w-32">Platform: </label>

                            <select wire:model="lesson.platform_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach ($platforms as $platform)
                                    <option value="{{$platform->id}}">{{$platform->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center mt-4">
                            <label class="w-32">URL:</label>
                            <x-input wire:model="lesson.url" class="form-input w-full"/>
                       </div>

                       @error('lesson.url')
                           <span class="text-xs text-red-500">{{$message}}</span>
                       @enderror

                       <div class="mt-4 flex justify-end">
                            <button class="btn btn-danger">Cancelar</button>
                            <button class="btn btn-primary ml-2" wire:click="update">Actualizar</button>
                       </div>
                    </div>
                @else
                    <header>
                        <h1><i class="far fa-play-circle text-blue-500 mr-1"></i> Lección: {{$item->name}}</h1>
                    </header>

                    <div>

                        <hr class="my-2">

                        <p class="text-sm">Plataforma: {{$item->platform->name}}</p>
                        <p class="text-sm">Enlace: <a class="text-blue-600" href="{{$item->url}}" target="_blank">{{$item->url}}</a></p>

                        <div class="mt-2">
                            <button class="btn btn-primary text-sm" wire:click="edit({{$item}})">Editar</button>
                            <button class="btn btn-danger text-sm">Eliminar</button>
                        </div>
                    </div>
                @endif
            </div>
        </article>
      
    @endforeach
</div>
