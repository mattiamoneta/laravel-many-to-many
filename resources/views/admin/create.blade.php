@extends('layouts.admin')

@section('page-name')
    Add New Project
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.projects.store') }}">

                        @csrf

                        <div class="mb-3">
                            <label for="nameField" class="form-label">Project Name</label>
                            <input type="text"
                                class="form-control @error('nameField')
                            is-invalid
                        @enderror"
                                id="nameField" name="nameField" value="{{ old('nameField') }}">
                            @error('nameField')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descriptionField" class="form-label">Description</label>
                            <input type="text"
                                class="form-control @error('descriptionField')
                            is-invalid
                        @enderror"
                                id="descriptionField" name="descriptionField" value="{{ old('descriptionField') }}">
                            @error('descriptionField')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="thumbField" class="form-label">Thumbnail URL</label>
                            <input type="text"
                                class="form-control @error('thumbField')
                            is-invalid
                        @enderror"
                                id="thumbField" name="thumbField" value="{{ old('thumbField') }}">
                            @error('thumbField')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="typeField" class="form-label">Project Type</label>
                            <select
                                class="form-select @error('typeField')
                            is-invalid
                        @enderror"
                                name="typeField" aria-label="Default select example">
                                @foreach ($types as $type)
                                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('typeField')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            @foreach ($technologies as $techItem)
                                <input type="checkbox" id="tech_{{ $techItem->id }}" name="technologies[]"
                                    value="{{ $techItem->id }}">
                                <label for="tech_{{ $techItem->id }}">{{ $techItem->name }}</label><br>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
