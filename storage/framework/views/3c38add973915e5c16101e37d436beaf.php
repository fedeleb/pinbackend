<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <p><strong>Name:</strong> <?php echo e($data['firstName']); ?> <?php echo e($data['lastName']); ?></p>
    <p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
    <p><strong>Phone Number:</strong> <?php echo e($data['phoneNumber']); ?></p>
    <p><strong>Topic:</strong> <?php echo e($data['topic']); ?></p>
    <p><strong>Message:</strong> <?php echo e($data['message']); ?></p>
</body>
</html>
<?php /**PATH /var/www/html/practica/resources/views/emails/contact.blade.php ENDPATH**/ ?>