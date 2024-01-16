@if(session()->has('success'))
    <div id="success-message" class="my-5 rounded-lg text-white text-center font-bold"
         role="alert">
        {{Session::get('success')}}
    </div>

@elseif(session()->has('error'))
    <div id="error-message" class="my-5 rounded-lg text-white text-center font-bold"
         role="alert">
        {{Session::get('error')}}
    </div>
@endif

