
													</div>
												</div>
											
</div>
<?php  $controller = Yii::app()->controller->id;
 $action = Yii::app()->controller->action->id; ?>

<div id="profile-sidebar">
<?php if($controller != 'thankyou'){?>

<div id="profile-widget-box">
	<div id="profile-widget">
		<p class="loan-title"></p>
		<div class="widget-section <?php if(($controller == 'index' && $action =='index') || CommonMethods::checkStepFilled(1)){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->getBaseUrl(true);?>">Funding Request</a>
		</div>
		<div class="widget-section <?php if(($controller == 'account' && $action =='businessinfo') || CommonMethods::checkStepFilled(2)){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->createUrl('account/businessinfo');?>">Business Info</a>
		</div>
		<?php /*<div class="widget-section <?php if(($controller == 'account' && $action =='financials') || CommonMethods::checkStepFilled(3)){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->createUrl('account/financials');?>">Financials</a>
		</div> */ ?>
		<div class="widget-section <?php if(($controller == 'account' && $action =='personalinfo') || CommonMethods::checkStepFilled(4)){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->createUrl('account/personalinfo');?>">Your Info</a>
		</div>
		<div class="widget-section <?php if(($controller == 'account' && $action =='bizlocation') || CommonMethods::checkStepFilled(5)){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->createUrl('account/bizlocation');?>">Business Location</a>
		</div>
		<div class="widget-section <?php if(($controller == 'account' && $action =='references') || CommonMethods::checkStepFilled(6)){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->createUrl('account/references');?>">References</a>
		</div>
		<div class="widget-section <?php if(($controller == 'account' && $action =='uploads')){ echo "active";}?>" >
			<div class="circle-box">
				<div class="circle"></div>
			</div>
			<a href="<?php echo Yii::app()->createUrl('account/uploads');?>">Upload Documents</a>
		</div>
		
		
	</div>
</div>
<!-- ngIf: stateName === 'student.check-rate.start' -->

<?php } ?>

<div class="ng-scope" id="profile-help-sidebar" ng-controller="HelpSidebarController as HelpSideBar">
	<div id="help-sidebar">
		<div class="question-section">
			<?php  if(Yii::app()->user->getState('user_id')){?>
				<a class="primary-skinny-button-inverted" href="<?php echo Yii::app()->createUrl('account/logout');?>">Logout</a>
			<?php } else{ ?>
				<a class="primary-skinny-button-inverted loginopan">Sign In</a>
			<?php }  ?>
			<input class="primary-skinny-button-inverted cbtn" value="Contact us" type="button">
		</div>
		<est-security>
			<div class="security-section">
				<div class="verisign">
					<img src="<?php echo $this->commonMethodsComponent->publishFrontAssets();?>/images/norton-transparent.5ce160d0.png" alt="">
				</div>
				<div class="group">
					<div class="icon-secure-grey"></div>
					<h4>256-bit encrypted</h4>
				</div>
			</div>
		</est-security>
	</div>
</div>




