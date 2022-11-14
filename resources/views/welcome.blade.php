<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <title>CoverLetterHQ - AI Powered Cover Letter Generator</title>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <span class="navbar-brand">
                CoverLetterHQ
            </span>
        </div>
    </nav>

    <main>
        <div class="container my-5">
            <p class="fw-bold fs-1 text-center">CoverLetterHQ</p>
            <p class="lead text-center">AI Powered Cover Letter Generator</p>

            <div class="card mb-5">
                <div class="card-body">
                    <form id="detailsForm">
                        <p class="fw-bold fs-4">Candidate Details</p>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
                                </div>
                            </div>

                            {{-- <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="address1" class="form-label">Address 1</label>
                                    <input type="text" class="form-control" id="address1" placeholder="1234 Main St">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="address2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="address2" placeholder="Apartment, studio, or floor">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="postcode" class="form-label">Postcode</label>
                                    <input type="text" class="form-control" id="postcode" placeholder="1234">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" placeholder="Australia">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" placeholder="Victoria">
                                </div>
                            </div> --}}
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="1234">
                                </div>
                            </div>

                            {{-- <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" id="linkedin" placeholder="https://www.linkedin.com/in/johndoe/">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="website" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="website" placeholder="https://www.johndoe.com/">
                                </div>
                            </div> --}}
                        </div>

                        <p class="fw-bold fs-4">Company Details</p>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="hiringManager" class="form-label">Hiring Manager's Name</label>
                                    <input type="text" class="form-control" id="hiringManager" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="companyName" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="companyName" placeholder="Company Name">
                                </div>
                            </div>

                            {{-- <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="companyAddress1" class="form-label">Address 1</label>
                                    <input type="text" class="form-control" id="companyAddress1" placeholder="1234 Main St">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="companyAddress2" class="form-label">Address 2</label>
                                    <input type="text" class="form-control" id="companyAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="companyPostcode" class="form-label">Postcode</label>
                                    <input type="text" class="form-control" id="companyPostcode" placeholder="1234">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="companyCountry" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="companyCountry" placeholder="Australia">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="companyState" class="form-label">State</label>
                                    <input type="text" class="form-control" id="companyState" placeholder="Victoria">
                                </div>
                            </div> --}}
                        </div>

                        <p class="fw-bold fs-4">Applied Position Details</p>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="positionName" class="form-label">Position Name</label>
                                    <input type="text" class="form-control" id="positionName" placeholder="Position Name">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="candidateExperience" class="form-label">Candidate No of Experience</label>
                                    <input type="text" class="form-control" id="candidateExperience" placeholder="Candidate No of Experience">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="candidateSkills" class="form-label">Candidate Skills</label>
                                    <textarea class="form-control" id="candidateSkills" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="candidateAchievements" class="form-label">Candidate Recent Achievements</label>
                                    <textarea class="form-control" id="candidateAchievements" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="candidatePerformance" class="form-label">Things a candidate can perform based on the job description</label>
                                    <textarea class="form-control" id="candidatePerformance" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success bg-info">Generate</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <p class="fw-bold fs-4">Generated Cover Letter</p>

                    <div id="generateAnimation" class="w-100 vh-100 box-shadow-1 bg-white d-none">
                        <div class="d-flex flex-column justify-content-center align-items-center h-100">
                            <div class="spinner-grow mb-3" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="text-muted muli-semi-bold h5">Generating cover letter...</p>
                        </div>
                    </div>

                    <textarea class="form-control" id="generatedCoverLetter" rows="20"></textarea>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js" type="text/javascript"></script>
    <script>
        var detailsForm = $("#detailsForm");
        detailsForm.validate();

        detailsForm.submit(function (e) {
            e.preventDefault();
            if (detailsForm.valid()) {
                $("#generatedCoverLetter").addClass("d-none");
                $("#generateAnimation").removeClass("d-none");

                let formData = new FormData(document.getElementById('detailsForm'));
                formData.append('name', $('#name').val());
                formData.append('email', $('#email').val());
                formData.append('phone', $('#phone').val());
                formData.append('hiringManager', $('#hiringManager').val());
                formData.append('companyName', $('#companyName').val());
                formData.append('positionName', $('#positionName').val());
                formData.append('candidateExperience', $('#candidateExperience').val());
                formData.append('candidateSkills', $('#candidateSkills').val());
                formData.append('candidateAchievements', $('#candidateAchievements').val());
                formData.append('candidatePerformance', $('#candidatePerformance').val());
                formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

                $.ajax({
                    type: 'POST',
                    url: `/generate`,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        console.log(data);
                        data = `Dear ${$('#hiringManager').val()},\n\nI am${data}Sincerely,\n${$('#name').val()}`;
                        $("#generateAnimation").addClass("d-none");
                        $("#generatedCoverLetter").removeClass("d-none");
                        $('#generatedCoverLetter').val(data);
                    }
                });
            }
        });
    </script>
</body>

</html>
