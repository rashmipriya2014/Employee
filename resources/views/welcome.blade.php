<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Employee Details</h2>
            <form action="{{route('add_emp')}}" method="post">
                @csrf
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="emp_name"> Employee Name:</label>
                            <input type="text" class="form-control" id="emp_name" name="emp_name">
                        </div>
                    </div>
                </div>

                <!-- Row 2  -->
                <div class="row">   
                    <h3>Address Details </h3>                 
                    <div class="col-md-4">                        
                        <div class="form-group">
                            <label for="address_1">Address 1</label>
                            <input type="text" class="form-control" id="address_1" name="address_1" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address_2">Address 2</label>
                            <input type="text" class="form-control" id="address_2" name="address_2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                    </div>
                </div>
                
                <!-- Row 3  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="postal_code">Zip / Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="postal_area">Postal Area</label>
                            <input type="text" class="form-control" id="postal_area" name="postal_area">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="taluka">Taluka</label>
                            <input type="text" class="form-control" id="taluka" name="taluka">
                        </div>
                    </div>
                </div>

                <!-- Row 4  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="suburb">Suburb</label>
                            <input type="text" class="form-control" id="suburb" name="suburb">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="direction">East/ West</label>
                            <input type="text" class="form-control" id="direction" name="direction">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                    </div>
                </div>

                <!-- Row 5 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" id="district" name="district">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="state">State</label>
                            <select name="state" class="form-control">
                                <option>Maharastra</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select name="country" class="form-control">
                                <option>India</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Row 6 -->
                <div class="row">
                    <!-- Mobile Number -->
                    <div class="col-md-4" id="mobile_wrap">
                        <h3>Mobile Number  <i class="fa fa-plus-circle" style="font-size:24px" onclick="addField('mobile','primary_mobile','mobile_wrap','text')"></i> </h3>
                        <div class="form-group">
                            <div class="radio">
                                <label><input type="radio" name="primary_mobile" checked value="0">Primary</label>
                            </div>
                            
                            <input type="text" class="form-control" id="usr" name="mobile[0]">
                        </div>
                    </div>

                    <!-- Whatsapp Number -->
                    <div class="col-md-4" id="whatsapp_wrap">
                        <h3>WhatsApp Number <i class="fa fa-plus-circle" style="font-size:24px"  onclick="addField('whatsapp','primary_whatsapp','whatsapp_wrap','text')"></i> </h3>
                        <div class="form-group">
                            <div class="radio">
                                <label><input type="radio" value="0" name="primary_whatsapp" checked>Primary</label>
                            </div>
                            
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp[0]">
                        </div>
                    </div>

                    <!-- Email Nmber -->
                    <div class="col-md-4" id="email_wrap">
                        <h3>Email <i class="fa fa-plus-circle" style="font-size:24px" onclick="addField('email','primary_email','email_wrap','email')"></i> </h3>
                        <div class="form-group">
                            <div class="radio">
                                <label><input type="radio" name="primary_email" checked value="0">Primary</label>
                            </div>                            
                            <input type="email" class="form-control" id="email" name="email[0]">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

            <script>
                var count = 0;
                function addField(inp_name,imp_radio,append_id,inp_type){

                    var txt =   '<div class="form-group">'+
                                    '<div class="radio">'+
                                        '<label><input type="radio" value="'+ ++count+'"name="'+imp_radio+'">Primary</label>'+
                                    '</div>'+                            
                                    '<input type="'+inp_type+'" class="form-control" id="usr" name="'+inp_name+'['+count+']">'+
                                    '<i class="fa fa-minus-circle" style="font-size:24px" onclick="removeFiled(this)"></i>'+
                                '</div>';

                    $('#'+append_id).append(txt);

                }

                function removeFiled(elm){
                    $(elm).closest("div").remove();
                }
            </script>
    </body>
</html>
