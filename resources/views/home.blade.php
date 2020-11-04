@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex justify-content-center align-items-center p-3">
        <div class="loginBox">
            <div class="text-center pt-3">
                <h3>Dziękujemy za podtwierdzenie konta</h3>
            </div>
            <form action="{{route('user.destroy', auth()->user()->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <button type="submit" class="delete">
                        Usuń konto
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
