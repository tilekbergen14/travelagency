@extends("layouts.admin")
@section('content')
    <div class="container my-4 p-4 rounded" style="background-color: #153e52">
        <form action="{{ route('createplace') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Аты</label>
                <input value="{{ $place ? $place->name : old('name') }}" type="text" name="name" class="form-control">
                @error('name')
                    <div id="emailHelp" class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Толығырақ</label>
                <input value="{{ $place ? $place->description : old('description') }}" type="text" name="description"
                    class="form-control">
                @error('description')
                    <div id="emailHelp" class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Бағасы</label>
                <input value="{{ $place ? $place->price : old('price') }}" type="text" name="price"
                    class="form-control">
                @error('price')
                    <div id="emailHelp" class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            @if ($place && $place->image)
                <input type="hidden" value="{{ $place->image }}" name="existedImage" />
                <img src="{{ $place->image }}" style="max-width: 100%; aspect-ratio: 16 / 9; object-fit: cover"
                    class="uploaded-img mb-4" alt="{{ $place->name }}" />
            @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Сурет</label>
                <input type="file" value="{{ old('image') }}" name="image" class="form-control" />
                @error('image')
                    <div id="emailHelp" class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-2">Қосу</button>
        </form>
    </div>
@endsection
