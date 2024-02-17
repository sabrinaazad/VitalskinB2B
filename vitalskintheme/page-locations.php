<?php /* Template Name: Locations template */ ?>
<?php get_header(); ?>
<main class="location-template">
    <section class="section all-locations no-pad full-width">
        <div class="title">
            <span class="preheading">OUR CLINICS</span>
            <h1 class="heading">Find Your Location</h1>
            <div class="subheading">Browse or search for one of our dermatology clinics near you.</div>
        </div>
        <div class="map">
            <?php echo do_shortcode(' [mapsvg id="1"] '); ?>
        </div>
    </section>

    <section class="section">
        <div id="directory">
            <h2>Select a state to view locations:</h2>
        </div>

        <div id="results"></div>
    </section>

    <section class="section section--pop-in-form full-width">
        <div class="section-wrapper">
            <div class="content-wrapper">
                <div class="blurb-wrapper">
                    <h2 class="heading">Don’t see your state listed?</h2>
                    <h3 class="subheading">Sign up to learn when we’re going to your area!</h3>
                </div>
                <div class="form-wrapper">
                    <!-- <?php echo do_shortcode('[gravityform id="5" title="false" description="false" ajax="true" tabindex="49" ]'); ?> -->
                    <!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments Do not remove this code are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
                    <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                        <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4298508000017958009
                            method='POST'
                            onSubmit='javascript:document.charset="UTF-8"; return checkMandatory4298508000017958009()'
                            accept-charset='UTF-8'>
                            <input type='text' style='display:none;' name='xnQsjsdp'
                                value='ef9cdec8c3de5b6107efcc7536514381508d704c4a6d0834376f8f3501d92588'></input>
                            <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                            <input type='text' style='display:none;' name='xmIwtLD'
                                value='e70775e0c551cc9d7e303b0beb39d483adf9dbec9019e6161dd79f45d7973614'></input>
                            <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                            <input type='text' style='display:none;' name='returnURL'
                                value='https://join.vitalskinderm.com/thank-you-all/'> </input>
                            <!-- Do not remove this code. -->
                            <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
                            <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
                            <!-- Do not remove this code. -->
                            <style>
                            #crmWebToEntityForm input, 
                            #crmWebToEntityForm select {
                                width: 100%;
                                padding: 0.75em;
                                border-radius: 1em;
                                border: 0;
                            }
                            #crmWebToEntityForm label {
                                font-size: 0.75em;
                                
                            }
                            </style>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab'><label for='First_Name'>First Name<span style='color:red;'>*</span></label></div>
                                <div class='zcwf_col_fld'>
                                    <input type='text' id='First_Name' name='First Name' maxlength='40'></input>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab'><label for='Last_Name'>Last Name<span style='color:red;'>*</span></label></div>
                                <div class='zcwf_col_fld'>
                                    <input type='text' id='Last_Name' name='Last Name' maxlength='80'></input>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab'><label for='Email'>Email</label></div>
                                <div class='zcwf_col_fld'>
                                    <input type='text' ftype='email' id='Email' name='Email' maxlength='100'></input>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab'><label for='LEADCF4'>State.</label></div>
                                <div class='zcwf_col_fld'>
                                    <select class='zcwf_col_fld_slt' id='LEADCF4' name='LEADCF4'>
                                        <option value='-None-'>-None-</option>
                                        <option value='Alabama'>Alabama</option>
                                        <option value='Alaska'>Alaska</option>
                                        <option value='Arizona'>Arizona</option>
                                        <option value='Arkansas'>Arkansas</option>
                                        <option value='California'>California</option>
                                        <option value='Colorado'>Colorado</option>
                                        <option value='Connecticut'>Connecticut</option>
                                        <option value='Delaware'>Delaware</option>
                                        <option value='Florida'>Florida</option>
                                        <option value='Georgia'>Georgia</option>
                                        <option value='Hawaii'>Hawaii</option>
                                        <option value='Idaho'>Idaho</option>
                                        <option value='Illinois'>Illinois</option>
                                        <option value='Indiana'>Indiana</option>
                                        <option value='Iowa'>Iowa</option>
                                        <option value='Kansas'>Kansas</option>
                                        <option value='Kentucky'>Kentucky</option>
                                        <option value='Louisiana'>Louisiana</option>
                                        <option value='Maine'>Maine</option>
                                        <option value='Maryland'>Maryland</option>
                                        <option value='Massachusetts'>Massachusetts</option>
                                        <option value='Michigan'>Michigan</option>
                                        <option value='Minnesota'>Minnesota</option>
                                        <option value='Mississippi'>Mississippi</option>
                                        <option value='Missouri'>Missouri</option>
                                        <option value='Montana'>Montana</option>
                                        <option value='Nebraska'>Nebraska</option>
                                        <option value='Nevada'>Nevada</option>
                                        <option value='New&#x20;Hampshire'>New Hampshire</option>
                                        <option value='New&#x20;Jersey'>New Jersey</option>
                                        <option value='New&#x20;Mexico'>New Mexico</option>
                                        <option value='New&#x20;York'>New York</option>
                                        <option value='North&#x20;Carolina'>North Carolina</option>
                                        <option value='North&#x20;Dakota'>North Dakota</option>
                                        <option value='Ohio'>Ohio</option>
                                        <option value='Oklahoma'>Oklahoma</option>
                                        <option value='Oregon'>Oregon</option>
                                        <option value='Pennsylvania'>Pennsylvania</option>
                                        <option value='Rhode&#x20;Island'>Rhode Island</option>
                                        <option value='South&#x20;Carolina'>South Carolina</option>
                                        <option value='South&#x20;Dakota'>South Dakota</option>
                                        <option value='Tennessee'>Tennessee</option>
                                        <option value='Texas'>Texas</option>
                                        <option value='Utah'>Utah</option>
                                        <option value='Vermont'>Vermont</option>
                                        <option value='Virginia'>Virginia</option>
                                        <option value='Washington'>Washington</option>
                                        <option value='West&#x20;Virginia'>West Virginia</option>
                                        <option value='Wisconsin'>Wisconsin</option>
                                        <option value='Wyoming'>Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_fld'>
                                    <input type='submit' id='formsubmit' class='formsubmit zcwf_button btn btn-primary green' value='Submit' title='Submit'>
                                    <input type='reset' class='zcwf_button' name='reset' value='Reset' title='Reset' style="display: none;">
                                </div>
                            </div>
                            <script>
                            function validateEmail4298508000017958009() {
                                var form = document.forms['WebToLeads4298508000017958009'];
                                var emailFld = form.querySelectorAll('[ftype=email]');
                                var i;
                                for (i = 0; i < emailFld.length; i++) {
                                    var emailVal = emailFld[i].value;
                                    if ((emailVal.replace(/^\s+|\s+$/g, '')).length != 0) {
                                        var atpos = emailVal.indexOf('@');
                                        var dotpos = emailVal.lastIndexOf('.');
                                        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailVal.length) {
                                            alert('Please enter a valid email address. ');
                                            emailFld[i].focus();
                                            return false;
                                        }
                                    }
                                }
                                return true;
                            }

                            function checkMandatory4298508000017958009() {
                                var mndFileds = new Array('First Name', 'Last Name');
                                var fldLangVal = new Array('First\x20Name', 'Last\x20Name');
                                for (i = 0; i < mndFileds.length; i++) {
                                    var fieldObj = document.forms['WebToLeads4298508000017958009'][mndFileds[i]];
                                    if (fieldObj) {
                                        if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                            if (fieldObj.type == 'file') {
                                                alert('Please select a file to upload.');
                                                fieldObj.focus();
                                                return false;
                                            }
                                            alert(fldLangVal[i] + ' cannot be empty.');
                                            fieldObj.focus();
                                            return false;
                                        } else if (fieldObj.nodeName == 'SELECT') {
                                            if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                                alert(fldLangVal[i] + ' cannot be none.');
                                                fieldObj.focus();
                                                return false;
                                            }
                                        } else if (fieldObj.type == 'checkbox') {
                                            if (fieldObj.checked == false) {
                                                alert('Please accept  ' + fldLangVal[i]);
                                                fieldObj.focus();
                                                return false;
                                            }
                                        }
                                        try {
                                            if (fieldObj.name == 'Last Name') {
                                                name = fieldObj.value;
                                            }
                                        } catch (e) {}
                                    }
                                }
                                trackVisitor();
                                if (!validateEmail4298508000017958009()) {
                                    return false;
                                }
                                document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled',
                                    true);
                            }

                            function tooltipShow4298508000017958009(el) {
                                var tooltip = el.nextElementSibling;
                                var tooltipDisplay = tooltip.style.display;
                                if (tooltipDisplay == 'none') {
                                    var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                                    for (i = 0; i < allTooltip.length; i++) {
                                        allTooltip[i].style.display = 'none';
                                    }
                                    tooltip.style.display = 'block';
                                } else {
                                    tooltip.style.display = 'none';
                                }
                            }
                            </script>
                            <!-- <script type='text/javascript' id='VisitorTracking'>
                            var $zoho = $zoho || {};
                            $zoho.salesiq = $zoho.salesiq || {
                                widgetcode: '3e8ee0b31a567cf741fbb832ed7c26f099d66bf96d2f5b78b1cc1e7b0bf702c9a57b4f3125d6b34b1921806151cb916c',
                                values: {},
                                ready: function() {}
                            };
                            var d = document;
                            s = d.createElement('script');
                            s.type = 'text/javascript';
                            s.id = 'zsiqscript';
                            s.defer = true;
                            s.src = 'https://salesiq.zoho.com/widget';
                            t = d.getElementsByTagName('script')[0];
                            t.parentNode.insertBefore(s, t);

                            function trackVisitor() {
                                try {
                                    if ($zoho) {
                                        var LDTuvidObj = document.forms['WebToLeads4298508000017958009']['LDTuvid'];
                                        if (LDTuvidObj) {
                                            LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();
                                        }
                                        var firstnameObj = document.forms['WebToLeads4298508000017958009'][
                                            'First Name'
                                        ];
                                        if (firstnameObj) {
                                            name = firstnameObj.value + ' ' + name;
                                        }
                                        $zoho.salesiq.visitor.name(name);
                                        var emailObj = document.forms['WebToLeads4298508000017958009']['Email'];
                                        if (emailObj) {
                                            email = emailObj.value;
                                            $zoho.salesiq.visitor.email(email);
                                        }
                                    }
                                } catch (e) {}
                            }
                            </script> -->
                            <!-- Do not remove this --- Analytics Tracking code starts -->
                            <script id='wf_anal'
                                src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=e70775e0c551cc9d7e303b0beb39d483adf9dbec9019e6161dd79f45d7973614gidef9cdec8c3de5b6107efcc7536514381508d704c4a6d0834376f8f3501d92588gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'>
                            </script><!-- Do not remove this --- Analytics Tracking code ends. -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>