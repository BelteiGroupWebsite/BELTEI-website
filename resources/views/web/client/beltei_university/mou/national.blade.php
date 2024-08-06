@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>

        <h5 class="title-translate-font mb-4">សកលវិទ្យាល័យ ដែលបានចុះអនុស្សារណៈយោគយល់ (MOU) ក្នុងប្រទេស</h5>

        {{-- <table class="text-center align-middle table table-hover" style="border: 3px solid red;" width="100%" align="center">
            <tbody>
                <tr>
                    <td class="label" style="text-align: center; background-color:green;font-size: 120%;font-family: Koulen;"
                        colspan="3" width="70%"><img src="{{ asset('asset/img/university/mou/national/cambodia-flag.png') }}"
                            border="0" width="40" height="30" style="vertical-align:middle;"><span
                            style="color: yellow;"> ប្រទេសកម្ពុជា</span> <span
                            style="color: yellow;font-size: 120%;font-family: Algerian;">(Cambodia)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">1</td>
                    <td width="50%"><a href="http://libraryhub.org/"
                            target="_blank"><img src="{{ asset('asset/img/university/mou/national/library-hub.png') }}"
                                border="0"></a></td>
                    <td style="text-align: center;"><a href="http://libraryhub.org/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/beltei-international-university-in-cambodia-library-hub.png') }}"
                                border="0"></a></td>
                </tr>[]
                <tr>
                    <td width="10%">2</td>
                    <td width="50%"><a
                            href="http://www.pachemdental.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/pachem-detal-clinic.png') }}" border="0"></a></td>
                    <td style="text-align: center;"><a href="http://www.pachemdental.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/beltei-international-university-in-cambodia-pachem-dental.png') }}"
                                border="0"></a></td>
                </tr>
            </tbody>
        </table> --}}

        <table class="table table-hover table-bordered text-center vertical-align-middle">
            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/khmer.png') }}" alt="">
                    ប្រទេសកម្ពុជា​ (CAMBODIA)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://moeys.gov.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://opendevelopmentcambodia.net/tag/cambodian-higher-education-association-chea/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/2.png') }}" alt="Link to Open Development Cambodia"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://consumer.huawei.com/kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/3.png') }}" alt="Link to Huawei"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://libraryhub-manila.blogspot.com/p/home.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/4.png') }}" alt="Link to Library Hub Manila"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://www.wownow-kh.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/5.png') }}" alt="Link to Wownow"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="https://www.gfdexchange.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/6.png') }}" alt="Link to GFD Exchange"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/6.jpg') }}" alt="Image 6" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="https://mrtrainingandjobscenter.com.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/7.png') }}" alt="Link to MR Training and Jobs Center"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/7.jpg') }}" alt="Image 7" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="https://poscardigital.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/8.png') }}" alt="Link to Poscardigital"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/8.jpg') }}" alt="Image 8" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>9</td>
                <td><a href="https://www.firstcambodia.com.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/9.png') }}" alt="Link to First Cambodia"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/9.jpg') }}" alt="Image 9" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><a href="https://www.sofitel-phnompenh-phokeethra.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/10.png') }}" alt="Link to Sofitel Phnom Penh Phokeethra"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/10.jpg') }}" alt="Image 10" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>11</td>
                <td><a href="https://yourshumanly.org/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/11.png') }}" alt="Link to Yours Humanly"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/11.jpg') }}" alt="Image 11" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>12</td>
                <td><a href="https://www.hyatt.com/en-US/hotel/cambodia/hyatt-regency-phnom-penh/pnhrp/rooms"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/12.png') }}" alt="Link to Hyatt Regency Phnom Penh"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/12.jpg') }}" alt="Image 12" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>13</td>
                <td><a href="https://www.rosewoodhotels.com/en/phnom-penh"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/13.png') }}" alt="Link to Rosewood Phnom Penh"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/13.jpg') }}" alt="Image 13" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>14</td>
                <td><a href="https://www.prudential.com.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/14.png') }}" alt="Link to Prudential Cambodia"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/14.jpg') }}" alt="Image 14" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>15</td>
                <td><a href="https://www.pse.ong/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/15.png') }}" alt="Link to PSE"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/15.jpg') }}" alt="Image 15" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>16</td>
                <td><a href="https://mlmupc.gov.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/16.png') }}" alt="Link to MLMUPC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/16.jpg') }}" alt="Image 16" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>17</td>
                <td><a href="https://mptc.gov.kh/en/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/17.png') }}" alt="Link to MPTC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/17.jpg') }}" alt="Image 17" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>18</td>
                <td><a href="https://dmuc.edu.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/18.png') }}" alt="Link to DMUC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/18.jpg') }}" alt="Image 18" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>19</td>
                <td><a href="https://www.marriott.com/en-us/hotels/pnhcy-courtyard-phnom-penh/overview/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/19.png') }}" alt="Link to Marriott Courtyard Phnom Penh"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/19.jpg') }}" alt="Image 19" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>20</td>
                <td><a href="https://www.himawarihotel.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/20.png') }}" alt="Link to Himawari Hotel"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/20.jpg') }}" alt="Image 20" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>21</td>
                <td><a href="https://experteducation.com/australia/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/21.png') }}" alt="Link to Expert Education"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/21.jpg') }}" alt="Image 21" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>22</td>
                <td><a href="https://www.mlvt.gov.kh/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/22.png') }}" alt="Link to MLVT"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/22.jpg') }}" alt="Image 22" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>23</td>
                <td><a href="https://cdc.gov.kh/km/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/23.png') }}" alt="Link to CDC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/23.jpg') }}" alt="Image 23" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>24</td>
                <td><a href="https://www.phnompenhpost.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/24.png') }}" alt="Link to Phnom Penh Post"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/24.jpg') }}" alt="Image 24" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>25</td>
                <td><a href="https://www.rfa.org/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/25.png') }}" alt="Link to Radio Free Asia"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/25.jpg') }}" alt="Image 25" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>26</td>
                <td><a href="https://www.khmerload.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/26.png') }}" alt="Link to Khmerload"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/26.jpg') }}" alt="Image 26" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>27</td>
                <td><a href="https://www.khmertimeskh.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/27.png') }}" alt="Link to Khmer Times"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/27.jpg') }}" alt="Image 27" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>28</td>
                <td><a href="https://www.cambodiadaily.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/28.png') }}" alt="Link to Cambodia Daily"></a></td>
                <td><img src="{{ asset('asset/img/university/app/rightsidebar/cambodia/photo/28.jpg') }}" alt="Image 28" style="max-height:80px;"></td>
            </tr>
        </table>
        
        

    </div>
@endsection
