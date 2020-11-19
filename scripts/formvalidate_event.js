function confirmDelete() {
		return confirm('Are you sure you want to remove this resident?');
	}
function validateForm(form) {
		if (form.name.value=="") {
			alert('Please enter NAME of event to be added.');
			form.name.focus();
			return false;
		}	
		if (form.start_month.selectedIndex == 0) {
			alert('Please enter START MONTH of event to be added.');
			form.start_month.focus();
			return false;
		}	
		if (form.start_day.selectedIndex == 0) {
			alert('Please enter START DAY of event to be added.');
			form.start_day.focus();
			return false;
		}	
		if (form.start_year.selectedIndex == 0) {
			alert('Please enter START YEAR of event to be added.');
			form.start_year.focus();
			return false;
		}	
		if (form.start_hour.selectedIndex == 0) {
			alert('Please enter START HOUR of event to be added.');
			form.start_hr.focus();
			return false;
		}	
		if (form.start_min.selectedIndex == 0) {
			alert('Please enter START MINUTE of event to be added.');
			form.start_min.focus();
			return false;
		}	
		if (form.end_month.selectedIndex == 0) {
			alert('Please enter END MONTH of event to be added.');
			form.end_month.focus();
			return false;
		}	
		if (form.end_month.selectedIndex == 0) {
			alert('Please enter END MINUTE of event to be added.');
			form.end_min.focus();
			return false;
		}	
		if (form.end_month.selectedIndex == 0) {
			alert('Please enter END AM/PM of event to be added.');
			form.end_apm.focus();
			return false;
		}	
		if (form.venue.value=="") {
			alert('Please select VENUE of event to be added.');
			form.venue.focus();
			return false;
		}	
		if (form.person.value=="") {
			alert('Please select NAME OF PERSON/COMMITTEE IN CHARGE of event to be added.');
			form.person.focus();
			return false;
		}	
		return true;
	}