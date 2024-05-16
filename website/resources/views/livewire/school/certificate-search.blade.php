<div class="position-relative ">

    <div class="title-translate-font mb-4">
        <h4>{{ __('beltei_university/certificate/certificate.find') }}</h4>
    </div>

    <div class="input-group mb-3 shadow-sm">
        <input wire:model.live="search" type="search" class="form-control" name="" id="searchBar"
            onfocus='document.getElementById("searchResults").classList.remove("d-none");'
            onblur='setTimeout(function() { document.getElementById("searchResults").classList.add("d-none"); }, 500);'
            placeholder="Search ...">
        <button class="btn btn-primary content-translate-font " id="modalCreatePreferenceButton" type="button">
            {{ __('beltei_university/certificate/certificate.search') }}
        </button>
    </div>

    <div>
        <table class="table table-hover table-bordered w-100 f141 content-translate-font"
            style="vertical-align: middle">
            <thead class="table-info font-bold">
                <tr>
                    <th>N<sup>o</sup></th>
                    @if (str_replace('_', '-', app()->getLocale()) == 'kh')
                        <th>{{ __('beltei_university/certificate/certificate.khmer_name') }}</th>
                    @else
                        <th>{{ __('beltei_university/certificate/certificate.latin_name') }}</th>
                    @endif
                    <th>{{ __('beltei_university/certificate/certificate.gender') }}</th>
                    <th>{{ __('beltei_university/certificate/certificate.dob') }}</th>
                    <th>{{ __('beltei_university/certificate/certificate.campus') }}</th>
                    <th>{{ __('beltei_university/certificate/certificate.profile') }}</th>
                    <th>{{ __('beltei_university/certificate/certificate.beltei') }}</th>
                    <th>Moey</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>

            <tbody class="f14">
                @foreach ($certificates as $student)
                        <tr>
                            <td>{{ $student->certi_no }}</td>
                            @if (str_replace('_', '-', app()->getLocale()) == 'kh')
                                <td class="Battambang-Regular">{{ $student->name_kh }}</td>
                            @else
                                <td>{{ $student->name_eng }}</td>
                            @endif
                            <td>{{ $student->gender[0] }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->campus }}</td>
                            <td>
                                <a target="blank"
                                    href="{{ url('certificate/bis/' . $student->program . '/' . $student->grade . '/' . $student->batch_startYear . '/' . $student->identify_user . '/profile/' . str_replace(' ', '', strtoupper($student->name_eng)) . '.jpg') }}">
                                    <img loading="lazy" alt="please report" class="w-100" style="max-width: 100px"
                                        src="{{ asset('certificate/bis/' . $student->program . '/' . $student->grade . '/' . $student->batch_startYear . '/' . $student->identify_user . '/profile/' . str_replace(' ', '', strtoupper($student->name_eng)) . '.jpg') }}"
                                        alt="">

                                </a>
                            </td>
                            <td>
                                <a target="blank"
                                    href="{{ url('certificate/bis/' . $student->program . '/' . $student->grade . '/' . $student->batch_startYear . '/' . $student->identify_user . '/beltei/' . $student->certi_no . '.jpg') }}">
                                    <img loading="lazy" alt="please report" class="w-100" style="max-width: 100px"
                                        src="{{ asset('certificate/bis/' . $student->program . '/' . $student->grade . '/' . $student->batch_startYear . '/' . $student->identify_user . '/beltei/' . $student->certi_no . '.jpg') }}"
                                        alt="">
                                </a>
                            </td>
                            <td>
                                <a target="blank"
                                    href="{{ url('certificate/bis/' . $student->program . '/' . $student->grade . '/' . $student->batch_startYear . '/' . $student->identify_user . '/moey/' . $student->moey_id . '.jpg') }}">
                                    <img loading="lazy" alt="please report" class="w-100" style="max-width: 100px"
                                        src="{{ asset('certificate/bis/' . $student->program . '/' . $student->grade . '/' . $student->batch_startYear . '/' . $student->identify_user . '/moey/' . $student->moey_id . '.jpg') }}"
                                        alt="">
                                </a>
                            </td>

                            {{-- @can('access-school-page', Auth::user())
                                <td>
                                    <a href="{{ route('admin.school.certificate.edit', $student->id) }}"
                                        class="btn p-1 px-2 btn-warning bi bi-pencil-square"></a>
                                </td>
                            @else
                                <td>
                                    <div class="modal fade" id="exampleModalToggle{{ $student->id }}" aria-hidden="true"
                                        aria-labelledby="exampleModalToggle{{ $student->id }}Label" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalToggle{{ $student->id }}Label">Report
                                                        Modal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-start">


                                                    <div class="row">

                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="name{{ $student->id }}">
                                                            <label class="form-check-label" for="name{{ $student->id }}">
                                                                Name
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="gender{{ $student->id }}">
                                                            <label class="form-check-label" for="gender{{ $student->id }}">
                                                                Gender
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="dob{{ $student->id }}">
                                                            <label class="form-check-label" for="dob{{ $student->id }}">
                                                                Date of Birth
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="campus{{ $student->id }}">
                                                            <label class="form-check-label" for="campus{{ $student->id }}">
                                                                Campus
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="profile{{ $student->id }}">
                                                            <label class="form-check-label font-bold"
                                                                for="profile{{ $student->id }}">
                                                                Profile
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="beltei{{ $student->id }}">
                                                            <label class="form-check-label font-bold"
                                                                for="beltei{{ $student->id }}">
                                                                Beltei Certificate
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="moey{{ $student->id }}">
                                                            <label class="form-check-label font-bold"
                                                                for="moey{{ $student->id }}">
                                                                Moey Certificate
                                                            </label>
                                                        </div>

                                                    </div>




                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning">Report</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="btn btn-warning f10" data-bs-toggle="modal"
                                        href="#exampleModalToggle{{ $student->id }}" role="button">Report</a>

                                </td>
                            @endcan --}}


                        </tr>
                @endforeach
            </tbody>
        </table>
        {{ $certificates->links() }}
    </div>


</div>
