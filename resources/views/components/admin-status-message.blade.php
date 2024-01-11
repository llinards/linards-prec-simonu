@if(session()->has('success'))
    <p class="my-3 text-sm rounded-lg text-green-700 font-bold"
       role="alert">
        {{Session::get('success')}}
    </p>

@elseif(session()->has('error'))
    <p class="my-3 text-sm rounded-lg text-red-700 font-bold"
       role="alert">
        {{Session::get('error')}}
    </p>
@endif

