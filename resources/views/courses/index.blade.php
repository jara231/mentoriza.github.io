<x-app-layout>
    <section class="bg-cover"  style="background-image: url({{asset('img/cursos/medicina.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-black font-fold text-4xl">MENTORIZA</h1>
                <p class="text-black text-lg mt-2 mb-4">Somos una agencia especializada en capacitaciones empresariales y recursos humanos</p>

                @livewire('search')
                
            </div>

        </div>
    </section>

    @livewire('courses-index')
</x-app-layout>