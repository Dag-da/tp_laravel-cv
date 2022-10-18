<section class="py-20 max-w-6xl mx-auto">
    <h2 class="text-white text-6xl font-medium">Ajouter une <span class="text-secondary">Video</span></h2>
    <form action="{{ route('video.store') }}" method=POST enctype="multipart/form-data" class="mt-3">
        @csrf
        <div>
            {{-- title --}}
            <input type="text" class="block w-full py-4 px-5  rounded-xl border border-gray-500" name="title" placeholder="Exemple : Titanic, Parasite..." value={{ old('title') }}>
            <x-my.msg-error input='title' />
            
            {{-- nationality --}}
            <input type="text" class="block w-full py-4 px-5  rounded-xl border border-gray-500 mt-6" name="nationality" placeholder="Exemple : français, belge, congolais..." value={{ old('nationality') }}>
            <x-my.msg-error input='nationality' />
            
            {{-- year --}}
            <input type="number" name='year_created' class="mt-6 py-4 px-3  rounded-xl border border-gray-500" min="1900" max="2099" step="1" placeholder="2007" value={{ old('year_created') }} />
            <x-my.msg-error input='year_created' />
            
            {{-- content --}}
            <textarea name="content" cols="30" rows="10" class="mt-5 block w-full py-4 px-5 rounded-xl border border-gray-500">{{ old('content') }}</textarea>
            <x-my.msg-error input='content' />
            
            {{-- image --}}
            <div class="mt-6">
                <label for="url_img" class="text-white">Choisir une image :</label>
                <input type="file" name="url_img" id="" class="block text-white">
                <x-my.msg-error input='url_img' />      
            </div>   
            
            {{-- btn submit --}}
            <button class="text-white mt-6 py-4 px-10  rounded-xl border border-gray-500 hover:bg-gray-100 hover:text-primary hover:font-semibold" type="submit">Envoyer</button>
        </div>
    </form>
</section>