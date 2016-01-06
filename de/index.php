<?php

// Require PHPMailer for form submission
require_once('phpmailer/mail.php');

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Nightingale 360 Sign Up</title>
        <meta name="description" content="Submit your Nightingale 360&deg; idea to Libratone.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7608432/626348/css/fonts.css" />
        <link rel="stylesheet" href="css/main.css">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5TQLQJ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5TQLQJ');</script>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav>
        <a href="http://www.libratone.com" target="_blank">Visit Libratone.com</a>
        <ul id="lang-select">
            <li><a href="http://www.nightingale360.com/dk"><img src="img/dk.png" alt="View Danish site"></a></li>
            <li><a href="http://www.nightingale360.com?redirect=false"><img src="img/gb.png" alt="View German site"></a></li>
        </ul>
    </nav>
    <header>
      <div id="header-content">
        <div id="header-content--middle">
          <div id="header-content--inner">
            <img id="logo" src="img/logo.png" alt="Sigma and Libratone">
            <h1>Wilkommen zu Nightingale</h1>
            <p>Um die Markteinführung der neuen Libratone ZIPP 360&deg; Lautsprecher zu feiern, haben wir uns mit dem weltberühmten Dance Act SIGMA zusammengetan, um den sagenhaften neuen Song &bdquo;Nightingale&ldquo; zu kreieren. Wir möchten, dass Du in unserem 360&deg; Video mitspielst!</p>
            <p>Wir werden unsere Lautsprecher zusammen mit 360&deg; Kameras an SIGMA Fans in der ganzen Welt schicken, um die verrückten, schönen und aufregenden Momente einzufangen, die ihr erlebt, wenn ihr das Lied hört. Das Ergebnis? Ein phantastisches 360&deg; Video, das Du gemacht hast!</p>
          </div>
          <a class="page-scroll hidden-xs" href="#get-involved"><img class="chev bounce" src="img/chev-white.png" alt="Scroll down"></a>
        </div>
      </div>
    </header>
    <section class="dark" id="get-involved">
      <div class="container">
        <div class="row">
          <h2>Wie kannst Du mitmachen?</h2>
          <div class="col-md-4">
            <div class="circ"><p>1.</p></div>
            <h3>Erzähle uns von Deiner Idee in weniger als 500 Buchstaben</h3>
            <p>Erzähle uns von den Dingen, die Du erlebst, wenn Du den Song hörst.</p>

          </div>
          <div class="col-md-4">
            <div class="circ"><p>2.</p></div>
            <h3>Drehe Deine 360&deg; Filmszene</h3>
            <p>Wenn wir Deine Idee mögen, schicken wir Dir einen 360&deg; Libratone Lautsprecher und eine 360&deg; Videokamera, um die Szene einzufangen.</p>
          </div>
          <div class="col-md-4">
            <div class="circ"><p>3.</p></div>
            <h3>Sende uns das Filmmaterial</h3>
            <p>Die besten 360&deg; Filmszenen werden in dem Video erscheinen und in der ganzen Welt ausgestrahlt. Nett, oder?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a class="page-scroll" href="#submission"><img class="chev" src="img/chev-black.png" alt="Scroll down"></a>
          </div>
        </div>
      </div>
    </section>
    <section class="light" id="submission">
      <div class="container">
        <div class="row">
          <h2>Schicke uns deine idee</h2>
          <form method="post" id="nightingale-form">
            <div class="col-md-6">
              <label>Name</label>
              <div class="input-wrap">
                <input id="your-name" name="name" type="text">
              </div>
              <label>Alter</label>
              <div class="input-wrap">
                <input id="your-age" name="age" type="number">
              </div>
              <label>Land:</label>
              <div class="input-wrap">
                <select id="your-country" name="country">
                <option value="">-</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Denmark">Denmark</option>
                <option value="Germany">Germany</option>
                <option value="">-</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote D'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>  
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
              </div>
              <label>Email</label>
              <div class="input-wrap">
                <input id="your-email" name="email" type="email">
              </div>
            </div>
            <div class="col-md-6">
              <label>Deine Idee In 500 Buchstaben:</label>
              <div class="input-wrap">
                <textarea id="your-idea" name="idea"></textarea>
              </div>
            </div>
            <div class="col-md-12">
                <label for="terms-check" id="terms-label"><input id="terms-check" type="checkbox" name="terms" >I have read and accept the <a class="page-scroll" title="Terms and Conditions" href="#terms">Terms &amp; Conditions</a></label>
                <input type="submit" name="submit" value="LASS UNS ANFANGEN!">
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="share twitter-share-button" href="http://twitter.com/intent/tweet?status=SIGMA+und+Libratone+haben+einen+neuen+Song+kreiert+und+Du+kannst+eine+Rolle+in+Libratone's+360&deg;+Video+spielen.+Sei+dabei!+http://bit.ly/1majBwy" target="_blank"><img src="img/tweet.png" alt="Share on Twitter"></a>
                    <a class="share" href="http://www.facebook.com/share.php?u=www.nightingale360.com&amp;title=Libratone+Nightingale+360" target="_blank"><img alt="Share on Facebook!" src="img/fb.png"></a>
                    <h2>#nightingale</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="light" id="terms">
      <div class="container">
        <div class="row">
          <h2>Geschäftsbedingungen</h2>
          <div class="col-md-12">
            <p>Du musst 18 Jahre oder älter sein, um einen Beitrag einreichen zu können. Wenn Du einen Beitrag über die entsprechende Vorlagenseite einreichst, dann gewährst Du Libratone, der Muttergesellschaft oder anderen Konzernfirmen das uneingeschränkte, unbefristete, vorbehaltlose, unbegrenzte, weltweite, unwiderrufliche, dauerhafte  und gebührenfreie Recht, die Lizenz, die Autorisierung und die Erlaubnis, in jeglicher Form oder jeglichem Format, auf oder über jedes Medium und mit jeglicher Technologie oder jeglichen Geräten, die heute bekannt sind oder zukünftig entwickelt oder noch entdeckt werden, als Ganzes oder in Teilen aufzuführen, zwischenzuspeichern, dauerhaft zu speichern, aufzubewahren, zu nutzen, zu reproduzieren, zu verteilen, zu zeigen, auszustellen, aufzuführen, zu publizieren, zu übertragen, zu übermitteln, zu modifizieren, abgeleitete Arbeiten daraus vorzubereiten, anzupassen, in ein anderes Format zu überführen, zu übersetzen und andernfalls den ganzen Inhalt oder Teile Deines Nutzerinhaltes auf der Webseite zu verwerten.</p>
          </div>
        </div>
      </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/happy.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
