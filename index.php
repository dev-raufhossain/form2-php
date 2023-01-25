
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card  bg-warning">
                    <div class="card-header">
                        <h3 class="mb-0">Registered form</h3>
                    </div>
                    <div class="card-body">
                       

                        <form method="post" action="data.php" enctype="multipart/form-data">
                            <label for="" class="w-100 mt-1">
                                Full Name
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">

                            </label>

                            <label for="" class="w-100 mt-1">
                                Select Your City
                                <select name="city" class="form-select mt-2">
                                    <option disabled>Select City</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Seleat">Seleat</option>
                                    <option value="Rajshai">Rajshai</option>
                                    <option value="Khulna">Khulna</option>
                                </select>
                            </label>
                            <label for="" class="mt-2">
                                Select Gender
                                <div class="d-flex mt-2">
                                    <span class="me-3"><input type="radio" value="male" id="" name="gender">Male</span>
                                    <span class="me-3"><input type="radio" value="female" id="" name="gender">Female</span>
                                    <span class="me-3"><input type="radio" value="other" id="" name="gender">Other</span>
                                </div>
                            </label>
                            <label for="" class="mt-2">
                                Select Language
                                <div class="d-flex mt-2">
                                    <span class="me-3"><input type="checkbox" value="html" id="" name="language[]">Html</span>
                                    <span class="me-3"><input type="checkbox" value="css" id="" name="language[]">css</span>
                                    <span class="me-3"><input type="checkbox" value="php" id="" name="language[]">php</span>
                                    <span class="me-3"><input type="checkbox" value="javascript" id="" name="language[]">javascript</span>
                                    <span class="me-3"><input type="checkbox" value="Bootstrap" id="" name="language[]">Bootstrapt</span>
                                </div>
                            </label>
                            <label for="" class="w-100 mt-1">
                                Upload Your Photo
                                <input type="file" id="photo" name="image" class="form-control" placeholder="Enter Your photo">
                            </label>

                            <div class="img_preview mt-2" style="display: none;" id="show">
                                <img id="img_preview"   alt="" class="img-thumbnail">
                            </div>


                            <div class="d-grid mt-2">
                                <button type="submit" class="btn btn-outline-primary mt-2">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
$('#photo').on('change', function(e) {
    let photo = URL.createObjectURL(e.target.files[0]);
    $('#show').show();
    $('#img_preview').attr('src', photo);


});
    </script>
</body>

</html>