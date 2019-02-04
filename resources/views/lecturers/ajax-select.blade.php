<option>--- Select Sub Region ---</option>

@if(!empty($subregions))

  @foreach($subregions as $key => $subregion)

    <option value="{{ $key }}">{{ $subregion}}</option>

  @endforeach

@endif