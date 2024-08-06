@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>

        <h5 class="title-translate-font mb-4 ">សកលវិទ្យាល័យ ដែលបានចុះអនុស្សារណៈយោគយល់ (MOU) ក្រៅប្រទេស</h5>

        {{-- <table class="align-middle table table-hover" style="border: 3px solid red;" width="100%" align="center">
            <tbody>
                <tr>
                    <td class="label" style="text-align: center; background-color:green;font-size: 120%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/usa_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            សហរដ្ឋអាមេរិក</span> <span
                            style="color: yellow;font-size: 120%;font-family: Algerian;">(USA)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.shoreline.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/shoreline_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.shoreline.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/beltei_mou_with_shoreline.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="https://smccd.edu/international/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/san-mtao-university.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.shoreline.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/beltei-mou-with-san-mtao-university.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៣</td>
                    <td width="50%"><a href="http://www.edcc.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/edmonds_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.edcc.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/edmonds_pic.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៤</td>
                    <td width="50%"><a href="http://www.ef.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/ef_logo.png') }}" border="0"></a>
                    </td>
                    <td><a href="http://www.ef.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/ef_pic.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">៥</td>
                    <td width="50%"><a href="http://www.mheducation.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/magraw_hill_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.mheducation.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/magraw_hill_logo.png') }}"
                                border="0" width="157" height="75"></a></td>
                </tr>
                <tr>
                    <td width="10%">៦</td>
                    <td width="50%"><a href="http://etstan.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/ets_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://etstan.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/beltei_toefl.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/uk_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            ចក្រភពអង់គ្លេស</span><span style="color: yellow;font-size: 120%;font-family: Algerian;">
                            (UK)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.regents.ac.uk/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/regent_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.regents.ac.uk/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/regent.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="https://www.yorksj.ac.uk/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/york_john_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="https://www.yorksj.ac.uk/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/york_saint_john.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៣</td>
                    <td width="50%"><a href="https://www.ctc.ac.uk/en/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/ctc_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="https://www.ctc.ac.uk/en/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/ctc.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">៤</td>
                    <td width="50%"><a href="http://www4.springboard4asia.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/springboard_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www4.springboard4asia.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/beltei_mou_with_springboard.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 120%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/canada_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            កាណាដា</span> <span
                            style="color: yellow;font-size: 120%;font-family: Algerian;">(CANADA)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="https://ucanwest.ca/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/university_canada_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="https://ucanwest.ca/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/university_canada.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/malaysia_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            ប្រទេសម៉ាឡេស៊ី</span><span style="color: yellow;font-size: 120%;font-family: Algerian;">
                            (Malaysia)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.unikl.edu.my/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/kuala_lumpur_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.unikl.edu.my/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/unikl.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="http://www.taylors.edu.my/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/taylor_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.taylors.edu.my/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/taylor.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/china_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            សាធារណៈរដ្ឋប្រជាមានិតចិន</span><span
                            style="color: yellow;font-size: 120%;font-family: Algerian;"> (China)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.csc.edu.cn/studyinchina/universitydetailen.aspx?collegeId=52"
                            target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_medical_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.csc.edu.cn/studyinchina/universitydetailen.aspx?collegeId=52"
                            target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_medical_logo.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="http://www.gxufl.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_foreign_language_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.gxufl.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_foreign_language.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៣</td>
                    <td width="50%"><a href="http://www.gxun.edu.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_national_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.gxun.edu.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_national.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៤</td>
                    <td width="50%"><a href="http://en.glut.edu.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guilin_technology_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://en.glut.edu.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guilin_technology.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៥</td>
                    <td width="50%"><a href="http://departs.guat.edu.cn/gjc/en/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guilin_aerospace_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://departs.guat.edu.cn/gjc/en/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guilin_aerospace.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៦</td>
                    <td width="50%"><a href="http://www.glit.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guilin_tourism_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.glit.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guilin_tourism.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៧</td>
                    <td width="50%"><a href="http://www.ymcn.gx.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/youjiang_medical_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.ymcn.gx.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/youjiang_medical.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៨</td>
                    <td width="50%"><a href="http://www.cuecc.com/SchoolDetail/604/guizhou-medical-university"
                            target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guizhou_medical_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.cuecc.com/SchoolDetail/604/guizhou-medical-university" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guizhou_medical.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៩</td>
                    <td width="50%"><a href="http://en.whu.edu.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/wuhan_uni_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://en.whu.edu.cn/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/wuhan_uni.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">១០</td>
                    <td width="50%"><a href="http://www.csc.edu.cn/studyinchina/universitydetailen.aspx?collegeId=352"
                            target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_teacher_university_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.csc.edu.cn/studyinchina/universitydetailen.aspx?collegeId=352"
                            target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/guangxi_teacher_university.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/singapore_flage.png') }}"
                            border="0" width="40" height="30" style="vertical-align:middle;"><span
                            style="color: yellow;"> ប្រទេសិង្ហបុរី</span><span
                            style="color: yellow;font-size: 120%;font-family: Algerian;"> (singapore)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.easb.edu.sg/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/easb_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.easb.edu.sg/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/easb.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/korea_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            សាធារណៈរដ្ឋកូរ៉េ</span><span style="color: yellow;font-size: 120%;font-family: Algerian;">
                            (Korea)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.iyf.org/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/iyf_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.iyf.org/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/iyf.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="https://www.smu.ac.kr/mbs/smu/intro.jsp" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/sangmyung_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="https://www.smu.ac.kr/mbs/smu/intro.jsp" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/sangmyung.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៣</td>
                    <td width="50%"><a href="http://www.sunykorea.ac.kr/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/sunykorea_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.sunykorea.ac.kr/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/sunykorea.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/japanese_flag.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            ប្រទេសជប៉ុន</span><span style="color: yellow;font-size: 120%;font-family: Algerian;">
                            (Japan)<br></span></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="https://www.hosei.ac.jp/english/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/hosei_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="https://www.hosei.ac.jp/english/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/hosei.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="http://www.u-fukui.ac.jp/eng/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/fukui_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.u-fukui.ac.jp/eng/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/fukui.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><img
                            src="{{ asset('asset/img/university/mou/international/thai_flage.png') }}" border="0"
                            width="40" height="30" style="vertical-align:middle;"><span style="color: yellow;">
                            ព្រះរាជាណាចក្រថៃ</span><span style="color: yellow;font-size: 120%;font-family: Algerian;">
                            (Kingdom of Thailand)<br></span></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://www.graduate.au.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/assumption_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.graduate.au.edu/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/assumption.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a href="http://www.bu.ac.th/tha/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/bangkok_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.bu.ac.th/tha/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/bangkok.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">៣</td>
                    <td width="50%"><a href="http://www.utcc.ac.th/admission/2016/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/utcc_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.utcc.ac.th/admission/2016/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/utcc.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">៤</td>
                    <td width="50%"><a href="http://www.eng.rmutt.ac.th/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/rajamangala_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="http://www.eng.rmutt.ac.th/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/international/rajamangala.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td class="label"
                        style="text-align: center; background-color:green;font-size: 110%;font-family: Koulen;"
                        colspan="3" width="70%"><span style="color: yellow;">ពានរង្វាន់ដែលទទួលបាន</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a
                            href="/biuk/index.php?option=com_content&amp;view=article&amp;id=1080&amp;Itemid=665"><img
                                src="{{ asset('asset/img/university/mou/international/iso_9001_2008_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="/biuk/index.php?option=com_content&amp;view=article&amp;id=1080&amp;Itemid=665"><img
                                src="{{ asset('asset/img/university/mou/international/iso_9001_2008.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a
                            href="/biuk/index.php?option=com_content&amp;view=article&amp;id=1086&amp;Itemid=665"><img
                                src="{{ asset('asset/img/university/mou/international/tayo_logo.png') }}" border="0">
                        </a></td>
                    <td><a href="/biuk/index.php?option=com_content&amp;view=article&amp;id=1086&amp;Itemid=665"><img
                                src="{{ asset('asset/img/university/mou/international/tayo.png') }}" border="0"></a>
                    </td>
                </tr>
                <tr>
                    <td width="10%">៣</td>
                    <td width="50%"><a
                            href="/biuk/index.php?option=com_content&amp;view=article&amp;id=1714&amp;Itemid=665"><img
                                src="{{ asset('asset/img/university/mou/international/asean_logo.png') }}"
                                border="0"></a></td>
                    <td><a href="/biuk/index.php?option=com_content&amp;view=article&amp;id=1714&amp;Itemid=665"><img
                                src="{{ asset('asset/img/university/mou/international/asean_pic.png') }}"
                                border="0"></a></td>
                </tr>
            </tbody>
        </table> --}}

        <table class="table table-hover table-bordered text-center vertical-align-middle">
            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/english.png') }}" alt="">
                    ចក្រភពអង់គ្លេស (United Kingdom)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/uk/Logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/uk/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://ctc.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/uk/Logo/2.png') }}" alt="Link to CTC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/uk/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://www.yorksj.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/uk/Logo/3.png') }}" alt="Link to York St John"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/uk/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://www.regents.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/uk/Logo/4.png') }}" alt="Link to Regents"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/uk/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://www.gcs.ac.uk/cy/tags/coleg-g%C5%B5yr-abertawe"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/uk/Logo/5.png') }}" alt="Link to GCS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/uk/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>


            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/usa.png') }}" alt="">
                    សហរដ្ឋអាមេរិក (USA)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.angelo.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/2.png') }}" alt="Link to Angelo State University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://www.cisco.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/3.png') }}" alt="Link to Cisco"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://www.highline.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/4.png') }}" alt="Link to Highline College"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://nau.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/5.png') }}" alt="Link to Northern Arizona University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="https://www.smccd.edu/international/smcsv.php"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/6.png') }}" alt="Link to SMCC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/6.jpg') }}" alt="Image 6" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="https://www.edmonds.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/7.png') }}" alt="Link to Edmonds College"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/7.jpg') }}" alt="Image 7" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="https://www.shoreline.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/8.png') }}" alt="Link to Shoreline Community College"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/8.jpg') }}" alt="Image 8" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>9</td>
                <td><a href="https://uca.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/9.png') }}" alt="Link to University of Central Arkansas"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/9.jpg') }}" alt="Image 9" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><a href="https://www.ef.com/wwen/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/10.png') }}" alt="Link to EF Education First"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/10.jpg') }}" alt="Image 10" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>11</td>
                <td><a href="https://www.mheducation.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/11.png') }}" alt="Link to McGraw-Hill Education"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/11.jpg') }}" alt="Image 11" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>12</td>
                <td><a href="https://www.seattlecolleges.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/usa/Logo/12.png') }}" alt="Link to Seattle Colleges"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/usa/Photo/12.jpg') }}" alt="Image 12" style="max-height:80px;"></td>
            </tr>




            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/south_korea.png') }}" alt="">
                    កូរ៉េខាងក្បូង (South Korea)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/korea/Logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/korea/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.smu.ac.kr/eng1/index.do"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/korea/Logo/2.png') }}" alt="Link to SMU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/korea/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://en.shinhan.ac.kr/en/index.do"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/korea/Logo/3.png') }}" alt="Link to Shinhan University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/korea/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://www.sunykorea.ac.kr/en/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/korea/Logo/4.png') }}" alt="Link to SUNY Korea"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/korea/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://global.kduniv.ac.kr/global/index.php"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/korea/Logo/5.png') }}" alt="Link to KDU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/korea/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            


            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/newzealand.png') }}" alt="">
                    នូវេលសេឡង់ (New Zealand)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://pihms.ac.nz/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/newZealand/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/newZealand/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>


            


            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/switzerland.png') }}" alt="">
                    ស្វីស (Switzerland)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/switland/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/switland/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/switland/2.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/switland/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            


            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/malaysia.png') }}" alt="">
                    ម៉ាឡេស៊ី (Malaysia)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/malaysia/Logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/malaysia/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.unikl.edu.my/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/malaysia/Logo/2.png') }}" alt="Link to UniKL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/malaysia/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://university.taylors.edu.my/en.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/malaysia/Logo/3.png') }}" alt="Link to Taylor's University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/malaysia/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://study.utar.edu.my/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/malaysia/Logo/4.png') }}" alt="Link to UTAR"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/malaysia/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://mahsa.edu.my/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/malaysia/Logo/5.png') }}" alt="Link to MAHSA University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/malaysia/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="https://worldskills.com.my/about-us/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/malaysia/Logo/6.png') }}" alt="Link to WorldSkills Malaysia"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/malaysia/Photo/6.jpg') }}" alt="Image 6" style="max-height:80px;"></td>
            </tr>


            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                    អូស្រ្តាលី (Australia)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.gre.ac.uk/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/australia/Logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/australia/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.deakin.edu.au/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/australia/Logo/2.png') }}" alt="Link to Deakin University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/australia/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://concordenglishcollege.vic.edu.au/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/australia/Logo/3.png') }}" alt="Link to Concord English College"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/australia/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://sccm.edu.au/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/australia/Logo/4.png') }}" alt="Link to SCCM"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/australia/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>


            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/canada.png') }}" alt="">
                    កាណាដា (Canada)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ucanwest.ca/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/canada/logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/canada/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href=""><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/canada/logo/2.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/canada/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>

            
            

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/singapore.png') }}" alt="">
                    សឹង្ហបុរី (Singapore)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ucanwest.ca/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/singapore/Logo/1.png') }}" alt="Link to MOEYS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/singapore/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.eaim.edu.sg/en/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/singapore/Logo/2.png') }}" alt="Link to EAIM"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/singapore/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://www.sim.edu.sg/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/singapore/Logo/3.png') }}" alt="Link to SIM"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/singapore/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://www.jcu.edu.au/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/singapore/Logo/4.png') }}" alt="Link to JCU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/singapore/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://ega.edu.sg/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/singapore/Logo/5.png') }}" alt="Link to EGA"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/singapore/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>

            

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/japan.png') }}" alt="">
                    ជប៉ុន (Japan)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ucanwest.ca/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/japan/Logo/1.png') }}" alt="Link to UCAN West"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/japan/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.hosei.ac.jp/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/japan/Logo/2.png') }}" alt="Link to Hosei University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/japan/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://www.u-fukui.ac.jp/eng/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/japan/Logo/3.png') }}" alt="Link to University of Fukui"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/japan/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://www.u-hyogo.ac.jp/english/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/japan/Logo/4.png') }}" alt="Link to University of Hyogo"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/japan/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://yanagigaura.ed.jp/en/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/japan/Logo/5.png') }}" alt="Link to Yanagigaura"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/japan/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            
                        

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/thailand.png') }}" alt="">
                    ថៃ (Thailand)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ucanwest.ca/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/1.png') }}" alt="Link to UCAN West"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.au.edu/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/2.png') }}" alt="Link to Assumption University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://www.bu.ac.th/en/international-programs"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/3.png') }}" alt="Link to Bangkok University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://ism.utcc.ac.th/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/4.png') }}" alt="Link to UTCC ISM"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://www.eng.rmutt.ac.th/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/5.png') }}" alt="Link to RMUTT"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="https://www.aihm.education/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/6.png') }}" alt="Link to AIHM"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/6.jpg') }}" alt="Image 6" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="https://www.pim.ac.th/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/7.png') }}" alt="Link to PIM"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/7.jpg') }}" alt="Image 7" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="https://asaihl.stou.ac.th/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/8.png') }}" alt="Link to ASAIHL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/8.jpg') }}" alt="Image 8" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>9</td>
                <td><a href="https://www.thebritishcollege.edu.np/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/9.png') }}" alt="Link to The British College"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/9.jpg') }}" alt="Image 9" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><a href="https://dtc.ac.th/en/home/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/10.png') }}" alt="Link to DTC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/10.jpg') }}" alt="Image 10" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>11</td>
                <td><a href="https://nurturehighered.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/thailand/Logo/11.png') }}" alt="Link to Nurture Higher Ed"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/thailand/Photo/11.jpg') }}" alt="Image 11" style="max-height:80px;"></td>
            </tr>

                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/china.png') }}" alt="">
                    ចិន (China)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://english.gxufl.edu.cn/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/2.png') }}" alt="Link to English GXUFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.chinauniversityjobs.com/employer/guilin-university-of-technology/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/3.png') }}" alt="Link to Guilin University of Technology"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://en.whu.edu.cn/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/4.png') }}" alt="Link to WHU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="http://kq.gxmu.edu.cn/html/Home/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/5.png') }}" alt="Link to GXMU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/5.jpg') }}" alt="Image 5" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><a href="https://www.ncku.edu.tw/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/6.png') }}" alt="Link to NCKU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/6.jpg') }}" alt="Image 6" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><a href="https://gjc.gxmzu.edu.cn/info/1141/3171.htm"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/7.png') }}" alt="Link to GJCGXMZU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/7.jpg') }}" alt="Image 7" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><a href="https://www.digiedupro.com/youjiang-medical-university-for-nationalities/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/8.png') }}" alt="Link to Youjiang Medical University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/8.jpg') }}" alt="Image 8" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><a href="https://english.gmc.edu.cn/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/9.png') }}" alt="Link to GMC"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/9.jpg') }}" alt="Image 9" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>9</td>
                <td><a href="https://www.isacteach.com/university/guilin-tourism-university/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/10.png') }}" alt="Link to Guilin Tourism University"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/10.jpg') }}" alt="Image 10" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><a href="https://gjc.nnnu.edu.cn/info/1003/1132.htm"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/11.png') }}" alt="Link to NNNU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/11.jpg') }}" alt="Image 11" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>11</td>
                <td><a href="http://en.bfsu.edu.cn/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/12.png') }}" alt="Link to BFSU"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/12.jpg') }}" alt="Image 12" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>12</td>
                <td><a href="http://www.hbsdtech.com/index/index.html?l=en-us"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/china/Logo/13.png') }}" alt="Link to HBSD Tech"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/china/Photo/13.jpg') }}" alt="Image 13" style="max-height:80px;"></td>
            </tr>
            

                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/indonesia.png') }}" alt="">
                    ប្រទេសឥណ្ឌូនេស៊ី (Indonesia)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://english.gxufl.edu.cn/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/indonesia/1.png') }}" alt="Link to English GXUFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/indonesia/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            

                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/testcenter.png') }}" alt="">
                    មជ្ឈមណ្ឌលតេស្តអន្តរជាតិ (Test Center)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ets.org/toefl.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/testcenter/Logo/1.png') }}" alt="Link to TOEFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/testcenter/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="https://www.ets.org/gre.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/testcenter/Logo/2.png') }}" alt="Link to GRE"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/testcenter/Photo/2.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="https://takeielts.britishcouncil.org/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/testcenter/Logo/3.png') }}" alt="Link to IELTS"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/testcenter/Photo/3.jpg') }}" alt="Image 3" style="max-height:80px;"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="https://skillsforenglish.com/"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/testcenter/Logo/4.png') }}" alt="Link to Skills for English"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/testcenter/Photo/4.jpg') }}" alt="Image 4" style="max-height:80px;"></td>
            </tr>
            

                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/bangladesh.png') }}" alt="">
                    ប្រទេសបង់ក្លាដែស (bangladesh)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ets.org/toefl.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/bangladesh/1.jpg') }}" alt="Link to TOEFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/bangladesh/1.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>

                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/france.png') }}" alt="">
                    ប្រទេសបារាំង (Franch)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ets.org/toefl.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/franch/1.png') }}" alt="Link to TOEFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/franch/Photo/1.jpg') }}" alt="Image 1" style="max-height:80px;"></td>
            </tr>
                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/poland.png') }}" alt="">
                    ប្រទេសប៉ូឡូញ (Poland)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ets.org/toefl.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/poland/1.png') }}" alt="Link to TOEFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/poland/1.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
                                    

            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/vietnam.png') }}" alt="">
                    វៀតណាម (Vietnam)
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="https://www.ets.org/toefl.html"><img style="max-height:80px;" src="{{ asset('asset/img/university/app/collaborate/vietnam/1.png') }}" alt="Link to TOEFL"></a></td>
                <td><img src="{{ asset('asset/img/university/app/collaborate/vietnam/1.jpg') }}" alt="Image 2" style="max-height:80px;"></td>
            </tr>
            
        </table>

    </div>
@endsection
