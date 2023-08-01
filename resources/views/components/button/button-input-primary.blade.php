<div class="input-group btn-input-primary {{ $class }}" {{ $id == '' ?  '' : 'id=' . $id }}>
    <input type="text" class="form-control {{ $classInput }}" placeholder="{{ $placeHolder }}">
    <button class="btn-primary" type="button" id="button-addon2">
        {{ $slot }}
    </button>
</div>
