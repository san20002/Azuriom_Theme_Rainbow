@push('footer-scripts')
    <script>
        function addCommandListener(el) {
            let i = 1;
            el.addEventListener('click', function () {
                const element = el.closest('.slider');
                element.parentNode.removeChild(element);
                document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                    let count = i++
                    el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                })
            });
        }

        document.querySelectorAll('.command-remove').forEach(function (el) {
            addCommandListener(el);
        });

        document.getElementById('addCommandButton').addEventListener('click', function () {
            let i = 1;
            let input = `@include('admin.pattern.slider')`;

            const newElement = document.createElement('div');
            newElement.classList.add('slider', 'col-lg-4', 'col-md-6', 'my-3')
            newElement.innerHTML = input
            addCommandListener(newElement.querySelector('.command-remove'));

            document.getElementById('sliders').appendChild(newElement);
            document.getElementById('sliders').querySelectorAll('.slider').forEach(function (el) {
                let count = i++
                el.querySelector('.card-title').innerHTML = 'Slider ' + count;
                el.querySelector('select').setAttribute('data-image-preview-select', 'filePreview-' + count)
                el.querySelector('img').setAttribute('id', 'filePreview-' + count)
                imagePreviewSelect(el.querySelector('select'))
            })

        });
        function configFormSlider(i){
            document.getElementById('sliders').querySelectorAll('.form-row').forEach(function (el) {
                el.querySelectorAll('input').forEach(function (input) {
                    input.name = input.name.replace('{index}', i.toString());
                });
                el.querySelectorAll('select').forEach(function (select) {
                    select.name = select.name.replace('{index}', i.toString());
                });

                i++;
            });
        }
    </script>
@endpush
<div class="card-header">
    <h6 type="button" class="btn btn-link m-0 font-weight-bold text-primary">
        {{ trans('theme::lang.config.slider.name') }}
    </h6>
    <button type="button" id="addCommandButton" class="btn btn-sm btn-success">
        <i class="fas fa-plus"></i> {{ trans('messages.actions.add') }}
    </button>
</div>
<div class="card-body">
    <div id="sliders" class="row">
        @forelse( config('theme.sliders') ?? [] as $slider )

            <div class="slider col-lg-4 col-md-6 my-3">
                @include('admin.pattern.slider')
            </div>
        @empty
            <div class="slider col-lg-4 col-md-6 my-3">
                @include('admin.pattern.slider')
            </div>
        @endforelse
    </div>
</div>
