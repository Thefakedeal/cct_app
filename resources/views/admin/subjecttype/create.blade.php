@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>
                        Add Type
                    </strong> 
                </div>
                <div class="card-body">
                    <form action="{{ route('subjecttypes.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __("Subject Type") }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm float-right">
                            <i class="fas fa-save "></i>
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>
                        Subject Types
                    </strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            {{-- Type -> Subject Type --}}
                            @foreach ($types as $index=>$type)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $type->name }}
                                    </td>
                                    <td>
                                        <form action="{{ route('subjecttypes.destroy',$type->id) }}" method="post"
                                            onsubmit="return confirm('Are You Sure?')"
                                        >
                                            @csrf
                                            @method('delete')
                                            <a class="btn btn-primary btn-sm" href="{{ route('subjecttypes.edit',$type->id) }}" role="button">
                                                <i class="fas fa-pen    "></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection