<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('partials.head')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
@include('sweetalert::alert')

<div id="app" class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    @include('front.partials.nav')

    <!-- Main Header Nav For Mobile -->
    @include('partials.mobile_header_nav')

    <main>
        @yield('content')
    </main>

    <!-- Our Footer -->
    @include('partials.footer')

    {{--    scroll to top arrow--}}
    <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
</div>

    @include('partials.scripts')
<script type='text/javascript'>
    $(document).ready(function(){
        $('#sel_state').change(function(){
            //state id
            var id = $(this).val();

            //empty lga dropdown
            $('#sel_lga').find('option').not(':first').remove();

            // Ajax request
            $.ajax({
                url: 'getLgas/'+id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    var len = 0;
                    if(response['data'] != null){
                        len = response['data'].length;
                    }

                    if(len > 0){
                        // Read data and create lga option
                        //var sel = document.getElementById('sel_lga');
                        for(var i=0; i<len; i++){
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;
                            //var opt = document.createElement('option');
                           // opt.value = id;
                            //opt.innerText = name;
                            //sel.appendChild(opt);
                            var option = "<option value=' "+id+" '>"+name+"</option>";
                            $("#sel_lga").append(option);
                        }
                    }
                }
            });

        });
    });
</script>
</body>
</html>
