<div class="form-group">
    <label for="thumbnail">Thumbnail</label>
    <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
    @error('thumbnail')
    <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="developer">Developer</label>
    <select type="text" name="developer" id="developer" class="form-control select2">
        @foreach ($developer as $data)
        <option {{ $game->developer()->find($data->id) ? 'selected' : '' }} value="{{ $data->id }}">
            {{ $data->name }}</option>
        @endforeach
    </select>
    @error('developer')
    <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $game->name }}">
    @error('name')
    <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="consoles">Console</label>
    <select type="text" name="consoles[]" id="consoles" class="form-control select2" multiple>
        @foreach ($consoles as $data)
        <option {{ $game->consoles()->find($data->id) ? 'selected' : '' }} value="{{ $data->id }}">
            {{ $data->name }}</option>
        @endforeach
    </select>
    @error('consoles')
    <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="genres">Genre</label>
    <select type="text" name="genres[]" id="genres" class="form-control select2" multiple>
        @foreach ($genres as $data)
        <option {{ $game->genres()->find($data->id) ? 'selected' : '' }} value="{{ $data->id }}">
            {{ $data->name }}</option>
        @endforeach
    </select>
    @error('genres')
    <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $button }}</button>