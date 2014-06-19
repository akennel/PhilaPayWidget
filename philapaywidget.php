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
		<h1 class="PhilaWidgetTitle">It's easy to pay on time</h1>
		<div id="PhilaPayLinkBlock">
			<div class="PhilaPayDropDown">
				<select rows="2" name="PhilaPayJumpMenu" id="PhilaPayJumpMenu" onchange="javascript:document.location = this.value;">
					<option value="/pages/default.aspx">Select Payment Option...</option>
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
