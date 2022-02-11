<?php ?><form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" id="meeting_update_form">
    <div class="rendered-form">
        <div>
            <label for="select-1644380777485" class="formbuilder-select-label">Reason For Update</label>
            <select name="select-1644380777485" id="update-reason">
                <option disabled="null" selected="null">select</option>
                <option value="reason-new" id="select-1644380777485-0">New Meeting</option>
                <option value="reason-change" id="select-1644380777485-1">Change Existing Meeting</option>
                <option value="reason-close" id="select-1644380777485-2">Close Meeting</option>
                <option value="reason-other" id="select-1644380777485-3">Other</option>
            </select>
        </div>
        <div id="meeting-selector">
            <select class="select2-ajax" id="meeting-searcher">
                <option></option>
            </select>
        </div>
        <div id="other-reason">
            <label for="text-1644380729877">Other Reason</label>
            <input type="text" name="text-1644380729877" id="text-1644380729877">
        </div>
        <div>
            <label for="text-1644380826512">Group Name</label>
            <input type="text" name="text-1644380826512" id="meeting_name">
        </div>
        <div>
            <label for="day_of_the_week" class="formbuilder-checkbox-group-label">Group Meets On Which Days<span class="formbuilder-required">*</span></label>
            <ul style="list-style-type:none;" id="day_of_the_week">
                <li>
                    <input name="Sunday" id="weekday-0" value="Sunday" type="checkbox">
                    <label for="weekday-0">Sunday</label>
                </li>
                <li>
                    <input name="Monday" id="weekday-1" value="Monday" type="checkbox">
                    <label for="weekday-1">Monday</label>
                </li>
                <li>
                    <input name="Tuesday" id="weekday-2" value="Tuesday" type="checkbox">
                    <label for="weekday-2">Tuesday</label>
                </li>
                <li>
                    <input name="Wednesday" id="weekday-3" value="Wednesday" type="checkbox">
                    <label for="weekday-3">Wednesday</label>
                </li>
                <li>
                    <input name="Thursday" id="weekday-4" value="Thursday" type="checkbox">
                    <label for="weekday-4">Thursday</label>
                </li>
                <li>
                    <input name="Friday" id="weekday-5" value="Friday" type="checkbox">
                    <label for="weekday-5">Friday</label>
                </li>
                <li>
                    <input name="Saturday" id="weekday-6" value="Saturday" type="checkbox">
                    <label for="weekday-6">Saturday</label>
                </li>
            </ul>
        </div>
        <div>
            <label for="start_time" class="formbuilder-number-label">Start Time<span class="formbuilder-required">*</span></label>
            <input type="text" name="start_time" id="start_time" required="required" aria-required="true">
        </div>
        <div>
            <label for="duration_time">Duration</label>
            <input type="text" name="duration_time" id="duration_time" required="required" aria-required="true">
        </div>
        <div>
            <label for="select-1644380962171" class="formbuilder-select-label">Time Zone</label>
            <select name="select-1644380962171" id="time_zone">
                <option value="Australia/Adelaide">Australian Central Time (Adelaide)</option>
                <option value="Australia/Darwin">Australian Central Time (Darwin)</option>
                <option value="Australia/Eucla">Australian Central Western Time (Eucla)</option>
                <option value="Australia/Brisbane">Australian Eastern Time (Brisbane)</option>
                <option value="Australia/Sydney">Australian Eastern Time (Sydney)</option>
                <option value="Australia/Perth">Australian Western Time (Perth)</option>
            </select>
        </div>
        <div>
            <label for="select-1644380979730" class="formbuilder-select-label">Committee</label>
            <select name="select-1644380979730" id="service_area">
                <option value="Sydney Metro North" selected="selected">Sydney Metro North</option>
                <option value="Sydney Metro South">Sydney Metro South</option>
                <option value="Sydney Metro East">Sydney Metro East</option>
                <option value="Sydney Metro West">Sydney Metro West</option>
                <option value="Blue Mountains">Blue Mountains</option>
                <option value="NSW Armidale">NSW Armidale</option>
                <option value="NSW Coffs Coast">NSW Coffs Coast</option>
                <option value="NSW New England ">NSW New England </option>
                <option value="NSW Port Macquarie">NSW Port Macquarie</option>
                <option value="NSW Far North Coast">NSW Far North Coast</option>
                <option value="NSW North Coast">NSW North Coast</option>
                <option value="NSW Central Coast">NSW Central Coast</option>
                <option value="NSW South Coast">NSW South Coast</option>
                <option value="NSW Newcastle - Hunter Valley">NSW Newcastle - Hunter Valley</option>
                <option value="Northern Territory">Northern Territory</option>
                <option value="northern-australia-qld-and-nt-excluding-gold-coast-and-sunshine-coast">Northern Australia
                    (Qld and NT Excluding Gold Coast) and Sunshine Coast</option>
                <option value="Sunshine Coast">Sunshine Coast</option>
                <option value="Gold Coast">Gold Coast</option>
                <option value="Canberra and ACT">Canberra and ACT</option>
                <option value="South Australia">South Australia</option>
                <option value="Tasmania">Tasmania</option>
                <option value="Victoria">Victoria</option>
                <option value="Western Australia">Western Australia</option>
                <option value="Western Australia Country">Western Australia Country</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div>
            <label for="text-1644381018555">Location (eg: a building name)</label>
            <input type="text" id="location_text">
        </div>
        <div>
            <label for="text-1644381025138">Street Address</label>
            <input type="text" id="location_street">
        </div>
        <div>
            <label for="text-1644381046194">Extra Location Info (eg: Near the park)</label>
            <input type="text" id="location_info">
        </div>
        <div>
            <label for="text-1644381061329">City/Town/Suburb</label>
            <input type="text" id="location_municipality">
        </div>
        <div>
            <label for="text-1644381070296">State</label>
            <input type="text" id="location_province">
        </div>
        <div>
            <label for="number-1644381080899" class="formbuilder-number-label">Postcode</label>
            <input type="number" id="location_postal_code_1">
        </div>
        <div id="formats">
            <label for="format-group">Meeting Format</label>
            <ul style="list-style-type:none;"">
        </ul>
    </div>
    <div>
        <label for=" text-1644381196060">Online Meeting Link</label>
                <input type="text" name="text-1644381196060" id="text-1644381196060">
        </div>
        <div>
            <label for="date-1644381216519" class="formbuilder-date-label">Date Change Required<span class="formbuilder-required">*</span></label>
            <input type="date" name="date-1644381216519" id="date-1644381216519" required="required" aria-required="true">
        </div>
        <div>
            <label for="text-1644381268053">First Name<span class="formbuilder-required">*</span></label>
            <input type="text" name="text-1644381268053" id="text-1644381268053" required="required" aria-required="true">
        </div>
        <div>
            <label for="text-1644381277924">Last Name<span class="formbuilder-required">*</span></label>
            <input type="text" name="text-1644381277924" id="text-1644381277924" required="required" aria-required="true">
        </div>
        <div>
            <label for="text-1644381293991">Email Address<span class="formbuilder-required">*</span></label>
            <input type="text" name="text-1644381293991" id="text-1644381293991" required="required" aria-required="true">
        </div>
        <div>
            <label for="checkbox-group-1644381304426" class="formbuilder-checkbox-group-label">Add this email as contact
                address for the group</label>
            <div class="checkbox-group">
                <div>
                    <input name="checkbox-group-1644381304426[]" id="checkbox-group-1644381304426-0" value="yes" type="checkbox" checked="checked">
                    <label for="checkbox-group-1644381304426-0">Yes</label>
                </div>
            </div>
        </div>
        <div>
            <label for="number-1644381352355" class="formbuilder-number-label">Contact Number (Confidential)</label>
            <input type="number" name="number-1644381352355" id="number-1644381352355">
        </div>
        <div>
            <label for="radio-group-1644381392768" class="formbuilder-radio-group-label">Are you a?</label>
            <div class="radio-group">
                <div>
                    <input name="radio-group-1644381392768" id="radio-group-1644381392768-0" value="option-1" type="radio" checked="checked">
                    <label for="radio-group-1644381392768-0">Group Member</label>
                </div>
                <div>
                    <input name="radio-group-1644381392768" id="radio-group-1644381392768-1" value="option-2" type="radio">
                    <label for="radio-group-1644381392768-1">Option 2</label>
                </div>
                <div>
                    <input name="radio-group-1644381392768" id="radio-group-1644381392768-2" value="option-3" type="radio">
                    <label for="radio-group-1644381392768-2">Option 3</label>
                </div>
            </div>
        </div>
        <div>
            <label for="text-1644381354649">Additional Info</label>
            <input type="text" name="text-1644381354649" id="text-1644381354649">
        </div>
        <div>
            <label for="select-1644381474827" class="formbuilder-select-label">Starter Kit Required</label>
            <select name="select-1644381474827" id="select-1644381474827">
                <option value="yes" selected="true" id="select-1644381474827-0">Yes</option>
                <option value="no" id="select-1644381474827-1">No</option>
            </select>
        </div>
        <div>
            <label for="text-1644381513895">Starter Kit Postal Address</label>
            <input type="text" name="text-1644381513895" id="text-1644381513895">
        </div>
    </div>
    <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Submit Form"></p>
</form>