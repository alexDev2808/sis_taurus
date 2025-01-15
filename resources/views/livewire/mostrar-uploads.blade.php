<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($uploads as $upload)
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="leading-10">
                <a href="" class="text-xl font-bold">
                    {{ $upload->titulo }}
                </a>
                <p>Ultima actualización: {{ $upload->updated_at }}</p>
            </div>
        </div> 
    @endforeach
</div>