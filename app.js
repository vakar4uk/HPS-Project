// ===============================
// SHOW/HIDE notification's message
var toggleNotification = document.getElementsByClassName("hide-show-btn");
var isVisible = true;
for(var i = 0; i < toggleNotification.length; i++) {
    toggleNotification[i].addEventListener("click", function() {
        if(isVisible) {
            $('#notification-message').slideUp('slow');
            document.getElementById('toggle-notification').classList.remove('fa-chevron-up');
            document.getElementById('toggle-notification').classList.add('fa-chevron-down');
            isVisible = false;
        } else {
            $('#notification-message').slideDown('slow');
            document.getElementById('toggle-notification').classList.remove('fa-chevron-down');
            document.getElementById('toggle-notification').classList.add('fa-chevron-up');                
            isVisible = true;
        }
        
    });
}
// SHOW/HIDE notification's message
// ===============================