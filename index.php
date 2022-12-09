<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="shortcut icon" href="./Images/Only College logo.png" type="image/x-icon">

    <!--FONT AWESOME CDN-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONT (MONTSERRAT)-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/admission.css">

    <style type="text/css">
    	*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html::-webkit-scrollbar {
    width: 0.5rem;
}

html::-webkit-scrollbar-track {
    background: transparent;
}

html::-webkit-scrollbar-thumb {
    background: linear-gradient(to top left, #00c0ff, #4218b8);
}

.main {
    display: flex;
    flex-direction: row;
    height: auto;
    width: 100%;
}

.headbox {
    display: flex;
    flex-direction: column;
    height: 8rem;
    width: 100%;
    background: linear-gradient(to bottom right, #72FFB6, #10D164);
    letter-spacing: 10px;
    font-size: 30px;
    justify-content: center;
}

/*SCROLL BAR*/



#scroll-container {
    background-color: var(--color-success);
    overflow: hidden;
}

#scroll-text {
    -moz-transform: translateX(100%);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    font-size: 1.5rem;
    font-weight: 600;
    color: red;
    -moz-animation: my-animation 30s linear infinite;
    -webkit-animation: my-animation 15s linear infinite;
    animation: my-animation 30s linear infinite;
}

@-moz-keyframes my-animation {
    from {
        -moz-transform: translateX(100%);
    }

    to {
        -moz-transform: translateX(-100%);
    }
}

@-webkit-keyframes my-animation {
    from {
        -webkit-transform: translateX(100%);
    }

    to {
        -webkit-transform: translateX(-100%);
    }
}

