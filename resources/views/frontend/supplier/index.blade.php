@extends('frontend.frontend_master')

@section('frontend_content')
    <style>
        .select2-container .select2-selection--single {
            height: 50px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 12px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            padding-top: 10px;
        }

        .platform-content input,
        .platform-content textarea {
            padding: 12px;
            border: 1px solid #aaaaaa;
        }

        .platform-content input::placeholder,
        .platform-content textarea::placeholder {
            text-transform: capitalize;
        }
    </style>
    <!-- breadcrumb start -->
    <div class="breadcrumb-area p-2" style="background-color: #FED000;">
        <ul class="d-flex align-items-center gap-3 container-fluid">
            <li><a href="" class="fw-semibold">Home <i class="fa fa-play" style="font-size: 10px;"></i></a>
            </li>
            <li>Supplier</li>
        </ul>
    </div>
    <!-- breadcrumb endstart -->

    <!-- page banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend') }}/images/page-banner/about.jpg);">
        <div class="container">
            <div class="page-banner-content">
                <h2>Supplier</h2>
            </div>
        </div>
    </div>
    <!-- page banner -->

    <!-- about content -->
    <main class="main-area py-5">
        <div class="container">
            <div class="media-content">
                <h2 class="page_title"><span>Supplier </span></h2>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12">
                    <div class="platform-content">
                        <p class="py-5">Elevate your business with PRAN Group's vast network and global reach. Reach out
                            now to explore new horizons in the realm of quality products.</p>

                        <form action="" method="get">
                            <div class="row">
                                <div class="form-group">
                                    <label for="location"><b>Your Location</b></label>
                                    <select class="js-example-basic-single form-control" name="location">
                                        <option value="afghanistan">Afghanistan</option>
                                        <option value="albania">Albania</option>
                                        <option value="algeria">Algeria</option>
                                        <option value="andorra">Andorra</option>
                                        <option value="angola">Angola</option>
                                        <option value="argentina">Argentina</option>
                                        <option value="armenia">Armenia</option>
                                        <option value="australia">Australia</option>
                                        <option value="austria">Austria</option>
                                        <option value="azerbaijan">Azerbaijan</option>
                                        <option value="bahamas">Bahamas</option>
                                        <option value="bahrain">Bahrain</option>
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="barbados">Barbados</option>
                                        <option value="belarus">Belarus</option>
                                        <option value="belgium">Belgium</option>
                                        <option value="belize">Belize</option>
                                        <option value="benin">Benin</option>
                                        <option value="bhutan">Bhutan</option>
                                        <option value="bolivia">Bolivia</option>
                                        <option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option>
                                        <option value="botswana">Botswana</option>
                                        <option value="brazil">Brazil</option>
                                        <option value="brunei">Brunei</option>
                                        <option value="bulgaria">Bulgaria</option>
                                        <option value="burkina-faso">Burkina Faso</option>
                                        <option value="burundi">Burundi</option>
                                        <option value="cambodia">Cambodia</option>
                                        <option value="cameroon">Cameroon</option>
                                        <option value="canada">Canada</option>
                                        <option value="cape-verde">Cape Verde</option>
                                        <option value="central-african-republic">Central African Republic</option>
                                        <option value="chad">Chad</option>
                                        <option value="chile">Chile</option>
                                        <option value="china">China</option>
                                        <option value="colombia">Colombia</option>
                                        <option value="comoros">Comoros</option>
                                        <option value="congo">Congo</option>
                                        <option value="costa-rica">Costa Rica</option>
                                        <option value="croatia">Croatia</option>
                                        <option value="cuba">Cuba</option>
                                        <option value="cyprus">Cyprus</option>
                                        <option value="czech-republic">Czech Republic</option>
                                        <option value="denmark">Denmark</option>
                                        <option value="djibouti">Djibouti</option>
                                        <option value="dominica">Dominica</option>
                                        <option value="dominican-republic">Dominican Republic</option>
                                        <option value="ecuador">Ecuador</option>
                                        <option value="egypt">Egypt</option>
                                        <option value="el-salvador">El Salvador</option>
                                        <option value="equatorial-guinea">Equatorial Guinea</option>
                                        <option value="eritrea">Eritrea</option>
                                        <option value="estonia">Estonia</option>
                                        <option value="eswatini">Eswatini</option>
                                        <option value="ethiopia">Ethiopia</option>
                                        <option value="fiji">Fiji</option>
                                        <option value="finland">Finland</option>
                                        <option value="france">France</option>
                                        <option value="gabon">Gabon</option>
                                        <option value="gambia">Gambia</option>
                                        <option value="georgia">Georgia</option>
                                        <option value="germany">Germany</option>
                                        <option value="ghana">Ghana</option>
                                        <option value="greece">Greece</option>
                                        <option value="grenada">Grenada</option>
                                        <option value="guatemala">Guatemala</option>
                                        <option value="guinea">Guinea</option>
                                        <option value="guinea-bissau">Guinea-Bissau</option>
                                        <option value="guyana">Guyana</option>
                                        <option value="haiti">Haiti</option>
                                        <option value="honduras">Honduras</option>
                                        <option value="hungary">Hungary</option>
                                        <option value="iceland">Iceland</option>
                                        <option value="india">India</option>
                                        <option value="indonesia">Indonesia</option>
                                        <option value="iran">Iran</option>
                                        <option value="iraq">Iraq</option>
                                        <option value="ireland">Ireland</option>
                                        <option value="israel">Israel</option>
                                        <option value="italy">Italy</option>
                                        <option value="jamaica">Jamaica</option>
                                        <option value="japan">Japan</option>
                                        <option value="jordan">Jordan</option>
                                        <option value="kazakhstan">Kazakhstan</option>
                                        <option value="kenya">Kenya</option>
                                        <option value="kiribati">Kiribati</option>
                                        <option value="korea-north">North Korea</option>
                                        <option value="korea-south">South Korea</option>
                                        <option value="kuwait">Kuwait</option>
                                        <option value="kyrgyzstan">Kyrgyzstan</option>
                                        <option value="laos">Laos</option>
                                        <option value="latvia">Latvia</option>
                                        <option value="lebanon">Lebanon</option>
                                        <option value="lesotho">Lesotho</option>
                                        <option value="liberia">Liberia</option>
                                        <option value="libya">Libya</option>
                                        <option value="liechtenstein">Liechtenstein</option>
                                        <option value="lithuania">Lithuania</option>
                                        <option value="luxembourg">Luxembourg</option>
                                        <option value="madagascar">Madagascar</option>
                                        <option value="malawi">Malawi</option>
                                        <option value="malaysia">Malaysia</option>
                                        <option value="maldives">Maldives</option>
                                        <option value="mali">Mali</option>
                                        <option value="malta">Malta</option>
                                        <option value="marshall-islands">Marshall Islands</option>
                                        <option value="mauritania">Mauritania</option>
                                        <option value="mauritius">Mauritius</option>
                                        <option value="mexico">Mexico</option>
                                        <option value="micronesia">Micronesia</option>
                                        <option value="moldova">Moldova</option>
                                        <option value="monaco">Monaco</option>
                                        <option value="mongolia">Mongolia</option>
                                        <option value="montenegro">Montenegro</option>
                                        <option value="morocco">Morocco</option>
                                        <option value="mozambique">Mozambique</option>
                                        <option value="myanmar">Myanmar</option>
                                        <option value="namibia">Namibia</option>
                                        <option value="nauru">Nauru</option>
                                        <option value="nepal">Nepal</option>
                                        <option value="netherlands">Netherlands</option>
                                        <option value="new-zealand">New Zealand</option>
                                        <option value="nicaragua">Nicaragua</option>
                                        <option value="niger">Niger</option>
                                        <option value="nigeria">Nigeria</option>
                                        <option value="norway">Norway</option>
                                        <option value="oman">Oman</option>
                                        <option value="pakistan">Pakistan</option>
                                        <option value="palau">Palau</option>
                                        <option value="panama">Panama</option>
                                        <option value="papua-new-guinea">Papua New Guinea</option>
                                        <option value="paraguay">Paraguay</option>
                                        <option value="peru">Peru</option>
                                        <option value="philippines">Philippines</option>
                                        <option value="poland">Poland</option>
                                        <option value="portugal">Portugal</option>
                                        <option value="qatar">Qatar</option>
                                        <option value="romania">Romania</option>
                                        <option value="russia">Russia</option>
                                        <option value="rwanda">Rwanda</option>
                                        <option value="saint-kitts-and-nevis">Saint Kitts and Nevis</option>
                                        <option value="saint-lucia">Saint Lucia</option>
                                        <option value="saint-vincent-and-the-grenadines">Saint Vincent and the
                                            Grenadines </option>
                                        <option value="samoa">Samoa</option>
                                        <option value="san-marino">San Marino</option>
                                        <option value="sao-tome-and-principe">Sao Tome and Principe</option>
                                        <option value="saudi-arabia">Saudi Arabia</option>
                                        <option value="senegal">Senegal</option>
                                        <option value="serbia">Serbia</option>
                                        <option value="seychelles">Seychelles</option>
                                        <option value="sierra-leone">Sierra Leone</option>
                                        <option value="singapore">Singapore</option>
                                        <option value="slovakia">Slovakia</option>
                                        <option value="slovenia">Slovenia</option>
                                        <option value="solomon-islands">Solomon Islands</option>
                                        <option value="somalia">Somalia</option>
                                        <option value="south-africa">South Africa</option>
                                        <option value="south-sudan">South Sudan</option>
                                        <option value="spain">Spain</option>
                                        <option value="sri-lanka">Sri Lanka</option>
                                        <option value="sudan">Sudan</option>
                                        <option value="suriname">Suriname</option>
                                        <option value="sweden">Sweden</option>
                                        <option value="switzerland">Switzerland</option>
                                        <option value="syria">Syria</option>
                                        <option value="taiwan">Taiwan</option>
                                        <option value="tajikistan">Tajikistan</option>
                                        <option value="tanzania">Tanzania</option>
                                        <option value="thailand">Thailand</option>
                                        <option value="togo">Togo</option>
                                        <option value="tonga">Tonga</option>
                                        <option value="trinidad-and-tobago">Trinidad and Tobago</option>
                                        <option value="tunisia">Tunisia</option>
                                        <option value="turkey">Turkey</option>
                                        <option value="turkmenistan">Turkmenistan</option>
                                        <option value="tuvalu">Tuvalu</option>
                                        <option value="uganda">Uganda</option>
                                        <option value="ukraine">Ukraine</option>
                                        <option value="united-arab-emirates">United Arab Emirates</option>
                                        <option value="united-kingdom">United Kingdom</option>
                                        <option value="united-states">United States</option>
                                        <option value="uruguay">Uruguay</option>
                                        <option value="uzbekistan">Uzbekistan</option>
                                        <option value="vanuatu">Vanuatu</option>
                                        <option value="vatican-city">Vatican City</option>
                                        <option value="venezuela">Venezuela</option>
                                        <option value="vietnam">Vietnam</option>
                                        <option value="yemen">Yemen</option>
                                        <option value="zambia">Zambia</option>
                                        <option value="zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="supplier_item"><b>Supplier Item</b></label>
                                    <select name="supplier_item" id="supplier_item"
                                        class="js-example-basic-single form-control">
                                        <option hidden value="">Select Item</option>
                                        <option value="">item one</option>
                                        <option value="">item two</option>
                                        <option value="">item three</option>
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="f_name"><b>First Name / initials</b></label>
                                    <input type="text" name="f_name" class="form-control"
                                        placeholder="enter first name">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="l_name"><b>Last Name</b></label>
                                    <input type="text" name="l_name" class="form-control"
                                        placeholder="enter last name">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="l_name"><b>Email address</b></label>
                                    <input type="text" name="l_name" class="form-control"
                                        placeholder="enter last name">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="l_name"><b>Your message</b></label>
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Message" rows="3"></textarea>
                                </div>
                                <div class="w-auto">
                                    <button type="submit" class="btn mt-2 ">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
