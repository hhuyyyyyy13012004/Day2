<?php
if (session_id() === '') session_start();

class Customer {
    public $id, $username, $password, $fullname, $address, $phone, $gender, $birthday;

    function __construct($id, $username, $password, $fullname, $address, $phone, $gender, $birthday) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->phone = $phone;
        $this->gender = $gender;
        $this->birthday = $birthday;
    }
}

if (!isset($_SESSION['customers'])) $_SESSION['customers'] = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $c = new Customer(
        $_POST['id'], $_POST['username'], $_POST['password'],
        $_POST['fullname'], $_POST['address'], $_POST['phone'],
        $_POST['gender'], $_POST['birthday']
    );
    $_SESSION['customers'][] = $c;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Customer Info</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .container { display: flex; gap: 40px; }
        .image-area img { width: 300px; height: 300px; object-fit: cover; background: #ccc; }
        .info-area { max-width: 500px; }
        .info-area h2 { margin-top: 0; }
        .info-group { margin-bottom: 10px; }
        .info-group strong { width: 120px; display: inline-block; color: #555; }
        .card { border: 1px solid #ddd; padding: 20px; margin-bottom: 30px; border-radius: 8px; }
        form input, select { margin-bottom: 10px; display: block; width: 300px; padding: 5px; }
        .add-form { margin-bottom: 40px; }
    </style>
</head>
<body>

<h1>Add New Customer</h1>
<form class="add-form" method="POST">
    <input name="id" placeholder="Customer ID" required>
    <input name="username" placeholder="Username" required>
    <input name="password" placeholder="Password" type="password" required>
    <input name="fullname" placeholder="Full Name" required>
    <input name="address" placeholder="Address">
    <input name="phone" placeholder="Phone">
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <input name="birthday" type="date">
    <input type="submit" value="Add Customer">
</form>

<h1>Customer List</h1>

<?php foreach ($_SESSION['customers'] as $c): ?>
<div class="card">
    <div class="container">
        <div class="image-area">
            <img src="https://via.placeholder.com/300x300?text=Customer+Photo" alt="Customer Photo">
        </div>
        <div class="info-area">
            <h2><?= $c->fullname ?></h2>
            <div class="info-group"><strong>ID:</strong> <?= $c->id ?></div>
            <div class="info-group"><strong>Username:</strong> <?= $c->username ?></div>
            <div class="info-group"><strong>Password:</strong> <?= $c->password ?></div>
            <div class="info-group"><strong>Address:</strong> <?= $c->address ?></div>
            <div class="info-group"><strong>Phone:</strong> <?= $c->phone ?></div>
            <div class="info-group"><strong>Gender:</strong> <?= $c->gender ?></div>
            <div class="info-group"><strong>Birthday:</strong> <?= $c->birthday ?></div>
        </div>
    </div>
</div>
<?php endforeach; ?>

</body>
</html>