</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- contatc us popup -->


	<div class="est-modal  modal-client-happiness modal-enter contactusp">
		<div class="modal-gray-out wout"></div>
		<div style="margin-top: -118.5px;" class="modal-window">
			<div class="modal-top-close  icon-close cdnone"></div>
			<article>
				<div class="modal-client-happiness ng-scope">
					<div class="outside-happiness-content group">
						<hgroup class="h1">
							<h1>Questions? We’re here to help.</h1>
						</hgroup>
					</div>
					<div class="row">
						<div id="happiness-options">
							<div class="happiness-section chat-section ng-hide">
								<div class="group">
									<div class="icon-ch-chat"></div>
									<hgroup class="h2">
										<h2>Chat With Us</h2>
									</hgroup>
									<p>Chat hours are Monday – Friday 8am-5pm PST.</p>
									<button class="primary-skinny-button" ng-click="chatNow()">
										<span>Start a Conversation</span>
									</button>
								</div>
							</div>
							<div class="happiness-section email-section no-chat">
								<div class="group">
									<div class="icon-ch-email"></div>
									<div class="icon-ch-email-mobile"></div>
									<hgroup class="h2">
										<h2>Email Us</h2>
									</hgroup>
									<p>We typically respond to emails within 8 hours.</p>
									<div class="email-button-mobile" ng-click="emailUs('info@moneyworksdirect.com')">
										<span>info@moneyworksdirect.com</span>
									</div>
									<button class="primary-skinny-button email-button">
										<span>info@moneyworksdirect.com</span>
									</button>
									<div class="icon-icon-arrow-right-lightgrey"></div>
								</div>
							</div>
							<div class="happiness-section phone-section no-chat">
								<div class="group">
									<div class="icon-ch-phone"></div>
									<div class="icon-ch-phone-mobile"></div>
									<hgroup class="h2">
										<h2>Call Us</h2>
									</hgroup>
									<p>Phone hours are Monday – Saturday 8am-7pm EST.</p>
									<div est-prevent-default="" id="phone-number">
										<span>(646) 722-1515</span>
									</div>
									<div class="icon-icon-arrow-right-lightgrey"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="happiness-modal-message">
							<!-- ngSwitchWhen: true -->
							<!-- ngSwitchWhen: false --><span class="ng-scope">Phone</span>
							<!-- end ngSwitchWhen: -->
							hours are
							<span class="bold">Monday - Friday 8am-5pm PST.</span> We typically respond to emails within 8 hours.
						</div>
					</div>
				</div>
			</article>
			<est-loading>
				<div class="est-loading-container ng-hide" ng-show="loading">
					<div class="loading-dots">
						<div class="dot dot-left"></div>
						<div class="dot dot-center"></div>
						<div class="dot dot-right"></div>
					</div>
				</div>
			</est-loading>
		</div>
	</div>

	<!-- End Contatc us PopUp -->




	<!-- Start Privacy Policy PopUp -->

