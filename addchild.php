<?php
session_start();
include("include/config.php");
?>
<html class="supernova">
<head>
<script>console.warn("Server Side Rendering => render-from: frontend");</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
<!-- Web page icons -->
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>enutri Student Registration Form</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.36715" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.36715" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

      /*PREFERENCES STYLE*/
      /* NEW THEME STYLE */
      .supernova {
        background-color: undefined;
      }
      .form-all {
        margin-top: 72px;
        background-color: undefined;
        box-shadow: undefined
      }
      .form-line-active {
        background-color: undefined;
      }
      .form-line-error {
        background-color: undefined;
      }
      .form-line-error input:not(#coupon-input):not(.form-validation-error) {
        border-color: undefined;
      }
      .form-label {
        color: undefined;
      }
      .form-sub-label {
        color: undefined;
      }
      .form-dropdown,
      .form-textarea,
      .form-textbox,
      .form-checkbox + label:before, .form-radio + label:before,
      .form-radio + span:before, .form-checkbox + span:before {
        border-color: undefined;
        background-color: undefined;
        color: undefined;
      }
      .rating-item label {
        border-color: undefined;
        color: undefined;
        background-color: undefined;
      }
      .rating-item-title.for-to > label:first-child,
      .rating-item-title.for-from > label:first-child {
        background-color: transparent;
        color: undefined;
      }
      .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem {
        border-left-color: undefined;
      }
      .appointmentCalendarContainer {
        background-color: undefined;
        border-color: undefined;
      }
      .appointmentCalendarContainer .currentDate,
      .appointmentCalendarContainer .pickerItem .pickerYear,
      .appointmentCalendarContainer .pickerItem .pickerMonth
      {
        color: undefined;
      }
      .appointmentCalendar .calendarDay {
        color: undefined;
    }
      .appointmentCalendarContainer .monthYearPicker{
        border-color: undefined;
      }
      .rating-item input:focus+label, .rating-item input:hover+label {
        color: undefined;
      }
      .appointmentCalendar .calendarDay.isUnavailable,
      ::placeholder {
        color: undefined;
      }
      .form-spinner-button-container > *,
      .appointmentDayPickerButton,
      .form-matrix-column-headers, .form-matrix-row-headers {
        background-color: undefined;
      }
      .appointmentCalendar .dayOfWeek {
        background-color: undefined;
        color: undefined;
      }
      .form-matrix-values {
        background-color: undefined;
      }
      .rating-item input:focus+label, .rating-item input:hover+label {
        color: undefined;
        background-color: undefined;
        border-color: undefined;
      }
      .rating-item input:checked+label {
        background-color: undefined;
        border-color:undefined;
        color: #fff;
      }
      .form-checkbox + label, .form-radio + label :not(.rating-item){
        color: undefined;
      }
      .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .form-checkbox:hover + label:before, .form-radio:hover + label:before {
        border-color: undefined;
        box-shadow: undefined;
      }
      .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .form-checkbox:focus + label:before, .form-radio:focus + label:before {
        border-color: undefined;
        box-shadow: undefined;
      }
      .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child, .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th,
      .form-matrix-column-headers, .form-matrix-table td,
      .form-matrix-table td:last-child, .form-matrix-table th,
      .form-matrix-table th:last-child, .form-matrix-table tr:last-child td,
      .form-matrix-table tr:last-child th,
      .form-matrix-table tr:not([role=group])+tr[role=group] th
      {
        border-color: undefined;
        color: undefined;
      }
      .form-matrix-headers.form-matrix-column-headers,
      .isSelected .form-matrix-column-headers:nth-last-of-type(2) {
        border-color: undefined;
      }
      .form-radio:checked + label:after {
        background-color: undefined;
      }
      .form-checkbox:checked + label:before {
        background-color: undefined;
        border-color: undefined;
      }
      .form-radio:checked + label:before {
        border-color: undefined;
      }
      .form-header {
        color: undefined;
      }
      .jSignature, .signature-pad-passive {
        border-color: undefined;
      }
      .form-header-group .form-subHeader {
        color: undefined;
      }
      .form-header-group {
        border-color: undefined;
      }
      .header-large {
        color: undefined;
        border-color: undefined;
      }
      li[data-type="control_text"] .form-html {
        color: undefined;
      }
      li[data-type="control_datetime"] .extended .allowTime-container + .form-sub-label-container {
        background-color: undefined;
      }
      .submit-button {
        background-color: undefined;
        border-color: undefined;
      }
      .form-sacl-button, form-submit-print {
        color: undefined;
      }
      .form-pagebreak-back {
        background-color: undefined;
        border-color: undefined;
      }
      .form-pagebreak-next {
        background-color: undefined;
      }
      .form-pagebreak, .form-pagebreak > div {
        border-color: undefined;
      }
      .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper {
        border-color: undefined;
      }

      /* NEW THEME STYLE */
      /*PREFERENCES STYLE*/
      /*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
      border: 1px solid transparent;
    }
  .form-all {
    color: #2C3345;
  }
  .form-label-top,
  .form-label-left,
  .form-label-right,
  .form-html,
  .form-checkbox-item label,
  .form-radio-item label {
    color: #2C3345;
  }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      .supernova {
        background-image: url("//www.jotform.com/images/brushed.png");
      }
      #stage {
        background-image: url("//www.jotform.com/images/brushed.png");
      }
    
      .form-all {
        background-image: url("//www.jotform.com/images/brushed.png");
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
    
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.36715" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.36715" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.36715" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.36715" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.36715" type="text/javascript"></script>
<!-- <script type="text/javascript">	
    function computeBMI()
    {
        //Obtain user inputs
        var height=Number(document.getElementById("height").value);
        var weight=Number(document.getElementById("weight").value);



        //Perform calculation
        var BMI=weight/Math.pow(height,2);

        //Display result of calculation
        document.getElementById("output").innerText=Math.round(BMI*100)/100;

        var output =  Math.round(BMI*100)/100
        if (output<18.5)
        document.getElementById("comment").innerText = "Underweight";
      else   if (output>=18.5 && output<=25)
        document.getElementById("comment").innerText = "Normal";
     else   if (output>=25 && output<=30)
        document.getElementById("comment").innerText = "Obese";
     else   if (output>30)
        document.getElementById("comment").innerText = "Overweight";
       // document.getElementById("answer").value = output; 
    }
</script>
-->
</head>
<body>

<?php
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
				
	if (mysqli_num_rows($result)>0) {
		//output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		?>
				
<form class="jotform-form" action="addchild_action.php" method="post" accept-charset="utf-8" autocomplete="on">
  <div role="main" class="form-all">
	<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
	<input type="hidden" name="user_name" value="<?php echo $row['user_name'] ?>">
	
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Student Registration Form
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Fill out the form in a decent manner
            </div>
          </div>
        </div>
      </li>

      <li class="form-line" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_4" for="first_4"> Student Name </label>
        <div id="cid_4" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_4" name="studentname" class="form-textbox" autoComplete="section-input_4 given-name" size="10" data-component="first" aria-labelledby="label_4 sublabel_4_first" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false"> Full Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_studentid" id="id_5">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_5" for="first_5"> Student ID </label>
        <div id="cid_5" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_5" name="studentid" class="form-textbox" autoComplete="section-input_4 given-name" size="10" data-component="first" aria-labelledby="label_5 sublabel_5_first" />
              <label class="form-sub-label" for="first_5" id="sublabel_5_first" style="min-height:13px" aria-hidden="false"> Matric No </label>
            </span>
          </div>
        </div>
      </li>	  
  <!--    <li class="form-line form-line-column form-col-1" data-type="control_birthdate" id="id_24">
        <label class="form-label form-label-top" id="label_24" for="input_24"> Birth Date </label>
        <div id="cid_24" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="birth_month" id="input_24_month" class="form-dropdown" data-component="birthdate-month" aria-labelledby="label_24 sublabel_24_month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_24_month" id="sublabel_24_month" style="min-height:13px" aria-hidden="false"> Month </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="birth_day" id="input_24_day" class="form-dropdown" data-component="birthdate-day" aria-labelledby="label_24 sublabel_24_day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_24_day" id="sublabel_24_day" style="min-height:13px" aria-hidden="false"> Day </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q24_birthDate24[year]" id="input_24_year" class="form-dropdown" data-component="birthdate-year" aria-labelledby="label_24 sublabel_24_year">
                <option>  </option>
                <option value="2022"> 2022 </option>
                <option value="2021"> 2021 </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_24_year" id="sublabel_24_year" style="min-height:13px" aria-hidden="false"> Year </label>
            </span>
          </div>
        </div>
      </li> -->
      <li class="form-line form-line-column form-col-2" data-type="control_birthdate" id="id_3">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_3" for="first_3"> Student Birth </label>
        <div id="cid_3" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="date" id="first_3" name="birth" class="form-textbox" autoComplete="section-input_3 given-name" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Birth Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_dropdown" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="input_3"> Gender </label>
        <div id="cid_3" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="input_3" name="gender" style="width:310px" data-component="dropdown">
            <option value=""> Please Select </option>
            <option value="Male"> Male </option>
            <option value="Female"> Female </option>
          </select>
        </div>
      </li>

      <li class="form-line form-line-column form-col-3" data-type="control_height" id="id_24">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="label_24" for="first_24"> Student Height </label>
        <div id="cid_24" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="height" name="height" class="form-textbox" autoComplete="section-input_3 given-name" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Metres (m) </label>
            </span>
          </div>
        </div>
      </li>	
	  
      <li class="form-line form-line-column form-col-3" data-type="control_weight" id="id_25">
        <label class="form-label form-label-top form-label-extended form-label-auto" id="id_25" for="first_25"> Student Weight </label>
        <div id="cid_25" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="weight" name="weight" class="form-textbox" autoComplete="section-input_3 given-name" size="10" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Kilograms (kg) </label>
            </span>
          </div>
        </div>
      </li>		  

      <li class="form-line form-line-column form-col-1" data-type="control_button" id="id_20">
        <div id="cid_20" class="form-input-wide" data-layout="full">                                    
          <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_20" type="submit" name="addstudent" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" >
              Submit
            </button>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_button" id="id_19">
        <div id="cid_19" class="form-input-wide" data-layout="full">
          <div data-align="right" class="form-buttons-wrapper form-buttons-right   jsTest-button-wrapperField">
            <button id="input_19" type="reset" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Clear
            </button>
          </div>
        </div>
      </li>
      <li style="clear:both">
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
</form>
<?php
		}
	}
	else{
		echo"Sorry, 0 result found";
	}
	
	mysqli_close($conn);
?>

</body>
</html>
