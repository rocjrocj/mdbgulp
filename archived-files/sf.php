<?php
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>



    <script type='text/javascript' src='http://dev-healthshare2019-grandconference.pantheonsite.io/wp-includes/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='http://dev-healthshare2019-grandconference.pantheonsite.io/wp-includes/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='http://dev-healthshare2019-grandconference.pantheonsite.io/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='http://dev-healthshare2019-grandconference.pantheonsite.io/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
</head>
<body>



<code><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.3/jquery.xdomainrequest.min.js"></script>
    <p>Registration for the 2018 HealthShare Symposium is now open. Take advantage of this unique opportunity and book your spot now to ensure you won’t miss out on any of the transformative content and programming planned for the Healthshare Symposium in Phoenix.<br>Questions? Please email us at <a href="mailto:marketing@healthgrades.com">marketing@healthgrades.com</a>.<br><small><em>This form is designed to work with the most recent versions of common web browsers. If you have an older version (for example, IE9 or below), please upgrade now.</em></small></p>
    <div id="conventionWait" style="display: none;">Processing...</div>
    <div id="conventionMessage" class="contactForm center centerText" style="font-size: 200%"></div>
    <div id="contactInformation" class="contactForm center" style="display: block">
        <div class="table">
            <div class="tableRow">
                <div class="tableCell rightSpacing mobileCell">
                    <div class="table">
                        <div class="tableRow">
                            <div class="tableCell rightSpacing bottom ">
                                <span data-valmsg-replace="true" data-valmsg-for="" id="firstNameErrorLabel" class="validateLabel"></span>
                                <label for="tbFirstName">First Name*</label>
                                <input id="tbFirstName" type="text" placeholder="First Name"  maxlength="35" required="required"/>
                            </div>
                            <div class="tableCell leftSpacing bottom validateContainer">
                                <label for="tbLastName">Last Name*</label>
                                <input id="tbLastName" type="text" placeholder="Last Name" maxlength="35" required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="table">
                        <div class="tableRow">
                            <div class="tableCell validateContainer emailContainer">
                                <span data-valmsg-replace="true" data-valmsg-for="" id="EmailErrorLabel" class="validateLabel"></span>
                                <label id="EmailLabel" for="tbEmailInput">Email*</label>
                                <input id="tbEmailInput" name="tbEmailInput" type="email" placeholder="Name@hospital.com" onchange="checkDuplicate();" maxlength="255" required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="tableCell validateContainer userTypeContainer">
                            <label for="tbOrganization">Organization*</label>
                            <input id="tbOrganization" type="text" placeholder="Hospital Name"  maxlength="50" required="required"/>
                        </div>
                    </div>
                    <div class="table">
                        <div class="tableRow">
                            <div class="tableCell">
                                <label for="tbTitle">Title*</label>
                                <input id="tbTitle" type="text" placeholder="Your Title" maxlength="100" required="required"/>
                            </div>
                        </div>
                    </div>
                    <label for="tbAddress1">Address Line 1*</label>
                    <input id="tbAddress1" type="text" placeholder="Street address, P.O. box" maxlength="100"  required="required"/>
                    <br/>
                    <label for="tbAddress2">Address Line 2</label>
                    <input id="tbAddress2" type="text" placeholder"Apartment, suite, unit, building, floor, etc."  maxlength="50" />
                    <br/>
                    <div class="table">
                        <div class="tableRow">
                            <div id="cityContainer" class="tableCell rightSpacing">
                                <label for="tbCity">City*</label>
                                <input id="tbCity" type="text" placeholder=""  maxlength="35"  required="required"/>
                            </div>
                            <div id="stateContainer" class="tableCell leftSpacing">
                                <label for="tbState">State*</label>
                                <input id="tbState" type="text" placeholder="" maxlength="35"  required="required"/>
                            </div>
                            <div id="stateContainer" class="tableCell leftSpacing">
                                <label for="tbZip">Zip/Postal Code*</label>
                                <input id="tbZip" type="text" maxlength="35"  required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="table">
                        <label for="tbPhone">Work Phone*</label>
                        <input id="tbPhone" type="tel" placeholder="999-999-9999" required="required"/>
                        <br>
                        <label id="ActivityChoiceLabel" for="ActivityChoice" name="ActivityChoiceLabel">Activity Choice*</label>
                        <select id="ActivityChoice" placeholder="Please Select An Activity"  required="required">
                            <option>Please Select An Activity</option>
                        </select>
                        <div id="ActivityDescription" class="activityDetailClass" >
                            <h3 id="ActivityDescriptionHeader" style="/*color:darkgreen;padding-left:1.2em;font-weight:bold;text-decoration:underline*/">Description</h3>
                            <div id="ActivityDescriptionDetails" style="padding:.2em 1.2em;" >
                            </div>
                        </div>
                        <br />
                        <label id="DietaryChoiceLabel" for="DietaryChoice">Dietary Restrictions</label>
                        <select id="DietaryChoice" >
                            <option>None</option>
                        </select>
                        <br />
                        <label for="tbComments">Additional Comments</label>
                        <textarea id="tbComments" placeholder="List any comments you may have here" maxlength="255"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div id="contactSubmit" class="table submitContainer" style="display: block;">
            <div class="tableRow">
                <div class="submitContainerLeftCol tableCell top left">
                    <span class="requiredLabel">* Required Field</span>
                </div>
                <div class="submitContainerRightCol tableCell">
                <span class="submitButtonContainer">
                    <span class="buttonStandard orange inputButton" style="background: transparent; border-radius: 0px;">
                        <input type="button" value="Register" onclick="DoSubmit()"  class="buttonStandard orange inputButton button" />
                    </span>
                </span>
                </div>
            </div>
        </div>
    </div>
    <!--[if lte IE 9]>
    <script>
        jQuery.support.cors = true;
    </script>
    <![endif]-->
    <script>
        var conventionId = "a1t4F000000Ciqq"; //This is the 2018 Convention ID in Salesforce
        var conventionEndPoint = "https://healthgrades--qa.cs93.my.salesforce.com/services/apexrest/Convention/Details"; //= "<REPLACE WITH DETAILS END POINT>";
        var registrationEndPoint = "https://healthgrades--qa.cs93.my.salesforce.com/services/apexrest/Convention/Registration"; //= "<REPLACE WITH REGISTRATION END POINT>";
        var activities;
        var activityDetails = {};
        var activityChoiceOverride = "a1s400000044k0T"; // This is the 2018 Convention Activity ID in Salesforce
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        jQuery(document).ready(function() {
            jQuery("#ActivityDescription").hide();
            var conventionParams = {};
            if (conventionId !== undefined && conventionId != null) {
                conventionParams = {
                    "CId": conventionId
                };
            }
            jQuery.ajax({
                method: 'GET',
                url: conventionEndPoint,
                datatype: 'json',
                data: conventionParams
            }).then(function(data) {
                jQuery("#loadingData").hide();
                if (data.IsSuccess) {
                    jQuery("#conventionMessage").hide();
                    jQuery("#contactInformation").show();
                    jQuery("#contactSubmit").show();
                    conventionId = data.Convention.Id;
                    activities = data.Convention.Convention_Activities__r.records;
                    jQuery(activities).each(function(i) {
                        console.log(activities[i]);
                        var ou = activities[i].Name;
                        var id = activities[i].Id;
                        //var desc = activities[i].Description__c;
                        activityDetails[id] = activities[i];
                        if (activityChoiceOverride != null && (activityChoiceOverride == id || id.indexOf(activityChoiceOverride) == 0)) {
                            jQuery("#ActivityChoice").append("<option value=" + id + " selected>" + ou + "</option>");
                        } else {
                            jQuery("#ActivityChoice").append("<option value=" + id + ">" + ou + "</option>");
                        }
                    });
                    var dietary = data.DietaryNeeds;
                    jQuery(dietary).each(function(i) {
                        var ou = dietary[i];
                        jQuery("#DietaryChoice").append("<option>" + ou + "</option>");
                    });
                    jQuery("#ActivityChoice").change(function() {
                        var sel = jQuery("#ActivityChoice").val();
                        var deets = activityDetails[sel];
                        if (deets === undefined || deets == null) {
                            jQuery("#ActivityDescription").hide();
                        } else {
                            jQuery("#ActivityDescription").show();
                            var nm = deets.Name;
                            var start = new Date(deets.Activity_Start_Date__c);
                            var end = new Date(deets.Activity_End_Date__c);
                            jQuery("#ActivityDescriptionHeader").text(nm + " (" + start.toString() + ' - ' + end.toString() + ")");
                            jQuery("#ActivityDescriptionDetails").html(deets.Description__c);
                        }
                    });
                    if (activityChoiceOverride != null) {
                        jQuery("#ActivityChoice").trigger("change");
                    }
                    try {
                        var conventionStartDate = new Date(data.Convention.Start_Date__c);
                        var conventionEndDate = new Date(data.Convention.End_Date__c);
                        var conventionLocation = data.Convention.Short_Location_Summary__c;
                        if (conventionLocation === undefined || conventionLocation == null) conventionLocation = "";
                        jQuery("#locationAndDate").html("<strong>" + monthNames[conventionStartDate.getMonth()] + " " + conventionStartDate.getDate() + " to " + monthNames[conventionEndDate.getMonth()] + " " + conventionEndDate.getDate() + ", " + conventionEndDate.getFullYear() + ". " + conventionLocation + "</strong>");
                    } catch (eLocation) {
                        console.log(elocation);
                    }
                    try {
                        var contactUs = data.Convention.Contact_Us_Link__c;
                        if (!(contactUs === undefined || contactUs == null)) {
                            jQuery("#contactUs").html(contactUs);
                        }
                    } catch (eContactUs) {
                        console.log(eContactUs);
                    }
                    try {
                        var mainHeaderImage = data.Convention.Logo_URL__c;
                        if (!(mainHeaderImage === undefined || mainHeaderImage == null)) {
                            jQuery("#mainHeaderImage").attr("src", mainHeaderImage);
                        }
                    } catch (eMainImage) {
                        console.log(eMainImage);
                    }
                } else {
                    jQuery("#conventionMessage").text(data.Message);
                }
            }, function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            });
        });
        function DoSubmit() {
            var isBelowIE10 = (isIE() && isIE() <= 9);
            var isValid = false;
            if (isBelowIE10) {
                isValid = true;
            } else {
                isValid = (jQuery('#tbFirstName')[0].checkValidity() && jQuery('#tbLastName')[0].checkValidity() && jQuery('#tbEmailInput')[0].checkValidity() && jQuery('#tbOrganization')[0].checkValidity() && jQuery('#tbTitle')[0].checkValidity() && jQuery('#tbAddress1')[0].checkValidity() && jQuery('#tbCity')[0].checkValidity() && jQuery('#tbState')[0].checkValidity() && jQuery('#tbZip')[0].checkValidity() && jQuery('#tbPhone')[0].checkValidity() && (jQuery('#ActivityChoice')[0].checkValidity()));
            }
            if (isValid) {
                var sel = jQuery("#ActivityChoice").val();
                var deets = activityDetails[sel];
                if (deets === undefined || deets == null || deets == "") { //alreadyRegistered
                    alert("Please select an activity before registering"); //possible that the override choice isn't available
                } else {
                    var params = {
                        "CId": conventionId,
                        "AId": sel,
                        "FN": jQuery('#tbFirstName').val(),
                        "LN": jQuery('#tbLastName').val(),
                        "E": jQuery('#tbEmailInput').val(),
                        "O": jQuery('#tbOrganization').val(),
                        "T": jQuery('#tbTitle').val(),
                        "A1": jQuery('#tbAddress1').val(),
                        "A2": jQuery('#tbAddress2').val(),
                        "C": jQuery('#tbCity').val(),
                        "S": jQuery('#tbState').val(),
                        "Z": jQuery('#tbZip').val(),
                        "P": jQuery('#tbPhone').val(),
                        "D": jQuery('#DietaryChoice').val(),
                        "CO": jQuery('#tbComments').val()
                    };
                    jQuery.ajax({
                        method: 'GET',
                        url: registrationEndPoint,
                        datatype: 'json',
                        data: params
                    }).then(function(data) {
                        jQuery('#conventionWait').show();
                        jQuery("#contactInformation").hide();
                        jQuery("#contactSubmit").hide();
                        if (data.IsSuccess) {
                            window.location.href = '/thank-you';
                        } else {
                            jQuery("#conventionMessage").show();
                            jQuery("#conventionMessage").html(data.Message);
                        }
                    }).fail(function() {
                        alert("Failed To Register");
                    });
                }
            } else { //failed validation
                alert("Please fill out all of the required fields before continuing to register.");
            }
        }
        function isIE() {
            var myNav = navigator.userAgent.toLowerCase();
            return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
        }
    </script></code>






</body>
</html>