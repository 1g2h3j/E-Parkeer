@extends('layouts.master')

@section('title') @lang('translation.Form_Layouts') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Form Layouts @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Horizontal Form Layout</h4>

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-4">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" name="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputUsername" name="username" value="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" name="password" value="{{ $user->password }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="inputNomor" class="col-sm-2 col-form-label">Nomor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNomor" name="nomor" value="{{ $user->nomor }}">
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <div>
                                    <a href="{{ route('user.index') }}" class="btn btn-outline-danger w-md">Batal</a>
                                    <button type="submit" class="btn btn-outline-primary w-md">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>

@endsection
