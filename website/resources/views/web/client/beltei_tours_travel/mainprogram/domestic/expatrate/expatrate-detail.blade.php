@extends('web.client.beltei_tours_travel.layout.app')

@section('content')

    <div id="content">
    </div>

    <script>
        const myKeysValues = window.location.search;
        const urlParams = new URLSearchParams(myKeysValues);
        const id = urlParams.get("id");


        const content = document.getElementById('content');

        const ElementArr = [
            `    <div>
                    <h4 class="title-translate-font mb-3 underline">PHNOM PENH (3 DAYS - 2 NIGHTS)</h4>

                    <div>
                        <h6 class="bg-primary py-3 mt-4 text-white">
                            DAY 1: TUOL SLENG GENOCIDE MUSEUM - CHOEUNG EK GENOCIDAL CENTER​
                        </h6>

                        <table class="text-start table table-striped">
                            <tbody>
                                <tr>
                                    <td class="width-100">07:30 AM</td>
                                    <td>​Pick up from the hotel and visit Tuol Sleng Genocide Museum.</td>
                                </tr>
                                <tr>
                                    <td class="width-100">10:00 AM</td>
                                    <td>Move to Toul Tompong Market (Russian Market) led by tour leader.</td>
                                </tr>
                                <tr>
                                    <td class="width-100">11:50 AM </td>
                                    <td>Have delicious lunch at the restaurant.</td>
                                </tr>
                                <tr>
                                    <td class="width-100">13:50 PM </td>
                                    <td>Transfer to Choeung Ek Genocidal Center described history by
                                        professional tour guide</td>
                                </tr>
                                <tr>
                                    <td class="width-100">16:00 PM </td>
                                    <td>Move to the hotel and transfer to have dinner.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">19:30 PM </td>
                                    <td>Transfer to the hotel and stay overnight.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h6 class="bg-primary py-3 mt-4 text-white">
                            DAY 2: ROYAL PALACE - NATIONAL MUSEUM OF CAMBODIA - WAT PHNOM
                        </h6>

                        <table class="text-start table table-striped">
                            <tbody>
                                <tr>
                                    <td class="width-100">07:30 AM</td>
                                    <td>After breakfast at the hotel, transfer to visit the Royal Palace, the
                                        residence of Cambodian King.</td>
                                </tr>
                                <tr>
                                    <td class="width-100">10:00 AM</td>
                                    <td>​Arriving at the Royal Palace, explore cultural and historical sites of the
                                        king that described by professional tour guide.</td>
                                </tr>
                                <tr>
                                    <td class="width-100">10:30 AM </td>
                                    <td>​Continue to visit National Museum of Cambodia which houses one of
                                        the world's largest collections of Khmer art, including
                                        sculptural, Khmer ceramics bronzes, and ethnographic objects. Its
                                        collection includes over 14,000 items, from prehistoric times to periods
                                        before, during and after the Khmer Empire.</td>
                                </tr>
                                <tr>
                                    <td class="width-100">11:40 AM </td>
                                    <td>Transfer to have yummy lunch at the restaurant</td>
                                </tr>
                                <tr>
                                    <td class="width-100">01:30 PM​ </td>
                                    <td>Continue to visit Wat Phnom historical Site symbolizing the name of
                                        Phnom Penh capital city of Cambodia.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">15:40 PM </td>
                                    <td>Move to Thom Thmey Market for shopping.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">18:00 PM </td>
                                    <td>Transfer to have dinner. Then shopping Night Market.
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h6 class="bg-primary py-3 mt-4 text-white">
                            DAY 3: WIN-WIN MEMORIAL - MORODOK TECHO NATIONAL STADIUM
                        </h6>

                        <table class="text-start table table-striped">
                            <tbody>
                                <tr>
                                    <td class="width-100">07:00 AM​</td>
                                    <td>After breakfast at the hotel, travel to Win-Win Memorial.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">08:30 AM</td>
                                    <td>
                                        Arrive at Win-Win Memorial, enjoy exploring the history of it described
                                        by Expertise tour guide there.

                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">10:00 AM</td>
                                    <td>
                                        Move to Morodok Techo National Stadium.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">11:50 AM</td>
                                    <td>
                                        Transfer to have yummy lunch at the restaurant.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">14:00 PM</td>
                                    <td>
                                        Transfer to AEON Mall Sen Sok. Then move to the hotel for relaxing.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">17:30 PM </td>
                                    <td>
                                        Transfer to have dinner and enjoy beautiful view of Phnom Penh on
                                        the River Cruise at night.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width-100">21:00 PM </td>
                                    <td>
                                        Transfer to hotel with fun trip and the best memories.

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="container p-3">                
                            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh01.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh02.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh03.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh04.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh05.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh06.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh07.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh08.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh09.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3 ">
                                        <img class="w-100 rounded shadow-sm" src="{{ asset('asset/img/tours/domestic/expatrate/detail/phnompenh/phnompenh10.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
             `,
            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH - SIEM REAP (3 DAYS - 2 NIGHTS)</h4>

                <div>
                    <div>
                        <p class="text-start indent-1rem pb-2">
                            Siem Reap, located in the northwest of Cambodia about 314 km from Phnom Penh. It is situated along
                            National Road #6 and covering over 10,299 km². The province is divided into 11 districts and one central
                            town including 87 communes and 910 villages. The population density of this province is 106.44 people
                            per km² and the total population is 1.096.248.
                        </p>
                        <p class="text-start indent-1rem pb-2">
                            Siem Reap was a powerful empire and a wonderful city with a long history and strong culture in Asia.
                            Most of this heritage remains and this has made Siem Reap an important cultural destination for tourists
                            from all over the world. Obviously, the Angkor area is full of many diverse cultural and historical
                            attractions that draw around 2 million local and international tourists each year, in particular to see
                            the awesome architecture and picturesque sculpture of the many ancient temples. With its beautiful
                            pattern of hundreds of Apsara figures, the precious Angkor Wat temple is a World Heritage site for all
                            humankind. Additionally, tourists can climb Bakheng Mountain to see beautiful sunrises and sunsets, to
                            swim at the West Baray.
                        </p>
                        <p class="text-start indent-1rem pb-2">
                            Nowadays, Siem Reap is known as the second economic hub of Cambodia based on its geographic advantages
                            as well as well-developed transportation infrastructure in the form roads, airports and waterways. The
                            province is expected to be not only a hub for international tourism, but also a hub for various trade
                            and business activities at both the domestic and international level.
                        </p>

                    </div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1: PHNOM PENH–SIEM REAP–ANGKOR WAT
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Departure from Phnom Penh to​ Siem Reap province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">06:15 AM </td>
                                <td>Breakfast at Green World Restaurant & continue to Siem Reap City
                                    describing crossing geography and general Cambodian history and
                                    by Tour Leader. Arriving at Kampong Kdey Ancient Bridge was built
                                    in 12th century of Khmer Empire, stop over and take photos.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM </td>
                                <td>Lunch at Stung Trachak restaurant. Then move to hotel for checking
                                    in.</td>
                            </tr>
                            <tr>
                                <td class="width-100">15:00 PM </td>
                                <td>Visit ANGKOR WAT, World Heritage Site and Largest Hindu Temple in
                                    the World and watch sunset</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM </td>
                                <td>Move back to hotel and transfer to have tasty local food as dinner.
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY2: KULEN MOUNTAIN -BANTEAY SREI - BAKHENG MOUNTAIN
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>Breakfast at hotel and transfer to visit Kulen, the most Sacred
                                    Mountain since 9th century.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 AM</td>
                                <td>Lunch at Pka Chan restaurant and enjoy swimming at the waterfall.</td>
                            </tr>
                            <tr>
                                <td class="width-100">13:00 PM </td>
                                <td>Transfer to visit Banteay Srei temple, One of the most beautiful temple
                                    in Siem Reap and enjoy listening to Khmer classical music playing by
                                    blind people.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM </td>
                                <td>Move to BAKHENG mountain to enjoy sunset in the evening</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY3: TONLEI SAP LAKE -HNOM KROM ECO RESORT-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:00 AM​</td>
                                <td>After breakfast at hotel, transfer to visit Tonle Sap Lake, the biggest lake
                                    in Southeast Asia.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">08:30 AM</td>
                                <td>
                                    Arrive at TONLEI SAP River , enjoy River Cruise and visit Local People,
                                    Fishermen, Floating village and Shopping at Floating Market.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 AM</td>
                                <td>
                                    Move to Phnom Krom Eco Resort and enjoy beautiful view and have
                                    delicious lunch.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">13:30 PM</td>
                                <td>
                                    Transfer back to Phnom Penh city.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM</td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memories.
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-12">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap8.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/siemreap/siemreap10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
             `,

            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH - KAMPONG THOM - SIEM REAP (3 DAYS - 2 NIGHTS)
                </h4>

                <div>
                    <div>
                        <p class="text-start indent-1rem">
                            Kampong Thom is located in the northeastern part of Cambodia and it is 168 kilometers from Phnom Penh via National Road No6 across Kandal and Kampong Cham Provinces. The province has a total land area of 13,814 square kilometers subdivided to 8 districts, 73 communes and 765 villages. The recent population is about 816,978. The city of Kampong Thom is called Stung Sen. The People normally work as farmer, fisherman and sellers. Some tourist attractions which interest local and international visitors are Santuk mountain, Stung Prey Pros, Sambor Preikuk temple, Sambor Preikuk temple, a UNESCO World Heritages Site, and etc.
                        </p>
                    </div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1: PHNOM PENH - KAMPONG THOM-SIEM REAP
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:00 AM</td>
                                <td>Depart form Phnom Penh to Kampong Thom province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM </td>
                                <td>Arriving at Kampong Thom province, take photos at symbol of
                                    Kampong Thom province.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM </td>
                                <td>Have lunch Meatophum restaurant.</td>
                            </tr>
                            <tr>
                                <td class="width-100">13:30 PM </td>
                                <td>Move to Sambor Preikuk temple, a UNESCO World Heritages Site.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:30 PM </td>
                                <td>Arrive at Siem Reap. Then transfer to the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM </td>
                                <td>Trasfer to have buffet dinner at Tonlei Sap restaurant.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:00 PM </td>
                                <td>Transfer to hotel and stay overnight.
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 2: BAYON TEMPLE-TA PROMH TEMPLE-BAKHENG MOUNTIAN
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>After breakfast at the hotel, transfer to visit the Bayon temple, built by
                                    the King Jayavarman VII in the late 12th or early 13th.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM</td>
                                <td>Have lunch at the local restaurant.</td>
                            </tr>
                            <tr>
                                <td class="width-100">13:00 PM </td>
                                <td>Visit Ta Prohm temple, built under the reign of the powerful king of
                                    Angkor, Jayavarman VII, in mid-12th century to early 13th century
                                    (1186). Consecrating to Buddhist cult and dedicated to his Royal
                                    Mother Prajnaparamita.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:30 PM </td>
                                <td>Move to Bakheng mountain and enjoy watching sunset</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM </td>
                                <td>Have dinner at the local restaurant</td>
                            </tr>
                            <tr>
                                <td class="width-100">20:00 PM </td>
                                <td>Transfer to Pub-Street and Shopping at Night Market.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">21:30 PM </td>
                                <td>Transfer back to the hotel.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 3: ANGKOR WAT TEMPLE - PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:30 AM​</td>
                                <td>​After breakfast at the hotel, check out and continue to visit ANGKOR
                                    WAT, World Heritage Site and Largest Hindu Temple in the World .
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 PM</td>
                                <td>
                                    Have lunch at the local restaurant and transfer to Phnom Penh.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM</td>
                                <td>
                                    Arrive at Phnom Penh with fun and the best memories.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col-12">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom8.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kompongthom/kompongthom9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
             
             `,

            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-PREAH VIHEA-ODDAR MEANCHEY-SIEM REAP (3DAYS-2NIGHTS)
                </h4>

                <div>
                    <div>
                        <p class="text-start indent-1rem">

                            Preah Vihear is located in northern Cambodia with borders to Laos and Thailand. It's approximately 345 kilometers away from Phnom Penh capital city via National Road No 6 and 62 across Kandal, Kampong Cham, and Kampong Thom provinces. It covers an area of 13,788 square kilometers subdivided into 7 districts, 49 communes, and 232 villages. The recent population is about 299,039. The city of Preah Vihear is called Tbeng Meanchey.​​ Preah Vihear is well-known for its tourist attractions, such as Preah Khan, Kork Beng , Krapum Chhouk ,Beng Mealea ,Koh Ker temples, and Preah Vihear temple, which has been inscribed as World Heritage in 2008 by UNESCO.                </p>
                    </div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY1: PHNOM PENH-PREAH VIHEA
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Departure from Phnom Penh to Preah Vihear temple.</td>
                            </tr>
                            <tr>
                                <td class="width-100">06:50 AM </td>
                                <td>Have breakfast at Kampong Thom province.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM </td>
                                <td>Continue to visit Preah Vihear and enjoy seeing the beautiful view
                                    along the way.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM </td>
                                <td>Arrive at Preah Vihhear province, transfer to have tasty lunch at local
                                    restaurant.</td>
                            </tr>
                            <tr>
                                <td class="width-100">12:50 AM  </td>
                                <td>Transfer to Preah Vihear temple, the UNESCO World Heritage Site and
                                    have charity.
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY2: PREAH VIHEAR-ODDAR MEANCHEY-TAMOK’S HOUSE TOURISM SITE-REAP
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>Have breakfast at the hotel and check out.</td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM</td>
                                <td>Leave Preah Vihear for Oddar Meanchey.</td>
                            </tr>
                            <tr>
                                <td class="width-100">10:00 AM </td>
                                <td>After arriving at Oddar Meanchey, transfer to visit TAMOK’s house
                                    Tourism Site, the former leader Of Khmer Rouge and his graveyard.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM</td>
                                <td>Transfer to Cambodia-Thailand border for having delicious food.</td>
                            </tr>
                            <tr>
                                <td class="width-100">13:00 PM  </td>
                                <td>Transfer to Siem Reap province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM </td>
                                <td>Arrive at Siem Reap, transfer to have dinner in Siem Reap city.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM </td>
                                <td>Transfer to check in the hotel and sleep overnight.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY3: SIEM REAP-ANGKOR WAT TEMPLE -BAYON TEMPLE-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">7:30 AM</td>
                                <td>After having breakfast at the hotel, transfer to visit Angkor Wat temple,
                                    the UNESCO World Heritage Site.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 AM</td>
                                <td>
                                    Continue to visit Bayon temple, the former capital city of Angkor era.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM</td>
                                <td>
                                    Move to have lunch at local restaurant.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">13:15 PM</td>
                                <td>
                                    Transfer back to Phnom Penh.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM</td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memories.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea03.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea11.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/preahvihea/preahvihea12.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,


            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-PURSAT-BATTAMBANG (4DAYS-3NIGHTS)
                </h4>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY1: PHNOM PENH-PURSAT-VEAL VENG (PHNOM 1500)​
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Departure from BELTEI TOURS & TRAVEL to Pursat.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM </td>
                                <td>Have breakfast at Kampong Chhnang province and continue the trip
                                    to Pursat.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 AM </td>
                                <td>Arrival of Porsat, visit Grandfather Khleang Moeung Statue, and transfer
                                    to have lunch at local restaurant at Pursat.</td>
                            </tr>
                            <tr>
                                <td class="width-100">12:50 PM </td>
                                <td>Move to Veal Veng district and enjoy viewing the beautiful cardamom
                                    mountain.</td>
                            </tr>
                            <tr>
                                <td class="width-100">15:30 PM </td>
                                <td>Arrive at Veal Veng roundabout and take beautiful photos.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">16:30 PM </td>
                                <td>Transfer to check in the hotel and have dinner.</td>
                            </tr>
                            <tr>
                                <td class="width-100">19:00 PM </td>
                                <td>Transfer back to the hotel at Phnom 1500.</td>
                            </tr>


                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY2: VEAL VENG ( PHNOM 1500)- PURSAT
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>Check out the hotel and have breakfast.</td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>After having breakfast , transfer to visit (Phnom 1500), the most
                                    beautiful landscape.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM </td>
                                <td>Have lunch at Thmorda Touch waterfall.</td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 PM</td>
                                <td>Move back to Pursat.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:40 PM </td>
                                <td>Arrive at Pursat and Check in the hotel.</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM </td>
                                <td>Have tasty dinner at local restaurant and city tour.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:30 PM </td>
                                <td>Transfer to the hotel at Pursat.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY3: PURSAT-BATTAMBANG-SAMPOV MOUNTAIN
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>Check out the hotel and move to Battambang province.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Continue to Battambang and enjoy viewing local people and nice
                                    landscape on the way.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 AM</td>
                                <td>
                                    Have lunch at local restaurant and visit Sampov mountain, Buddha
                                    statue, historical temple, Phkasla Cave, Lkhoan Cave, and Aksopheak
                                    Cave.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM</td>
                                <td>
                                    Transfer to have dinner and city tour at night.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM</td>
                                <td>
                                    Transfer back to the hotel and sleep overnight.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 4: BATTAMBANG-FORMER BATTABANG AIRPORT-BANAN MOUNTAIN-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>Have breakfast and check out  the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Visit  former Battambang airport , and Bamboo Train Battambang at
                            Banan mountain, and taste fresh grapefruits.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM</td>
                                <td>
                                    Transfer to have lunch at local restaurant.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">13:00 PM</td>
                                <td>
                                    Back to Phnom Penh.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM</td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat03.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/pursat/pursat10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,


            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-MONDULKIRI (3DAYS-2NIGHTS)

                </h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Mondulkiri is located in the northeastern part of Cambodia. It is about 381,94 kilometers from Phnom Penh via National Roads No 6, 7, 76 across Kandal, Kampong Cham and Kratie provinces. It covers an area of 14,299 square kilometers, and it is subdivided to 4 districts, 17 communes,92 villages. Its city is called Sen Monorom. The total population of this province is over 92,213.There are 14 different ethnic minorities, and most of them are living on agriculture,such as planting rice, fruit trees, and a variety of vegetables. Some spectacular sites which interest many local and international tourists are Bousra waterfall, Sen Monorom waterfall, Romanea waterfall, and Putang village of ethnic group. Sea Forest mountain resort, Dos Kramum mountain resort, Dakdam mountain resort, Oramis resort ,and Coffee Plantation, ect.
                    </p>
                </div>
                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY1: PHNOM PENH-MONDULKIRI-SEA FOREST RESORT
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Departure from Phnom Penh to Mondulkiri province.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM </td>
                                <td>Have breakfast at Kampong Cham.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">08:00 AM </td>
                                <td>Continue to visit Mondulkiri.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM </td>
                                <td>Have lunch at Snoul district, Kratie province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">15:30 PM </td>
                                <td>Arrive at Mondulkiri, transfer to Sea Forest resort.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">17:40 PM </td>
                                <td>Transfer to check in the hotel.</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM </td>
                                <td>Transfer to have local dinner and transfer back to the hotel.</td>
                            </tr>


                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY2: BOUSRA WATERFALL-COFFEE PLANTATION-PHNOM DOS KRAMUM RESORT-DAKDAM RESORT
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>After having breakfast at restaurant, transfer to visit Bousra waterfall.</td>
                            </tr>
                            <tr>
                                <td class="width-100">08:20 AM</td>
                                <td>Arrive at Bousra Waterfall, enjoy beautiful natural Bousra waferfall.</td>
                            </tr>
                            <tr>
                                <td class="width-100">10:00 AM </td>
                                <td>Transfer to Coffee Plantation resort and enjoy trying natural coffee, durian, avocado, coconut juice, and taking beautiful photos.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM</td>
                                <td>Move to have lunch at local restaurant.</td>
                            </tr>
                            <tr>
                                <td class="width-100">13:00 PM </td>
                                <td>Transfer to Phnom Dos Kramom Resort, cultural and historical site of ethic people.</td>
                            </tr>
                            <tr>
                                <td class="width-100">15:30 PM</td>
                                <td>Transfer to visit Dakdam resort near Cambodia-Vietnam border.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM</td>
                                <td>Arrive at Dakdam resort, enjoy fresh air, take photos with great landscape along the hills, and view sunset on the top of the mountain.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">17:30 PM </td>
                                <td>Move back to have dinner at local restaurant in Sen Monorom city.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:00 PM </td>
                                <td>Transfer back to the hotel and sleep overnight.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY3: MONDULKIRI –PUTANG VILLAGE-OROMIS RESORT-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:30 AM </td>
                                <td>After breakfast at the restaurant, transfer to Putang Village for charity activities.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">09:30 AM</td>
                                <td>
                                    Transfer to Oromis resort and enjoy seeing beautiful landscape and waterfall.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM</td>
                                <td>
                                    Have delicious lunch at Oramis resort.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">13:00 PM</td>
                                <td>
                                    Transfer back to Phnom Penh.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:30 PM ​</td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memories.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri03.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri11.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/mondulkiri/mondulkiri12.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,


            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-KRATIE-RATANAKIRI (3DAYS-2NIGHTS)

                </h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Ratanakiri  province is located  in  the northeast  of Cambodia  and  established   in 1959. It borders the provinces of Mondulkiri to the south and Stung Treng to the west and the countries of Laos  and Vietnam to the north and east. The Annamite Range of mountains is in the north. There are the Tonle San and Tonle Srepok rivers. Lomphat Wildlife Sanctuary and Virachey National Park are both in the province.There are 8 different ethnic groups in Ratanakiri. Most of them live in the deeper jungle, on the hills and covered mountains hill tribes in small separated villages. Usually they make their living through traditional ways of cultivation ( shifting agriculture), hunting and collecting fruits from the forest is a must. These old cultures believe in spirits, derived from their animism beliefs. It covers an area of 10,782 square kilometers, and it is subdivided to 8 districts, 46 communes,243 villages. Its city is called Banlung. The total population of this province is over 217.453; there are more natural and man-made tourist attractions which always attract more national and foreign tourists to visit, such as Yeak Laom Lake resort, Airavata Elephant Foundation, Ka Chanh waterfall, Ka Tieng waterfall, Cha Oung waterfall, Virakchey National Park, Ou Sean Lair waterfall, Phnom Eysei Patamak  pagoda ,and Lomkud lake.
                    </p>
                </div>
                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1: PHNOM PENH-KRATIE-RATANAKIR
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Departure from BELTEI TOURS & TRAVEL to Ratanakiri Province along
                                    with a tour leader describing Cambodia history and the regions that we
                                    will across.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM </td>
                                <td>Have breakfast at the restaurant and move on.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:20 PM </td>
                                <td>Enjoy lunch at Kratie and continue to visit Prek Kampi resort and 100
                                    pagoda and Neang Krapum Chhouk stupa .Then move to Ratanakiri
                                    province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM  </td>
                                <td>Visit Preah Angthom pagoda and Sekong bridge at Stung Treng-Lao
                                    border</td>
                            </tr>
                            <tr>
                                <td class="width-100">17:50 PM </td>
                                <td>Have tasty dinner at Stung Treng province. Then continue to
                                    Ratanakiri city and transfer to relax and sleep over night in the hotel.
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 2: BANLUNG MARKET-YEAKLOM LAKE RESORT-EYSEIPATAMAK PAGODA
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:00 AM</td>
                                <td>Have breakfast at the hotel and continue to shopping at Banlung
                                    market , and visit Eyseipatamak pagoda.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM</td>
                                <td>Have yummy lunch at local restaurant.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:50 PM </td>
                                <td>Visit Yeaklom Lake resort and enjoy taking beautiful photos with
                                    ethnic clothes, local food, wine, and fresh air.</td>
                            </tr>
                            <tr>
                                <td class="width-100">17:00 PM </td>
                                <td>Transfer to have dinner at local restaurant and back to the hotel.</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 3: RATANAKIRI-KACHANH WATERFALL-PHNOM PENH.
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM </td>
                                <td>Have breakfast at the hotel and check out the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Visit Kachanh waterfall, which is the most beautiful waterfall in
                            Ratanakiri province.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:50 AM</td>
                                <td>
                                    Have lunch at the local restaurant and back to the Phnom Penh.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:30 PM </td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri03.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/ratanakiri/ratanakiri10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


             `,


            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-KRATIE-STUNG TRENG-RATANAKIRI-MONDULKIRI (4DAYS-3NIGHTS)

                </h4>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1: PHNOM PENH-KRATIE
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Departure from BELTEI TOURS & TRAVEL to Ratanakiri Province along
                                    with a tour leader describing Cambodia history and the regions that will
                                    across.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM </td>
                                <td>Have breakfast at the restaurant and move on.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:00 PM </td>
                                <td>Enjoy lunch at Kratie and visit 100 pagoda & Neang Krapum Chhouk.</td>
                            </tr>
                            <tr>
                                <td class="width-100">15:00 PM  </td>
                                <td>Visit Mekong Dolphin Pleasance of Kampivillage, Kratie province</td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 2: KRATIE –STUNG TRENG -RATANAKIRI
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>
                                    Have breakfast at the hotel and check out.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>Transfer to Ratanakiri.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:50 PM </td>
                                <td>Visit Sekong bridge at Stunng Treg-Laos border.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 AM </td>
                                <td>Have lunch at local restaurant in Stung Treng province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">12:30 AM </td>
                                <td>Transfer to Ratanakiri province.</td>
                            </tr>
                            <tr>
                                <td class="width-100">15:30 PM </td>
                                <td>Arrive at Ratanakiri and transfer to visit Ka Chanh waterfall.</td>
                            </tr>
                            <tr>
                                <td class="width-100">17:00 PM  </td>
                                <td>Visit Eyseipatamak pagoda  and enjoy beautiful view and fresh air.</td>
                            </tr>
                            <tr>
                                <td class="width-100">17:50 PM  </td>
                                <td>Transfer to have dinner at local restaurant in Ratanakiri.</td>
                            </tr>
                            <tr>
                                <td class="width-100">19:00 PM  </td>
                                <td>Transfer to check in the hotel and sleep over night.                        </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 3: RATANAKIRI-MONDULKIRI
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM </td>
                                <td>Have breakfast at the hotel and check out.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Continue to visit Yeaklom Lake resort and enjoy taking beautiful
                        photos with ethnic clothes, local food, wine, and fresh air.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 AM</td>
                                <td>
                                    Shopping at Banlung market.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 PM </td>
                                <td>
                                    Have yummy lunch at local restaurant.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:50 PM </td>
                                <td>
                                    Transfer to Mondulkiri province.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 PM </td>
                                <td>
                                    Arrive at Mondulkiri and visit Dos kramom mountain and Dak Dam
                            resort.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">17:40 PM </td>
                                <td>
                                    Have dinner at local restaurant.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:00 PM </td>
                                <td>
                                    Transfer to check in the hotel and sleep over night.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 4: MONDULKIRI-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM </td>
                                <td>Have breakfast at the hotel and check out the hotel
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Visit Bousra Waterall, which is the most beautiful waterfall in
                            Mondulkiri p rovince.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:50 AM</td>
                                <td>
                                    Visit Coffee Plantation and enjoy tasting natural coffee and taking
                        beautiful photos.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:00 PM </td>
                                <td>
                                    Have lunch at the local restaurant and back to the Phnom Penh.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:30 PM </td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng03.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/stungtreng/stungtreng10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,

            `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-KOH SDACH ISLAND-KOH KONG (3 DAYS - 2 NIGHTS)

                </h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Koh Kong is located in southwest of Cambodia, about 290 kilometers away from Phnom Penh via National Road No 4 and 48 or Phnom Penh-Sihanoukville Expressway across Kandal, Kampong Speu, and Sihanoukville. It covers an area of 10,090 square kilometers and subdivided into 6 districts, 26 communes, and 119 villages with the total population of 125,902. Koh Kong's city is named Krong Khemarak Phumin. Owing to the border between Cambodia and Thailand, many people live on trading and others are based on agriculture and fishing. Visitors can enjoy spectacular sites such as, Cardamom Mountains, Peam Krasop Wildlife Sanctuary, Tatai Waterfall, amazing Koh Kong Krav beach, Chi Phat Community-Based Ecotourism,Dara Sakor resot, the most beautiful beach in Koh Kong province, Khun Chang Khun Phaen stupa and Cambodia-Thailand market
                    </p>
                </div>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1: PHNOM PENH –KOH SDACH ISLAND (KING ISLAND)
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>Departure from Phnom Penh to Koh Sdach (King Island) via Phnom Penh-Sihanoukville Expressway and national road 48.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM​ </td>
                                <td>Breakfast will be served on the bus.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:50 AM​ </td>
                                <td>Arrive at Koh Sdach Port and transfer to Koh Sdach Island by Speedboat.</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 AM​ </td>
                                <td>Arrive at Koh Sdach Resort, the most beautiful beach and enjoy taking photos with very nice landscape</td>
                            </tr>
                            <tr>
                                <td class="width-100">12:00 PM </td>
                                <td>Have lunch at the local restaurant and check in the hotel</td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 PM </td>
                                <td>Touring at Koh Sdach resort, fishing, swimming, adventure, local people ,and relaxing on beach</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM </td>
                                <td>Have tasty dinner at local restaurant and sleep overnight</td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 2: KOH SDACH  RESORT-KOH KONG
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>
                                    Breakfast at the local restaurant and check out the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>Transfer to the port by speedboat and move to Koh Kong provice.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 PM </td>
                                <td>Arrive at Koh Kong province and transfer to have local lunch.</td>
                            </tr>
                            <tr>
                                <td class="width-100">13:30 AM </td>
                                <td>Move to Peam Krasop Wildlife Sanctuary and enjoy viewing mangrove forest.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM </td>
                                <td>Visit Khun Chhang Khun Phaen stupa and see the view of Koh Kong bridge.</td>
                            </tr>
                            <tr>
                                <td class="width-100">17:30 PM​  </td>
                                <td>Transfer to check in the hotel.
                                    .</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM  </td>
                                <td>Have dinner at local restaurant and sleep overnight in Koh Kong.</td>
                            </tr>

                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 3: KOH KONG - PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM </td>
                                <td>Breakfast in the hotel and check out.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Shopping at supermarket at Cambodia-Thailand border.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM</td>
                                <td>
                                    Have lunch at local restaurant.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:30 PM </td>
                                <td>
                                    Back to Phnom Penh.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM </td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 4: MONDULKIRI-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM </td>
                                <td>Have breakfast at the hotel and check out the hotel
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Visit Bousra Waterall, which is the most beautiful waterfall in
                            Mondulkiri p rovince.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:50 AM</td>
                                <td>
                                    Visit Coffee Plantation and enjoy tasting natural coffee and taking
                        beautiful photos.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:00 PM </td>
                                <td>
                                    Have lunch at the local restaurant and back to the Phnom Penh.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:30 PM </td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach8.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohsdach/kohsdach10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,


             `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-DARA SAKOR RESORT-KOH KONG (3 DAYS - 2 NIGHTS)</h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Koh Kong is located in southwest of Cambodia, about 290 kilometers away from Phnom Penh via National Road No 4 and 48 or Phnom Penh-Sihanoukville Expressway across Kandal, Kampong Speu, and Sihanoukville. It covers an area of 10,090 square kilometers and subdivided into 6 districts, 26 communes, and 119 villages with the total population of 125,902. Koh Kong's city is named Krong Khemarak Phumin. Owing to the border between Cambodia and Thailand, many people live on trading and others are based on agriculture and fishing. Visitors can enjoy spectacular sites such as, Cardamom Mountains, Peam Krasop Wildlife Sanctuary, Tatai Waterfall, amazing Koh Kong Krav beach, Chi Phat Community-Based Ecotourism,Dara Sakor resot, the most beautiful beach in Koh Kong province, Khun Chang Khun Phaen stupa and Cambodia-Thailand market.
                    </p>
                </div>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1: PHNOM PENH –DARA SAKOR  RESORT
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>
                                    ​Departure from Phnom Penh to Dara Sakor Resort via Phnom Penh-Sihanoukville Expressway and national road 48.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM​ </td>
                                <td>
                                    Breakfast will be served on the bus.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:50 AM​ </td>
                                <td>
                                    ​Arrive at Dara Sakor resort, the most beautiful beach and enjoy taking photos with very nice landscape.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:00 AM​ </td>
                                <td>
                                    Have lunch at the local restaurant and check in the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 PM </td>
                                <td>Touring at Dara Sakor resort, fishing, swimming, and relaxing on beach.</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM </td>
                                <td>Have tasty dinner at local restaurant and sleep overnight.</td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 2: DARA SAKOR RESORT-KOH KONG
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>
                                    Breakfast at the local restaurant and check out the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>Transfer to Koh Kong provice.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 PM </td>
                                <td>Have lunch at local restaurant.</td>
                            </tr>
                            <tr>
                                <td class="width-100">12:50 AM </td>
                                <td>Transfer to check in the hotel.</td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 PM </td>
                                <td>Move to Peam Krasop Wildlife Sanctuary and enjoy viewing mangrove forest.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM​  </td>
                                <td>Visit Khun Chhang Khun Phaen stupa and see the view of Koh Kong bridge.
                                    .</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM  </td>
                                <td>Have dinner at local restaurant and sleep overnight in Koh Kong.</td>
                            </tr>

                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 3: KOH KONG - PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM </td>
                                <td>Breakfast in the hotel and check out.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td>
                                    Shopping at supermarket at Cambodia-Thailand border.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM</td>
                                <td>
                                    Have lunch at local restaurant.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:30 PM </td>
                                <td>
                                    Back to Phnom Penh.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM </td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.

                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong8.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohkong/kohkong10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
             `,

             `

             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-PREAH SIHANOUK ( DAY TRIP)</h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Preah Sihanouk province is located in southwestern part of the country. It is about 226,4 kilometers from Phnom Penh via National Road No 4 across Kandal, Koh Kong, and Kampong Speu provinces; it is 187.5 kilometers via Phnom Penh-Sihanoukville Expressway. This province covers 2528, 58 square kilometers and it is subdivided into 3 districts, 23 communes, 111 villages. The current record of population is almost 292404 (2018). The city of this province is named Preah Sihanouk. Mostly, people live on trading and fishing. The key feature of this coastal province is the port, which facilitates international trades, exporting and importing. There are many tourist attractions, such as Kbal Chhay waterall, Ream beach, Chumteav Mao beach, Hawai Beach, Otres beach, Ochheuteal beach, Sokha beach, New beach, Derm Chrey Beach, Independence beach, Koh Rong island, Thansu island, and Prince island, etc.
                    </p>
                </div>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        Morning
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>
                                    ​ ​Departure from Phnom Penh to Sihanoukville via Phnom Penh-Sihanoukville Expressway.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:30 AM​ </td>
                                <td>
                                    Breakfast will be served on the bus and describing the regional and general history of Cambodia by professional tour leader or tour guide along the way.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:00 AM​ </td>
                                <td>
                                    Stop off at Preah Thong Neang Neak statue, Khmer Thver Ban View Point (Khmer can do it), Loved Tree (Doeum Chheu Cham Sne) and transfer to have lunch at local restaurant.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        Afternoon
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">12:00 PM​</td>
                                <td>
                                    Have tasty lunch at local restaurant and enjoy beautiful view of the sea.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">13:15 PM</td>
                                <td>Transfer to relax Otres beach, which is one of the most beautiful beaches in Sihanoukville and have city tour.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">15:15 PM </td>
                                <td>Transfer back to Phnom Penh capital city.</td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM​ </td>
                                <td>Arrive at Phnom Penh with fun trip and the best memory.</td>
                            </tr>
                        </tbody>
                    </table>



                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk8.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/sihanouk/sihanouk10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
             
             `,

             `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH- KOH THANSUR(HEAVEN ISLAND) (3DAYS-2NIGHTS)</h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Preah Sihanouk province is located in southwestern part of the country. It is about 226,4 kilometers from Phnom Penh via National Road No 4 across Kandal, Koh Kong, and Kampong Speu provinces; it is 187.5 kilometers via Phnom Penh-Sihanoukville Expressway. This province covers 2528, 58 square kilometers and it is subdivided into 3 districts, 23 communes, 111 villages. The current record of population is almost 292404 (2018). The city of this province is named Preah Sihanouk. Mostly, people live on trading and fishing. The key feature of this coastal province is the port, which facilitates international trades, exporting and importing. There are many tourist attractions, such as Kbal Chhay waterall, Ream beach, Chumteav Mao beach, Hawai Beach, Otres beach, Ochheuteal beach, Sokha beach, New beach, Derm Chrey beach, Independence beach, Koh Rong island, Thansur island, and Prince island, etc.
                    </p>
                </div>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 1:PHNOM PENH –SIHANOUKVILLE-KOH THANSUR (HEAVEN ISLAND)
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">04:45 AM</td>
                                <td>
                                    ​ Gathering at BELTEI TOURS & TRAVEL and get on the bus.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">05:00 AM​ </td>
                                <td>
                                    Departure from Phnom Penh to Sihanouk Ville.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM​ </td>
                                <td>
                                    Breakfast will be served at on the bus and move to Sihanouk Ville, the most developed province among Cambodian Coastal provinces via Phnom Penh-Sihanoukville Expressway.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 PM​ </td>
                                <td>
                                    Lunch at New Beach or Golden Beach and then transfer to port by speedboat heading for Koh Thansur (Heaven Island), one of the most romantic & privacy beach resort.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">16:30 PM </td>
                                <td>
                                    Arrival of Island, check in and free an easy along the beach.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM​ </td>
                                <td>
                                    Have seafood dinner and do some activities at night and sleep in Bungalow.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 2 :KOH THANSUR( HEAVEN ISLAND) ACTIVITIES
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:00 AM</td>
                                <td>
                                    Breakfast and free as easy on beach ,and enjoy the natural on the island such as Snorkeling ,Kayaking and then lunch.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">14:30 PM</td>
                                <td>Team Building activities by professional organizer.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">15:15 PM </td>
                                <td>BBQ Dinner on the Island with Music Band, dancing, Sky Lantern & Firework.</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM </td>
                                <td>Arrive at Phnom Penh with fun trip and the best memory.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY 3 :KOH THANSUR(HEAVEN ISLAND –SIHANOUK VILLE -PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:00 AM</td>
                                <td>
                                    Breakfast at restaurant and have leisure time on the beach..
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM​ ​</td>
                                <td>After having lunch on Island , check out and transfer to the boat.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:30 PM </td>
                                <td>Departure from Island to Sihanouk Ville port & Phnom Penh.</td>
                            </tr>
                            <tr>
                                <td class="width-100">21:00 PM​ </td>
                                <td>Estimated time of arrival of Phnom Penh.</td>
                            </tr>
                        </tbody>
                    </table>



                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur1.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur2.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur3.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur4.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur5.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur6.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur7.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur8.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur9.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kohthansur/kohthansur10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
             `,


             `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-KAMPOT-KEP (DAY TRIP)</h4>



                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        Morning
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:30 AM​</td>
                                <td>
                                    ​ ​Departure from Phnom Penh to Kampot province describing the across regional and general history of Cambodia by professional tour guide and other entertaining activities on the bus..
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM </td>
                                <td>
                                    Breakfast will be served on the bus.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">09:50 AM </td>
                                <td>
                                    Visit Tumnup Mlech Resort, Durian Roundabout representing Kampot province, Kampot Riverside View, Seahorse Statue and Salt Field.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:00 AM </td>
                                <td>
                                    The arrival of Kep province , take photo at Sreysor statue and transfer to have tasty lunch at Kep beach local restaurant.
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        Afternoon
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">13:00 PM</td>
                                <td>
                                    Relaxing at the most beautiful Kep beach, swimming in the Sea, Zip Line Coffee at Kep National Park and enjoying the whole Kep city view.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM</td>
                                <td>Transfer back to Phnom Penh Capital City.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">20:40 PM​ </td>
                                <td>Arrive at Phnom Penh with fun trip and the best memory.</td>
                            </tr>
                        </tbody>
                    </table>



                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep03.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kep/kep10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,

             `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-KAMPOT ( 2DAYS-1NIGHTS)</h4>

                <div>
                    <p class="text-start indent-1rem pb-2">
                        Kampot is a province in southwest Cambodia. From Phnom Penh via National Road No 3 across Kandal, Takeo, and Kampong Speu provinces. It covers an area of 4,873 square kilometers subdivided into 7 districts, 85 communes, and 491 villages. The total population of this province is approximately 593,829.Its city is Kampot. Most people work in agricultural and fishery sectors such as durian plantation, black pepper planting, or fishing. Some impressive tourist sites include, Kampot Museum, Preah Monivong Bokor National Park, Sampov Pram Pagoda, Kampong, Popokvil Warerfall, Trach Mountain Resort, Phnom Chhngok Cave Temple, Daung Te Resort,Tada Water,Trapeang Sangae community Based Ecotourism,La Plantation,Durian Plantation,Seaahorse Landmark.
                    </p>
                </div>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY1:PHNOM PENH-KAMPOT
                    </h6>

                    
                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">06:30 AM</td>
                                <td>
                                    ​ Gather at Cambodia Railway Station.
                                    .
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM​ </td>
                                <td>
                                    Departure from Phnom Penh to Kampot by train.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:40 AM​ </td>
                                <td>
                                    Arrive at Kampot province and transfer to have lunch.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">12:50 AM​ </td>
                                <td>
                                    Visit Kampot riverside, Seahorse landmark, and enjoy viewing salt field.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 AM​ </td>
                                <td>
                                    Transfer to check the Kampot View Boutique Hotel and relax.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">17:00 AM​ </td>
                                <td>
                                    Enjoy river cruise, sunset and back to have BBQ dinner at the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 PM​ </td>
                                <td>
                                    Relax and sleep overnight in the hotel.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY2: KAMPOT-PREAH MONIVONG BOKOR NATIONAL PARK-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:00 AM</td>
                                <td>
                                    After having breakfast in the hotel, transfer to visit Bokor city: Bokor Cotolic Church, 100 Rice Fields, nice View of Le Bokor Palace.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 AM</td>
                                <td>Have lunch at Thansur Bokor hotel and check out the hotel.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 PM​  </td>
                                <td>Transfer back to Phnom Penh Capital City.</td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM​ </td>
                                <td>Arrive at Phnom Penh with fun trip and the best memory.</td>
                            </tr>
                        </tbody>
                    </table>



                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport03.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

             `,


             `
             <div>

                <h4 class="title-translate-font mb-3 underline">PHNOM PENH-KEP-KAMPOT-PREAH MONIVONG BOKOR NATIONAL PARK ( 3DAYS-2NIGHTS)</h4>

                <div>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY1: PHNOM PENH-KEP-KAMPOT
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">05:00 AM</td>
                                <td>Gather at BELTEI TOURS & TRAVEL.</td>
                            </tr>
                            <tr>
                                <td class="width-100">05:30 AM </td>
                                <td>Departure from Phnom Penh to Kep and Kampot describing regional and general Cambodia history.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">07:00 AM​  </td>
                                <td>Breakfast will be served on the bus.</td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 AM​ </td>
                                <td>Arrive at Kampot province and then visit Kampot Riverside, Durian Roundabout Landmark, and Seahorse Statue</td>
                            </tr>
                            <tr>
                                <td class="width-100">11:50 AM​ ​ </td>
                                <td>Transfer to have lunch at local restaurant after that visit Salt Field in Kampot.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">13:30 PM </td>
                                <td>Transfer to check in Rock Royal hotel and relax.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">15:00 PM </td>
                                <td>Visit Sreysor Statue, the most beautiful Kep beach, and Zip Line Coffee.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:00 PM </td>
                                <td>Transfer to have seafood dinner at kep local restaurant.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">19:30 PM </td>
                                <td>Transfer back to the hotel.
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY2: ANGKOL BEACH-PREAH MONIVONG BOKOR NATIONAL PARK-WAT SAMPOV PRAM
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:30 AM</td>
                                <td> ​After having breakfast in the hotel, transfer to visit Angkaol beach, beautiful beach in Kep.</td>
                            </tr>
                            <tr>
                                <td class="width-100">10:30 AM</td>
                                <td>Have tasty lunch at local restaurant.</td>
                            </tr>
                            <tr>
                                <td class="width-100">12:00 PM </td>
                                <td>Transfer to Preah Monivong Bokor National Park.</td>
                            </tr>
                            <tr>
                                <td class="width-100">14:30 PM </td>
                                <td>Arriving at Bokor city, visit Wat Sampov Pram and check in Thansur Bokor hotel.</td>
                            </tr>
                            <tr>
                                <td class="width-100">16:00 PM </td>
                                <td>Transfer to visit Bokor Cotolic Church, Le Bokor Palace on the top of Bokor Mountain.</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 class="bg-primary py-3 mt-4 text-white">
                        DAY3: BOKOR CITY-100 RICE FIELDS- NEPENTHES MIRABILIS GARDEN-PHNOM PENH
                    </h6>

                    <table class="text-start table table-striped">
                        <tbody>
                            <tr>
                                <td class="width-100">07:30 AM​</td>
                                <td>After having breakfast, visit Bokor city,100 Rice-Fields, and Nepenthes Mirabilis.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">11:30 AM</td>
                                <td>
                                    Have lunch at Thansur Bokor hotel and check out.

                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">14:00 AM</td>
                                <td>
                                    Transfer back to Phnom Penh Capital City.
                                </td>
                            </tr>
                            <tr>
                                <td class="width-100">18:30 PM</td>
                                <td>
                                    Arrive at Phnom Penh with fun trip and the best memory.

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="container p-3">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport01.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport02.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport03.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport04.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport05.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport06.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport07.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport08.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport09.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 ">
                                    <img class="w-100 rounded shadow-sm"
                                        src="{{ asset('asset/img/tours/domestic/expatrate/detail/kamport/kamport10.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

             `

             


        ]

        content.innerHTML = ElementArr[id - 1];
    </script>
@endsection
