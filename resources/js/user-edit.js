// user-edit.js

function openEditModal(userId) {
   
    $('#editModal').modal('show');
}

$('#editForm').submit(function(event) {
    event.preventDefault();
    
  
    var formData = $(this).serialize();

    $.ajax({
        url: $(this).attr('action'),
        method: $(this).attr('method'),
        data: formData,
        success: function(response) {
          
            console.log('User data updated successfully:', response);
        },
        error: function(xhr, status, error) {
            console.error('Error updating user data:', error);
        }
    });
});
