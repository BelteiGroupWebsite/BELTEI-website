@extends('web.client.beltei_university.layout.app')


@section('content')
    <style>
        .subjects th {
            background-color: #FFC62A;
        }

        .subjects tr td:nth-child(odd) {
            text-align: left;
        }
    </style>

    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline Blue-color">
            {{ __('beltei_university/mainprogram/prebachelor.chinese-course') }}</h2>
        <div class=" my-2 text-center">
            <img class="w-80" src="{{ asset('asset/img/university/main_degree/chinese/logo.png') }}" alt="">
        </div>

        <div class="chinese-detail">
            <div>
                <p>{{ __('beltei_university/mainprogram/prebachelor.chinese-detail') }}</p>
            </div>
            <div>
                <table class="subjects">
                    <tbody>
                        <tr>
                            <th>វគ្គទី១</th>
                            <th>ក្រេឌីត</th>
                            <th>Course 1</th>
                            <th>Credits</th>
                        </tr>
                        <tr>
                            <td>១. ភាសាចិនទូទៅ ១</td>
                            <td>៣</td>
                            <td>1. Core Chinese I</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>២. បំណិនស្តាប់ភាសាចិន ១</td>
                            <td>៣</td>
                            <td>2. Chinese Listening Skills I</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>៣. បំណិននិយាយភាសាចិន ១</td>
                            <td>៣</td>
                            <td>3. Chinese Speaking Skills I</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>៤. បំណិនអំណាន និងសំណេរភាសាចិន ១</td>
                            <td>៣</td>
                            <td>4. Chinese Reading & Writing Skills I</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>៥. តេស្តសមត្ថភាពភាសាចិន កម្រិតទី១ (HSK1)</td>
                            <td>៣</td>
                            <td>5. Chinese Proficiency Test, Level 1 (HSK1)</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <th>វគ្គទី២</th>
                            <th>ក្រេឌីត</th>
                            <th>Course 2</th>
                            <th>Credits</th>
                        </tr>
                        <tr>
                            <td>១. ភាសាចិនទូទៅ ២</td>
                            <td>៣</td>
                            <td>1. Core Chinese II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>២. បំណិនស្តាប់ភាសាចិន ២</td>
                            <td>៣</td>
                            <td>2. Chinese Listening Skills II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>៣. បំណិននិយាយភាសាចិន ២</td>
                            <td>៣</td>
                            <td>3. Chinese Speaking Skills II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>៤. បំណិនអំណាន និងសំណេរភាសាចិន ២</td>
                            <td>៣</td>
                            <td>4. Chinese Reading & Writing Skills II</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>៥. តេស្តសមត្ថភាពភាសាចិន កម្រិតទី១ (HSK1)</td>
                            <td>៣</td>
                            <td>5. Chinese Proficiency Test, Level 1 (HSK1)</td>
                            <td>3</td>
                        </tr>
                        <tr style="font-weight: bold;">
                            <td>Total</td>
                            <td>30 <br> Credits</td>
                            <td>Total</td>
                            <td>30 <br> Credits</td>
                        </tr>
                    </tbody>
                </table>
                <table class="subjects">
                    <tbody>
                        <tr>
                            <th>第一学期</th>
                            <th>学分</th>
                            <th>第二学期</th>
                            <th>学分</th>
                        </tr>
                        <tr>
                            <td>1. 中文综合（一）</td>
                            <td>3</td>
                            <td>1. 中文综合（二） </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>2. 中文听力（一） </td>
                            <td>3</td>
                            <td>2. 中文听力（二）</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3. 中文口语（一） </td>
                            <td>3</td>
                            <td>3. 中文口语（二）</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4. 中文读写（一） </td>
                            <td>3</td>
                            <td>4. 中文读写（二） </td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>5. 中文水平考试一级（HSK1） </td>
                            <td>3</td>
                            <td>5. 中文水平考试一级（HSK2） </td>
                            <td>3</td>
                        </tr>

                        <tr style="font-weight: bold;">
                            <td>全部的</td>
                            <td>15 </td>
                            <td>全部的</td>
                            <td>15 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2 class="title-translate-font my-3 underline Blue-color">
            {{ __('beltei_university/mainprogram/prebachelor.header') }}</h2>

        <div class="row my-2">
            <div class="col-8 d-flex align-items-center">
                <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/1.png') }}" alt="">
            </div>
            <div class="col-4">
                <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/2.png') }}" alt="">
            </div>
        </div>

        <div class="text-start content-translate-font  text-justify indent-1rem">
            {!! __('beltei_university/mainprogram/prebachelor.description') !!}
        </div>

        <div class="row my-2">
            <div class="col-4 my-2">
                <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/3.png') }}" alt="">
            </div>
            <div class="col-4 my-2">
                <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/4.png') }}" alt="">
            </div>
            <div class="col-4 my-2">
                <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/5.png') }}" alt="">
            </div>
            <div class="col-12">
                <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/6.png') }}" alt="">
            </div>
        </div>




    </div>
@endsection
