<?php
if (isset($_POST['sendDetails'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactno = $_POST['contactno'];
	$message = $_POST['message'];

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
	$headers .= 'From: jheel_parikh@yahoo.com' . "\r\n";

	$msg = '<html><body>
<div class="box-skills">
<div class="col-xs-12">
<table>
<tr>
<th>Name</th>
<td>' . $name . '</td>
</tr>
<tr>
<th>Email</th>
<td>' . $email . '</td>
</tr>
<tr>
<th>Contact No.</th>
<td>' . $contactno . '</td>
</tr>
<tr>
<th>Message</th>
<td>' . $message . '</td>
</tr>
</table>
</div>
</div>
</body></html>';

	$to = "jheel_parikh@yahoo.com";
	$subject = "HTML email";

	$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
	$headers .= 'From: <jheel_parikh@yahoo.com>' . "\r\n";
	$headers .= 'Cc: jheel_parikh@yahoo.com' . "\r\n";

	mail($to, $subject, $message, $headers);
//var_dump($msg);
//$test = mail("jheel_parikh@yahoo.com","My subject",$msg,$headers);
//var_dump($test);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Parthiv Parikh - CS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <style>

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#skills">Skills</a></li>
                <li><a href="#core">Core Competencies</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center container1">
    <h3 class="margin"></h3>
    <img src="images/me2.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="250"
         height="250">
    <p style="font-size: 15px">I'm a Consulting Company Secretary and a competent professional with more than 25 years of rich,
        versatile & qualitative experience in Secretarial
        Functions, Statutory Compliance and Legal work.</p>
</div>

<!-- Second Container -->


<!-- Third Container (Grid) -->
<div class="container-fluid bg-2 text-center container3" id="skills">
    <h3 class='margin'><b>SKILLS</b></h3>
    <div class="row margin-row">
        <div class="col-sm-4 col-xs-12 ">
            <div class="box hover-bg">
                <h4 class='box-heading'>Secretarial Functions</h4>
                <p>Developing the minutes of Shareholder, Board, General & Committee Meetings as
                    required under Companies Act involving issuance of notices, drafting agenda &
                    resolutions to be passed at Board & Committee Meetings, preparing annual reports
                    and recording minutes as per Companies Act.</p>

            </div>
        </div>
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Corporate Restructing</h4>
                <p>Proficient in handling corporate restructuring issues like <b class="highlight-color">Amalgamation &
                        De-Merger, QIP, Rights, Bonus Issues, Issuance of NCDs, delisting of shares, issuance &
                        redemption of preference shares </b> and <b class="highlight-color">issuance of shares</b> on
                    private placement basis as well as carrying out due diligence with solicitors & advocates for the
                    same</p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Corporate Governance</h4>
                <p>Sound understanding of <b class="highlight-color"> Listing Agreement Guidelines with Stock Exchange,
                        SEBI Guidelines & Codes like SEBI (ICDR) Guidelines,SEBI Substantial Acquisition of Shares) and
                        Insider Trading Codes and other applicable SEBI Notifications and Regulations.</b></p>
            </div>
        </div>

    </div>


    <div class="row margin-row">
        <div class="col-sm-4 col-xs-12 ">
            <div class="box" data-lightbox-gallery="gallery1">
                <h4 class='box-heading'>Preparations and Meetings</h4>
                <p>Successfully organised AGM & Board Meetings of listed enterprises <b class="highlight-color">(consolidated
                        net worth over Rs. 23,000 Crores)</b></p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Reports and Documentation</h4>
                <p>Gained exposure in carrying out <b class="highlight-color">company law affairs</b> and preparing
                    Agendas & minutes of Board, AGM & Committee Meetings as required under Companies Act.</p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Annual Reports</h4>
                <p>Skilled in preparing Annual Reports of the company and
                    overseeing Annual Report of group companies including
                    preparation of Business Responsibility Reports, CSR Policy
                    & Whistle Blower Policy / Vigil Mechanism</p>
            </div>
        </div>
    </div>
    <div class="row margin-row">
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Liaison & Coordination</h4>
                <p>Out-of-the-box thinker with proven track record of interfacing with banks, financial institutions &
                    regulatory authorities such as <b>Stock Exchanges, SEBI, ROC, RD, OL, NSDL and CDSL.</b></p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Relationship Management</h4>
                <p>Demonstrated excellence in implementing <b class="highlight-color"> business laws & practices </b> by
                    developing cordial relations with clients like Bank Officials or External Agencies.</p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 ">
            <div class="box">
                <h4 class='box-heading'>Legal Works</h4>
                <p>Proven abilities in vetting of legal documents like <b class="highlight-color"> Loan documents,
                        Hypothecation, Mortgage Deeds, MOUs, Lease Documents, Agreements & filing of cases under NI Act
                        and liaising with external counsels for the same.</b></p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-3 text-center container4" id="core">
    <h3 class='margin'><b>CORE COMPETENCIES</b></h3>
    <div class="row margin-row">
        <div class="col-xs-12 ">
            <div class="box-core hover-bg">

                <p>Managing procedural formalities related to Incorporation of Company, Change of
                    Name from Public to Private Company / Private to Public Company, Change of
                    Name Clause, Winding-up of the Company, Filing of various forms with ROC
                    including XBRL filings</p>

                <p>Preparing & filing of necessary documents, returns & forms with ROC as required
                    under Companies <b> Act & Stock Exchange, Listing Agreement, Reserve Bank, NSDL,
                        CDSL and Government Authorities.</b></p>

                <p>Representing the company before Statutory Authorities like <b> ROC, RD, OL, Stock
                        Exchanges, SEBI for various corporate matters.</b></p>

                <p>Managing the capital restructuring programs like <b> Rights issue, QIP issue, issues of
                        bonus shares & shares on preferential shares, Issuance of NCDs and listing of such
                        securities </b> on stock exchanges and dealing with stock exchanges & authorities like
                    NSDL & CDSL for listing of securities and for payment of dividend
                </p>

                <p>Creating, maintaining and filing necessary records / documents / returns as per
                    provisions of various statutory acts such as <b> Company, Securities Contract
                        Regulation, SEBI and FEMA Acts </b></p>

                <p>Structuring & vetting of various legal documents such as <b> Loan documents,
                        Hypothecation , Mortgage deeds and other loan documents, Deeds, Affidavits,
                        Undertakings, MOUs, Power of Attorney, Declarations etc. </b></p>

                <p>Dealing with Solicitors & Advocates for obtaining their views & opinions on various
                    matters of Companies Act & Allied Laws and holding meetings and / or discussions
                    with them for the same.</p>

                </ul>

            </div>
        </div>

    </div>
</div>
</div>
<div class="container-fluid bg-4 text-center container4" id="experience" >
    <h3 class='margin'><b>EXPERIENCE</b></h3>
    <div class="row margin-row">
        <div class="col-xs-12"  style="text-align: center">
            <div class="box-exp col-xs-12">
                <div class="col-sm-4 col-xs-12 ">
                    <p><b>Elecon Engineering Co. Limited.,Vallabh Vidhyanagar </b> - Secretarial Head & Compliance
                        Officer</p>
                    <p><b>Montecarlo Limited., Ahmedabad </b> - Legal Head & Secretarial </p>

                </div>
                <div class="col-sm-4 col-xs-12 ">
                    <p><b>Adani Enterprises Ltd., Ahmedabad </b> - Company Secretary & Compliance Officer</p>
                    <p><b>Alembic Ltd., Baroda</b> - Company Secretary</p>

                </div>
                <div class="col-sm-4 col-xs-12 ">
                    <p><b>Torrent Pharmaceutical Ltd., Ahmedabad </b> - Company Secretary</p>
                    <p><b>Kinetic Motor Co. Ltd. (Formerly Known as Kinetic Honda Motor Ltd.), Pune</b> - as Company
                        Secretary</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid bg-5 text-center container4" id="contact" >
    <h3 class='margin'><b>CONTACT</b></h3>
    <div class="row margin-row">
        <div class="col-sm-6 col-xs-12 ">
            <iframe width="100%" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC2wMfWZ5bOaLyhIRdb9abN5XlaUmlg5j4 &q=Space+Needle,Seattle+WA"
                    allowfullscreen>
            </iframe>
        </div>
        <div class="col-sm-6 col-xs-12 ">
            <form name="sentMessage" method='POST' action='index.php'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name='name' id="name" class="form-control" placeholder="Name"
                                   required="required"/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" name='email' id="email" class="form-control" placeholder="Email"
                                   required="required"/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name='contactno' id="contactno" class="form-control"
                                   placeholder="Contact No." required="required"/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                              required></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-warning btn-lg" name='sendDetails'>Send Message</button>
            </form>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="container-fluid bg-5 text-center">
    <hr>
    <address>
        Email me @ <a href="mailto:parthiv.parikh25@gmail.com">parthiv.parikh25@gmail.com</a><br>
        Contact No: 9909960163
        <br>
        Box 564, Disneyland<br>
        USA
    </address>
</footer>

</body>
</html>


