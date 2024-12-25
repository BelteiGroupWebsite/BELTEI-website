@extends('web.client.school.layout.app')

@section('content')
    <div class="px-3">
        <h3 class="py-3">Increase General Knowledge</h3>
        <div class="content-translate-font text-start">

            <div class="py-2">
                <h5>
                    1. Understanding of Drug and E-cigarette (Vape) (Grade 7 & 8 - Level 7 & 8)
                </h5>
                <p class="indent-1rem pt-1">
                    Students learn about hazards of drug and E-cigarette (Vape) abuse, how to protect themselves from drug
                    use,
                    never try nor use any drug, training them on how to educate others not to self-indulge into drug abuse
                    and
                    to understand the value of relationships in their families, schools, and society.
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/vape/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    2. Traffic Law (Grade 7 & 8 - Level 7 & 8)
                </h5>
                <p class="indent-1rem pt-1">
                    Students learn about traffic laws, traffic signs, traffic situations, causes of road accidents, and
                    traffic jams in Cambodia, especially they are aware of safety tips and vehicle control & check before or
                    while driving in order to avert any road eventual accidents.

                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/trafficlaw/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    3. Concept of Buddhism (Grad 9 - Level 9)
                </h5>
                <p class="indent-1rem pt-1">
                    Students are aware of Dharma; promoting Buddhism which is the state religion, imbuing the doctrines of
                    Buddhist regarding good deeds, bad deeds, sins, particularly educating students about morality & ethics
                    and virtue, instructing students how to abstain drug abuse, domestic violence, pedophilic acts, rapes,
                    road accidents, and bullying.
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/buddhist/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    4. Food Safety (Grade 10-Level 10)
                </h5>
                <p class="indent-1rem pt-1">
                    Students learn about food hygiene, which has good nutrition and safe. learn how to take care of health
                    and learn how to keep food wisely and kitchenware hygiene, and how to avoid the diseases which is caused
                    by hazardous food.
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/safetyfood/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    5. Cambodian Youth The digital age (Grade 10- Level 10)
                </h5>
                <p class="indent-1rem pt-1">
                    Students learn about the characteristics of Cambodian youth in the digital era. It Require to have
                    extensive knowledge, skills, intelligence, good morals with great attitudes for industrial revolution
                    4.0, to become a new, modern, and global youth to participate in the defense of our homeland and towards
                    national prosperity.

                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/digitalyouth/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    6. Role of Youths in society (Grade 11 - Level 11)
                </h5>
                <p class="indent-1rem pt-1">
                    Students learn about the benefits and features of the National Social Security Fund (NSSF) on
                    Occupational Risk Scheme, Health Care Scheme (HCS), and Pension Scheme, so that students are ready to
                    enter the workforce after graduation.


                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/societyyouthrole/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    7. Awareness of the Security Regime (Grade 12-Level 12)
                </h5>
                <p class="indent-1rem pt-1">
                    Students understand the principles and benefits of the National Social Security Fund (NSSF) on the
                    social security system: 1- Occupational Risk Scheme (a. Occupational accidents in the workplace or
                    during travel; b. Occupational diseases such as Toxic Occupational Chef) 2- Health Care Scheme (Social
                    Health Insurance to provide preventive and medical care services, as well as daily allowances during
                    sick leave and maternity leave) and 3- Pension (a. Receive health insurance service upon retirement; b.
                    Receive a monthly pension (twice a month); c. Dependents can receive a monthly allowance upon retirement
                    or death; d. Receive 2 million Riels for cremation at the time of death of the retiree).



                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/securityregime/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
        </div>

    </div>
@endsection
