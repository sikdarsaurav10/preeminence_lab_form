<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="description" content="Registration Form">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Preeminence Lab Software Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container main">
        <div class="card">
            <div class="card-body shadow p-3 mb-5 bg-white rounded">
                <h3 class="card-title">Registration Form For Students</h3>
                <hr>
                <button type="button" class="btn btn-lg btn-primary">Personel Details:</button>
                <br>
                <br>
                <br>
                <form action="" method="post">
                    <div class="text-center">
                        <div class="form-group row">
                            <label for="inputFirstName" class="col-sm-4 col-form-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="Vivek" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName" class="col-sm-4 col-form-label">Last Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Sharma" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFatherName" class="col-sm-4 col-form-label" class="col-sm-4 col-form-label">Father's Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputFatherName" name="fatherName" placeholder="Sunil Sharma" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectNation" class="col-sm-4 col-form-label">Nationality</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="selectNation" name="nation" required>
                                    <option selected disabled>--Select Nationality--</option>
                                    <option value="indian">Indian</option>
                                    <option value="nri">NRI</option>
                                    <option value="foreigner">Foreigner</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectGender" class="col-sm-4 col-form-label">Gender</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectGender" name="gender">
                              <option selected disabled>--Select Gender--</option>
                              <option value="male">MALE</option>
                              <option value="female">FEMALE</option>
                              <option value="other">OTHER</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectWork" class="col-sm-4 col-form-label">Working Status</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectWork" name="work">
                              <option selected disabled>--Select Status--</option>
                              <option value="student">Student</option>
                              <option value="employed">Employed</option>
                              <option value="unemployed">Unemployed</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputMailAddress" class="col-sm-4 col-form-label">Mailing Addreess</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputMailAddress" name="mailAddress" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-4 col-form-label">Email ID</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="abc@email.com" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAltEmail" class="col-sm-4 col-form-label">Alternate Email ID</label>
                            <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputAltEmail" name="altEmail" placeholder="abc@email.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNumber" class="col-sm-4 col-form-label">Phone No.</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputNumber" name="number" placeholder="971 XXX XXXX" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputHomeNumber" class="col-sm-4 col-form-label">Home Ph No.</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputHomeNumber" name="homeNumber">
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-lg btn-primary">Educational Details:</button>
                    <br>
                    <br>
                    <br>
                    <div class="text-center">
                        <div class="form-group row">
                            <label for="selectWork" class="col-sm-4 col-form-label">Working Status</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectWork" name="work2">
                              <option selected disabled>--Select Status--</option>
                              <option value="student">Student</option>
                              <option value="employed">Employed</option>
                              <option value="unemployed">Unemployed</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectBranch" class="col-sm-4 col-form-label">Branch</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectBranch" name="brnach">
                              <option selected disabled>--Select Branch--</option>
                              <option value="engg_cs">Engg.(CS)</option>
                              <option value="engg_it">Engg.(IT)</option>
                              <option value="engg_ec">Engg.(EC)</option>
                              <option value="engg_et">Engg.(ET)</option>
                              <option value="engg_ei">Engg.(EI)</option>
                              <option value="engg_ee">Engg.(EE)</option>
                              <option value="engg_en">Engg.(EN)</option>
                              <option value="engg_me">Engg.(ME)</option>
                              <option value="engg_civil">Engg.(CIVIL)</option>
                              <option value="engg_chemical">Engg.(CHEMICAL)</option>
                              <option value="mca">MCA</option>
                              <option value="bca">BCA</option>
                              <option value="msc_it">M.Sc(IT)</option>
                              <option value="msc_cs">M.Sc(CS)</option>
                              <option value="msc_others">M.Sc(Others)</option>
                              <option value="bsc_it">B.Sc(IT)</option>
                              <option value="bsc_cs">B.Sc(CS)</option>
                              <option value="bsc_other">B.Sc(Others)</option>
                              <option value="other">Other</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectYear" class="col-sm-4 col-form-label">Year</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectYear" name="year">
                              <option selected disabled>--Select Year--</option>
                              <option value="first">First</option>
                              <option value="second">Second</option>
                              <option value="third">Third</option>
                              <option value="fourth">Fourth</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputCollege" class="col-sm-4 col-form-label">College Name</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputCollege" name="college">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectState" class="col-sm-4 col-form-label">Select State</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectState" name="state">
                              <option selected disabled>--Select State--</option>
                              <option value="Andhra_Pradesh">Andhra Pradesh</option>
                              <option value="Arunachal_Pradesh">Arunachal Pradesh</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value="Uttar_Pradesh">Uttar Pradesh</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Himachal_Pradesh">Himachal Pradesh</option>
                              <option value="Jammu_and_Kashmir">Jammu and Kashmir</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="West_Bengal">West Bengal</option>
                              <option value="Madhya_Pradesh">Madhya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Manipur">Manipur</option>
                              <option value="Meghalaya">Meghalaya</option>
                              <option value="Mizoram">Mizoram</option>
                              <option value="Nagaland">Nagaland</option>
                              <option value="Orissa">Orissa</option>
                              <option value="Punjab">Punjab</option>
                              <option value="Rajasthan">Rajasthan</option>
                              <option value="Sikkim">Sikkim</option>
                              <option value="Tamil_Nadu">Tamil Nadu</option>
                              <option value="Telangana">Telangana</option>
                              <option value="Tripura">Tripura</option>
                              <option value="Uttarakhand">Uttarakhand</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectCity" class="col-sm-4 col-form-label">Select City</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectCity" name="city">
                              <option selected disabled>--Select City--</option>
                              <option value="first">First</option>
                              <option value="second">Second</option>
                              <option value="third">Third</option>
                              <option value="fourth">Fourth</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-lg btn-primary">Training Details:</button>
                    <br>
                    <br>
                    <br>
                    <div class="text-center">
                        <div class="form-group row">
                            <label for="selectTraining" class="col-sm-4 col-form-label">Select Training</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectTraining" name="training">
                              <option selected disabled>--Select Training--</option>
                              <option value="regular">Regular Training</option>
                              <option value="winter">Winter Training</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectTrainingCity" class="col-sm-4 col-form-label">Taining Location</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectTrainingCity" name="trainingCity">
                              <option selected disabled>--Select Location--</option>
                              <option value="roorkee">ROORKEE</option>
                              <option value="noida">NOIDA</option>
                              <option value="dehradun">DEHRADUN</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputTrainingCourse" class="col-sm-4 col-form-label">Course</label>
                            <div class="col-sm-8">
                            <select class="form-control" name="course" id="inputTrainingCourse">
                                <option selected disabled>--Select Course--</option>
                                <option value=".net">.NET</option>
                                <option value="3D_Printing">3D Printing</option>
                                <option value="Adv_.NET">Adv .NET</option>
                                <option value="Adv_Networking(CCNA &amp; CCNA Security)">Adv Networking(CCNA &amp; CCNA Security)</option>
                                <option value="Adv_Networking(CCNP &amp; CCNP Security)">Adv Networking(CCNP &amp; CCNP Security)</option>
                                <option value="Adv._JAVA">Adv. JAVA</option>
                                <option value="Adv._PHP">Adv. PHP</option>
                                <option value="Advance_.NET with Angular JS">Advance .NET with Angular JS</option>
                                <option value="Advance_Industrial Automation (using HMI &amp; VFD)">Advance Industrial Automation (using HMI &amp; VFD)</option>
                                <option value="Advanced_Excel">Advanced Excel</option>
                                <option value="AFT_Fathom">AFT Fathom</option>
                                <option value="Amazon_Web Services">Amazon Web Services</option>
                                <option value="ANDROID">ANDROID</option>
                                <option value="Angular_JS">Angular JS</option>
                                <option value="Ansys">Ansys</option>
                                <option value="Arduino">Arduino</option>
                                <option value="Artificial_Intelligence">Artificial Intelligence</option>
                                <option value="Artificial_Intelligence using Python">Artificial Intelligence using Python</option>
                                <option value="AUTO_CAD">AUTO CAD</option>
                                <option value="AutoCAD_Solidworks ">AutoCAD + Solidworks </option>
                                <option value="AutoCAD_Staad.pro">AutoCAD + Staad.pro</option>
                                <option value="Big_Data_Hadoop">Big Data Hadoop</option>
                                <option value="Blockchain">Blockchain</option>
                                <option value="C_C++">C and C++</option>
                                <option value="C_Lang">C Lang</option>
                                <option value="C_Programming">C Programming</option>
                                <option value="CATIA">CATIA</option>
                                <option value="CCNA">CCNA</option>
                                <option value="CCNA_CCNP">CCNA &amp; CCNP</option>
                                <option value="CCNA_Security">CCNA Security</option>
                                <option value="CCNP">CCNP</option>
                                <option value="Civil_Designing_(AutoCAD Revit Architecture)">Civil Designing (AutoCAD &amp; Revit Architecture)</option>
                                <option value="Civil_Designing_(AutoCAd, Revit Architecture Staad.Pro)">Civil Designing (AutoCAd, Revit Architecture &amp; Staad.Pro)</option>
                                <option value="Cloud_Computing">Cloud Computing</option>
                                <option value="Core_JAVA Adv._JAVA">Core JAVA &amp; Adv. JAVA</option>
                                <option value="Core_Java_Android">Core Java &amp; Android</option>
                                <option value="CREO(Pro-E)">CREO(Pro-E)</option>
                                <option value="Cyber_Security">Cyber Security</option>
                                <option value="Data_Analytics">Data Analytics</option>
                                <option value="Data_Analytics_using_Machine_Learning">Data Analytics using Machine Learning</option>
                                <option value="Data_Analytics_using_Python">Data Analytics using Python</option>
                                <option value="Data_Science ">Data Science </option>
                                <option value="Data_Science_(using Hadoop)">Data Science (using Hadoop)</option>
                                <option value="Data_Science_using_Python">Data Science using Python</option>
                                <option value="Data_Structure_using_C">Data Structure using C</option>
                                <option value="Deep_Learning_using_Python">Deep Learning using Python</option>
                                <option value="Dev/Ops">Dev/Ops</option>
                                <option value="Digital_Marketing">Digital Marketing</option>
                                <option value="Diploma_in_Artificial_Intelligence">Diploma in Artificial Intelligence</option>
                                <option value="Diploma_in_CAD_Design">Diploma in CAD Design</option>
                                <option value="Diploma_in_Digital_Marketing">Diploma in Digital Marketing</option>
                                <option value="Diploma_in_Networking">Diploma in Networking</option>
                                <option value="Django">Django</option>
                                <option value="Django_using_Python">Django using Python</option>
                                <option value="E-CAD">E-CAD</option>
                                <option value="E-Tab">E-Tab</option>
                                <option value="E-Tabs">E-Tabs</option>
                                <option value="EMBEDDED_C">EMBEDDED C</option>
                                <option value="Embedded_C_AVR">Embedded C &amp; AVR</option>
                                <option value="Embedded_System_(Using PIC)">Embedded System (Using PIC)</option>
                                <option value="Embedded_System_Design_(Embedded_C_AVR_ARM)">Embedded System Design (Embedded C, AVR, ARM)</option>
                                <option value="Embedded System_Desig_(Embedded_C_AVR_STM32)">Embedded System Design(Embedded C, AVR &amp; STM32)</option>
                                <option value="Embedded_System(using_AVR)">Embedded System(using AVR)</option>
                                <option value="Ethical_Hacking">Ethical Hacking</option>
                                <option value="Full_Stack_Development">Full Stack Development</option>
                                <option value="HANA_ABAP">HANA - ABAP</option>
                                <option value="HANA_ABAP">HANA ABAP</option>
                                <option value="Industrial_Automation">Industrial Automation</option>
                                <option value="IOS">IOS</option>
                                <option value="IOT">IOT</option>
                                <option value="IOT_using_Arduino">IOT using Arduino</option>
                                <option value="IOT_Using_Python">IOT Using Python</option>
                                <option value="IOT using Raspberry Pi">IOT using Raspberry Pi</option>
                                <option value="J2EE">J2EE</option>
                                <option value="JAVA">JAVA</option>
                                <option value="LINUX">LINUX</option>
                                <option value="Machine_Learning">Machine Learning</option>
                                <option value="Machine_Learning_Using_Python">Machine Learning Using Python</option>
                                <option value="Manual_Testing">Manual Testing</option>
                                <option value="MATLAB">MATLAB</option>
                                <option value="MCSA">MCSA</option>
                                <option value="MCSE">MCSE</option>
                                <option value="Mean_Stack">Mean Stack</option>
                                <option value="MERN_STACK">MERN STACK</option>
                                <option value="MICROSOFT_AZURE">MICROSOFT AZURE</option>
                                <option value="MSBI">MSBI</option>
                                <option value="MVC with Angular">MVC with Angular</option>
                                <option value="Mysql_Database">Mysql Database</option>
                                <option value="Office_365">Office 365</option>
                                <option value="Oracle_(SQL/PLSQL)">Oracle (SQL/PLSQL)</option>
                                <option value="Oracle_11g_Core_DBA">Oracle 11g Core DBA</option>
                                <option value="Oracle_DBA">Oracle DBA</option>
                                <option value="PCB_Ckt Design">PCB &amp; Ckt Design</option>
                                <option value="PHP">PHP</option>
                                <option value="PHP_Programming">PHP Programming</option>
                                <option value="PLC_Scada">PLC &amp; Scada</option>
                                <option value="Primavera">Primavera</option>
                                <option value="Python">Python</option>
                                <option value="Python_Data Science">Python + Data Science</option>
                                <option value="Python_and_Django">Python and Django</option>
                                <option value="R_PROGRAMING">R PROGRAMING</option>
                                <option value="REACT_JS">REACT JS</option>
                                <option value="React_Native">React Native</option>
                                <option value="Revit_Stadd._Pro">Revit + Stadd. Pro</option>
                                <option value="Revit_Architecture">Revit Architecture</option>
                                <option value="Revit_MEP">Revit MEP</option>
                                <option value="Revit_Structure">Revit Structure</option>
                                <option value="RHCE">RHCE</option>
                                <option value="ROBOTICS(Using AVR)">ROBOTICS(Using AVR)</option>
                                <option value="Salesforce">Salesforce</option>
                                <option value="SAP_HANA_FI">SAP HANA FI</option>
                                <option value="SAP_HANA_MM">SAP HANA MM</option>
                                <option value="SAP_HANA_PP">SAP HANA PP</option>
                                <option value="SAP-_HANA">SAP- HANA</option>
                                <option value="SAP-ABAP">SAP-ABAP</option>
                                <option value="SAP-FiCO">SAP-FiCO</option>
                                <option value="SAP-HANA_MM">SAP-HANA MM</option>
                                <option value="SAP-HANA_SD">SAP-HANA SD</option>
                                <option value="SAP-HR">SAP-HR</option>
                                <option value="SAP-MM">SAP-MM</option>
                                <option value="SAP-SD">SAP-SD</option>
                                <option value="SAS">SAS</option>
                                <option value="Selenium">Selenium</option>
                                <option value="SEO">SEO</option>
                                <option value="SOFTWARE_TESTING">SOFTWARE TESTING</option>
                                <option value="Software_Testing_(Automation)">Software Testing (Automation)</option>
                                <option value="Software_testing_[Manual_Automation(Selenium)]">Software testing [Manual &amp; Automation(Selenium)]</option>
                                <option value="Solidworks">Solidworks</option>
                                <option value="SQL_Server">SQL Server</option>
                                <option value="Staad_Pro">Staad. Pro</option>
                                <option value="STM32">STM32</option>
                                <option value="System_Verilog">System Verilog</option>
                                <option value="UI_Design">UI Design</option>
                                <option value="UI_Design_with_Angular">UI Design with Angular</option>
                                <option value="UI_Design_with_Mean_Stack">UI Design with Mean Stack</option>
                                <option value="UI_Design_with_Mern_Stack">UI Design with Mern Stack</option>
                                <option value="VERILOG_HDL">VERILOG HDL</option>
                                <option value="VHDL">VHDL</option>
                                <option value="VLSI">VLSI</option>
                                <option value="Web_Designing">Web Designing</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectBatchDate" class="col-sm-4 col-form-label">Course Date</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectBatchDate" name="batchDate">
                              <option selected disabled>--Select Date--</option>
                              <option value="roorkee">ROORKEE</option>
                              <option value="noida">NOIDA</option>
                              <option value="dehradun">DEHRADUN</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="selectCourseDuration" class="col-sm-4 col-form-label">Course Duration</label>
                            <div class="col-sm-8">
                            <select class="form-control" id="selectCourseDuration" name="courseDuration">
                              <option selected disabled>--Select Duration--</option>
                              <option value="1_year">1 Year</option>
                              <option value="1_year">1 Year</option>
                              <option value="1_year">1 Year</option>
                              <option value="1_year">1 Year</option>
                              <option value="1_year">1 Year</option>
                              <option value="1_year">1 Year</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-check text-left" style="padding-left: 130px;">
                            <input class="form-check-input" type="checkbox" value="1" id="LodgingCheck">
                            <label class="form-check-label" for="LodgingCheck">
                                Fooding and Lodging
                            </label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-lg btn-primary">Bank Details:</button>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col text-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="reg_fee" id="feesRadio1" value="0">
                                <label class="form-check-label" for="feesRadio1">Registration Fee</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="reg_fee" id="feesRadio2" value="1">
                                <label class="form-check-label" for="feesRadio2">Complete Fee</label>
                              </div>
                        </div>
                        <div class="col text-center">
                            <div class="form-group row">
                                <label for="inputFee">Fee</label>
                                <input type="text" class="form-control" id="inputFee" name="fee">
                            </div>
                            <div class="form-group row">
                                <label for="inputFeeGST">Fee with GST</label>
                                <input type="text" class="form-control" id="inputFeeGST" name="feeGst">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-lg btn-primary">Declaration of Student:</button>
                    <br>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="declare" id="declareRadio" value="declare">
                        <label class="form-check-label" for="declareRadio">
                        I here by declare that all the above information are true to the best of my knowledge.
                        </label>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-block btn-lg btn-success px-5 pt-3">Click Here To Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>