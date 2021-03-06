<?php $__env->startSection('content'); ?>
<!-- Inner Page Header serction start here -->
<div class="inner-page-header">
    <div class="container">
        <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="header-page-title">
                     <h2>Register</h2>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="header-page-locator">
                     <ul>
                         <li><a href="/">Home /</a> Register</li>
                     </ul>
                 </div>
             </div>
        </div>
    </div>
</div>
<!-- Inner Page Header serction end here -->
	<div class="wrapper">
		<br />
            <div class="section section-clients">
                <div class="container">
		    <div class="row">
		    	<div class="col-lg-12">
				<div class="col-md-8 col-md-offset-2">
					<?php if(session('error-status')): ?>
					    	<div class="alert alert-danger">
						    <div class="container-fluid">
							  <div class="alert-icon">
							    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
							  </div>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
							  </button>
						      <b>Error:</b> <?php echo e(session('error-status')); ?>

						    </div>
						</div>
					<?php endif; ?>
					<div class="panel panel-primary">
							<div class="panel-heading">Registration Form</div>
							<div class="panel-body">
							<?php if(new DateTime() > DateTime::createFromFormat('Y/m/d H:i:s', '2017/05/04 10:00:00')): ?>
                            <?php if($referrer != null): ?>
                                <br>
                                <center><b>You were referred by <?php echo e($referrer->name); ?>(<?php echo e($referrer->email); ?>)</b></center>
                                <br>
                            <?php endif; ?>
								<p>
                                    Please ensure that you provide the correct phone number
                                    and email address where your notifications and password
                                    reset will be sent to. The fields marked with
                                    <span style="color:red;">*</span> are required fields.
                                </p>
                                <br />
							    <form class="form" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
									<?php echo e(csrf_field()); ?>

									<input type="hidden" value="<?php if($referrer != null): ?><?php echo e($referrer->email); ?><?php endif; ?>" name="referrer">

									<div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
										<label class="control-label">Name (Account Name)<span style="color:red;">*</span></label>
										<input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
										<?php if($errors->has('name')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('name')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

									<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
										<label class="control-label">Email address<span style="color:red;">*</span></label>
										<input type="email" class="form-control" placeholder="email@example.com" name="email" value="<?php echo e(old('email')); ?>" required>
										<?php if($errors->has('email')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('email')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

									<div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
										<label class="control-label">Phone Number<span style="color:red;">*</span></label>
										<input type="text" class="form-control" placeholder="Phone Number" value="<?php echo e(old('phone')); ?>" name="phone" required>
										<?php if($errors->has('phone')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('phone')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

                                    <div class="form-group">
										<label class="control-label">Country<span style="color:red;">*</span></label>
                                        <select class="form-control" name="country">
                                            <option value="Afghanistan"> Afghanistan </option>
                                            <option value="Albania"> Albania </option>
                                            <option value="Algeria"> Algeria </option>
                                            <option value="American Samoa"> American Samoa </option>
                                            <option value="Andorra"> Andorra </option>
                                            <option value="Angola"> Angola </option>
                                            <option value="Anguilla"> Anguilla </option>
                                            <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                                            <option value="Argentina"> Argentina </option>
                                            <option value="Armenia"> Armenia </option>
                                            <option value="Aruba"> Aruba </option>
                                            <option value="Australia"> Australia </option>
                                            <option value="Austria"> Austria </option>
                                            <option value="Azerbaijan"> Azerbaijan </option>
                                            <option value="The Bahamas"> The Bahamas </option>
                                            <option value="Bahrain"> Bahrain </option>
                                            <option value="Bangladesh"> Bangladesh </option>
                                            <option value="Barbados"> Barbados </option>
                                            <option value="Belarus"> Belarus </option>
                                            <option value="Belgium"> Belgium </option>
                                            <option value="Belize"> Belize </option>
                                            <option value="Benin"> Benin </option>
                                            <option value="Bermuda"> Bermuda </option>
                                            <option value="Bhutan"> Bhutan </option>
                                            <option value="Bolivia"> Bolivia </option>
                                            <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                                            <option value="Botswana"> Botswana </option>
                                            <option value="Brazil"> Brazil </option>
                                            <option value="Brunei"> Brunei </option>
                                            <option value="Bulgaria"> Bulgaria </option>
                                            <option value="Burkina Faso"> Burkina Faso </option>
                                            <option value="Burundi"> Burundi </option>
                                            <option value="Cambodia"> Cambodia </option>
                                            <option value="Cameroon"> Cameroon </option>
                                            <option value="Canada"> Canada </option>
                                            <option value="Cape Verde"> Cape Verde </option>
                                            <option value="Cayman Islands"> Cayman Islands </option>
                                            <option value="Central African Republic"> Central African Republic </option>
                                            <option value="Chad"> Chad </option>
                                            <option value="Chile"> Chile </option>
                                            <option value="People 's Republic of China"> People 's Republic of China </option>
                                            <option value="Republic of China"> Republic of China </option>
                                            <option value="Christmas Island"> Christmas Island </option>
                                            <option value="Cocos(Keeling) Islands"> Cocos(Keeling) Islands </option>
                                            <option value="Colombia"> Colombia </option>
                                            <option value="Comoros"> Comoros </option>
                                            <option value="Congo"> Congo </option>
                                            <option value="Cook Islands"> Cook Islands </option>
                                            <option value="Costa Rica"> Costa Rica </option>
                                            <option value="Cote d'Ivoire"> Cote d'Ivoire </option>
                                            <option value="Croatia"> Croatia </option>
                                            <option value="Cuba"> Cuba </option>
                                            <option value="Cyprus"> Cyprus </option>
                                            <option value="Czech Republic"> Czech Republic </option>
                                            <option value="Denmark"> Denmark </option>
                                            <option value="Djibouti"> Djibouti </option>
                                            <option value="Dominica"> Dominica </option>
                                            <option value="Dominican Republic"> Dominican Republic </option>
                                            <option value="Ecuador"> Ecuador </option>
                                            <option value="Egypt"> Egypt </option>
                                            <option value="El Salvador"> El Salvador </option>
                                            <option value="Equatorial Guinea"> Equatorial Guinea </option>
                                            <option value="Eritrea"> Eritrea </option>
                                            <option value="Estonia"> Estonia </option>
                                            <option value="Ethiopia"> Ethiopia </option>
                                            <option value="Falkland Islands"> Falkland Islands </option>
                                            <option value="Faroe Islands"> Faroe Islands </option>
                                            <option value="Fiji"> Fiji </option>
                                            <option value="Finland"> Finland </option>
                                            <option value="France"> France </option>
                                            <option value="French Polynesia"> French Polynesia </option>
                                            <option value="Gabon"> Gabon </option>
                                            <option value="The Gambia"> The Gambia </option>
                                            <option value="Georgia"> Georgia </option>
                                            <option value="Germany"> Germany </option>
                                            <option value="Ghana"> Ghana </option>
                                            <option value="Gibraltar"> Gibraltar </option>
                                            <option value="Greece"> Greece </option>
                                            <option value="Greenland"> Greenland </option>
                                            <option value="Grenada"> Grenada </option>
                                            <option value="Guadeloupe"> Guadeloupe </option>
                                            <option value="Guam"> Guam </option>
                                            <option value="Guatemala"> Guatemala </option>
                                            <option value="Guernsey"> Guernsey </option>
                                            <option value="Guinea"> Guinea </option>
                                            <option value="Guinea - Bissau"> Guinea - Bissau </option>
                                            <option value="Guyana"> Guyana </option>
                                            <option value="Haiti"> Haiti </option>
                                            <option value="Honduras"> Honduras </option>
                                            <option value="Hong Kong"> Hong Kong </option>
                                            <option value="Hungary"> Hungary </option>
                                            <option value="Iceland"> Iceland </option>
                                            <option value="India"> India </option>
                                            <option value="Indonesia"> Indonesia </option>
                                            <option value="Iran"> Iran </option>
                                            <option value="Iraq"> Iraq </option>
                                            <option value="Ireland"> Ireland </option>
                                            <option value="Israel"> Israel </option>
                                            <option value="Italy"> Italy </option>
                                            <option value="Jamaica"> Jamaica </option>
                                            <option value="Japan"> Japan </option>
                                            <option value="Jersey"> Jersey </option>
                                            <option value="Jordan"> Jordan </option>
                                            <option value="Kazakhstan"> Kazakhstan </option>
                                            <option value="Kenya"> Kenya </option>
                                            <option value="Kiribati"> Kiribati </option>
                                            <option value="North Korea"> North Korea </option>
                                            <option value="South Korea"> South Korea </option>
                                            <option value="Kosovo"> Kosovo </option>
                                            <option value="Kuwait"> Kuwait </option>
                                            <option value="Kyrgyzstan"> Kyrgyzstan </option>
                                            <option value="Laos"> Laos </option>
                                            <option value="Latvia"> Latvia </option>
                                            <option value="Lebanon"> Lebanon </option>
                                            <option value="Lesotho"> Lesotho </option>
                                            <option value="Liberia"> Liberia </option>
                                            <option value="Libya"> Libya </option>
                                            <option value="Liechtenstein"> Liechtenstein </option>
                                            <option value="Lithuania"> Lithuania </option>
                                            <option value="Luxembourg"> Luxembourg </option>
                                            <option value="Macau"> Macau </option>
                                            <option value="Macedonia"> Macedonia </option>
                                            <option value="Madagascar"> Madagascar </option>
                                            <option value="Malawi"> Malawi </option>
                                            <option value="Malaysia"> Malaysia </option>
                                            <option value="Maldives"> Maldives </option>
                                            <option value="Mali"> Mali </option>
                                            <option value="Malta"> Malta </option>
                                            <option value="Marshall Islands"> Marshall Islands </option>
                                            <option value="Martinique"> Martinique </option>
                                            <option value="Mauritania"> Mauritania </option>
                                            <option value="Mauritius"> Mauritius </option>
                                            <option value="Mayotte"> Mayotte </option>
                                            <option value="Mexico"> Mexico </option>
                                            <option value="Micronesia"> Micronesia </option>
                                            <option value="Moldova"> Moldova </option>
                                            <option value="Monaco"> Monaco </option>
                                            <option value="Mongolia"> Mongolia </option>
                                            <option value="Montenegro"> Montenegro </option>
                                            <option value="Montserrat"> Montserrat </option>
                                            <option value="Morocco"> Morocco </option>
                                            <option value="Mozambique"> Mozambique </option>
                                            <option value="Myanmar"> Myanmar </option>
                                            <option value="Nagorno - Karabakh"> Nagorno - Karabakh </option>
                                            <option value="Namibia"> Namibia </option>
                                            <option value="Nauru"> Nauru </option>
                                            <option value="Nepal"> Nepal </option>
                                            <option value="Netherlands"> Netherlands </option>
                                            <option value="Netherlands Antilles"> Netherlands Antilles </option>
                                            <option value="New Caledonia"> New Caledonia </option>
                                            <option value="New Zealand"> New Zealand </option>
                                            <option value="Nicaragua"> Nicaragua </option>
                                            <option value="Niger"> Niger </option>
                                            <option value="Nigeria"> Nigeria </option>
                                            <option value="Niue"> Niue </option>
                                            <option value="Norfolk Island"> Norfolk Island </option>
                                            <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                                            <option value="Northern Mariana"> Northern Mariana </option>
                                            <option value="Norway"> Norway </option>
                                            <option value="Oman"> Oman </option>
                                            <option value="Pakistan"> Pakistan </option>
                                            <option value="Palau"> Palau </option>
                                            <option value="Palestine"> Palestine </option>
                                            <option value="Panama"> Panama </option>
                                            <option value="Papua New Guinea"> Papua New Guinea </option>
                                            <option value="Paraguay"> Paraguay </option>
                                            <option value="Peru"> Peru </option>
                                            <option value="Philippines"> Philippines </option>
                                            <option value="Pitcairn Islands"> Pitcairn Islands </option>
                                            <option value="Poland"> Poland </option>
                                            <option value="Portugal"> Portugal </option>
                                            <option value="Puerto Rico"> Puerto Rico </option>
                                            <option value="Qatar"> Qatar </option>
                                            <option value="Romania"> Romania </option>
                                            <option value="Russia"> Russia </option>
                                            <option value="Rwanda"> Rwanda </option>
                                            <option value="Saint Barthelemy"> Saint Barthelemy </option>
                                            <option value="Saint Helena"> Saint Helena </option>
                                            <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                                            <option value="Saint Lucia"> Saint Lucia </option>
                                            <option value="Saint Martin"> Saint Martin </option>
                                            <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                                            <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                                            <option value="Samoa"> Samoa </option>
                                            <option value="San Marino"> San Marino </option>
                                            <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                                            <option value="Saudi Arabia"> Saudi Arabia </option>
                                            <option value="Senegal"> Senegal </option>
                                            <option value="Serbia"> Serbia </option>
                                            <option value="Seychelles"> Seychelles </option>
                                            <option value="Sierra Leone"> Sierra Leone </option>
                                            <option value="Singapore"> Singapore </option>
                                            <option value="Slovakia"> Slovakia </option>
                                            <option value="Slovenia"> Slovenia </option>
                                            <option value="Solomon Islands"> Solomon Islands </option>
                                            <option value="Somalia"> Somalia </option>
                                            <option value="Somaliland"> Somaliland </option>
                                            <option value="South Africa"> South Africa </option>
                                            <option value="South Ossetia"> South Ossetia </option>
                                            <option value="Spain"> Spain </option>
                                            <option value="Sri Lanka"> Sri Lanka </option>
                                            <option value="Sudan"> Sudan </option>
                                            <option value="Suriname"> Suriname </option>
                                            <option value="Svalbard"> Svalbard </option>
                                            <option value="Swaziland"> Swaziland </option>
                                            <option value="Sweden"> Sweden </option>
                                            <option value="Switzerland"> Switzerland </option>
                                            <option value="Syria"> Syria </option>
                                            <option value="Taiwan"> Taiwan </option>
                                            <option value="Tajikistan"> Tajikistan </option>
                                            <option value="Tanzania"> Tanzania </option>
                                            <option value="Thailand"> Thailand </option>
                                            <option value="Timor - Leste"> Timor - Leste </option>
                                            <option value="Togo"> Togo </option>
                                            <option value="Tokelau"> Tokelau </option>
                                            <option value="Tonga"> Tonga </option>
                                            <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                                            <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                                            <option value="Tristan da Cunha"> Tristan da Cunha </option>
                                            <option value="Tunisia"> Tunisia </option>
                                            <option value="Turkey"> Turkey </option>
                                            <option value="Turkmenistan"> Turkmenistan </option>
                                            <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                                            <option value="Tuvalu"> Tuvalu </option>
                                            <option value="Uganda"> Uganda </option>
                                            <option value="Ukraine"> Ukraine </option>
                                            <option value="United Arab Emirates"> United Arab Emirates </option>
                                            <option value="United Kingdom"> United Kingdom </option>
                                            <option value="United States"> United States </option>
                                            <option value="Uruguay"> Uruguay </option>
                                            <option value="Uzbekistan"> Uzbekistan </option>
                                            <option value="Vanuatu"> Vanuatu </option>
                                            <option value="Vatican City"> Vatican City </option>
                                            <option value="Venezuela"> Venezuela </option>
                                            <option value="Vietnam"> Vietnam </option>
                                            <option value="British Virgin Islands"> British Virgin Islands </option>
                                            <option value="Isle of Man"> Isle of Man </option>
                                            <option value="US Virgin Islands"> US Virgin Islands </option>
                                            <option value="Wallis and Futuna"> Wallis and Futuna </option>
                                            <option value="Western Sahara"> Western Sahara </option>
                                            <option value="Yemen"> Yemen </option>
                                            <option value="Zambia"> Zambia </option>
                                            <option value="Zimbabwe"> Zimbabwe </option>
                                          </select>
									</div>

                                    <div class="form-group">
										<label class="control-label">Account type<span style="color:red;">*</span></label>
                                        <select class="form-control" name="executive">
                                            <option value="0"> Normal Account </option>
                                            <option value="1"> Executive Account </option>
                                        </select>
                                    </div>

									<div class="col-md-6">
										<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
											<label class="control-label">Password<span style="color:red;">*</span></label>
											<input type="password" class="form-control" placeholder="Password" name="password" required>
											<?php if($errors->has('password')): ?>
											    <span class="label label-danger">
												<strong><?php echo e($errors->first('password')); ?></strong>
											    </span>
											<?php endif; ?>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
											<label class="control-label">Confirm password<span style="color:red;">*</span></label>
											<input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
										</div>
									</div>



                                    <div class="form-group<?php echo e($errors->has('bank_name') ? ' has-error' : ''); ?>">
										<label class="control-label">Bank<span style="color:red;">*</span></label>
										<input type="text" class="form-control" placeholder="Bank Name" value="<?php echo e(old('bank_name')); ?>" name="bank_name" required>
										<?php if($errors->has('bank_name')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('bank_name')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

									<div class="form-group<?php echo e($errors->has('account_number') ? ' has-error' : ''); ?>">
										<label class="control-label">Account Number<span style="color:red;">*</span></label>
										<input type="text" class="form-control" placeholder="Account Number" value="<?php echo e(old('account_number')); ?>" name="account_number" required>
										<?php if($errors->has('account_number')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('account_number')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

                                    <div class="form-group<?php echo e($errors->has('sort_code') ? ' has-error' : ''); ?>">
										<label class="control-label">Sort Code</label>
										<input type="text" class="form-control" placeholder="Sort Code (Optional)" value="<?php echo e(old('sort_code')); ?>" name="sort_code">
										<?php if($errors->has('sort_code')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('sort_code')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

                                    <div class="form-group<?php echo e($errors->has('bitcoin_wallet_id') ? ' has-error' : ''); ?>">
										<label class="control-label">Bitcoin Wallet ID</label>
										<input type="text" class="form-control" placeholder="Bitcoin Wallet ID (Optional)" value="<?php echo e(old('bitcoin_wallet_id')); ?>" name="bitcoin_wallet_id">
										<?php if($errors->has('bitcoin_wallet_id')): ?>
										    <span class="label label-danger">
											<strong><?php echo e($errors->first('bitcoin_wallet_id')); ?></strong>
										    </span>
										<?php endif; ?>
									</div>

									<div class="form-group">
									    <div class="col-sm-6 col-sm-offset-3">
										<center>
											<button style="margin-top:20px;" type="submit" class="btn btn-lg btn-primary">
											    Register
											</button>
										</center>
									    </div>
									</div>
							    </form>
							    <?php else: ?>
                            <h4>Transaction commences on Friday 4th of May 2018</h4>
                            <?php endif; ?>
					    	</div>
					</div>
				</div>
			</div>
		    </div>
		</div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>