@keyframes my-animation {
    from {
        -moz-transform: translateX(100%);
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    to {
        -moz-transform: translateX(-100%);
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }
}



.navigation {
    position: relative;
    width: 20%;
    height: 46rem;
    background: #563d7c;
}

.navigation.active {
    width: 80px;
}

.navigation ul {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.navigation ul li {
    position: relative;
    width: 100%;
    list-style: none;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
}

.navigation ul li:hover,
.navigation ul li.hovered {
    background: #fff;
}

.navigation ul li:nth-child(1) {
    margin-bottom: 40px;
    pointer-events: none;
}

.navigation ul li a {
    position: relative;
    display: block;
    width: 100%;
    display: flex;
    text-decoration: none;
    color: #fff;
}

.navigation ul li:hover a,
.navigation ul li.hovered a {
    color: #287bff;
}

.navigation ul li a .icon {
    position: relative;
    display: block;
    min-width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
}

.navigation ul li a .icon .uil {
    font-size: 1.75em;
}

.navigation ul li a .title {
    position: relative;
    display: block;
    padding: 0 10px;
    height: 60px;
    line-height: 60px;
    text-align: start;
    white-space: nowrap;
}

.navigation ul li a .img {
    position: relative;
    display: block;
    margin-top: 2rem;
    min-width: 1rem;
    height: 60px;
    line-height: 60px;
    text-align: center;
}

.navigation h3{
    color: #fff;
    text-align: center;
    margin-top: 4%;
    margin-bottom: 3%;
    font-size: 1rem;
}

.navigation h4{
    color: rgb(246, 188, 188);
    text-align: center;
    margin-top: 4%;
    margin-bottom: 3%;
    font-size: 1rem;
}

.navigation p{
    color: #fff;
    text-align: center;
    margin-top: 4%;
    margin-bottom: 3%;
    font-size: 1rem;
}

.beforeyoustart {
    display: flex;
    flex-direction: column;
    width: 80%;
    height: auto;
}

.start {
    display: flex;
    flex-direction: column;
    height: 5%;
    width: 100%;
    background: linear-gradient(to bottom right, #FF512F, #DD2476);
}

.start h2{
    margin-top: 1%;
    margin-bottom: 1%;
    color: #fff;
    letter-spacing: 0.2rem;
}

.instructionsmanual {
    display: flex;
    flex-direction: column;
    height: auto;
    width: 100%;
}

.style29 {
    color: #FF0000;
    margin-left: 2%;
    font-size: 1.3rem;
    font-style: italic;
    word-spacing: 5px;
}

.style28 {
    color: #0033FF;
    font-size: 1.3rem;
    margin-left: 2%;
    word-spacing: 5px;
    font-style: italic;
}

.twobutton {
    display: flex;
    flex-direction: row;
    height: auto;
    width: 100%;
    border: 2px solid pink;
    padding-left: 5%;
}

.admissionRedirect {
    display: flex;
    flex-direction: column;
    height: 70px;
    width: 30%;
    border-radius: 0px 25px 0px 25px;
    border: none;
    background-color: #57E1D8;
    font-size: 30px;
    font-weight: bold;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.admissionRedirect:active {
    background-color: #D8E324;
}
    </style>

</head>

<body>

    
    <div class="headbox">
        <center>
            <h2>ADMISSION PORTAL</h2>
        </center>
    </div>

    <div id="scroll-text">
        <p>Admission Form Fill Up Process is Over</p>
    </div>

    <div class="main">
        
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="img"><img src="Only College logo.png" style="width: 70%;"></span>
                        <span class="title" style="margin-top: 2rem; font-size: 1.5rem;"><b>S.S. College</b></span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="title">HS Admission</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-edit"></i></span>
                        <span class="title">TDC Admission</span>
                    </a>
                </li>

                <li>
                    <a href="https://darpan.ahseconline.in/" target="blank">
                        <span class="icon"><i class="fa fa-user-circle"></i></span>
                        <span class="title">DARPAN Portal</span>
                    </a>
                </li>


                <li>
                    <a href="https://directorateofhighereducation.assam.gov.in/" target="blank">
                        <span class="icon"><i class="fa fa-copy"></i></span>
                        <!--ICON IS NOT WORKING CHANGE IT-->
                        <span class="title">DHE</span>
                    </a>
                </li>

                <li>
                    <a href="http://dheonlineadmission.amtron.in/sp/" target="blank">
                        <span class="icon"><i class="fa fa-graduation-cap"></i></span>
                        <span class="title">Unique ID</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-envelope"></i></span>
                        <span class="title">My Applications</span>
                    </a>
                </li>

                <br>
                <hr>
                <br>

                <h3>For Support <br> Feel Free to Connect</h3>
                <p><i class="fa fa-envelope-o"></i> studentsehelpdesk@gmail.com</p>
                <h4>FOR TDC ONLY</h4>

            </ul>
        </div>

        <div class="beforeyoustart">
            <div class="start">
                <center>
                    <h2>GO THROUGH THE INSTRUCTIONS MANUAL BEFORE YOU BEGIN...</h2>
                </center>
            </div>
            <div class="instructionsmanual">
                <ul style="list-style-type: disc; margin-top: 3%; margin-bottom: 1%;">
                    <li class="style29">One Active Mobile Number with you (Duplicate Mobile No will not be Allowed).
                    </li>
                    <li class="style29">Student have to generate a Unique ID at <a
                            href="http://dheonlineadmission.amtron.in/sp/#registration/" target="_blank">UNIQUE ID
                            GENERATION LINK OF GOVT OF ASSAM</a> which will be reqired while taking admission</li>
                    <li class="style29">One Front Face Clear Looking Scan or Clicked Photograph {(200(H)
                        x277(V)pixel, (Below 100 KB)} </li>
                    <li class="style29">Scan/Image Copy of Your “Marks Sheet” (From HSLC Onwards). </li>
                    <li class="style29"> Scan/Image Copy of “Pass Certificate” (From HSLC Onwards).</li>
                    <li class="style29">Scan/Image Copy of First page of Your “Bank Pass Book”.</li>
                    <li class="style29">Scan/Image Copy of Last “Admit Card”.</li>
                    <li class="style29">One Scan/Image of Signature. (Below Size 100 KB in Jpeg/Jpg/ Pdf Format).
                    </li>
                    <li class="style29">Extra-Curricular Activities Certificate (If Apply from Quota)</li>
                    <li class="style29">One Account No, Account Holder Name, Bank Name and IFSC & MICR Code </li>
                </ul>



                <div class="start">
                    <center>
                        <h2>BEFORE STARTING READ THE GUIDELINES CAREFULLY</h2>
                    </center>
                </div>
                <center>
                    <blockquote style="font-size: 2.1rem; margin-bottom: 2%; margin-top: 1%;"><u></u>
                    </blockquote>
                </center>
                <ul style="list-style-type: disc; margin-bottom: 2%;">
                    <li class="style28">Click on Application Form.</li>
                    <li class="style28">Register Yourself with your Basic Details like Name, Active Mobile Number,
                        Valid Email ID & DOB.</li>
                    <li class="style28">Provide Login ID and Password of your choice.</li>
                    <li class="style28">Now Login with your User Id/Mobile Number & Password in Login Page Link.
                    </li>
                    <li class="style28">Check your elligibility and accept the terms and condition, elligibility
                        criteria etc.</li>
                    <li class="style28">Select Your Class & Submit Your details according to the form.</li>
                    <li class="style28">Click onSend OTP. You will Receive OTP in Registered Mobile Number.</li>
                    <li class="style28">After OTP Validation you need to Select Class Stream & Subject.</li>
                    <li class="style28"> After Subject Selection Declaration Page Will Appear where need to Click
                        Next after select Check Box</li>
                    <li class="style28"> Select (0) Zero Amount Fee at Payment Page& Click on Pay button.</li>
                    <li class="style28">After this step need to click on Next button to fill Personal Details /
                        Academic Details & Documents Upload Process.</li>
                    <li class="style28">Check Your Form Very Carefully Before Submit, After Submit you Can’t Edit
                        Your Form.</li>
                    <li class="style28">Now Print/Save or Download the Generated Application Form to Submit at
                        Office as & When it will be asked for.</li>
                    <li class="style28">You Can Collect the Generated Application Form in Your Registered Email ID
                        or Your Dashboard Account Also.</li>
                    <li class="style28">Keep store all SMS received during Online Process on your Registered Mobile
                        Number, Email and in Your Dashboard to get all Information on time.</li>
                </ul>
                <hr>

                <div class="twobutton">
                    <button class="admissionRedirect">HS Admission</button>
                    <button class="admissionRedirect">TDC Admission</button>
                </div>
            </div>


        </div>
    </div>


</body>

</html>