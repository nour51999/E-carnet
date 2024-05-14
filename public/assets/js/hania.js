function checkAge() {
    var birthdate = document.getElementById('birthdate').value;
    var today = new Date();
    var selectedDate = new Date(birthdate);
    var age = today.getFullYear() - selectedDate.getFullYear();
    var monthDiff = today.getMonth() - selectedDate.getMonth();
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < selectedDate.getDate())) {
      age--;
    }

    if (6<age < 18) {
      alert("You must be 18 years or older to proceed.");
      return false;
    }

    return true;
  }