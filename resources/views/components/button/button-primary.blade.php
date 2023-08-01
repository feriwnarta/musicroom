<button type="button" class="btn-primary {{ $class }}" {{ $id == '' ?  '' : 'id=' . $id }}>
    {{ $slot }}
</button>
