@push('css')
    <style>
        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            z-index: 10000;
            background: #fff;
        }

        .loader-logo {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            box-shadow: 0px 7px 10px rgba(115, 115, 115, 0.332);
        }
    </style>
@endpush

<div class="loader" id="preloader_site">
    <img src="{{ asset('images/logo/fumimark_code.png') }}" alt="" class="loader-logo">
</div>

@push('js')
    <script>
        const preloader_site = document.getElementById("preloader_site");

        window.addEventListener("load", e => {
            preloader_site.classList.add("d-none");
        })
    </script>
@endpush
