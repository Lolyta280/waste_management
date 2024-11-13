document.addEventListener("DOMContentLoaded", function() {
    const statusElements = document.querySelectorAll('.status-update');
    statusElements.forEach(el => {
        el.addEventListener('click', function() {
            // AJAX call to update status
            fetch(`update_status.php?id=${el.dataset.id}`, { method: 'POST' })
                .then(response => response.json())
                .then(data => alert('Status updated successfully.'));
        });
    });
});
