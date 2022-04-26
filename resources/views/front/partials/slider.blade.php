<div class="slider-container">
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <div class="glide__slides">
        <img class="glide__slide" src="{{ asset('image/warehouse_01.jpg') }}">
        <img class="glide__slide" src="{{ asset('image/warehouse_02.jpg') }}">
        <img class="glide__slide" src="{{ asset('image/warehouse_03.jpg') }}">
        <img class="glide__slide" src="{{ asset('image/warehouse_04.jpg') }}">
        <img class="glide__slide" src="{{ asset('image/warehouse_05.jpg') }}">
        <img class="glide__slide" src="{{ asset('image/warehouse_06.jpg') }}">
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
        <button class="glide__bullet" data-glide-dir="=4"></button>
        <button class="glide__bullet" data-glide-dir="=5"></button>
      </div>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
        <img class="transform rotate-180 opacity-30" src="{{ asset('image/icon/Ic_chevron_right_36px.png') }}">
      </button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
        <img src="{{ asset('image/icon/Ic_chevron_right_36px.png') }}">
      </button>
    </div>
  </div>
</div>

@push('scripts')
  <script src="{{ mix('js/slider.js') }}" defer></script>
@endpush
