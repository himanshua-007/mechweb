<style>
         
        /* Media Query for Mobile Devices */
        @media (max-width: 580px) {
            .backgroundbg{
              display: none;
            }
            .bannerImg{
              background-image: url(/img/staticBG1.jpg) , linear-gradient(rgba(0,0,0,0.15),rgba(0,0,0,0.15));
              background-size: 100% 100%;
              background-repeat: no-repeat;
              z-index: -1;
            }
            .wraph > .my-5 {
              padding: 0;
              margin: 0 !important;
            }
            .IM1c {
            padding : 0 ;
            }
            .headerBanner{
              width:100%;
              padding:0;
            }
        }
         
         
        /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) {
          .IM1c {
            padding : 0 3rem;
          }
        }
         
    </style>
</head>
<div style="background-color:#000 ;line-height:30px;">&nbsp;</div>
<header>


    <div class="container hContainer">


          <div  class="IM1c" ><a href="index.php">
            <img class="headerBanner" src="img\ycce_new.jpg" /></a>
          <!-- <a style="text-decoration:none" href="index.php"> <img class="px-2" src="img/megheGroup.png" /></a> -->
          
        </div>
    </div>
    
  </header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top customNav">
    <div class="container">
      <div>
        <!-- placeholder -->
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php"><svg fill="<?php if($page!='home'){echo '#fff';}?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                <path
                  d="M 12 2 A 1 1 0 0 0 11.289062 2.296875 L 1.203125 11.097656 A 0.5 0.5 0 0 0 1 11.5 A 0.5 0.5 0 0 0 1.5 12 L 4 12 L 4 20 C 4 20.552 4.448 21 5 21 L 9 21 C 9.552 21 10 20.552 10 20 L 10 14 L 14 14 L 14 20 C 14 20.552 14.448 21 15 21 L 19 21 C 19.552 21 20 20.552 20 20 L 20 12 L 22.5 12 A 0.5 0.5 0 0 0 23 11.5 A 0.5 0.5 0 0 0 22.796875 11.097656 L 12.716797 2.3027344 A 1 1 0 0 0 12.710938 2.296875 A 1 1 0 0 0 12 2 z" />
              </svg></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link <?php if($page=='about'){echo 'active';}?> dropdown-toggle" href="about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>
            <ul class="dropdown-menu slideInLeft animated" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="about.php#about_rammml2022">About RAMMML-2022</a></li>
                <li><a class="dropdown-item" href="about.php#about_YCCE">About YCCE</a></li>
            </ul>
          </li>


<!-- rammml2022.php -->


          <li class="nav-item dropdown">
            <a class="nav-link <?php if($page=='rammml2022'){echo 'active';}?> "href="rammml2022.php" role="button" aria-expanded="false">
            RAMMML&nbsp;2022
            </a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link <?php if($page=='committees'){echo 'active';}?> dropdown-toggle" href="committees.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Committees
            </a>
            <ul class="dropdown-menu slideInLeft animated" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="committees.php#patrons">Patrons</a></li>
              <li><a class="dropdown-item" href="committees.php#int_adv_com">International Advisory Committee</a></li>
              <li><a class="dropdown-item" href="committees.php#nat_adv_com">National Advisory Committee</a></li>
              <li><a class="dropdown-item" href="committees.php#org_com">Conference Chair & Organizing Secretary</a></li>
              <li><a class="dropdown-item" href="committees.php#OrganizingCommittee">Organizing Committee Members</a></li>
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link <?php if($page=='keynote_speakers'){echo 'active';}?>" href="keynote_speakers.php">Keynote&nbsp;Speakers</a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link <?php if($page=='callForPapers'){echo 'active';}?>" href="callForPapers.php">Call&nbsp;for&nbsp;Papers</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if($page=='publications'){echo 'active';}?>" href="publications.php">Publications</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if($page=='registration'){echo 'active';}?>" href="registration.php">Registration</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if($page=='downloads'){echo 'active';}?>" href="downloads.php">Downloads</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?php if($page=='contactus'){echo 'active';}?> " href="contactus.php">Contact&nbsp;Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
