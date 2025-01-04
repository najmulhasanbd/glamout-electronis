@extends('frontend.frontend_master')

@section('frontend_content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-area p-2" style="background-color: #FED000;">
        <ul class="d-flex align-items-center gap-3 container-fluid">
            <li><a href="{{ url('/') }}" class="fw-semibold">Home <i class="fa fa-play" style="font-size: 10px;"></i></a>
            </li>
            <li>Contact</li>
        </ul>
    </div>
    <!-- breadcrumb endstart -->

    <!-- page banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend/images/page-banner/about.jpg') }});">
        <div class="container">
            <div class="page-banner-content">
                <h2>contact</h2>
            </div>
        </div>
    </div>
    <!-- page banner -->

    <!-- about content -->
    <main class="main-area py-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="media-content">
                        <h2 class="page_title"><span>contact us </span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="platform-content">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label for="location"><b>Your Location</b></label>
                                        <select class="js-example-basic-single form-control" name="location" required>
                                            <option value="" selected="selected">Select Country</option>
                                            <option value="afghanistan" {{ old('location') == 'afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                                            <option value="albania" {{ old('location') == 'albania' ? 'selected' : '' }}>Albania</option>
                                            <option value="algeria" {{ old('location') == 'algeria' ? 'selected' : '' }}>Algeria</option>
                                            <option value="andorra" {{ old('location') == 'andorra' ? 'selected' : '' }}>Andorra</option>
                                            <option value="angola" {{ old('location') == 'angola' ? 'selected' : '' }}>Angola</option>
                                            <option value="argentina" {{ old('location') == 'argentina' ? 'selected' : '' }}>Argentina</option>
                                            <option value="armenia" {{ old('location') == 'armenia' ? 'selected' : '' }}>Armenia</option>
                                            <option value="australia" {{ old('location') == 'australia' ? 'selected' : '' }}>Australia</option>
                                            <option value="austria" {{ old('location') == 'austria' ? 'selected' : '' }}>Austria</option>
                                            <option value="azerbaijan" {{ old('location') == 'azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                                            <option value="bahamas" {{ old('location') == 'bahamas' ? 'selected' : '' }}>Bahamas</option>
                                            <option value="bahrain" {{ old('location') == 'bahrain' ? 'selected' : '' }}>Bahrain</option>
                                            <option value="bangladesh" {{ old('location') == 'bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                                            <option value="barbados" {{ old('location') == 'barbados' ? 'selected' : '' }}>Barbados</option>
                                            <option value="belarus" {{ old('location') == 'belarus' ? 'selected' : '' }}>Belarus</option>
                                            <option value="belgium" {{ old('location') == 'belgium' ? 'selected' : '' }}>Belgium</option>
                                            <option value="belize" {{ old('location') == 'belize' ? 'selected' : '' }}>Belize</option>
                                            <option value="benin" {{ old('location') == 'benin' ? 'selected' : '' }}>Benin</option>
                                            <option value="bhutan" {{ old('location') == 'bhutan' ? 'selected' : '' }}>Bhutan</option>
                                            <option value="bolivia" {{ old('location') == 'bolivia' ? 'selected' : '' }}>Bolivia</option>
                                            <option value="bosnia-and-herzegovina" {{ old('location') == 'bosnia-and-herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
                                            <option value="botswana" {{ old('location') == 'botswana' ? 'selected' : '' }}>Botswana</option>
                                            <option value="brazil" {{ old('location') == 'brazil' ? 'selected' : '' }}>Brazil</option>
                                            <option value="brunei" {{ old('location') == 'brunei' ? 'selected' : '' }}>Brunei</option>
                                            <option value="bulgaria" {{ old('location') == 'bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                                            <option value="burkina-faso" {{ old('location') == 'burkina-faso' ? 'selected' : '' }}>Burkina Faso</option>
                                            <option value="burundi" {{ old('location') == 'burundi' ? 'selected' : '' }}>Burundi</option>
                                            <option value="cambodia" {{ old('location') == 'cambodia' ? 'selected' : '' }}>Cambodia</option>
                                            <option value="cameroon" {{ old('location') == 'cameroon' ? 'selected' : '' }}>Cameroon</option>
                                            <option value="canada" {{ old('location') == 'canada' ? 'selected' : '' }}>Canada</option>
                                            <option value="cape-verde" {{ old('location') == 'cape-verde' ? 'selected' : '' }}>Cape Verde</option>
                                            <option value="central-african-republic" {{ old('location') == 'central-african-republic' ? 'selected' : '' }}>Central African Republic</option>
                                            <option value="chad" {{ old('location') == 'chad' ? 'selected' : '' }}>Chad</option>
                                            <option value="chile" {{ old('location') == 'chile' ? 'selected' : '' }}>Chile</option>
                                            <option value="china" {{ old('location') == 'china' ? 'selected' : '' }}>China</option>
                                            <option value="colombia" {{ old('location') == 'colombia' ? 'selected' : '' }}>Colombia</option>
                                            <option value="comoros" {{ old('location') == 'comoros' ? 'selected' : '' }}>Comoros</option>
                                            <option value="congo" {{ old('location') == 'congo' ? 'selected' : '' }}>Congo</option>
                                            <option value="costa-rica" {{ old('location') == 'costa-rica' ? 'selected' : '' }}>Costa Rica</option>
                                            <option value="croatia" {{ old('location') == 'croatia' ? 'selected' : '' }}>Croatia</option>
                                            <option value="cuba" {{ old('location') == 'cuba' ? 'selected' : '' }}>Cuba</option>
                                            <option value="cyprus" {{ old('location') == 'cyprus' ? 'selected' : '' }}>Cyprus</option>
                                            <option value="czech-republic" {{ old('location') == 'czech-republic' ? 'selected' : '' }}>Czech Republic</option>
                                            <option value="denmark" {{ old('location') == 'denmark' ? 'selected' : '' }}>Denmark</option>
                                            <option value="djibouti" {{ old('location') == 'djibouti' ? 'selected' : '' }}>Djibouti</option>
                                            <option value="dominica" {{ old('location') == 'dominica' ? 'selected' : '' }}>Dominica</option>
                                            <option value="dominican-republic" {{ old('location') == 'dominican-republic' ? 'selected' : '' }}>Dominican Republic</option>
                                            <option value="ecuador" {{ old('location') == 'ecuador' ? 'selected' : '' }}>Ecuador</option>
                                            <option value="egypt" {{ old('location') == 'egypt' ? 'selected' : '' }}>Egypt</option>
                                            <option value="el-salvador" {{ old('location') == 'el-salvador' ? 'selected' : '' }}>El Salvador</option>
                                            <option value="equatorial-guinea" {{ old('location') == 'equatorial-guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                                            <option value="eritrea" {{ old('location') == 'eritrea' ? 'selected' : '' }}>Eritrea</option>
                                            <option value="estonia" {{ old('location') == 'estonia' ? 'selected' : '' }}>Estonia</option>
                                            <option value="eswatini" {{ old('location') == 'eswatini' ? 'selected' : '' }}>Eswatini</option>
                                            <option value="ethiopia" {{ old('location') == 'ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                                            <option value="fiji" {{ old('location') == 'fiji' ? 'selected' : '' }}>Fiji</option>
                                            <option value="finland" {{ old('location') == 'finland' ? 'selected' : '' }}>Finland</option>
                                            <option value="france" {{ old('location') == 'france' ? 'selected' : '' }}>France</option>
                                            <option value="gabon" {{ old('location') == 'gabon' ? 'selected' : '' }}>Gabon</option>
                                            <option value="gambia" {{ old('location') == 'gambia' ? 'selected' : '' }}>Gambia</option>
                                            <option value="georgia" {{ old('location') == 'georgia' ? 'selected' : '' }}>Georgia</option>
                                            <option value="germany" {{ old('location') == 'germany' ? 'selected' : '' }}>Germany</option>
                                            <option value="ghana" {{ old('location') == 'ghana' ? 'selected' : '' }}>Ghana</option>
                                            <option value="greece" {{ old('location') == 'greece' ? 'selected' : '' }}>Greece</option>
                                            <option value="grenada" {{ old('location') == 'grenada' ? 'selected' : '' }}>Grenada</option>
                                            <option value="guatemala" {{ old('location') == 'guatemala' ? 'selected' : '' }}>Guatemala</option>
                                            <option value="guinea" {{ old('location') == 'guinea' ? 'selected' : '' }}>Guinea</option>
                                            <option value="guinea-bissau" {{ old('location') == 'guinea-bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
                                            <option value="guyana" {{ old('location') == 'guyana' ? 'selected' : '' }}>Guyana</option>
                                            <option value="haiti" {{ old('location') == 'haiti' ? 'selected' : '' }}>Haiti</option>
                                            <option value="honduras" {{ old('location') == 'honduras' ? 'selected' : '' }}>Honduras</option>
                                            <option value="hungary" {{ old('location') == 'hungary' ? 'selected' : '' }}>Hungary</option>
                                            <option value="iceland" {{ old('location') == 'iceland' ? 'selected' : '' }}>Iceland</option>
                                            <option value="india" {{ old('location') == 'india' ? 'selected' : '' }}>India</option>
                                            <option value="indonesia" {{ old('location') == 'indonesia' ? 'selected' : '' }}>Indonesia</option>
                                            <option value="iran" {{ old('location') == 'iran' ? 'selected' : '' }}>Iran</option>
                                            <option value="iraq" {{ old('location') == 'iraq' ? 'selected' : '' }}>Iraq</option>
                                            <option value="ireland" {{ old('location') == 'ireland' ? 'selected' : '' }}>Ireland</option>
                                            <option value="israel" {{ old('location') == 'israel' ? 'selected' : '' }}>Israel</option>
                                            <option value="italy" {{ old('location') == 'italy' ? 'selected' : '' }}>Italy</option>
                                            <option value="jamaica" {{ old('location') == 'jamaica' ? 'selected' : '' }}>Jamaica</option>
                                            <option value="japan" {{ old('location') == 'japan' ? 'selected' : '' }}>Japan</option>
                                            <option value="jordan" {{ old('location') == 'jordan' ? 'selected' : '' }}>Jordan</option>
                                            <option value="kazakhstan" {{ old('location') == 'kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                                            <option value="kenya" {{ old('location') == 'kenya' ? 'selected' : '' }}>Kenya</option>
                                            <option value="kiribati" {{ old('location') == 'kiribati' ? 'selected' : '' }}>Kiribati</option>
                                            <option value="korea-south" {{ old('location') == 'korea-south' ? 'selected' : '' }}>South Korea</option>
                                            <option value="kosovo" {{ old('location') == 'kosovo' ? 'selected' : '' }}>Kosovo</option>
                                            <option value="kuwait" {{ old('location') == 'kuwait' ? 'selected' : '' }}>Kuwait</option>
                                            <option value="kyrgyzstan" {{ old('location') == 'kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                                            <option value="laos" {{ old('location') == 'laos' ? 'selected' : '' }}>Laos</option>
                                            <option value="latvia" {{ old('location') == 'latvia' ? 'selected' : '' }}>Latvia</option>
                                            <option value="lebanon" {{ old('location') == 'lebanon' ? 'selected' : '' }}>Lebanon</option>
                                            <option value="lesotho" {{ old('location') == 'lesotho' ? 'selected' : '' }}>Lesotho</option>
                                            <option value="liberia" {{ old('location') == 'liberia' ? 'selected' : '' }}>Liberia</option>
                                            <option value="libya" {{ old('location') == 'libya' ? 'selected' : '' }}>Libya</option>
                                            <option value="liechtenstein" {{ old('location') == 'liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                                            <option value="lithuania" {{ old('location') == 'lithuania' ? 'selected' : '' }}>Lithuania</option>
                                            <option value="luxembourg" {{ old('location') == 'luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                                            <option value="madagascar" {{ old('location') == 'madagascar' ? 'selected' : '' }}>Madagascar</option>
                                            <option value="malawi" {{ old('location') == 'malawi' ? 'selected' : '' }}>Malawi</option>
                                            <option value="malaysia" {{ old('location') == 'malaysia' ? 'selected' : '' }}>Malaysia</option>
                                            <option value="maldives" {{ old('location') == 'maldives' ? 'selected' : '' }}>Maldives</option>
                                            <option value="mali" {{ old('location') == 'mali' ? 'selected' : '' }}>Mali</option>
                                            <option value="malta" {{ old('location') == 'malta' ? 'selected' : '' }}>Malta</option>
                                            <option value="marshall-islands" {{ old('location') == 'marshall-islands' ? 'selected' : '' }}>Marshall Islands</option>
                                            <option value="mauritania" {{ old('location') == 'mauritania' ? 'selected' : '' }}>Mauritania</option>
                                            <option value="mauritius" {{ old('location') == 'mauritius' ? 'selected' : '' }}>Mauritius</option>
                                            <option value="mexico" {{ old('location') == 'mexico' ? 'selected' : '' }}>Mexico</option>
                                            <option value="micronesia" {{ old('location') == 'micronesia' ? 'selected' : '' }}>Micronesia</option>
                                            <option value="moldova" {{ old('location') == 'moldova' ? 'selected' : '' }}>Moldova</option>
                                            <option value="monaco" {{ old('location') == 'monaco' ? 'selected' : '' }}>Monaco</option>
                                            <option value="mongolia" {{ old('location') == 'mongolia' ? 'selected' : '' }}>Mongolia</option>
                                            <option value="montenegro" {{ old('location') == 'montenegro' ? 'selected' : '' }}>Montenegro</option>
                                            <option value="morocco" {{ old('location') == 'morocco' ? 'selected' : '' }}>Morocco</option>
                                            <option value="mozambique" {{ old('location') == 'mozambique' ? 'selected' : '' }}>Mozambique</option>
                                            <option value="myanmar" {{ old('location') == 'myanmar' ? 'selected' : '' }}>Myanmar</option>
                                            <option value="namibia" {{ old('location') == 'namibia' ? 'selected' : '' }}>Namibia</option>
                                            <option value="nauru" {{ old('location') == 'nauru' ? 'selected' : '' }}>Nauru</option>
                                            <option value="nepal" {{ old('location') == 'nepal' ? 'selected' : '' }}>Nepal</option>
                                            <option value="netherlands" {{ old('location') == 'netherlands' ? 'selected' : '' }}>Netherlands</option>
                                            <option value="new-zealand" {{ old('location') == 'new-zealand' ? 'selected' : '' }}>New Zealand</option>
                                            <option value="nicaragua" {{ old('location') == 'nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                                            <option value="niger" {{ old('location') == 'niger' ? 'selected' : '' }}>Niger</option>
                                            <option value="nigeria" {{ old('location') == 'nigeria' ? 'selected' : '' }}>Nigeria</option>
                                            <option value="north-macedonia" {{ old('location') == 'north-macedonia' ? 'selected' : '' }}>North Macedonia</option>
                                            <option value="norway" {{ old('location') == 'norway' ? 'selected' : '' }}>Norway</option>
                                            <option value="oman" {{ old('location') == 'oman' ? 'selected' : '' }}>Oman</option>
                                            <option value="pakistan" {{ old('location') == 'pakistan' ? 'selected' : '' }}>Pakistan</option>
                                            <option value="palau" {{ old('location') == 'palau' ? 'selected' : '' }}>Palau</option>
                                            <option value="panama" {{ old('location') == 'panama' ? 'selected' : '' }}>Panama</option>
                                            <option value="papua-new-guinea" {{ old('location') == 'papua-new-guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                                            <option value="paraguay" {{ old('location') == 'paraguay' ? 'selected' : '' }}>Paraguay</option>
                                            <option value="peru" {{ old('location') == 'peru' ? 'selected' : '' }}>Peru</option>
                                            <option value="philippines" {{ old('location') == 'philippines' ? 'selected' : '' }}>Philippines</option>
                                            <option value="poland" {{ old('location') == 'poland' ? 'selected' : '' }}>Poland</option>
                                            <option value="portugal" {{ old('location') == 'portugal' ? 'selected' : '' }}>Portugal</option>
                                            <option value="qatar" {{ old('location') == 'qatar' ? 'selected' : '' }}>Qatar</option>
                                            <option value="romania" {{ old('location') == 'romania' ? 'selected' : '' }}>Romania</option>
                                            <option value="russia" {{ old('location') == 'russia' ? 'selected' : '' }}>Russia</option>
                                            <option value="rwanda" {{ old('location') == 'rwanda' ? 'selected' : '' }}>Rwanda</option>
                                            <option value="saint-kitts-and-nevis" {{ old('location') == 'saint-kitts-and-nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                                            <option value="saint-lucia" {{ old('location') == 'saint-lucia' ? 'selected' : '' }}>Saint Lucia</option>
                                            <option value="saint-vincent-and-grenadines" {{ old('location') == 'saint-vincent-and-grenadines' ? 'selected' : '' }}>Saint Vincent and Grenadines</option>
                                            <option value="samoa" {{ old('location') == 'samoa' ? 'selected' : '' }}>Samoa</option>
                                            <option value="san-marino" {{ old('location') == 'san-marino' ? 'selected' : '' }}>San Marino</option>
                                            <option value="sao-tome-and-principe" {{ old('location') == 'sao-tome-and-principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                                            <option value="saudi-arabia" {{ old('location') == 'saudi-arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                                            <option value="senegal" {{ old('location') == 'senegal' ? 'selected' : '' }}>Senegal</option>
                                            <option value="serbia" {{ old('location') == 'serbia' ? 'selected' : '' }}>Serbia</option>
                                            <option value="seychelles" {{ old('location') == 'seychelles' ? 'selected' : '' }}>Seychelles</option>
                                            <option value="sierra-leone" {{ old('location') == 'sierra-leone' ? 'selected' : '' }}>Sierra Leone</option>
                                            <option value="singapore" {{ old('location') == 'singapore' ? 'selected' : '' }}>Singapore</option>
                                            <option value="slovakia" {{ old('location') == 'slovakia' ? 'selected' : '' }}>Slovakia</option>
                                            <option value="slovenia" {{ old('location') == 'slovenia' ? 'selected' : '' }}>Slovenia</option>
                                            <option value="solomon-islands" {{ old('location') == 'solomon-islands' ? 'selected' : '' }}>Solomon Islands</option>
                                            <option value="somalia" {{ old('location') == 'somalia' ? 'selected' : '' }}>Somalia</option>
                                            <option value="south-africa" {{ old('location') == 'south-africa' ? 'selected' : '' }}>South Africa</option>
                                            <option value="south-sudan" {{ old('location') == 'south-sudan' ? 'selected' : '' }}>South Sudan</option>
                                            <option value="spain" {{ old('location') == 'spain' ? 'selected' : '' }}>Spain</option>
                                            <option value="sri-lanka" {{ old('location') == 'sri-lanka' ? 'selected' : '' }}>Sri Lanka</option>
                                            <option value="sudan" {{ old('location') == 'sudan' ? 'selected' : '' }}>Sudan</option>
                                            <option value="suriname" {{ old('location') == 'suriname' ? 'selected' : '' }}>Suriname</option>
                                            <option value="sweden" {{ old('location') == 'sweden' ? 'selected' : '' }}>Sweden</option>
                                            <option value="switzerland" {{ old('location') == 'switzerland' ? 'selected' : '' }}>Switzerland</option>
                                            <option value="syria" {{ old('location') == 'syria' ? 'selected' : '' }}>Syria</option>
                                            <option value="taiwan" {{ old('location') == 'taiwan' ? 'selected' : '' }}>Taiwan</option>
                                            <option value="tajikistan" {{ old('location') == 'tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                                            <option value="tanzania" {{ old('location') == 'tanzania' ? 'selected' : '' }}>Tanzania</option>
                                            <option value="thailand" {{ old('location') == 'thailand' ? 'selected' : '' }}>Thailand</option>
                                            <option value="timor-leste" {{ old('location') == 'timor-leste' ? 'selected' : '' }}>Timor-Leste</option>
                                            <option value="togo" {{ old('location') == 'togo' ? 'selected' : '' }}>Togo</option>
                                            <option value="tonga" {{ old('location') == 'tonga' ? 'selected' : '' }}>Tonga</option>
                                            <option value="trinidad-and-tobago" {{ old('location') == 'trinidad-and-tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                                            <option value="tunisia" {{ old('location') == 'tunisia' ? 'selected' : '' }}>Tunisia</option>
                                            <option value="turkey" {{ old('location') == 'turkey' ? 'selected' : '' }}>Turkey</option>
                                            <option value="turkmenistan" {{ old('location') == 'turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                                            <option value="tuvalu" {{ old('location') == 'tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                                            <option value="uganda" {{ old('location') == 'uganda' ? 'selected' : '' }}>Uganda</option>
                                            <option value="ukraine" {{ old('location') == 'ukraine' ? 'selected' : '' }}>Ukraine</option>
                                            <option value="united-arab-emirates" {{ old('location') == 'united-arab-emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                                            <option value="united-kingdom" {{ old('location') == 'united-kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                            <option value="united-states" {{ old('location') == 'united-states' ? 'selected' : '' }}>United States</option>
                                            <option value="uruguay" {{ old('location') == 'uruguay' ? 'selected' : '' }}>Uruguay</option>
                                            <option value="uzbekistan" {{ old('location') == 'uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                                            <option value="vanuatu" {{ old('location') == 'vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                                            <option value="venezuela" {{ old('location') == 'venezuela' ? 'selected' : '' }}>Venezuela</option>
                                            <option value="vietnam" {{ old('location') == 'vietnam' ? 'selected' : '' }}>Vietnam</option>
                                            <option value="yemen" {{ old('location') == 'yemen' ? 'selected' : '' }}>Yemen</option>
                                            <option value="zambia" {{ old('location') == 'zambia' ? 'selected' : '' }}>Zambia</option>
                                            <option value="zimbabwe" {{ old('location') == 'zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label for="related"><b>Your message related to</b></label>
                                        <select class="js-example-basic-single form-control" name="related" required>
                                            <option value="" selected="selected">Select Related Message</option>
                                            <option value="Brands or Products Concern"
                                                {{ old('related') == 'Brands or Products Concern' ? 'selected' : '' }}>
                                                Brands or Products Concern
                                            </option>
                                            <option value="Brands or Products Question"
                                                {{ old('related') == 'Brands or Products Question' ? 'selected' : '' }}>
                                                Brands or Products Question
                                            </option>
                                            <option value="Company Information"
                                                {{ old('related') == 'Company Information' ? 'selected' : '' }}>
                                                Company Information
                                            </option>
                                            <option value="Media / Journalist Enquiry"
                                                {{ old('related') == 'Media / Journalist Enquiry' ? 'selected' : '' }}>
                                                Media / Journalist Enquiry
                                            </option>
                                            <option value="Other" {{ old('related') == 'Other' ? 'selected' : '' }}>Other
                                            </option>
                                            <option value="Previous Employee"
                                                {{ old('related') == 'Previous Employee' ? 'selected' : '' }}>
                                                Previous Employee
                                            </option>
                                            <option value="Private Shareholder Enquiry"
                                                {{ old('related') == 'Private Shareholder Enquiry' ? 'selected' : '' }}>
                                                Private Shareholder Enquiry
                                            </option>
                                            <option value="Website Feedback"
                                                {{ old('related') == 'Website Feedback' ? 'selected' : '' }}>
                                                Website Feedback
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label for="f_name"><b>First Name / initials</b></label>
                                        <input type="text" name="f_name" class="form-control"
                                            value="{{ old('f_name') }}" placeholder="enter first name">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label for="l_name"><b>Last Name</b></label>
                                        <input type="text" name="l_name" class="form-control"
                                            value="{{ old('l_name') }}" placeholder="enter last name">
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label for="email"><b>Email address</b></label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                        @endif

                                        <button type="submit" class="btn mt-2 d-none d-lg-inline-block">
                                            Send Message <i class="fa fa-play"></i>
                                        </button>

                                    </div>
                                </div>
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label for="message"><b>Your message</b></label>
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Message" rows="3">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="w-auto">
                                    <button type="submit" class="btn mt-2 d-lg-none">
                                        Send Message <i class="fa fa-play"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="map mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.6827956668!2d54.89784328683704!3d25.076280454847193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1733120030839!5m2!1sen!2sbd"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <!-- about content -->
@endsection
