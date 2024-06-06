<x-main>
    
    <form action="{{route('posts.store')}}">
        
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="title" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{old('title')}}">
        </div>
        
        @error('title')
        
        {{$message}}
        
        @enderror
        
        <div class="mb-3">
            <label for="post" class="form-label">Post</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <select id="tag_name">
                @foreach ($tags as $tag)
                    <option> {{$post->tag_name}} </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    
</x-main>