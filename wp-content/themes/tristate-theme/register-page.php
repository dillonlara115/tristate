<?php
/**
 * The template for displaying all pages.
 *Template Name: register page template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress consdivuct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package divistate
 */

get_header(); ?>

<div id="primary" class="content-area register-page">
  <header class="endivy-header">
    <?php the_title( '<h1 class="endivy-title">', '</h1>' ); ?>
  </header><!-- .endivy-header -->
  <?php echo $post->post_content ?>
  <a href="uploads/2014_AttendeeForm_NEW.pdf" target="_blank" class='link' data-hover="Download Attendee Registration Form (PDF)">Download Attendee Registration Form (PDF)</a>
  <div id="main" class="registration-table-container">
    <br /><br />
    <div style="align:auto">
      <form method="post">
        <type="hidden" input name="recipients" value="tristatesignexpo@gmail.com" />
        <input type="hidden" name="mode" value="PayOnly">
        <input type="hidden" name="txntype" value="sale">
        <table class=" ticket-table">
          <tr>
            <td colspan="7" style="background: #525254;text-align:center;"><h3>SIGN COMPANY EXPO ATTENDEES ONLY</h3></td>
          </tr>
          <tr>
            <td colspan="7" style="text-align:center;"><div style="color:#ED1C1D;"><b>Enter the Number of Attendees From Your Company</b></div><b>(Children of Registered Attendees under 12 are not required to register)</b></td>
          </tr>
          <tr>
            <td colspan="2"> <b>COMPANY INFORMATION</b></td>
            <td colspan="1">Check One</td>
            <td colspan="4"><strong><input name="TSSA" type="checkbox" value="TSSA MEMBER">Tri-State Sign Association Member </strong>&nbsp;&nbsp;<strong><input name="NonMember" type="checkbox" value="Non-Member">Non-Member</strong></td>
          </tr>
          <tr class="row-group">
            <td colspan="4"><b>Name:</b><input type="text" name="Primary_Contact" placeholder="Primary Contact"></td>
            <td colspan="3"><b>Company Name:</b> <input type="text" name="Company"></td>
          </tr>
          <tr class="row-group">
            <td colspan="4"><b>Address:</b> <input type="text" name="Address"></td>
            <td><b>City:</b> <input type="text" name="City" size="15" ></td>
            <td><b>State:</b> <input type="text" name="State" size="10" ></td>
            <td><b>Zip:</b> <input type="text" name="Zip" size="10" ></td>
          </tr>
          <tr class="row-group">
            <td colspan="4"><b>E-mail:</b> <input type="email" name="Email"></td>
            <td colspan="2"><b>Phone:</b> <input type="tel" name="Phone" size="15" ></td>
            <td colspan="1"><b>Fax:</b> <input type="tel" name="Fax" size="15" ></td>
          </tr>
          
          <?php if (new DateTime() < new DateTime("2015-06-15 00:00:00")) { ?>
            <tr class="header-row">
              <th colspan="4">DISCOUNTED GENERAL REGISTRATION:<br /> (Prior to June 15)</th>
              <th colspan="3" class="table-number-th">Enter #</th>
            </tr>
            <tr>
                <td colspan="4" class="blank-td"></td>
                <td colspan="3" data-th="Number of Attendees: " >
                <span>Member: @ $75.00</span> <input class="member-count" name="PROD_Memattendee_75.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)"> Attendees
                <br/><span>Non-Member: @ $95.00</span> <input class="reg-count" name="PROD_attendee_95.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)"> Attendees
                </td>
            </tr>
          <?php } else { ?>
            <tr class="header-row">
              <th colspan="4">GENERAL REGISTRATION:<br /> (After June 15)</th>
              <th colspan="3" class="table-number-th">Enter #</th>
            </tr>
            <tr>
              <td colspan="4"class="blank-td"></td>
              <td colspan="3" data-th="Number of Attendees: " >
                <span>Member: @ $95.00</span><input name="PROD_Memattendee1_95.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)"> Attendees<br />
                <span>Non-Member: @ $115.00</span><input name="PROD_attendee1_115.00" type="text" min="0" size="5" onChange="CalculateTotal(this.form)"> Attendees
              </td>
            </tr>
          <?php } ?>        
          
          <tr>
            <th colspan="4">HALL OF FAME & SCHOLARSHIP AWARDS BANQUET</th>
            <th colspan="3" class="table-number-th">Enter #</th>
          </tr>
          <tr>
            <td colspan="4"  class="blank-td"></td>
            <td colspan="3"><span>Banquet: @ $60.00</span> <input name="PROD_Banquet_60.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)"> Banquet Tickets</td>
          </tr>
          <tr>
            <th colspan="4">GOLF TOURNAMENT - Limited to the first 124 entries</th>
            <th colspan="3" class="table-number-th">Enter #</th>
          </tr>
          <tr>
            <td colspan="4" class="blank-td">&nbsp;</td>
            <td colspan="3">
            <span>Hole Sponsor: @ $100.00</span> <input name="PROD_holdsponsor_100.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)"> Holes Sponsored <br />
            <span>Entry Fee: @ $95.00</span> <input name="PROD_golfentry_95.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)"> Entry Fees</td>
          </tr>
          <tr>
            <th colspan="4">TRADESHOW ONLY</th>
            <th colspan="3" class="table-number-th">Enter #</th>
          </tr>
          <tr>
            <td colspan="4" >(Registration and name badge required)</td>
            <td colspan="3"><span>Show Price: <strong>FREE</strong></span><input name="PROD_TRADEONLY_0.00" type="number" min="0" size="5" onChange="CalculateTotal(this.form)">Tradeshow Tickets</td>
          </tr>
          <tr>
            <td colspan="7" class="grand-total"><strong>GRAND TOTAL AMOUNT DUE: </strong><INPUT TYPE=TEXT NAME=chargetotal SIZE=10 onFocus="this.form.elements[0].focus()"></td>
          </tr>

        </table>
        <table class="attendees-table-list" >
          <tr style="background: #525254;color:#fff;">
            <td rowspan="4" class="attendees-name-header" colspan="2"><center><h4>Name of Attendees</h4><br /></center></td>
            <th style="background: #525254;color:#fff;text-align:center;" colspan="6">Check All That Apply For Each Attendee</th>
          </tr>
          <tr>
            <th rowspan="3" style="background: #525254;color:#fff;text-align:center;">General Registration & Trade Show<br /></th>
            <th rowspan="3" style="background: #525254;color:#fff;text-align:center;">Hall of Fame/Scholarship Awards Banquet<br /></th>
            <th colspan="2" rowspan ="3" style="background: #525254;color:#fff;text-align:center;">Educational Seminars<br /></th>

            <th rowspan="3" style="background: #525254;color:#fff;text-align:center;">Golfers Handicap<br /></th>

            <th rowspan="3" style="background: #525254;color:#fff;text-align:center;">Trade Show Only</th>
          </tr>
          <tr> </tr>
          <tr> </tr>

          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant1" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration1" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet1" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars1a">
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>

            <td data-th="Golfers Handicap: "><input type="text" name="Handicap1" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly1" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant2" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration2" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet2" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars2a">>
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>

            <td data-th="Golfers Handicap: "><input type="text" name="Handicap2" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly2" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant3" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration3" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet3" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars3a">
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>

            <td data-th="Golfers Handicap: "><input type="text" name="Handicap3" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly3" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant4" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration4" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet4" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2"><select name="Seminars4a">
              <option value="0">Select One</option>
              <option value="One">Seminar 1</option>
              <option value="Two">Seminar 2</option>
              <option value="ThreeANDFour">Seminars 3&4</option>

            </select>
          </td>

          <td data-th="Golfers Handicap: "><input type="text" name="Handicap4" size="5"></td>

          <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly4" value="checked"></td></tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant5" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration5" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet5" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars5a">
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>
            <td data-th="Golfers Handicap: "><input type="text" name="Handicap5" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly5" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant6" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration6" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet6" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2"><select name="Seminars6a">
              <option value="0">Select One</option>
              <option value="One">Seminar 1</option>
              <option value="Two">Seminar 2</option>
              <option value="ThreeANDFour">Seminars 3&4</option>

            </select>
          </td>
          <td data-th="Golfers Handicap: "><input type="text" name="Handicap6" size="5"></td>

          <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly6" value="checked"></td>
        </tr>
        <tr>
          <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant7" placeholder="name of attendee"></td>
          <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration7" value="checked"></td>
          <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet7" value="checked"></td>
          <td data-th="Educational Seminars: " colspan="2">
            <select name="Seminars7a">
              <option value="0">Select One</option>
              <option value="One">Seminar 1</option>
              <option value="Two">Seminar 2</option>
              <option value="ThreeANDFour">Seminars 3&4</option>

            </select></td>
            <td data-th="Golfers Handicap: "><input type="text" name="Handicap7" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly7" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant8" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration8" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet8" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars8a">
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>
            <td data-th="Golfers Handicap: "><input type="text" name="Handicap8" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly8" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2"><input type="text" name="registrant9" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: "><input type="checkbox" name="GeneralRegistration9" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet9" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars9a">
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>
            <td data-th="Golfers Handicap: "><input type="text" name="Handicap9" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly9" value="checked"></td>
          </tr>
          <tr>
            <td data-th="Name of Attendee: " colspan="2" style="border-style: solid;border-width: 1px;"><input type="text" name="registrant10" placeholder="name of attendee"></td>
            <td data-th="General Registration & Trade Show: " ><input type="checkbox" name="GeneralRegistration10" value="checked"></td>
            <td data-th="Hall of Fame/Scholarship Awards Banquet: "><input type="checkbox" name="Banquet10" value="checked"></td>
            <td data-th="Educational Seminars: " colspan="2">
              <select name="Seminars10a">
                <option value="0">Select One</option>
                <option value="One">Seminar 1</option>
                <option value="Two">Seminar 2</option>
                <option value="ThreeANDFour">Seminars 3&4</option>

              </select>
            </td>
            <td data-th="Golfers Handicap: "><input type="text" name="Handicap10" size="5"></td>

            <td data-th="Trade Show Only: "><input type="checkbox" name="TradeOnly10" value="checked"></td>
          </tr>
        </table>
        <strong>CLICK PROCEED TO PAY & ENTER CREDIT CARD PAYMENT INFORMATION BELOW&nbsp;&nbsp;&nbsp;<input type="hidden" name="storename" value="1001262950"><INPUT type="button" value="PROCEED WITH PAYMENT" onclick="submitTwice(this.form)"></strong><br />
        <b>CLICK IF REGISTERING FOR TRADE SHOW ONLY(NO CC REQUIRED)&nbsp;&nbsp;
          <INPUT type="button" value="TRADE SHOW ONLY" onclick="submitOnce(this.form)">
          </form>
          <iframe name="ifr1" width="760px" height="400px" frameborder="0"></iframe>
          <iframe name="ifr2" width="1px" height="1px" frameborder="0"></iframe>

        </div>
        <div class="clear"></div>
      </div>



    </div><!-- #primary -->
    <script language="JavaScript" type="text/javascript">
      <!--

