@extends('layout.template')
@section('content')
<link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link id="pagestyle" href="{{ asset('template/dist/css/argon-dashboard.css?v=2.0.2') }}" rel="stylesheet" />

        <div class="content-wrapper">
            <div class="login-box">
                <div class="card-body">
                    <thead>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo reiciendis perspiciatis maxime delectus
                        exercitationem libero ad, consequuntur iste neque vel soluta quisquam odio, illo eveniet suscipit
                        reprehenderit quaerat! Nulla soluta eum debitis ducimus eligendi sunt cupiditate amet, quos ad saepe,
                        iste mollitia, laboriosam eveniet veritatis. Officia modi similique praesentium velit ducimus inventore
                        asperiores, voluptate rerum sint sequi veritatis repudiandae ex nesciunt doloribus corrupti, error
                        quibusdam. Quos rem alias inventore aliquid voluptatum accusantium eum optio sit quidem ducimus magnam
                        laborum, laboriosam iusto dolor placeat error sint ipsa, quibusdam adipisci recusandae ullam suscipit
                        velit. Voluptate possimus dignissimos facere rem recusandae quisquam harum, iure amet quod! Culpa odit
                        dolor est recusandae aliquam eius delectus nostrum animi sint nam itaque tempora, et ipsum deleniti
                        provident magni exercitationem cumque impedit reprehenderit nemo ducimus facere hic consequuntur ratione.
                        Corrupti pariatur fugit, neque voluptate obcaecati ad quibusdam ea perspiciatis rerum illo veniam impedit
                        debitis laudantium illum necessitatibus adipisci deserunt similique asperiores iusto? Sed vel mollitia
                        dolore vero impedit, dignissimos commodi recusandae esse quae sequi velit facere illum aperiam nostrum
                        soluta aliquid ab odit quasi. Quae odit accusamus cumque, cum quo, numquam doloremque reprehenderit ducimus,
                        magni tenetur sit repudiandae adipisci. Cum natus debitis, deleniti excepturi cupiditate autem laudantium.
                    </thead>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
                integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
                    </script>
                -->
                <script>
                    @if (Session::has('alert'))
                        toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": false,
                        "positionClass": "toast-bottom-left",
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                        toastr.info("{{ Session::get('alert') }} {{ Auth::user()->name }}");
                    @endif
                </script>

@endsection
