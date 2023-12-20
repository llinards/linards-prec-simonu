@if(session()->has('success'))
    <div id="success-message" class="p-4 my-4 text-sm rounded-lg text-white text-center font-bold"
         role="alert">
        {{Session::get('success')}}
    </div>

@elseif(session()->has('error'))
    <div id="error-message" class="p-4 my-4 text-sm rounded-lg text-white text-center font-bold"
         role="alert">
        {{Session::get('error')}}
    </div>
@endif

