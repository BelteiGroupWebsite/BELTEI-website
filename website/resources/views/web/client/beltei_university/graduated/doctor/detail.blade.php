<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    


    <div class="image d-flex justify-content-center w-100" id="content-image">

    </div>
    


    
    
    
    @php
        try {
            $id = $_GET['id']; //Retrieve the 'id' parameter from the URL
            $folderPath = public_path("asset/img/university/graduated/doctor/$id");

            $files = glob("{$folderPath}/*");
            $fileCount = count(glob("$folderPath/*"));
            $fileNames = array_map('basename', $files);
            

            //echo "<p>Page <script>x</script> of  $fileCount</p>";
            echo "
            <script>
                var id = '$id';
                var fileCount = $fileCount;
                var fileNames = " . json_encode($fileNames) . ";
            </script>
            ";
        } catch (\Throwable $th) {
            //Handle any exceptions here
        }
    @endphp
    
    

    <script>


        var content = document.getElementById('content-image');
        try {
            
            var images = '';
            images = `

                <table class="table text-center">
                <tbody>
                <tr>
                <td colspan="10"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_1.jpg') }}" alt="${id}"></td>
                </tr>
                
                <tr>
                <td rowspan="4"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_2.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_3.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_4.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_5.jpg') }}" alt="${id}"></td>
                </tr>
                <tr>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_6.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_7.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_8.jpg') }}" alt="${id}"></td>
                </tr>
                <tr>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_9.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_10.jpg') }}" alt="${id}"></td>
                <td colspan="3"><img src="{{ asset('asset/img/university/graduated/doctor/${id}/doctor_11.jpg') }}" alt="${id}"></td>
                
                </tr>
                
                </tbody>
            </table>
                
            `;

            content.innerHTML = images;
            
        } catch (error) {
            
        }
        
        
    </script>
    
    
</body>
</html>