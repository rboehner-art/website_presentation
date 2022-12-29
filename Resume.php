<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Resume</title>
    <style>
    body {
      background-color: #F3FAE1;
    }
    </style>

</head>

<body>

 
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a href="Main_Page.php" class="navbar-brand">My Site</a>
             <button class="navbar-toggler" 
                        data-toggle="collapse" 
                         data-target="#navContent"
                         aria-controls="navContent"                                                    
                         aria-expanded="false"
                         aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
             </button>
                    <div class="collapse navbar-collapse" id="navContent">
                                            <ul class="navbar-nav">
                            <li class="navbar-item"><a href="Portfolio.php" class="nav-link">Portfolio</a></li>
                            <li class="navbar-item"><a href="Contact_Form.php"class="nav-link">Contact</a></li>
                            <li class="navbar-item"><a href="About.php" class="nav-link">About</a></li>
                            <li class="navbar-item"><a href="Resume.php" class="nav-link">Resume</a></li>
                            <li class="navbar-item"><a href="reviews.php" class="nav-link">Reviews</a></li>
                                <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                                            </ul>
                    </div>
        </nav>
    
    <iframe src="" height="px" width="2000" title="Iframe Example"></iframe>
    
    <div class="container" style="margin-top:40px" >
        <div class="row">
          <div class="col-sm-6">
            <h2>About Me</h2>
            <h5>Photo of me:</h5>
            <div> 
              <img src="images/Chambord & Chenonceaux, March 6, 2022/IMG_0545.jpeg" height="400" width="auto" alt="Ramsey_Chambord_chenonceaux">
            </div>
            <p>Hi! My name is Ramsey and now you have reached my Resume page.<br> I am loyal and a dedicated open minded worker.<br>
              You will not be disappointed. 
            </br></p>
            <h4>Skills</h4>
            <?php
               $skills = ["HTML", "CSS", "JavaScript", "PHP","Composite Manufacturing"];


                   function newList ($arr){
                      echo "<ul>";
                       foreach ($arr as $value){
                         echo "<li>" . $value . "</li>";
                          }
   echo "</ul>";
 }
 newList($skills);
?>

           
            <hr class="d-sm-none">
          </div>
          <div class="col-sm-6">
            <h2>ARUP Laboratories</h2>
            <h5>Tech III Oct 2016 - Present</h5>
            <div> <img src="images/ARUP-logo.jpeg" height="100" width="auto" alt="Arup logo"> </div>

            <p>I have worked at ARUP laboratories for 6 years, in that time I have provided hands on assistance and customer service in the health care industry. 
              During the Covid-19 pandemic my experience with automation and my problem solving skills have been essential to ARUP and to the public. 
              In that time, I volunteered with the Quality team and the Employee recognition team in Automation Specimen Management to help bring necessary workflow 
              changes and improvements as well improving employee morale.       

           
            <br>
            <h2>King County Metro</h2>
            <h5>Equipment Dispatcher Jan 2012 - July 2016</h5>
            <div> <img src="images/king-county.jpeg" alt="King County Metro"> </div>
            
            <p>Working at King County Metro was a challenge to my experience and my personal life. 
              I was successful at being a Dispatcher with little experience entering King County Metro from Utah Transit Authority 
              but within a short time I adapted and learned new skills in a stressful work environment. 
              I was able to deliver timely assistance when a bus broke down and needed to be maintained. 
              I was able to successfully schedule and manage a fleet of 250 busses with no delays to service that the 
              public relayed on.  
</p>
            <h2>Utah Transit Authority</h2>
            <h5>Service Employee May 2007 - June 2011</h5>
            <div> <img src="images/Utah_Transit.jpeg" alt="Utah Transit Authority" height="200" width="auto"></div>
           <p>I started working at Utah Transit Authority as a coach cleaner when I was 22, 
            I quickly moved up and was recognized for my dedication to work. 
            I studied for my Class B CDL and was able to pass the exam and driving test where I was able to apply for 
            the service employee job fueling and maintaining busses. Again I was recognized for my hard work and my 
            ability to train others on driving and servicing of busses.  
</p>
            
            <p id="results"></p>
        </div>
      </div>
    
    <script src= "Javascript.js"></script>
</body>
<!--Footer-->
<footer class="py-4 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy;Notorious R.D.B 2022</p>

            </div>
</html>