<section class="section section--info-block full-width">
	<div class="section-wrapper">
		<div class="left">
			<div class="image-wrapper">
				<img src="<?php echo the_sub_field('info_blocks_image'); ?>" alt="doctor" width="887" height="669" />
			</div>
		</div>
		<div class="right">
			<span class="preheading">
				<?php echo the_sub_field('info_blocks_preheading'); ?>
			</span>
			<h1>
				<?php echo the_sub_field('info_blocks_heading'); ?>
			</h1>
			<p>
				<?php echo the_sub_field('info_blocks_p'); ?>
			</p>
			<?php $links_group = get_sub_field('links_group');
			if( $links_group ): ?>
				<?php if( $links_group['url1'] ): ?>
					<a href="<?php echo $links_group['url1'] ?>" class="link arrow inline-on-desktop"><?php echo $links_group['label1'] ?></a><br>
				<?php endif; ?>
				<?php if( $links_group['url2'] ): ?>
					<a href="<?php echo $links_group['url2'] ?>" class="link arrow inline-on-desktop"><?php echo $links_group['label2'] ?></a><br>
				<?php endif; ?>
			<?php endif; ?>

			<?php if( get_sub_field('info_blocks_p_optional') ): ?>
				<p>
					<?php echo the_sub_field('info_blocks_p_optional'); ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
	<?php if( get_sub_field('show_form') ) : ?>	
		<div class="form">
			<h3>Interested in receiving a free guide to selling your practice?</h3>
			 <!-- <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49" ]'); ?> -->

        <!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
   <div id='crmWebToEntityForm'>
            <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
            <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4298508000002884001 method='POST'
                onSubmit='javascript:document.charset="UTF-8"; return checkMandatory4298508000002884001()'
                accept-charset='UTF-8'>
                <input type='text' style='display:none;' name='xnQsjsdp'
                    value='ef9cdec8c3de5b6107efcc7536514381508d704c4a6d0834376f8f3501d92588'></input>
                <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                <input type='text' style='display:none;' name='xmIwtLD'
                    value='e70775e0c551cc9d7e303b0beb39d483c61e6069592d027d9e69e19792a0cf57'></input>
                <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                <input type='text' style='display:none;' name='returnURL'
                    value='https://join.vitalskinderm.com/thank-you/'> </input><br></br>
                <!-- Do not remove this code. -->
                <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'></input>
                <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'></input>
                <!-- Do not remove this code. -->
                <style>
				#crmWebToEntityForm table {
					width: 100%;
				}
                #crmWebToEntityForm tr,
                #crmWebToEntityForm td {
                    padding: 0.5em;
                    border-spacing: 0px;
                    border-width: 0px;
                }
				#crmWebToEntityForm td {
					width: 50%;
				}
				@media screen and (min-width: 1024px) {
					#crmWebToEntityForm td {
						width: 50%;
					}
				}
				#crmWebToEntityForm td input, 
				#crmWebToEntityForm td select, 
				#crmWebToEntityForm td textarea {
					padding: 1em;
					width: 100%;
                    border: 1px solid gray;
				}
                #crmWebToEntityForm td select {
                    background-color: #E4E4E4;
                    color: gray;
                }
                </style>
                <table>
                    <tr>
                        <td>
							<input type='text' maxlength='40' name='First Name' placeholder="First Name" />
						</td>
                        <td>
							<input type='text' maxlength='80' name='Last Name' placeholder="Last Name" />
						</td>
                    </tr>
                    <tr>
                        <td>
							<input type='text' maxlength='100' name='Email' placeholder="Email"  />
						</td>
                        <td>
                            <select name='Lead Source'>
								<option value='Lead Source' selected disabled>Lead Source</option>
								<option value='-None-'>-None-</option>
                                <option value='BD&#x20;Sourcing'>BD Sourcing</option>
                                <option value='External&#x20;Referral'>External Referral</option>
                                <option value='Internal&#x20;Referral'>Internal Referral</option>
                                <option value='SEO'>SEO</option>
                                <option value='Facebook'>Facebook</option>
                                <option value='LinkedIn'>LinkedIn</option>
                                <option value='Twitter'>Twitter</option>
                                <option value='Print&#x20;Advertising'>Print Advertising</option>
                                <option value='Trade&#x20;Show'>Trade Show</option>
                                <option value='Conferences&#x20;&amp;&#x20;Seminars'>Conferences &amp; Seminars</option>
                                <option value='Email&#x20;Campaign'>Email Campaign</option>
                                <option value='Direct&#x20;Mail'>Direct Mail</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <input class="btn btn-primary green" id='formsubmit' type='submit' value='Download FREE Guide'></input> 
							<input type='reset' name='reset' value='Reset' style="display:none;"></input>
                        </td>
                    </tr>
                </table>
                <script>
                var mndFileds = new Array('First Name', 'Last Name', 'Email');
                var fldLangVal = new Array('First Name', 'Last Name', 'Email');
                var name = '';
                var email = '';

                function checkMandatory4298508000002884001() {
                    for (i = 0; i < mndFileds.length; i++) {
                        var fieldObj = document.forms['WebToLeads4298508000002884001'][mndFileds[i]];
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
                    document.getElementById('formsubmit').disabled = true;
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
                            var LDTuvidObj = document.forms['WebToLeads4298508000002884001']['LDTuvid'];
                            if (LDTuvidObj) {
                                LDTuvidObj.value = $zoho.salesiq.visitor.uniqueid();
                            }
                            var firstnameObj = document.forms['WebToLeads4298508000002884001']['First Name'];
                            if (firstnameObj) {
                                name = firstnameObj.value + ' ' + name;
                            }
                            $zoho.salesiq.visitor.name(name);
                            var emailObj = document.forms['WebToLeads4298508000002884001']['Email'];
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
                    src='https://crm.zohopublic.com/crm/WebFormAnalyticsServeServlet?rid=e70775e0c551cc9d7e303b0beb39d483c61e6069592d027d9e69e19792a0cf57gidef9cdec8c3de5b6107efcc7536514381508d704c4a6d0834376f8f3501d92588gid885e3c1045bd9bdcc91bdf30f82b5696gid14f4ec16431e0686150daa43f3210513'>
                </script><!-- Do not remove this --- Analytics Tracking code ends. -->
            </form>
        </div>

		</div>
	<?php endif; ?>
</section>