/* This script is Copyright (c) Paul McFedries and 
Logophilia Limited (http://www.mcfedries.com/).
Permission is granted to use this script as long as 
this Copyright notice remains in place.*/

function CalculateTotal(frm) {
  var order_total = 0

    // Run through all the form fields
    for (var i=0; i < frm.elements.length; ++i) {

        // Get the current field
        form_field = frm.elements[i]

        // Get the field's name
        form_name = form_field.name

        // Is it a "product" field?
        if (form_name.substring(0,4) == "PROD") {

            // If so, exdivact the price from the name
            item_price = parseFloat(form_name.substring(form_name.lastIndexOf("_") + 1))

            // Get the quantity
            item_quantity = parseInt(form_field.value)

            // Update the order total
            if (item_quantity >= 0) {
              order_total += item_quantity * item_price
            }
          }
        }

    // Display the total rounded to two decimal places
    frm.chargetotal.value = round_decimals(order_total, 2)
  }

  function round_decimals(original_number, decimals) {
    var result1 = original_number * Math.pow(10, decimals)
    var result2 = Math.round(result1)
    var result3 = result2 / Math.pow(10, decimals)
    return pad_with_zeros(result3, decimals)
  }

  function pad_with_zeros(rounded_value, decimal_places) {

    // Convert the number to a sdiving
    var value_string = rounded_value.toString()
    
    // Locate the decimal point
    var decimal_location = value_string.indexOf(".")

    // Is there a decimal point?
    if (decimal_location == -1) {

        // If no, then all decimal places will be padded with 0s
        decimal_part_length = 0
        
        // If decimal_places is greater than zero, tack on a decimal point
        value_string += decimal_places > 0 ? "." : ""
      }
      else {

        // If yes, then only the exdiva decimal places will be padded with 0s
        decimal_part_length = value_string.length - decimal_location - 1
      }

    // Calculate the number of decimal places that need to be padded with 0s
    var pad_total = decimal_places - decimal_part_length
    
    if (pad_total > 0) {

        // Pad the sdiving with 0s
        for (var counter = 1; counter <= pad_total; counter++) 
          value_string += "0"
      }
      return value_string
    }

//-->
</script>
</script>
<script type="text/javascript">
  function submitTwice(f){
    f.action = 'formmail.php';
    f.target='ifr2';
    f.submit();
    f.action = 'https://www.linkpointcendival.com/lpc/servlet/lppay';
    f.target='ifr1';
    f.submit();
  }
</script>
</script>
<script type="text/javascript">
  function submitOnce(f){
    f.action = 'formmail.php';
    f.target='ifr2';
    f.submit();
    f.action = 'index.php/thank-you';
    f.target='ifr1';
    f.submit();
  }
</script>


<?php get_footer(); ?>