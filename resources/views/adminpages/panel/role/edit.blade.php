@extends('adminpages.layouts.app')

@section('destinations')

<div class="pagetitle">
    <h1>Edit Role</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-9">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Role</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('ur', ['id' => $getRecord->id]) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ $getRecord->name }}" name="name" required
                                    class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label style="display: block; margin-bottom: 20px" for="inputText"
                                class="col-sm-2 col-form-label"><b>Permission</b></label>
                            @foreach ($getPermission as $value)

                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-md-4">
                                    {{ $value['name'] }}
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        @foreach ($value['group'] as $group)
                                        @php
                                            $checked = '';
                                        @endphp
                                        @foreach ($getRolePermission as $role)
                                            @if ($role->permission_id == $group['id'])
                                                @php
                                                    $checked = 'checked';
                                                @endphp
                                            @endif
                                        @endforeach
                                        <div class="col-md-3">
                                            <label for=""><input type="checkbox" {{ $checked }}
                                                    value="{{ $group['id'] }}" name="permission_id[]">{{ $group['name'] }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @endforeach
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>


    </div>
</section>


@endsection
