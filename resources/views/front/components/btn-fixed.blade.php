@push('css')
    <style>
        .buttom-whatsap {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            text-decoration: none;
            color: #fff;
        }

        .d-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* .tc-white {
                                color: white;
                            } */

        .bg-green-rgba {
            background-color: rgb(36 182 108 / 70%);
            width: 50px;
        }

        .br-50 {
            border-radius: 50%;
        }

        .animate-infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: inherit;
        }

        .p-fixed {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .buttom-whatsap:hover {
            color: #fff
        }
    </style>
@endpush

<div class="bg-green-rgba br-50 bottom-right p-fixed">
    <a target="_blanck" href="https://walink.co/7553a3" class="buttom-whatsap d-flex">
        <i class="fab fa-whatsapp tc-white" style="font-size: 25px"></i>
    </a>
</div>
