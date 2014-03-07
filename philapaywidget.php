<?php
/* Plugin Name: Phila Pay Widget
Plugin URI: localhost/wordpress
Description: Displays Payment Options
Version: 1.0
Author: Andrew Kennel
Author URI: localhost/wordpress
*/

class PhilaPayWidget extends WP_Widget {
          function PhilaPayWidget() {
                    $widget_ops = array(
                    'classname' => 'PhilaPayWidget',
                    'description' => 'Phila Pay Widget'
          );

          $this->WP_Widget(
                    'PhilaPayWidget',
                    'Phila Pay Widget',
                    $widget_ops
          );
}

          function widget($args, $instance) { // widget sidebar output
                    extract($args, EXTR_SKIP);
                    echo $before_widget; // pre-widget code from theme
print <<<EOM

<div id="PayWidget" style="background-color: #FAFAFA; border-radius: 10px; padding: 10px">
    <h4>Pay</h4>
    <div class="widgetBodyText">
    With so many options, it's easy to pay on time.
        <div class="dropDown">
            <select rows="2" name="jumpMenu" id="jumpMenu" onchange="javascript:document.location = this.value;">
                    <option value="/pages/default.aspx">Select</option>
                    
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
</div>

EOM;
                    echo $after_widget; // post-widget code from theme
          }
}

add_action(
          'widgets_init',
          create_function('','return register_widget("PhilaPayWidget");')
);
?>