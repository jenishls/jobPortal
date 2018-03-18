<?php
    session_start();
    require_once('jobseeker.php');
    if(!isset($_SESSION['permission'])){
        header('location:index.html?msg=no-access');
    }
    $userId = $_SESSION['userId'];
    $user = $_SESSION['userType'];
    
    $jobseeker = new Jobseeker();

    ?>
<!DOCTYPE html>
<html>

<head>
    <title>Online Job Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugin/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <a class="navbar-brand" href="#" style="font-family: 'LOBSTER'">Job Portal</a>
        <ul class="navbar-nav">
        </ul>
        <ul class="navbar-nav ml-auto mr-auto">
           
        </ul>
        <ul class=" navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link btn " href="#" data-toggle="modal" data-target="#myModal" role="button">
              <i class="fa fa-user"></i>
              Logout
            </a>
                <li class="nav-item">
                    <a class="nav-link btn">
                    <i class="fa fa-question-circle"></i>Help
                </a>
                </li>
            </li>
        </ul>
    </nav>
 
    <header class="container-fluid" style="background-color: #7aced6">
        <!-- <img src="images/jobseeker.jpg" alt="job-seeker"> -->
        <div class=" py-5 text-white" >
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1> FIND THE RIGHT CANDIDATES  </h1>
                    <h1> YOU HAVE BEEN LOOKING FOR</h1>
                    <br />
                    <br />
                    
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </header>
    <section class="container-fluid">
        <div class="row">
            <div class="col-sm-2 py-3 sidebar" style="background-color: #add8c6">
                <ul>
                    <li id="btn-postVacancies">Post Vacancies</li>
                    <li id="btn-listVacancies">List Vacancies</li>
                    
                    <li id="btn-editProfile">Edit Profile</li>
                </ul>
            </div>


            

            <div class="col-sm-10 ">
                <div class="py-5" id="postVacancies">
                  <i class="fa fa-list-alt"></i> POST VACANCIES
                    <hr>
                  <form>
                    <div class="py-3">
                        <label>Job Title</label>
                        <input type="text" name="" class="form-control">
                    </div>

                    <div class="py-3">
                        <label>Job Description</label>
                        <textarea rows="4" name="" class="form-control"></textarea>
                    </div>

                    <div class="py-3">
                        <label>Education</label>
                        <textarea rows="3" name="" class="form-control"></textarea>
                    </div>

                    <div class="py-3">
                        <label>No of Openings</label>
                        <input type="number" name="" class="form-control">
                    </div>

                    <div class="py-3">
                        <label>Job Availablity</label>
                        <br>
                        <div class="row">
                            <div class="col-6">
                                <input type="radio" name="jobAvailablity" value="full">Full-time
                            </div>
                            <div class="col-6">
                                <input type="radio" name="jobAvailablity" value="part">Part-time
                            </div>
                        </div>
             
                    </div>
                    <div class="py-3">
                      <label>Salary</label>
                      <input type="text" name="" placeholder="Blank means 'negotiable' " class="form-control">
                    </div>

                    <div class="py-3">
                      <label>Min-experience</label>
                      <select class="form-control">
                        <option>1 year</option>
                        <option>2 years</option>
                        <option>3 years</option>
                        <option>4 years</option>
                        <option>5 years</option>
                        <option>6 years</option>
                        <option>7 years</option>
                        <option>8 years</option>
                        <option>9 years</option>
                        <option>10 years</option>
                        <option>11 years</option>
                        <option>12 years</option>
                        <option>13 years</option>
                        <option>14 years</option>
                        <option>15 years</option>
                        <option>16 years</option>
                        <option>17 years</option>
                        <option>18 years</option>
                        <option>19 years</option>
                        <option>20 years</option>
                      </select>
                    </div>

                    <div class="py-3">
                      <label>Job level</label>
                      <select class="form-control">
                        <option>Entry Level</option>
                        <option>Low Level</option>
                        <option>Mid Level</option>
                        <option>Senior Level</option>
                      </select>
                    </div>

                    <div class="py-3">
                      <label>Deadline</label>
                      <input type="date" name="" class="form-control">
                    </div>


                  </form>
                </div>

                <div class="py-5" id="listVacancies">
                    <i class="fa fa-list-alt"></i> LIST VACANCIES
                    <hr>
                    <div class="row container">
                        <div class="col-8">
                            <h5>Job Title</h5>
                            <p class="lead">Company name</p>
                            <small> posted date</small>
                        </div>
                        <div class="col-sm-4">
                            Location
                        </div>
                    </div>
                    <hr />
                </div>

                

            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col-md-3 col-sm-1">
                <h4><strong>Information</strong></h4> About
                <br> Terms & Conditions
                <br> Privacy Policy
                <br> FAQ
                <br>
            </div>
            <div class="col-lg-3 col-sm-1">
                <h4><strong>Candidates</strong></h4> Find a Job
                <br /> Apply for a Job
                <br />
            </div>
            <div class="col-md-3 col-sm-1">
                <h4><strong>Follow Us</strong> </h4>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <i class="fab fa-facebook-square" style='font-size:25px;'></i>
                    </div>
                    <div class="col-lg-2">
                        <i class="fab fa-twitter-square" style='font-size:25px;'></i>
                    </div>
                    <div class="col-lg-2">
                        <i class="fab fa-instagram" style='font-size:25px;'></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-1">
                <h4><strong>Contact Us</strong></h4>
                <i class="fa fa-flag"></i> Kathmandu, Nepal
                <br>
                <i class="fa fa-envelope-open"></i> lookforjobs@gmail.com
                <br>
                <i class="fa fa-phone"></i> +422226, +977-9867111111
                <br>
                <br>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      $('#btn-postVacancies').click(function(){
        $('#listVacancies').hide();
        $('#editProfile').hide();
        $('#postVacancies').show();

      });

      $('#btn-listVacancies').click(function(){
        
        $('#editProfile').hide();
        $('#postVacancies').hide();
        $('#listVacancies').show();

      });

      $('#btn-editProfile').click(function(){
        
        $('#postVacancies').hide();
        $('#listVacancies').hide();  
        $('#editProfile').show();
      });
    </script>
</body>

</html>