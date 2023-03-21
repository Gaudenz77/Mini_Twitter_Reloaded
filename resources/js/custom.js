
/* toggle start---------------- */

/* function toggleDarkMode() {
    alert('Dark Mode');
    document.body.classList.toggle('dark-mode');
    } */


// Listen for click events on all reply buttons
document.querySelectorAll('.reply-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        // Get the ID of the message being replied to
        const messageId = btn.getAttribute('data-message-id');
        // Set the parent ID of the reply form to the message ID
        document.querySelector('#parent-id').value = messageId;
        // Insert the reply form below the message
        const message = btn.parentNode;
        message.appendChild(document.querySelector('#reply-form'));
        // Show the reply form
        document.querySelector('#reply-form').style.display = 'block';
    });
});

// Listen for click events on the cancel button
document.querySelector('#cancel-btn').addEventListener('click', () => {
    // Hide the reply form
    document.querySelector('#reply-form').style.display = 'none';
});

/* -------------------------------- */