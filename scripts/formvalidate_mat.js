		function confirmDelete() {
			return confirm('Are you sure you want to remove this material?');
		}
		function validateForm(form) {
		if (form.name.value=="") {
			alert('Please enter NAME of material to be added.');
			form.name.focus();
			return false;
		}	
		if (form.amt.value=="") {
			alert('Please enter CURRENT AMOUNT of material to be added.');
			form.lastname.focus();
			return false;
		}	
		if (form.pic.value=="") {
			alert('Please enter NAME OF PERSON/COMMITTEE IN CHARGE OF MATERIAL to be added.');
			form.pic.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.pic.value)) {
			alert('Numeric characters and symbols are not allowed in NAME OF PERSON/COMMITTEE IN CHARGE OF ASSET.');
			form.pic.focus();
			return false;
		}
		if (form.pic_contact.value=="") {
			alert('Please enter CONTACT OF PERSON/COMMITTEE IN CHARGE OF MATERIAL to be added.');
			form.pic_contact.focus();
			return false;
		}		
		return true;
	}