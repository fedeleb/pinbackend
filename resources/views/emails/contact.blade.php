<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $data['firstName'] }} {{ $data['lastName'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $data['phoneNumber'] }}</p>
    <p><strong>Topic:</strong> {{ $data['topic'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
