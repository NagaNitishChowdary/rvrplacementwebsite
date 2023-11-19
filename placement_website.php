<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/placement_website/logo.jpg" type="image/gif">

    <!-- Title -->
    <title>R.V.R & J.C placement website</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Imageslider CSS -->
    <link rel="stylesheet" href="assets/css/imageslider.css">

    <!-- Comparison CSS -->
    <link rel="stylesheet" href="assets/css/comparison.css">

    <!-- Header Image -->
    <img class="background-img" id="bg-img" src="assets/img/placement_website/img1.jpg" alt="No Image" width="100%" height="150px">

  </head>

  <body>

    <!-- Start Navbar Area -->
    <div class="topnav" id="myTopnav">
      <a href="placement-website.php" class="active">Home</a>
      <a href="#placement-home">Placements Menu</a>
      <div class="dropdown">
        <button class="dropbtn">Login<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
          <a href="student_login.html">Student</a>
          <a href="teacher_login.html">Teacher</a>
          <a href="po_login.html">Placement Officer</a>
          <a href="admin_login.html">Admin</a>
        </div>
      </div>
      <a href="#">Student Experience</a>
      <a href="#contact-us">Contact Us</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <!-- End Navbar area -->

    <!-- Start scroll area -->
    <div class="scrolltext">
      <h1 class="heading">
        <marquee behaviour="scroll" direction="left">Congratulations to our highest package students Nitish(Amazon 20LPA) Mahesh(Flipkart 16LPA)</marquee>
      </h1>
    </div>
    <!-- End scroll area -->

    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="assets/img/placement_website/1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="assets/img/placement_website/2.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="assets/img/placement_website/3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br><br>

    <!-- Placement menu and info -->

    <div class="placement-home" id="placement-home">

      <!-- Placements menu -->

      <div class="placements-menu">
        <h2 class="heading2">Placements Menu</h2>
        <br>
        <div class="tab">
          <button class="tablinks" onclick="openMenu(event,'placement-info')" id="defaultOpen">Placement-info</button>
          <a href="placement_statistics.html"><button class="tablinks">Placement Statistics</button></a>
          <button class="tablinks" onclick="openMenu(event,'placement-cell')">Placement Cell</button>
          <button class="tablinks" onclick="openMenu(event,'committee')">Committee</button>
          <button class="tablinks" onclick="openMenu(event,'placement-policy')">Placement Policy</button>
          <button class="tablinks" onclick="openMenu(event,'training-programmes')">Training Programmes</button>
          <a href="https://www.youth4work.com/onlinetalenttest"><button class="tablinks">Youth4Work</button></a>
        </div>
      </div>

      <!-- Placements info -->

      <div id="placement-info" class="tabcontent">

        <div class="current-year">

          <h2 class="headings">2021-22 || Total Job Offers: 1504*  (as on 04-09-2022)</h2>
          <h3 class="subheadings">B. Tech</h3>
          <ul class="branch-list">
            <li>CSE-192 ||</li>
            <li>IT-102 ||</li>
            <li>ECE-222 ||</li>
            <li>EEE-129 ||</li>
            <li>CIVIL-98 ||</li>
            <li>ME-84 ||</li>
            <li>CE-64 </li>
          </ul>
          <h3 class="subheadings">MCA-104</h3>
          <h3 class="subheadings">MBA-52</h3>
          <h3 class="subheadings">M. Tech-12</h3>

        </div>

        <div class="previous-year">

          <h2 class="headings2">2020-21 || Total Job holders: 923</h2>
          <h3 class="subheadings">B. Tech</h3>
          <ul class="branch-list">
            <li>CSE-192 ||</li>
            <li>IT-102 ||</li>
            <li>ECE-222 ||</li>
            <li>EEE-129 ||</li>
            <li>CIVIL-98 ||</li>
            <li>ME-84 ||</li>
            <li>CE-64 </li>
          </ul>
          <h3 class="subheadings">MCA-104</h3>
          <h3 class="subheadings">MBA-52</h3>
          <h3 class="subheadings">M. Tech-12</h3>

        </div>

      </div>

     <!-- About Placement Cell div -->
     <div id="placement-cell" class="tabcontent">
       <div class="sub-content">
         <h3>Overview</h3>
         <p>The Cell was established with a prime objective of creating career opportunities in reputed corporates towards meeting aspirations of all the stakeholders. The Cell is devoted to cater to the needs of the organizations in conducting campus interviews for placements. Interactions with organizations are regularly done for placement requirements. Placement cell also conducts career guidance workshops to the final and pre-final year students to face their future with confidence. The cell is utilizing the facilities of the college like conference halls equipped with home theatres, LCD projector, PA system, laptops, desktops, laser printers, handy cam, digital camera, etc.</p>
         <h3>Objectives</h3>
         <ol>
           <li>To achieve 100% Placements.</li>
           <li>To invite the best companies of different industries for Campus Recruitments.</li>
           <li>Make students Industry ready with proper planning, focus and appropriate programmes.</li>
           <li>To promote career counselling by organising guest lectures, awareness programmes, seminars etc.</li>
           <li>To conduct training programmes, both in-house and out sourcing corporate trainers.</li>
           <li>Plan and organise more Industry - Institute Interactions for the benefit of students and the faculty.</li>
           <li>Introducing Video-Conference with Industry experts and RVR & JC Alumni (to create awareness for campus to corporate transformation) for career orientation and career exploration.</li>
           <li>To build RVR & JC brand value in the corporate world.</li>
         </ol>
       </div>
     </div>

     <!-- Committee div -->
     <div id="committee" class="tabcontent">
       <div class="sub-content">
         <h2>Members of the Committee</h2>
         <table class="committee-table">
           <thead>
             <th> S. No. </th>
             <th> Name & Designation </th>
             <th> Position </th>
           </thead>
           <tr>
             <td> 01. </td>
             <td>	Sri Ch.Srinivasa Rao, Training & Placement Officer </td>
             <td> Convener </td>
           </tr>
           <tr>
             <td>02.</td>
             <td>	Sri V.Jagadish, Placement Officer</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>03.</td>
             <td>	Sri M.L.N.Krishna Sai, Asst.Prof., CE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>04.</td>
             <td>	Sri M.Srikanth Kumar, Asst.Prof., CE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>05.</td>
             <td>	Sri G.Phani Sankar, Asst.Prof., CE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>06.</td>
             <td>	Sri K.Siva Prasada Rao, Asst.Prof., ChE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>07.</td>
             <td>	Sri P.Rama Krishna, Asst.Prof., CSE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>08.</td>
             <td>	Sri M.Naveen, Asst.Prof., CSE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>09.</td>
             <td>	Sri M.Brahmaiah, Asst.Prof., CSE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>10.</td>
             <td>	Sri A.Murali Krishna, Asst.Prof., ECE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>11.</td>
             <td>	Sri N.Sudhir Kumar, Asst.Prof., ECE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>12.</td>
             <td>	Sri P.V.Krishna Kanth, Asst.Prof., ECE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>13.</td>
             <td>	Dr.N.C.Kotaiah, Professor, EEE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>14.</td>
             <td>	Sri Y.Sumanth, Asst.Prof., EEE</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>15.</td>
             <td>	Sri K.Subrahmanyam, Asst.Prof., IT</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>16.</td>
             <td>	Sri M.Siddhartha Kumar, Asst.Prof., IT</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>17.</td>
             <td>	Sri B.Krishna Mohan, Asst.Prof., IT</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>18.</td>
             <td>	Sri A.Rangaraya Chowdary, Asst.Prof., ME</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>19.</td>
             <td>	Sri K.Purushottam Karteek, Asst.Prof., ME</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>20.</td>
             <td>	Sri Sk.MD.Hasheer, Asst.Prof., ME</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>21.</td>
             <td>	Sri K.Hari Prasad, Asst.Prof., ME</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>22.</td>
             <td>	Dr.A.V.S.Ashok, Assoc. Prof., MS </td>
             <td> Member </td>
           </tr>
           <tr>
             <td>23.</td>
             <td>	Dr.M.Sridhar, Assoc.Prof., MCA</td>
             <td> Member </td>
           </tr>
           <tr>
             <td>24.</td>
             <td>	Sri K.Hanumantha Rao, Computer Operator, T&P Cell</td>
             <td> Member </td>
           </tr>

         </table>
       </div>
     </div>

     <!-- Placement Policy div -->
     <div id="placement-policy" class="tabcontent">
       <div class="sub-content">
         <h3>PLACEMENT POLICY</h3>
         <ol>
           <li>Students should register for campus placements in their pre-final year of UG/PG course through MOODLE CMS by providing all the required information within the stipulated period.</li>
           <li>Giving a valid phone no. and e-mail id (that are active) is very important for corresponding/communicating with the students. (Include an emailid in groupid and join in respective Dept. WhatsApp group for effective communication)</li>
           <li>Students are advised to check mails, college Website News regularly for placement information. They shall also keep in touch with placement volunteers.</li>
           <li>Any change in Mobile number or mail id shall be immediately intimated to the T&P CELL. Otherwise, you may miss important information from the T&P Cell.</li>
           <li>Information regarding clearance of Backlog Subjects or Change in Marks after revaluation, should be immediately given / updated in the database of T&P Cell through department placement co-ordinator.</li>
           <li>It is the responsibility of the students to look at the T&P Cell - Notice Boards - exclusively meant for providing training and placement information.</li>
           <li>T&P Notice boards are located at 3 places � HiTech Block, Digital Block (beside the Seminar Hall), Opp. Library.</li>
           <li>A Company gives information about its visit to a college for a campus drive, at a maximum of 10 days and a minimum of 3 days, in advance.</li>
           <li>Information regarding Interview Process, Eligibility Criteria - min and maximum no. backlogs and academic break in studies will be available in the circular, released by the TPO, T&P Cell, at the time of campus recruitment.</li>
           <li>Campus Recruitment Results can be checked on the T&P Cell Notice Boards and the Dept. coordinators, as well.</li>
           <li>Students who are eligible for any placement drive will have to give his/her consent before attending the same to the coordinator concerned. Failing which the candidate will be marked absent for the particular drive.</li>
           <li>Student who fails to attend the placement drive, whether on or off campus subsequent to his/her consent for attending the same will be fined.</li>

           <li>Students shall visit the Company�s website (company profile) before attending the interview. The recruiters may ask about their company.</li>
           <li>Students shall not leave the campus at the time of campus drives without taking / giving information to their respective placement co-ordinator.</li>
           <li>Students must make their own arrangements such as transport, food etc. for attending the Interviews.</li>
           <li>Students should take every effort to maintain the decorum and the image of the college with the visiting representatives of the organization.</li>
           <li>Students who clear the Written/Online Test should attend the rest of the process of the interview till the end .They have no right to SKIP any part of the interview in the middle. If they do so, it is viewed as a serious offence and liable for removal from the list of T&P Cell.</li>
           <li>Students should attend the interviews in formal dress, sporting College ID, and hard copies of the following </li>
	          <ul>
	             <li>-Updated resume � 2 copies.</li>
	             <li>-Hall ticket/Admit card, if applicable.</li>
	             <li>-3 Passport size photographs.</li>
	             <li>-Photostat copies from 10th to UG/PG and any other certificates related to co-curricular activities.</li>
	          </ul>
          <li>If a student has been selected in the campus interview and has received an appointment letter, then he/she cannot appear again for another interview and his/her name is removed from placement rolls.</li>
          <li>Student, once selected will not be allowed further for any placement drive, until and unless there is a rise of Rs.1,00,000/- in the annual package offered.</li>
          <li>Students selected in the campus recruitment are to join the organization on completion of the course. Failure to join needs a proper explanation. Organizations/Companies black list the colleges, if students do not honour offer letter.</li>
          <li>The Principal/Placement officer, for any reasons, receives adverse comments on the behaviour and conduct of the interviewee from the interviewers; he/she may have to face severe consequences.</li>
          <li>If any kind of information is received from a company directly by the student, it has to be informed to the Dept. Coordinator or T&P CELL.</li>
          <li>Students should maintain punctuality for all events.</li>
          <li>All the queries regarding placement drives etc will be addressed by the Placement Co-ordinators.</li>
        </ol>
       </div>
     </div>

     <!-- Training Programmes -->
     <div id="training-programmes" class="tabcontent">
       <div class="sub-content">
         <h2>Training Progammes</h2>
         <a href="assets/pdf/2021-22.pdf">Click here to see the list of training programmes conducted during the academic year 2021-2022.</a>
         <br><br>
         <a href="assets/pdf/2020-21.pdf">Click here to see the list of training programmes conducted during the academic year 2020-2021.</a>
         <br><br>
         <a href="assets/pdf/2019-20.pdf">Click here to see the list of training programmes conducted during the academic year 2019-2020.</a>
       </div>
     </div>

    </div>
    <br><br>

    <!-- Comparision -->

    <div class="comparison">

      <h2>Placement Comparision for last two years (UG only)</h2>

      <br>

      <div class="table-graph">

        <div class="table">

          <table width="100%" style="border-collapse: collapse;">
            <tr border="1px" align="center">
              <th>Academic Year</th>
              <th>2020-21</th>
              <th>2021-22</th>
            </tr>
            <tr border="1px" align="center">
              <th>Offers</th>
              <td>1260</td>
              <td>1230</td>
            </tr>
            <tr border="1px" align="center">
              <th>Single Offers</th>
              <td>808</td>
              <td>819</td>
            </tr>
            <tr border="1px" align="center">
              <th>Above 4LPA</th>
              <td>537</td>
              <td>816</td>
            </tr>
            <tr border="1px" align="center">
              <th>Above 5LPA</th>
              <td>171</td>
              <td>344</td>
            </tr>
          </table>

        </div>

        <div class="graph">

          <img src="assets/img/placement_website/chart.jpg" alt="" width="50%">

        </div>

      </div>

    </div>
    <br><br>

    <!-- Placements Statistics -->

    <div class="placement-statistics">

      <h2>Placement Statistics for 2021-2022 Academic Year</h2>

      <br>

      <table>
            <thead>
                <th>S.No.</th>
                <th>Company</th>
                <th>Number of Students Selected</th>
                <th>CTC Offered</th>
            </thead>
            <tr align="center">
                <td>1</td>
                <td>Technovert, Hyderabad</td>
                <td>15</td>
                <td>4.5L(7) / 5L(8)</td>
            </tr>
            <tr align="center">
                <td>2</td>
                 <td>Infosys (HackWithInfy + InfyTQ)</td>
                <td>69</td>
                <td>8L(1) / 5L(1) / 3.6L(65)  / 2.22L(2) </td>

            </tr>
            <tr align="center">
                <td>3</td>
                <td>MODAK Analytics, Hyderabad</td>
                <td>29</td>
                <td>6L</td>
            </tr>
            <tr align="center">
                <td>4</td>
                <td> COVIUM, Bangalore </td>
                <td>10</td>
                <td>7.5L</td>
            </tr>
            <tr align="center">
                <td>5</td>
                <td>Accolite</td>
                <td>2</td>
                <td>5L</td>
            </tr>
            <tr align="center">
                <td>6</td>
                <td> TCS </td>
                <td>233</td>
                <td>7L(34) / 3.6L(199) </td>
            </tr>
            <tr align="center">
                <td>7</td>
                <td> CTS </td>
                <td>342</td>
                <td>6.75L(16) / 4L(326)</td>
            </tr>
            <tr align="center">
                <td>8</td>
                <td>Hexaware</td>
                <td>32</td>
                <td>5L (2) / 4L (30)</td>
            </tr>
            <tr align="center">
                <td>9</td>
                <td>Brillio</td>
                <td>12</td>
                <td>4.5L</td>
            </tr>
            <tr align="center">
                <td>10</td>
                <td>Wipro</td>
                <td>341</td>
                <td>6.5L (52) / 3.75L (289)</td>
            </tr>
            <tr align="center">
                <td>11</td>
                <td>Rinex Technologies</td>
                <td>4</td>
                <td>5L</td>
            </tr>
            <tr align="center">
                <td>12</td>
                <td>Accenture</td>
                <td>118</td>
                <td>6.5L(24) / 4.5L(94)</td>
            </tr>
            <tr align="center">
                <td>13</td>
                <td>QuEST</td>
                <td>19</td>
                <td>3.25L</td>
            </tr>
            <tr align="center">
                <td>14</td>
                <td>Coditas</td>
                <td>5</td>
                <td>3L</td>
            </tr>
            <tr align="center">
                <td>15</td>
                <td>FACE</td>
                <td>3</td>
                <td>2.88L</td>
            </tr>
            <tr align="center">
                <td>16</td>
                <td>Hitachi Vantara</td>
                <td>1</td>
                <td>6.5L</td>
            </tr>
            <tr align="center">
                <td>17</td>
                <td>Birlasoft</td>
                <td>2</td>
                <td>3.6 L</td>
            </tr>
            <tr align="center">
                <td>18</td>
                <td>Kreeti Technologies Pvt. Ltd</td>
                <td>2</td>
                <td>5.4 L</td>
            </tr>
            <tr align="center">
                <td>19</td>
                <td>Advanced Business &amp; Health Care Solutions</td>
                <td>1</td>
                <td>6 L</td>
            </tr>
            <tr align="center">
                <td>20</td>
                <td>UnSchool</td>
                <td>1</td>
                <td>5 L</td>
            </tr>
            <tr align="center">
                <td>21</td>
                <td>Darwinbox</td>
                <td>2</td>
                <td>8 LPA + 1.6 LPA(VPB)</td>
            </tr>
            <tr align="center">
                <td>22</td>
                <td>Hyundai Mobis</td>
                <td>2</td>
                <td>4.5 L</td>
            </tr>
            <tr align="center">
                <td>23</td>
                <td>Zensar</td>
                <td>28</td>
                <td>4 L</td>
            </tr>
            <tr align="center">
                <td>24</td>
                <td>ITC</td>
                <td>3</td>
            </tr>
            <tr align="center">
                <td>25</td>
                <td>BYJU`S</td>
                <td>1</td>
                <td>10 L</td>
            </tr>
            <tr align="center">
                <td>26</td>
                <td>Virtusa</td>
                <td>16</td>
                <td>4 L(10) / 6.5L(3) /4.5(3)</td>
            </tr>
            <tr align="center">
                <td>27</td>
                <td>EPAM</td>
                <td>2</td>
                <td>6 L </td>
            </tr>
            <tr align="center">
                <td>28</td>
                <td>Cube Highways</td>
                <td>1</td>
                <td>3 L </td>
            </tr>
            <tr align="center">
                <td>29</td>
                <td>MSR Cosmos</td>
                <td>2</td>
                <td>3.6 L </td>
            </tr>
            <tr align="center">
                <td>30</td>
                <td>Wiley-Mthree</td>
                <td>5</td>
                <td>7 L </td>
            </tr>
            <tr align="center">
                <td>31</td>
                <td>Tvisha</td>
                <td>11</td>
                <td> </td>
            </tr>
            <tr align="center">
                <td>32</td>
                <td>Veda IIT</td>
                <td>2</td>
                <td>3 L </td>
            </tr>
            <tr align="center">
                <td>33</td>
                <td>WinWire Technologies</td>
                <td>2</td>
                <td>4.5 L </td>
            </tr>
            <tr align="center">
                <td>34</td>
                <td>Efftronics</td>
                <td>3</td>
                <td>5.5 L (1) / 3.9 L (2) </td>
            </tr>
            <tr align="center">
                <td>35</td>
                <td>QSpiders</td>
                <td>11</td>
                <td>3.5 L </td>
            </tr>
            <tr align="center">
                <td>36</td>
                <td>Societe Generale Global Solution Center (SC GSC) India</td>
                <td>1</td>
                <td>6.2 L </td>
            </tr>
            <tr align="center">
                <td>37</td>
                <td>Harman Connected Services</td>
                <td>4</td>
                <td>5.5 L </td>
            </tr>
            <tr align="center">
                <td>38</td>
                <td>PacketPrep</td>
                <td>1</td>
                <td>3 L </td>
            </tr>
            <tr align="center">
                <td>39</td>
                <td>Netcracker</td>
                <td>11</td>
                <td>8 L </td>
            </tr>
            <tr align="center">
                <td>40</td>
                <td>Funnel (MovingDneedle)</td>
                <td>21</td>
                <td>1.2 L </td>
            </tr>
            <tr align="center">
                <td>41</td>
                <td>Infor</td>
                <td>5</td>
                <td>6.5 L </td>
            </tr>
            <tr align="center">
                <td>42</td>
                <td>Tech Mahindra</td>
                <td>2</td>
                <td>3 L </td>
            </tr>
            <tr align="center">
                <td>43</td>
                <td>JSW (Jindal Steels)</td>
                <td>10</td>
                <td>5.5 L </td>
            </tr>
            <tr align="center">
                <td>44</td>
                <td>Sonata Software</td>
                <td>5</td>
                <td>3.5 L </td>
            </tr>
            <tr align="center">
                <td>45</td>
                <td>Deccan Fine Chemicals</td>
                <td>3</td>
                <td>3.4 L </td>
            </tr>
            <tr align="center">
                <td>46</td>
                <td>NJ India</td>
                <td>3</td>
                <td>3.66 L </td>
            </tr>
            <tr align="center">
                <td>47</td>
                <td>Bajaj Fin</td>
                <td>2</td>
                <td>2.6 L </td>
            </tr>
            <tr align="center">
                <td>48</td>
                <td>CapGemini</td>
                <td>11</td>
                <td>4 L </td>
            </tr>
            <tr align="center">
                <td>49</td>
                <td>Hexagon</td>
                <td>1</td>
                <td>5.5 L </td>
            </tr>
            <tr align="center">
                <td>50</td>
                <td>Ethnus</td>
                <td>6</td>
                <td>2.7 L </td>
            </tr>
            <tr align="center">
                <td>51</td>
                <td>D E Shaw Group</td>
                <td>1</td>
                <td>50.5 L </td>
            </tr>
            <tr align="center">
                <td>52</td>
                <td>B N Y Mellon Technology </td>
                <td>1</td>
                <td>17.34 L </td>
            </tr>
            <tr align="center">
                <td>53</td>
                <td>SYNTAGS</td>
                <td>1</td>
                <td>3.75 L </td>
            </tr>
            <tr align="center">
                <td>54</td>
                <td>Pentagon Space</td>
                <td>2</td>
                <td>3 L </td>
            </tr>
            <tr align="center">
                <td>55</td>
                <td>ZenQ</td>
                <td>1</td>
                <td>2.4 L </td>
            </tr>
            <tr align="center">
                <td>56</td>
                <td>Amadeus</td>
                <td>1</td>
                <td>11.77 L </td>
            </tr>
            <tr align="center">
                <td>57</td>
                <td>Mahindra & Mahindra</td>
                <td>11</td>
                <td>4.5 L </td>
            </tr>
            <tr align="center">
                <td>58</td>
                <td>Tiger Analytics</td>
                <td>1</td>
                <td>6.2L </td>
            </tr>
            <tr align="center">
                <td>59</td>
                <td>VAP</td>
                <td>3</td>
                <td>1.8 L </td>
            </tr>
            <tr align="center">
                <td>60</td>
                <td>Texmo Industries</td>
                <td>4</td>
                <td>2.1 L </td>
            </tr>
            <tr align="center">
                <td>61</td>
                <td>Divis Labs</td>
                <td>20</td>
                <td>1.92 L </td>
            </tr>
            <tr align="center">
                <td>62</td>
                <td>eLitmus</td>
                <td>1</td>
                <td>8 L </td>
            </tr>
            <tr align="center">
                <td>63</td>
                <td>Mind Tree</td>
                <td>1</td>
                <td>4 L </td>
            </tr>
            <tr align="center">
                <td>64</td>
                <td>ANA</td>
                <td>2</td>
                <td>3.6 L </td>
            </tr>
            <tr align="center">
                <td>65</td>
                <td>Alines</td>
                <td>1</td>
                <td>5.6 L </td>
            </tr>
            <tr align="center">
                <td>66</td>
                <td>Apollo</td>
                <td>1</td>
                <td>1.8 L </td>
            </tr>
            <tr align="center">
                <td>67</td>
                <td>Finoit Technologies</td>
                <td>1</td>
                <td>4.2 L </td>
            </tr>
            <tr align="center">
                <td>68</td>
                <td>ITS Engineering</td>
                <td>1</td>
                <td>1.8 L </td>
            </tr>
            <tr align="center">
                <td>69</td>
                <td>Medha Sevo Drives</td>
                <td>1</td>
                <td>4.48 L </td>
            </tr>
            <tr align="center">
                <td>70</td>
                <td>INSEMI TECHNOLOGY SERVICES Pvt Ltd</td>
                <td>1</td>
                <td>5.25 L </td>
            </tr>
            <tr align="center">
                <td>71</td>
                <td>Hetero Drugs</td>
                <td>14</td>
                <td>1.96 L </td>
            </tr>
            <tr align="center">
                <td>72</td>
                <td>PRAVAIG</td>
                <td>1</td>
                <td>4.2 L </td>
            </tr>
            <tr align="center">
                <td>73</td>
                <td>Amazon</td>
                <td>13</td>
                <td>44.15 L(3) / 28L(1) /15.5(9) </td>
            </tr>
            <tr align="center">
                <td>74</td>
                <td>Technologics Global Pvt. Ltd</td>
                <td>2</td>
                <td>3L </td>
            </tr>
            <tr align="center">
              <td colspan="3" rowspan="3" style="color: darkblue;"><h2>Total number of job Offers</h2></td>
              <td rowspan="3"><h2 style="color: red"><b>1505</b> <br>(as on date: 08/09/2022)</h2></td>
            </tr>
          </table>

    </div>

    <br>

    <div class="year-wise-placements-graph">

      <h2>Year Wise Placements Graph</h2>

      <img src="assets/img/placement_website/yw-placements.jpg">

    </div>

    <a href="#bg-img" id="myBtn"><img class="gotop" src="assets/img/placement_website/gotop.jpg"></a>

    <br><br>

    <!-- Footer -->

    <div class="footer">

      <h1>Contact Us:</h1>

      <div class="footer-items">

        <div class="contact-us" id="contact-us">

          <div class="SPoC">
            <h3>SPoC:</h3>
            <p><b>Ch. Srinivasa Rao</b></p>
            <p>Training and Placement Officer</p>
            <p>E-Mail: tpo@rvrjc.ac.in</p>
            <p>Mobile: +91 9491071947, +91 9849958211</p>
          </div>

          <div class="Alternate">
            <h3>Alternate:</h3>
            <p><b>V. Jagadeesh Kumar</b></p>
            <p>Placement Officer</p>
            <p>E-Mail: jagadeesh.tnp@rvrjc.ac.in</p>
            <p>Mobile: +91 9390070345</p>
          </div>

          <div class="our-college-website">

            <h2><a href="https://rvrjcce.ac.in/">Click here to go to our College Website</a></h2>

          </div>

        </div>

      </div>

      <hr>

      <div class="cp-socialmedia">

        <div class="cp">

          <span>|| <a href="site_credits.html">Site Credits</a> ||</span>
          <p>&copy 2022 All Rights reserved to RVR & JCCE</p>

        </div>

        <div class="socialmedia">

          <a href="https://www.linkedin.com/school/r.v.r.-&-j.c.-college-of-engineering/"><img style="width: 50px;" src="assets/img/placement_website/ln.jpg"></a>
          <a href="https://www.instagram.com/rvrjcce.official/"><img style="width: 50px;" src="assets/img/placement_website/insta.jpg"></a>
          <a href="https://twitter.com/rvrjc_official"><img style="width: 40px;" src="assets/img/placement_website/twitter.jpg"></a>
          <a href="https://www.facebook.com/RVR-JC-College-of-Engineering-Autonomous-442983819071705"><img style="width: 40px;" src="assets/img/placement_website/facebook.jpg"></a>
          <a href="https://www.youtube.com/c/RVRJCCollegeofEngineering"><img style="width: 40px;" src="assets/img/placement_website/youtube.jpg"></a>

        </div>

      </div>

    </div>

    <!-- shideshow JS -->
    <script type="text/javascript" src="assets/js/slideshow.js"></script>

    <!-- placements-menu JS -->
    <script type="text/javascript" src="assets/js/placements-menu.js"></script>

    <!-- responsive navbar JS -->
    <script type="text/javascript" src="assets/js/responsive.js"></script>

    <!-- gotop JS -->
    <script type="text/javascript" src="assets/js/gotop.js"></script>

  </body>
</html>
