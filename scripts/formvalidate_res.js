	function confirmDelete() {
		return confirm('Are you sure you want to remove this resident?');
	}
	function validateForm(form) {
		if (form.rid.value=="") {
			alert('Please enter CEDULA NUMBER of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (/^[^0-9]+$/.test(form.rid.value)) {
			alert('Please enter exactly 8 numeric characters in CEDULA NUMBER.');
			form.rid.focus();
			return false;
		}
		if (form.lastname.value=="") {
			alert('Please enter LAST NAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.lastname.value)) {
			alert('Numeric characters and symbols are not allowed in LAST NAME.');
			form.lastname.focus();
			return false;
		}
		if (form.firstname.value=="") {
			alert('Please enter FIRST NAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.firstname.value)) {
			alert('Numeric characters and symbols are not allowed in FIRST NAME.');
			form.firstname.focus();
			return false;
		}
		if (form.middlename.value=="") {
			alert('Please enter MIDDLENAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.middlename.value)) {
			alert('Numeric characters and symbols are not allowed in MIDDLE NAME.');
			form.middlename.focus();
			return false;
		}
		if (form.gender.selectedIndex == 0) {
			alert('Please select GENDER of resident to be added.');
			form.gender.focus();
			return false;
		}
		if (form.stat.selectedIndex == 0) {
			alert('Please select CIVIL STATUS of resident to be added.');
			form.stat.focus();
			return false;
		}
		if (form.housenum.value=="") {
			alert('Please enter HOUSE NUMBER of resident to be added.');
			form.housenum.focus();
			return false;
		}	
		if (form.streetname.value=="") {
			alert('Please enter STREET NAME of resident to be added.');
			form.streetname.focus();
			return false;
		}	
		if (form.brgy.value=="") {
			alert('Please enter BARANGAY of resident to be added.');
			form.brgy.focus();
			return false;
		}	
		if (form.district.value=="") {
			alert('Please enter DISTRICT of resident to be added.');
			form.district.focus();
			return false;
		}	
		if (form.city.value=="") {
			alert('Please enter CITY of resident to be added.');
			form.city.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.city.value)) {
			alert('Numeric characters and symbols are not allowed in CITY.');
			form.city.focus();
			return false;
		}	
		if (form.birthmonth.selectedIndex == 0) {
			alert('Please select BIRTH MONTH of resident to be added.');
			form.birthmonth.focus();
			return false;
		}	
		if (form.birthday.selectedIndex == 0) {
			alert('Please select BIRTH DAY of resident to be added.');
			form.birthmonth.focus();
			return false;
		}	
		if (form.birthyear.selectedIndex == 0) {
			alert('Please select BIRTH YEAR of resident to be added.');
			form.birthmonth.focus();
			return false;
		}	
		return true;
	}