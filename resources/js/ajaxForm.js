$.ajax({
    type: 'POST',
    url: '/contacts',
    data: formData, // Assuming formData is already prepared in your frontend
    dataType: 'json', // Ensure you expect JSON back from the server
    success: function(response) {
        console.log('Form submitted successfully:', response.message);
        alert('Form submitted successfully');
    },
    error: function(jqXHR) {
        try {
            const response = jqXHR.responseJSON;
            if (response.errors) {
                console.error('Error submitting form:', response.errors);
                alert('Error: ' + response.errors.join(', '));
            } else {
                console.error('Unexpected error format:', response);
                alert('An unexpected error occurred.');
            }
        } catch (e) {
            console.error('Failed to parse error response:', e);
            alert('An error occurred while processing your request.');
        }
    }
});
