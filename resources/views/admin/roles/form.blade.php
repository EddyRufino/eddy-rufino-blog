{{ csrf_field() }}
<div class="form-group">
  <label for="name">identificador:</label>

  @if ($role->exists)
    <input value="{{ $role->name }}" type="text" class="form-control" disabled>
  @else
    <input name="name" value="{{ old('name', $role->name ) }}" type="text" class="form-control">
  @endif

</div>

<div class="form-group">
    <label for="display_name">Nombre:</label>
    <input name="display_name"
            value="{{ old('display_name', $role->display_name) }}"
            type="text" class="form-control">
</div>

{{-- <div class="form-group">
  <label for="email">Guard:</label>

  <select name="guard_name" id="" class="form-control">
    @foreach (config('auth.guards') as $guardName => $guard)
        <option {{ old('guard_name', $role->guard_name) === $guardName ? 'selected' : '' }}
          value="{{ $guardName }}">{{ $guardName }}
        </option>
    @endforeach
  </select>
</div> --}}

<div class="form-group col-md-6">
    <label>Permisos</label>
  @include('admin.permissions.checkboxes', ['model' => $role])
</div>
