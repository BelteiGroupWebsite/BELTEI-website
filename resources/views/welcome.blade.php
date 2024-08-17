{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="d-flex justify-content-center ">

        <img style="" src="{{ asset('asset/img/new-structure-beltei-group-official-2019.jpg') }}" alt="">
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html> --}}


<html>

<head>
    <title>BELTEI Group Structure</title>
    <link rel="icon" href="{{ asset('asset/img/beltei_group_in_cambodia.png') }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ua-parser-js/1.0.2/ua-parser.min.js"></script>
</head>

<body>
    <table align="center" border="0">
        <tbody>
            <tr style="text-align: center;">
                <!--<td><img src="images/new structure beltei group 2017.jpg" usemap="#f_inbound_tour" border="0" /></td>-->
                <td><img src="{{ asset('asset/img/new-structure-beltei-group-official-2019.jpg') }}"
                        usemap="#f_inbound_tour" border="0" /></td>
                <!--<td><img src="images/bt-home/frame_inbound_tour.jpg" alt="Inbound_Tour" usemap="#f_inbound_tour" border="0" />-->
                <map name="f_inbound_tour">
                    <area shape="circle" coords="646,68,67" href="beltei_group_logos.html" target="_blank"></a>
                    <area shape="rect" coords="7,279,186,499" href="{{ url('con') }}"></a>
                    <area shape="rect" coords="199,281,368,495" href="{{ url('bis') }}"></a>
                    <area shape="rect" coords="379,282,548,493" href="{{ url('biu') }}"></a>
                    <area shape="rect" coords="560,281,729,495" href="{{ url('bir') }}"></a>
                    <!--<area shape="rect" coords="737,281,909,494" href="https://www.beltei.edu.kh/internationaltests/"></a>-->
                    <area shape="rect" coords="737,281,909,494" href="{{ url('testcenter') }}"></a>
                    <area shape="rect" coords="920,281,1091,496" href="{{ url('tour') }}"></a>
                    <area shape="rect" coords="1114,281,1281,494"
                        href="{{ url('charity') }}"></a>

                </map>
                </td>
            </tr>
            <tr style="text-align: center;">
                <td><img src="{{ asset('asset/img/beltei_motto_khmer.gif') }}" border="0" /></td>
            </tr>
            <tr style="text-align: center;">
                <td><img src="{{ asset('asset/img/beltei_motto_eng.gif') }}" border="0" /></td>
            </tr>
            <tr
                style="text-align: center;color:blue;font-family: Helvetica Condensed;font-size:200%;font-weight: bold";>
                <td>www.beltei.edu.kh</td>
            </tr>
            <tr
                style="text-align: center;color:blue;font-family: Helvetica Condensed;font-size:200%;font-weight: bold";>
                <td><a href="https://belteigroup.com.kh/beltei_group_logos.html" target="_blank">click here to
                        download all BELTEI's Logos<img src="{{ asset('asset/img/beltei-group-logo-download.png') }}"
                            border="0" width="50" height=" 50" /></td></a>
            </tr>
        </tbody>
    </table>

    {{-- {{ $visitors }} --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/device-detector@1.0.2/dist/DeviceDetector.min.js"></script> --}}
    {{-- <p>IP Address: {{ $ip }}</p>
    <p>Public IP Address: {{ $publicIp }}</p> --}}

    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get device information using UAParser.js
            const parser = new UAParser();
            const result = parser.getResult();

            // Gather information
            const data = {
                ip_address: document.getElementById('ip-address').innerText,
                public_ip: document.getElementById('public-ip').innerText,
                user_agent: result.ua,
                platform: result.os.name,
                browser: result.browser.name,
                device: result.device.type || 'desktop'
            };

            // Send data to the server
            fetch('/track-visitor', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
              .then(data => console.log('Success:', data))
              .catch(error => console.error('Error:', error));
        });
    </script> --}}
    
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deviceDetector = new DeviceDetector();
            const userAgent = navigator.userAgent;
            const device = deviceDetector.parse(userAgent);

            const data = {
                ip_address: "{{ $ip }}",
                public_ip: "{{ $publicIp }}",
                user_agent: userAgent,
                platform: device.os.name,
                browser: device.client.name,
                device: device.device.type
            };

            fetch('/track-visitor', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
            }).then(response => response.json())
              .then(data => console.log('Success:', data))
              .catch(error => console.error('Error:', error));
        });
    </script> --}}
    
</body>

</html>
