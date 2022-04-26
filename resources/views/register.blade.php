@extends("layouts.app")
@section('content')
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container bg-light p-4 rounded" style="max-width: 500px">
            <form action="{{ route('register') }}" method='POST' class="text-center">
                @csrf
                <div class="mb-2">
                    <a class="navbar-brand" href="/">TravelQaz</a>
                </div>
                @error('name')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="text" class="mb-2 form-control @error('name') border border-danger @enderror "
                        placeholder="Атыңыз" name="name" value={{ old('name') }}>
                </div>
                @error('email')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="email" class="mb-2 form-control @error('email') border border-danger @enderror"
                        placeholder="Почта" name="email" value={{ old('email') }}>
                </div>
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="password" class="mb-2 form-control @error('password') border border-danger @enderror"
                        placeholder="Құпиясөз" name="password" value={{ old('password') }}>
                </div>
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="password" class="mb-2 form-control @error('password') border border-danger @enderror"
                        placeholder="Құпиясөзді қайталау" name="password_confirmation"
                        value={{ old('password_confirmation') }}>
                </div>
                @error('secretforregistration')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="secretforregistration"
                        class="mb-2 form-control @error('secretforregistration') border border-danger @enderror"
                        placeholder="Тіркелу үшін құпиясөз" name="secretforregistration"
                        value={{ old('secretforregistration') }}>
                </div>
                <div class="checkbox mb-3 d-flex align-items-center justify-content-center">
                    <input name='remember' type="checkbox" value="remember-me"> Есте сақтау
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Тіркелу</button>
                <div class="my-2">Аккаунт барма? <a class="text-primary" href="{{ route('login') }}">Кіру</a>
                </div>

            </form>
        </div>
    </div>
@endsection
