<div class="form-group">
    <label >Titolo</label>

    // L 'old è praticamente un ternario in cui ritorna il titolo del post quando è uguale a quello iniziale,altrimenti torna il valore attuale in 'title'

    <input type="text" class="form-control" value="{{ old('title',$post->title) }}" name="title" placeholder="Inserire titolo fumetto" required>
</div>

@error('title')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Categoria</label>
    <input type="text" class="form-control" value="{{ old('author',$post->author) }}" name="author" placeholder="Inserire categoria fumetto" required>
</div>

@error('author')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Descrizione</label>
    <textarea class="form-control" name="description" cols="30" rows="5">{{ old('post_content',$post->post_content) }}</textarea>
</div>

@error('post_content')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Copertina</label>
    <input type="text" class="form-control" value="{{ old('thumb',$post->thumb) }}" name="thumb" placeholder="Inserire Url copertina" required>
</div>

@error('thumb')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label >Data uscita</label>
    <input type="date" class="form-control" value="{{ old('post_date',$post->post_date) }}" name="post_date" placeholder="Inserire data uscita fumetto" required>
</div>

@error('post_date')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<button type="submit" class="btn btn-primary my-3">Modifica Fumetto</button>
