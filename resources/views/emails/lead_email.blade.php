<!-- resources/views/data-view.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lead Data</title>
</head>
<body>
    <h1>Lead Submission Details</h1>

    <p><strong>First Name:</strong> {{ $formData['first_name'] ?? 'N/A' }}</p>
    <p><strong>Last Name:</strong> {{ $formData['last_name'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] ?? 'N/A' }}</p>
    <p><strong>Phone:</strong> {{ $formData['phone'] ?? 'N/A' }}</p>
    <p><strong>Comment:</strong> {{ $formData['comment'] ?? 'N/A' }}</p>
</body>
</html>