<!--

	<div class="est-modal  modal-privacy-policy unclosable modal-enter pp">
		<div class="modal-gray-out"></div>
		<div style="margin-top: -256px;" class="modal-window">
			<div class="modal-top-close  icon-close"></div>
			<article>
				<div class="modal-privacy-policy modal-content scrollable-modal ng-scope">
					<hgroup class="header h1">
						<h1>Privacy Policy</h1>
					</hgroup>
					<div class="scrollable-modal-content">
						<div id="privacy-policy-doc">
							<div class="layer" id="overview-notice">
								<div class="width-wrap">
									<header>
										<p class="timestamp">
											last updated:
											<time>10/16/2014</time>
										</p>
									</header>
									<p class="important-text">At Earnest, we believe fairness and transparency are values that are fundamental to finance. That value powers all of the decisions we make, including how we gather and respect your personal information. We’ve written our policy to be as clear and straightforward as possible to empower and inform you about your privacy while on Earnest’s website.</p>
								</div>
							</div>
							<div class="layer" id="overview-list">
								<div class="width-wrap">
									<ul>
										<li>
											<div class="content-item icon-Lock"></div>
											<div class="overview-body">
												<h3>YOUR DATA IS PRIVATE</h3>
												<p>The login details of your linked accounts, such as usernames and passwords, are not accessible to anyone at Earnest. The financial and personal data we use to process your loan is stored securely by a trusted third-party partner.</p>
											</div>
										</li>
										<li>
											<div class="content-item icon-Shredder"></div>
											<div class="overview-body">
												<h3>YOUR DATA IS NOT A PRODUCT</h3>
												<p>We do not sell your information. To process loan applications we may need to share information provided by you with our partners so that they can perform requested services – but your information is never for sale.</p>
											</div>
										</li>
										<li>
											<div class="content-item icon-Vault"></div>
											<div class="overview-body">
												<h3>YOUR DATA IS PROTECTED</h3>
												<p>All data entered into the Earnest site is encrypted using industry-standard SHA-256 SSL technology before being sent to our servers in an off-site data center. Our servers are supported by multiple levels of protection including firewalls, private subnets and multi-factor authentication.</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="layer" id="privacy-body">
								<div class="width-wrap">
									<div class="row">
										<div class="hgroup h3">
											<h3>Privacy &amp; Security Policy</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">We respect your privacy and safeguard your information with industry-standard technology. Our core values include trust and transparency, and this Privacy Policy describes how we live up to those values for you.</p>
										</section>
										<section>
											<p>We believe that you deserve the utmost respect when it comes to the privacy of your personal information. As you use our services, we want you to be clear how we are using information and the ways in which you can protect your privacy. The terms “we,” “us,” and “Earnest” refer to Earnest Inc., a Delaware corporation, its subsidiaries, and affiliates.</p>
											<p>This Privacy Policy discloses which financial and personal information we collect, how we use it, and the choices you can make regarding the collection and use of this information. We also explain how any personally identifiable information that we may request will be used. Finally, we include our security policy, which describes how your personally identifiable information is protected both electronically and physically.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Information We Collect</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Information we collect while you use our site helps us improve our services. During the loan application process we also request and collect personal and financial information from you, such as your name and address.</p>
										</section>
										<section>
											<p>We may collect information from you when you use the Earnest site. We also collect personal and financial information during the registration and loan approval process. Additional information may be gathered during your future use of the site. Information that we collect may include personally identifying information, such as your name, address, email address, telephone number, or social security number. We may also collect financial information such as your income, account balance, payment history, credit history, or credit scores.</p>
											<p>We and/or our service providers may also collect information that is about you. We and/or our service providers may use this aggregated information in the administration of our Site to improve its usability, evaluate the success of particular marketing/advertising campaigns, and help optimize our Site based on your needs. This may include your internet protocol (IP) address, geographical location, browser type, referral source, length of visit, number of page views, or cookies and anonymous identifiers.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>How We Use Information <span>We Collect</span></h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">We use this information to help us verify your identity, communicate with you during and after the approval process, and underwrite your loan. We also use some of this information to improve our loan offerings, our site and advertisements, and to let you know when we have new services available. You can update the personal information you give us any time by emailing us at <a href="mailto:hello@meetearnest.com">hello@meetearnest.com</a>. We may also use this information to ensure that any content we display are relevant based on information you included in your profile and your use of the Earnest site.</p>
										</section>
										<section>
											<p>Earnest may also use your personal information to facilitate activities and transactions that need to occur during the lending process, such as:</p>
											<ul>
												<li>
													To establish that you are over the age of 18;
												</li>
												<li>
													To verify your identity and guard against potential fraud;
												</li>
												<li>
													To pull a credit report from a credit bureau, such as Experian, to help determine your creditworthiness;
												</li>
												<li>
													To determine your eligibility for an Earnest loan;
												</li>
												<li>
													To enable our financial services partners to implement automatic payments and fund transfers;
												</li>
												<li>
													To contact you if there is a problem completing a transaction you requested or to discuss a problem with your account;
												</li>
												<li>
													To implement collection activities as needed; and/or
												</li>
												<li>
													To maintain regular communications with you concerning transactions you initiate, including but not limited to requesting information or assistance, submitting a loan request, and making payments.
												</li>
											</ul>
											<p>More generally, we may use information that we collect from you or that you provide to us:</p>
											<ul>
												<li>
													To provide, maintain, protect and improve our services, to develop new ones, and to protect Earnest and our users;
												</li>
												<li>
													To notify you about changes to the Earnest site or any products or services we offer or provide though it;
												</li>
												<li>
													To keep a record of your communication to help solve any issues you might be facing;
												</li>
												<li>
													For our marketing purposes to offer our products and services to you, such as advertisements, by us through third parties;
												</li>
												<li>
													To offer you tailored content giving you more relevant search results and ads;
												</li>
												<li>
													To enforce or apply our Terms of Use, loan agreement, and any other agreements between you and Earnest, including for billing and collection;
												</li>
												<li>
													To fulfill any other purpose for which you provide it or otherwise give your consent; and/or
												</li>
												<li>
													To comply with any court order, law, or legal process, including retaining personal data or responding to any government or regulatory request.
												</li>
											</ul>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Information You Share</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Your information is available to be reviewed and updated on your account profile page at any time. You can also send a request to <a href="mailto:hello@meetearnest.com">hello@meetearnest.com</a>. Some information regarding your loan application cannot be changed due to laws or legal requirements, and in those cases we may not be able to accommodate your request.</p>
										</section>
										<section>
											<p>You can review and change your personal information by logging into the Earnest site and visiting your account profile page. You may also email us at <a href="mailto:hello@meetearnest.com">hello@meetearnest.com</a> to request access to, correct, or delete any personal information that you have provided to us. We may not accommodate a request to change information if we believe the change would violate any law or legal requirement or cause the information to be incorrect.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Information We Share</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Advertisers may use cookies on our site to collect information similar to the information we collect, and target ads to you based on information you included in your profile. We may also use remarketing to advertise to visitors who haven’t completed a task, such as completing their loan application.</p>
										</section>
										<section>
											<p>Earnest may share information with third parties as described below.</p>
											<p class="subheader">Advertisers</p>
											<p>
												Earnest may allow third-party advertisers to use cookies on the Earnest site to collect the same type of information for the same purposes as Earnest does for itself. They may be able to associate the information they collect with other information they have about you from other sources. We do not necessarily have access to or control over the cookies they use, but you may be able to opt out of some of their practices by visiting the following links: <a href="#">Network Advertising Initiative</a>, <a href="#">Omniture</a>, <a href="#">Aperture</a>, <a href="#">Digital Advertising Alliance</a>, and <a href="#">PrivacyChoice</a>. Opting out does not prevent the display of advertisements to you.
											</p>
											<p>
												Earnest may also use certain remarketing services to advertise on third-party websites to previous visitors to our site. This means that we may advertise to previous visitors who haven’t completed a task on our site (like completing a loan application). This could be in the form of an advertisement on a search results page, or a site in the network of our remarketing partners.
											</p>
											<p class="subheader">Partners &amp; Service Providers</p>
											<p>
												Some of the services that are offered through the Earnest site may be provided by third-party partners, like Experian. We may also outsource some of Earnest’s functions to third-party providers, such as data storage providers, platform administrators, credit bureaus, collection agencies, loan servicers, payment processing functions, and/or other services. We may share information from or about you with these third-party providers so that they can perform the requested services or complete your requests.
											</p>
											<p class="subheader">Third-party Accounts</p>
											<p>
												You can connect your loan application to your accounts on third-party services, like LinkedIn, in which case we may collect and store information identifying your account with the third-party service. We may use the information to inform your application.
											</p>
											<p>
												When you connect an account with us, you are requesting our third-party financial aggregator, Intuit, to create a new 'token' for Earnest. That token gives access to view account information without giving permissions to perform any other action inside that account.
											</p>
											<p class="subheader">Aggregated Information</p>
											<p>
												We may share aggregated, non-identifiable user information with third parties, such as advertisers and content distributors. For example, we may disclose the number of users that have been exposed to or clicked on advertisements.
											</p>
											<p class="subheader">Business Transfers</p>
											<p>
												We may share information from or about you with subsidiaries, joint ventures, or other companies under common control, in which case we will require them to honor this Privacy Policy. If Earnest is involved in a merger, acquisition or asset sale, we will continue to ensure the confidentiality of any personal information and give affected users notice before personal information is transferred or becomes subject to a different privacy policy.
											</p>
											<p class="subheader">Links</p>
											<p>
												The Earnest site may contain links to unaffiliated third-party websites. Except as described in this policy, we do not share your personal information with them, and are not responsible for their privacy practices. We suggest you read the privacy policies on all such third-party websites.
											</p>
											<p class="subheader">Law Enforcement</p>
											<p>
												We may disclose information from or about you if we have a good faith belief that such investigation or disclosure is (a) reasonably necessary to comply with legal process and law enforcement instructions and orders, such as a search warrant, subpoena, statute, judicial proceeding, or other legal process served on us; (b) helpful to prevent, investigate, or identify possible wrongdoing in connection with the Site; or (c) protect our rights, reputation, property, or that of our users, affiliates, or the public.
											</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Cookies</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Cookies help us protect your account’s security, and allow us to personalize your Earnest experience.</p>
										</section>
										<section>
											<p>We, and third parties with whom we partner, may use cookies, web beacons, local shared objects, and similar technology (“Cookies”) to improve your user experience and the overall quality of our service. Cookies are small data files that may have unique identifiers, and reside, among other places, on your computer or mobile device, in emails we send to you, and on our web pages. Cookies may transmit information about you and your use of the Earnest site, such as your browser type, preferences, data relating to advertisements that have been displayed to you or that you have clicked on, and the date and time of your use.</p>
											<p>Most importantly, cookies help us protect your account’s security. Cookies may be stored only during an individual session (“Session ID cookies”) or have long-term expiration dates (“persistent cookies”). Session ID cookies follow your activities on our site so that we can ensure that no one is making changes to your profile or applying for loans, and expire when you close your browser. Persistent cookies that remain on your hard drive for an extended period of time so that we can recognize you when you return to our Site.</p>
											<p>The following is a list of the types of cookies that Earnest and its third-party partners use:</p>
											<p class="subheader">Processes</p>
											<p>
												These Cookies make the Earnest site work in the way you expect it to.
											</p>
											<p class="subheader">Authentication, Security, and Compliance</p>
											<p>
												We use these to prevent fraud, protect your data from unauthorized parties, and comply with legal requirements.
											</p>
											<p class="subheader">Preferences</p>
											<p>
												These Cookies help the Earnest site remember information about how you prefer the site to behave and look.
											</p>
											<p class="subheader">Notifications</p>
											<p>
												We use these Cookies to give us notice of information or options that we think could improve your use of the Earnest site.
											</p>
											<p class="subheader">Advertising</p>
											<p>
												These Cookies make advertising more relevant to you and more valuable to advertisers.
											</p>
											<p class="subheader">Analytics</p>
											<p>
												These Cookies help us understand how visitors use the Earnest site.
											</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Cookie Management</h3>
											<i class="icon-field_info"></i>
										</div>
										<section class="full-width">
											<p>It may be possible to disable some Cookies through your device or browser settings, but doing so may affect your ability to use the Site. The method for disabling cookies may vary by device and browser, but can usually be found in preferences or security settings.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Protecting Your Information</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Earnest takes your privacy and security seriously. We have enabled HTTPS access to our site, in addition to SSL technology, and your login information of your financial accounts is not accessible to anyone at Earnest. This data is stored offsite. Additionally, there are a number of precautions you can take to protect the security of your computer, including selecting a strong Earnest password and not sharing it with anyone.</p>
										</section>
										<section>
											<p>Earnest takes steps to safeguard your personal information through vigorous physical, electronic, and operational policies and practices:</p>
											<ul>
												<li>
													Session Time-Outs: We employ session time-outs to protect your account. You will be logged out of the site after thirty minutes. This reduces the risk of others being able to access your account if you leave your computer unattended.
												</li>
												<li>
													Protection of Account Numbers: After you have entered your account numbers, we will never display your account number.
												</li>
												<li>
													Passwords: At a minimum, we require the use of both numbers and letters in your password. We have also instituted secure steps by which you can regain access to your account should you forget your password, including email reset. Your password is not known to any employee or third party with whom we may partner, and we will never ask you for your passwords as a means of identifying yourself. If you ever receive an email purporting to come from Earnest that asks for your password, you should immediately report this to <a href="#">your@mail.com</a>.
												</li>
												<li>
													Secure, Off-Site Hosting: We store your personal and sensitive financial data such as Social Security numbers and bank accounts in a virtual private cloud hosted by Amazon Web Services.
												</li>
												<li>
													Defined Service Access points: Data can only be read or written through defined service access points, the use of which is password-protected and limited to only those employees or third parties who have a need to know.
												</li>
												<li>
													Secure Socket Layer certificate technology: We equip our servers with SSL certificate technology to provide a safe and secure channel to visit the Earnest site.
												</li>
												<li>
													Data encryption: SSL also ensures that all data entered into the Earnest site is encrypted. For further encryption protection, we require a 128-bit secure browser for logins and transactions.
												</li>
												<li>
													Network firewalls: There is no inbound communication allowed between data and application servers and the Internet.
												</li>
											</ul>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Communications from Earnest</h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Earnest may send you notifications regarding your account. You cannot opt out of these notifications as they are in place to help protect your privacy and security, but you can opt out of any additional marketing communications. You can do this by clicking the unsubscribe link at the bottom of any marketing communications you receive.</p>
										</section>
										<section>
											<p>To protect your account, Earnest may send you notifications that confirm actions taken on your account. These notifications are typically sent to notify you of a change in status, or for legal or security purposes. For example, you may receive notifications confirming your registration and the successful submission of loan requests, as well as requests from us for additional information and reminders to sign your loan agreement.</p>
											<p>You cannot opt out of these notifications as they are in place to protect the security of your account and personal information. We do this for your own protection so that you can be sure no one else is making changes to your account without your knowledge. However, the security offered by these notifications can be undermined if other people have access to your email account.</p>
											<p>Although we do our best to protect your personal information, we cannot guarantee the security of your personal information transmitted to our Site. Even under the best of circumstances, the transmission of information via the internet is not completely secure. Any transmission of personal information is done at your own risk. In the event of a data breach, we will comply with the notification guidelines required by federal law as well as the laws of each state in which we do business.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>What Can I Do To Protect <span>My Security?</span></h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">Use a strong password, do not share it, and only log onto your Earnest account from a secured computer with virus protection.</p>
										</section>
										<section>
											<p>You can take several precautions to protect the security of your computer and personal information.</p>
											<ul>
												<li>
													Use a unique password that you do not use for any other service.
												</li>
												<li>
													To choose a strong password, avoid using any information that others can easily learn about you, such as a family member’s name or birthday, and use special characters in place of letters.
												</li>
												<li>
													Change your Earnest password frequently.
												</li>
												<li>
													Do not share your Earnest password with anyone.
												</li>
												<li>
													Restrict access to the email account you registered with on the Earnest site.
												</li>
												<li>
													Install and regularly update antivirus and firewall software to protect your computer from external attacks by malicious users.
												</li>
												<li>
													Do not log onto your Earnest account in public areas where the internet is unsecured.
												</li>
												<li>
													Logout and close the browser window when you are finished with a session on the Earnest site.
												</li>
											</ul>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Compliance With State <span>And Federal Laws</span></h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">For more information regarding your personal privacy rights and how they may differ in certain states, send an email to <a href="mailto:legal@meetearnest.com">legal@meetearnest.com</a>.</p>
										</section>
										<section>
											<p>This Privacy Policy may not constitute your entire set of privacy rights, as these may vary from state to state. For example, California Civil Code Section § 1798.83 permits California residents that are users of the Earnest site to request certain information regarding the disclosure of personal information to third parties for direct marketing purposes. To make such a request, please send an email to <a href="mailto:legal@meetearnest.com">legal@meetearnest.com</a>.</p>
											<p>To be certain of your privacy rights, you may wish to contact the agency in your state that is charged with overseeing consumer privacy rights.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>When This Privacy <span>Policy Applies</span></h3>
											<i class="icon-field_info"></i>
										</div>
										<section class="full-width">
											<p>This policy applies to information we collect about you in connection with your use of this website, email, text, and other mobile applications, and through the loan application process. When you use the Earnest site, you consent to our collection, use, and disclosure of information about you as described in this Privacy Policy.</p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Changes to Our <span>Privacy Policy</span></h3>
											<i class="icon-field_info"></i>
										</div>
										<section>
											<p class="plain-english">We will post any changes to the Privacy Policy on this page and, if the changes are significant, we will provide a more prominent notice (including, for example, email notification). Your use of the Earnest site following any update to the Privacy Policy means that you accept the updated policy.</p>
										</section>
										<section>
											<p>This Privacy Policy may change from time to time. We will post any changes to the Privacy Policy on this page and, if the changes are significant, we will provide a more prominent notice (including, for example, email notification). Any updates to this policy become effective when we post the updates on the Site. We will also keep prior versions of this Privacy Policy in an archive for your review. Your use of the Earnest site following the update to the Privacy Policy means that you accept the updated policy.</p>
											<p class="policy-timestamp">
											</p>
											<p class="subheader">This policy was last updated on
												<time>10/16/2014</time>.</p>
											<p></p>
										</section>
									</div>
									<div class="row">
										<div class="hgroup h3">
											<h3>Contact Information</h3>
											<i class="icon-field_info"></i>
										</div>
										<section class="full-width">
											<p>For additional information, or if you have any questions regarding this policy or the privacy practices at Earnest, please submit your questions or comments directly at: <a href="mailto:hello@meetearnest.com">hello@meetearnest.com</a>.</p>
											<p>
												<b>Earnest Inc.</b>
												<br> 1455 Market Street, 18th Floor
												<br> San Francisco, CA 94103
												<br> 1-888-601-2801
											</p>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row action-row">
						<a class="button-container" href="#" target="_blank">
							<button class="secondary-button hide-on-mobile" type="button">PRINT PRIVACY POLICY</button>
						</a>
						<button class="primary-button closepp">DONE</button>
					</div>
				</div>
			</article>
			<est-loading>
				<div class="est-loading-container ng-hide" ng-show="loading">
					<div class="loading-dots">
						<div class="dot dot-left"></div>
						<div class="dot dot-center"></div>
						<div class="dot dot-right"></div>
					</div>
				</div>
			</est-loading>
		</div>
	</div>-->
	<!-- Start Privacy Policy PopUp -->


	<!-- Start application solicitation disclosure PopUp -->

	

	<!-- End application solicitation disclosure PopUp -->
	
<?php if($controller == 'index' && $action == 'index'){
	include_once('footer_login.php');
}?>

	<!-- End login modal -->



</body>
</html>