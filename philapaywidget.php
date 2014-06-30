<?php
/* Plugin Name: Phila Pay Widget
Plugin URI: localhost/wordpress
Description: Displays Payment Options
Version: 1.0
Author: Andrew Kennel
Author URI: localhost/wordpress
*/
add_shortcode('PhilaPay', 'philapay_handler');

function philapay_handler(){
$message = <<<EOM
 
<div id="PhilaPayWidget" class="PhilaWidget">
	<span id="PhilaPayMainWindow">
		<h1 class="PhilaWidgetTitle">I need to</h1>
        <div id="PhilaFindLinkBlock">
			<div class="PhilaFindDropDown">
				<select rows="2" name="PhilaFindJumpMenu" id="PhilaFindJumpMenu" onchange="javascript:document.location = this.value;">
					<option value="#">Find</option>
					<option value="http://www.phila.gov/health/ambulatoryhealth/index.html">Health Centers</option>
					<option value="http://www.phila.gov/prisons/inmatelocator/inmatelocator.aspx">Inmate</option>
					<option value="http://www.phila.gov/personnel/jobs.html">Job</option>
					<option value="http://property.phila.gov/">Property</option>
					<option value="http://www.phila.gov/ParksandRecreation/aboutus/Pages/FindYourPath.aspx">Your Path</option>

				</select>
			</div>
		</div>
        <div id="PhilaObtainLinkBlock">
			<div class="PhilaObtainDropDown">
				<select rows="2" name="PhilaObtainJumpMenu" id="PhilaObtainJumpMenu" onchange="javascript:document.location = this.value;">
					<option value="#">Obtain</option>
                        <option value="#">—Licence</option>
                            <option value="http://www.acctphilly.org/">——Animal License</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=Construction&section=Licensing%20%26%20Regulations">——Building & Construction</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=All%20Business%20Types&section=Licensing%20%26%20Regulations">——Business</option>
                            <option value="http://www.phila.gov/health/permitsForms.html">——Health and Food</option>
                            <option value="https://business.phila.gov/Pages/HousingRentalLicense.aspx?stage=Start&type=All%20Business%20Types&section=Licensing%20%26%20Regulations&BSPContentListItem=Housing%20Inspection%20License">——Housing Inspection</option>
                            <option value="http://secureprod.phila.gov/wills/marriagelicense.aspx">——Marriage License</option>
                            <option value="http://www.philadelphiastreets.com/index.php/complete-streets-handbook">——Street Closure</option>
                        <option value="#">—Permit</option>
                            <option value="http://www.phila.gov/health/AirManagement/AirPermittingForms.html">——Air Pollution</option>
                            <option value="http://www.phila.gov/health/AirManagement/AsbestosControl.html">——Asbestos Control</option>
                            <option value="http://www.phila.gov/MDO/SpecialEvents/Pages/PermitsandApplications.aspx">——Block Party</option>
                            <option value="https://business.phila.gov/Pages/BuildingPermits.aspx?stage=Start&type=All%20Business%20Types&section=Permits%20%26%20Certificates&BSPContentListItem=Building%20Permits">——Building & Construction</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=All%20Business%20Types&section=Permits%20%26%20Certificates">——Business</option>
                            <option value="http://www.phillypolice.com/assets/docs/PPD-Form.Firearm-License-Application.pdf">——Handgun</option>
                            <option value="http://www.phila.gov/health/permitsForms.html">——Health and Food</option>
                            <option value="http://secure.phila.gov/streets/tnp/">——Moving Truck Requests</option>
                            <option value="http://www.phila.gov/MDO/SpecialEvents/Pages/default.aspx">——Special Events Permits</option>
                            <option value="https://secure.phila.gov/Streets/HaulingPermit/">——Special Hauling Permit</option>
                            <option value="http://www.phila.gov/health/permitsForms.html">——Tobacco Retailer Permit</option>
                        <option value="#">—Certificate</option>
                            <option value="http://www.portal.state.pa.us/portal/server.pt/community/birth_certificates/14121">——Birth Certificate</option>
                            <option value="https://business.phila.gov/Pages/Result.aspx?stage=Start&type=All%20Business%20Types&section=Permits%20%26%20Certificates">——Business</option>
                            <option value="http://www.portal.state.pa.us/portal/server.pt/community/death_certificates/14122">——Death Certificate</option>
                            <option value="http://phila.gov/health/permitsForms.html">——Health and Food</option>
                            <option value="https://secure.phila.gov/PSC-Onlinev2/">——Property Sales</option>
                            <option value="https://secure.phila.gov/CRS-Onlinev2/">——Rental Suitability</option>
				</select>
			</div>
		</div>
        <div id="PhilaPayLinkBlock">
			<div class="PhilaPayDropDown">
				<select rows="2" name="PhilaPayJumpMenu" id="PhilaPayJumpMenu" onchange="javascript:document.location = this.value;">
					<option value="#">Pay Online</option>
					<option value="https://wmq.etimspayments.com/pbw/include/philadelphia_alarms/input.jsp">Alarm Registration/Fines</option>
					<option value="https://wmq.etimspayments.com/pbw/include/philadelphia_sweep/input.jsp">Code Violation Notices</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/PaymentLookup.aspx?lookup=b518d3cc-b74c-4360-8a22-687ce6b262c9">Environmental Health Services</option>
					<option value="https://wmq.etimspayments.com/pbw/include/philadelphia_parking/input.jsp">Parking Tickets</option>
					<option value="https://ework.phila.gov/revenue/default.asp">Pay and File Taxes</option>
					<option value="http://www.phila.gov/revenue/RealEstateTax/">Real Estate Taxes</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/">Refuse Collection Fee</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/">Street Closure Permit</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/">Water Bill</option>
				</select>
			</div>
		</div>
	</span>
</div>
<div id="PhilaReportWidget" class="PhilaWidget">
	<span id="PhilaReportMainWindow">
		 <a href="http://www.phila.gov/ig/Pages/ReportWrongdoing.aspx">Report Fraud/Corruption</a>
		 <a href="http://phillypolice.com/forms/submit-a-tip">Submit a Police Tip</a>
		 <a href="http://potholes.phila.gov/tap.nsf/d15d032a30a36768852578850008337c?OpenForm">Report a Pothole</a>		 
	</span>
</div>

    
EOM;

return $message;
}

function philapaywidget($args, $instance) { // widget sidebar output
  extract($args, EXTR_SKIP);
  echo $before_widget; // pre-widget code from theme
  echo philapay_handler();
  echo $after_widget; // post-widget code from theme
}
?>
