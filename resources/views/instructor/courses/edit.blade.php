<x-instructor-layout>


    <x-slot name="course">
        {{$course->slug}}
    </x-slot>

    <h1 class="text-2xl font-bold">INFORMACION DEL CURSO</h1>
    <hr class="mt-2 mb-6">
                  
    {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}
           
      @include('instructor.courses.partials.form')
           
       <div class="flex justify-end">
            {!! Form::submit('Actualizar informacion', ['class' => 'btn btn-primary cursor-pointer']) !!}
       </div>
           
    {!! Form::close() !!}

    <x-slot name="js">

        <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
        <script>
               //Slug automatico

                document.getElementById("title").addEventListener("keyup", slugChange);

                function slugChange(){

                title = document.getElementById("title").value;
                document.getElementById("slug").value = slug(title);
                
                }

                function slug (str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
                }

                //CKEDITOR

                ClassicEditor
                .create( document.querySelector( '#description' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link',  'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
                } )
                .catch( error => {
                    console.log( error );
                } );

                //Cambiar imagen
                document.getElementById("file").addEventListener('change', cambiarImagen);

                function cambiarImagen(event){
                    var file = event.target.files[0];

                    var reader = new FileReader();
                    reader.onload = (event) => {
                        document.getElementById("picture").setAttribute('src', event.target.result);
                    };

                    reader.readAsDataURL(file);
                }
        </script>

    </x-slot>

</x-instructor-layout>