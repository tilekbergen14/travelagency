@extends("layouts.admin")
@section('content')
    <div class="container">
        <table class="table rounded">
            <thead>
                <tr>
                    <th scope="col">Сурет</th>
                    <th scope="col">Аты</th>
                    <th scope="col">Бағасы</th>
                    <th scope="col" style="text-align: end">Өзгерту</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                    <tr>
                        <td scope="row" style="width: 150px">
                            <div class="list-img rounded">
                                <img class="list-img rounded" src="{{ $place->image }}"
                                    style="height: 64px; aspect-ratio: 16 / 9" alt="No Image">
                            </div>
                        </td>
                        <td style="vertical-align: middle" scope="row" class="w-100 text-ellipsis">{{ $place->name }}
                        </td>
                        <td style="vertical-align: middle" scope="row" style="width: 250px">
                            {{ $place->price }}</td>
                        <td style="vertical-align: middle" scope="row" style="width: max-content">
                            <div class="d-flex">
                                <form action="{{ route('place', $place) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Жою</button>
                                </form>
                                <form action="{{ route('createplace') }}" method="get">
                                    <input type="hidden" name='id' value="{{ $place->id }}">
                                    <button type="submit" class="btn btn-warning ml-2">Өзгерту</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $places->links() !!}
        </div>
        <form action="{{ route('createplace') }}">
            <button class="btn btn-primary w-100" style="margin: 12px">Жаңадан қосу</button>
        </form>
    </div>
@endsection
