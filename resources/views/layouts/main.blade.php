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
        @php
            $states = \App\Models\State::all();
        @endphp
        <script type='text/javascript'>
    $(document).ready(function(){
        $('#sel_state1').change(function(){
            //state id
            var id = $(this).val();

            //empty dropdown for LGA
            $('#sel_lga1').find('option').not(':first').remove();

            // LGA Ajax request
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
                            $("#sel_lga1").append(option);
                        }
                    }
                }
            });
        });

        $('#sel_state').change(function(){
            //state id
            var id = $(this).val();

            //empty dropdown for LGA
            $('#sel_lga').find('option').not(':first').remove();

            //empty dropdown for Target
            $('#sel_target').find('option').not(':first').remove();

            // LGA Ajax request
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

            //TArget Ajax request
            $.ajax({
                url: 'getTargets/'+id,
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
                            var name = response['data'][i].fullname;
                            var post = response['data'][i].designation;
                            //var opt = document.createElement('option');
                            // opt.value = id;
                            //opt.innerText = name;
                            //sel.appendChild(opt);
                            var option = "<option value=' "+id+" '>"+name+' / '+post+"</option>";
                            $("#sel_target").append(option);
                        }
                    }
                }
            });


        });

        $(".add_more_btn").click(function (e) {
            e.preventDefault();
            $("#show_item").prepend(`
                                                <div class="my_dashboard_review mt30">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Target Entry</h4>
                                        <button class="btn-danger pull-right btn-sm remove_item_btn">- Remove</button>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="twlink">Picture</label>
                                            <input type="file" name="image[]" class="form-control" id="twlink" required/>
                                        </div>
                                        <small>Height:400px - Width:120px.</small>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="twlink">Full Name</label>
                                            <input type="text" name="fullname[]" class="form-control" id="twlink" placeholder="Jerimbo Limo">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="my_profile_setting_input form-group">
                                            <label for="inslink">State</label>
                                            <select name="state_id[]" class="form-control" data-live-search="true" data-width="100%">
                                                <option value="" data-tokens="">Select State</option>
                                                @foreach($states as $st)
            <option value="{{$st->id}}" data-tokens="">{{$st->name}}</option>
                                                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="my_profile_setting_input form-group">
            <label for="googlelink">Constituency</label>
            <input type="text" name="constituency[]" class="form-control" id="googlelink" placeholder="">
        </div>
    </div>
    <div class="col-lg-3">
        <div class="my_profile_setting_input form-group">
            <label for="inslink">Designation</label>
            <input type="text" name="designation[]" class="form-control" id="inslink" placeholder="">
        </div>
    </div>
    <div class="col-lg-3">
        <div class="my_profile_setting_input form-group">
            <label for="googlelink">Phone Number</label>
            <input type="text" name="phone_number[]" class="form-control" id="googlelink" placeholder="">
        </div>
    </div>
    <div class="col-lg-3">
        <div class="my_profile_setting_input form-group">
            <label for="googlelink">E-Mails</label>
            <input type="email" name="email[]" class="form-control" id="googlelink" placeholder="">
        </div>
    </div>
</div>
</div>

`);
        })

        $(document).on('click', '.remove_item_btn', function (e){
            e.preventDefault();
            let row_item = $(this).parent().parent().parent();
            $(row_item).remove();
        });
    });
</script>
</body>
</html>
