<form action="{{ route('admin.jobs.destroy', $job) }}" method="POST"
    onsubmit="return confirm('confermi di voler eliminare {{ $job->title }} ?')">
    @csrf
    @method('DELETE')
    <input type="submit" value="Elimina" class="btn btn-outline-danger">
</form>
