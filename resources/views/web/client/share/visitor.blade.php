<ul class="text-capitalize list-group f14 unhover-padding">
    <a href="{{ route('school.') }}">
        <h6 class="text-uppercase text-center py-2 bg-header-color gold ">Visitors : {{ $visitor->count() }}</h6>
        <table class="table content-translate-font text-white">
            @foreach ($countries as $country)
                @if($country->visitors->count() > 50)
                <tr>
                    <td>
                        {{ $country->region ." / ". $country->name }}
                    </td>
                    <td class="text-end">
                        {{ $country->visitors->count() }} <i class="fa fa-eye f12"></i>
                    </td>
                </tr>
                @endif
            @endforeach
        </table>
    </a>
</ul>