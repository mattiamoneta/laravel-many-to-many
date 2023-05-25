@extends('layouts.admin')

@section('page-name')
    Add New Project
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card bg-light">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.projects.store') }}">

                        @csrf

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="nameField" class="form-label fw-bold small">Project Name</label>
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
                                <div class="col">
                                    <label for="descriptionField" class="form-label fw-bold small">Description</label>
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
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label for="thumbField" class="form-label fw-bold small">Thumbnail URL</label>
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

                            <div class="col">
                                <label for="typeField" class="form-label fw-bold small">Project Type</label>
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
                        </div>



                        <div class="mb-3">
                            <div class="row">
                                <h6 class="mb-3 fw-bold small">Technologies Tags</h6>
                                <div class="col-3">
                                    <div class="row">
                                        @foreach ($technologies as $techItem)
                                            <div class="col-6">
                                                <input type="checkbox" id="tech_{{ $techItem->id }}" name="technologies[]"
                                                    value="{{ $techItem->id }}">
                                                <label for="tech_{{ $techItem->id }}">{{ $techItem->name }}</label><br>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit"
                                class="btn btn-dark rounded-5 text-uppercase small-btn fw-bold px-5 py-2">
                                <i class="fa-solid fa-plus me-2"></i>
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
