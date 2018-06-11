@extends('layout')

@section('contenido')

@include('includes.pasos',array('paso1' => true,
                               'paso2' => true,
                               'paso3' => false))
<div class="container">
    <div class="row">
        <div class="col-8 m-0">
            <div class="col-12 formulario-datos-cliente mt-4">
                <div class="text-center">
                    <p class="h3 pt-3 pb-2">Información del viajero titular</p>
                </div>
                <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="nombre">* Nombre(s):</label>
                            <input type="text" class="form-control form-control-sm" id="nombre" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="apellidos">* Apellidos:</label>
                            <input type="text" class="form-control form-control-sm" id="apellidos" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="email">* Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="confirmar-email">* Confirmar email</label>
                            <input type="email" class="form-control form-control-sm" id="confirmar-email" required>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" class="form-control form-control-sm" id="ciudad">
                           </div>
                           <div class="form-group col-md-6">
                                <label for="estado-region">Estado o región</label>
                                <input type="text" class="form-control form-control-sm" id="estado-region">
                           </div>
                          <div class="form-group col-md-6">
                            <label for="pais">Pais</label>
                            <select id="pais" class="form-control form-control-sm">
                                <option value="" ></option>
                                <option value="AF" >Afghanistan</option>
                                <option value="AL" >Albania</option>
                                <option value="DZ" >Algeria</option>
                                <option value="AS" >American Samoa</option>
                                <option value="AD" >Andorra</option>
                                <option value="AO" >Angola</option>
                                <option value="AI" >Anguilla</option>
                                <option value="AQ" >Antarctica</option>
                                <option value="AG" >Antigua and Barbuda</option>
                                <option value="AR" >Argentina</option>
                                <option value="AM" >Armenia</option>
                                <option value="AW" >Aruba</option>
                                <option value="AU" >Australia</option>
                                <option value="AT" >Austria</option>
                                <option value="AZ" >Azerbaidjan</option>
                                <option value="BS" >Bahamas</option>
                                <option value="BH" >Bahrain</option>
                                <option value="BD" >Bangladesh</option>
                                <option value="BB" >Barbados</option>
                                <option value="BY" >Belarus</option>
                                <option value="BE" >Belgium</option>
                                <option value="BZ" >Belize</option>
                                <option value="BJ" >Benin</option>
                                <option value="BM" >Bermuda</option>
                                <option value="BT" >Bhutan</option>
                                <option value="BO" >Bolivia</option>
                                <option value="BA" >Bosnia-Herzegovina</option>
                                <option value="BW" >Botswana</option>
                                <option value="BV" >Bouvet Island</option>
                                <option value="BR" >Brazil</option>
                                <option value="IO" >British Indian Ocean</option>
                                <option value="BN" >Brunei Darussalam</option>
                                <option value="BG" >Bulgaria</option>
                                <option value="BF" >Burkina Faso</option>
                                <option value="BI" >Burundi</option>
                                <option value="KH" >Cambodia</option>
                                <option value="CM" >Cameroon</option>
                                <option value="CA" >Canada</option>
                                <option value="CV" >Cape Verde</option>
                                <option value="KY" >Cayman Islands</option>
                                <option value="CF" >Central African Republic</option>
                                <option value="CC" >Cocos (Keeling) Islands</option>
                                <option value="CO" >Colombia</option>
                                <option value="KM" >Comoros</option>
                                <option value="CG" >Congo</option>
                                <option value="CK" >Cook Islands</option>
                                <option value="CR" >Costa Rica</option>
                                <option value="HR" >Croatia</option>
                                <option value="CU" >Cuba</option>
                                <option value="CY" >Cyprus</option>
                                <option value="CZ" >Czech Republic</option>
                                <option value="TD" >Chad</option>
                                <option value="CL" >Chile</option>
                                <option value="CN" >China</option>
                                <option value="CX" >Christmas Island</option>
                                <option value="DK" >Denmark</option>
                                <option value="DJ" >Djibouti</option>
                                <option value="DM" >Dominica</option>
                                <option value="DO" >Dominican Republic</option>
                                <option value="TP" >East Timor</option>
                                <option value="EC" >Ecuador</option>
                                <option value="EG" >Egypt</option>
                                <option value="SV" >El Salvador</option>
                                <option value="GQ" >Equatorial Guinea</option>
                                <option value="EE" >Estonia</option>
                                <option value="ET" >Ethiopia</option>
                                <option value="FK" >Falkland Islands</option>
                                <option value="FO" >Faroe Islands</option>
                                <option value="FJ" >Fiji</option>
                                <option value="FI" >Finland</option>
                                <option value="SU" >Former USSR</option>
                                <option value="FR" >France</option>
                                <option value="GF" >French Guyana</option>
                                <option value="TF" >French Southern Territories</option>
                                <option value="GA" >Gabon</option>
                                <option value="GM" >Gambia</option>
                                <option value="GE" >Georgia</option>
                                <option value="DE" >Germany</option>
                                <option value="GH" >Ghana</option>
                                <option value="GI" >Gibraltar</option>
                                <option value="GB" >Great Britain/UK</option>
                                <option value="GR" >Greece</option>
                                <option value="GL" >Greenland</option>
                                <option value="GD" >Grenada</option>
                                <option value="GP" >Guadeloupe (French)</option>
                                <option value="GU" >Guam (USA)</option>
                                <option value="GT" >Guatemala</option>
                                <option value="GN" >Guinea</option>
                                <option value="GW" >Guinea Bissau</option>
                                <option value="GY" >Guyana</option>
                                <option value="HT" >Haiti</option>
                                <option value="HM" >Heard &amp; McDonald Islands</option>
                                <option value="HN" >Honduras</option>
                                <option value="HK" >Hong Kong</option>
                                <option value="HU" >Hungary</option>
                                <option value="IS" >Iceland</option>
                                <option value="IN" >India</option>
                                <option value="ID" >Indonesia</option>
                                <option value="IR" >Iran</option>
                                <option value="IQ" >Iraq</option>
                                <option value="IE" >Ireland</option>
                                <option value="IL" >Israel</option>
                                <option value="IT" >Italy</option>
                                <option value="CI" >Ivory Coast</option>
                                <option value="JM" >Jamaica</option>
                                <option value="JP" >Japan</option>
                                <option value="JO" >Jordan</option>
                                <option value="KZ" >Kazakhstan</option>
                                <option value="KE" >Kenya</option>
                                <option value="KI" >Kiribati</option>
                                <option value="KW" >Kuwait</option>
                                <option value="KG" >Kyrgyzstan</option>
                                <option value="LA" >Laos</option>
                                <option value="LV" >Latvia</option>
                                <option value="LB" >Lebanon</option>
                                <option value="LS" >Lesotho</option>
                                <option value="LR" >Liberia</option>
                                <option value="LY" >Libya</option>
                                <option value="LI" >Liechtenstein</option>
                                <option value="LT" >Lithuania</option>
                                <option value="LU" >Luxembourg</option>
                                <option value="MO" >Macau</option>
                                <option value="MK" >Macedonia</option>
                                <option value="MG" >Madagascar</option>
                                <option value="MW" >Malawi</option>
                                <option value="MY" >Malaysia</option>
                                <option value="MV" >Maldives</option>
                                <option value="ML" >Mali</option>
                                <option value="MT" >Malta</option>
                                <option value="MH" >Marshall Islands</option>
                                <option value="MQ" >Martinique</option>
                                <option value="MR" >Mauritania</option>
                                <option value="MU" >Mauritius</option>
                                <option value="YT" >Mayotte</option>
                                <option value="MX" >Mexico</option>
                                <option value="FM" >Micronesia</option>
                                <option value="MD" >Moldavia</option>
                                <option value="MC" >Monaco</option>
                                <option value="MN" >Mongolia</option>
                                <option value="MS" >Montserrat</option>
                                <option value="MA" >Morocco</option>
                                <option value="MZ" >Mozambique</option>
                                <option value="MM" >Myanmar</option>
                                <option value="NA" >Namibia</option>
                                <option value="NR" >Nauru</option>
                                <option value="NP" >Nepal</option>
                                <option value="NL" >Netherlands</option>
                                <option value="AN" >Netherlands Antillas</option>
                                <option value="NT" >Neutral Zone</option>
                                <option value="NC" >New Caledonia</option>
                                <option value="NZ" >New Zealand</option>
                                <option value="NI" >Nicaragua</option>
                                <option value="NE" >Niger</option>
                                <option value="NG" >Nigeria</option>
                                <option value="NU" >Niue</option>
                                <option value="NF" >Norfolk Island</option>
                                <option value="KP" >North Corea</option>
                                <option value="MP" >Northern Mariana Islands</option>
                                <option value="NO" >Norway</option>
                                <option value="OM" >Oman</option>
                                <option value="PK" >Pakistan</option>
                                <option value="PW" >Palau</option>
                                <option value="PA" >Panama</option>
                                <option value="PG" >Papua New Guinea</option>
                                <option value="PY" >Paraguay</option>
                                <option value="PE" >Peru</option>
                                <option value="PH" >Philippines</option>
                                <option value="PN" >Pitcairn Island</option>
                                <option value="PL" >Poland</option>
                                <option value="PF" >Polynesia</option>
                                <option value="PT" >Portugal</option>
                                <option value="PR" >Puerto Rico</option>
                                <option value="QA" >Qatar</option>
                                <option value="RE" >Reunion</option>
                                <option value="RO" >Romania</option>
                                <option value="RU" >Russian Federation</option>
                                <option value="RW" >Rwanda</option>
                                <option value="GS" >S. Georgia Is. </option>
                                <option value="SH" >Saint Helena</option>
                                <option value="KN" >Saint Kitts &amp; Nevis Anguilla</option>
                                <option value="LC" >Saint Lucia</option>
                                <option value="PM" >Saint Pierre and Miquelon</option>
                                <option value="ST" >Saint Tome and Principe</option>
                                <option value="VC" >Saint Vicent &amp; Grenadines</option>
                                <option value="WS" >Samoa</option>
                                <option value="SM" >San Marino</option>
                                <option value="SA" >Saudi Arabia</option>
                                <option value="SN" >Senegal</option>
                                <option value="SC" >Seychelles</option>
                                <option value="SL" >Sierra Leone</option>
                                <option value="SG" >Singapore</option>
                                <option value="SK" >Slovak Republic</option>
                                <option value="SI" >Slovenia</option>
                                <option value="SB" >Solomon Islands</option>
                                <option value="SO" >Somalia</option>
                                <option value="ZA" >South Africa</option>
                                <option value="KR" >South Corea</option>
                                <option value="ES" >Spain</option>
                                <option value="LK" >Sri Lanka</option>
                                <option value="SD" >Sudan</option>
                                <option value="SR" >Suriname</option>
                                <option value="SJ" >Svalvard &amp; Jan Mayen Is.</option>
                                <option value="SZ" >Swaziland</option>
                                <option value="SE" >Sweden</option>
                                <option value="CH" >Switzerland</option>
                                <option value="SY" >Syria</option>
                                <option value="TJ" >Tadjikistan</option>
                                <option value="TW" >Taiwan</option>
                                <option value="TZ" >Tanzania</option>
                                <option value="TH" >Thailand</option>
                                <option value="TG" >Togo</option>
                                <option value="TK" >Tokelau</option>
                                <option value="TO" >Tonga</option>
                                <option value="TT" >Trinidad and Tobago</option>
                                <option value="TN" >Tunisia</option>
                                <option value="TR" >Turkey</option>
                                <option value="TM" >Turkmenistan</option>
                                <option value="TC" >Turks and Caicos Islands</option>
                                <option value="TV" >Tuvalu</option>
                                <option value="UG" >Uganda</option>
                                <option value="UA" >Ukraine</option>
                                <option value="AE" >United Arab Emirates</option>
                                <option value="US" >United States</option>
                                <option value="UY" >Uruguay</option>
                                <option value="MI" >USA Military</option>
                                <option value="UM" >USA Minor Outlying Islands</option>
                                <option value="UZ" >Uzbekistan</option>
                                <option value="VU" >Vanuatu</option>
                                <option value="VA" >Vatican City State</option>
                                <option value="VE" >Venezuela</option>
                                <option value="VN" >Vietnam</option>
                                <option value="VG" >Virgin Islands (British)</option>
                                <option value="VI" >Virgin Islands (USA)</option>
                                <option value="WF" >Wallis and Futura Islands</option>
                                <option value="EH" >Western Sahara</option>
                                <option value="YE" >Yemen</option>
                                <option value="YU" >Yugoslavia</option>
                                <option value="ZR" >Zaire</option>
                                <option value="ZM" >Zambia</option>
                                <option value="ZW" >Zimbabwe</option>

                            </select>
                          </div>
                          <div class="form-group col-md-6">
                                <label for="numero-telefono">Numero de teléfono</label>
                                <input type="text" class="form-control form-control-sm" id="numero-telefono" required>
                           </div>
                           <div class="form-group col-md-6">
                                <label for="hoteles">Hotel donde planea hospedarse:</label>
                                <select id="hoteles" class="form-control form-control-sm">
                                        <option value=""></option>
                                        <option value="All Ritmo Cancun">All Ritmo Cancun</option>
                                        <option value="Ambiance Suites">Ambiance Suites</option>
                                        <option value="Ambiance Suites ">Ambiance Suites </option>
                                        <option value="Ambiance Suites Cancun">Ambiance Suites</option>
                                        <option value="Aquamarina Beach Hotel">Aquamarina Beach Hotel</option>
                                        <option value="BSEA Cancun Plaza Hotel">BSEA Cancun Plaza Hotel</option>
                                        <option value="Barcelo Costa Cancun">Barcelo Costa Cancun</option>
                                        <option value="Barcelo Costa Cancun">Barcelo Costa Cancun</option>
                                        <option value="Barcelo Tucancun">Barcelo Tucancun</option>
                                        <option value="Barcelo Tucancun Beach">Barcelo Tucancun Beach</option>
                                        <option value="Be Live Cancun">Be Live Cancun</option>
                                        <option value="Be Live Grand Cancun ">Be Live Grand Cancun </option>
                                        <option value="Be Live Palm Beach">Be Live Palm Beach</option>
                                        <option value="Be Live Viva Beach">Be Live Viva Beach</option>
                                        <option value="Beach Palace">Beach Palace</option>
                                        <option value="Beach Palace-All Inclusive">Beach Palace-All Inclusive</option>
                                        <option value="Beachfront Suite Turquoise Sea Cancun">Beachfront Suite Turquoise Sea Cancun</option>
                                        <option value="Beachscape Kin Ha Villas">Beachscape Kin Ha Villas</option>
                                        <option value="Beachscape Kin Ha Villas & Suites">Beachscape Kin Ha Villas & Suites</option>
                                        <option value="Bel Air Collection and Spa Cancun Resort">Bel Air Collection and Spa Cancun Resort</option>
                                        <option value="Bell Air Collection">Bell Air Collection</option>
                                        <option value="BelleVue Beach Paradise">BelleVue Beach Paradise</option>
                                        <option value="Cancun Bay Resort">Cancun Bay Resort</option>
                                        <option value="Cancun Caribe Park Royal">Cancun Caribe Park Royal</option>
                                        <option value="Casa Margarita Hotel Boutique">Casa Margarita Hotel Boutique</option>
                                        <option value="Casa Turquesa Hotel Boutique">Casa Turquesa Hotel Boutique</option>
                                        <option value="CasaMagna Cancun Marriott Resort">CasaMagna Cancun Marriott Resort</option>
                                        <option value="Celuisma Dos Playas">Celuisma Dos Playas</option>
                                        <option value="Celuisma Imperial Laguna">Celuisma Imperial Laguna</option>
                                        <option value="Celuisma Maya Caribe">Celuisma Maya Caribe</option>
                                        <option value="City Express Cancun ">City Express Cancun </option>
                                        <option value="City Express Playa">City Express Playa</option>
                                        <option value="City Junior Cancun">City Junior Cancun</option>
                                        <option value="Comfort Inn">Comfort Inn</option>
                                        <option value="Comfort Inn Cancun Airport">Comfort Inn Cancun Airport</option>
                                        <option value="Courtyard By Marriot">Courtyard By Marriot</option>
                                        <option value="Courtyard by Marriott Cancun Airport">Courtyard by Marriott Cancun Airport</option>
                                        <option value="Crown Paradise">Crown Paradise</option>
                                        <option value="Crown Paradise Club Cancun">Crown Paradise Club Cancun</option>
                                        <option value="Dos Playas / Maya Caribe">Dos Playas / Maya Caribe</option>
                                        <option value="Dreams Playa Mujeres">Dreams Playa Mujeres</option>
                                        <option value="Dreams Sands">Dreams Sands</option>
                                        <option value="Dreams cancun">Dreams cancun</option>
                                        <option value="Emporio Family Suites">Emporio Family Suites</option>
                                        <option value="Excellence Playa Mujeres">Excellence Playa Mujeres</option>
                                        <option value="Excellence Playa Mujeres">Excellence Playa Mujeres</option>
                                        <option value="Fiesta Americana Condesa">Fiesta Americana Condesa</option>
                                        <option value="Fiesta Americana Condesa Cancun">Fiesta Americana Condesa Cancun</option>
                                        <option value="Fiesta Americana Grand Coral Beach Cancun Resort & Spa">Fiesta Americana Grand Coral Beach Cancun Resort & Spa</option>
                                        <option value="Fiesta Americana Villas Cancun">Fiesta Americana Villas Cancun</option>
                                        <option value="Fiesta Inn Cancun">Fiesta Inn Cancun</option>
                                        <option value="Fiesta Inn Cancun las Americas">Fiesta Inn Cancun las Americas</option>
                                        <option value="Fiesta Inn Las Americas">Fiesta Inn Las Americas</option>
                                        <option value="Finest Playa Mujeres">Finest Playa Mujeres</option>
                                        <option value="Flamingo">Flamingo</option>
                                        <option value="Flamingo Cancun Resort">Flamingo Cancun Resort</option>
                                        <option value="GR Caribe Deluxe By Solaris">GR Caribe Deluxe By Solaris</option>
                                        <option value="GR Solaris Cancun">GR Solaris Cancun</option>
                                        <option value="Golden Parnassus">Golden Parnassus</option>
                                        <option value="Golden Parnassus Resort & Spa">Golden Parnassus Resort & Spa</option>
                                        <option value="Gran Caribe Real Resort & Spa">Gran Caribe Real Resort & Spa</option>
                                        <option value="Grand City Hotel Cancun">Grand City Hotel Cancun</option>
                                        <option value="Grand Oasis Cancun">Grand Oasis Cancun</option>
                                        <option value="Grand Oasis Cancun">Grand Oasis Cancun</option>
                                        <option value="Grand Oasis Palm Beach">Grand Oasis Palm Beach</option>
                                        <option value="Grand Oasis Viva - Adults Only">Grand Oasis Viva - Adults Only</option>
                                        <option value="Grand Park Royal Cancun Caribe">Grand Park Royal Cancun Caribe</option>
                                        <option value="Grand Royal Lagoon">Grand Royal Lagoon</option>
                                        <option value="Grand Solaris Cancun">Grand Solaris Cancun</option>
                                        <option value="Great Parnassus">Great Parnassus</option>
                                        <option value="Great Parnassus Resort & Spa">Great Parnassus Resort & Spa</option>
                                        <option value="Hacienda de Castilla">Hacienda de Castilla</option>
                                        <option value="Hard Rock Cancun">Hard Rock Cancun</option>
                                        <option value="Hard Rock Hotel Cancun">Hard Rock Hotel Cancun</option>
                                        <option value="Hideaway at Royalton ">Hideaway at Royalton </option>
                                        <option value="Holiday Inn Cancun Arenas">Holiday Inn Cancun Arenas</option>
                                        <option value="Holiday Inn Express Cancun">Holiday Inn Express Cancun</option>
                                        <option value="Hostel Mundo Joven Cancun">Hostel Mundo Joven Cancun</option>
                                        <option value="Hotel Alux Cancun">Hotel Alux Cancun</option>
                                        <option value="Hotel Antillano">Hotel Antillano</option>
                                        <option value="Hotel Avenida Cancun">Hotel Avenida Cancun</option>
                                        <option value="Hotel Balam Balam">Hotel Balam Balam</option>
                                        <option value="Hotel Calypso Cancun">Hotel Calypso Cancun</option>
                                        <option value="Hotel Casa Maya">Hotel Casa Maya</option>
                                        <option value="Hotel Colonial Cancun">Hotel Colonial Cancun</option>
                                        <option value="Hotel El Batab">Hotel El Batab</option>
                                        <option value="Hotel Green 16">Hotel Green 16</option>
                                        <option value="Hotel Kin Mayab Cancun">Hotel Kin Mayab Cancun</option>
                                        <option value="Hotel Las Palmas">Hotel Las Palmas</option>
                                        <option value="Hotel Los Girasoles">Hotel Los Girasoles</option>
                                        <option value="Hotel Margaritas Cancun">Hotel Margaritas Cancun</option>
                                        <option value="Hotel Maria de Lourdes">Hotel Maria de Lourdes</option>
                                        <option value="Hotel One Canciºn">Hotel One Canciºn</option>
                                        <option value="Hotel Parador">Hotel Parador</option>
                                        <option value="Hotel Plaza Caribe">Hotel Plaza Caribe</option>
                                        <option value="Hotel Plaza Caribe">Hotel Plaza Caribe</option>
                                        <option value="Hotel Plaza Kokai Cancun">Hotel Plaza Kokai Cancun</option>
                                        <option value="Hotel Porto Bello">Hotel Porto Bello</option>
                                        <option value="Hotel Soberanis">Hotel Soberanis</option>
                                        <option value="Hotel Soberanis Cancun">Hotel Soberanis Cancun</option>
                                        <option value="Hotel Suites Gaby">Hotel Suites Gaby</option>
                                        <option value="Hotel Tankah Cancun">Hotel Tankah Cancun</option>
                                        <option value="Hotel Xbalamque Resort & Spa">Hotel Xbalamque Resort & Spa</option>
                                        <option value="Hotel y Suites Nader">Hotel y Suites Nader</option>
                                        <option value="Hyatt Zilara Cancun">Hyatt Zilara Cancun</option>
                                        <option value="Hyatt Zilara Cancun">Hyatt Zilara Cancun</option>
                                        <option value="Hyatt Ziva">Hyatt Ziva</option>
                                        <option value="Hyatt Ziva Cancun">Hyatt Ziva Cancun</option>
                                        <option value="Iberostar Cancun">Iberostar Cancun</option>
                                        <option value="Iberostar Cancun">Iberostar Cancun</option>
                                        <option value="Ibis Cancun">Ibis Cancun</option>
                                        <option value="Ibis Cancun Centro">Ibis Cancun Centro</option>
                                        <option value="Ibis Hotel">Ibis Hotel</option>
                                        <option value="Ikaro Suites Cancun">Ikaro Suites Cancun</option>
                                        <option value="Imperial Laguna">Imperial Laguna</option>
                                        <option value="Imperial Las Perlas">Imperial Las Perlas</option>
                                        <option value="Imperial las Perlas">Imperial las Perlas</option>
                                        <option value="Imperial las Perlas">Imperial las Perlas</option>
                                        <option value="JW Marriott Cancun">JW Marriott Cancun</option>
                                        <option value="Krystal Cancun">Krystal Cancun</option>
                                        <option value="Krystal Grand Punta Cancun">Krystal Grand Punta Cancun</option>
                                        <option value="Krystal Grand Punta Cancun">Krystal Grand Punta Cancun</option>
                                        <option value="Krystal Urban Cancun Malecon">Krystal Urban Cancun Malecon</option>
                                        <option value="La Quinta Inn & Suites">La Quinta Inn & Suites</option>
                                        <option value="La Quinta Inn & Suites ">La Quinta Inn & Suites </option>
                                        <option value="La Quinta Inn & Suites Cancun">La Quinta Inn & Suites Cancun</option>
                                        <option value="Las Gaviotas Hotel & Suites">Las Gaviotas Hotel & Suites</option>
                                        <option value="Le Blanc Spa">Le Blanc Spa</option>
                                        <option value="Le Blanc Spa Resort - Adults Only">Le Blanc Spa Resort - Adults Only</option>
                                        <option value="Live Aqua Cancun">Live Aqua Cancun</option>
                                        <option value="Live Aqua Cancun Adults Only">Live Aqua Cancun Adults Only</option>
                                        <option value="ME Cancun - Complete Me">ME Cancun - Complete Me</option>
                                        <option value="MIA Cancun Resort">MIA Cancun Resort</option>
                                        <option value="Mallorca Hotel & Suites">Mallorca Hotel & Suites</option>
                                        <option value="Marina Hacienda del Mar">Marina Hacienda del Mar</option>
                                        <option value="MayaFair Design Hotel">MayaFair Design Hotel</option>
                                        <option value="Me Cancun">Me Cancun</option>
                                        <option value="Moon Palace">Moon Palace</option>
                                        <option value="Moon palace">Moon palace</option>
                                        <option value="Motel Auto Posada Bombay">Motel Auto Posada Bombay</option>
                                        <option value="NYX Hotel Cancun">NYX Hotel Cancun</option>
                                        <option value="Nizuc Resort & Spa">Nizuc Resort & Spa</option>
                                        <option value="Nizuc Resort & Spa Cancun">Nizuc Resort & Spa Cancun</option>
                                        <option value="Oasis Cancun All-inclusive">Oasis Cancun All-inclusive</option>
                                        <option value="Oasis Palm">Oasis Palm</option>
                                        <option value="Oasis Sens">Oasis Sens</option>
                                        <option value="Oasis Sens Adults Only">Oasis Sens Adults Only</option>
                                        <option value="Oasis Smart">Oasis Smart</option>
                                        <option value="Oasis Smart">Oasis Smart</option>
                                        <option value="Oasis Smart - The Lounge Hotel">Oasis Smart - The Lounge Hotel</option>
                                        <option value="Occidental Tucancun">Occidental Tucancun</option>
                                        <option value="Ocean Spa Hotel">Ocean Spa Hotel</option>
                                        <option value="Omni Cancun">Omni Cancun</option>
                                        <option value="Omni Cancun Hotel & Villas">Omni Cancun Hotel & Villas</option>
                                        <option value="One Hotel">One Hotel</option>
                                        <option value="Panama Jack Gran Caribe Cancun">Panama Jack Gran Caribe Cancun</option>
                                        <option value="Paradisus Cancun">Paradisus Cancun</option>
                                        <option value="Paradisus Cancun Resort & SPA">Paradisus Cancun Resort & SPA</option>
                                        <option value="Park Royal">Park Royal</option>
                                        <option value="Park Royal Cancun-All Inclusive">Park Royal Cancun-All Inclusive</option>
                                        <option value="Plaza Caribe Hotel">Plaza Caribe Hotel</option>
                                        <option value="Presidente InterContinental Cancun Resort">Presidente InterContinental Cancun Resort</option>
                                        <option value="Presidente Intercontinental">Presidente Intercontinental</option>
                                        <option value="Pure Serenity Luxury Village">Pure Serenity Luxury Village</option>
                                        <option value="RIU Cancun">RIU Cancun</option>
                                        <option value="RIU Caribe">RIU Caribe</option>
                                        <option value="RIU Palace Las Americas">RIU Palace Las Americas</option>
                                        <option value="RIU Palace Peni­nsula">RIU Palace Peni­nsula</option>
                                        <option value="Radisson Hotel Hacienda Cancun">Radisson Hotel Hacienda Cancun</option>
                                        <option value="Raintree\'s Club Regina">Raintree\'s Club Regina</option>
                                        <option value="Ramada Cancun">Ramada Cancun</option>
                                        <option value="Ramada Cancun City">Ramada Cancun City</option>
                                        <option value="Ramada Cancun City">Ramada Cancun City</option>
                                        <option value="Ritz Carlton">Ritz Carlton</option>
                                        <option value="Riu Cancun">Riu Cancun</option>
                                        <option value="Riu Caribe">Riu Caribe</option>
                                        <option value="Riu Dunamar">Riu Dunamar</option>
                                        <option value="Riu Palace Peninsula">Riu Palace Peninsula</option>
                                        <option value="Riu Palace las Americas">Riu Palace las Americas</option>
                                        <option value="Royal Solaris">Royal Solaris</option>
                                        <option value="Royal Solaris Cancun-All Inclusive">Royal Solaris Cancun-All Inclusive</option>
                                        <option value="Royal Sunset Beach Resort">Royal Sunset Beach Resort</option>
                                        <option value="Royal Sunset Resort">Royal Sunset Resort</option>
                                        <option value="Royalton Riviera Cancun">Royalton Riviera Cancun</option>
                                        <option value="Salvia Cancun">Salvia Cancun</option>
                                        <option value="Sandos Cancun">Sandos Cancun</option>
                                        <option value="Sandos Cancun Luxury Experience Resort">Sandos Cancun Luxury Experience Resort</option>
                                        <option value="Sea Adventure and Spa">Sea Adventure and Spa</option>
                                        <option value="Seadust Cancun Family Resort">Seadust Cancun Family Resort</option>
                                        <option value="Secrets Playa Mujeres">Secrets Playa Mujeres</option>
                                        <option value="Secrets Playa Mujeres">Secrets Playa Mujeres</option>
                                        <option value="Secrets The Vine Cancun Resort & Spa Adults Only">Secrets The Vine Cancun Resort & Spa Adults Only</option>
                                        <option value="Secrets the Vine">Secrets the Vine</option>
                                        <option value="Sina Suites">Sina Suites</option>
                                        <option value="Smart America">Smart America</option>
                                        <option value="Soberanis">Soberanis</option>
                                        <option value="Sotavento Hotel & Yacht Club">Sotavento Hotel & Yacht Club</option>
                                        <option value="Suites Cancun Center">Suites Cancun Center</option>
                                        <option value="Sun Palace">Sun Palace</option>
                                        <option value="Sun Palace">Sun Palace</option>
                                        <option value="Sunset Marina & Yacht Club">Sunset Marina & Yacht Club</option>
                                        <option value="Temptation Resort">Temptation Resort</option>
                                        <option value="Terracaribe Hotel Boutique">Terracaribe Hotel Boutique</option>
                                        <option value="The Beloved Hotel">The Beloved Hotel</option>
                                        <option value="The Ritz-Carlton Cancun">The Ritz-Carlton Cancun</option>
                                        <option value="The Royal Cancun, an All-Suites Resort">The Royal Cancun, an All-Suites Resort</option>
                                        <option value="The Royal Caribbean">The Royal Caribbean</option>
                                        <option value="The Royal Islander">The Royal Islander</option>
                                        <option value="The Royal Mayan">The Royal Mayan</option>
                                        <option value="The Royal Sands">The Royal Sands</option>
                                        <option value="The Temptation resort">The Temptation resort</option>
                                        <option value="The Westin Lagunamar Ocean Resort Villas & Spa Cancun">The Westin Lagunamar Ocean Resort Villas & Spa Cancun</option>
                                        <option value="The Westin Resort & Spa Cancun">The Westin Resort & Spa Cancun</option>
                                        <option value="Villa Italia">Villa Italia</option>
                                        <option value="Westin Lagunamar Ocean Resort Villas & Spa">Westin Lagunamar Ocean Resort Villas & Spa
                                        </option>
                                        <option value="Xbalamque & Spa">Xbalamque & Spa</option>
                                        <option value="Xbalamque Resort And Spa">Xbalamque Resort And Spa</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="comentarios">Comentarios adicionales</label>
                                <textarea class="form-control form-control-sm" id="comentarios" rows="5"></textarea>
                            </div>
                        <div class="form-row">

                        </div>
                      </form>
            </div>
        </div>
        {{-- FINAL FORMULARIO --}}
        <div class="col-4 mt-4 resumen-compra">
            <div class="col-12 mt-4">
                <div class="text-center">
                    <p class="h3">Resumen de compra</p>
                </div>
            </div>
            <div class="col-12 tours-compra">
               <div>
                    <?php /**/ $total = 0 /**/ ?>
                    @foreach(Cart::content() as $tour)
                        <div class="row datos-tour-resumen pb-3">
                            <?php /**/ $total += $tour->options->total_sale /**/ ?>
                            <div class="col-5">
                                    <img style="width: 100%;" src="{{ url('/img/tours')}}/{{ $tour->options->image }}" alt="tour" class="img-thumbnail">
                            </div>
                            <div class="col-7">
                                <p>{{$tour->name}}</p>
                                <p class="text-right">${{number_format($tour->options->total_sale,2,".",",")}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 text-right total-resumen mt-3">
                            <p>Su Pago: ${{number_format($total,2,".",",")}} USD</p>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Continuar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop
