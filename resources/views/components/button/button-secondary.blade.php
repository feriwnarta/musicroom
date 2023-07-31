<button type="button" class="btn-secondary {{ $class }}" {{ $id == '' ?  '' : 'id=' . $id }}>
    {{ $slot }}
</button>
