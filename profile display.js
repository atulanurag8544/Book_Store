var profileData = null;

// Check if the profileData variable is defined.
if (typeof profileData !== 'undefined' && profileData !== null) {
    var profileDisplay = document.getElementById('profileData');

    var firstName = profileData.firstName || '';
    var lastName = profileData.lastName || '';
    var email = profileData.email || '';

    profileDisplay.innerHTML = '<p>First Name: ' + firstName + '</p>' +
                                '<p>Last Name: ' + lastName + '</p>' +
                                '<p>Email: ' + email + '</p>';
}