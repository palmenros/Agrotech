<div class="form-group">
    <label for="{{ $id }}"> {{ $slot }} </label>
    <input class="slider-range" type="range" id="{{ $id }}">
    <div class="slider">
        <div class="slider-fill"></div>
        <div class="slider-handle"></div>
    </div>
</div>