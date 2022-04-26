@extends("layouts.admin")
@section('content')
    <div class="container">
        <table class="table rounded">
            <thead>
                <tr>
                    <th scope="col">Аты</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Номер</th>
                    <th scope="col">Сұрақ</th>
                    <th scope="col">Қызығушылық</th>
                    <th scope="col" style="text-align: end">Өзгерту</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($connections as $connect)
                    <tr>
                        <td style="vertical-align: middle" scope="row" class="text-ellipsis">{{ $connect->name }}
                        </td>
                        <td style="vertical-align: middle" scope="row" style="width: 250px">
                            {{ $connect->email }}</td>
                        <td style="vertical-align: middle" scope="row" style="width: 250px">
                            {{ $connect->number ? $connect->number : '-' }}</td>
                        <td style="vertical-align: middle" scope="row" style="width: 250px">
                            {{ $connect->question ? $connect->question : '-' }}</td>
                        <td style="vertical-align: middle" scope="row" style="width: 250px">
                            {{ $connect->interest ? $connect->interest : '-' }}</td>
                        <td style="vertical-align: middle" scope="row" style="width: max-content">
                            <div class="d-flex justify-content-end">
                                <form action="{{ route('delete_connect', $connect) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">Жою</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $connections->links() !!}
        </div>
    </div>
@endsection
