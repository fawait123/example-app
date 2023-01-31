@extends('layouts.app')
@section('content')
    {{-- <livewire:user.form /> --}}
    {{-- @dd($member) --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ isset($id) ? route('member.update', $id) : route('member.store') }}" method="post">
                        @csrf
                        @if (isset($id))
                            @method('put')
                        @endif
                        <div class="form-group">
                            <label for="category">Nama</label>
                            <input type="text" name="name" value="{{ isset($id) ? $member->name : '' }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="telp">telp</label>
                            <input type="text" name="telp" value="{{ isset($id) ? $member->telp : '' }}"
                                class="form-control @error('telp') is-invalid @enderror">
                            @error('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" value="{{ isset($id) ? $member->gender : '' }}"
                                class="form-control @error('gender') is-invalid @enderror">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{ isset($id) ? $member->user->email : '' }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="role">Role</label>
                            <select name="role" value="{{ isset($id) ? $member->role : '' }}"
                                class="form-control @error('role') is-invalid @enderror">
                                <option value="admin">Admin</option>
                                <option value="member">Member</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="password">Password</label>
                            <p class="text-warning"><b>Perhatian!! </b>Kosongkan Jika <b> password</b> Tidak akan dirubah
                            </p>
                            <input type="text" name="password" value=""
                                class="form-control @error('password') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="password_confirmation">Confirm Password</label>
                            <input type="text" name="password_confirmation" value=""
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="foto">Photo</label>
                            <input type="text" name="foto" value="{{ isset($id) ? $member->foto : '' }}"
                                class="form-control @error('gender') is-invalid @enderror">
                            @error('photo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ isset($id) ? 'Update' : 'Create' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
